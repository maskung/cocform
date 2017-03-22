
<?php
class M_admcategory extends CI_Model 
{
	
    /***
     * take care the media and coupon category
     *
     */
	
	function __construct()
	{
		parent::__construct();
	}

    /***
     * getAll - get all category use with media and coupon
     *
     */
	function getAll($realcate = 0)
	{
       
        $this->db->order_by("id_cate", "ASC");
		return $this->db->get('ld_category')->result();
	}


}
?>
