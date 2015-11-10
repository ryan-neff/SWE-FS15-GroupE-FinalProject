<?php
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
/*
    public function get_user_data(){
    	$this->db->get('groupe.user');

    	echo intval($this);
    }
*/

	    public function get_user_data() {
    $query = $this->db->query('SELECT fullName, title FROM user');

foreach ($query->result() as $row)
{
        echo $row->fullName;
        echo ("<br>");
        echo $row->title;
     
}
echo ("<br>");
echo 'Total Results: ' . $query->num_rows();
    }


}

?>