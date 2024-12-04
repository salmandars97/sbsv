<?php

defined('BASEPATH') or exit('No direct script access allowed');



class UK extends CI_Controller
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
        $data['img'] = 'man-in-brown-robe-carrying-bag-smiling-837129.jpg';
        $data['text'] = "<p>Outline: Apply for a visit or transit visa, for example if you&rsquo;re coming to the UK to visit family or friends, visit for tourism or get married or form a civil partnership.&nbsp; You may also apply for this visa to visit for business or academic research, pass through in transit to another country or get private medical treatment.</p>";
        $data['title'] = "Visitor Visa";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-kingdom/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function Visitor()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'man-in-brown-robe-carrying-bag-smiling-837129.jpg';
        $data['text'] = "<p>Outline: Apply for a visit or transit visa, for example if you&rsquo;re coming to the UK to visit family or friends, visit for tourism or get married or form a civil partnership.&nbsp; You may also apply for this visa to visit for business or academic research, pass through in transit to another country or get private medical treatment.</p>";
        $data['title'] = "Visitor Visa";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-kingdom/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function Study()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'woman-in-red-coat-holding-notebooks-and-coffee-cup-3755760.jpg';
        $data['text'] = "<p>Outline:&nbsp; You can apply for this student visa to study in the UK if you&rsquo;re 16 or over and you have been offered a place on a course, can speak, read, write and understand English, have enough money to support yourself and pay for your tuition fees - the amount will vary depending on education institutions and different situations.&nbsp; You are not from Switzerland or the European Economic Area (EEA).&nbsp; You must meet the other eligibility requirements.</p>";
        $data['title'] = "Study Visa Tier-4";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-kingdom/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function Family()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'family-of-four-walking-at-the-street-2253879.jpg';
        $data['text'] = "<p>Outline: You can apply for a family visa to live with your spouse or partner, your fianc&eacute;, fianc&eacute;e or proposed civil partner.&nbsp; You can apply to live with your child, parent or relative who&rsquo;ll provide long-term care for you.&nbsp; There are financial requirements for your sponsor to meet before you can apply for this Visa.</p>";
        $data['title'] = "Family Visa";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-kingdom/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function uk()
    {
        $this->Auth_model->isLoggedIn();

        $data['title'] = 'Users';
        $data['uk'] = $this->Innerpage_model->uk();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/uk', $data);
        $this->load->view('admin/partials/footer');
    }

    public function update_uk()
    {

        // $this->Auth_model->isLoggedIn();

        $id = $this->input->get('id');
        $data['uk_detail'] = $this->Innerpage_model->get_uk_detail($id);

        $this->load->view('admin/partials/header');
        $this->load->view('admin/update_uk', $data);
        $this->load->view('admin/partials/footer');

    }

    public function updated_uk()
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

            $result = $this->Innerpage_model->update_uk($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated United Kingdom Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'UK/uk', 'refresh');

        } else {

            $upload_data = $this->upload->data();

            $data_ary = array(

            'id' => $id,
            'text' => $text,


            'pic' => $upload_data['file_name'],

            );

            $result = $this->Innerpage_model->update_uk($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated United Kingdom Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'UK/uk', 'refresh');
        }


    }




}
