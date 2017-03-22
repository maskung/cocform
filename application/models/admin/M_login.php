<?php
class M_login extends CI_Model { 

	function __construct(){
		parent::__construct();
	}	


	function get_login($username,$pass){
	    
		//echo $pass; die;
		$get_log = "SELECT * FROM ld_customer where username = '".$username."' and password = '".$pass."' ";
		//	echo $get_log; die;
		$data = $this->db->query($get_log);
		
		return $data;
		
	}
}










 
?>