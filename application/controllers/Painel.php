<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('painel/login');
		$this->load->view('includes/footer');
	}
	
	public function logar()
	{
	    echo "login";
	}
	
	public function cadastrar()
	{
	    echo "cadastro";
	}
	
}
