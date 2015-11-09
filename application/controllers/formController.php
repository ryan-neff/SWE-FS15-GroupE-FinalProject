<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FormController extends CI_Controller {
	function index() {	
		
		$this->load->helper(array('form', 'url'));
		/* -------------------------------------------------
		   loads the form validation library from 
		   CodeIgniter for error messages; 
		   
		   any resulting error message is placed in <div class="error">
		---------------------------------------------------*/
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		
		/* -------------------------------------------------
	   		Each user submisson field has a validation rule
	   	-----------------------------------------------*/
		$this->form_validation->set_rules('username', 'Username', 'required|alpha|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('pawprint', 'Pawprint', 'required|apha_numeric|exact_length[6]');
		$this->form_validation->set_rules('title', 'Title', 'required|alpha|max_length[10]');
		$this->form_validation->set_rules('emp_ID', 'Employee Id', 'required|integer|exact_length[8]');
		$this->form_validation->set_rules('org', 'Academic Org', 'required|max_length[32]');
		$this->form_validation->set_rules('address', 'Campus Address', 'required|max_length[100]');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|exact_length[10]');
		$this->form_validation->set_rules('request', 'Type of Request', 'required');		

		$this->form_validation->set_rules('ferpa', 'FERPA Score', 'required|decimal|max_length[6]|less_than[100.01]');		
		$this->form_validation->set_rules('access', 'Access Description', 'required|max_length[256]');
		$this->form_validation->set_rules('career[]', 'Academic Careeers', 'required');
		
		
		/* -------------------------------------------------
		   gather user submission data from name attribute
		
		$fullName = $this->input->post("username");
		$pawPrintSSO = $this->input->post("pawprint");
		$title = $this->input->post("title");
		$EmpID = $this->input->post("emp_ID");
		$academicOrg = $this->input->post("org");
		$campusAddress = $this->input->post("address");
		$phoneNumber = $this->input->post("phone");
		
		if( $this->post("request") == "new") {
			$isNew = 1;
			$isCopy = 0;
		}
		else {
			$isNew = 0;
			$isCopy = 1;
		}
		
		
		
		$ferpaScore = $this->input->post("ferpa");
		if(ferpaScore > 85)
			$isValidFERPA = 1;
		else
			$isValidFERPA = 0;
			
		$accessDesc = $this->input->post("access");
		
		
		
		--------------------------------------------------*/
		
		
		/* -------------------------------------------------
		   form validation: run() returns TRUE, iff, all 
		   validation rules have been applied successfully 
		   -----------------------------------------------*/
		   
		if ($this->form_validation->run() == FALSE){
			$this->load->view('myZouSecurityRequestForm');
		}
		else{
			$this->load->view('welcome_message');
		}
	}
}

