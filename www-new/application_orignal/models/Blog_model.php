<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Blog_model extends CI_Model {

    public function blogs(){
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }
     
    public function get_total() 
    {
        return $this->db->count_all("blogs");
    }

    public function get_blog_detail($id){
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_blog_comments($id){
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->order_by("id", "desc");
        $this->db->where('bid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function all_comments(){
        $this->db->select('*');
        $this->db->from('comments');
        $query = $this->db->get();
        return $query->result();
    }

    public function add_blog($data_ary){
       $this->db->insert('blogs', $data_ary);
       $result = $this->db->affected_rows();
       return $result;
     }
     
     public function comment($data_ary){
       $this->db->insert('comments', $data_ary);
       $result = $this->db->affected_rows();
       return $result;
     }

    public function update_blog($data_ary){
       $id =  $data_ary['id'];
       $this->db->where('id',$id);
       $this->db->update('blogs', $data_ary);
       $result = $this->db->affected_rows();
       return $result;
     }
     
     public function delete($id){
       $this->db->where('id', $id);
       $this->db->delete('blogs');
       $result = $this->db->affected_rows();
       return $result;
     }
     
     public function delete_comments($id){
        $this->db->where('id', $id);
        $this->db->delete('comments');
        $result = $this->db->affected_rows();
        return $result;
     }

}
?>
