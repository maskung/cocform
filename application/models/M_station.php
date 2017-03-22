<?php
class M_station extends CI_Model {

	function __construct(){
		parent::__construct();
	}

    /***
     * getBts - get all BTS station data
     * $retun : stations
     *
     */
	function getBts() {

		$sql = "SELECT * FROM m_station WHERE line_id = 1 OR line_id = 2";
		$query = $this->db->query($sql);

		return $query->result();
	}

    /***
     * getMrt - get all BTS station data
     * $retun : stations
     *
     */
	function getMrt() {

		$sql = "SELECT * FROM m_station WHERE line_id = 3";
		$query = $this->db->query($sql);

		return $query->result();
	}



}





?>
