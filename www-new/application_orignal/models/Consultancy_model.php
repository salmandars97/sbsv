<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consultancy_model extends CI_Model {

    public function leads($u_id = ""){
        $this->db->select('id, destination, name, email, phone_no, occupation, message, date_added, ip_info, datafile, (SELECT u.user_name from user u where u.user_id = assessment.e_id) as e_id, que');
        $this->db->from('assessment');
		if($u_id == "!0"){
			$this->db->where('e_id!=', null);
			$this->db->where('e_id!=', '0');
		}
		else if($u_id != ""){
			$this->db->where('e_id',$u_id);
		}
		else{
			$this->db->where('e_id', null);
		}
        //$this->db->order_by('assessment.id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

	// Consultant
	public function consultantsList()
	{
		$this->db->select('id, name, email, user_id, created_by, created_at, status');
        $this->db->from('consultants');
		$query = $this->db->get();
        return $query->result();
	}

	public function consultantStore($data)
	{
		$this->db->insert('consultants', $data);
        $result = $this->db->affected_rows();
        return $result;
	}

	// Consultant Program
	public function consultantingProgramList()
	{
		$this->db->select('*');
        $this->db->from('consultations');
		$query = $this->db->get();
        return $query->result();
	}

	public function consultantingProgramStore($data)
	{
		$this->db->insert('consultations', $data);
        $result = $this->db->affected_rows();
        return $result;
	}

	// Meeting Program
	public function consultantingMeetingList()
	{
		$this->db->select('*');
        $this->db->from('schedule_meetings');
		$query = $this->db->get();
        return $query->result();
	}

	public function get_meeting_count($status = ""){
		$this->db->select("COUNT(schedule_meetings.id) AS count");
		$this->db->from('schedule_meetings');
		
		if($status == "*") {
			$this->db->where('status!=', null);
		}
		else {
			if($status == "0") {
				$this->db->where('status', "0");
			}
			else if($status == "1"){
				$this->db->where('status', "1");
			}
			else if($status == "2"){
				$this->db->where('status', "2");
			}
		}
		
		$query = $this->db->get();
		return $query->result();
	}
}
?>
