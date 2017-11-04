<?php

require_once APPPATH."models/Serianameable.php";

class SiteDAO extends CI_Model {
    
	public function getSiteInfo($ds){
        // Pega as informações do site pelo seu ds.
        $site = $this->db->query("
            SELECT s.cd_Site, s.ds_Dominio, SUM(c.qtd) AS total
            FROM TB_Sites AS s
                INNER JOIN TB_Usuarios AS u ON s.cd_Usuario = u.cd_Usuario
                INNER JOIN clickcount AS c ON s.ds_Dominio = c.dominio
                WHERE cd_Site = '$ds'
        ")->result();
       
        return $site;
	}
	
	public function getSitedominio($ds){
	    $dominio = $this->db->query("SELECT ds_Dominio FROM TB_Sites WHERE cd_Site = '$ds'")->row();
	    
	    return $dominio;
	}
	
	public function getSiteItens($dominio){
	    // retorna tudo da tabela clickcount do dominio passado por parâmetro
	    $itens = $this->db->query("
	        SELECT ds, ds, dominio, SUM(qtd) as qtd
	            FROM clickcount
	            WHERE dominio = '".$dominio->ds_Dominio."'
	            GROUP BY ds
	            
	    ")->result();
	    
	    return $itens;
	}
	
	public function contaClick(Serianameable $site){
	    $querydominio = $this->db->query("SELECT * FROM clickcount WHERE dominio = '$dominio'")->result();
        $queryds = $this->db->query("SELECT * FROM clickcount WHERE ds = '$ds' AND dominio = '$dominio'")->result();
        $queryMes = $this->db->query("SELECT * FROM clickcount WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m")->result();
        $querySem = $this->db->query("SELECT * FROM clickcount WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m AND semana = $s")->result();
        
        if($querydominio == null){
            $this->db->query("INSERT INTO clickcount VALUES ('','$ds','$dominio',1,$s,$m)");
        }
        else{
            if($queryds == null){
                $this->db->query("INSERT INTO clickcount VALUES ('','$ds','$dominio',1,$s,$m)");
            }
            else{
                if($queryMes == null){
                    $this->db->query("INSERT INTO clickcount VALUES ('','$ds','$dominio',1,$s,$m)");
                }
                else{
                    if($querySem == null){
                        $this->db->query("INSERT INTO clickcount VALUES ('','$ds','$dominio',1,$s,$m)");
                    }
                    else{
                        $this->db->query("UPDATE clickcount SET qtd = qtd+1 WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m AND semana = $s");       
                    }
                }
            }
        }

    }
	
	
}
