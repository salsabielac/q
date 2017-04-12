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
		);
		$this->db->insert('pegawai',$object);
	}
	public function getPegawai()
	{
		$query = $this->db->query("SELECT nama ,nip , DAY(Tanggal) as tanggal, MONTH(Tanggal) as bulan, YEAR(Tanggal) as tahun, alamat from pegawai");
		return $query->result();
	}
}
?>