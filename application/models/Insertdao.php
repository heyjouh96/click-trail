<?php

require_once APPPATH."models/Serianameable.php";

class InsertDAO extends CI_Model {

	public function insert(Serianameable $us)
	{
		$this->db->insert("TB_".$us->getClassName(), $us->toArray());
	}
	
	public function get(Serianameable $us)
	{
		return $this->db->get_where("TB_".$us->getClassName(), array('ds_EmailUsuario' => $us->getEmail(), 'ds_SenhaUsuario' => $us->getSenha()))->row();
	}
	
	public function update(Serianameable $us)
	{
		return $this->db->query("UPDATE TB_ClickCount SET qtd = qtd+1 WHERE ds = '".$us->getDs()."' AND dominio = '".$us->getDominio()."' AND mes = ".$us->getMes()." AND semana = ".$us->getSemana()." ");
	}
	
	
	
}
