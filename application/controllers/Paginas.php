<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('index');
		$this->load->view('includes/footer');
	}
	
	public function painel()
	{
		$this->load->view('includes/header');
		$this->load->view('painel');
		$this->load->view('includes/footer');
	}
}
