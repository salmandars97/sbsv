<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Crm_Auth_model extends CI_Model {

    public function login($username, $password){

        $user_password = sha1($password);

        $this->db->where('user_name',$username);

        $this->db->where('user_password',$user_password);

        $query = $this->db->get('crm_auth');

        if($query->num_rows()==1){

            foreach ($query->result() as $row){

                $data = array(

                            'user_name'=> $row->user_name,
                            
                            'clients_type' => $row->clients_type,

                            'logged_in'=>TRUE,

                            'crmo' => 1

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

                redirect(base_url().'crmauth', 'refresh');

                exit;

            }

    }

}