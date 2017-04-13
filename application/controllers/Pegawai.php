<?php
class Pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Pegawai_model');
		$this->load->helper('date');
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
			$config['upload_path']          = './gambar/upload/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000000000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());
				$this->load->view('pegawai/add_view',$error);
            }else{
            	$this->Pegawai_model->insertPegawai();
				$this->load->view('pegawai/add_sukses');
                }
		}
	}

	public function update($id){
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('nip', 'nip', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$data['pegawai']=$this->Pegawai_model->getPegawai($id);

		if($this->form_validation->run()==FALSE){
			$this->load->view('pegawai/edit_pegawai', $data);
		}else{
			$this->Pegawai_model->updateById($id);
			$this->load->view('pegawai/edit_success');
		}
	}

	public function delete($id){
		$this->Pegawai_model->delete($id);
		$this->load->view('pegawai/delete_success');
	}

	public function save(){
		$this->load->view('header');
		$this->load->view('save');
		$this->load->view('footer');
	}
}
?>


