<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Australia extends CI_Controller
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
        $data['img'] = 'man-standing-near-gray-metal-equipment-2760243.jpg';
        $data['text'] = "<p>Outline: This program Visa is for high skilled workers who are not sponsored by an employer, family member or nominated by a state or territory government. &nbsp;It allows you and your family to live and work in any part of Australia as a permanent resident.</p>

<h3>Benefits:</h3>

<ul>
	<li>* Stay in Australia indefinitely</li>
	<li>* Work, live and study or even setup a business in Australia</li>
	<li>* Enroll in Medicare</li>
	<li>* Sponsor eligible relatives for permanent residence</li>
	<li>* Travel to and from Australia for five years</li>
	<li>* Apply for&nbsp;Australian citizenship once eligible.</li>
</ul>";
        $data['title'] = "Skilled Independent 189";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }

    public function Skilled()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'man-standing-near-gray-metal-equipment-2760243.jpg';
        $data['text'] = "<p>Outline: This program Visa is for high skilled workers who are not sponsored by an employer, family member or nominated by a state or territory government. &nbsp;It allows you and your family to live and work in any part of Australia as a permanent resident.</p>

<h3>Benefits:</h3>

<ul>
<li>* Stay in Australia indefinitely</li>
<li>* Work, live and study or even setup a business in Australia</li>
<li>* Enroll in Medicare</li>
<li>* Sponsor eligible relatives for permanent residence</li>
<li>* Travel to and from Australia for five years</li>
<li>* Apply for&nbsp;Australian citizenship once eligible.</li>
</ul>";
        $data['title'] = "Skilled Independent 189";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }

    public function Nomination()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
    ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'businessman-man-space-desk-7059.jpg';
        $data['text'] = "<p>Outline: This visa allows skilled workers who are nominated by an Australian state or territory government live and work in Australia as a permanent resident.&nbsp; Applicants under this program may be restricted to living and working in the sponsored state or territory&nbsp;</p>

<h3>Benefits:</h3>

<ul>
	<li>* Stay in Australia indefinitely</li>
	<li>* Work, live and study or even setup a business in Australia</li>
	<li>* Enroll in Medicare</li>
	<li>* Sponsor eligible relatives for permanent residence</li>
	<li>* Travel to and from Australia for five years</li>
	<li>* Apply for&nbsp;Australian citizenship once eligible.</li>
</ul>";
        $data['title'] = "Skilled Nomination 190";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }
    public function Regional()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
    ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'woman-in-pink-long-sleeve-shirt-wearing-eyeglasses-sewing-3852969.jpg';
        $data['text'] = "<p>Outline: This visa allows skilled workers to live and work in regional or low-population growth metropolitan areas of Australia for up to four years.&nbsp; This visa might lead to the permanent residents provided that the applicant meets all the requirements at the time of applying.</p>

<h3>Benefits:</h3>

<ul>
	<li>* Stay in Australia for up to 4 years</li>
	<li>* Live, work and study in a specified region of Australia</li>
	<li>* Travel to and from Australia as many times as you want while the visa is valid.</li>
	<li>* Apply for permanent residence once eligible</li>
</ul>";
        $data['title'] = "Skilled Regional (Provisional) 489";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }
    public function Visitor()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
      ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'airplanes-airport-blur-city-322819.jpg';
        $data['text'] = "<p>Outline: This Visa allows you to visit Australia for Tourism, Business or meet family members in Australia. Your stay may be restricted to either three, six or 12 months</p>

<h3>Benefits:</h3>

<ul>
	<li>* Short Visit for Tourism or business activities</li>
	<li>* Family sponsored visitors</li>
	<li>* Explore Australia</li>
</ul>";
        $data['title'] = "Visitor 600";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }
    public function Working()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
        ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'adults-airport-architectural-design-architecture-301930.jpg';
        $data['text'] = "<p>Outline: This visa allows applicants from eligible countries to work in Australia while on a holiday.&nbsp; It has certain requirements that an applicant would need to meet to be approved.</p>

<h3>Benefits:</h3>

<ul>
	<li>* Stay in Australia for up to 12 months</li>
	<li>* Work in Australia, generally&nbsp;for up to&nbsp;six months with each employer</li>
	<li>* Study for up to four months</li>
	<li>* Leave and re-enter Australia any number of times while the visa is valid.</li>
</ul>";
        $data['title'] = "Working Holiday 417";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }
    public function eVisitor()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
          ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'person-using-black-laptop-computer-3873856.jpg';
        $data['text'] = "<p>Outline: The eVisitor is an electronic approval allowing you to enter Australia. You must be a holder of a specific passport to apply for this visa. You will not receive a stamp or label on your Passport.&nbsp; Your eVisitor Visa can be accessed electronically by airlines, travel agents or Australian border control.</p>

