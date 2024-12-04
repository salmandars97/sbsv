<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Subscriber extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->Model('Subscriber_model');
        $this->load->Model('Auth_model');
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

        $this->Auth_model->isLoggedIn();

        $data['subscriber'] = $this->Subscriber_model->display_subscriber();  //App Icons

        $this->load->view('admin/partials/header', $data);
        $this->load->view('admin/subscriber', $data);
        $this->load->view('admin/partials/footer', $data);

    }

    public function added_sub()
    {
        if($this->input->post('subscription_email') == '') {
            redirect(base_url().'Home', 'refresh');
        }

        $subscription_id = $this->input->post('subscription_id');
        $subscription_email = $this->input->post('subscription_email');

        $data_ary = array(
            'subscription_id' => $subscription_id,
            'subscription_email' => $subscription_email,
            'date_added'          =>  date("Y/m/d"),
        );

        $result = $this->Subscriber_model->added_sub($data_ary);
        redirect(base_url().'Thankyou', 'refresh');
    }



    public function delete_subscriber()
    {
        if($this->input->post('subscription_id') == '') {
            redirect(base_url().'Home', 'refresh');
        }
        $this->Auth_model->isLoggedIn();



        $subscription_id = $this->input->post('subscription_id');

        $this->Subscriber_model->delete_subscriber($subscription_id);



        //$this->db->where('id',$id);

        //$this->db->delete('slider');



        redirect('Subscriber');



    }



    public function updateIconState()
    {

        $this->Auth_model->isLoggedIn();

        $icon_id=$this->input->post('icon_id');
        $state=$this->input->post('state');

        $data = array(
          'visible' => $state,
          );

        $this->db->where('icon_id', $icon_id);
        $this->db->update('social_media_icons', $data);

        redirect('Social_icons');
    }

    public function change_social_state()
    {

        $icon_id = $this->input->post('icon_id');
        $state = $this->input->post('state');



        $data_ary = array(
             'icon_id' => $icon_id,
             'visible' => $state,
        );

        $result =$this->Social_model->change_icon_state($data_ary);



        redirect(base_url().'Social_icons', 'refresh');

    }




}
