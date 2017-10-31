<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('index');
		$this->load->view('includes/footer');
	}
	
	public function cadastrarSite()
	{
		$this->load->view('includes/header');
		$this->load->view('painel/cadastrar_site');
		$this->load->view('includes/footer');
	}
	
}