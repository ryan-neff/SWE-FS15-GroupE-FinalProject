<?php 
session_start(); //start session in order to access it through CI 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   class User extends CI_Controller{

   		 public function __construct()
       {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->helper('form'); //form helper
            $this->load->library('form_validation'); //form validation library
            $this->load->library('session');
       }

   		
   		//show login page
   		public function index(){
        
   			$this->load->view('loginPage');


   		}
   		
   		//new registration function 
public function new_user_registration() {
   			//correct form
   			$this->form_validation->set_rules('fullName', 'Full Name', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('pawprint', 'Pawprint', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('phoneNumber', 'Phone Number', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('FERPAscore', 'FERPA Score', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('campusAddress', 'Campus address', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('academicOrg', 'Academic Organization', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('isUGRD', 'Is Undergrad', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('isGRAD', 'Is Grad', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('isMED', 'Is Med', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('isVETMED', 'Is VetMed', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('isLAW', 'Is Law', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[retypePassword]');
   			$this->form_validation->set_rules('retypePassword', 'Retype Password', 'trim|required|xss_clean');
   			

  			
   			if ($this->form_validation->run() == FALSE) {
   				$this->load->view('loginPage');
   			} else {
   				$user_data = array (
   					'fullName' => $this->input->post('fullName'),
   					'pawprint' => $this->input->post('pawprint'),
   					'title' => $this->input->post('title'),
   					'phoneNumber' => $this->input->post('phoneNumber'),
   					'FERPAscore' => $this->input->post('FERPAscore'),
   					'campusAddress' => $this->input->post('campusAddress'),
   					'academicOrg' => $this->input->post('academicOrg'),
   					'isUGRD' => $this->input->post('isUGRD'),
   					'isGRAD' => $this->input->post('isGRAD'),
   					'isMED' => $this->input->post('isMED'),
   					'isVETMED' => $this->input->post('isVETMED'),
   					'isLAW' => $this->input->post('isLAW')
   		
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
   					} else {
   						$this->load->view('loginPage', $user_data);
   						}
   			}//end else
   				
   	}//end funciton 
   		
   		
   		
   		
   		
public function check_login() {
   		
   			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
   			
   			if ($this->form_validation->run() == FALSE) {
   				if(isset($this->session->userdata['logged_in'])) {
   					$this->load->view('myZouSecurityRequestForm');
   					
   				} else {
   					$this->load->view('loginPage');
   				}
   			
   			} else {
   			
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
   						
   					} else {
   					
   						$data = array(
   							'error_message' => 'Invalid username or password'
   							);
   							$this->load->view('loginPage', $data); 
   						
   					}
   			}
   		}
   		
   		
   		
        //When user presses either submit button, the next view that needs to be called is the securityform view
        

       
        /* 
         |  The following function will be used for creating a login feature for the user
         |  ------------------------------------------------------------------------------------
         |  create_user  <-  Takes the pawprint (SSO) and desired password from the user input. 
         |                   it will then encrypt the password and pass it to the User model
         |                   to be then inserted into the database.
         */
         

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

        }
   }
