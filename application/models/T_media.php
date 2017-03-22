<?php
class T_media extends CI_Model { 

	function __construct(){
		parent::__construct();
	}	
   
    /**
     * register media when user use coupon
     *
     * @param $form_data - data has preparing from the form
     */

    public function addMedia($form_data = array(), $pics) {

        $now = date("Y-m-d H:i:s");

        // prepare data before insert to database
        $data = array();
        $data['title_english']  = empty($form_data['title_english'])?'':$form_data['title_english'];
        $data['title_japanese'] = empty($form_data['title_japanese'])?'':$form_data['title_japanese'];
        $data['title_thai']     = empty($form_data['title_thai'])?'':$form_data['title_thai'];
        $data['admin_id']       = $form_data['admin_id'];
        $data['short_desc_english']= empty($form_data['short_desc_english'])?'':$form_data['short_desc_english'];
        $data['short_desc_japanese']= empty($form_data['short_desc_japanese'])?'':$form_data['short_desc_japanese'];
        $data['short_desc_thai']= empty($form_data['short_desc_thai'])?'':$form_data['short_desc_thai'];
        $data['small_picture']  = $form_data['small_picture'];
        $data['big_picture']    = empty($pics[0])?'':$pics[0];
        $data['tag']            = empty($form_data['tag'])?'':$form_data['tag'];
        $data['category_id']    = $form_data['category_id'];
        $data['startdate']      = empty($form_data['startdate'])?'0000-00-00':$form_data['startdate'];
        $data['enddate']        = empty($form_data['enddate'])?'0000-00-00':$form_date['enddate'];
        $data['content_english']= $form_data['content_english'];
        $data['content_japanese']= $form_data['content_japanese'];
        $data['content_thai']   = $form_data['content_thai'];
        $data['likes']          = $form_data['likes'];
        $data['likes_total']    = 0;
        $data['is_ads']         = $form_data['is_ads'];
        $data['is_noindex']     = $form_data['is_noindex'];
        $data['modified']       = $now;
        $data['created']        = $now;
        $data['slug']           = $form_data['slug'];
        $data['meta_description']   = $form_data['meta-des'];
        $data['keyword']            = $form_data['keyword'];

        $data['title_english']      = str_replace('"', "&quot;", $data['title_english']);
        $data['title_japanese']      = str_replace('"', "&quot;", $data['title_japanese']);
        $data['title_thai']      = str_replace('"', "&quot;", $data['title_thai']);

        return $this->db->insert('t_media',$data);

    }
    public function insert_M_url($id){
        $str1 = 'home/blog_article/';
        $str2 = "'".$str1.$id."'";
        $sql = "UPDATE t_media SET url = $str2 WHERE id = $id";
        $query = $this->db->query($sql);
    }

   
    /**
     * update media when user use coupon
     *
     * @param $form_data - data has preparing from the form
     */

