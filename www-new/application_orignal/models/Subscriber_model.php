<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscriber_model extends CI_Model {

	 public function display_subscriber(){

	 	$this->db->select('*');
	 	$this->db->from('subscription');

	 	$query = $this->db->get();
	 	return $query->result();
	 }

	 public function delete_subscriber($subscription_id){
      
      $this->db->where('subscription_id',$subscription_id);
      $this->db->delete('subscription');

	 }

	   public function change_icon_state($data_ary){
        
        $app_id = $data_ary['icon_id'];
        
        $this->db->where('icon_id', $app_id);
        $this->db->update('social_media_icons', $data_ary); 
        $result = $this->db->affected_rows();
       
        return $result;

    }

    public function no_of_subscribers(){
       
       $this->db->select("COUNT(subscription.subscription_id) AS no_of_subscribes");
       $this->db->from('subscription');

       $query = $this->db->get();
       return $query->result();
}


        public function added_sub($data_ary){
               
                $this->db->insert('subscription', $data_ary);
                $result = $this->db->affected_rows();
               
                return $result;
            }



}

?>