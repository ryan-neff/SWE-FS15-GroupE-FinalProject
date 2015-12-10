<?php 
session_start(); //start session in order to access it through CI 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class User extends CI_Controller{

      public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->helper('form'); //form helper
        $this->load->library('form_validation'); //form validation library
        $this->load->library('session');
          
      }

   		
   		//show login page; auto loaded without 
      //specification of controller
   	  public function index(){
        
   			$this->load->view('loginPage');
      }
        public function loadRequestForm(){
        
   			$this->load->view('myZouSecurityRequestForm');
      }
    
        

      public function new_user_registration() {
   			//correct form
   			$this->form_validation->set_rules('firstName', 'First Name', 'trim|required||alpha|min_length[4]|max_length[25]|xss_clean');
   			$this->form_validation->set_rules('lastName', 'Last Name', 'trim|required||alpha|min_length[4]|max_length[25]|xss_clean');
        	$this->form_validation->set_rules('pawprint', 'Pawprint', 'trim|required||apha_numeric|exact_length[6]|xss_clean');
        	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[50]|xss_clean');
        	$this->form_validation->set_rules('empID', 'Employee ID', 'trim|required|integer|exact_length[8]|xss_clean');
   			$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[10]|xss_clean');
   			$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|integer|exact_length[10]|xss_clean');
   			$this->form_validation->set_rules('ferpa', 'FERPA Score', 'trim|required||decimal|max_length[6]|less_than[100.01]|xss_clean');
   			$this->form_validation->set_rules('campusAddress', 'Campus address', 'trim|required|max_length[100]|xss_clean');
   			$this->form_validation->set_rules('academicOrg', 'Academic Organization', 'trim|required|max_length[32]|xss_clean');
   			$this->form_validation->set_rules('education', 'Education Selection', 'callback_checkSelectBox');
   			$this->form_validation->set_message('checkSelectBox', 'You have to select something other than the default');
			$this->form_validation->set_rules('createPassword', 'Password', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'trim|required|matches[createPassword]|xss_clean');
          
          $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
   	        
  			
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('loginPage'); //if form valid isn't met reset back to login page
        } 
        else { //check the grad selection 
          
          if($this->input->post('education') == "ugrd"){
            $isUGRD = 1;
            $isGRAD = 0;
            $isMED = 0;
            $isVETMED = 0;
            $isLAW = 0;
          }
          elseif($this->input->post('education') == "grad"){
            $isUGRD = 0;
            $isGRAD = 1;
            $isMED = 0;
            $isVETMED = 0;
            $isLAW = 0;
          }
          elseif($this->input->post('education') == "med"){
            $isUGRD = 0;
            $isGRAD = 0;
            $isMED = 1;
            $isVETMED = 0;
            $isLAW = 0;
          }
          elseif($this->input->post('education') == "vetMed"){
            $isUGRD = 0;
            $isGRAD = 0;
            $isMED = 0;
            $isVETMED = 1;
            $isLAW = 0;
          }
          elseif($this->input->post('education') == "law"){
            $isUGRD = 0;
            $isGRAD = 0;
            $isMED = 0;
            $isVETMED = 0;
            $isLAW = 1;
          }
          
          $fist = $this->input->post('firstName');
          $last = $this->input->post('lastName');
          $fullName = $fist.$last;
          $isStudentWorker = 0;
            
   				$user_data = array (
            		'pawPrintSSO' => $this->input->post('pawprint'),
   					'EmpID' => $this->input->post('empID'),
   					'fullName' => $fullName,
   					'title' => $this->input->post('title'),
   					'phoneNumber' => $this->input->post('phone'),
   					'email' => $this->input->post('email'),				
   					'FERPAscore' => $this->input->post('ferpa'),
   					'campusAddress' => $this->input->post('campusAddress'),
   					'academicOrg' => $this->input->post('academicOrg'),
   					'isStudentWorker' => $isStudentWorker,
                    'isUGRD' => $isUGRD,
   					'isGRAD' => $isGRAD,
   					'isMED' => $isMED,
   					'isVETMED' => $isVETMED,
   					'isLAW' => $isLAW
          );
					
					//hash the password
					mt_srand();
					$salt = sha1(mt_rand());
					$password = htmlspecialchars($this->input->post('confirmPassword'));
					$pwHash = sha1($salt.$password);
					
					$authen_data = array (
						'pawPrintSSO' => $this->input->post('pawprint'),
						'hashedSalt' => $salt,
						'hashedPassword' => $pwHash
					);
   					
   				//insert user data and authen data into DB thru user model 
   			    $result_register = $this->UserModel->insert_authen($authen_data);
   				$result_authen = $this->UserModel->insert_user($user_data);
   				
   			
   					   					
   				if ($result_register== TRUE && $result_authen== TRUE) {
   						echo "Registration successfull!";
   						$this->load->view('homePage', $user_data);
   				} 
          		else {
   						$this->load->view('loginPage');
   				}
   			}	
   	  }//end registration funciton 
      
      
      public function check_login() {
        $this->form_validation->set_rules('loginUsername', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('loginPassword', 'Password', 'trim|required|xss_clean');
        $this->form_validation->set_message('validateCreds', 'The username or password is incorrect');
   			
          $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
          
   			if ($this->form_validation->run() == FALSE) {
   			  if(isset($this->session->userdata['logged_in'])) {
   					$this->load->view('homePage');
   		
   				} else {
					
   					$this->load->view('loginPage');
   					}
   			
   			} 
            else {
   			
   				$data = array(
   					'username' => $this->input->post('loginUsername'),
   					'password' => $this->input->post('loginPassword')
   				);

   				//check username against passwords in DB thru user model 
   				$result = $this->UserModel->login($data);
			
   				if ($result == TRUE) {
   					$username = $this->input->post('loginUsername');


						$session_data = array(
							'username' => $data['username'],
                            //'logged_in' => TRUE
						);
						
						//add user data in session
						$this->session->set_userdata('logged_in', $session_data);
						$this->load->view('homePage');
					} 
          		else {
   							$this->load->view('loginPage'); 
   				}
   			}
      }//end login funciton 
      
      public function printAuthorization() {
      	$this->load->view('authorizationSlip');
      	
      
      }
      
      public function home() {
      	$this->load->view('homePage');
      }
   	
      public function logoutUser(){
          $sess_data = array('username' => '');
          $this->session->unset_userdata('logged_in', $sess_data);
          $this->session->sess_destroy();
          $user_data = $this->session->all_userdata();
          
          $this->load->view('loginPage');
      }
        

        
      public function checkSelectBox($selection){
        return $selection == "false" ? FALSE : TRUE;
      } //end select validation funciton  
    
      public function validateCreds($password,$username){
        $data = array(
   					'username' => $password,
   					'password' => $username
   				);

   					
   	    return $this->UserModel->login($data);
      } //end login validation funciton 

}
?>