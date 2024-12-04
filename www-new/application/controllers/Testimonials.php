<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Testimonials extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->Model('Auth_model');
        $this->load->Model('Testimonials_model');
        $this->load->Model('Contact_model');
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
        $data['meta_title'] = 'Canadian Immigration Success Stories | Testimonial of Express Entry visa step by step|  Canada Visa Current Success Rate | Express Entry Step-By-Step Visa| Canadian Student Visa Approval Rate |Canadian Express Visa Tips & Guidelines| Canada PR Process| How Express Entry works |Steps for applying for Canada PR through Express Entry.';

        $data['meta_description'] = 'Step-by-Step Visas Canadian Immigration Success Stories.Testimonial of Express entry visa step by step, Canada PR Process, Canada Tourist Visa, BUsiness Visa. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';

        $data['meta_keywords'] = 'Canadian Immigration Success Stories | Testimonial of Express Entry visa step by step|  Canada Visa Current Success Rate | Express Entry Step-By-Step Visa| Canadian Student Visa Approval Rate |Canadian Express Visa Tips & Guidelines| Canada PR Process| How Express Entry works |Steps for applying for Canada PR through Express Entry.';

        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/testimonials/index_clone', $data);
        // $this->load->view('web/partials/work');
        // $this->load->view('web/partials/booking');
        $this->load->view('web/partials/footer_clone', $data);
    }

    public function testimonial()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/testimonial', $data);
        $this->load->view('admin/partials/footer');
    }

    public function delete_testimonial()
    {
        $id =  $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->delete('testimonials');
        redirect(base_url().'Testimonials/testimonial', 'refresh');

    }

    public function add_testimonial()
    {

        $this->Auth_model->isLoggedIn();


        $this->load->view('admin/partials/header');
        $this->load->view('admin/add_testimonial');
        $this->load->view('admin/partials/footer');

    }

    public function added_testimonial()
    {

        $this->Auth_model->isLoggedIn();

        $name = $this->input->post('name');
        $testimonial_text = $this->input->post('testimonial_text');



        $data_ary = array(
        'name' => $name,
        'testimonial_text' => $testimonial_text,
                  );

        $result = $this->Testimonials_model->added_testimonial($data_ary);



        redirect(base_url().'Testimonials/testimonial', 'refresh');



    }


    public function update_testimonial()
    {

        $this->Auth_model->isLoggedIn();

        $id = $this->input->get('id');
        $data['testimonial_detail'] = $this->Testimonials_model->get_testimonial_detail($id);

        $this->load->view('admin/partials/header');
        $this->load->view('admin/update_testimonial', $data);
        $this->load->view('admin/partials/footer');

    }

    public function updated_testimonial()
    {

        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $testimonial_text = $this->input->post('testimonial_text');

        $data_ary = array(

         'id' => $id,
         'name' => $name,
         'testimonial_text' => $testimonial_text,


         );

        $result = $this->Testimonials_model->update_testimonial($data_ary);

        if($result == 1) {

            $this->session->set_flashdata('success_msg', 'Updated Testimonial Successfully');

        } else {

            $this->session->set_flashdata('failure_msg', 'Failed to Update!');

        }

        redirect(base_url().'Testimonials/testimonial', 'refresh');


    }




}
