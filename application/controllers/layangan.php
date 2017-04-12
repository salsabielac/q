<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
class layangan extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('hitung_layangan');
	}

	public function hasil(){
		//mengecek masukan dari form
		$d1 = $this->input->post('d1');
		$d2 = $this->input->post('d2');
		$hitung = $this->input->post('hitung');
		$hasil = 0;
		//mengecek proses perhitungan yang diminta
		if($hitung=="luas")
		{
			$hasil = 0.5*$d1*$d2;
		}
		elseif($hitung=="keliling"){
			$hasil=($d1*2)+($d2*2);
		}
		//membungkus semua data perhitungan untuk ditampilkan di view data['sisi'] = $sisi;
		$data['d1']=$d1;
		$data['d2']=$d2;
		$data['hitung']=$hitung;
		$data['hasil']=$hasil;
		//menampilkan hasil $this->load->view('hasil', $data)
		$this->load->view('hasil_layangan', $data);
	}

}
 ?>