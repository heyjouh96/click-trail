<?php

require_once APPPATH."models/Serianameable.php";

class SiteDAO extends CI_Model {
	
	public function auth($idSite, $idUs){
	    /* pega as informações do site que contenha o id "idSite" 
	        e confere se o campo cd_Usuario bate com o "idUS" */
	    $site = $this->db->get_where('tb_sites', array('cd_site' => $idSite));
	    if($site->num_rows() > 0){
	        $s = $site->result()[0];
	        if($s->cd_usuario == $idUs){
	            return TRUE;
	        }
	        else{
	            return FALSE;
	        }
	    }
	}
	
	public function getSite($id){
	    $site = $this->db->get_where('tb_sites', array('cd_site' => $id));
	    require_once APPPATH."models/Site_model.php";
	    if($site->num_rows() > 0){
	        $s = $site->result()[0];
	        $id = $s->cd_site;
	        $nome = $s->nm_site;
	        $dominio = $s->ds_dominio;
	        $idUs = $s->cd_usuario;
	        return new Site_model($id, $nome, $dominio, $idUs);
	    }
	    else{
	        return null;
	    }
	}
	
	public function getSites($id){
        // Retorna todos os sites do usuário logado pelo seu ID.
        $sites = $this->db->get_where('tb_sites', array('cd_usuario' => $id))->result();
  
        return $sites;
	}
	
	public function getSiteInfo($id){
        // Pega as informações do site pelo seu ds.
        $this->db->select('s.cd_site, s.ds_dominio, s.nm_site');
        $this->db->select_sum('c.qtd', 'total');
        $this->db->join('tb_usuarios AS u', 's.cd_usuario = u.cd_usuario');
        $this->db->join('tb_clickcount AS c', 's.ds_dominio = c.dominio');
        $this->db->group_by('s.cd_site');
        return $this->db->get_where('tb_sites AS s', array('cd_site' => $id))->result();
	}
	
	public function getSiteDominio($id){
		// retorna o dominio do site
	    $this->db->select('ds_dominio');
	    return $this->db->get_where('tb_sites', array('cd_site' => $id))->row();
	}
	
	public function getSiteItens($dominio){
	    // retorna tudo da tabela clickcount do dominio passado por parâmetro
	    $this->db->select('ds, dominio');
		$this->db->select_sum('qtd');
		$this->db->group_by('ds, dominio');
		return $this->db->get_where('tb_clickcount', array('dominio' => $dominio->ds_dominio))->result();
	}
	
	public function esteMes($dominio){
		$this->db->select('ds, dominio, mes');
		$this->db->select_sum('qtd');
		$this->db->group_by('ds, dominio, mes');	
		return $this->db->get_where('tb_clickcount', array('dominio' => $dominio->ds_dominio, 'mes' => date('n')))->result();
	}
	
	public function totalMeses($dominio){
		$this->db->select('mes');
		$this->db->select_sum('qtd');
		$this->db->group_by('mes');	
		return $this->db->get_where('tb_clickcount', array('dominio' => $dominio->ds_dominio))->result();
	}
	
	public function contaClick($ds, $dominio, $m, $a){
	    $querydominio = $this->db->query("SELECT * FROM tb_clickcount WHERE dominio = '$dominio'")->result();
        $queryds = $this->db->query("SELECT * FROM tb_clickcount WHERE ds = '$ds' AND dominio = '$dominio'")->result();
        $queryMes = $this->db->query("SELECT * FROM tb_clickcount WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m")->result();
        $queryAno = $this->db->query("SELECT * FROM tb_clickcount WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m AND ano = '$a'")->result();
        
        if($querydominio == null){
            $this->db->query("INSERT INTO tb_clickcount (ds, dominio, qtd, mes, ano) VALUES ('$ds','$dominio',1,$m,'$a')");
        }
        else{
            if($queryds == null){
                $this->db->query("INSERT INTO tb_clickcount (ds, dominio, qtd, mes, ano) VALUES ('$ds','$dominio',1,$m,'$a')");
            }
            else{
                if($queryMes == null){
                    $this->db->query("INSERT INTO tb_clickcount (ds, dominio, qtd, mes, ano) VALUES ('$ds','$dominio',1,$m,'$a')");
                }
                else{
                    if($queryAno == null){
                        $this->db->query("INSERT INTO tb_clickcount (ds, dominio, qtd, mes, ano) VALUES ('$ds','$dominio',1,$m,'$a')");
                    }
                    else{
                        $this->db->query("UPDATE tb_clickcount SET qtd = qtd+1 WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m AND ano = '$a'");       
                    }
                }
            }
        }
        
    }
	
	
}
