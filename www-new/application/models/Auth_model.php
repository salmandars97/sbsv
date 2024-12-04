<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Auth_model extends CI_Model {

    public function login($username, $password){

        $user_password = sha1($password);

        $this->db->where('user_name',$username);

        $this->db->where('user_password',$user_password);

        $query = $this->db->get('auth');

        if($query->num_rows()==1){

            foreach ($query->result() as $row){

                $data = array(

                            'user_name'=> $row->user_name,

                            'logged_in'=>TRUE

                        );

            }

            $this->session->set_userdata($data);

            return TRUE;

        }

        else{

            return FALSE;

      }    

    }

    public function isLoggedIn(){

            header("cache-Control: no-store, no-cache, must-revalidate");

            header("cache-Control: post-check=0, pre-check=0", false);

            header("Pragma: no-cache");

            header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

            $is_logged_in = $this->session->userdata('logged_in');



            if(!isset($is_logged_in) || $is_logged_in!==TRUE)

            {
                $currentURL = current_url(); //http://myhost/main

                $params   = $_SERVER['QUERY_STRING']; //my_id=1,3
                
                $fullURL = $currentURL . '?' . $params; 
                $_SESSION['l_url'] = $fullURL;

                redirect(base_url().'auth', 'refresh');

                exit;

            }

    }
	
    public function verifyEmail($email){

        $this->db->where('user_email',$email);

        $query = $this->db->get('auth');

        if($query->num_rows()==1){

            

            return TRUE;

        }

        else{

            return FALSE;

      }    

    }
	
	public function email_forgot_password($email,$password)

    {



        $to      = $email;

        $subject = "Forgot Password";

        $message = "Hi , <br/>You have requested us to resend your credentials.<br/>

        Your login credentials are : <br/> User Name : $email <br/> Password :$password<br/> 

        Thanks for using Vina App!<br/>

        The Vina App Team";

        $header = "From: noreply@vinacerebrovascular.com\r\n"; 

        $header.= "MIME-Version: 1.0\r\n"; 

        $header.= "Content-Type: text/html; charset=utf-8\r\n"; 

        $header.= "X-Priority: 1\r\n";



        mail($to, $subject, $message, $header);

            if(@mail($to, $subject, $message, $header))
            {
				echo "";
            }
			else{
				echo "Email Not Sent due to some issues";
            }
    }
    
	public function no_of_user(){ 
		$this->db->select("COUNT(user.user_id) AS no_of_users");
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function no_of_blogs(){ 
		$this->db->select("COUNT(blogs.id) AS no_of_blogs");
		$this->db->from('blogs');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function no_of_comments(){ 
		$this->db->select("COUNT(comments.id) AS no_of_comments");
		$this->db->from('comments');
		$query = $this->db->get();
		return $query->result();
	}
}