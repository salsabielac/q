<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
class lingkaran extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('hitung_lingkaran');
	}

	public function hasil(){
		//mengecek masukan dari form
		$r = $this->input->post('r');
		$hitung = $this->input->post('hitung');
		$hasil = 0;
		//mengecek proses perhitungan yang diminta
		if($hitung=="luas")
		{
			$hasil = 3.14*$r*$r;
		}
		elseif($hitung=="keliling"){
			$hasil=($r*2)*3.14;
		}
		//membungkus semua data perhitungan untuk ditampilkan di view data['sisi'] = $sisi;
		$data['r']=$r;
		$data['hitung']=$hitung;
		$data['hasil']=$hasil;
		//menampilkan hasil $this->load->view('hasil', $data)
		$this->load->view('hasil_lingkaran', $data);
	}

}
 ?>