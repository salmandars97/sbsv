<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Canada_investment extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->Model('Testimonials_model');
        $this->load->Model('Contact_model');
        $this->load->Model('Auth_model');
        $this->load->Model('Innerpage_model');
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
        $data['meta_title'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
';
        $data['meta_description'] = 'Step by Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'woman-in-black-coat-taking-photos-3775551.jpg';
        $data['text'] = "";
        $data['title'] = "Visitor Visas";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/canada_investment/index', $data);

        $this->load->view('web/partials/footer', $data);
    }
}
