<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
class jajargenjang extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('hitung_jajargenjang');
	}

	public function hasil(){
		//mengecek masukan dari form
		$alas = $this->input->post('alas');
		$tinggi = $this->input->post('tinggi');
		$siring = $this->input->post('siring');
		$hitung = $this->input->post('hitung');
		$hasil = 0;
		//mengecek proses perhitungan yang diminta
		if($hitung=="luas")
		{
			$hasil = $alas*$tinggi;
		}
		elseif($hitung=="keliling"){
			$hasil=($siring*2)+($alas*2);
		}
		//membungkus semua data perhitungan untuk ditampilkan di view data['sisi'] = $sisi;
		$data['alas']=$alas;
		$data['tinggi']=$tinggi;
		$data['hitung']=$hitung;
		$data['hasil']=$hasil;
		//menampilkan hasil $this->load->view('hasil', $data)
		$this->load->view('hasil_jajargenjang', $data);
	}

}
 ?>