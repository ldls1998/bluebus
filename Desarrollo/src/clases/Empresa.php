<?php

include("Usuario.php");
class Cliente extends Usuario {
    private $nombre;
    private $ruc;
    
		
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

	function  setruc() {
		return $this->ruc;
	}
	
	
   }
?>