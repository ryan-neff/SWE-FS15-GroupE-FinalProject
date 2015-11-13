<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   class UserModel extends CI_Model{

	function __construct(){
		parent::__construct();
		
		$this->load->database();
      }


	//takes array of user data to be stored in user table in the db
	public function insert_user($user_data){
         $this->db->insert('securityRequests.user',$user_data);
	}

	public function insert_request($request_data){
		$this->db->insert('securityRequests.request',$request_data);
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

	//registers the user
    public function registration_insert($user_data){
      if($this->db->insert($user_data)){
        return TRUE;
      }
     }
      
      //checks input from the user to validate login
      public function login($user_data){

        $this->db->select('PawprintSSO,hashedSalt,hashedPassword');
        $this->db->where('PawprintSSO', $user_data['username']);
        $this->db->from('authentication');
        $query = $this->db->get();

		//echo $query->result_array();
		//print_r ($query->result_array());
		
        foreach ($query->result_array() as $row) {
          $sso = $row['PawprintSSO'];
          $salt = $row['hashedSalt'];
          $password = $row['hashedPassword'];
        }

        if(($user_data['username'] == $sso) && sha1($salt.$user_data['password']) == $password){
          return TRUE;
        } else {
        	return FALSE; 
        }
      }

    public function read_user_info($username){
        return FALSE; //temporary
    }

     public function get_user_data()
     {
     	$query = $this->db->query('SELECT fullName, title FROM user');

     	foreach ($query->result() as $row) {
     		echo $row->fullName;
     		echo ("<br>");
     		echo $row->title;
     	}

     	echo ("<br>");
     	echo 'Total Results: ' . $query->num_rows();
     }


}

?>
