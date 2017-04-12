<?php
defined('BASEPATH') or exit('No direct script access allowed');

class calculator extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		//$this->load->library('input');
	}
	public function index(){
		$this->load->view('hitung_persegi');
	}
}
/* calculator.php*/
/* End of file persegi.php*/
/* Location: .application/controllers/persegi.php*/
