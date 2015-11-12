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
            //$this->load->database();
       }

   		
   		//show login page
   		public function index(){
        
   			$this->load->view('loginPage');

//<<<<<<< Updated upstream
             //if(isset($_POST['submit'])){
               //$this->UserModel->get_user_data();
    
//=======
             if(isset($_POST['submit_login'])){
               check_login();
            }
//>>>>>>> Stashed changes
   		}
   		
   		//validate and store register data in db 
   		public function new_user_registration() {
   			
   			//check validation from registration
   			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
   			
   			if ($this->form_validation->run() == FALSE) {
   				$this->load->view('loginPage');
   			} else {
   				$data = array (
   					'username' => $this->input->post('username'),
   					'email' => $this->input->post('email'),
   					'password' => htmlspecialchars($this->input->post('password'))
   					);
   					
   					$result = $this->UserModel->registration_insert($data);
   					
   					if ($result == TRUE) {
   						$data['message_display'] = 'Registration succesfull!';
   						$this->load->view('loginPage', $data);
   					} else {
   						$data['message_display'] = 'Username already exists';
   						$this->load->view('loginPage', $data);
   						}
   					}
   				
   		
   		
   		}
   		
   		
   		public function check_login() {
   		
   			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
   			
   			if ($this->form_validation->run() == FALSE){
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
   					
            //comment
   					if ($result == TRUE) {
   						$username = $this->input->post('username');
   						$result = $this->UserModel->read_user_info($username);
   						if ($result == false) {
   							$session_data = array(
   								'username' => $result[0]->username,
   							);
   							
   							//add user data in session
   							$this->session->set_userdata('logged_in', $session_data);
   							$this->load->view('securityRequestForm');
   						}
   					} else {
   					
   						$data = array(
   							'error_message' => 'Ivalid username or password'
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
         
        
        public function create_user(){
        
        //encrypt password provided by user
        mt_srand();
		$salt = sha1(mt_rand()); 
        $password = htmlspecialchars($this->input->post('password'));
        $pwHash = sha1($salt.$password);
         
         //create array to be passed to model for query
         $user_data = array(
         	'PawprintSSO' => $this->input->post('pawprint'),
         	'hashedSalt' =>$salt,
         	'hashedPassword' => $pwHash
         	);


         //insert user into DB
         $this->UserModel->insert_user($user_data[0]);
         $this->UserModel->insert_authentication($user_data);
    
        }
        
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
        	$this->UserModel->update_user_info($user_data,$sso);

        }
   }
