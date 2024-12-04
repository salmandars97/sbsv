<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Schengen extends CI_Controller
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
        $data['img'] = 'people-at-the-airport-1716826.jpg';
        $data['text'] = "<p>Outline:&nbsp; Tourist/Visitor visa is an authorization of the designated country/countries of destination within the Schengen Area issued to the citizens of countries that have mandatory visa requirements from the Schengen Zone with the sole purpose of traveling in the designated Schengen country/countries for pleasure or on a visit to their relatives living in the Schengen Zone.&nbsp; The holder of this type of visa is not required to have the citizenship of the designated country in order to spend time with their relatives or visiting the designated Schengen country however such an authorization has its limitations as well. On a tourist visa you are allowed to reside in the designated country for the maximum of 3 months/90 days unless the visa states differently, and you are not allowed to work for such a period of time, unless the visa states differently.</p>";
        $data['title'] = "Visitor Visas";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-states/index', $data);


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
        $data['img'] = 'people-at-the-airport-1716826.jpg';
        $data['text'] = "<p>Outline:&nbsp; Tourist/Visitor visa is an authorization of the designated country/countries of destination within the Schengen Area issued to the citizens of countries that have mandatory visa requirements from the Schengen Zone with the sole purpose of traveling in the designated Schengen country/countries for pleasure or on a visit to their relatives living in the Schengen Zone.&nbsp; The holder of this type of visa is not required to have the citizenship of the designated country in order to spend time with their relatives or visiting the designated Schengen country however such an authorization has its limitations as well. On a tourist visa you are allowed to reside in the designated country for the maximum of 3 months/90 days unless the visa states differently, and you are not allowed to work for such a period of time, unless the visa states differently.</p>";
        $data['title'] = "Visitor Visas";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-states/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function Student()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'photo-of-a-man-wearing-academic-dress-2513993.jpg';
        $data['text'] = "<p>Outline: A student visa best translates into a genuine authorization the government of the designated country issues to students who are already accepted at a certified educational establishment.&nbsp; The holder of this type of visa is not required to have the citizenship of the designated country in order to follow studies yet it is no immigrant visa either.</p>

<p>Every student with the citizenship of a country that requires a visa to enter the Schengen zone must obtain a student visa in order to follow studies in the educational institute of the designated Schengen country.</p>

<p>Depending on the embassy/consulate that you will be applying to, they might require additional documents to assure the request and the information are genuine, as for example, some embassies/consulates require a certificate that proves you have no legal issues pending or a criminal record. As, the students must personally hand the documentation at the previously made appointment (as usually it is required), the person in charge at the embassy/consulate will notify you if there is any additional documentation needed and the nature of that documentation.</p>
";
        $data['title'] = "Student Visas";
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/united-states/index', $data);


        $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer', $data);
    }

    public function schengen()
    {
        $this->Auth_model->isLoggedIn();

        $data['title'] = 'Users';
        $data['schengen'] = $this->Innerpage_model->schengen();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/schengen', $data);
        $this->load->view('admin/partials/footer');
    }

    public function update_schengen()
    {

        // $this->Auth_model->isLoggedIn();

        $id = $this->input->get('id');
        $data['schengen_detail'] = $this->Innerpage_model->get_schengen_detail($id);

        $this->load->view('admin/partials/header');
        $this->load->view('admin/update_schengen', $data);
        $this->load->view('admin/partials/footer');

    }

    public function updated_schengen()
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

            $result = $this->Innerpage_model->update_schengen($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated Schengen Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'Schengen/schengen', 'refresh');

        } else {

            $upload_data = $this->upload->data();

            $data_ary = array(

            'id' => $id,
            'text' => $text,


            'pic' => $upload_data['file_name'],

            );

            $result = $this->Innerpage_model->update_schengen($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated Schengen Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'Schengen/schengen', 'refresh');
        }


    }



}
