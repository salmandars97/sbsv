<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

            public function __construct() {
            parent::__construct();
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

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        // $this->load->view('admin/partials/header');
        $this->load->view('admin/login');
        // $this->load->view('admin/partials/footer');
    }


      public function logout(){
            $this->session->sess_destroy();
            redirect(base_url().'auth', 'refresh');

            exit;
        }
        
        public function login(){


            $username =  $this->input->post('user_name');
            $password =  $this->input->post('user_password');

            
            //call the model for auth
            if($this->Auth_model->login($username, $password)){
            }
            else{
                echo'something went wrong';
            }
        }
        
        // public function test(){
        //     echo sha1("admin123");
        // }

     
        public function verifyEmail(){
          
            $email =  $this->input->post('emailAdd');
            
              $this->db->where('email', $email);
              $query = $this->db->get('auth')->row(); 

              // $result = $query->result();

            



            if(isset($query->username)){

                $password = $this->generateRandomString();
                $shaPassword = sha1($password);

                $arr = array('password' => $shaPassword );

                $this->db->where('email',$email);
                $this->db->update('auth',$arr);
            
                $to      = $email;
                $subject = "Forgot Password";
                $message = "Hi , <br/>You have requested us to resend your credentials.<br/>
                Your login credentials are : <br/> User Name : ".$query->username." <br/>Your new password :".$password."<br/> 
                Thanks.<br/>
                ";
                $header = "From: noreply@millsoft.com\r\n"; 
                $header.= "MIME-Version: 1.0\r\n"; 
                $header.= "Content-Type: text/html; charset=utf-8\r\n"; 
                $header.= "X-Priority: 1\r\n";

                mail($to, $subject, $message, $header);
                    if(@mail($to, $subject, $message, $header))
                    {
                      echo "Your credentials has been sent to your email address.. <br>  ";
                    }else{
                      echo "Email Not Sent due to some issues";
                    }




            }else{
                echo "Email Not Matched!";
            }

        }

            public function forgotPassword()
        {
                $this->load->view('admin/forgotPassword');
        }

        public function generateRandomString() {
        $length = 10;
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $count = mb_strlen($chars);

        for ($i = 0, $result = ''; $i < $length; $i++) {
            $index = rand(0, $count - 1);
            $result .= mb_substr($chars, $index, 1);
        }

        return $result;
       }
}
