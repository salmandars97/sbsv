<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Testimonials_model extends CI_Model {

	public function testimonial(){
         
        $this->db->select('*');
        $this->db->from('testimonials');
        $query = $this->db->get();
    
        return $query->result(); 
  
    }
    public function added_testimonial($data_ary){
        $this->db->insert('testimonials', $data_ary);
        $result = $this->db->affected_rows();
       
        return $result;

       }

       public function get_testimonial_detail($id){
         
        $this->db->select('*');
        $this->db->from('testimonials');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        return $query->result(); 
  
    }
    public function update_testimonial($data_ary){

       $id =  $data_ary['id'];

       $this->db->where('id',$id);
       $this->db->update('testimonials', $data_ary);
       $result = $this->db->affected_rows();

       return $result;  

    }
}
?>