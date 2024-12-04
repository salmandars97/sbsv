<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Immigration_services extends CI_Controller
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

    public function canada()
    {
        $data['meta_title'] = 'Step-By-Step Visas Immigration To Canada | step by step visas Canada | Canadian Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['meta_description'] = 'Step-by-Step Visas is a canadian base immigration service company, Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Immigration To Canada | step by step visas Canada | Canadian Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant| Step-by-Step Visas is a canadian base immigration service company, Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant ';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['canada'] = $this->Innerpage_model->canada();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/canada/index', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }

    public function australia()
    {
        $data['meta_title'] = 'Step-By-Step Visas Immigration To Australia | step by step visas Australia | Australian Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['meta_description'] = 'Step-by-Step Visa to Australia by a canadian base immigration service company, Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Immigration To Australia | step by step visas Australia | Australian Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['australia'] = $this->Innerpage_model->australia();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/australia/index', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }

    public function NZ()
    {
        $data['meta_title'] = 'Step-By-Step Visas Immigration To New Zeland | step by step visas New Zeland | New Zeland Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['meta_description'] = 'Step-by-Step Visa to New Zeland by a canadian base immigration service company, Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Immigration To New Zeland | step by step visas New Zeland | New Zeland Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['nz'] = $this->Innerpage_model->nz();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/nz/index', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }

    public function Schengen()
    {
        $data['meta_title'] = 'Step-By-Step Visas Immigration To Schengen | step by step visas Schengen | Schengen Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['meta_description'] = 'Step-by-Step Visa to Schengen by a canadian base immigration service company, Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Immigration To Schengen | step by step visas Schengen | Schengen Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['schengen'] = $this->Innerpage_model->schengen();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/schengen/index', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }

    public function UK()
    {
        $data['meta_title'] = 'Step-By-Step Visas Immigration To UK- United Kingdom | step by step visas UK- United Kingdom | UK- United Kingdom Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['meta_description'] = 'Step-by-Step Visa to UK- United Kingdom by a canadian base immigration service company, Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Immigration To UK- United Kingdom | step by step visas UK- United Kingdom | UK- United Kingdom Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['uk'] = $this->Innerpage_model->uk();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/uk/index', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }

    public function US()
    {
        $data['meta_title'] = 'Step-By-Step Visas Immigration To US- United States | step by step visas US- United States| US- United States Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['meta_description'] = 'Step-by-Step Visa to US- United States by a canadian base immigration service company, Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Immigration To US- United States | step by step visas US- United States | US- United States Immigration Consultant | Immigration Company in Canada| Regulated Canadian Immigration Consultant';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['us'] = $this->Innerpage_model->us();
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-states/index', $data);
        $this->load->view('web/partials/work');
        $this->load->view('web/partials/booking');
        $this->load->view('web/partials/review');
        $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer', $data);
    }



}