    /* FOR Page Ranking */
    public function most_view($id){
        $sql = "UPDATE t_media SET total_view = total_view+1 WHERE id = $id";
        $query = $this->db->query($sql);
    }
    public function check_client_ip($ip){
        $sql = "SELECT * FROM clients_ip WHERE ip = $ip";
        $query = $this->db->query($sql)->num_rows();
        return $query;
    }
    public function get_client_time($ip){
        $sql = "SELECT time FROM clients_ip WHERE $ip = ip";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function insert_client($ip){
        $now = date('Y-m-d H');
        $now = "'".$now."'";
        $sql = "INSERT INTO clients_ip (ip,time) VALUES ($ip,$now)";
        $query = $this->db->query($sql);
    }
    public function set_client_time($ip){
        $now = date('Y-m-d H');
        $now = "'".$now."'";
        $sql = "UPDATE clients_ip SET time = $now WHERE $ip = ip";
        $query = $this->db->query($sql);
    }
    /*----------------*/
    public function updateMedia($form_data = array(), $pics) {

        $now = date("Y-m-d H:i:s");

        // prepare data before insert to database
        $data = array();
        $data['title_english']      = empty($form_data['title_english'])?'':$form_data['title_english'];
        $data['title_japanese']     = empty($form_data['title_japanese'])?'':$form_data['title_japanese'];
        $data['title_thai']         = empty($form_data['title_thai'])?'':$form_data['title_thai'];
        $data['admin_id']           = $form_data['admin_id'];
        //$data['big_picture'] = $pics[0];
        $data['short_desc_english'] = empty($form_data['short_desc_english'])?'':$form_data['short_desc_english'];
        $data['short_desc_japanese']= empty($form_data['short_desc_japanese'])?'':$form_data['short_desc_japanese'];
        $data['short_desc_thai']    = empty($form_data['short_desc_thai'])?'':$form_data['short_desc_thai'];
        $data['tag']                = empty($form_data['tag'])?'':$form_data['tag'];
        $data['category_id']        = $form_data['category_id'];
        $data['startdate']          = empty($form_data['startdate'])?'0000-00-00':$form_data['startdate'];
        $data['enddate']            = empty($form_data['enddate'])?'0000-00-00':$form_data['enddate'];
        $data['content_english']    = $form_data['content_english'];
        $data['content_japanese']   = $form_data['content_japanese'];
        $data['content_thai']       = $form_data['content_thai'];
        $data['is_ads']             = $form_data['is_ads'];
        $data['is_noindex']         = $form_data['is_noindex'];
        $data['modified']           = $now;
        $data['slug']               = $form_data['slug'];
        $data['meta_description']   = $form_data['meta-des'];
        $data['keyword']            = $form_data['keyword'];


        $data['title_english']      = str_replace('"', "&quot;", $data['title_english']);
        $data['title_japanese']      = str_replace('"', "&quot;", $data['title_japanese']);
        $data['title_thai']      = str_replace('"', "&quot;", $data['title_thai']);

        $media = $this->getOneById($_POST['id']);

        if ($pics[0] != '') {
            $data['big_picture'] = $pics[0];
            unlink('assets/images/img_media/'.$media->big_picture);
        }

        //update data with id
        $this->db->where('id', $_POST['id']);
        $this->db->update('t_media', $data);

    }

    /***
     * getAllMedia - get all media data
     * $retun : all of media
     *
     */
	function getAllMedia() {
		
		$sql = "SELECT * FROM t_media ORDER BY id desc";
		$query = $this->db->query($sql);
		
		return $query->result();
	}

    function getPublishMedia() {
        
        $sql = "SELECT * FROM t_media WHERE is_publish = '1' ORDER BY id DESC";
        $query = $this->db->query($sql);
        
        return $query->result();
    }

    function getAllMediaImg() {
        
        $sql = "SELECT big_picture FROM t_media";
        $query = $this->db->query($sql);
        
        return $query->result();
    }
    function getCategoryMedia($cate) {
        $sql = "SELECT * FROM t_media WHERE category_id = $cate and is_publish = '1' ORDER BY id desc";
        $query = $this->db->query($sql);
        
        return $query->result();
    }
    function getPopular() {
        
        $sql = "SELECT * FROM t_media WHERE is_publish = '1' ORDER BY total_view DESC";
        $query = $this->db->query($sql);
        
        return $query->result();
    }



    /***
     * delMedia -  delete media and picture from database 
     * $retun : none
     *
     */
	function delMedia($id) {

        //find the media detail you want to delete
        $media = $this->getOneById($id);
        if ($media[0]->big_picture != '') unlink('assets/images/img_media/'.$media[0]->big_picture);

        //delete record in database with id
        $this->db->delete('t_media',array('id' => $id));

		
	}

    /**
     * getOne - a company in database
     * id : id of company
     * @return : one row of data 
     */

     function getOneById($id) {
        //$query = $this->db->get_where('t_media', array('id' => $id));
        //$ret = $query->row();
        //return $ret;
        $sql = "SELECT * FROM t_media WHERE $id = id";
        $query = $this->db->query($sql);
        return $query->result();
     }
     function getOneByTitle($title) {
        //$query = $this->db->get_where('t_media', array('id' => $id));
        //$ret = $query->row();
        //return $ret;
        $title = "'".$title."'";
        $sql = "SELECT id FROM t_media WHERE title_english = $title";
        $query = $this->db->query($sql);
        return $query->result();
     }
     
    /**
     * toggleMedia - change is_publish to 1 or 0 
     * id : id of media
     */

     function toggleMedia($id) {

        $sql = "UPDATE t_media SET is_publish = IF(is_publish=1, 0, 1) WHERE id = ".$id;

		$query = $this->db->query($sql);
     }
   

}
     
   



?>
