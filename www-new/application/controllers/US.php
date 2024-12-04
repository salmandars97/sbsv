<?php

defined('BASEPATH') or exit('No direct script access allowed');



class US extends CI_Controller
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
        $data['img'] = 'people-standing-inside-airport-2767767.jpg';
        $data['text'] = "<p>Outline:&nbsp; Visitor visas are nonimmigrant visas for persons who want to enter the United States temporarily for business (visa category B-1), for tourism or medical treatment (visa category B-2), or for a combination of both purposes (B-1/B-2).</p>

<h6>Benefits:</h6>

<ul>
	<li>* Consult with business associates</li>
	<li>* Attend a scientific, educational, professional, or business convention or conference</li>
	<li>* Settle an estate</li>
	<li>* Negotiate a contract</li>
	<li>* Tourism</li>
	<li>* Vacation (holiday)</li>
	<li>* Visit friends or relatives</li>
	<li>* Medical treatment</li>
	<li>* Participation in social events hosted by fraternal, social, or service organizations</li>
	<li>* Participation by amateurs in musical, sports, or similar events or contests, if not being paid for participating</li>
	<li>* Enrollment in a short recreational course of study, not for credit toward a degree</li>
</ul>";
        $data['title'] = "Temporary Visitor Visa B1/B2";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/united-states/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function Temporary()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'people-standing-inside-airport-2767767.jpg';
        $data['text'] = "<p>Outline:&nbsp; Visitor visas are nonimmigrant visas for persons who want to enter the United States temporarily for business (visa category B-1), for tourism or medical treatment (visa category B-2), or for a combination of both purposes (B-1/B-2).</p>

<h6>Benefits:</h6>

<ul>
<li>* Consult with business associates</li>
<li>* Attend a scientific, educational, professional, or business convention or conference</li>
<li>* Settle an estate</li>
<li>* Negotiate a contract</li>
<li>* Tourism</li>
<li>* Vacation (holiday)</li>
<li>* Visit friends or relatives</li>
<li>* Medical treatment</li>
<li>* Participation in social events hosted by fraternal, social, or service organizations</li>
<li>* Participation by amateurs in musical, sports, or similar events or contests, if not being paid for participating</li>
<li>* Enrollment in a short recreational course of study, not for credit toward a degree</li>
</ul>";
        $data['title'] = "Temporary Visitor Visa B1/B2";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/united-states/index_clone', $data);


        // $this->load->view('web/partials/review');

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
        $data['img'] = 'woman-in-yellow-jacket-holding-red-book-3762800.jpg';
        $data['text'] = "<p>Outline: A citizen of a foreign country who wishes to study in&nbsp; the United States must first obtain a nonimmigrant student visa to study in the United States. Your course of study and the type of school you plan to attend determine whether you need an F visa or an M visa.</p>
";
        $data['title'] = "Student Visa F/M";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/united-states/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function us()
    {
        $this->Auth_model->isLoggedIn();

        $data['title'] = 'Users';
        $data['us'] = $this->Innerpage_model->us();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/us', $data);
        $this->load->view('admin/partials/footer');
    }

    public function update_us()
    {

        // $this->Auth_model->isLoggedIn();

        $id = $this->input->get('id');
        $data['us_detail'] = $this->Innerpage_model->get_us_detail($id);

        $this->load->view('admin/partials/header');
        $this->load->view('admin/update_us', $data);
        $this->load->view('admin/partials/footer');

    }

    public function updated_us()
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

            $result = $this->Innerpage_model->update_us($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated United State Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'US/us', 'refresh');

        } else {

            $upload_data = $this->upload->data();

            $data_ary = array(

            'id' => $id,
            'text' => $text,


            'pic' => $upload_data['file_name'],

            );

            $result = $this->Innerpage_model->update_us($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated United State Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'US/us', 'refresh');
        }


    }




}
