<?php

require_once APPPATH."models/Serianameable.php";

class SiteDAO extends CI_Model {
    
	public function getSiteInfo($id){
        // Pega as informações do site pelo seu ds.
        $this->db->select('s.cd_Site, s.ds_Dominio');
        $this->db->select_sum('c.qtd', 'total');
        $this->db->join('TB_Usuarios AS u', 's.cd_Usuario = u.cd_Usuario');
        $this->db->join('TB_ClickCount AS c', 's.ds_Dominio = c.dominio');
        return $this->db->get_where('TB_Sites AS s', array('cd_Site' => $id))->result();
	}
	
	public function getSiteDominio($id){
		// retorna o dominio do site
	    $this->db->select('ds_Dominio');
	    return $this->db->get_where('TB_Sites', array('cd_Site' => $id))->row();
	}
	
	public function getSiteItens($dominio){
	    // retorna tudo da tabela clickcount do dominio passado por parâmetro
	    $this->db->select('id, ds, dominio');
		$this->db->select_sum('qtd');
		$this->db->group_by('ds');
		return $this->db->get_where('TB_ClickCount', array('dominio' => $dominio->ds_Dominio))->result();
	}
	
	public function bySemana(Serianameable $site){
		
		$this->db->select('id, ds, dominio');
		$this->db->select_sum('qtd');
		
	}
	
	
}
