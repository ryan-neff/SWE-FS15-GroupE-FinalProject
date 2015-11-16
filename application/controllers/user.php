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
   		
   		/* 
       |  The following function will be used for creating a login feature for the user
       |  ------------------------------------------------------------------------------------
       |   Takes the pawprint (SSO) and desired password from the user input. 
       |   it will then encrypt the password and pass it to the User model
       |   to be then inserted into the database.
      */
      public function new_user_registration() {
   			//correct form
   			$this->form_validation->set_rules('firstName', 'First Name', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('lastName', 'Last Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pawprint', 'Pawprint', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('ferpa', 'FERPA Score', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('campusAddress', 'Campus address', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('academicOrg', 'Academic Organization', 'trim|required|xss_clean');
   			
        $this->form_validation->set_rules('education', 'Education Selection', 'trim|required|callback_checkSelectBox');
   			$this->form_validation->set_message('checkSelectBox', 'You have to select something other than the default');

        $this->form_validation->set_rules('createPassword', 'Password', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'trim|required|matches[password]|xss_clean');
   			

  			
   			if ($this->form_validation->run() == FALSE) {
   				$this->load->view('loginPage');
   			} 
        else {
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

   				$user_data = array (
   					'fullName' => $this->input->post('fullName'),
   					'pawprint' => $this->input->post('pawprint'),
   					'title' => $this->input->post('title'),
   					'phoneNumber' => $this->input->post('phoneNumber'),
   					'FERPAscore' => $this->input->post('FERPAscore'),
   					'campusAddress' => $this->input->post('campusAddress'),
   					'academicOrg' => $this->input->post('academicOrg'),
   					'isUGRD' => $isUGRD,
   					'isGRAD' => $isGRAD,
   					'isMED' => $isMED,
   					'isVETMED' => $isVETMED,
   					'isLAW' => $isLAW
          );
					
					//hash the password
					mt_srand();
					$salt = sha1(mt_rand());
					$password = htmlspecialchars($this->input->post('password'));
					$pwHash = sha1($salt.$password);
					
					$authen_data = array (
						'pawprint' => $this->input->post('pawprint'),
						'hashedSalt' => $salt,
						'hashedPassword' => $pwHash
					);
   					
   			  $result_register = $this->UserModel->insert_authen($authen_data);
   				$result_authen = $this->UserModel->insert_user($user_data);
   					
   					   					
   				if ($result_register && $result_authen== TRUE) {
   						$this->load->view('myZouSecuirtyRequestForm', $user_data);
   				} 
          else {
   						$this->load->view('loginPage', $user_data);
   				}
   			}//end else		
   	  }//end registration funciton 
      
      
      public function check_login() {
        $this->form_validation->set_rules('loginUsername', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('loginPassword', 'Password', 'trim|required|xss_clean');
   			
   			if ($this->form_validation->run() == FALSE) {
   			  if(isset($this->session->userdata['logged_in'])) {
   					$this->load->view('myZouSecurityRequestForm');
   		
   				} 

          else {
   					$this->load->view('loginPage');
   				}
   			
   			} 
        else {
   			
   				$data = array(
   					'username' => $this->input->post('username'),
   					'password' => $this->input->post('password')
   				);
   					
   				$result = $this->UserModel->login($data);

   				if ($result == TRUE) {
   					$username = $this->input->post('username');


						$session_data = array(
							'username' => $data['username'],
						);
						
						//add user data in session
						$this->session->set_userdata('logged_in', $session_data);
						$this->load->view('myZouSecurityRequestForm');
					} 
          else {
   							$this->load->view('loginPage'); 
   				}
   			}
   		}//end login funciton 
   		
        
      public function checkSelectBox($selection){
        return $selection == "false" ? FALSE : TRUE;
      } //end select validation funciton 
       

      /*  
      |	Once the user has filled in the remainder of the data neccesary to fill the 
      |	tuple in the database the following function should be called to update the information
      |--------------------------------------------------------------------------------------------
      |   update_user_information  <- Will take all neccesary form input from the user
      |								and will pass it to the User model along with the
      |								users pawprint (SSO) in order to update that users
      |								fields in the database.
      */ 
      public function update_user_information(){
        $sso = $this->insert->post('pawprint');
        $user_data = array(
        		'EmpID'=> $this->input->post('emp_id'),
    				'fullName' => $this->input->post('username'),
    				'title' => $this->input->post('title'),
    				'phoneNumber' => $this->input->post('phone'),
    				'FERPAscore' => $this->input->post('ferpa'),
    				'campusAddress' => $this->input->post('address'),
    				'academicOrg' => $this->input->post('org'),
    				'isUGRD' => $this->input->post('ugrd'),
    				'isGRAD' => $this->input->post('grad'),
    				'isMED' => $this->input->post('med'),
    				'isVETMED' => $this->input->post('vet med'),
    				'isLAW' => $this->input->post('law')
        );
        		//add email and student_Worker 
        	
        $this->UserModel->update_user_info($user_data,$sso);
      } //end update user function
}
?>