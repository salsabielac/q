<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ktmc extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('Ktm');
		$data['tampil']=$this->Ktm->getKtmArray();
		$data['tampilo']=$this->Ktm->getKtmObject();
		$data['tampilba']=$this->Ktm->getKtmbArray();
		$data['tampilbo']=$this->Ktm->getKtmbObject();

		$this->load->view('lima/header');
		$this->load->view('ktm_view', $data);
		$this->load->view('footer');
	}
}

?>