<h3>Benefits:</h3>

<ul>
	<li>* Enter Australia for up to three months during each visit during the 12 months from the date the eVisitor is granted</li>
	<li>* Have a holiday or visit family and friends in Australia</li>
	<li>* Study in Australia for up to three months in some circumstances</li>
	<li>* Engage in business visitor activities while in Australia</li>
</ul>";
        $data['title'] = "eVisitor 651";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }
    public function Student()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
            ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'shallow-focus-photo-of-a-man-wearing-academic-regalia-2517765.jpg';
        $data['text'] = "<p>Outline: This Visa allows you to study in Australia fulltime at a recognized education educational institute. In order to be eligible for this Visa you must be accepted into an education educational institution in Australia, have sufficient funds to support yourself while in Australia and prove to a visa officer that you will return to your country of residence or citizenship after completion of your studies.</p>

<h3>Benefits:</h3>

<ul>
	<li>* Family members may accompany you during your studies in Australia</li>
	<li>* May apply for Permanent Residents provided you meet the eligibility requirements.</li>
</ul>";
        $data['title'] = "Student Visa 500";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }
    public function Guardian()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
              ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'three-persons-taking-photo-2365534.jpg';
        $data['text'] = "<p>Outline: ???This visa allows you to stay in Australia as the guardian of an international student younger than 18 years of age studying in Australia on a student visa.&nbsp; You must prove to an officer that you have sufficient funds to support yourself and the student during your stay in Australia</p>

<h3>Benefits:</h3>

<ul>
	<li>* Accompany a minor student who wishes to study in Australia</li>
	<li>* Allows you to stay up to 5 years</li>
</ul>";
        $data['title'] = "Student Guardian Visa 590";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }
    public function Partner()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
                ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'man-and-woman-standing-near-tower-2890818.jpg';
        $data['text'] = "<p>Outline: This visa allows the partner or spouse of an Australian citizen or Australian permanent resident live permanently in Australia.&nbsp;<br />
The temporary Partner visa (subclass 309) is granted first and allows you to stay in Australia while the permanent Partner (Migrant) visa (subclass 100) is processed.</p>

<h3>Benefits:</h3>

<ul>
	<li>* Stay in Australia indefinitely</li>
	<li>* Work, live and study or even setup a business in Australia</li>
	<li>* Enroll in Medicare</li>
	<li>* Sponsor eligible relatives for permanent residence</li>
	<li>* Travel to and from Australia for five years</li>
	<li>* Apply for&nbsp;Australian citizenship once eligible.</li>
	<li>* Include dependent children in your application</li>
</ul>";
        $data['title'] = "Partner Sponsorship 309/100";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }
    public function Prospective()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
                  ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'photo-of-couple-smiling-while-standing-next-to-each-other-3785643.jpg';
        $data['text'] = "<p>Outline: This visa allows people to come to Australia to marry their prospective spouse.<br />
If you are granted this visa, you should marry your prospective spouse within a certain time period and apply for an onshore Partner (subclasses 820 and 801) visa before your Prospective Marriage visa (subclass 300) expires.</p>

<h3>Benefits:</h3>

<ul>
	<li>* Travel to and stay in Australia for up to&nbsp;nine months</li>
	<li>* Work in Australia</li>
	<li>* Study in Australia at your own expense</li>
	<li>* Travel outside Australia as many times as you want.</li>
	<li>* Apply for Permanent Residence</li>
</ul>";
        $data['title'] = "Prospective Marriage 300";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/australia2/index_clone', $data);
//        $this->load->view('web/partials/work');
//        $this->load->view('web/partials/booking');
        // $this->load->view('web/partials/review');
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
    }

    public function australia()
    {
        $this->Auth_model->isLoggedIn();

        $data['title'] = 'Users';
        $data['australia'] = $this->Innerpage_model->australia();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/australia', $data);
        $this->load->view('admin/partials/footer');
    }

    public function update_australia()
    {

        // $this->Auth_model->isLoggedIn();

        $id = $this->input->get('id');
        $data['australia_detail'] = $this->Innerpage_model->get_australia_detail($id);

        $this->load->view('admin/partials/header');
        $this->load->view('admin/update_australia', $data);
        $this->load->view('admin/partials/footer');

    }

    public function updated_australia()
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

            $result = $this->Innerpage_model->update_australia($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated Australia Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'Australia/australia', 'refresh');

        } else {

            $upload_data = $this->upload->data();

            $data_ary = array(

            'id' => $id,
            'text' => $text,


            'pic' => $upload_data['file_name'],

            );

            $result = $this->Innerpage_model->update_australia($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated Australia Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'Australia/australia', 'refresh');
        }


    }





}
