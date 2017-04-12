<?php

class Gallery_model extends CI_Model
{
	public function getPhoto(){
		$view=$this->db->get('gallery');
		return $view->result();
	}

	public function insertPhoto($photo){
		$object=array('photo'=>$photo);
		$this->db->insert('gallery',$object);
	}

	public function updatePhoto($id,$photo){
		$object = array(
			'photo' => $photo
		);
		$this->db->where('id',$id);
		$this->db->update('gallery',$object);
	}

	public function getById($id){
		$this->db->from('gallery');
		$this->db->where('id',$id);
		$getById = $this->db->get();

		if($getById->num_rows() == 1){
			return $getById->result();
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('gallery');
	}

}
?>