<?php

require_once APPPATH."models/Serianameable.php";

class UsuarioDAO extends CI_Model {

	public function getUsuario($email, $senha){
	    
	    $this->db->where('ds_emailusuario', $email);
		$this->db->where('ds_senhausuario', $senha);
		$us = $this->db->get('tb_usuarios');
		require_once APPPATH."models/Usuario_model.php";
		if($us->num_rows() > 0){
		    $usuario = $us->result()[0];
		    $id = $usuario->cd_usuario;
		    $nome = $usuario->nm_usuario;
		    $sbnome = $usuario->ds_sobrenome;
		    $emailUs = $usuario->ds_emailusuario;
		    $senhaUs = $usuario->ds_senhausuario;
		    $status = $usuario->ds_statususuario;
		    return new Usuario_model($id, $nome, $sbnome, $emailUs, $senhaUs, $status);
		}
		else{
		    return null;
		}
		
	}
	
	public function updateUsuario($campo, $valor, $id){
		
		$this->db->set($campo, $valor);
		$this->db->where('cd_Usuario', $id);
		$query = $this->db->update('TB_Usuarios');
		if($query){
			return true;
		}
		else{
			return null;
		}
		
	}

	public function confirmaSenha($senha, $id){
		$this->db->where('cd_Usuario', $id);
		$this->db->where('ds_SenhaUsuario', $senha);
		$us = $this->db->get('TB_Usuarios');
		if($us->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
}
