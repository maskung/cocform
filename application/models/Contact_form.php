<?php 

class Contact_form extends CI_Model { 
	function __construct(){
		parent::__construct();
	}

	public function addcontact($data = array(), $sv){
		$name = "'".$data['name']."'";
		$email = "'".$data['email']."'";
		$company = "'".$data['company']."'";
		$title = "'".$data['title']."'";
		$services = "'".$sv."'";
		$budget = "'".$data['budget']."'";
		$getstart = "'".$data['getstart']."'";
		$didwemiss = "'".$data['didwemiss']."'";
		$date = "'".$data['date']."'";
		$sql = "INSERT INTO contact (name, email, company, title, services, budget, getstart, didwemiss, sent)
		VALUES ($name, $email, $company, $title, $services, $budget, $getstart, $didwemiss, $date)";
		$this->db->query($sql);
	}

	public function getallcontact(){
		$sql = "SELECT * FROM contact ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getAllExceptId(){
		$sql = "SELECT `name`, `email`, `company`, `title`, `services`, `budget`, `getstart`, `didwemiss`, `sent` FROM contact ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getContactById($id){
		$sql = "SELECT * FROM contact WHERE id = $id";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function deleteContactById($id){
		$sql = "DELETE FROM contact WHERE id = $id";
		$query = $this->db->query($sql);
	}
}

?>