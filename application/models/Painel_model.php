<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Painel_model extends CI_MODEL {
    
	function __construct() {
    	parent::__construct();
	}
	
	public function contaClick($id, $host){
	    $queryHOST = $this->db->query("SELECT * FROM clickcount WHERE host = '$host'")->result();
        $queryID = $this->db->query("SELECT * FROM clickcount WHERE ds = '$id' AND host = '$host'")->result();
        
        if($queryHOST == null){
            $this->db->query("INSERT INTO clickcount VALUES ('','$id','$host',1)");
        }
        else{
            if($queryID == null){
                $this->db->query("INSERT INTO clickcount VALUES ('','$id','$host',1)");
            }
            else{
                $this->db->query("UPDATE clickcount SET qtd = qtd+1 WHERE ds = '$id' AND host = '$host'");
            }
        }

    }
	
	public function getUsuario($id){
	    // Pega as informações do Usuário
	    $usuario = $this->db->get_where('TB_Usuarios', array('cd_Usuario' => $id))->row();
	   
	    return $usuario;
	}
    
    public function getSites($id){
        // Retorna todos os sites do usuário logado pelo seu ID.
        $sites = $this->db->get_where('TB_Sites', array('cd_Usuario' => $id))->result();
        
        return $sites;
    }
    
	public function getSiteInfo($id){
        // Pega as informações do site pelo seu ID.
        $site = $this->db->query("
            SELECT s.cd_Site, s.ds_Dominio, SUM(c.qtd) AS total
            FROM TB_Sites AS s
                INNER JOIN TB_Usuarios AS u ON s.cd_Usuario = u.cd_Usuario
                INNER JOIN clickcount AS c ON s.ds_Dominio = c.host
                WHERE cd_Site = '$id'
        ")->result();
       
        return $site;
	}
	
	public function getSiteHost($id){
	    $host = $this->db->query("SELECT ds_Dominio FROM TB_Sites WHERE cd_Site = '$id'")->row();
	    
	    return $host;
	}
	
	public function getSiteItens($host){
	    // retorna tudo da tabela clickcount do dominio passado por parâmetro
	    $itens = $this->db->get_where('clickcount', array('host' => $host->ds_Dominio))->result();
	    
	    return $itens;
	}
	
    
}

