<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Consultancy extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->Model('Auth_model');
		$this->load->Model('Consultancy_model');
		$this->load->Model('Testimonials_model');
		$this->load->Model('Contact_model');
		$this->load->helper('security');
        if(isset($_POST)) {
            foreach($_POST as $key => $value) {
                if(isset($_POST[$key])) {
                    $_POST[$key] = $this->security->xss_clean($value);
                }
            }
        }
        if(isset($_GET)) {
            foreach($_GET as $key => $value) {
                if(isset($_GET[$key])) {
                    $_GET[$key] = $this->security->xss_clean($value);
                }
            }
        }
    }

	public function book_online()
	{
		$data['meta_title'] = 'Step-By-Step Immigration Services - Consultation with an Immigration Lawyer.';
		$data['title'] = 'Consultation with an Immigration Lawyer';
        $data['meta_description'] = 'Step-By-Step Immigration Services - Calculator your score and determine your eligibility.';
        $data['meta_keywords'] = 'Step-By-Step Immigration Services - Calculator your score and determine your eligibility.';
    	$data['contact_us'] = $this->Contact_model->contact_us();
		$this->db->select('*');
        $this->db->from('consultations');
		$this->db->order_by('id','desc');
		$query = $this->db->get();
        $data['programs'] = $query->result();
		$this->db->select('*');
        $this->db->from('consultants');
		$this->db->order_by('id','desc');
		$query = $this->db->get();
        $data['consultants'] = $query->result();
		$this->load->view('web/partials/header', $data);
		$this->load->view('web/consultants/index', $data);
		$this->load->view('web/partials/footer', $data);
		$this->load->view('web/consultants/js_code', $data);
	}

	public function book_appointment()
	{
		$data = array(
			'id' => $id,
			'name' => $this->input->post('name'),
			'consultant' => $this->input->post('consultant'),
			'email' => $this->input->post('email'),
			'contact_no' => $this->input->post('contact_no'),
			'note' => $this->input->post('note'),
			'timings' => $this->input->post('timings'),
			'country' => $this->input->post('country'),
			'appointment_date' => $this->input->post('appointment_date'),
			'amount' => $this->input->post('amount'),
			'program' => $this->input->post('program_name'),
			'created_by' => $_SESSION['user_id'],
			'status' => '0',
			'created_at' => date("Y-m-d H:i:s")
		);

		$this->db->insert('schedule_meetings', $data);
        $result = $this->db->affected_rows();
        if($result) {
			header('Content-Type: application/json');
    		echo json_encode(["success" => true]);
		}
        else {
			header('Content-Type: application/json');
    		echo json_encode(["success" => false]);
		}
	}

	public function thanks()
	{
		$data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services |Canadian Immigration Consultant UAE| Canadian Immigration Company| Free Assessment for Canada, USA, UK, Schengen, Australia| Canadian Immigration Consultant UAE';
	   	$data['meta_description'] = 'Step-by-Step Visas is a canadian base immigration service company. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
		$data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services| Step-By-Step Visas Canada Immigration Services |Canadian Immigration Consultant UAE| Canadian Immigration Company| Free Assessment for Canada, USA, UK, Schengen, Australia| Canadian Immigration Consultant UAE';
		$data['testimonial'] = $this->Testimonials_model->testimonial();
		$data['contact_us'] = $this->Contact_model->contact_us();
		$this->load->view('web/partials/header', $data);
		$this->load->view('web/thanks/index', $data);
		$this->load->view('web/partials/work');
		$this->load->view('web/partials/booking');
		$this->load->view('web/partials/review');
		$this->load->view('web/partials/eligibility');
		$this->load->view('web/partials/footer', $data);
	}

	//get_program_timings
	public function get_program_timings()
	{
		$this->db->select('*');
        $this->db->from('consultations');
        $this->db->where('id', $this->input->post('id'));
		$query = $this->db->get();
        // return $query->result();
		header('Content-Type: application/json');
    	echo json_encode( $query->result() );
	}

	// Consultants Modal
    public function consultants_list(){
		$this->Auth_model->isLoggedIn();
		$data['title'] = 'Consultant List';
		$data['consultants'] = $this->Consultancy_model->consultantsList();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/consultants/index', $data);
		$this->load->view('admin/partials/footer');
	}

	public function consultants_create(){
		$this->Auth_model->isLoggedIn();
		$data['title'] = 'Create Consultant';
		$this->db->select('*');
        $this->db->from('user');
		$this->db->order_by('user_id','desc');
		$query = $this->db->get();
        $data['users'] = $query->result();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/consultants/create', $data);
		$this->load->view('admin/partials/footer');
	}
	
	public function consultant_store(){
		$this->Auth_model->isLoggedIn();
		$data_array = array(
			'id' => $id,
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'user_id' => $this->input->post('user_id'),
			'created_by' => $_SESSION['user_id'],
			'status' => '1',
			'created_at' => date("Y-m-d H:i:s")
		);

		$result = $this->Consultancy_model->consultantStore($data_array);
		echo "<script>";
		echo "alert('Consultant created');";
		echo "</script>";
		redirect(base_url().'Consultancy/consultants_list', 'refresh');
	}

	public function consultant_delete(){
		$this->Auth_model->isLoggedIn();
		$id =  $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('consultants');
		echo "<script>";
		echo "window.location.href='javascript:history.go(-1)';";
		echo "</script>";
	}

	// Consultants Program Modal
    public function consultanting_program_list(){
		$this->Auth_model->isLoggedIn();
		$data['title'] = 'Program List';
		$data['consultants'] = $this->Consultancy_model->consultantingProgramList();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/consultanting/index', $data);
		$this->load->view('admin/partials/footer');
	}

	public function consultanting_program_create(){
		$this->Auth_model->isLoggedIn();
		$data['title'] = 'Create Program';
		// $this->db->select('*');
        // $this->db->from('user');
		// $this->db->order_by('id','desc');
		// $query = $this->db->get();
        // $data['users'] = $query->result();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/consultanting/create', $data);
		$this->load->view('admin/partials/footer');
	}
	
	public function consultanting_program_store(){
		$this->Auth_model->isLoggedIn();
		$timings = array();
		for($i=0;$i<count($this->input->post('available_timings1'));$i++) {
			array_push($timings, date('H:i a',strtotime($this->input->post('available_timings1')[$i])) . " - " . date('H:i a',strtotime($this->input->post('available_timings2')[$i])));
		}
		// print_r($timings);
		$data_array = array(
			'id' => $id,
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price'),
			'currency' => $this->input->post('currency'),
			'available_timings' => json_encode($timings,true),
			'created_by' => $_SESSION['user_id'],
			'status' => '1',
			'created_at' => date("Y-m-d H:i:s")
		);

		$result = $this->Consultancy_model->consultantingProgramStore($data_array);
		echo "<script>";
		echo "alert('Program created');";
		echo "</script>";
		redirect(base_url().'Consultancy/consultanting_program_list', 'refresh');
	}

	public function consultanting_program_delete(){
		$this->Auth_model->isLoggedIn();
		$id =  $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('consultanting');
		echo "<script>";
		echo "window.location.href='javascript:history.go(-1)';";
		echo "</script>";
	}

	// Consultants Meeting Modal
    public function consultanting_meeting_list(){
		$this->Auth_model->isLoggedIn();
		$data['title'] = 'Meeting List';
		$data['consultants'] = $this->Consultancy_model->consultantingMeetingList();
		$this->load->view('admin/partials/header');
		$this->load->view('admin/meeting/index', $data);
		$this->load->view('admin/partials/footer');
	}

	public function consultanting_meeting_delete(){
		$this->Auth_model->isLoggedIn();
		$id =  $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('schedule_meetings');
		echo "<script>";
		echo "window.location.href='javascript:history.go(-1)';";
		echo "</script>";
	}
	
	public function consultanting_meeting_reject(){
		$this->Auth_model->isLoggedIn();
		$id =  $this->input->post('id');
		$this->db->set(["status" => 2]);
		$this->db->where('id', $id);
		$this->db->update('schedule_meetings');
		echo "<script>";
		echo "window.location.href='javascript:history.go(-1)';";
		echo "</script>";
	}
	
	public function consultanting_meeting_approve(){
		$this->Auth_model->isLoggedIn();
		$id =  $this->input->post('id');
		$this->db->set(["status" => 1]);
		$this->db->where('id', $id);
		$this->db->update('schedule_meetings');
		echo "<script>";
		echo "window.location.href='javascript:history.go(-1)';";
		echo "</script>";
	}
}
?>
