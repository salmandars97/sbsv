<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Payment extends CI_Controller {

 

   public function __construct() 
    {
    
            parent::__construct();
             $this->load->Model('Testimonials_model');
             $this->load->Model('Contact_model');
            
    
    }

    public function index(){
        // $data['meta_title'] = 'Pay Your Application Fees Online – Online Payment Immigration and Citizenship|Immigration ePayment - StepByStepVisas';
        // $data['meta_description'] = 'Step-by-Step Visas is a canadian base immigration service company offering Online Payments Methos, Pay Your Application Fees Online – Online Payment Immigration and Citizenship|Immigration ePayment - StepByStepVisas';
        // $data['meta_keywords'] = 'Step-by-Step Visas is a canadian base immigration service company offering Online Payments Methos, Pay Your Application Fees Online – Online Payment Immigration and Citizenship|Immigration ePayment - StepByStepVisas';
        // $data['testimonial'] = $this->Testimonials_model->testimonial();
        // $data['contact_us'] = $this->Contact_model->contact_us();
        // $this->load->view('web/partials/header', $data);
        // $this->load->view('web/payment/index', $data);
        // $this->load->view('web/partials/work');
        // $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        // $this->load->view('web/partials/footer', $data);
        echo '<h1>404 not found</h1>';
  }
  
}