<?php
class Da_TIN_influencer extends CI_Model
{


	function __construct()
	{
		parent::__construct();
	}

	//call data all in database comeback show
	function show()
	{
    $this->db->order_by("id_influ", "desc");
		return $this->db->get('influencer')->result();
	}
	//update data in table influencer
	function updated($id,$data,$data1,$data2)
	{
		$this->db->trans_begin();
		$now = date("Y-m-d H:i:s");
		//if has file picture
		if (isset ($data['picture']) ) {

			$data = array(
            'name' => $data['name'] ,
			'firstname' => $data['firstname'],
			'lastname' => $data['lastname'],
			'age' => $data['age'],
			'email' => $data['email'],
      'contact' => $data['contact'],
			'sex' =>$data['sex'],
			'pays' =>$data['pays'],
			'birthday' => $data['birthday'],
			'occupation' => $data['occupation'],
			'personality' => $data['personality'],
      'likes' => $data['likes'],
      'followed' => $data['followed'],
      'follower_private' => $data['follower_private'],
			'picture' => $data['picture'],
			'pre_locat' => $data['pre_locat'],
			'address' =>$data['address'],
			'id_card' => $data['id_card'],
			'bank' => $data['bank'],
			'bank_account' => $data['bank_account'],
			'bank_type' => $data['bank_type'],
			'fb_id' => $data['fb_id'],
			'name_fb' => $data['name_fb'],
			'usernameIG' => $data['usernameIG'],
			'token' => $data['token'],
			'twitter' =>$data['twitter'],
      'self_intro' =>$data['self_intro'],
      'past_accom' =>$data['past_accom'],

      'link_fb' =>$data['link_fb'],
      'link_ig' =>$data['link_ig'],
      'link_youtube' =>$data['link_youtube'],
      'link_blog' =>$data['link_blog'],
			'updated'=> $now,
            );
		}
		//if no file picture
		else {
			$data = array(
            'name' => $data['name'] ,
			'firstname' => $data['firstname'],
			'lastname' => $data['lastname'],
			'age' => $data['age'],
			'email' => $data['email'],
      'contact' => $data['contact'],
			'sex' =>$data['sex'],
			'pays' =>$data['pays'],
			'birthday' => $data['birthday'],
			'occupation' => $data['occupation'],
			'personality' => $data['personality'],
      'likes' => $data['likes'],
      'followed' => $data['followed'],
      'follower_private' => $data['follower_private'],
			'pre_locat' => $data['pre_locat'],
			'address' =>$data['address'],
			'id_card' => $data['id_card'],
			'bank' => $data['bank'],
			'bank_account' => $data['bank_account'],
			'bank_type' => $data['bank_type'],
			'fb_id' => $data['fb_id'],
			'name_fb' => $data['name_fb'],
			'usernameIG' => $data['usernameIG'],
			'token' => $data['token'],
		  'twitter' =>$data['twitter'],
      'self_intro' =>$data['self_intro'],
      'past_accom' =>$data['past_accom'],

      'link_fb' =>$data['link_fb'],
      'link_ig' =>$data['link_ig'],
      'link_youtube' =>$data['link_youtube'],
      'link_blog' =>$data['link_blog'],
			'updated'=> $now,
            );

		}
		//update data to influencer table
		$this->db->where('id_influ', $id);
		$this->db->update('influencer', $data);

		//update data to facebook table
		$data1 = array(
				'fb_id' => $data['fb_id'],
				'name' => $data['name_fb'],
		);
		$this->db->where('id_influ', $id);
		$this->db->update('facebook', $data1);

		//update data to instagram table
		$data2 = array(
				'usernameIG' => $data['usernameIG'],
				'token' => $data['token'],
		);
		$this->db->where('id_influ', $id);
		$this->db->update('instagram', $data2);

		$this->db->trans_complete();

        // check status of transaction
        if ($this->db->trans_status() === FALSE)
        {
            log_message('error','got problem with insert data');
        }
	}

