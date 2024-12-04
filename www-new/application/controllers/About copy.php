<?php

defined('BASEPATH') or exit('No direct script access allowed');



class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Auth_model');
        $this->load->Model('Testimonials_model');
        $this->load->Model('Contact_model');
        $this->load->Model('About_model');
        
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
        $data['meta_title'] = 'Step-By-Step Visas Canadian Immigration Consultant Based in Canada| Canadian Immigration Company UAE | Free Assessment| Australia| Consultant';
        $data['meta_description'] = 'Step-by-Step Visas is an immigration service company in Canada. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canadian Immigration Consultant Based in Canada| Canadian Immigration Company UAE | Free Assessment| Australia| Consultant| Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE ';

        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['about_us'] = $this->About_model->about_us();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/about/index', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }

    public function about_us()
    {
        $this->Auth_model->isLoggedIn();

        $data['title'] = 'Users';
        $data['about_us'] = $this->About_model->about_us();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/about_us', $data);
        $this->load->view('admin/partials/footer');
    }

    public function update_about()
    {

        // $this->Auth_model->isLoggedIn();

        $id = $this->input->get('id');
        $data['about_detail'] = $this->About_model->get_about_detail($id);

        $this->load->view('admin/partials/header');
        $this->load->view('admin/update_about', $data);
        $this->load->view('admin/partials/footer');

    }

    public function updated_about()
    {




        $id = $this->input->post('id');
        $text = $this->input->post('text');



        $config = array(

           'upload_path'   => './assets/web/img/pages/',
           'allowed_types' => 'gif|jpg|png|jpeg|txt|xls|xlsx|doc|docx|pdf|ppt|csv',
           'max_size'      => '5000',
           'max_width'     => '5024',
           'max_height'    => '5024',
           'encrypt_name'  => true,
           'remove_space'  => false,

            );

        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('pic')) {

            $data_ary = array(
            'id' => $id,
            'text' => $text,


            );

            $result = $this->About_model->update_about($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated Users Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'About/about_us', 'refresh');

        } else {

            $upload_data = $this->upload->data();

            $data_ary = array(

            'id' => $id,
            'text' => $text,


            'pic' => $upload_data['file_name'],

            );

            $result = $this->About_model->update_about($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated Users Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'About/about_us', 'refresh');
        }


    }






}
