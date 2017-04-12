<?php
class Destination_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function insertDestination(){
		$object=array
		(
			'name'=>$this->input->post('name'),
			'address'=>$this->input->post('address'),
			'email'=>$this->input->post('email'),
			'telephone'=>$this->input->post('telephone'),
			'destination'=>$this->input->post('destination'),
			'plans'=>$this->input->post('plans'),
		);
		$this->db->insert('visitor',$object);
	}

	public function getDestination(){
		$query=$this->db->get('visitor');
		return $query->result();
	}

	public function updateById($id){
		$object=array
		(
			'name'=>$this->input->post('name'),
			'address'=>$this->input->post('address'),
			'email'=>$this->input->post('email'),
			'telephone'=>$this->input->post('telephone'),
			'destination'=>$this->input->post('destination'),
			'plans'=>$this->input->post('plans'),
		);
		$this->db->where('id',$id);
		$this->db->update('visitor',$object);
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('visitor');
	}
}
?>