<?php
class M_allproduct extends CI_Model { 

	function __construct(){
		parent::__construct();
	}	
   

   
    
	function get_product(){
	    
		$prod = "SELECT * FROM `ld_product`  ";
		//echo $user; die;
		$product= $this->db->query($prod);
		
		return $product;
		
	}
	
	function edit_product($id_product){
	    
		$edit_product = "SELECT * FROM `ld_product` where id_product ='$id_product' ";
		//echo $edit_product; die;
		$product= $this->db->query($edit_product);
		
		return $product;
		
	}
	
	
   	function delete_product($id_product){
	    
		$delete = "delete  FROM `ld_product` where id_product= '$id_product' ";
		//echo $delete; die;
		$product= $this->db->query($delete);
		
		return $product;
		
	}
	
	 function edit($product_name,$package,$price,$store,$category1,$tag,$area,$detail,$id){
	
		$edit = "UPDATE ld_product SET 	
					product_name='$product_name',package='$package',product_price='$price',store_name='$store',category='$category1',tag='$tag',bts='$area',detail='$detail'
						 where id_product= '$id' ";
		//echo $edit; die;
		$register = $this->db->query($edit);
	
		return $register;
		
   }
	
  
   


}
     
   



?>