<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Aipp extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        // $this->output->set_header("Access-Control-Allow-Origin: *");
        $this->load->Model('Leads_model');
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
        $data['no_of_assessment'] = $this->Leads_model->max_lead_count();
        $this->load->view('web/aipp/index', $data);
    }

}
