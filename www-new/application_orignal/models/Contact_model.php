<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Contact_model extends CI_Model {

	public function contact_form(){

        $this->db->select('*');
        $this->db->from('contact_form');
        $query = $this->db->get();
    
        return $query->result();
  
    }

    public function contact_us(){

        $this->db->select('*');
        $this->db->from('contact_us');
        $query = $this->db->get();
    
        return $query->result();
  
    }
    public function get_contact_detail($id){
         
        $this->db->select('*');
        $this->db->from('contact_us');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        return $query->result(); 
  
    }
    public function update_home_contact($data_ary){

       $id =  $data_ary['id'];

       $this->db->where('id',$id);
       $this->db->update('contact_us', $data_ary);
       $result = $this->db->affected_rows();

       return $result;  

    }

    public function added_contact($data_ary){
       
        $this->db->insert('contact_form', $data_ary);
        $result = $this->db->affected_rows();  
        return $result;
    }

    public function no_of_contact(){
       
       $this->db->select("COUNT(contact_form.id) AS no_of_contacts");
       $this->db->from('contact_form');

       $query = $this->db->get();
       return $query->result();
}

}
?>