<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Home extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        // $this->output->set_header("Access-Control-Allow-Origin: *");
        $this->load->Model('Home_model');
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
        $data['meta_title'] = 'Home | Step-By-Step Immigration Services';
        $data['meta_description'] = 'Step-by-Step Visas is a canadian base immigration service company. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant
';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services| Step-By-Step Visas Canada Immigration Services |Canadian Immigration Consultant UAE| Canadian Immigration Company| Free Assessment for Canada, USA, UK, Schengen, Australia| Canadian Immigration Consultant UAE
';	

        $data['meta_author'] = 'Digital Marketing Academy in UAE';
        $data['meta_viewport'] = 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['slider'] =   $this->Slider_model->notempty();
        $this->load->view('web/partials/header_clone', $data);
        // $this->load->view('web/index', $data);
        $this->load->view('web/index_clone', $data);
        // $this->load->view('web/partials/work');
        // $this->load->view('web/partials/review');
        $this->load->view('web/partials/footer_clone', $data);
    }

    public function hit_view_count()
    {
        if(isset($_POST['pagetitle']) && $_POST['pagetitle'] != '') {
            $ip = $_SERVER['REMOTE_ADDR'];
            $title = $_POST['pagetitle'];
            $data_ary = [
                    'ip_address' => $ip,
                    'page_title' => $title,
                    'date' => date('Y-m-d H:i:s'),
            ];
            $this->db->insert('web_visitors', $data_ary);
            $result = $this->db->affected_rows();
            //return $result;
        }
    }

    public function reviews()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services |Canadian Immigration Consultant UAE| Canadian Immigration Company| Free Assessment for Canada, USA, UK, Schengen, Australia| Canadian Immigration Consultant UAE';
        $data['meta_description'] = 'Step-by-Step Visas is a canadian base immigration service company. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant
';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services| Step-By-Step Visas Canada Immigration Services |Canadian Immigration Consultant UAE| Canadian Immigration Company| Free Assessment for Canada, USA, UK, Schengen, Australia| Canadian Immigration Consultant UAE
';
        $data['meta_author'] = 'Digital Marketing Academy in UAE';
        $data['meta_viewport'] = 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header_r', $data);
        $this->load->view('web/partials/review', $data);
        $this->load->view('web/partials/footer_r', $data);
    }

}
