<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Cadastro_model');
	}
	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('cadastro');
		$this->load->view('includes/footer');
	}
	
    // CADASTRAR USUÁRIO
	public function cadastrar()
	{
	    $this->form_validation->set_rules('nome',	'Nome', 		'trim|max_length[20]|required');
	    $this->form_validation->set_rules('sbnome', 'Sobrenome',	'trim|max_length[50]|required');
	    $this->form_validation->set_rules('email',	'E-mail',		'trim|max_length[50]|required');
	    $this->form_validation->set_rules('senha1', 'Senha',		'trim|max_length[20]|required');
	    
		if($this->form_validation->run() == true){
			
			if($this->input->post('senha1') != $this->input->post('senha2')){
				$this->session->set_flashdata('falhaCadastro','As senhas não conferem!');
			}
			else{
				$this->Cadastro_model->cadastrar($this->input->post());
				redirect('cadastro');
			}
			
		}
		else{
			$this->session->set_flashdata('falhaCadastro', $this->form_validation->error_string('',''));
			redirect('cadastro');
		}
	}
	
	// USUÁRIO CADASTRA SITE
	public function cadastrarSite()
	{
		/* Verifica se há alguma informação sendo enviada, neste caso o cadastro do site
		Caso nada esteja sendo enviado, chama a view cadastrar_site.php */
		if($this->input->post()){
			$this->Cadastro_model->cadastrarSite($this->input->post(), $this->session->userdata('id'));
			redirect('cadastro/cadastrarSite');
		}
		else{
			$this->load->view('includes/header');
			$this->load->view('painel/cadastrar_site');
			$this->load->view('includes/footer');
		}
	}
	
}

?>