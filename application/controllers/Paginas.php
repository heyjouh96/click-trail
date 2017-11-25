<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {
	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('index');
		$this->load->view('includes/footer');
	}
	
	public function login()
	{
		if($this->session->userdata('logado')){
			redirect('paginas/painel');
		}
		else{
			$this->load->view('includes/header');
			$this->load->view('login');
			$this->load->view('includes/footer');
		}
	}
	
	public function cadastro()
	{
		$this->load->view('includes/header');
		$this->load->view('cadastro');
		$this->load->view('includes/footer');
	}
	
	// PAINEL
	public function painel(){
		if($this->session->userdata('logado')){
			$this->load->model('sitedao');
			$dados['sites'] = $this->sitedao->getSites($this->session->userdata('id'));
			$dados['active'] = 'inicial';
			
			$this->load->view('includes/header');
			$this->load->view('includes/menupainel', $dados);
			$this->load->view('painel/painel', $dados);
			$this->load->view('includes/footer');
		}
		else{
			$this->load->view('includes/header');
			$this->load->view('login');
			$this->load->view('includes/footer');
		}
	}
	
	public function cadastrarSite()
	{
		$this->load->model('sitedao');
		$dados['sites'] = $this->sitedao->getSites($this->session->userdata('id'));
		$dados['active'] = 'cadastroSite';
		
		$this->load->view('includes/header');
		$this->load->view('includes/menupainel', $dados);
		$this->load->view('painel/cadastrar_site');
		$this->load->view('includes/footer');
	}
	
	public function configurarConta(){
		$this->load->model('sitedao');
		$dados['sites'] = $this->sitedao->getSites($this->session->userdata('id'));
		$dados['active'] = 'configurarConta';
		
		$this->load->view('includes/header');
		$this->load->view('includes/menupainel', $dados);
		$this->load->view('painel/configurar_conta');
		$this->load->view('includes/footer');
	}
	
	public function baixarPlugin(){
		$dados['active'] = '';
		
		$this->load->view('includes/header');
		$this->load->view('includes/menupainel', $dados);
		$this->load->view('painel/plugin');
		$this->load->view('includes/footer');
	}
	
}