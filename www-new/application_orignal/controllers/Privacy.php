<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Privacy extends CI_Controller
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

    public function privacy_policy()
    {
        $data['meta_title'] = 'Step by Step Immigration Services - Privacy Policy';
        $data['meta_description'] = 'Step by Step Immigration Services - Privacy Policy';
        $data['meta_keywords'] = 'Privacy Policy';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/privacy/privacy_policy', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }

    public function refund_policy()
    {
        $data['meta_title'] = 'Step by Step Immigration Services - Refund Policy';
        $data['meta_description'] = 'Step by Step Immigration Services - Refund Policy';
        $data['meta_keywords'] = 'Step by Step Immigration Services - Refund Policy';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/privacy/refund_policy', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }

}
