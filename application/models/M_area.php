
<?php
class M_area extends CI_Model
{

    /***
     * Area is the area of customer and shop
     *
     */

	function __construct()
	{
		parent::__construct();
	}

    /***
     * getAll - get all area use with media and coupon
     *
     */
	function getAll()
	{

        $this->db->order_by("id", "ASC");
		return $this->db->get('m_area')->result();
	}
	
	function getStation() {

		$sql = "SELECT * FROM m_station ";
		$query = $this->db->query($sql);

		return $query->result();
	}

}
?>
