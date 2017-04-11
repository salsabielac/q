<?php
class Gallery extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Gallery_model');
	}

	public function index(){
		$this->load->view('header');
		$data['show']=$this->Gallery_model->getPhoto();
		$this->load->view('Gallery_view',$data);
		$this->load->view('footer');
	}



	public function hapus($id){
		$path = 'gambar/upload/';
		$record = $this->Gallery_model->getById($id);
		
		$filename = $record[0]->photo;
		unlink($path . $filename);

		$this->Gallery_model->delete($id);
		redirect('gallery','refresh');

	}

	public function save(){
		$config['upload_path'] = 'gambar/upload';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$photo = $this->upload->data('file_name');
			//mengambil fungsi insertPhoto dari Gallery_model
			$this->Gallery_model->insertPhoto($photo);
			redirect('gallery');
		}

	}

	public function edit($id){
			$this->load->view('header');
			$data['find'] = $this->Gallery_model->getById($id);
	
	
				$config['upload_path'] = 'gambar/upload';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 5000;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('poto')) {
					# code...
				}else{
					$path = 'gambar/upload/';
					$record = $this->Gallery_model->getById($id);
					$id = $this->input->post('id');
					$filename = $record[0]->photo;
					unlink($path . $filename);
					$data['poto'] = $this->upload->data()['file_name'];
					$this->Gallery_model->edit($id, $data);
				}

			$this->load->view('edit_gallery',$data);
			$this->load->view('footer');
	}

}
?>