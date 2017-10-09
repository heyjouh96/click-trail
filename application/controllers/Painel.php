<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Painel_model');
	}

	public function index()
	{
		if($this->session->userdata('logado') == true){
			$dados['usuario'] = $this->Painel_model->getUsuario($this->session->userdata('id'));
			
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
	
	public function logar()
	{
	    $this->form_validation->set_rules('email', 'E-mail', 'trim|required');
	    $this->form_validation->set_rules('senha', 'Senha', 'trim|required');
	    
	    if($this->form_validation->run() == TRUE){
	    	$this->load->model('Login_model');
	    	$dados['usuario'] = $this->Login_model->logar($this->input->post('email'), $this->input->post('senha'));
	    	
	    	if(count($dados['usuario']) == 1){
	    		$sess = array('id' => $dados['usuario']->cd_Usuario, 
							  'nome' => $dados['usuario']->nm_Usuario,
							  'sobrenome' => $dados['usuario']->ds_Sobrenome,
							  'email' => $dados['usuario']->ds_EmailUsuario,
							  'logado' => true);
							  
				$this->session->set_userdata($sess);
				
	    		redirect('painel');
	    	}
	    	else{
	    		redirect('painel');
	    		$this->session->set_flashdata('falhaLogin','Usuário ou senha incorretos!');
	    	}
	    }
	    else{
	    	redirect('painel');
	    	$this->session->set_flashdata('falhaLogin','Usuário ou senha incorretos!');
	    }
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('painel');
	}
	
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
				$this->Painel_model->cadastrar($this->input->post());
				redirect('painel');
			}
			
		}
		else{
			$this->session->set_flashdata('falhaCadastro', $this->form_validation->error_string('',''));
			redirect('painel');
		}
	}
	
}
