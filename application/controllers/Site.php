<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function cadastrar(){
	    
	    // PEGA OS POSTS
	    $nome = $this->input->post('nome');
	    $dominio = $this->input->post('dominio');
	    
	    // DEFINE REGRAS
	    $this->form_validation->set_rules('nome',	'Nome', 		'max_length[50]|required');
	    $this->form_validation->set_rules('dominio', 'Dominio',	    'trim|max_length[50]|required');
	    
	    // CONFERE SE DADOS ESTÃO NAS REGRAS 
		if($this->form_validation->run() == true){
		    // VERIFICA SE AS SENHAS BATEM

		    require_once APPPATH."models/Site_model.php";
	        $site = new Site_model(0,$nome,$dominio,$this->session->userdata('id'));
			
            $this->load->model('insertdao');
            $sitedao = $this->insertdao;
            $sitedao->insert($site);
            
			$this->session->set_userdata("cadastro", "Cadastrado com Sucesso!");
			redirect('paginas/cadastrarSite');
			
			
		}
		else{
			$this->session->set_flashdata('falhaCadastro', $this->form_validation->error_string('',''));
			redirect('paginas/cadastrarSite');
		}
	    
	}
	
	public function siteInfo($id){
		
		$this->load->model('sitedao');
	    $dados['info'] = $this->sitedao->getSiteInfo($id);
	    $dados['host'] = $this->sitedao->getSiteDominio($id);
	    // pega informação de cada item clicado (ds)
	    $dados['itens'] = $this->sitedao->getSiteItens($dados['host']);
	    $dados['esteMes'] =  $this->sitedao->esteMes($dados['host']);
		$dados['sites'] = $this->sitedao->getSites($this->session->userdata('id'));
		
	    $this->load->view('includes/header');
	    $this->load->view('includes/menupainel', $dados);
		$this->load->view('painel/site_info', $dados);
		$this->load->view('includes/footer');
	}
	
	public function getClick()
	{
		$this->load->model('insertdao');
		
		$ds = $this->input->post('ds');
		$dominio = $this->input->post('dominio');
		$mes = date('n');
		$ano = date('Y');
		
		require_once APPPATH."models/Site_model.php";
        $this->load->model('sitedao');
        $sitedao = $this->sitedao;
        $site = $sitedao->contaClick($ds, $dominio, $mes, $ano);
	}
	
}