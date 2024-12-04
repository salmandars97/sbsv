<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('UserAuth_model');
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

    public function myalert($msg)
    {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    public function index()
    {
        $this->UserAuth_model->isLoggedIn();
        $data['no_of_assessment'] = $this->Leads_model->no_of_assessment2($this->session->userdata('user_id'));
        $data['no_of_aipp_assessment'] = $this->Leads_model->no_of_aipp_assessment2($this->session->userdata('user_id'));
        $data['no_of_cec_assessment'] = $this->Leads_model->no_of_cec_assessment2($this->session->userdata('user_id'));
        $data['no_of_ca_assessment'] = $this->Leads_model->no_of_inv_assessment($this->session->userdata('user_id'));
        $data['title'] = 'User Page | Step-By-Step Visas';
        $username = $this->session->userdata('user_name');
        $user_id = $this->session->userdata('user_id');
        $this->load->view('user/partials/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/partials/footer', $data);
    }

    public function leads()
    {
        $this->UserAuth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->leads($this->session->userdata('user_id'));
        $this->load->view('user/partials/header');
        $this->load->view('user/assessment', $data);
        $this->load->view('user/partials/footer');
    }

    public function aipp_leads()
    {
        $this->UserAuth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->aipp_leads($this->session->userdata('user_id'));
        $this->load->view('user/partials/header');
        $this->load->view('user/cec_assessment', $data);
        $this->load->view('user/partials/footer');
    }

    public function cec_leads()
    {
        $this->UserAuth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->cec_leads($this->session->userdata('user_id'));
        $this->load->view('user/partials/header');
        $this->load->view('user/cec_assessment', $data);
        $this->load->view('user/partials/footer');
    }

    public function inv_leads()
    {
        $this->UserAuth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['leads'] = $this->Leads_model->inv_leads2($this->session->userdata('user_id'));
        $data['page'] = 'inv_leads';
        $this->load->view('user/partials/header');
        $this->load->view('admin/inv_assessment', $data);
        $this->load->view('user/partials/footer');
    }

    public function consultations()
    {
        $this->UserAuth_model->isLoggedIn();
        $data['title'] = 'Canada Consultations';
        $data['leads'] = $this->Leads_model->ca_consultations($this->session->userdata('user_id'));
        $this->load->view('user/partials/header');
        $this->load->view('user/ca_consultations', $data);
        $this->load->view('user/partials/footer');
    }

    public function ca_assessment()
    {
        $this->UserAuth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['ca_leads'] = $this->Leads_model->ca_leads($this->session->userdata('user_id'));
        $this->load->view('user/partials/header');
        $this->load->view('user/ca_assessment', $data);
        $this->load->view('user/partials/footer');
    }

    public function au_assessment()
    {
        $this->UserAuth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['au_leads'] = $this->Leads_model->au_leads($this->session->userdata('user_id'));
        $this->load->view('user/partials/header');
        $this->load->view('user/au_assessment', $data);
        $this->load->view('user/partials/footer');
    }
}
