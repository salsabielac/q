<?php
class Babon extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('destination_model');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('home.php');
		$this->load->view('footer');
	}

	public function tampil(){
		$this->load->model('destination_model');
		$object['destination_object']=$this->destination_model->getDestination();
		$this->load->view('header');
		$this->load->view('tampil.php', $object);
		$this->load->view('footer');
	}

	public function create(){
		$this->load->view('header');
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->load->view('footer');
		if($this->form_validation->run()==FALSE){
			$this->load->view('contact');
		}else{
			$this->destination_model->insertDestination();
			$this->load->view('success');
		}
	}

	public function update($id){
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('telephone', 'telephone', 'trim|required');
		$this->form_validation->set_rules('destination', 'destination', 'trim|required');
		$this->form_validation->set_rules('plans', 'plans', 'trim|required');
		$data['destination']=$this->destination_model->getDestination($id);
		if($this->form_validation->run()==FALSE){
			$this->load->view('edit_destination', $data);
		}else{
			$this->destination_model->updateById($id);
			$this->load->view('edit_success');
		}
	}

	public function delete($id){
		$this->destination_model->delete($id);
		$this->load->view('delete_success');
	}

	public function home(){
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function destination(){
		$this->load->view('header');
		$this->load->view('destination');
		$this->load->view('footer');
	}

	public function labuan(){
		$this->load->view('header');
		$this->load->view('labuan');
		$this->load->view('footer');
	}

	public function lombok(){
		$this->load->view('header');
		$this->load->view('lombok');
		$this->load->view('footer');
	}

	public function ubud(){
		$this->load->view('header');
		$this->load->view('ubud');
		$this->load->view('footer');
	}

	public function uluwatu(){
		$this->load->view('header');
		$this->load->view('uluwatu');
		$this->load->view('footer');
	}

	public function holiday(){
		$this->load->view('header');
		$this->load->view('holiday');
		$this->load->view('footer');
	}

	public function culture(){
		$this->load->view('header');
		$this->load->view('culture');
		$this->load->view('footer');
	}

	public function florafauna(){
		$this->load->view('header');
		$this->load->view('florafauna');
		$this->load->view('footer');
	}

	public function contact(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
}
?>