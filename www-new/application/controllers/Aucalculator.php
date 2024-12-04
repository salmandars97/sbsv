<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Aucalculator extends CI_Controller {

 

   public function __construct() 
    {
    
            parent::__construct();
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

    public function index(){
         $data['meta_title'] = 'Step-By-Step Immigration Services - Calculator your score and determine your eligibility.';
        $data['meta_description'] = 'Step-By-Step Immigration Services - Calculator your score and determine your eligibility.';
        $data['meta_keywords'] = 'Step-By-Step Immigration Services - Calculator your score and determine your eligibility.';
    	$data['contact_us'] = $this->Contact_model->contact_us();
    $this->load->view('web/partials/header', $data);
    $this->load->view('web/au-calculator/index', $data);
    $this->load->view('web/partials/footer', $data);
  }
  




}
