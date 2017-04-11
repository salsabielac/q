<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
class persegi extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('hitung_persegi');
	}

	public function hasil(){
		//mengecek masukan dari form
		$sisi = $this->input->post('sisi');
		$hitung = $this->input->post('hitung');
		$hasil = 0;
		//mengecek proses perhitungan yang diminta
		if($hitung=="luas")
		{
			$hasil = $sisi * $sisi;
		}
		elseif($hitung=="keliling"){
			$hasil=4*$sisi;
		}
		//membungkus semua data perhitungan untuk ditampilkan di view data['sisi'] = $sisi;
		$data['sisi']=$sisi;
		$data['hitung']=$hitung;
		$data['hasil']=$hasil;
		//menampilkan hasil $this->load->view('hasil', $data)
		$this->load->view('hasil', $data);
	}

}
 ?>