<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function __construct() {
	parent::__construct();
	$this->load->helper('url');
}

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */