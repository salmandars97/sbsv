<?php

// Error controller
// This controller is used to manage the errors (404)
class Errors extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
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

    // Main controller for the contact form
    public function error404()
    {
        $this->output->set_status_header('404');
        $data['meta_title'] = '404';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        $data['meta_author'] = '';
        $data['meta_viewport'] = 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header', $data);
        $this->load->view('errors/404');
        $this->load->view('web/partials/footer', $data);
    }
}
