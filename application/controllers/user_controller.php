<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   class User_controller extends CI_Controller{

   		 public function __construct()
       {
            parent::__construct();
            $this->load->model('User_model');
       }

   		public function index(){
   			$this->load->view('loginPage');

            if(isset($_POST['submit'])){
                echo "WE in this";
            }
   		}
        
        

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
        $pwHash = sha1($password.$salt);
         
         //create array to be passed to model for query
         $user_data = array(
         	'PawprintSSO' => $this->input->post('pawprint'),
         	'hashedSalt' =>$salt,
         	'hashedPassword' => $pwHash
         	);


         //insert user into DB
         $this->User_model->insert_user($user_data[0]);
         $this->User_model->insert_authentication($user_data);
    
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
        	$this->User_model->update_user_info($user_data,$sso);

        }
   }

 ?>