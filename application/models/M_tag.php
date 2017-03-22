
<?php
class M_tag extends CI_Model
{

    /***
     * tag is the product tag
     *
     */

	function __construct()
	{
		parent::__construct();
	}

    /**
     * register review when user put the message to the review box 
     *
     * @param $memberId - member id of user
     * @param $mediaId - mediaid with user review
     */

    public function addKeyword($keyword) {

        $now = date("Y-m-d H:i:s");

        $data = array();
        $data["keyword"] = $keyword;
        $data["created"] = $now;

        // insert media table
        $this->db->insert('m_tag',$data);


    }

    /***
     * delKeyword -  delete media and picture from database 
     * $retun : none
     *
     */
	function delKeyword($id) {

        //delete record in database with id
        $this->db->delete('m_tag',array('id' => $id));
	}

    /***
     * getAll - get all tags use with media and coupon
     *
     */
	function getAll()
	{

        $this->db->order_by("keyword", "ASC");
		return $this->db->get('m_tag')->result();
	}
	
	

}
?>
