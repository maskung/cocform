<?php
class M_approve extends CI_Model { 

	function __construct(){
		parent::__construct();
	}	
   

   
  // Gallery PAGE //
    
	function get_customer(){
	    
		$user = "SELECT * FROM `ld_customer`  ";
		//echo $user; die;
		$member= $this->db->query($user);
		
		return $member;
		
	}
	
	function edit_class($id_class,$id_user){
	    
		$edit = "update ld_customer set class_user='$id_class' where id_user='$id_user' ";
		//echo $edit; die;
		$member= $this->db->query($edit);
		
		return $member;
		
	}

   
   // END Gallery PAGE //
   


}
     
   



?>