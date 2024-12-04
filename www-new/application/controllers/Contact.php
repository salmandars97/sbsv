<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Contact extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->Model('Auth_model');
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
        $data['meta_title'] = 'Contact Canadian Immigration| Canadian Visa Expert | Canadian Immigration Company Providing step by step immigration services Canada | Express Entry Expert- StepByStepVisas';
        $data['meta_description'] = 'Step-by-Step Visas is a canadian base immigration service company offering Express Entry visa Step-By-Step, Free Assessment for Canada, USA, UK, Schengen, Australia| Immigration Consultant UAE | Canadian Immigration Company UAE Canada PR Process, Canada Tourist Visa, BUsiness Visa. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-by-Step Visas is a canadian base immigration service company offering Express Entry visa Step-By-Step, Free Assessment for Canada, USA, UK, Schengen, Australia| Immigration Consultant UAE | Canadian Immigration Company UAE Canada PR Process, Canada Tourist Visa, BUsiness Visa. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant
';
        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/contact/index_clone', $data);
        // $this->load->view('web/partials/eligibility');
        $this->load->view('web/partials/footer_clone', $data);
        echo "<h1>404 page not found</h1>";
    }

    public function contact_form()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['contact_form'] = $this->Contact_model->contact_form();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/contact_form', $data);
        $this->load->view('admin/partials/footer');
    }

    public function delete_contact()
    {
        $id =  $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->delete('contact_form');
        redirect(base_url().'Contact/contact_form', 'refresh');

    }

    public function contact_us()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Users';
        $data['contact_us'] = $this->Contact_model->contact_us();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/contact_us', $data);
        $this->load->view('admin/partials/footer');
    }

    public function update_contact()
    {

        $this->Auth_model->isLoggedIn();

        $id = $this->input->get('id');
        $data['contact_detail'] = $this->Contact_model->get_contact_detail($id);

        $this->load->view('admin/partials/header');
        $this->load->view('admin/update_contact', $data);
        $this->load->view('admin/partials/footer');

    }

    public function updated_contact()
    {

        $id = $this->input->post('id');
        $address = $this->input->post('address');
        $phone_no1 = $this->input->post('phone_no1');
        $phone_no2 = $this->input->post('phone_no2');
        $phone_no3 = $this->input->post('phone_no3');
        $email = $this->input->post('email');
        $map = $this->input->post('map');

        $data_ary = array(

         'id' => $id,
         'address' => $address,
         'phone_no1' => $phone_no1,
         'phone_no2' => $phone_no2,
         'phone_no3' => $phone_no3,
         'email' => $email,
         'map' => $map,


         );

        $result = $this->Contact_model->update_home_contact($data_ary);

        if($result == 1) {

            $this->session->set_flashdata('success_msg', 'Updated contact Successfully');

        } else {

            $this->session->set_flashdata('failure_msg', 'Failed to Update!');

        }

        redirect(base_url().'Contact/contact_us', 'refresh');


    }

    public function added_contact()
    {

        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone_no = $this->input->post('phone_no');
        $message = $this->input->post('message');

        $data_ary = array(

         'id' => $id,
         'name' => $name,
         'email' => $email,
         'phone_no' => $phone_no,
         'message' => $message,
         'data_added' => date("Y/m/d")
         );

        $result = $this->Contact_model->added_contact($data_ary);

        if($result != "") {
            redirect(base_url().'Thankyou', 'refresh');
        }
    }


}
