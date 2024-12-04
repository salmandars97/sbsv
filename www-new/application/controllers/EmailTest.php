<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class EmailTest extends CI_Controller {

 

	public function __construct() {
		parent::__construct();
		$this->load->Model('Auth_model');
		$this->load->Model('Testimonials_model');
		$this->load->Model('Contact_model');
		$this->load->Model('About_model');
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

    public function index(){
		
		$auth = $_GET['yesdev'];
		if($auth == "verify"){
			$this->load->library('email');

			$this->email->from('m3vcmuc73997@sbsv.test', 'stepbystepvisas');
			$this->email->to('leads@sbsv.test');

			$this->email->subject('Assessment was rejected.');
            $query = $this->db->get_where('assessment', array('id' => '924'));
		//$query = $this->db->where('id', $id);
		    $message = '<html><body>';
            $message .= "<p style='font-family: monospace;font-size:15px;'>Following are the details of rejected canidate.</p><br>";
    		$message .= '<table style="text-align: justify;border-collapse: collapse; width: 100%;">';
    		
    		foreach ($query->result() as $row)
        	{
        		$message .= "<tr>";
        		$message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Id</th>';
        		$message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->id . "</td>";
        		$message .= "</tr>";
        		$message .= "<tr>";
        		$message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Destination</th>';
        		$message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->destination . "</td>";
        		$message .= "</tr>";
        		$message .= "<tr>";
        		$message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Name</th>';
        		$message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->name . "</td>";
        		$message .= "</tr>";
        		$message .= "<tr>";
        		$message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Email</th>';
        		$message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->email . "</td>";
        		$message .= "</tr>";
        		$message .= "<tr>";
        		$message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Phone No</th>';
        		$message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->phone_no . "</td>";
        		$message .= "<tr>";
        		$message .= "<tr>";
        		$message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Occupation</th>';
        		$message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->occupation . "</td>";
        		$message .= "</tr>";
        		$message .= "<tr>";
        		$message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Reference</th>';
        		$message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->que . "</td>";
        		$message .= "</tr>";
        		$message .= "<tr>";
        		$message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Date</th>';
        		$message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'>" . $row->date_added . "</td>";
        		$message .= "</tr>";
        		$message .= "<tr>";
        		$message .= '<th style="background-color: #9c27b0;color: white;text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;">Resume</th>';
        		$message .= "<td style='text-align: left; padding: 8px;border: #c7bfbf solid 1px;font-family: monospace;'><a href='".base_url().'assets/admin/images/file/' . $row->datafile . "'> Download</a></td>";
        		$message .= "</tr>";
        	  }
        	    $message .= "</table>";	
        	    $message .= '</body></html>';
        	    
        	    $this->email->set_mailtype("html");
			    $this->email->message($message);
			if($this->email->send()) {
				echo "success";
			}
			else{
				echo "error";
			}
		}
		else{
			echo "<h1>Access denied</h1>";
		}
	}

}
