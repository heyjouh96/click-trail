<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro_model extends CI_MODEL {
    
	function __construct() {
    	parent::__construct();
	}
	
	// Insere os dados na TB_Usuarios
	public function cadastrar($dados){
	    
        // checa se ja existe o e-mail cadastrado
        $checkEmail = $this->db->get_where('TB_Usuarios', array('ds_EmailUsuario' => $dados['email']))->row();
        if($checkEmail !== null){
            $this->session->set_flashdata('falhaCadastro','E-mail já cadastrado, faça login!');
            redirect('cadastro');
        }
        
        $query = $this->db->query("INSERT INTO TB_Usuarios 
        							VALUES ('','".$dados['nome']."','".$dados['sbnome']."','".$dados['email']."','".$dados['senha1']."',1)");
        							
        // Retorna falha ou sucesso
        if($query){
            $this->session->set_flashdata('sucesCadastro','Cadastrado com Sucesso!');
        }
        else{
            $this->session->set_flashdata('falhaCadastro','Falha ao Cadastrar Usuário.');
        }
    }
    
    // Cadastra o site no banco de dados.
    public function cadastrarSite($site, $idUsuario){
        
        // Insere os dados na TB_Sites
        $query = $this->db->query("INSERT INTO TB_Sites 
        							VALUES ('','".$site['dominio']."','".$idUsuario."')");
        							
        // Retorna falha ou sucesso
        if($query){
            $this->session->set_flashdata('sucesCadastro','Cadastrado com Sucesso!');
        }
        else{
            $this->session->set_flashdata('falhaCadastro','Falha ao Cadastrar Site.');
        }
        
    }
    
    
}

