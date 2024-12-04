<?php

defined('BASEPATH') or exit('No direct script access allowed');



class NZ extends CI_Controller
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
        $data['meta_title'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
  ';
        $data['meta_description'] = 'Step by Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'woman-walking-on-pathway-while-strolling-luggage-1008155.jpg';
        $data['text'] = "<p>Outline: You may apply for this visa if you would like to Visit friends and family, explore New Zealand or enjoy amateur sports, or adventure activity. This visa allows you to Study for up to 3 months.</p>

<p>You could also include your partner, and dependent children aged 19 and under, in your visa application.</p>";
        $data['title'] = "Single Visit Visa";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-states/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function Single()
    {
        $data['meta_title'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
';
        $data['meta_description'] = 'Step by Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'woman-walking-on-pathway-while-strolling-luggage-1008155.jpg';
        $data['text'] = "<p>Outline: You may apply for this visa if you would like to Visit friends and family, explore New Zealand or enjoy amateur sports, or adventure activity. This visa allows you to Study for up to 3 months.</p>

<p>You could also include your partner, and dependent children aged 19 and under, in your visa application.</p>";
        $data['title'] = "Single Visit Visa";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-states/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function Skilled()
    {
        $data['meta_title'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
  ';
        $data['meta_description'] = 'Step by Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'two-happy-people-having-a-conversation-3874038.jpg';
        $data['text'] = "<p>Outline:&nbsp; The Skilled Migrant Category is a points system based on factors such as age, work experience, your qualifications, and an offer of skilled employment.&nbsp; You must also be aged 55 or under, and meet English language, health, and character requirements.&nbsp; To receive an Invitation to Apply you must have a score of 160 or above.</p>";
        $data['title'] = "Skilled Migrant Category";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-states/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function Partner()
    {
        $data['meta_title'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
  ';
        $data['meta_description'] = 'Step by Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'baby-touching-woman-s-face-1257110.jpg';
        $data['text'] = "<ul>
	<li>* Outline: In order to apply you and your partner will need to meet the following.</li>
	<li>* Your relationship needs to be genuine.</li>
	<li>* You should be living with your partner.</li>
	<li>* You must meet health and character clearance.</li>
	<li>* Your sponsor must be eligible to support your application.</li>
</ul>

<p>If you are an Australian citizen or permanent resident, you also may be able to sponsor a partner&#39;s visa.&nbsp; However, you will need to prove that New Zealand is your primary place of residence before you can support the application.</p>";
        $data['title'] = "Partner and Children Sponsorship";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-states/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function Fee()
    {
        $data['meta_title'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
  ';
        $data['meta_description'] = 'Step by Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step By Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'man-in-toga-holding-diploma-1007066.jpg';
        $data['text'] = "<p>Outline: You need to apply for this visa if you plan on studying full-time in New Zealand for more than 6 months.&nbsp; You must prove to a Visa officer that you hold an offer of enrolment from an educational institution approved by the New Zealand Qualifications Authority. You should have a written guarantee from an institution or person that suitable accommodation is available to you in New Zealand (if you&#39;re under 18 years). You must prove evidence of sufficient funds to live on while you are studying. You may possess a return air ticket to your country, or evidence of sufficient funds to buy one.</p>";
        $data['title'] = "Fee paying Student Visa";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-states/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function nz()
    {
        $this->Auth_model->isLoggedIn();

        $data['title'] = 'Users';
        $data['nz'] = $this->Innerpage_model->nz();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/nz', $data);
        $this->load->view('admin/partials/footer');
    }

    public function update_nz()
    {

        // $this->Auth_model->isLoggedIn();

        $id = $this->input->get('id');
        $data['nz_detail'] = $this->Innerpage_model->get_nz_detail($id);

        $this->load->view('admin/partials/header');
        $this->load->view('admin/update_nz', $data);
        $this->load->view('admin/partials/footer');

    }

    public function updated_nz()
    {




        $id = $this->input->post('id');
        $text = $this->input->post('text');



        $config = array(

           'upload_path'   => './assets/web/img/',
           'allowed_types' => 'gif|jpg|png|jpeg|txt|xls|xlsx|doc|docx|pdf|ppt|csv',
           'max_size'      => '5000',
           'max_width'     => '5024',
           'max_height'    => '5024',
           'encrypt_name'  => true,
           'remove_space'  => false,

            );

        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('pic')) {

            $data_ary = array(
            'id' => $id,
            'text' => $text,


            );

            $result = $this->Innerpage_model->update_nz($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated New Zeland Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'NZ/nz', 'refresh');

        } else {

            $upload_data = $this->upload->data();

            $data_ary = array(

            'id' => $id,
            'text' => $text,


            'pic' => $upload_data['file_name'],

            );

            $result = $this->Innerpage_model->update_nz($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated New Zeland Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'NZ/nz', 'refresh');
        }


    }




}
