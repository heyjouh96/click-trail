<?php

require_once APPPATH."models/Serianameable.php";

class UsuarioDAO extends CI_Model {

	public function getUsuario($email, $senha){
	    
	    $this->db->where('ds_EmailUsuario', $email);
		$this->db->where('ds_SenhaUsuario', $senha);
		$us = $this->db->get('TB_Usuarios');
		require_once APPPATH."models/Usuario_model.php";
		if($us->num_rows() > 0){
		    $usuario = $us->result()[0];
		    $id = $usuario->cd_Usuario;
		    $nome = $usuario->nm_Usuario;
		    $sbnome = $usuario->ds_Sobrenome;
		    $emailUs = $usuario->ds_EmailUsuario;
		    $senhaUs = $usuario->ds_SenhaUsuario;
		    $status = $usuario->ds_StatusUsuario;
		    return new Usuario_model($id, $nome, $sbnome, $emailUs, $senhaUs, $status);
		}
		else{
		    return null;
		}
		
	}

	
	
}
