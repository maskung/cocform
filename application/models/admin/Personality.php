<?php
class Personality extends CI_Model 
{
	
	
	function __construct()
	{
		parent::__construct();
	}

	//call data all in database comeback show
	function getAll()
	{
        $this->db->order_by("id_ps", "asc");
		return $this->db->get('personality')->result();
	}


}
?>
