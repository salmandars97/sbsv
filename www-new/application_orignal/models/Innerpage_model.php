<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Innerpage_model extends CI_Model {

    public function canada(){

        $this->db->select('*');
        $this->db->from('canada');
        $query = $this->db->get();
    
        return $query->result();
  
    }

    public function get_canada_detail($id){
         
        $this->db->select('*');
        $this->db->from('canada');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        return $query->result(); 
  
    }

    public function update_canada($data_ary){

       $id =  $data_ary['id'];

       $this->db->where('id',$id);
       $this->db->update('canada', $data_ary);
       $result = $this->db->affected_rows();

       return $result;  
     }

     public function australia(){

        $this->db->select('*');
        $this->db->from('australia');
        $query = $this->db->get();
    
        return $query->result();
  
    }

    public function get_australia_detail($id){
         
        $this->db->select('*');
        $this->db->from('australia');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        return $query->result(); 
  
    }

    public function update_australia($data_ary){

       $id =  $data_ary['id'];

       $this->db->where('id',$id);
       $this->db->update('australia', $data_ary);
       $result = $this->db->affected_rows();

       return $result;  
     }

     public function us(){

        $this->db->select('*');
        $this->db->from('us');
        $query = $this->db->get();
    
        return $query->result();
  
    }

    public function get_us_detail($id){
         
        $this->db->select('*');
        $this->db->from('us');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        return $query->result(); 
  
    }

    public function update_us($data_ary){

       $id =  $data_ary['id'];

       $this->db->where('id',$id);
       $this->db->update('us', $data_ary);
       $result = $this->db->affected_rows();

       return $result;  
     }

     public function uk(){

        $this->db->select('*');
        $this->db->from('uk');
        $query = $this->db->get();
    
        return $query->result();
  
    }

    public function get_uk_detail($id){
         
        $this->db->select('*');
        $this->db->from('uk');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        return $query->result(); 
  
    }

    public function update_uk($data_ary){

       $id =  $data_ary['id'];

       $this->db->where('id',$id);
       $this->db->update('uk', $data_ary);
       $result = $this->db->affected_rows();

       return $result;  
     }

     public function nz(){

        $this->db->select('*');
        $this->db->from('nz');
        $query = $this->db->get();
    
        return $query->result();
  
    }

    public function get_nz_detail($id){
         
        $this->db->select('*');
        $this->db->from('nz');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        return $query->result(); 
  
    }

    public function update_nz($data_ary){

       $id =  $data_ary['id'];

       $this->db->where('id',$id);
       $this->db->update('nz', $data_ary);
       $result = $this->db->affected_rows();

       return $result;  
     }

     public function schengen(){

        $this->db->select('*');
        $this->db->from('schengen');
        $query = $this->db->get();
    
        return $query->result();
  
    }

    public function get_schengen_detail($id){
         
        $this->db->select('*');
        $this->db->from('schengen');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        return $query->result(); 
  
    }

    public function update_schengen($data_ary){

       $id =  $data_ary['id'];

       $this->db->where('id',$id);
       $this->db->update('schengen', $data_ary);
       $result = $this->db->affected_rows();

       return $result;  
     }

}
?>