<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class UserAuth_model extends CI_Model {

    

    

    public function login($username, $password){

        $user_password = sha1($password);

        $this->db->where('user_name',$username);

        $this->db->where('user_password',$user_password);
        $this->db->where('visible',1);

        $query = $this->db->get('user');

        if($query->num_rows()==1){

            foreach ($query->result() as $row){

                $data = array(
							'user_id'=> $row->user_id,
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

                redirect(base_url().'UserAuth', 'refresh');

                exit;

            }

    }

        public function added_user($data_ary){
       
        $this->db->insert('user', $data_ary);
        $result = $this->db->affected_rows();
       
        return $result;
    }

    public function added_c_user($data_ary){
       
        $this->db->insert('crm_auth', $data_ary);
        $result = $this->db->affected_rows();
       
        return $result;
    }

    public function display_user(){

        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
    
        return $query->result();
  
    }

    public function display_program_user(){

        $this->db->select('*');
        $this->db->from('crm_auth');
        $query = $this->db->get();
    
        return $query->result();
  
    }

    public function no_of_user(){
       
       $this->db->select("COUNT(user.user_id) AS no_of_users");
       $this->db->from('user');

       $query = $this->db->get();
       return $query->result();
}


     
    

}