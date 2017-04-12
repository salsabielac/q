<?php

/**
* 
*/
class Ktm extends CI_Model{

	public function getKtmArray()
	{
		$query = $this->db->get('ktm');
		if ($query->num_rows()>0) {
			foreach($query->result() as $data) {
				$tampil[] = $data;
			}
			return $tampil;
		}
	}

	public function getKtmObject(){
		$query = $this->db->query('select * from ktm');
		if ($query->num_rows()>0) {
			foreach($query->result() as $data) {
				$tampil[] = $data;
			}
			return $tampil;
		}
	}

	public function getKtmbArray(){
		$query = $this->db->get('ktm');
		return $query->result();
	}

	public function getKtmbObject(){
		$query = $this->db->query('select * from ktm');
		return $query->result();
	}
}
?>