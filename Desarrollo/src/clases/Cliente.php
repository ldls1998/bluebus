<?php

include("Usuario.php");
class Cliente extends Usuario {
    private $nombre;
    private $apellido;
    private $dni;
    private $edad;
		
	function Cliente($usuario,$contraseña,$nombre,$apellido,$dni,$edad) {
		parent::__construct($usuario,$contraseña);
		$this->nombre = $nombre;
        $this->apellido = $apellidos;
        $this->dni = $dni;
        $this->edad = $edad;
	}

	function  setnombre($nombre) {
		$this->nombre = $nombre;
	}

	function  getnombre() {
		return $this->nombre;
	}

    function  setapellido($apellido) {
		$this->nombre = $nombre;
	}

	function  setapellido() {
		return $this->apellido;
	}
	
    function  setnombre($dni) {
		$this->dni = $dni;
	}

	function  getedad() {
		return $this->edad;
	}
	
   }
?>