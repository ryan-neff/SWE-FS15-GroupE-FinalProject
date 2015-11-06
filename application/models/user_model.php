<?php
   class User_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	//takes array of user data to be stored in user table in the db
	public function insert_user($user_data){
         $this->db->insert('securityRequests.user',$user_data);
	}

	//takes array of user authentication and inserts it into the db
	public function insert_authentication($auth_data){
		$this->db->insert('securityRequests.authentication',$auth_data);
	}

	//updates fields of the rest of the user table once filled out 
  	public function update_user_info($user_data,$sso){
  	 $this->db->where('PawprintSSO',$sso);
  	 $this->db->update('securityRequests.user',$user_data);
  }
	

}

?>