	//show data in table influencer one by one.
    function show_one($ifid) {

        $sql = "SELECT * FROM t_member  WHERE id = ".$ifid ;
        $query = $this->db->query($sql);
        return $query->row();

    }

    //delete data in row
    function delete($id)
    {
    	$file = $this->show_one($id);

    	$detables = array('influencer','facebook','instagram');
    	$this->db->where('id_influ', $id);
   		$this->db->delete($detables);
   		//delete path picture
   		unlink('profile_images/' .$file->picture);
    	return true;
    }

    //get pagination in page profile influencer
	function get_department_list($limit, $start)
    {
        $sql = 'SELECT * FROM influencer  WHERE id_influ ORDER BY id_influ DESC  LIMIT ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    //get the username & password from admin
    function get_user($usr, $pwd)
    {
        $sql = "SELECT * FROM admin WHERE admin_name = '" . $usr . "' AND admin_password = '" . MD5($pwd) . "' AND status = 1";
        $query = $this->db->query($sql)->num_rows();
        return $query;

    }
    function set_active_user($usr, $pwd)
    {
      $sql = "UPDATE admin SET active = 1 WHERE admin_name = '" . $usr . "' AND admin_password = '" . MD5($pwd) . "' AND status = 1";
      $this->db->query($sql);
      $sql = "UPDATE admin SET active = 0 WHERE admin_name != '" . $usr . "' AND admin_password != '" . MD5($pwd) . "' AND status = 1";
      $this->db->query($sql);
    }
    function set_noactive_user()
    {
      $sql = "UPDATE admin SET active = 0 WHERE active = 1";
      $this->db->query($sql);
    }
    function get_active_user()
    {
        $sql = "SELECT * FROM admin WHERE active = 1";
        $query = $this->db->query($sql);
        return $query->result();
    }
    function get_user_from_id($id){
      $sql = "SELECT * FROM admin WHERE admin_id = $id";
      $query = $this->db->query($sql);
      return $query->result();
    }
    function update_profile($usr,$pwd,$pos,$id,$pics)
    {

      $admin = $this->get_user_from_id($id);
      //do_dump ($pics); die;
      if ($pics[0] != '') {
            $pics = $pics[0];
            unlink('img_profile/'.$admin->picture);
        $sql = "UPDATE admin SET picture = '".$pics."' , admin_name = '".$usr."' , admin_password = '".MD5($pwd)."' , position = '".$pos."' WHERE admin_id = $id";

        $query = $this->db->query($sql);
      }else{

      $sql = "UPDATE admin SET admin_name = '".$usr."' , admin_password = '".MD5($pwd)."' , position = '".$pos."' WHERE admin_id = $id";

      $query = $this->db->query($sql);
      }
      

    }

		// Update status Premium and Normal
		function update_status_member($member_id,$status){

			if($status == 1){ // update to premium
					$sql= "UPDATE t_member set is_premium = '1' WHERE id = '$member_id'   ";
			}else{ // update to Normal
					$sql= "UPDATE t_member set is_premium = '0' WHERE id = '$member_id'   ";
			}
			//echo $sql; die;
			$query = $this->db->query($sql);
			return $query;
		}


		function editMember ($id_member){

			$sql = "select * from t_member where id = '$id_member' ";
			$query= $this->db->query($sql);
			return $query->row();

		}

		function updateMember ($form_data, $data){
			
				$sql= 'UPDATE t_member set photo = "'.$data['file_name'].'",
										familly_name = "'.$form_data['familly_name'].'",
										lastname = "'.$form_data['lastname'].'",
										birthday = "'.$form_data['birthday'].'",
										sex = "'.$form_data['sex'].'",
										occupation = "'.$form_data['occupation'].'",
										address = "'.$form_data['address'].'",
										transportation_id = "'.$form_data['station'].'",
										has_children = "'.$form_data['has_children'].'",
										children_status = "'.$form_data['children_status'].'",
										children_status2 = "'.$form_data['children_status2'].'",
										children_status3 = "'.$form_data['children_status3'].'",
										children_status4 = "'.$form_data['children_status4'].'",
										children_status5 = "'.$form_data['children_status5'].'",
										to_thai = "'.$form_data['to_thai'].'"
							WHERE id ="'.$form_data['id'].'" ' ;
						//	echo $sql; die;
				$query= $this->db->query($sql);
				//return $query();
		}


		function deleteMember ($id_member){

			$sql = " DELETE FROM `t_member` WHERE id = '$id_member' ";
			$query = $this->db->query($sql);

		}

  //if user search for data  as keyword
	function search($keyword)
	{

		$this->db->like('name',$keyword,'both');
		$this->db->or_like('firstname',$keyword,'both');
		$this->db->or_like('lastname',$keyword,'both');
        $this->db->limit(4);
		$query = $this->db->get('influencer');
		return $query->result();
	}



    /**
     * searchPartial : search data with many cases from the form
     * @ranges : minum follows or likes and maximum follows or likes
     * @case : any search cases get from form
     * $retun : data from query
     *
     */

    function searchPartialCount($cases, $ranges) {
      //do_dump($cases,'cases');
      $hasPhrase = false;
      if(empty($cases)){
        $cases['searchage1'] = '';
        $cases['searchage2'] = '';
        $sql = "SELECT COUNT(*)AS count FROM `t_member` inf ";
      }
      else{

        // user no select
        $sql = "SELECT COUNT(*)AS count FROM `t_member` inf ";

        if ($cases['searchage1'] != "" || $cases['searchage2'] != "" || isset($cases['sex']) ) {
            $sql .= "WHERE ";
        }

        // if user put age min
        if ($cases['searchage1'] != "") {
            if ($hasPhrase) $sql .= " AND ";
            $sql .= "TIMESTAMPDIFF (YEAR, birthday, CURDATE()) >= {$cases['searchage1']} ";
            $hasPhrase = true;
        }

        // if user put age max
        if ($cases['searchage2'] != "") {
            if ($hasPhrase) $sql .= " AND ";
            $sql .= "TIMESTAMPDIFF (YEAR, birthday, CURDATE()) <= {$cases['searchage2']} ";
            $hasPhrase = true;
        }

        // if user select sex
        if (isset($cases['sex'])) {
            if ($hasPhrase) $sql .= " AND ";
            $sql .= " sex = '{$cases['sex']}' ";
            $hasPhrase = true;
        }

        // if user select occupation
        if (isset($cases['occupation'])) {
            if ($hasPhrase) $sql .= " AND (";
            else $sql .= " (";

            $i = 0;
            $tmpInteger = 0;
            foreach ($cases['occupation'] as $occ) {
               $tmpInteger += 1 << ($occ-1);
               if ($i == 0) {
                  $sql .= " occupation & '{$tmpInteger}' ";
               } else {
                  $sql .= " OR occupation & '{$tmpInteger}' ";
               }

               $i++;
            }

            $sql .= ") ";


            $hasPhrase = true;
        }

        // if user select personality
        if (isset($cases['personality'])) {
            if ($hasPhrase) $sql .= " AND (";
            else $sql .= " (";
            $i = 0;
            $tmpIntegerper = 0;
            foreach ($cases['personality'] as $occ) {
               $tmpIntegerper += 1 << ($occ-1);
               if ($i == 0) {
                  $sql .= " personality & '{$tmpIntegerper}' ";
               } else {
                  $sql .= " OR personality & '{$tmpIntegerper}' ";
               }

               $i++;
            }
            $sql .= ") ";

            $hasPhrase = true;
        }
      }
      // miscellaneous
      $sql .= " ORDER BY id DESC ";

      // execute query
      $query = $this->db->query($sql)->row();

      return $query;


    }

    function searchPartialPage($cases, $ranges,$limit, $start) {
        $hasPhrase = false;
        if(empty($cases)){
            $cases['searchage1'] = '';
            $cases['searchage2'] = '';
            $sql = "SELECT * FROM `t_member` inf ";
        }
        else{

           // user no select
          $sql = "SELECT * FROM `t_member` inf ";

          if ($cases['searchage1'] != "" || $cases['searchage2'] != "" || isset($cases['sex']) ) {
              $sql .= "WHERE ";
          }

          // if user put age min
          if ($cases['searchage1'] != "") {
              if ($hasPhrase) $sql .= " AND ";
              $sql .= "TIMESTAMPDIFF (YEAR, birthday, CURDATE()) >= {$cases['searchage1']} ";
              $hasPhrase = true;
          }

          // if user put age max
          if ($cases['searchage2'] != "") {
              if ($hasPhrase) $sql .= " AND ";
              $sql .= "TIMESTAMPDIFF (YEAR, birthday, CURDATE()) <= {$cases['searchage2']} ";
              $hasPhrase = true;
          }

          // if user select sex
          if (isset($cases['sex'])) {
              if ($hasPhrase) $sql .= " AND ";
              $sql .= " sex = '{$cases['sex']}' ";
              $hasPhrase = true;
          }

          // if user select occupation
          if (isset($cases['occupation'])) {
              if ($hasPhrase) $sql .= " AND (";
              else $sql .= " (";

              $i = 0;
              $tmpInteger = 0;
              foreach ($cases['occupation'] as $occ) {
                 $tmpInteger += 1 << ($occ-1);
                 if ($i == 0) {
                    $sql .= " occupation & '{$tmpInteger}' ";
                 } else {
                    $sql .= " OR occupation & '{$tmpInteger}' ";
                 }

                 $i++;
              }

              $sql .= ") ";

              $hasPhrase = true;
          }

          // if user select personality
          if (isset($cases['personality'])) {
              if ($hasPhrase) $sql .= " AND (";
              else $sql .= " (";
              $i = 0;
              $tmpIntegerper = 0;
              foreach ($cases['personality'] as $occ) {
                 $tmpIntegerper += 1 << ($occ-1);
                 if ($i == 0) {
                    $sql .= " personality & '{$tmpIntegerper}' ";
                 } else {
                    $sql .= " OR personality & '{$tmpIntegerper}' ";
                 }

                 $i++;
              }
              $sql .= ") ";

              $hasPhrase = true;
          }

        }
        // miscellaneous
        $sql .= " LIMIT ". $start . ', ' . $limit;
        // execute query
        $query = $this->db->query($sql)->result();

        return $query;

    }

    /**
     * listCouponUsed : list all coupon member has used.
     * @ranges : minum follows or likes and maximum follows or likes
     * @case : any search cases get from form
     * $retun : data from query
     *
     */

    function listCouponUsedCount($cases) {
      //do_dump($cases,'cases');
      $hasPhrase = false;
      if(empty($cases)){
        $cases['fb'] = 0;
        $cases['ig'] = 0;
        $cases['searchage1'] = '';
        $cases['searchage2'] = '';
        $sql = "SELECT COUNT(*)AS count FROM `t_coupon` inf ";
      }
      else{

        // user no select
        $sql = "SELECT COUNT(*)AS count FROM `ld_customer` inf ";

        if ($cases['searchage1'] != "" || $cases['searchage2'] != "" || isset($cases['sex']) ) {
            $sql .= "WHERE ";
        }

        // if user put age min
        if ($cases['searchage1'] != "") {
            if ($hasPhrase) $sql .= " AND ";
            $sql .= "TIMESTAMPDIFF (YEAR, birthday, CURDATE()) >= {$cases['searchage1']} ";
            $hasPhrase = true;
        }

        // if user put age max
        if ($cases['searchage2'] != "") {
            if ($hasPhrase) $sql .= " AND ";
            $sql .= "TIMESTAMPDIFF (YEAR, birthday, CURDATE()) <= {$cases['searchage2']} ";
            $hasPhrase = true;
        }

        // if user select sex
        if (isset($cases['sex'])) {
            if ($hasPhrase) $sql .= " AND ";
            $sql .= " sex = '{$cases['sex']}' ";
            $hasPhrase = true;
        }

        // if user select occupation
        if (isset($cases['occupation'])) {
            if ($hasPhrase) $sql .= " AND (";
            else $sql .= " (";

            $i = 0;
            $tmpInteger = 0;
            foreach ($cases['occupation'] as $occ) {
               $tmpInteger += 1 << ($occ-1);
               if ($i == 0) {
                  $sql .= " occupation & '{$tmpInteger}' ";
               } else {
                  $sql .= " OR occupation & '{$tmpInteger}' ";
               }

               $i++;
            }

            $sql .= ") ";


            $hasPhrase = true;
        }

        // if user select personality
        if (isset($cases['personality'])) {
            if ($hasPhrase) $sql .= " AND (";
            else $sql .= " (";
            $i = 0;
            $tmpIntegerper = 0;
            foreach ($cases['personality'] as $occ) {
               $tmpIntegerper += 1 << ($occ-1);
               if ($i == 0) {
                  $sql .= " personality & '{$tmpIntegerper}' ";
               } else {
                  $sql .= " OR personality & '{$tmpIntegerper}' ";
               }

               $i++;
            }
            $sql .= ") ";

            $hasPhrase = true;
        }
      }
      // miscellaneous
      $sql .= " ORDER BY coupon_id DESC ";

      // execute query
      $query = $this->db->query($sql)->row();

      return $query;


    }

    /**
     * listCouponUsed : list all coupon member has used.
     * @case : any search cases get from form
     * $retun : data from query
     *
     */

    function listCouponUsed($cases, $limit, $start) {
        $hasPhrase = false;
        if(empty($cases)){
            $cases['searchage1'] = '';
            $cases['searchage2'] = '';
            $sql = "SELECT * FROM `t_coupon` inf ";
        }
        else{

           // user no select
          $sql = "SELECT * FROM `t_coupon` inf ";

          if ($cases['searchage1'] != "" || $cases['searchage2'] != "" || isset($cases['sex']) ) {
              $sql .= "WHERE ";
          }

          // if user put age min
          if ($cases['searchage1'] != "") {
              if ($hasPhrase) $sql .= " AND ";
              $sql .= "TIMESTAMPDIFF (YEAR, birthday, CURDATE()) >= {$cases['searchage1']} ";
              $hasPhrase = true;
          }

          // if user put age max
          if ($cases['searchage2'] != "") {
              if ($hasPhrase) $sql .= " AND ";
              $sql .= "TIMESTAMPDIFF (YEAR, birthday, CURDATE()) <= {$cases['searchage2']} ";
              $hasPhrase = true;
          }

          // if user select sex
          if (isset($cases['sex'])) {
              if ($hasPhrase) $sql .= " AND ";
              $sql .= " sex = '{$cases['sex']}' ";
              $hasPhrase = true;
          }

          // if user select occupation
          if (isset($cases['occupation'])) {
              if ($hasPhrase) $sql .= " AND (";
              else $sql .= " (";

              $i = 0;
              $tmpInteger = 0;
              foreach ($cases['occupation'] as $occ) {
                 $tmpInteger += 1 << ($occ-1);
                 if ($i == 0) {
                    $sql .= " occupation & '{$tmpInteger}' ";
                 } else {
                    $sql .= " OR occupation & '{$tmpInteger}' ";
                 }

                 $i++;
              }

              $sql .= ") ";

              $hasPhrase = true;
          }

          // if user select personality
          if (isset($cases['personality'])) {
              if ($hasPhrase) $sql .= " AND (";
              else $sql .= " (";
              $i = 0;
              $tmpIntegerper = 0;
              foreach ($cases['personality'] as $occ) {
                 $tmpIntegerper += 1 << ($occ-1);
                 if ($i == 0) {
                    $sql .= " personality & '{$tmpIntegerper}' ";
                 } else {
                    $sql .= " OR personality & '{$tmpIntegerper}' ";
                 }

                 $i++;
              }
              $sql .= ") ";

              $hasPhrase = true;
          }

        }
        // miscellaneous
        $sql .= " LIMIT ". $start . ', ' . $limit;
        // execute query
        $query = $this->db->query($sql)->result();

        return $query;

    }


}
?>
