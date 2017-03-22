
<?php
class M_subcategory extends CI_Model 
{
	
    /***
     * take care the media and coupon sub category
     *
     */
	
	function __construct()
	{
		parent::__construct();
	}

    /***
     * getSub - get all sub category use with media and coupon
     *
     */
	function getSub($cate)
	{
        $this->db->where_in('id_cate', $cate);

        $this->db->order_by("id_cate", "ASC");
		return $this->db->get('ld_subcategory')->result();
	}


}
?>
