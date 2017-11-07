<?php

require_once APPPATH."models/Serianameable.php";

class InsertDAO extends CI_Model {

	public function insert(Serianameable $us)
	{
		$this->db->insert("TB_".$us->getClassName(), $us->toArray());
	}
	
}
