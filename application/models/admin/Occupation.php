
<?php
class Occupation extends CI_Model 
{
	
	
	function __construct()
	{
		parent::__construct();
	}

	//call data all in database comeback show
	function getAll()
	{
        $this->db->order_by("id_occ", "asc");
		return $this->db->get('occupation')->result();
	}


}
?>
