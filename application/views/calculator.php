<?php
defined('BASEPATH') or exit('No direct script access allowed');

class calculator extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		//$this->load->library('input');
	}
	public function index(){
		$this->load->view('form_hitung');
	}
}
/* calculator.php*/
/* End of file calculator.php*/
/* Location: .application/controllers/calculator.php*/
