<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');
class trapesium extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('hitung_trapesium');
	}

	public function hasil(){
		//mengecek masukan dari form
		$s1 = $this->input->post('s1');
		$s2 = $this->input->post('s2');
		$tinggi = $this->input->post('tinggi');
		$hitung = $this->input->post('hitung');
		$hasil = 0;
		//mengecek proses perhitungan yang diminta
		if($hitung=="luas")
		{
			$hasil = 0.5*($s1+$s2)*$tinggi;
		}
		elseif($hitung=="keliling"){
			$hasil=$s1+$s2;
		}
		//membungkus semua data perhitungan untuk ditampilkan di view data['sisi'] = $sisi;
		$data['s1']=$s1;
		$data['s2']=$s2;
		$data['tinggi']=$tinggi;
		$data['hitung']=$hitung;
		$data['hasil']=$hasil;
		//menampilkan hasil $this->load->view('hasil', $data)
		$this->load->view('hasil_trapesium', $data);
	}

}
 ?>