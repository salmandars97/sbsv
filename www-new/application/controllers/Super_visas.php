<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Super_visas extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->Model('Testimonials_model');
        $this->load->Model('Contact_model');
        $this->load->Model('Auth_model');
        $this->load->Model('Innerpage_model');
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
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
        ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'two-adult-women-beside-each-other-3768114.jpg';
        $data['text'] = "<p>Do you miss your parents? Do your kids want to be around their grandpa and grandma? Apply, Processing, Grant. Now wasn&rsquo;t that simple. The Super Visa was designed for Parents and Grandparents of Canadian Citizens or Permanent Residents. You no longer have to wait years for applications to be processed just to have your Parents or Grandparents come over and stay with you for a couple of years. The Super visa allows Parents and Grandparents to stay in Canada for up to 2 years consecutively on their initial entry.</p>

        <p>Similar to a Visitor Visa the applicant must prove:</p>

        <p>* Ties to their home country</p>

        <p>* Purpose of visit</p>

        <p>* Family and finances etc.</p>";
        $data['title'] = "Super Visa";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/Super/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

}
