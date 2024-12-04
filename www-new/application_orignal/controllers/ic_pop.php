<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ic_pop extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        // $this->output->set_header("Access-Control-Allow-Origin: *");
        $this->load->Model('Home_model');
        $this->load->Model('Testimonials_model');
        $this->load->Model('Contact_model');
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

    }

    public function added_ca_leads()
    {
        $id = $_GET['id'];
        $destination = $_GET['destination'];
        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone_no = $_GET['phone_no'];
        $occupation = $_GET['occupation'];
        $age = "";
        $work_exprience = "";
        $education = "";
        $english_language_skills = "";
        $spouse_english_language_skills = "";
        $imediate_relative_canada = "";
        $que = "";

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
}
