<?php 
    
    require_once APPPATH."models/Serializable.php";
    require_once APPPATH."models/Nameable.php";
    
    class Site_model implements Serializablee, Nameable {
    
        private $id, $nome, $dominio, $usuario;
        
        public function __construct($id, $nome, $dominio, $usuario){
            $this->id = $id;
            $this->nome = $nome;
            $this->dominio = $dominio;
            $this->usuario = $usuario;
        }
        
        // GETS
        public function getId(){
            return $this->id;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function getDominio(){
            return $this->dominio;
        }
        
        public function toArray(){
            $aux = array();
            $aux["cd_Site"] = $this->id;
            $aux["nm_Site"] = $this->nome;
            $aux["ds_Dominio"] = $this->dominio;
            $aux["cd_Usuario"] = $this->usuario;
            return $aux;
        }
        
        public function getClassName(){
            return "Sites";
        }
        
    
    }
    
    class Plugin implements Serializablee, Nameable {
    
        private $id, $ds, $dominio, $semana, $mes;
        
        public function __construct($id, $ds, $dominio, $semana, $mes){
            $this->id = $id;
            $this->ds = $ds;
            $this->dominio = $dominio;
            $this->semana = $semana;
            $this->mes = $mes;
        }
        
        // GETS
        public function getId(){
            return $this->id;
        }
        
        public function getDs(){
            return $this->ds;
        }
        
        public function getDominio(){
            return $this->dominio;
        }
        
        public function getSemana(){
            return $this->semana;
        }
        
        public function getMes(){
            return $this->mes;
        }
        
        // RETORNA QUERYs
        public function queryDominio($dominio){
            return $this->db->query("SELECT * FROM clickcount WHERE dominio = '$dominio'")->result();
        }
        
        public function queryDs($ds, $dominio){
            return $this->db->query("SELECT * FROM clickcount WHERE ds = '$ds' AND dominio = '$dominio'")->result();
        }
        
        public function queryMes($ds, $dominio, $mes){
            return $this->db->query("SELECT * FROM clickcount WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m")->result();
        }
        public function querySemana($ds, $dominio, $mes, $semana){
            return $querySem = $this->db->query("SELECT * FROM clickcount WHERE ds = '$ds' AND dominio = '$dominio' AND mes = $m AND semana = $s")->result();
        }
        
        public function toArray(){
            $aux = array();
            $aux["id"] = $this->id;
            $aux["ds"] = $this->ds;
            $aux["dominio"] = $this->dominio;
            $aux["semana"] = $this->semana;
            $aux["mes"] = $this->mes;
            return $aux;
        }
        
        public function getClassName(){
            return "ClickCount";
        }
        
    
    }

