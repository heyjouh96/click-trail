<?php 
    
    require_once APPPATH."models/Serializable.php";
    require_once APPPATH."models/Nameable.php";
    
    class Usuario_model implements Serializablee, Nameable {
    
        private $id, $nome, $sbnome, $email, $senha, $status;
        
        public function __construct($id, $nome, $sbnome, $email, $senha, $status){
            $this->id = $id;
            $this->nome = $nome;
            $this->sbnome = $sbnome;
            $this->email = $email;
            $this->senha = $senha;
            $this->status = $status;
        }
        
        // GETS
        public function getId(){
            return $this->id;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function getSbnome(){
            return $this->sbnome;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function getSenha(){
            return $this->senha;
        }
        
        public function toArray(){
            $aux = array();
            $aux["cd_Usuario"] = $this->id;
            $aux["nm_Usuario"] = $this->nome;
            $aux["ds_Sobrenome"] = $this->sbnome;
            $aux["ds_EmailUsuario"] = $this->email;
            $aux["ds_SenhaUsuario"] = $this->senha;
            $aux["ds_StatusUsuario"] = $this->status;
            return $aux;
        }
        
        public function getClassName(){
            return "Usuarios";
        }
        
    
    }

