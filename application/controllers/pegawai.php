<?php
class Pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('pegawai_model');
	}
	
	public function index(){
		$this->load->model('pegawai_model');
		$object['biodata_object']=$this->pegawai_model->getPegawai();
		$this->load->view('pegawai/header');
		$this->load->view('pegawai/tampil.php',$object);
		$this->load->view('footer');
	}

	public function create(){
		$this->load->view('pegawai/header');	
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('pegawai/add_view');
		}else
		{
			$this->pegawai_model->insertPegawai();
			$this->load->view('pegawai/add_sukses');
		}
	}

	public function save(){
		$this->load->view('header');
		$this->load->view('save');
		$this->load->view('footer');
	}
}
?>


