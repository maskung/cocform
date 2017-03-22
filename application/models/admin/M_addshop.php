<?php
class M_addshop extends CI_Model { 

	function __construct(){
		parent::__construct();
	}	
   
    function add_shop($product_name,$package,$price,$store,$category1,$tag,$area,$detail){
	   // echo $md5_pass; die;
	   // $category = serialize($category1);
	   //$cat = unserialize($category);
	   //print_r ($category); 
		// print_r ($cat); die;
		$save = "INSERT INTO ld_product (product_name,package,product_price,store_name,category,tag,bts,detail,date_add) 
					VALUES ('$product_name','$package','$price','$store','$category1','$tag','$area','$detail',now())";
		//echo $save; die;
		$register = $this->db->query($save);
	
		return $register;
		
   }


	function insert_image($id,$name_picture)
	{
		$sql = "UPDATE ld_product SET 	picture='$name_picture'  WHERE id_product='$id' ";
		$query = $this->db->query($sql);
		
		return $query;
	}
	
	
	function bts(){
		
		$bts =  "SELECT * FROM `ld_bts`";
		$query = $this->db->query($bts);
		return $query;
	}
	
	
   
   // END PROFILE PAGE //
   


}
     
   



?>