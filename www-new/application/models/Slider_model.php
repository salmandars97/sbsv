<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Slider_model extends CI_Model {

    public function all(){
        $this->db->select('*');
        $this->db->from('home_banners');
        $query = $this->db->get();
        return $query->result();
    }

    public function notempty(){
        $this->db->select('*');
        $this->db->from('home_banners');
        $this->db->where('path!=', '');
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
    public function remove_image($id){

       $this->db->where('id',$id);
       $this->db->update('home_banners', array('path' => ""));
       $result = $this->db->affected_rows();

       return $result;  
     }

     public function change_image($id,$path){

        $this->db->where('id',$id);
        $this->db->update('home_banners', array('path' => $path));
        $result = $this->db->affected_rows();
 
        return $result;  
      }

}
?>