<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Crm_model1 extends CI_Model {

    

    

    public function login($u_email, $password){

        $user_password = sha1($password);

        $this->db->where('u_email',$u_email);

        $this->db->where('user_password',$user_password);
        $this->db->where('visible',1);

        $query = $this->db->get('crm1');

        if($query->num_rows()==1){

            foreach ($query->result() as $row){

                $data = array(

                            'user_name'=> $row->user_name,

                            'log_in'=>TRUE

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

            $is_log_in = $this->session->userdata('log_in');



            if(!isset($is_log_in) || $is_log_in!==TRUE)

            {

                redirect(base_url().'Crm', 'refresh');

                exit;

            }

    }

    public function display_clients($username){

        $this->db->select('*');
        $this->db->from('crm1');
        $this->db->where('user_name', $username);
        $query = $this->db->get();
    
        return $query->result();
  
    }
    
    public function display_uplo(){
        $this->db->select('*');
        $this->db->from('files');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function display_uplo_w($c_id){
        $this->db->select('*');
        $this->db->from('files');
        $this->db->where('c_id', $c_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function display_client_details_w($id){
        $this->db->select('*');
        $this->db->from('crm1');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function display_client_details(){
        $this->db->select('*');
        $this->db->from('crm1');
        $query = $this->db->get();
        
        return $query->result();
  
    }

    public function get_client_detail($id){
         
        $this->db->select('*');
        $this->db->from('crm1');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        return $query->result(); 
  
    }

    public function added_client($data_ary){
       
        $this->db->insert('crm1', $data_ary);
        $result = $this->db->affected_rows();
       
        return $result;
    }

    public function update_client_details($data_ary){

       $id =  $data_ary['id'];
       $this->db->where('id',$id);
       $this->db->update('crm1', $data_ary);
       $result = $this->db->affected_rows();
       return $result;  

    }

    public function no_of_client(){
       
       $this->db->select("COUNT(crm1.id) AS no_of_clients");
       $this->db->from('crm1');

       $query = $this->db->get();
       return $query->result();
}

        
    

}