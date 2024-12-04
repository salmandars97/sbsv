<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Crmauth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Crm_Auth_model');
        $this->load->Model('Crm_model1');
        $this->load->Model('Crm_model');
        $this->load->model('file');
        $this->load->helper('security');
        if(isset($_POST)) {
            foreach($_POST as $key => $value) {
                if(isset($_POST[$key])) {
                    $_POST[$key] = $this->security->xss_clean($value);
                }
            }
        }
        if(isset($_GET)) {
            foreach($_GET as $key => $value) {
                if(isset($_GET[$key])) {
                    $_GET[$key] = $this->security->xss_clean($value);
                }
            }
        }
    }

    public function index()
    {
        // $this->load->view('crmauth/partials/header');
        $this->load->view('crmauth/login');
        // $this->load->view('crmauth/partials/footer');
    }

    public function display_clients()
    {
        if($_SESSION['clients_type'] == 'aipp') {
            if(isset($_GET['id'])) {
                $data['display_clients'] =$this->Crm_model1->display_client_details_w($_GET['id']);
                $data['display_uplo'] = $this->Crm_model1->display_uplo_w($_GET['id']);
            } else {
                $data['display_clients'] =$this->Crm_model1->display_client_details();
                $data['display_uplo'] = $this->Crm_model1->display_uplo();
            }
        } else {
            if(isset($_GET['id'])) {
                $data['display_clients'] =$this->Crm_model->display_client_details_w($_GET['id']);
                $data['display_uplo'] = $this->Crm_model->display_uplo_w($_GET['id']);
            } else {
                $data['display_clients'] =$this->Crm_model->display_client_details();
                $data['display_uplo'] = $this->Crm_model->display_uplo();
            }
        }
        $this->Crm_Auth_model->isLoggedIn();
        $data['title'] = 'Clients';
        $this->load->view('crmauth/partials/header');
        $this->load->view('crmauth/display_clients', $data);
        $this->load->view('crmauth/partials/footer');
    }

    public function delete_client()
    {
        $this->Crm_Auth_model->isLoggedIn();
        $id =  $this->input->post('id');
        $this->db->where('id', $id);
        if($_SESSION['clients_type'] == 'aipp') {
            $this->db->delete('crm1');
        } else {
            $this->db->delete('crm');
        }
        redirect(base_url().'Crmauth/display_clients', 'refresh');
    }

    public function assign_leads()
    {
        $this->Crm_Auth_model->isLoggedIn();
        $data['title'] = 'Add Client Data';
        $this->load->view('crmauth/partials/header');
        $this->load->view('admin/Pending Leads', $data);
        $this->load->view('crmauth/partials/footer');
    }

    public function add_client()
    {
        $this->Crm_Auth_model->isLoggedIn();
        $data['title'] = 'Add Client Data';
        $this->load->view('crmauth/partials/header');
        $this->load->view('crmauth/add_client', $data);
        $this->load->view('crmauth/partials/footer');
    }

    public function added_client()
    {
        $this->Crm_Auth_model->isLoggedIn();

        $id =$this->input->post('id');
        $user_name =$this->input->post('user_name');
        $u_email =$this->input->post('u_email');
        $phone_no =$this->input->post('phone_no');
        $immigration_country =$this->input->post('immigration_country');
        $payment_status =$this->input->post('payment_status');
        $current_stage =$this->input->post('current_stage');
        $user_password =$this->input->post('user_password');
        $file_no = $this->input->post('file_no');
        $job_skills = $this->input->post('job_skills');
        $total_payment = $this->input->post('total_payment');
        $visible = 1;
        $password = sha1($user_password);

        if($user_name != null && $u_email != null && $phone_no != null && $immigration_country != null && $payment_status != null && $current_stage != null && $password != null && $visible != null) {
            $data_ary = array(
                'id' =>$id,
                'user_name' =>$user_name,
                'u_email' =>$u_email,
                'user_password' =>$password,
                'phone_no' =>$phone_no,
                'immigration_country' =>$immigration_country,
                'payment_status' =>$payment_status,
                'current_stage' =>$current_stage,
                'doc_file' =>"",
                'file_no' => $file_no,
                'job_skills' => $job_skills,
                'total_payment' => $total_payment,
                'visible' =>$visible,
            );
            if($_SESSION['clients_type'] == 'aipp') {
                $result =$this->Crm_model1->added_client($data_ary);
            } else {
                $result =$this->Crm_model->added_client($data_ary);
            }
            redirect(base_url().'Crmauth/display_clients?msg=as', 'refresh');
        } else {
            redirect(base_url().'Crmauth/display_clients?msg=afe', 'refresh');
        }
    }

    public function update_client()
    {
        $this->Crm_Auth_model->isLoggedIn();
        $id =$this->input->get('id');
        if($_SESSION['clients_type'] == 'aipp') {
            $data['clients'] =$this->Crm_model1->get_client_detail($id);
        } else {
            $data['clients'] =$this->Crm_model->get_client_detail($id);
        }
        $data['title'] = 'Display Clients';
        $this->load->view('crmauth/partials/header', $data);
        $this->load->view('crmauth/update_client.php', $data);
        $this->load->view('crmauth/partials/footer');
    }

    public function update_client_password()
    {
        $this->Crm_Auth_model->isLoggedIn();
        $id =$this->input->get('id');
        if($_SESSION['clients_type'] == 'aipp') {
            $data['clients'] =$this->Crm_model1->get_client_detail($id);
        } else {
            $data['clients'] =$this->Crm_model->get_client_detail($id);
        }

        $data['title'] = 'Display Clients';
        $this->load->view('crmauth/partials/header', $data);
        $this->load->view('crmauth/update_client_password.php', $data);
        $this->load->view('crmauth/partials/footer');
    }

    public function updated_client()
    {
        $id = $this->input->post('id');
        $user_name = $this->input->post('user_name');
        $email = $this->input->post('u_email');
        $phone_no = $this->input->post('phone_no');
        $immigration_country = $this->input->post('immigration_country');
        //$user_password = $this->input->post('user_password');
        $payment_status = $this->input->post('payment_status');
        $current_stage = $this->input->post('current_stage');
        $file_no = $this->input->post('file_no');
        $job_skills = $this->input->post('job_skills');
        $total_payment = $this->input->post('total_payment');
        $visible = 1;

        $data_ary = array(
        'id' => $id,
        'user_name' => $user_name,
        'u_email' => $email,
        'phone_no' => $phone_no,
        'immigration_country' => $immigration_country,
        'payment_status' => $payment_status,
        'current_stage' => $current_stage,
        'file_no' => $file_no,
        'job_skills' => $job_skills,
        'total_payment' => $total_payment,
        'visible' => $visible
        );

        if($_SESSION['clients_type'] == 'aipp') {
            $result = $this->Crm_model1->update_client_details($data_ary);
        } else {
            $result = $this->Crm_model->update_client_details($data_ary);
        }
        if($result == "1") {
            $this->session->set_flashdata('success_msg', 'Updated Client Details Successfully');
        } else {
            $this->session->set_flashdata('failure_msg', 'Failed to Update!');
        }
        redirect(base_url().'Crmauth/display_clients', 'refresh');
    }

    public function updated_client_password()
    {
        $id = $this->input->post('id');
        $user_password = $this->input->post('user_password');
        $password = sha1($user_password);

        $data_ary = array(
        'id' => $id,
        'user_password' => $password
        );

        if($_SESSION['clients_type'] == 'aipp') {
            $result = $this->Crm_model1->update_client_details($data_ary);
        } else {
            $result = $this->Crm_model->update_client_details($data_ary);
        }
        if($result == "1") {
            $this->session->set_flashdata('success_msg', 'Updated Client Details Successfully');
        } else {
            $this->session->set_flashdata('failure_msg', 'Failed to Update!');
        }
        redirect(base_url().'Crmauth/display_clients', 'refresh');
    }

    public function updateState()
    {

        $this->Crm_Auth_model->isLoggedIn();

        $id=$this->input->post('id');
        $state=$this->input->post('state');

        $data = array(
          'visible' => $state,
          );

        $this->db->where('id', $id);
        if($_SESSION['clients_type'] == 'aipp') {
            $this->db->update('crm1', $data);
        } else {
            $this->db->update('crm', $data);
        }
        redirect('Crmauth/display_clients');

    }

    public function display_document()
    {
        $this->Crm_Auth_model->isLoggedIn();
        $data['title'] = 'Display Clients';
        $this->load->view('crmauth/partials/header');
        $this->load->view('crmauth/display_doc', $data);
        $this->load->view('crmauth/partials/footer');
    }

    public function doc_uplo()
    {
        $data = array();
        // If file upload form submitted
        if($this->input->post('fileSubmit') && !empty($_FILES['files']['name'])) {
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                // File upload configuration
                $uploadPath = 'assets/upload/files/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg|txt|xls|xlsx|doc|docx|pdf|ppt|csv';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['c_id'] = $this->input->post('id');
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
            }

            if(!empty($uploadData)) {
                // Insert files data into the database
                $insert = $this->file->insert($uploadData);

                // Upload status message
                $statusMsg = $insert ? 'Files uploaded successfully.' : 'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg', $statusMsg);
            }
        }

        // Get files data from the database
        $data['files'] = $this->file->getRows();

        // Pass the files data to view
        redirect(base_url().'Crmauth/display_document?id=' . $this->input->post('id') . '&msg=as', 'refresh', $data);
    }

    public function delete_docu()
    {
        $this->Crm_Auth_model->isLoggedIn();
        $id =  $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->delete('files');
        redirect(base_url().'Crmauth/display_clients', 'refresh');

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'crmauth', 'refresh');
    }

    public function login()
    {
        $username =  $this->input->post('user_name');
        $password =  $this->input->post('user_password');
        //call the model for auth
        if($this->Crm_Auth_model->login($username, $password)) {
        } else {
            echo'something went wrong';
        }
    }
}
