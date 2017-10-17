<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Painel_model');
	}
	
	// CARREGA PÁGINA DE LOGIN OU PAINEL CASO JÁ LOGADO
	public function index()
	{
		if($this->session->userdata('logado') == true){
			$dados['usuario'] = $this->Painel_model->getUsuario($this->session->userdata('id'));
			$dados['sites'] = $this->Painel_model->getSites($this->session->userdata('id'));
			
			
			$this->load->view('includes/header');
			$this->load->view('painel/painel', $dados);
			$this->load->view('includes/footer');
		}
		else{
			$this->load->view('includes/header');
			$this->load->view('painel/login');
			$this->load->view('includes/footer');
		}
	}
	
	public function siteInfo($id)
	{
	    $dados['info'] = $this->Painel_model->getSiteInfo($id);
	    $dados['host'] = $this->Painel_model->getSiteHost($id);
	    // pega informação de cada item clicado (ds)
	    $dados['itens'] = $this->Painel_model->getSiteItens($dados['host']);

	    $this->load->view('includes/header');
		$this->load->view('painel/site_info', $dados);
		$this->load->view('includes/footer');
	}
	
	public function getClick()
	{
		$this->Painel_model->contaClick($this->input->post('id'), $this->input->post('host'));
	}
	
}
