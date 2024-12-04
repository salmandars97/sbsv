<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->Model('Auth_model');
        $this->load->Model('Blog_model');
        $this->load->Model('Subscriber_model');
        $this->load->Model('Leads_model');
        $this->load->Model('Contact_model');
        $this->load->Model('Consultancy_model');
        $this->load->Model('Auth_model');
        $this->load->Model('Crm_model');
        $this->load->Model('Crm_model1');
        $this->load->Model('Slider_model');
        $this->load->model('file');
        $this->load->library('email');
        $this->load->library('zip');
        $this->load->library('CKEditor');
        $this->load->library('Ckfinder');
        $this->ckeditor->basePath = base_url() . 'assets/ckeditor/';
        $this->ckeditor->config['toolbar'] = array(
            array('Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'NumberedList', 'BulletedList')
        );
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor->config['width'] = '730px';
        $this->ckeditor->config['height'] = '300px';
        //Add Ckfinder to Ckeditor
        $this->ckfinder->SetupCKEditor($this->ckeditor, '../../assets/ckfinder/');
		
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
        $this->Auth_model->isLoggedIn();

        if (isset($_SESSION['m_url']) && $_SESSION['m_url'] != '') {
            $_SESSION['m_url'] = '';
            $_SESSION['l_url'] = '';
        }
        if (isset($_SESSION['l_url']) && $_SESSION['l_url'] != '') {
            $_SESSION['m_url'] = 'y';
            redirect($_SESSION['l_url'], 'refresh');
        }

        $data['no_of_subscribers'] = $this->Subscriber_model->no_of_subscribers();
        $data['no_of_assessment'] = $this->Leads_model->no_of_assessment();
        $data['no_of_anthony_assessment'] = $this->Leads_model->no_of_selected_assessment('13');
        $data['no_of_anthony_assessment2'] = $this->Leads_model->no_of_aipp_assessment2('13');
        $data['no_of_investment_assessment'] = $this->Leads_model->no_of_investment_assessment();
        $data['no_of_r_assessment'] = $this->Leads_model->no_of_r_assessment();
        $data['no_of_pending_assessment'] = $this->Leads_model->no_of_assessment('0');
        $data['no_of_pending_aipp_assessment'] = $this->Leads_model->no_of_aipp_assessment('0');
        $data['no_of_ca_assessment'] = $this->Leads_model->no_of_ca_assessment();
        $data['no_of_ca_pending_assessment'] = $this->Leads_model->no_of_ca_assessment('0');
        $data['no_of_au_assessment'] = $this->Leads_model->no_of_au_assessment();
        $data['no_of_au_pending_assessment'] = $this->Leads_model->no_of_au_assessment('0');
        $data['web_visitors_filtert'] = $this->Leads_model->web_visitors_filter('t');
        $data['web_visitors_filterm'] = $this->Leads_model->web_visitors_filter('m');
        $data['web_visitors_filtery'] = $this->Leads_model->web_visitors_filter('y');
        $data['web_visitors_filteryy'] = $this->Leads_model->web_visitors_filter();
        $data['consultancy_pending'] = $this->Consultancy_model->get_meeting_count('0');
        $data['consultancy_rejected'] = $this->Consultancy_model->get_meeting_count('1');
        $data['consultancy_approved'] = $this->Consultancy_model->get_meeting_count('2');
        $data['consultancy_total'] = $this->Consultancy_model->get_meeting_count('*');
        $data['no_of_contact'] = $this->Contact_model->no_of_contact();
        $data['no_of_user'] = $this->Auth_model->no_of_user();
        $data['no_of_blogs'] = $this->Auth_model->no_of_blogs();
        $data['no_of_comments'] = $this->Auth_model->no_of_comments();

        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/partials/footer', $data);
    }

    public function display_clients()
    {
        if (isset($_GET['id'])) {
            $data['display_clients'] = $this->Crm_model->display_client_details_w($_GET['id']);
            $data['display_uplo'] = $this->Crm_model->display_uplo_w($_GET['id']);
        } else {
            $data['display_clients'] = $this->Crm_model->display_client_details();
            $data['display_uplo'] = $this->Crm_model->display_uplo();
        }
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Clients';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/display_clients', $data);
        $this->load->view('admin/partials/footer');
    }

    public function download_client_docs()
    {
        ini_set('display_errors', 1);
        if(isset($_POST['ZIP'])) {
            $files = array();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "osama";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT file_name FROM files where c_id = " . $_POST['cid'];
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    array_push($files, $row["file_name"]);
                }
            } else {
                echo "0 results";
            }

            $conn->close();

            $zipname = 'clients-docs'.$_POST['cid'].'.zip';
            $zip = new ZipArchive();
            $zip->open($zipname, ZipArchive::CREATE);
            foreach ($files as $file) {
                $zip->addFile($file);
            }
            $zip->close();

            header('Content-Type: application/zip');
            header('Content-disposition: attachment; filename='.$zipname);
            header('Content-Length: ' . filesize($zipname));
            readfile($zipname);
        }

        echo "<script>
