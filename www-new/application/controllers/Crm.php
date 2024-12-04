<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Crm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->Model('Crm_model');
        $this->load->Model('Crm_model1');
        $this->load->Model('Contact_model');
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
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE';
        $data['meta_description'] = 'Step-by-Step Visas is an immigration service company in Canada running its operation in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE ';

        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('crm/login_clone');
        $this->load->view('web/partials/footer_clone', $data);
    }

    public function doc_uplo()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE';
        $data['meta_description'] = 'Step-by-Step Visas is an immigration service company in Canada running its operation in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE ';

        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/partials/footer', $data);
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
                    $uploadData[$i]['client_uploaded'] = "Y";
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
        $data['files'] = $this->file->getRows(); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            //$.ajax({url: "https://api.callmebot.com/whatsapp.php?phone=+923408376090&text=http://sbsv.test/Main/display_clients?id="+ <?= $this->input->post('id') ?> +"&apikey=966469", success: function(result){
                
            }});
        </script>
        <?php
        //redirect(base_url().'Crm/client?id=' . $this->input->post('id') . '&msg=as', 'refresh', $data);
        $this->load->library('email');
        $config = array(
             'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
             'smtp_host' => 'localhost',
             'smtp_port' => 25,
             'smtp_user' => 'noreply@sbsv.test',
             'smtp_pass' => 'Steps123!@#',
             'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
             'mailtype' => 'html', //plaintext 'text' mails or 'html'
             'smtp_timeout' => '4', //in seconds
             'charset' => 'iso-8859-1',
             'wordwrap' => true,
             'newline'  => '\r\n'
         );
        /* $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'smtp-mail.outlook.com',
            'smtp_user' => '',
            'smtp_pass' => '',
            'smtp_crypto' => 'tls',
            'smtp_port' => 567,
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        ];
       $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'email.sbsv.test',
            'smtp_user' => 'noreply@sbsv.test',
            'smtp_pass' => 'Steps123!@#',
            'smtp_crypto' => 'tls',
            'smtp_port' => 25,
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        ];
        $this->email->initialize($config);*/


        $message = '<html><head><meta charset="utf-8" /><title>Anil Labs - Codeigniter mail templates</title><meta name="viewport" content="width=device-width, initial-scale=1.0" /><head><body>';
        $message .= '<h4>New document uploaded by '. $this->input->post('name') .'.</h4><p>Click on the button below.</p><br>';
        $message .= '<a style="color:white;font-size:16px;font-family:sans-serif;text-align:center;background-color:#008CBA;display:block;width:20%;text-decoration:none;margin-right:auto;margin-left:auto;padding:15px 32px;border-style:none;" href="http://sbsv.test/Main/display_clients?id='. $this->input->post('id').'">Open Portal</a>';
        $message .= '</body></html>';
        $list = array();
        $list = ['info@sbsv.test' , 'noreply@sbsv.test', 'midhun@sbsv.test', 'daniel@sbsv.test'];

        foreach ($list as $value) {
            $this->email->set_newline("\r\n");
            $idd = $this->input->post('id');
            $name = $this->input->post('name');
            //echo $name . ' ' . $idd;
            $this->email->from('noreply@sbsv.test', 'Step-By-Step-Immigration-Services');
            $this->email->to($value);
            $this->email->subject('Client ['. $name .'] uploaded new document Date: '. date('Y-m-d'));
            $this->email->set_mailtype("html");
            $this->email->message($message);
            if($this->email->send()) {

            } else {
                print_r($this->email->print_debugger());
            }
            // Pass the files data to view

            $this->email->clear();
        }
        redirect(base_url().'client?id=' . $this->input->post('id') . '&msg=as', 'refresh', $data);


    }

    public function doc_uplo1()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE';
        $data['meta_description'] = 'Step-by-Step Visas is an immigration service company in Canada running its operation in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE ';

        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/partials/footer', $data);
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
                    $uploadData[$i]['client_uploaded'] = "Y";
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

        redirect(base_url().'Crm/client1?id=' . $this->input->post('id') . '&msg=as', 'refresh', $data);


    }

    public function client()
    {
        $this->Crm_model->isLoggedIn();
        $id = $this->session->userdata('id');
        $username = $this->session->userdata('user_name');
        $data['display_clients'] = $this->Crm_model->display_clients($username);
        $data['display_uplo'] = $this->Crm_model->display_uplo();
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE';
        $data['meta_description'] = 'Step-by-Step Visas is an immigration service company in Canada running its operation in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE ';
        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('crm/client_clone', $data);
        $this->load->view('web/partials/footer_clone', $data);
    }

    public function client1()
    {
        $this->Crm_model1->isLoggedIn();
        $id = $this->session->userdata('id');
        $username = $this->session->userdata('user_name');
        $data['display_clients'] = $this->Crm_model1->display_clients($username);
        $data['display_uplo'] = $this->Crm_model1->display_uplo();
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE';
        $data['meta_description'] = 'Step-by-Step Visas is an immigration service company in Canada running its operation in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE ';
        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header', $data);
        $this->load->view('crm/client1', $data);
        $this->load->view('web/partials/footer', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'Crm', 'refresh');
        exit;
    }

    public function login()
    {
        $u_email =  $this->input->post('u_email');
        $password =  $this->input->post('user_password');
        //call the model for CRM auth
        if($this->Crm_model->login($u_email, $password)) {
            redirect(base_url().'client', 'refresh');
        } else {
            echo '<script language="javascript">';
            echo 'alert("Wrong Email or Password")';
            echo '</script>';
            redirect(base_url().'client', 'refresh');
        }
    }

    public function delete_docu()
    {
        $this->Crm_model->isLoggedIn();
        $id =  $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->delete('files');
        redirect(base_url().'client', 'refresh');

    }

}
?>
