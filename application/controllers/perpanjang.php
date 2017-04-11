<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
class perpanjang extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('hitung_perpanjang');
	}

	public function hasil(){
		//mengecek masukan dari form
		$panjang = $this->input->post('panjang');
		$lebar = $this->input->post('lebar');
		$hitung = $this->input->post('hitung');
		$hasil = 0;
		//mengecek proses perhitungan yang diminta
		if($hitung=="luas")
		{
			$hasil = $panjang * $lebar;
		}
		elseif($hitung=="keliling"){
			$hasil=$panjang+$lebar+$panjang+$lebar;
		}
		//membungkus semua data perhitungan untuk ditampilkan di view data['sisi'] = $sisi;
		$data['panjang']=$panjang;
		$data['lebar']=$lebar;
		$data['hitung']=$hitung;
		$data['hasil']=$hasil;
		//menampilkan hasil $this->load->view('hasil', $data)
		$this->load->view('hasil_perpanjang', $data);
	}
}
 ?>