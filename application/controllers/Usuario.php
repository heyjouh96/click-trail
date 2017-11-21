<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function logar(){
	    
	    $email = $this->input->post('email');
	    $senha = $this->input->post('senha');
	    
	    $this->form_validation->set_rules('email', 'E-mail',	'trim|required');
	    $this->form_validation->set_rules('senha', 'Senha', 	'trim|required');
	    
	    if($this->form_validation->run() == TRUE){
	    	require_once APPPATH."models/Usuario_model.php";
	    	$this->load->model('usuariodao');
	    	$usdao = $this->usuariodao;
	    	$usuario = $usdao->getUsuario($email, $senha);
	    	if(isset($usuario)){
	    		$this->session->set_userdata("id", $usuario->getId());
	    		$this->session->set_userdata("nome", $usuario->getNome());
	    		$this->session->set_userdata("sbnome", $usuario->getSbnome());
	    		$this->session->set_userdata("email", $usuario->getEmail());
	    		$this->session->set_userdata("logado", TRUE);
		    	redirect('paginas/painel','refresh');
	    	}
	    	else{
	    		redirect('paginas/login', 'refresh');
	    	}
	    }
	    else{
	    	$this->session->set_flashdata("falhaLogin", "Usuário ou Senha incorretos!");
	    	redirect('paginas/login', 'refresh');
	    }
	}
	
	public function logout(){
		$this->session->unset_userdata('logado');
		$this->session->unset_userdata('id');
		redirect('paginas');
	}
	
	public function cadastrar(){
	    
	    // PEGA OS POSTS
	    $nome = $this->input->post('nome');
	    $sbnome = $this->input->post('sbnome');
	    $email = $this->input->post('email');
	    $senha1 = $this->input->post('senha1');
	    $senha2 = $this->input->post('senha2');
	    
	    // DEFINE REGRAS
	    $this->form_validation->set_rules('nome',	'Nome', 		'max_length[20]|required');
	    $this->form_validation->set_rules('sbnome', 'Sobrenome',	'max_length[50]|required');
	    $this->form_validation->set_rules('email',	'E-mail',		'trim|max_length[50]|required');
	    $this->form_validation->set_rules('senha1', 'Senha',		'trim|max_length[20]|required');
	    
	    // CONFERE SE DADOS ESTÃO NAS REGRAS 
		if($this->form_validation->run() == true){
		    // VERIFICA SE AS SENHAS BATEM
			if($senha1 != $senha2){
				$this->session->set_flashdata('falhaCadastro','As senhas não conferem!');
				redirect('paginas/cadastro');
			}
			else{
			    require_once APPPATH."models/Usuario_model.php";
		        $us = new Usuario_model(0,$nome,$sbnome,$email,$senha1,1);
				
                $this->load->model('insertdao');
                $usdao = $this->insertdao;
                $usdao->insert($us);
                
				$this->session->set_flashdata('sucesCadastro', "Cadastrado com Sucesso!");
				redirect('paginas/cadastro');
			}
			
		}
		else{
			$this->session->set_flashdata('falhaCadastro', $this->form_validation->error_string('',''));
			redirect('paginas/cadastro');
		}
	    
	}
	
	public function confirmarSenha($senha, $btn){
		
		echo $senha;
		
		exit;
		require_once APPPATH."models/Usuario_model.php";
    	$this->load->model('usuariodao');
    	$usdao = $this->usuariodao;
    	$usuario = $usdao->getUsuario($this->session->userdata('email'), $this->input->post('senha'));
    	if(isset($usuario)){
    		if($this->input->post('senha') == $usuario->getSenha()){
    			
    		}
    		else{
    			return FALSE;
    		}
    	}
	}
	
	
	public function configurarConta(){
		
		$senha = $this->input->post('confSenha');

		if($this->input->post('nome')){
			$conf = $this->input->post('nome');
			$campo = 'nm_Usuario';
			$this->form_validation->set_rules('nome', 'Nome', 'max_length[20]|required');
		}
		else if($this->input->post('email')){
			$conf = $this->input->post('email');
			$campo = 'ds_EmailUsuario';
			$this->form_validation->set_rules('email', 'E-mail', 'trim|max_length[50]|required');
		}
		else if($this->input->post('senha')){
			$conf = $this->input->post('senha');
			$campo = 'ds_SenhaUsuario';
			$this->form_validation->set_rules('senha', 'Senha', 'trim|max_length[20]|required');
		}
		else{
			redirect('paginas/configurarConta', 'refresh');
		}
			
		if($this->form_validation->run() == true){
			require_once APPPATH."models/Usuario_model.php";
		    $this->load->model('usuariodao');
		    $usdao = $this->usuariodao;
		    if($usdao->confirmaSenha($senha, $this->session->userdata('id')) == true){
			    if($usdao->updateUsuario($campo, $conf, $this->session->userdata('id')) == true){
					$this->session->set_flashdata("sucesUpdate", "Atualizado com sucesso!");
			    	redirect('paginas/configurarConta', 'refresh');
				}
				else{
					$this->session->set_flashdata("falhaUpdate", "Ocorreu um erro ao tentar atualizar.");
			    	redirect('paginas/configurarConta', 'refresh');
				}
		    }
		    else{
		    	$this->session->set_flashdata("falhaUpdate", "Senha Incorreta!");
			    redirect('paginas/configurarConta', 'refresh');
		    }
		}
		else{
			$this->session->set_flashdata('falhaUpdate', $this->form_validation->error_string('',''));
			redirect('paginas/configurarConta', 'refresh');
		}

		
	}
	
	
	
	
	
}