<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Cec extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        // $this->output->set_header("Access-Control-Allow-Origin: *");
        $this->load->Model('Testimonials_model');
        $this->load->Model('Contact_model');
        $this->load->Model('Slider_model');
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
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['slider'] =   $this->Slider_model->notempty();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/cec/index');
        $this->load->view('web/partials/footer', $data);
    }

}
