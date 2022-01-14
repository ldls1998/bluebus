<?php

include("Usuario.php");
class Empresa extends Usuario {

    private $nombre;
    private $ruc;
    private $con;

   function __construct($con) {
        parent::__construct($con);
        $this->con=$con;
    }
		
	function Empresa($usuario,$contraseña,$nombre,$ruc) {
		parent::__construct($usuario,$contraseña);
		$this->nombre = $nombre;
        $this->ruc = $ruc;
        
	}

	function  setnombre($nombre) {
		$this->nombre = $nombre;
	}

	function  getnombre() {
		return $this->nombre;
	}

    function  setruc($ruc) {
		$this->ruc = $ruc;
	}

	function  getruc() {
		return $this->ruc;
	}
	function registrarempresa($usuario,$contrasenia,$nombre,$ruc){

	$r = $this->registrar($usuario,$contrasenia);
     if($r){
        $b = $this->insertarempresa($usuario,$nombre,$ruc);
        if($b){
            return true;
         }
         else{
           return false;
         }
     }
     else{
       return false;
     }
    }

    function insertarempresa($u,$n,$r){

            
            $consulta = $this->con->prepare("INSERT INTO empresa (usuario,nombre,ruc) VALUES (:usuario,:nombre,:ruc)");
            $consulta->bindParam(":usuario",$u);
            $consulta->bindParam(":nombre",$n);
            $consulta->bindParam(":ruc",$r);
    
            return $consulta->execute();
        }
   }
?>