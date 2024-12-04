<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Thanks extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
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
        $data['meta_title'] = 'Step By Step Visas Canada Immigration Services |Canadian Immigration Consultant UAE| Canadian Immigration Company| Free Assessment for Canada, USA, UK, Schengen, Australia| Canadian Immigration Consultant UAE';
        $data['meta_description'] = 'Step by Step Visas is a canadian base immigration service company. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant
';
        $data['meta_keywords'] = 'Step By Step Visas Canada Immigration Services| Step By Step Visas Canada Immigration Services |Canadian Immigration Consultant UAE| Canadian Immigration Company| Free Assessment for Canada, USA, UK, Schengen, Australia| Canadian Immigration Consultant UAE
';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/thanks/index', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }





}
