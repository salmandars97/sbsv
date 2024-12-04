<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Leads extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Auth_model');
        $this->load->Model('Leads_model');
        
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
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->non_ann_leads('!0');
        $this->load->view('admin/partials/header');
        $this->load->view('admin/assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    // 	public function bulk_reject(){
    // 		$ids = $_POST['ids'];
    // 		for($i=0;$i<count($ids);$i++) {
    // 			$this->db->where('id', $ids[$i]);
    // 			$this->db->delete('assessment');
    // 		}
    // 	}

    public function bulk_reject()
    {
        $ids = $_POST['ids'];
        for($i=0;$i<count($ids);$i++) {
            // $this->db->where('id', $ids[$i]);
            // $this->db->delete('assessment');
            $id =  $ids[$i];
            $this->load->library('email');
            $this->email->from('m3vcmuc73997@sbsv.test', 'stepbystepvisas');
            $this->email->to('leads@sbsv.test');
            $this->email->subject('Assessment was rejected.');
            $query = $this->db->get_where('assessment', array('id' => $id));
            $message = '<html><body>';
            $message .= "<p style='font-family: monospace;font-size:15px;'>Following are the details of rejected candidate.</p><br>";
            $message .= '<table style="text-align: justify;border-collapse: collapse; width: 100%;">';

            foreach ($query->result() as $row) {
                $message .= "<tr>";
                $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Id</th>';
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->id . "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Destination</th>';
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->destination . "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Name</th>';
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->name . "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Email</th>';
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->email . "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Phone No</th>';
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->phone_no . "</td>";
                $message .= "<tr>";
                $message .= "<tr>";
                $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Occupation</th>';
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->occupation . "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Reference</th>';
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->que . "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Message</th>';
                if($row->message != "") {
                    $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->message . "</td>";
                } else {
                    $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>No Message</td>";
                }
                $message .= "</tr>";
                $message .= "<tr>";
                $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Date</th>';
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->date_added . "</td>";
                $message .= "</tr>";
                $message .= "<tr>";
                $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Resume</th>';
                if($row->datafile != "") {
                    $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'><a href='".base_url().'assets/admin/images/file/' . $row->datafile . "'> Download</a></td>";
                } else {
                    $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>No file was uploaded</td>";
                }
                $message .= "</tr>";
            }
            $message .= "</table>";
            $message .= '</body></html>';

            $this->email->set_mailtype("html");
            $this->email->message($message);
            if($this->email->send()) {
                $this->db->where('id', $id);
                $this->db->delete('assessment');
            } else {
                // $this->db->where('id', $id);
                // $this->db->delete('assessment');
            }
        }
    }

    public function assign_bulk_leads()
    {
        $this->Auth_model->isLoggedIn();
        if(!isset($_POST['ids'])) {
            $message = "Please select leads.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect('/Leads/pending_leads', 'refresh');
        }
        if($_POST['user'] == 0) {
            $message = "Please select user.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect('/Leads/pending_leads', 'refresh');
        }

        $ids = $_POST['ids'];
        foreach($ids as $id) {
            $this->db->where('id', $id);
            $this->db->update("assessment", array('e_id' => $_POST['user']));
        }
        $message = "Lead assign successfully.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('/Leads/pending_leads', 'refresh');
    }

    public function cec_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->cec_leads('!0');
        $this->load->view('admin/partials/header');
        $this->load->view('admin/cec_assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    public function ann_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->ann_aipp_leads();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    public function selected_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Assessments';
        $data['leads'] = $this->Leads_model->leads('13');
        $this->load->view('admin/partials/header');
        $this->load->view('admin/assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    public function inv_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->inv_leads('!0');
        $data['page'] = 'inv_leads';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/inv_assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    public function inv_leads2()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->inv_leads('!0');
        $data['page'] = 'inv_leads';
        $this->load->view('admin/partials/header2');
        $this->load->view('admin/inv_assessment2', $data);
        $this->load->view('admin/partials/footer');
    }

    public function rej_inv_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->rej_inv_leads();
        $data['page'] = 'inv_leads';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/rej_inv_assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    public function rej_inv_leads2()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->rej_inv_leads();
        $data['page'] = 'inv_leads';
        $this->load->view('admin/partials/header3');
        $this->load->view('admin/rej_inv_assessment2', $data);
        $this->load->view('admin/partials/footer');
    }

    public function rej_inv()
    {
        $this->Auth_model->isLoggedIn();
        if(isset($_GET['id'])) {
            $this->db->where('id', $_GET['id']);
            $this->db->update("invesment_assessment", array('reject' => 'Y'));
        }
        echo "<script>";
        echo "window.close();";
        echo "</script>";
        //redirect(base_url().'Leads/inv_leads', 'refresh');
    }

    public function added_inv_leads()
    {
        if($this->input->post('name') == '') {
            redirect(base_url().'Home', 'refresh');
        }
        $id = $this->input->post('id');
        $destination = $this->input->post('destination');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone_no = $this->input->post('phone_no');
        $occupation = $this->input->post('occupation');
        $que= $this->input->post('que');
        $message= $this->input->post('message');

        $config = array(
            'upload_path' => './assets/admin/images/file',
            'allowed_types' => '*',
            'max_size'      => '50000',
            'max_width'     => '5024',
            'max_height'    => '5024',
            'encrypt_name'  => true,
            'remove_space'  => false
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        if (!$this->upload->do_upload('datafile')) {
            $data_ary = array(
                'id' => $id,
                'destination' => $destination,
                'name' => $name,
                'email' => $email,
                'phone_no' => $phone_no,
                'message' => $message,
                'occupation' => $occupation,
                'que' => $que,
                'e_id' => '0',
                'date_added' =>  date("Y/m/d")
            );

            $result = $this->Leads_model->added_inv_leads($data_ary);
            redirect(base_url().'Thanks', 'refresh');
        } else {
            $upload_data = $this->upload->data();
            $data_ary = array(
                'id' => $id,
                'destination' => $destination,
                'name' => $name,
                'email' => $email,
                'phone_no' => $phone_no,
                'message' => $message,
                'occupation' => $occupation,
                'que' => $que,
                'e_id' => '0',
                'date_added' =>  date("Y/m/d"),
                'datafile' => $upload_data['file_name']
            );

            $result = $this->Leads_model->added_inv_leads($data_ary);
            redirect(base_url().'Thanks', 'refresh');
        }
    }

    public function ca_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['ca_leads'] = $this->Leads_model->ca_leads('!0');
        $this->load->view('admin/partials/header');
        $this->load->view('admin/ca_assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    public function au_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['au_leads'] = $this->Leads_model->au_leads('!0');
        $this->load->view('admin/partials/header');
        $this->load->view('admin/au_assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    public function ca_consultations()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Canada Consultations';
        $data['au_leads'] = $this->Leads_model->ca_consultations('!0');
        $this->load->view('admin/partials/header');
        $this->load->view('admin/ca_consultations', $data);
        $this->load->view('admin/partials/footer');
    }

    public function old_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->leads('');
        $data['page'] = 'old_assessment';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/pending_leads', $data);
        $this->load->view('admin/partials/footer');
    }

    public function old_ca_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['ca_leads'] = $this->Leads_model->ca_leads('');
        $data['page'] = 'old_ca_assessment';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/pending_ca_assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    public function old_au_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['au_leads'] = $this->Leads_model->au_leads('');
        $data['page'] = 'old_au_assessment';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/pending_au_assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    public function pending_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Pending Leads';
        $data['leads'] = $this->Leads_model->leads('0');
        $data['page'] = 'pending_leads';
        $data['users'] = $this->Leads_model->get_users();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/pending_leads.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function pending_aipp_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Pending Leads';
        $data['leads'] = $this->Leads_model->aipp_leads('0');
        $data['page'] = 'pending_leads';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/pending_aipp_leads.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function pending_cec_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Pending Leads';
        $data['leads'] = $this->Leads_model->cec_leads('0');
        $data['page'] = 'pending_leads';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/pending_cec_leads.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function ca_pending_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['ca_leads'] = $this->Leads_model->ca_leads('0');
        $data['page'] = 'ca_pending_leads';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/pending_ca_assessment.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function au_pending_leads()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['au_leads'] = $this->Leads_model->au_leads('0');
        $data['page'] = 'au_pending_leads';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/pending_au_assessment', $data);
        $this->load->view('admin/partials/footer');
    }

    public function ca_pending_consultations()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Pending Canada Consultations';
        $data['au_leads'] = $this->Leads_model->ca_consultations('0');
        $data['page'] = 'ca_pending_consultations';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/pending_ca_consultations', $data);
        $this->load->view('admin/partials/footer');
    }

    public function assign_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Assign Leads';
        $data['lead'] = $this->Leads_model->get_ass($_GET['aid'], $_GET['atype']);
        $data['users'] = $this->Leads_model->get_users();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/assign_assessment.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function assign_aipp_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Assign Leads';
        $data['lead'] = $this->Leads_model->get_ass($_GET['aid'], $_GET['atype']);
        $data['users'] = $this->Leads_model->get_users();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/assign_aipp_assessment.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function assign_cec_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Assign Leads';
        $data['lead'] = $this->Leads_model->get_ass($_GET['aid'], $_GET['atype']);
        $data['users'] = $this->Leads_model->get_users();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/assign_cec_assessment.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function assign_consultation()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Assign Consultation';
        $data['lead'] = $this->Leads_model->get_con($_GET['aid']);
        $data['users'] = $this->Leads_model->get_users();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/assign_consultation.php', $data);
        $this->load->view('admin/partials/footer');
    }

    public function submit_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $this->Leads_model->update_assetment($_GET['atype'], $_GET['aid'], $_GET['user_id']);
        redirect(base_url().'Leads/'.$_GET['page'].'?msg=as', 'refresh');
    }

    public function submit_aipp_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $this->Leads_model->update_aipp_assetment($_GET['atype'], $_GET['aid'], $_GET['user_id']);
        redirect(base_url().'Leads/pending_aipp_leads'.'?msg=as', 'refresh');
    }

    public function submit_cec_assessment()
    {
        $this->Auth_model->isLoggedIn();
        $this->Leads_model->update_cec_assetment($_GET['atype'], $_GET['aid'], $_GET['user_id']);
        redirect(base_url().'Leads/pending_cec_leads'.'?msg=as', 'refresh');
    }

    public function submit_consultation()
    {
        $this->Auth_model->isLoggedIn();
        $this->Leads_model->update_consultation($_GET['aid'], $_GET['user_id']);
        redirect(base_url().'Leads/'.$_GET['page'].'?msg=as', 'refresh');
    }

	public function added_leads()
	{
		$this->load->library(['upload', 'form_validation']);
		
		$post_data = $this->input->post(NULL, TRUE); // XSS filtering enabled
		
		// Validation
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('back');
		}

		// File upload configuration
		$config = [
			'upload_path'   => './assets/admin/images/file',
			'allowed_types' => 'gif|png|jpg|jpeg|doc|docx|pdf',
			'max_size'      => 50000,
			'encrypt_name'  => TRUE
		];
		
		if (!is_dir($config['upload_path'])) {
			mkdir($config['upload_path'], 0755, TRUE);
		}

		$this->upload->initialize($config);
		$data_ary = [
			'id'          => $post_data['id'],
			'destination' => $post_data['destination'],
			'name'        => $post_data['name'],
			'email'       => $post_data['email'],
			'phone_no'    => $post_data['phone_no'],
			'occupation'  => $post_data['occupation'],
			'message'     => $post_data['message'],
			'que'         => $post_data['que'],
			'e_id'        => '0',
			'date_added'  => date("Y/m/d"),
		];

		if ($this->upload->do_upload('datafile')) {
			$upload_data = $this->upload->data();
			$data_ary['datafile'] = $upload_data['file_name'];
		}

		$this->Leads_model->added_leads($data_ary);
		redirect(base_url() . 'Thanks', 'refresh');
	}

    // public function added_leads()
    // {
    //     foreach($_POST as $key => $value) {
    //         $_POST[$key] = $this->security->xss_clean($value);
    //     }
    //     foreach($_GET as $key => $value) {
    //         $_GET[$key] = $this->security->xss_clean($value);
    //     }
    //     // error_log($_POST);
    //     // error_log($_GET);
    //     //validation
    //     if($_FILES['datafile']['name'] != "") {
    //         $allowed = array('gif', 'png', 'jpg', 'jpeg', 'doc', 'docx', 'pdf');
    //         $filename = $_FILES['datafile']['name'];
    //         $ext = pathinfo($filename, PATHINFO_EXTENSION);
    //         if (!in_array(strtolower($ext), $allowed)) {
    //             $errors[] = 'Invalid file type. Only PDF, MS WORD, JPG, GIF and PNG types are accepted.';
    //             foreach($errors as $error) {
    //                 echo '<script>alert("'.$error.'");</script>';
    //             }
    //             echo "<script>";
    //             echo "window.location.href='javascript:history.go(-1)';";
    //             echo "</script>";
    //             die();
    //         }
    //     }

    //     if($this->input->post('name') == '') {
    //         redirect(base_url().'Home', 'refresh');
    //     }
    //     $id = $this->input->post('id');
    //     $destination = $this->input->post('destination');
    //     $name = $this->input->post('name');
    //     $email = $this->input->post('email');
    //     $phone_no = $this->input->post('phone_no');
    //     $occupation = $this->input->post('occupation');
    //     $que= $this->input->post('que');
    //     $message= $this->input->post('message');

    //     $config = array(
    //         'upload_path' => './assets/admin/images/file',
    //         'allowed_types' => '*',
    //         'max_size'      => '50000',
    //         'max_width'     => '5024',
    //         'max_height'    => '5024',
    //         'encrypt_name'  => true,
    //         'remove_space'  => false
    //     );

    //     $this->load->library('upload', $config);
    //     $this->upload->initialize($config);


    //     if (!$this->upload->do_upload('datafile')) {
    //         $data_ary = array(
    //             'id' => $id,
    //             'destination' => $destination,
    //             'name' => $name,
    //             'email' => $email,
    //             'phone_no' => $phone_no,
    //             'occupation' => $occupation,
    //             'message' => $message,
    //             'que' => $que,
    //             'e_id' => '0',
    //             'date_added' =>  date("Y/m/d")
    //         );

    //         $result = $this->Leads_model->added_leads($data_ary);
    //         redirect(base_url().'Thanks', 'refresh');
    //     } else {
    //         $upload_data = $this->upload->data();
    //         $data_ary = array(
    //             'id' => $id,
    //             'destination' => $destination,
    //             'name' => $name,
    //             'email' => $email,
    //             'phone_no' => $phone_no,
    //             'occupation' => $occupation,
    //             'message' => $message,
    //             'que' => $que,
    //             'e_id' => '0',
    //             'date_added' =>  date("Y/m/d"),
    //             'datafile' => $upload_data['file_name']
    //         );

    //         $result = $this->Leads_model->added_leads($data_ary);
    //         redirect(base_url().'Thanks', 'refresh');
    //     }
    // }

    public function added_aipp_leads()
    {
        if($this->input->post('name') == '') {
            redirect(base_url().'aipp', 'refresh');
        }
        $id = $this->input->post('id');
        $destination = $this->input->post('destination');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone_no = $this->input->post('phone_no');
        $occupation = $this->input->post('occupation');
        $que= $this->input->post('que');
        $message= $this->input->post('message');

        $config = array(
            'upload_path' => './assets/admin/images/file',
            'allowed_types' => '*',
            'max_size'      => '50000',
            'max_width'     => '5024',
            'max_height'    => '5024',
            'encrypt_name'  => true,
            'remove_space'  => false
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        if (!$this->upload->do_upload('datafile')) {
            $data_ary = array(
                'id' => $id,
                'destination' => $destination,
                'name' => $name,
                'email' => $email,
                'phone_no' => $phone_no,
                'occupation' => $occupation,
                'message' => $message,
                'que' => $que,
                'e_id' => '0',
                'date_added' =>  date("Y/m/d")
            );

            $result = $this->Leads_model->added_aipp_leads($data_ary);
            redirect(base_url().'aipp?msg=as', 'refresh');
        } else {
            $upload_data = $this->upload->data();
            $data_ary = array(
                'id' => $id,
                'destination' => $destination,
                'name' => $name,
                'email' => $email,
                'phone_no' => $phone_no,
                'occupation' => $occupation,
                'message' => $message,
                'que' => $que,
                'e_id' => '0',
                'date_added' =>  date("Y/m/d"),
                'datafile' => $upload_data['file_name']
            );

            $result = $this->Leads_model->added_aipp_leads($data_ary);
            redirect(base_url().'aipp?msg=as', 'refresh');
        }
    }

    public function added_cec_leads()
    {
        if($this->input->post('name') == '') {
            redirect(base_url().'cec', 'refresh');
        }
        $id = $this->input->post('id');
        $destination = $this->input->post('destination');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone_no = $this->input->post('phone_no');
        $occupation = $this->input->post('occupation');
        $que= $this->input->post('que');
        $message= $this->input->post('message');

        $config = array(
            'upload_path' => './assets/admin/images/file',
            'allowed_types' => '*',
            'max_size'      => '50000',
            'max_width'     => '5024',
            'max_height'    => '5024',
            'encrypt_name'  => true,
            'remove_space'  => false
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        if (!$this->upload->do_upload('datafile')) {
            $data_ary = array(
                'id' => $id,
                'destination' => $destination,
                'name' => $name,
                'email' => $email,
                'phone_no' => $phone_no,
                'occupation' => $occupation,
                'message' => $message,
                'que' => $que,
                'e_id' => '0',
                'date_added' =>  date("Y/m/d")
            );

            $result = $this->Leads_model->added_cec_leads($data_ary);
            redirect(base_url().'cec?msg=as', 'refresh');
        } else {
            $upload_data = $this->upload->data();
            $data_ary = array(
                'id' => $id,
                'destination' => $destination,
                'name' => $name,
                'email' => $email,
                'phone_no' => $phone_no,
                'occupation' => $occupation,
                'message' => $message,
                'que' => $que,
                'e_id' => '0',
                'date_added' =>  date("Y/m/d"),
                'datafile' => $upload_data['file_name']
            );

            $result = $this->Leads_model->added_cec_leads($data_ary);
            redirect(base_url().'cec?msg=as', 'refresh');
        }
    }

    public function added_ca_consultation()
    {
        if($this->input->post('name') == '') {
            redirect(base_url().'Home', 'refresh');
        }
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone_no = $this->input->post('phone_no');
        $permanent = $this->input->post('permanent');
        $que= $this->input->post('que');
        $message= $this->input->post('message');

        $data_ary = array(
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'contact_no' => $phone_no,
            'permanent' => $permanent,
            'message' => $message,
            'reference' => $que,
            'e_id' => '0',
            'date_added' =>  date("Y/m/d")
        );

        $result = $this->Leads_model->added_ca_consultation($data_ary);
        redirect(base_url().'Thanks', 'refresh');
    }

    public function added_ca_leads()
    {
        if($this->input->post('name') == '') {
            redirect(base_url().'Home', 'refresh');
        }
        $id = $this->input->post('id');
        $destination = $this->input->post('destination');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone_no = $this->input->post('phone_no');
        $occupation = $this->input->post('occupation');
        $age = $this->input->post('age');
        $work_exprience = $this->input->post('work_exprience');
        $education = $this->input->post('education');
        $english_language_skills = $this->input->post('english_language_skills');
        $spouse_english_language_skills = $this->input->post('spouse_english_language_skills');
        $imediate_relative_canada = $this->input->post('imediate_relative_canada');
        $que= $this->input->post('que');

        $config = array(
            'upload_path' => './assets/admin/images/file',
            'allowed_types' => 'gif|jpg|png|jpeg|txt|xls|xlsx|doc|docx|pdf|ppt|csv',
            'max_size'      => '5000',
            'max_width'     => '5024',
            'max_height'    => '5024',
            'encrypt_name'  => true,
            'remove_space'  => false,


            );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        if (!$this->upload->do_upload('datafile')) {

            echo $this->upload->display_errors();

        } else {
            $upload_data = $this->upload->data();
            $data_ary = array(
                'id' => $id,
                'destination' => $destination,
                'name' => $name,
                'email' => $email,
                'phone_no' => $phone_no,
                'occupation' => $occupation,
                'age' => $age,
                'work_exprience' => $work_exprience,
                'education' => $education,
                'english_language_skills' => $english_language_skills,
                'spouse_english_language_skills' => $spouse_english_language_skills,
                'imediate_relative_canada' => $imediate_relative_canada,
                'que' => $que,
                'e_id' => '0',
                'date_added' =>  date("Y/m/d"),
                'datafile' => $upload_data['file_name']
            );

            $result = $this->Leads_model->added_ca_leads($data_ary);
            redirect(base_url().'Thanks', 'refresh');
        }
    }
    public function update_ca_leads()
    {
        $id = $this->input->post('max_id');
        $age = $this->input->post('age');
        $work_exprience = $this->input->post('work_exprience');
        $education = $this->input->post('education');
        $english_language_skills = $this->input->post('english_language_skills');
        $spouse_english_language_skills = $this->input->post('spouse_english_language_skills');
        $imediate_relative_canada = $this->input->post('imediate_relative_canada');
        $que= $this->input->post('que');

        $data_ary = array(
            'age' => $age,
            'work_exprience' => $work_exprience,
            'education' => $education,
            'english_language_skills' => $english_language_skills,
            'spouse_english_language_skills' => $spouse_english_language_skills,
            'imediate_relative_canada' => $imediate_relative_canada,
            'que' => $que,
            'e_id' => '0'
        );

        $result = $this->Leads_model->update_ca_leads($data_ary, $id);
        redirect(base_url().'Thanks', 'refresh');
    }

    public function update_au_leads()
    {
        $id = $this->input->post('max_id');
        $age = $this->input->post('age');
        $work_exprience = $this->input->post('work_exprience');
        $education = $this->input->post('education');
        $partner_skills = $this->input->post('partner_skills');
        $english_language_skills = $this->input->post('english_language_skills');
        $que= $this->input->post('que');

        $data_ary = array(
            'age' => $age,
            'work_experience' => $work_exprience,
            'education' => $education,
            'english_language_skills' => $english_language_skills,
            'partner_skills' => $partner_skills,
            'que' => $que,
            'e_id' => '0'
        );

        $result = $this->Leads_model->update_au_leads($data_ary, $id);
        redirect(base_url().'Thanks', 'refresh');
    }

    public function added_au_leads()
    {
        if($this->input->post('name') == '') {
            redirect(base_url().'Home', 'refresh');
        }
        $id = $this->input->post('id');
        $destination = $this->input->post('destination');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone_no = $this->input->post('phone_no');
        $occupation = $this->input->post('occupation');
        $age = $this->input->post('age');
        $work_experience = $this->input->post('work_experience');
        $education = $this->input->post('education');
        $english_language_skills = $this->input->post('english_language_skills');
        $partner_skills = $this->input->post('partner_skills');
        $que= $this->input->post('que');

        $config = array(
            'upload_path' => './assets/admin/images/file',
            'allowed_types' => 'gif|jpg|png|jpeg|txt|xls|xlsx|doc|docx|pdf|ppt|csv',
            'max_size'      => '5000',
            'max_width'     => '5024',
            'max_height'    => '5024',
            'encrypt_name'  => true,
            'remove_space'  => false,
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        if (!$this->upload->do_upload('datafile')) {
            echo $this->upload->display_errors();
        } else {
            $upload_data = $this->upload->data();

            $data_ary = array(
                'id' => $id,
                'destination' => $destination,
                'name' => $name,
                'email' => $email,
                'phone_no' => $phone_no,
                'occupation' => $occupation,
                'age' => $age,
                'work_experience' => $work_experience,
                'education' => $education,
                'english_language_skills' => $english_language_skills,
                'partner_skills' => $partner_skills,
                'que' => $que,
                'e_id' => '0',
                'date_added' =>  date("Y/m/d"),
                'datafile' => $upload_data['file_name'],
            );

            $result = $this->Leads_model->added_au_leads($data_ary);
            redirect(base_url().'Thanks', 'refresh');
        }
    }

    public function delete_assessment()
    {
        $id =  $this->input->post('id');
        $this->load->library('email');
        $this->email->from('m3vcmuc73997@sbsv.test', 'stepbystepvisas');
        $this->email->to('leads@sbsv.test');
        $this->email->subject('Assessment was rejected.');
        $query = $this->db->get_where('assessment', array('id' => $id));
        $message = '<html><body>';
        $message .= "<p style='font-family: monospace;font-size:15px;'>Following are the details of rejected candidate.</p><br>";
        $message .= '<table style="text-align: justify;border-collapse: collapse; width: 100%;">';

        foreach ($query->result() as $row) {
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Id</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->id . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Destination</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->destination . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Name</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->name . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Email</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->email . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Phone No</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->phone_no . "</td>";
            $message .= "<tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Occupation</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->occupation . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Reference</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->que . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Message</th>';
            if($row->message != "") {
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->message . "</td>";
            } else {
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>No Message</td>";
            }
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Date</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->date_added . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Resume</th>';
            if($row->datafile != "") {
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'><a href='".base_url().'assets/admin/images/file/' . $row->datafile . "'> Download</a></td>";
            } else {
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>No file was uploaded</td>";
            }
            $message .= "</tr>";
        }
        $message .= "</table>";
        $message .= '</body></html>';

        $this->email->set_mailtype("html");
        $this->email->message($message);
        if($this->email->send()) {
            $this->db->where('id', $id);
            $this->db->delete('assessment');
            echo "<script>";
            echo "window.location.href='javascript:history.go(-1)';";
            echo "</script>";
        } else {
            $this->db->where('id', $id);
            $this->db->delete('assessment');
            echo "<script>";
            echo "window.location.href='javascript:history.go(-1)';";
            echo "</script>";
        }
        echo "<script>";
        echo "window.close();";
        echo "</script>";
    }

    public function delete_assessment3()
    {
        $id =  $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('assessment');
        echo "<script>";
        echo "window.close();";
        echo "</script>";
    }

    public function cec_delete_assessment()
    {
        $id =  $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('cec_assessment');
        echo "<script>";
        echo "window.location.href='javascript:history.go(-1)';";
        echo "</script>";
    }

    public function delete_ca_consultation()
    {
        $id =  $this->input->post('id');
        $this->load->library('email');
        $this->email->from('m3vcmuc73997@sbsv.test', 'stepbystepvisas');
        $this->email->to('leads@sbsv.test');
        $this->email->subject('Consultation was rejected.');
        $query = $this->db->get_where('ca_consultation', array('id' => $id));
        $message = '<html><body>';
        $message .= "<p style='font-family: monospace;font-size:15px;'>Following are the details of rejected candidate.</p><br>";
        $message .= '<table style="text-align: justify;border-collapse: collapse; width: 100%;">';

        foreach ($query->result() as $row) {
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Id</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->id . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Name</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->name . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Email</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->email . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Contact No</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->contact_no . "</td>";
            $message .= "<tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Permanent resident/Canadian citizen </th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->permanent . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Reference</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->reference . "</td>";
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Message</th>';
            if($row->message != "") {
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->message . "</td>";
            } else {
                $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>No Message</td>";
            }
            $message .= "</tr>";
            $message .= "<tr>";
            $message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Date</th>';
            $message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->date_added . "</td>";
            $message .= "</tr>";
        }
        $message .= "</table>";
        $message .= '</body></html>';

        $this->email->set_mailtype("html");
        $this->email->message($message);
        if($this->email->send()) {
            $this->db->where('id', $id);
            $this->db->delete('ca_consultation');
            echo "<script>";
            echo "window.location.href='javascript:history.go(-1)';";
            echo "</script>";
        } else {
            $this->db->where('id', $id);
            $this->db->delete('ca_consultation');
            echo "<script>";
            echo "window.location.href='javascript:history.go(-1)';";
            echo "</script>";
        }
    }

    public function delete_caassessment()
    {
        $id =  $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('ca_assessment');
        echo "<script>";
        echo "window.location.href='javascript:history.go(-1)';";
        echo "</script>";
    }

    public function delete_auassessment()
    {
        $id =  $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('au_assessment');
        echo "<script>";
        echo "window.location.href='javascript:history.go(-1)';";
        echo "</script>";
    }
}
