<?php

require_once APPPATH."models/Serianameable.php";

class SiteDAO extends CI_Model {
	
	public function auth($idSite, $idUs){
	    /* pega as informações do site que contenha o id "idSite" 
	        e confere se o campo cd_Usuario bate com o "idUS" */
	    $site = $this->db->get_where('TB_Sites', array('cd_Site' => $idSite));
	    if($site->num_rows() > 0){
	        $s = $site->result()[0];
	        if($s->cd_Usuario == $idUs){
	            return TRUE;
	        }
	        else{
	            return FALSE;
	        }
	    }
	}
	
	public function getSite($id){
	    $site = $this->db->get_where('TB_Sites', array('cd_Site' => $id));
	    require_once APPPATH."models/Site_model.php";
	    if($site->num_rows() > 0){
	        $s = $site->result()[0];
	        $id = $s->cd_Site;
	        $nome = $s->nm_Site;
	        $dominio = $s->ds_Dominio;
	        $idUs = $s->cd_Usuario;
	        return new Site_model($id, $nome, $dominio, $idUs);
	    }
	    else{
	        return null;
	    }
	}
	
	public function getSites($id){
        // Retorna todos os sites do usuário logado pelo seu ID.
        $sites = $this->db->get_where('TB_Sites', array('cd_Usuario' => $id))->result();
  
        return $sites;
	}
	
	public function getSiteInfo($id){
        // Pega as informações do site pelo seu ds.
        $this->db->select('s.cd_Site, s.ds_Dominio, s.nm_Site');
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
	
	public function esteMes($dominio){
		$this->db->select('id, ds, dominio, mes');
		$this->db->select_sum('qtd');
		$this->db->group_by('ds');	
		return $this->db->get_where('TB_ClickCount', array('dominio' => $dominio->ds_Dominio, 'mes' => date('n')))->result();
	}
	
	public function contaClick($ds, $dominio, $m, $a){
	    $querydominio = $this->db->query("SELECT * FROM TB_ClickCount WHERE dominio = '$dominio'")->result();
        $queryds = $this->db->query("SELECT * FROM TB_ClickCount WHERE ds = '$ds' AND dominio = '$dominio'")->result();
        $queryMes = $this->db->query("SELECT * FROM TB_ClickCount WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m")->result();
        $queryAno = $this->db->query("SELECT * FROM TB_ClickCount WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m AND ano = $a")->result();
        
        if($querydominio == null){
            $this->db->query("INSERT INTO TB_ClickCount VALUES ('','$ds','$dominio',1,$m,$a)");
        }
        else{
            if($queryds == null){
                $this->db->query("INSERT INTO TB_ClickCount VALUES ('','$ds','$dominio',1,$m,$a)");
            }
            else{
                if($queryMes == null){
                    $this->db->query("INSERT INTO TB_ClickCount VALUES ('','$ds','$dominio',1,$m,$a)");
                }
                else{
                    if($queryAno == null){
                        $this->db->query("INSERT INTO TB_ClickCount VALUES ('','$ds','$dominio',1,$m,$a)");
                    }
                    else{
                        $this->db->query("UPDATE TB_ClickCount SET qtd = qtd+1 WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m AND ano = $a");       
                    }
                }
            }
        }
        
    }
	
	
}
