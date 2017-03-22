<?php
	class Set_slide extends CI_Model { 
		function __construct(){
			parent::__construct();
		}

		function getAllSlidePicture() {
			$sql = "SELECT * FROM slide_images";
			$query = $this->db->query($sql);
			return $query->result();
		}
		function getSlidePictureById($id) {
			$sql = "SELECT * FROM slide_images WHERE id = $id";
			$query = $this->db->query($sql);
			return $query->result();
		}
		function addSlidePicture($data, $img) {
			$form_data['picture'] = empty($img[0])?'':$img[0];
			$form_data['link'] = $data['link'];

			$this->db->insert('slide_images',$form_data);
		}
		function updateSlidePicture($data, $img, $id) {
			if (empty($img[0])?'':$img[0]){
				$form_data['picture'] = empty($img[0])?'':$img[0];
			}
			$form_data['link'] = $data['link'];

			$this->db->where('id',$id);
			$this->db->update('slide_images',$form_data);
		}
		function deletePicture($id){
			$slide = $this->getSlidePictureById($id);

			foreach ($slide as $key) {
	        	if ($key->picture <> '') unlink('assets/images/img_slide/'.$key->picture);
	        }
		}
		function delSlidePicture($id) {
			//find the media detail you want to delete
	        $slide = $this->getSlidePictureById($id);

	        foreach ($slide as $key) {
	        	if ($key->picture <> '') unlink('assets/images/img_slide/'.$key->picture);
	        }

	        //delete record in database with id
	        $this->db->delete('slide_images',array('id' => $id));
		}
	}
?>