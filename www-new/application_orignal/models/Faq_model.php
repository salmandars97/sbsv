<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Faq_model extends CI_Model {

    public function faqs(){
         
        $this->db->select('*');
        $this->db->from('faq');
        $query = $this->db->get();
    
        return $query->result(); 
  
    }
    public function added_faq($data_ary){
        $this->db->insert('faq', $data_ary);
        $result = $this->db->affected_rows();
       
        return $result;

       }

       public function update_faq($data_ary){

       $id =  $data_ary['id'];

       $this->db->where('id',$id);
       $this->db->update('faq', $data_ary);
       $result = $this->db->affected_rows();

       return $result;  

    }

}
?>