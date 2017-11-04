<?php

require_once APPPATH."models/Serianameable.php";

class SiteDAO extends CI_Model {
    
	public function getSiteInfo($id){
        // Pega as informações do site pelo seu ds.
        $site = $this->db->query("
            SELECT s.cd_Site, s.ds_Dominio, SUM(c.qtd) AS total
            FROM TB_Sites AS s
                INNER JOIN TB_Usuarios AS u ON s.cd_Usuario = u.cd_Usuario
                INNER JOIN TB_ClickCount AS c ON s.ds_Dominio = c.dominio
                WHERE cd_Site = '$id'
        ")->result();
       
        return $site;
	}
	
	public function getSiteDominio($id){
	    $dominio = $this->db->query("SELECT ds_Dominio FROM TB_Sites WHERE cd_Site = '$id'")->row();
	    
	    return $dominio;
	}
	
	public function getSiteItens($dominio){
	    // retorna tudo da tabela clickcount do dominio passado por parâmetro
	    $itens = $this->db->query("
	        SELECT ds, ds, dominio, SUM(qtd) as qtd
	            FROM TB_ClickCount
	            WHERE dominio = '".$dominio->ds_Dominio."'
	            GROUP BY ds
	            
	    ")->result();
	    
	    return $itens;
	}
	
	
}
