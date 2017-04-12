<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
class segitiga extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('hitung_segitiga');
	}

	public function hasil(){
		//mengecek masukan dari form
		$sisi = $this->input->post('sisi');
		$alas = $this->input->post('alas');
		$tinggi = $this->input->post('tinggi');
		$hitung = $this->input->post('hitung');
		$hasil = 0;
		//mengecek proses perhitungan yang diminta
		if($hitung=="luas")
		{
			$hasil = 0.5*$alas*$tinggi;
		}
		elseif($hitung=="keliling"){
			$hasil=($sisi*2)+$alas;
		}
		//membungkus semua data perhitungan untuk ditampilkan di view data['sisi'] = $sisi;
		$data['sisi']=$sisi;
		$data['alas']=$alas;
		$data['tinggi']=$tinggi;
		$data['hitung']=$hitung;
		$data['hasil']=$hasil;
		//menampilkan hasil $this->load->view('hasil', $data)
		$this->load->view('hasil_segitiga', $data);
	}

}
 ?>