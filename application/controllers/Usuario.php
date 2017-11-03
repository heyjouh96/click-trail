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
			$us = new UsuarioLogin($email, $senha);
			
			$this->load->model('insertdao');
            $usdao = $this->insertdao;
            if($usdao->get($us)){
            	
            	$this->session->set_userdata('logado', TRUE);
            	$this->session->set_userdata('id', $usdao->get($us)->cd_Usuario);
            	redirect('painel');
            }
            else{
            	echo "n existe";
            }
            exit;
			redirect('cadastro');
	    }
	}
	
	public function cadastrar(){
	    
	    // PEGA OS POSTS
	    $nome = $this->input->post('nome');
	    $sbnome = $this->input->post('sbnome');
	    $email = $this->input->post('email');
	    $senha1 = $this->input->post('senha1');
	    $senha2 = $this->input->post('senha2');
	    
	    // DEFINE REGRAS
	    $this->form_validation->set_rules('nome',	'Nome', 		'trim|max_length[20]|required');
	    $this->form_validation->set_rules('sbnome', 'Sobrenome',	'trim|max_length[50]|required');
	    $this->form_validation->set_rules('email',	'E-mail',		'trim|max_length[50]|required');
	    $this->form_validation->set_rules('senha1', 'Senha',		'trim|max_length[20]|required');
	    
	    // CONFERE SE DADOS ESTÃO NAS REGRAS 
		if($this->form_validation->run() == true){
		    // VERIFICA SE AS SENHAS BATEM
			if($senha1 != $senha2){
				$this->session->set_flashdata('falhaCadastro','As senhas não conferem!');
				redirect('cadastro');
			}
			else{
			    require_once APPPATH."models/Usuario_model.php";
		        $us = new Usuario_model(0,$nome,$sbnome,$email,$senha1,1);
				
                $this->load->model('insertdao');
                $usdao = $this->insertdao;
                $usdao->insert($us);
                
				$this->session->set_userdata("cadastro", "Cadastrado com Sucesso!");
				redirect('cadastro');
			}
			
		}
		else{
			$this->session->set_flashdata('falhaCadastro', $this->form_validation->error_string('',''));
			redirect('cadastro');
		}
	    
	}
	
	
	
}