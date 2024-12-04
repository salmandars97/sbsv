<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leads_model extends CI_Model {

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
        $query = $this->db->order_by('id', 'desc')->get();
        return $query->result();
    }

	public function web_visitors_filter($u_id = ""){
		$this->db->select("COUNT(web_visitors.id) AS web_visitors");
		$this->db->from('web_visitors');
		if($u_id == "t"){
			$this->db->where('DAY(date)', date('d'));
		}
		else if($u_id == "m"){
			$this->db->where('MONTH(date)', date('m'));
			$this->db->where('YEAR(date)', date('Y'));
		}
		else if($u_id == "y"){
			$this->db->where('YEAR(date)', date('Y'));
		}
		else {
			$this->db->where('DAY(date)', date('d',strtotime("-1 days")));
		}
		$query = $this->db->get();
		return $query->result();
	}
    
    public function aipp_leads($u_id = ""){
        $this->db->select('id, destination, name, email, phone_no, occupation, message, date_added, ip_info, datafile, (SELECT u.user_name from user u where u.user_id = aipp_assessment.e_id) as e_id, que');
        $this->db->from('aipp_assessment');
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
    public function cec_leads($u_id = ""){
        $this->db->select('id, destination, name, email, phone_no, occupation, message, date_added, ip_info, datafile, (SELECT u.user_name from user u where u.user_id = cec_assessment.e_id) as e_id, que');
        $this->db->from('cec_assessment');
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
    
    public function ann_aipp_leads(){
        $query = $this->db->query('SELECT  *
FROM (
            SELECT   *
            FROM    aipp_assessment
            where e_id = 13
            UNION   ALL
            SELECT   *
            FROM    assessment
            WHERE e_id = 13
        ) subquery');
        return $query->result();
    }
    
    public function non_ann_leads($u_id = ""){
        $this->db->select('id, destination, name, email, phone_no, occupation, message, date_added, ip_info, datafile, (SELECT u.user_name from user u where u.user_id = assessment.e_id) as e_id, que');
        $this->db->from('assessment');
        $this->db->where('e_id!=', '13');
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
    
    public function ann_leads($u_id = ""){
        $this->db->select('id, destination, name, email, phone_no, occupation, message, date_added, ip_info, datafile, (SELECT u.user_name from user u where u.user_id = assessment.e_id) as e_id, que');
        $this->db->from('assessment');
        $this->db->where('e_id', '13');
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
    
    public function rej_inv_leads($u_id = ""){
        $this->db->select('id, destination, name, email, phone_no, occupation, message, date_added, datafile, que, e_id');
        $this->db->from('invesment_assessment');
        $this->db->where('reject', 'Y');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function inv_leads($u_id = ""){
        $this->db->select('id, destination, name, email, phone_no, occupation, message, date_added, datafile, que, e_id');
        $this->db->from('invesment_assessment');
        $this->db->where('reject', 'N');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function inv_leads2($u_id = ""){
        $this->db->select('id, destination, name, email, phone_no, occupation, message, date_added, datafile, que, e_id');
        $this->db->from('invesment_assessment');
        if($u_id != ""){
			$this->db->where('e_id',$u_id);
		}
        //$this->db->order_by('assessment.id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function added_inv_leads($data_ary){
        $this->db->insert('invesment_assessment', $data_ary);
        $result = $this->db->affected_rows();
        return $result;
    }

    public function ca_leads($u_id = ""){
        $this->db->select('id, destination, name, email, phone_no, occupation, age, work_exprience, education, english_language_skills, spouse_english_language_skills, imediate_relative_canada, date_added, datafile, que, (SELECT u.user_name from user u where u.user_id = ca_assessment.e_id) as e_id');
        $this->db->from('ca_assessment');
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
        //$this->db->order_by("ca_assessment.id", "DESC");
		$query= $this->db->get();
        return $query->result();
    }

    public function au_leads($u_id = ""){
        $this->db->select('id, destination, name, email, phone_no, occupation, age, work_experience, education, english_language_skills, partner_skills, date_added, datafile, (SELECT u.user_name from user u where u.user_id = au_assessment.e_id) as e_id, que');
        $this->db->from('au_assessment');
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
        //$this->db->order_by("au_assessment.id", "DESC");
		$query = $this->db->get();
        return $query->result();
    }

    public function ca_consultations($u_id = ""){
        $this->db->select('id, name, email, contact_no, permanent, message, date_added, (SELECT u.user_name from user u where u.user_id = ca_consultation.e_id) as e_id, reference');
        $this->db->from('ca_consultation');
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
        //$this->db->order_by("au_assessment.id", "DESC");
		$query = $this->db->get();
        return $query->result();
    }

	public function get_ass($id,$atype){
		if($atype == "visa") {
			$query = $this->db->get_where('assessment', array('id' => $id));
        }
        if($atype == "aipp") {
			$query = $this->db->get_where('aipp_assessment', array('id' => $id));
        }
		if($atype == "cec") {
			$query = $this->db->get_where('cec_assessment', array('id' => $id));
        }
        if($atype == "a") {
			$query = $this->db->get_where('invesment_assessment', array('id' => $id));
        }
		else if($atype == "imc") {
			$query = $this->db->get_where('ca_assessment', array('id' => $id));
        }
		else if($atype == "ima") {
			$query = $this->db->get_where('au_assessment', array('id' => $id));
        }
		return $query->result();
    }

    public function get_con($id){
      if($id != "") {
  			$query = $this->db->get_where('ca_consultation', array('id' => $id));
        return $query->result();
      }
    }

	public function get_users(){
        $this->db->select('user_id,user_name');
        $this->db->from('user');
        $this->db->where("user.visible", 1);
        $query = $this->db->get();
        return $query->result();
    }

	public function update_assetment($type, $id, $e_id) {
		$this->db->where('id', $id);
		if($type == "imc"){
			$this->db->update("ca_assessment", array('e_id' => $e_id));
		}
		else if($type == "ima"){
			$this->db->update("au_assessment", array('e_id' => $e_id));
		}
		else if($type == "a"){
			$this->db->update("invesment_assessment", array('e_id' => $e_id));
		}
		else {
			$this->db->update("assessment", array('e_id' => $e_id));
		}
		return true;
	}
	
	public function update_aipp_assetment($type, $id, $e_id) {
		$this->db->where('id', $id);
		if($type == "imc"){
			$this->db->update("ca_assessment", array('e_id' => $e_id));
		}
		else if($type == "ima"){
			$this->db->update("au_assessment", array('e_id' => $e_id));
		}
		else if($type == "a"){
			$this->db->update("invesment_assessment", array('e_id' => $e_id));
		}
		else {
			$this->db->update("aipp_assessment", array('e_id' => $e_id));
		}
		return true;
	}

	public function update_cec_assetment($type, $id, $e_id) {
		$this->db->where('id', $id);
		if($type == "imc"){
			$this->db->update("ca_assessment", array('e_id' => $e_id));
		}
		else if($type == "ima"){
			$this->db->update("au_assessment", array('e_id' => $e_id));
		}
		else if($type == "a"){
			$this->db->update("invesment_assessment", array('e_id' => $e_id));
		}
		else {
			$this->db->update("cec_assessment", array('e_id' => $e_id));
		}
		return true;
	}

  public function update_consultation($id, $e_id) {
		$this->db->where('id', $id);
    $this->db->update("ca_consultation", array('e_id' => $e_id));
		return true;
	}

    public function added_leads($data_ary){
        if($this->input->ip_address() != '') {
            $data_ary['ip_info'] = $this->input->ip_address();
        }
        if(isset($data_ary['message'])){
            if (strpos($data_ary['message'], 'http') !== false) {
                return 'true';
            }
        }
        $this->db->insert('assessment', $data_ary);
        $result = $this->db->affected_rows();
        return $result;
    }
    
    public function added_aipp_leads($data_ary){
        if($this->input->ip_address() != '') {
            $data_ary['ip_info'] = $this->input->ip_address();
        }
        if(isset($data_ary['message'])){
            if (strpos($data_ary['message'], 'http') !== false) {
                return 'true';
            }
        }
        
        $this->db->insert('aipp_assessment', $data_ary);
        $result = $this->db->affected_rows();
        return $result;
    }
    
    public function added_cec_leads($data_ary){
        if($this->input->ip_address() != '') {
            $data_ary['ip_info'] = $this->input->ip_address();
        }
        if(isset($data_ary['message'])){
            if (strpos($data_ary['message'], 'http') !== false) {
                return 'true';
            }
        }
        
        $this->db->insert('cec_assessment', $data_ary);
        $result = $this->db->affected_rows();
        return $result;
    }

    public function added_ca_consultation($data_ary){
        $this->db->insert('ca_consultation', $data_ary);
        $result = $this->db->affected_rows();
        return $result;
    }

    public function added_ca_leads($data_ary){
        $this->db->insert('ca_assessment', $data_ary);
        $result = $this->db->affected_rows();
        return $result;
    }

	public function update_ca_leads($data_ary,$id){
        $this->db->set($data_ary);
		$this->db->where('idx', $id);
		$this->db->update('ca_assessment');
        $result = $this->db->affected_rows();
        return $result;
    }
	public function update_au_leads($data_ary,$id){
        $this->db->set($data_ary);
		$this->db->where('idx', $id);
		$this->db->update('au_assessment');
        $result = $this->db->affected_rows();
        return $result;
    }

    public function added_au_leads($data_ary){
        $this->db->insert('au_assessment', $data_ary);
        $result = $this->db->affected_rows();
        return $result;
    }

    public function no_of_assessment($u_id = ""){
		$this->db->select("COUNT(assessment.id) AS no_of_assessments");
		$this->db->from('assessment');
		if($u_id != ""){
			$this->db->where('e_id',$u_id);
		}
		else {
		    $this->db->where('e_id != "0"');
			//$this->db->or_where('e_id', null);
		}
		$this->db->where('e_id != "13"');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function max_lead_count(){
		$this->db->select("MAX(aipp_assessment.id) AS no_of_assessments");
		$this->db->from('aipp_assessment');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function no_of_aipp_assessment($u_id = ""){
		$this->db->select("COUNT(aipp_assessment.id) AS no_of_assessments");
		$this->db->from('aipp_assessment');
		if($u_id != ""){
			$this->db->where('e_id',$u_id);
		}
		else {
		    $this->db->where('e_id != "0"');
			//$this->db->or_where('e_id', null);
		}
		$this->db->where('e_id != "13"');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function no_of_aipp_assessment2($u_id = ""){
		$this->db->select("COUNT(aipp_assessment.id) AS no_of_assessments");
		$this->db->from('aipp_assessment');
		if($u_id != ""){
			$this->db->where('e_id',$u_id);
		}
		else {
		    $this->db->where('e_id != "0"');
			//$this->db->or_where('e_id', null);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function no_of_cec_assessment2($u_id = ""){
		$this->db->select("COUNT(cec_assessment.id) AS no_of_assessments");
		$this->db->from('cec_assessment');
		if($u_id != ""){
			$this->db->where('e_id',$u_id);
		}
		else {
		    $this->db->where('e_id != "0"');
			//$this->db->or_where('e_id', null);
		}
		$query = $this->db->get();
		return $query->result();
	}
	
	public function no_of_assessment2($u_id = ""){
		$this->db->select("COUNT(assessment.id) AS no_of_assessments");
		$this->db->from('assessment');
		if($u_id != ""){
			$this->db->where('e_id',$u_id);
		}
		else {
		    $this->db->where('e_id != "0"');
			//$this->db->or_where('e_id', null);
		}
		$query = $this->db->get();
		return $query->result();
	}
	
	public function no_of_selected_assessment($u_id = ""){
		$this->db->select("COUNT(assessment.id) AS no_of_assessments");
		$this->db->from('assessment');
		if($u_id == ""){
			return false;
		}
		else {
		    $this->db->where('e_id = ' . $u_id);
		    $query = $this->db->get();
		    return $query->result();
		}
		
	}
	
	public function no_of_investment_assessment(){
		$this->db->select("COUNT(invesment_assessment.id) AS no_of_investment_assessment");
		$this->db->from('invesment_assessment');
		$this->db->where('reject', 'N');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function no_of_r_assessment(){
		$this->db->select("COUNT(invesment_assessment.id) AS no_of_r_assessment");
		$this->db->from('invesment_assessment');
		$this->db->where('reject', 'Y');
		$query = $this->db->get();
		return $query->result();
	}

	public function no_of_ca_assessment($u_id = ""){
		$this->db->select("COUNT(ca_assessment.id) AS no_of_ca_assessments");
		$this->db->from('ca_assessment');
		if($u_id != ""){
			$this->db->where('e_id',$u_id);
		}
		else {
			$this->db->or_where('e_id', null);
		}
		$query = $this->db->get();
		return $query->result();
	}
	
	public function no_of_inv_assessment($u_id = ""){
		$this->db->select("COUNT(invesment_assessment.id) AS no_of_ca_assessments");
		$this->db->from('invesment_assessment');
		if($u_id != ""){
			$this->db->where('e_id',$u_id);
		}
		else {
			$this->db->or_where('e_id', null);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function max_no_of_ca_assessment($u_id = ""){
		$this->db->select("MAX(ca_assessment.id) AS no_of_ca_assessments");
		$this->db->from('ca_assessment');
		$query = $this->db->get();
		return $query->result();
	}

	public function no_of_au_assessment($u_id = ""){
		$this->db->select("COUNT(au_assessment.id) AS no_of_au_assessments");
		$this->db->from('au_assessment');
		if($u_id != ""){
			$this->db->where('e_id',$u_id);
		}
		else {
			$this->db->or_where('e_id', null);
		}
		$query = $this->db->get();
		return $query->result();
	}
}
?>
