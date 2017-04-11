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

	public function edtiPhoto($id,$photo){
		$object = array(
			'photo' => $photo
		);
		$this->db->where('id',$id);
		$this->db->update('gallery',$object);
	}

	public function getById($id){
		$this->db->from('gallery');
		$this->db->where('id',$id);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
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