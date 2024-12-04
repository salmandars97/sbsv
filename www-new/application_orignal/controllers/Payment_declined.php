
<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Payment_declined extends CI_Controller {

 

   public function __construct() 
    {
    
            parent::__construct();
             $this->load->Model('Testimonials_model');
             $this->load->Model('Contact_model');
            
    
    }
        public function index(){
            $data['meta_title'] = 'Payment Declined';
            $data['meta_description'] = 'Responsive HTML5 Theme in iOS Style';
            $data['meta_keywords'] = 'responsive html5 theme, ios, android, material design, landing, application, mobile, blog, portfolio, bootstrap 3, css, jquery, flat, modern';
            $data['testimonial'] = $this->Testimonials_model->testimonial();
            $data['contact_us'] = $this->Contact_model->contact_us();
            $this->load->view('web/partials/header', $data);
            $this->load->view('web/payment-declined/index', $data);
            $this->load->view('web/partials/work');
            $this->load->view('web/partials/booking');
            $this->load->view('web/partials/review');
            $this->load->view('web/partials/eligibility');
            $this->load->view('web/partials/footer', $data);
            // echo '<h1>404 not found</h1>';
        }
}
