<?php
/**
* 
*/
class Pegawai_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function insertPegawai(){
		$object = array
		(
			'nama'=>$this->input->post('nama'),
			'nip'=>$this->input->post('nip'),
			'tanggal'=>$this->input->post('tanggal'),
			'alamat'=>$this->input->post('alamat'),
			'foto' =>$this->upload->data('file_name'),
		);
		$this->db->insert('pegawai',$object);
	}
	public function getPegawai()
	{
		// $this->db->where('id',$id);
		$query=$this->db->get('pegawai');
		return $query->result();
	}

	public function updateById($id){
		$object=array
		(
			'nama'=>$this->input->post('nama'),
			'nip'=>$this->input->post('nip'),
			'tanggal'=>$this->input->post('tanggal'),
			'alamat'=>$this->input->post('alamat'),
		);
		$this->db->where('id',$id);
		$this->db->update('pegawai',$object);
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('pegawai');
	}
}
?>