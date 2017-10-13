<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_MODEL {
    
	function __construct() {
    	parent::__construct();
	}
	
	public function logar($email, $senha){
	    
	    $query = $this->db->get_where('TB_Usuarios', array('ds_EmailUsuario' => $email, 'ds_SenhaUsuario' => $senha))->row();
	    return $query;
	}
    
    
}

