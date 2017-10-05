<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Painel_model extends CI_MODEL {
    
	function __construct() {
    	parent::__construct();
	}
	
	public function getUsuario($id){
	    
	    $usuario = $this->db->get_where('TB_Usuarios', array('cd_Usuario' => $id))->row();
	   
	    return $usuario;
	}
	
	
    
    
}

