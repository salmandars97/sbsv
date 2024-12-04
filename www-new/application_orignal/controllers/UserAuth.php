<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserAuth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('UserAuth_model');
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
        $this->load->view('user/login');
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'UserAuth', 'refresh');

        exit;
    }

    public function login()
    {


        $username =  $this->input->post('user_name');
        $password =  $this->input->post('user_password');


        //call the model for auth
        if($this->UserAuth_model->login($username, $password)) {
        } else {
            echo'something went wrong';
        }
    }



    public function resetPassword()
    {



        $this->UserAuth_model->isLoggedIn();



        $this->load->view('user/partials/header');

        $this->load->view('user/resetPassword');

        $this->load->view('user/partials/footer');

    }



    public function verifyResetPassword()
    {

        $this->UserAuth_model->isLoggedIn();
        $cPass = $this->input->post('cPass');
        $nPass = $this->input->post('nPass');
        $rPass = $this->input->post('rPass');
        $password = sha1($cPass);
        $this->db->where('user_password', $password);
        $query = $this->db->get('user');
        $result = $query->result();
        if($result) {

            if ($nPass == $rPass) {

                if (strlen($nPass) < 8) {

                    echo ' <div class="alert alert-warning">
              New password should have atleast 6 characters</div> ';

                } else {
                    $newPassword = sha1($nPass);
                    $data_ary = array(
                        'user_password' => $newPassword,
                        );
                    $this->db->where('user_password', $password);
                    $this->db->update('user', $data_ary);
                    echo ' <div class="alert alert-success">
                     Password has been changed successfully!
                     </div> ';
                }

            } else {
                echo ' <div class="alert alert-warning">
                     New password and Repeat passoword does not match!
                     </div> ';

            }

        } else {

            echo ' <div class="alert alert-danger">
                 "In correct Current Passowrd";
                   </div> ';
        }
    }



}
