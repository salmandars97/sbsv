<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class About_model extends CI_Model {

    public function about_us(){

        $this->db->select('*');
        $this->db->from('about_us');
        $query = $this->db->get();
    
        return $query->result();
  
    }

    public function get_about_detail($id){
         
        $this->db->select('*');
        $this->db->from('about_us');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        return $query->result(); 
  
    }
    public function update_about($data_ary){

       $id =  $data_ary['id'];

       $this->db->where('id',$id);
       $this->db->update('about_us', $data_ary);
       $result = $this->db->affected_rows();

       return $result;  
     }

}
?>