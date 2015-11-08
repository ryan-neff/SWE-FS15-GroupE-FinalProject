<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FormController extends CI_Controller {
	function index() {	
		/* -------------------------------------------------
		   loads the form validation library from 
		   CodeIgniter for error messages
		   -----------------------------------------------*/
		$this->load->library('form_validation');
		
		/* -------------------------------------------------
		   gather user submission data from name attribute
		   -----------------------------------------------*/
		$fullName = $this->input->post("username");
		$pawPrintSSO = $this->input->post("pawprint");
		$title = $this->input->post("title");
		$EmpID = $this->input->post("emp_ID");
		$academicOrg = $this->input->post("org");
		$campusAddress = $this->input->post("address");
		$phoneNumber = $this->input->post("phone");
		
		/* -------------------------------------------------
		   Each user submisson field has a validation rule
		   -----------------------------------------------*/
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
		
		
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

