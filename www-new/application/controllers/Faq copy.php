<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Faq extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->Model('Faq_model');
        $this->load->Model('Testimonials_model');
        $this->load->Model('Contact_model');
        $this->load->Model('Auth_model');
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
        $data['meta_title'] = 'Express Entry Step-By-Step Visa| How to Apply for Canada Tourist Visa| Canada PR Process| How Express Entry works | Canada Immigration Services| Visa Information | Tourism & Visit Visa | Travel Insurance| Steps for applying for Canada PR through Express Entry.
';
        $data['meta_description'] = 'Step-by-Step Visas helping you to apply for Express entry visa step by step, Canada PR Process, Canada Tourist Visa, BUsiness Visa. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Express Entry Step-By-Step Visa| How to Apply for Canada Tourist Visa| Canada PR Process| How Express Entry works | Canada Immigration Services| Visa Information | Tourism & Visit Visa | Travel Insurance | Steps for applying for Canada PR through Express Entry.';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['faqs'] = $this->Faq_model->faqs();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/faq/index', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }

    public function faqs()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['faqs'] = $this->Faq_model->faqs();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/faqs', $data);
        $this->load->view('admin/partials/footer');
    }

    public function delete_faq()
    {
        $id =  $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->delete('faq');
        redirect(base_url().'Faq/faqs', 'refresh');

    }

    public function add_faq()
    {

        $this->Auth_model->isLoggedIn();


        $this->load->view('admin/partials/header');
        $this->load->view('admin/add_faq');
        $this->load->view('admin/partials/footer');

    }

    public function added_faq()
    {

        $this->Auth_model->isLoggedIn();

        $que = $this->input->post('que');
        $ans = $this->input->post('ans');



        $data_ary = array(
        'que' => $que,
        'ans' => $ans,
                  );

        $result = $this->Faq_model->added_faq($data_ary);



        redirect(base_url().'Faq/Faqs', 'refresh');



    }

    public function update_faq()
    {

        $this->Auth_model->isLoggedIn();

        $id = $this->input->get('id');
        $data['faq_detail'] = $this->Faq_model->faqs($id);

        $this->load->view('admin/partials/header');
        $this->load->view('admin/update_faq', $data);
        $this->load->view('admin/partials/footer');

    }

    public function updated_faq()
    {

        $id = $this->input->post('id');
        $que = $this->input->post('que');
        $ans = $this->input->post('ans');

        $data_ary = array(

         'id' => $id,
         'que' => $que,
         'ans' => $ans,

         );

        $result = $this->Faq_model->update_faq($data_ary);

        if($result == 1) {

            $this->session->set_flashdata('success_msg', 'Updated contact Successfully');

        } else {

            $this->session->set_flashdata('failure_msg', 'Failed to Update!');

        }

        redirect(base_url().'Faq/faqs', 'refresh');


    }






}