function goBack() {
  window.history.back();
}
goBack();
</script>";
    }

    public function display_clients1()
    {
        if (isset($_GET['id'])) {
            $data['display_clients'] = $this->Crm_model1->display_client_details_w($_GET['id']);
            $data['display_uplo'] = $this->Crm_model1->display_uplo_w($_GET['id']);
        } else {
            $data['display_clients'] = $this->Crm_model1->display_client_details();
            $data['display_uplo'] = $this->Crm_model1->display_uplo();
        }
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Clients';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/display_clients1', $data);
        $this->load->view('admin/partials/footer');
    }

    public function send_newsletter()
    {
        //$data['display_clients'] =$this->Crm_model->display_client_details();
        //$data['display_uplo'] = $this->Crm_model->display_uplo();
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Display Clients';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/newsletter/send');
        $this->load->view('admin/partials/footer');
    }

    public function addslider()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Home Banners';
        $data['data'] = $this->Slider_model->all();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/homebanner/index', $data);
        $this->load->view('admin/partials/footer');
    }

    public function remove_slider()
    {
        if (isset($_GET['id'])) {
            if ($_GET['id'] != '') {
                $this->Slider_model->remove_image($_GET['id']);
                redirect(base_url() . 'Main/addslider', 'refresh');
            } else {
                redirect(base_url() . 'Main/addslider', 'refresh');
            }
        } else {
            redirect(base_url() . 'Main/addslider', 'refresh');
        }
    }

    public function update_slider()
    {
        $config = array(

            'upload_path' => './assets/slider',
            'allowed_types' => 'gif|jpg|png|jpeg',
            'max_size' => '5000',
            'max_width' => '6024',
            'max_height' => '6024',
            'encrypt_name' => true,
            'remove_space' => false,

        );

        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('pic')) {
            redirect(base_url() . 'Main/addslider', 'refresh');

        } else {

            $upload_data = $this->upload->data();

            $data_ary = array(
                'path' => $upload_data['file_name'],

            );

            $result = $this->Slider_model->change_image($this->input->post('id'), $upload_data['file_name']);

            redirect(base_url() . 'Main/addslider', 'refresh');
        }
    }

    public function s_news()
    {
        $this->Auth_model->isLoggedIn();
        $this->load->view('admin/newsletter/news_load');
    }

    public function test_news()
    {
        ini_set('max_execution_time', '3600'); // 1 hour
        if ($this->input->post('message') == '') {
            redirect(base_url() . 'Main/send_newsletter?msg=va', 'refresh');
        }

        $id = '';
        $text = $this->input->post('message');
        $title = $this->input->post('subject');
        $config = array(
            'upload_path' => './assets/web/img/blogs/',
            'allowed_types' => '*',
            'max_size' => '50000',
            'encrypt_name' => true,
            'remove_space' => false
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pic')) {
            $upload_data = $this->upload->data();
            $data_ary = array(
                'id' => $id,
                'text' => $text,
                'title' => $title,
                'date' => date('l jS \of F Y'),
                'pic' => $upload_data['file_name']
            );
            $result = $this->Blog_model->add_blog($data_ary);
            if ($result == "1") {
                $this->db->select_max('id');
                $query = $this->db->get('blogs');

                $subject = $this->input->post('subject');
                $message = '<img style="width:750px;display: block;margin-left: auto;margin-right: auto;" src="http://sbsv.test/assets/web/img/blogs/' . $upload_data['file_name'] . '" alt="promotion">';
                $message .= '<br><h1 style="text-align: left;font-family: sans-serif;">' . $subject . '</h1>';
                $lines = explode(PHP_EOL, $this->input->post('message'));
                $message .= '<div style="display: block;margin-left: auto;margin-right: auto;">' . implode(PHP_EOL, array_slice($lines, 0, 1)) . PHP_EOL . '</div>';
                foreach ($query->result() as $row) {
                    $message .= '<a style="background-color: #4CAF50;border:none;color:white;padding: 15px 32px;text-align: center;text-decoration: none;display: block;font-size: 16px;cursor: pointer;margin-left: auto;margin-right: auto;text-align:center;width:20%;font-family: sans-serif;background-color: #008CBA;" href="http://sbsv.test/blogs/blog?id=' . $row->id . '" target="blank">Read More</a>';
                }
                $config = [
                    'protocol' => 'smtp',
                    'smtp_host' => 'email.sbsv.test',
                    'smtp_user' => 'noreply@sbsv.test',
                    'smtp_pass' => 'Steps123!@#',
                    'smtp_crypto' => 'tls',
                    'newline' => "\r\n",
                    //REQUIRED! Notice the double quotes!
                    'smtp_port' => 25,
                    'wordwrap' => true,
                    'mailtype' => 'html'
                ];

                $list = array();
                array_push($list, 'exceedor12@hotmail.com', 'bazkhalidbaz.ak@gmail.com', 'airdan88@gmail.com');
                $query = $this->db->query("SELECT DISTINCT `subscription_email` FROM subscription where subscription_email != ''");
                $query1 = $query->result();
                foreach ($query1 as $name) {
                    array_push($list, $name->subscription_email);
                }
                $query = $this->db->query("SELECT DISTINCT `u_email` FROM crm where u_email != ''");
                $query2 = $query->result();
                foreach ($query2 as $name) {
                    array_push($list, $name->u_email);
                }

                $mylist = array_unique($list);
                //$mylist = ['exceedor12@hotmail.com', 'bazkhalidbaz.ak@gmail.com', 'airdan88@gmail.com'];
                $formatedMessag = '<html><head></head><body><style type="text/css">p{display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;  overflow: hidden;}</style>';
                $formatedMessag .= $message . '</body></html>';
                //$list = ['daniel@sbsv.test', 'info@sbsv.test', 'exceedor12@hotmail.com', 'bazkhalidbaz.ak@gmail.com', 'airdan88@gmail.com'];
                $this->load->library('email', $config);
                $test_list = array();
                //$_SESSION['test_list'] = '';
                foreach ($mylist as $name) {
                    $this->email->clear();
                    $this->email->from('noreply@sbsv.test');
                    $this->email->to($name);
                    $this->email->subject($subject);
                    $this->email->set_mailtype("html");
                    $this->email->message($formatedMessag);

                    $sent = $this->email->send();

                    if ($sent) {
                        array_push($test_list, $name);
                    } else {
                        redirect(base_url() . 'Main/send_newsletter?msg=afe', 'refresh');
                        echo $this->email->print_debugger();
                    }
                }
                $_SESSION['test_list'] = $test_list;
                redirect(base_url() . 'Main/s_news', 'refresh');
            } else {
                redirect(base_url() . 'Main/send_newsletter?msg=afe', 'refresh');
            }
        }

    }

    public function delete_client()
    {
        $this->Auth_model->isLoggedIn();
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('crm');
        redirect(base_url() . 'Main/display_clients', 'refresh');
    }

    public function assign_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Add Client Data';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/Pending Leads', $data);
        $this->load->view('admin/partials/footer');
    }

    public function add_client()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Add Client Data';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/add_client', $data);
        $this->load->view('admin/partials/footer');
    }

    public function added_client()
    {
        $this->Auth_model->isLoggedIn();

        $id = $this->input->post('id');
        $user_name = $this->input->post('user_name');
        $u_email = $this->input->post('u_email');
        $phone_no = $this->input->post('phone_no');
        $immigration_country = $this->input->post('immigration_country');
        $payment_status = $this->input->post('payment_status');
        $current_stage = $this->input->post('current_stage');
        $user_password = $this->input->post('user_password');
        $file_no = $this->input->post('file_no');
        $job_skills = $this->input->post('job_skills');
        $total_payment = $this->input->post('total_payment');
        $visible = 1;
        $password = sha1($user_password);

        if ($user_name != null && $u_email != null && $phone_no != null && $immigration_country != null && $payment_status != null && $current_stage != null && $password != null && $visible != null) {
            $data_ary = array(
                'id' => $id,
                'user_name' => $user_name,
                'u_email' => $u_email,
                'user_password' => $password,
                'phone_no' => $phone_no,
                'immigration_country' => $immigration_country,
                'payment_status' => $payment_status,
                'current_stage' => $current_stage,
                'doc_file' => "",
                'file_no' => $file_no,
                'job_skills' => $job_skills,
                'total_payment' => $total_payment,
                'visible' => $visible,
            );
            $result = $this->Crm_model->added_client($data_ary);
            redirect(base_url() . 'Main/display_clients?msg=as', 'refresh');
        } else {
            redirect(base_url() . 'Main/display_clients?msg=afe', 'refresh');
        }
    }

    public function update_client()
    {
        $this->Auth_model->isLoggedIn();
        $id = $this->input->get('id');
        $data['clients'] = $this->Crm_model->get_client_detail($id);

        $data['title'] = 'Display Clients';
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/update_client.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function update_client_password()
    {
        $this->Auth_model->isLoggedIn();
        $id = $this->input->get('id');
        $data['clients'] = $this->Crm_model->get_client_detail($id);

        $data['title'] = 'Display Clients';
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/update_client_password.php', $data);
        $this->load->view('admin/partials/footer');
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

        $result = $this->Crm_model->update_client_details($data_ary);
        if ($result == "1") {
            $this->session->set_flashdata('success_msg', 'Updated Client Details Successfully');
        } else {
            $this->session->set_flashdata('failure_msg', 'Failed to Update!');
        }
        redirect(base_url() . 'Main/display_clients', 'refresh');
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

        $result = $this->Crm_model->update_client_details($data_ary);
        if ($result == "1") {
            $this->session->set_flashdata('success_msg', 'Updated Client Details Successfully');
        } else {
            $this->session->set_flashdata('failure_msg', 'Failed to Update!');
        }
        redirect(base_url() . 'Main/display_clients', 'refresh');
    }

    public function updateState()
    {

        $this->Auth_model->isLoggedIn();

        $id = $this->input->post('id');
        $state = $this->input->post('state');

        $data = array(
            'visible' => $state,
        );

        $this->db->where('id', $id);
        $this->db->update('crm', $data);

        redirect('Main/display_clients');

    }

    public function display_document()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Display Clients';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/display_doc', $data);
        $this->load->view('admin/partials/footer');
    }

    public function doc_uplo()
    {
        $data = array();
        // If file upload form submitted
        if ($this->input->post('fileSubmit') && !empty($_FILES['files']['name'])) {
            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                // File upload configuration
                $uploadPath = 'assets/upload/files/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg|txt|xls|xlsx|doc|docx|pdf|ppt|csv';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['c_id'] = $this->input->post('id');
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
            }

            if (!empty($uploadData)) {
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
        redirect(base_url() . 'Main/display_document?id=' . $this->input->post('id') . '&msg=as', 'refresh', $data);
    }

    public function delete_docu()
    {
        $this->Auth_model->isLoggedIn();
        $id = $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->delete('files');
        redirect(base_url() . 'Main/display_clients', 'refresh');

    }

    public function add_client1()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Add Client Data';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/add_client1', $data);
        $this->load->view('admin/partials/footer');
    }

    public function added_client1()
    {
        $this->Auth_model->isLoggedIn();

        $id = $this->input->post('id');
        $user_name = $this->input->post('user_name');
        $u_email = $this->input->post('u_email');
        $phone_no = $this->input->post('phone_no');
        $immigration_country = $this->input->post('immigration_country');
        $payment_status = $this->input->post('payment_status');
        $current_stage = $this->input->post('current_stage');
        $user_password = $this->input->post('user_password');
        $file_no = $this->input->post('file_no');
        $job_skills = $this->input->post('job_skills');
        $total_payment = $this->input->post('total_payment');
        $visible = 1;
        $password = sha1($user_password);

        if ($user_name != null && $u_email != null && $phone_no != null && $immigration_country != null && $payment_status != null && $current_stage != null && $password != null && $visible != null) {
            $data_ary = array(
                'id' => $id,
                'user_name' => $user_name,
                'u_email' => $u_email,
                'user_password' => $password,
                'phone_no' => $phone_no,
                'immigration_country' => $immigration_country,
                'payment_status' => $payment_status,
                'current_stage' => $current_stage,
                'doc_file' => "",
                'file_no' => $file_no,
                'job_skills' => $job_skills,
                'total_payment' => $total_payment,
                'visible' => $visible,
            );
            $result = $this->Crm_model1->added_client($data_ary);
            redirect(base_url() . 'Main/display_clients1?msg=as', 'refresh');
        } else {
            redirect(base_url() . 'Main/display_clients1?msg=afe', 'refresh');
        }
    }

    public function update_client1()
    {
        $this->Auth_model->isLoggedIn();
        $id = $this->input->get('id');
        $data['clients'] = $this->Crm_model1->get_client_detail($id);

        $data['title'] = 'Display Clients';
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/update_client1.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function update_client_password1()
    {
        $this->Auth_model->isLoggedIn();
        $id = $this->input->get('id');
        $data['clients'] = $this->Crm_model1->get_client_detail($id);

        $data['title'] = 'Display Clients';
        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/update_client_password1.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function updated_client1()
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

        $result = $this->Crm_model1->update_client_details($data_ary);
        if ($result == "1") {
            $this->session->set_flashdata('success_msg', 'Updated Client Details Successfully');
        } else {
            $this->session->set_flashdata('failure_msg', 'Failed to Update!');
        }
        redirect(base_url() . 'Main/display_clients1', 'refresh');
    }

    public function updated_client_password1()
    {
        $id = $this->input->post('id');
        $user_password = $this->input->post('user_password');
        $password = sha1($user_password);

        $data_ary = array(
            'id' => $id,
            'user_password' => $password
        );

        $result = $this->Crm_model1->update_client_details($data_ary);
        if ($result == "1") {
            $this->session->set_flashdata('success_msg', 'Updated Client Details Successfully');
        } else {
            $this->session->set_flashdata('failure_msg', 'Failed to Update!');
        }
        redirect(base_url() . 'Main/display_clients1', 'refresh');
    }

    public function updateState1()
    {

        $this->Auth_model->isLoggedIn();

        $id = $this->input->post('id');
        $state = $this->input->post('state');

        $data = array(
            'visible' => $state,
        );

        $this->db->where('id', $id);
        $this->db->update('crm1', $data);

        redirect('Main/display_clients1');

    }

    public function display_document1()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Display Clients';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/display_doc1', $data);
        $this->load->view('admin/partials/footer');
    }

    public function doc_uplo1()
    {
        $data = array();
        // If file upload form submitted
        if ($this->input->post('fileSubmit') && !empty($_FILES['files']['name'])) {
            $filesCount = count($_FILES['files']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                // File upload configuration
                $uploadPath = 'assets/upload/files/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg|txt|xls|xlsx|doc|docx|pdf|ppt|csv';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['c_id'] = $this->input->post('id');
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
            }

            if (!empty($uploadData)) {
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
        redirect(base_url() . 'Main/display_document1?id=' . $this->input->post('id') . '&msg=as', 'refresh', $data);
    }

    public function delete_docu1()
    {
        $this->Auth_model->isLoggedIn();
        $id = $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->delete('files');
        redirect(base_url() . 'Main/display_clients1', 'refresh');

    }

    public function delete_client1()
    {
        $this->Auth_model->isLoggedIn();
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('crm1');
        redirect(base_url() . 'Main/display_clients1', 'refresh');
    }

}
