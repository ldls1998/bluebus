<?php

include("Usuario.php");
class Cliente extends Usuario {
    private $nombre;
    private $apellido;
    private $dni;
    private $usuario;
    private $con;

    function __construct($con){
        $this->con=$con;
    }

		
	function Cliente($usuario,$nombre,$apellido,$dni) {
		parent::__construct($usuario);
		$this->nombre = $nombre;
        $this->apellido = $apellidos;
        $this->dni = $dni;
        $this->usuario = $edad;
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

	function  getapellido() {
		return $this->apellido;
	}
	
    function  setdni($dni) {
		$this->dni = $dni;
	}

	function  getdni() {
		return $this->dni;
	}

    
    function  setusuario($usuario) {
		$this->usuario = $usuario;
	}

	function  getusuario() {
		return $this->usuario;

    function registrarcliente($usuario,$contraseña,$nombre,$apellido,$dni){

        $r = $this->registrar($usuario,$contrasenia);
         if($r){
            $b = $this->insertarcliente($usuario,$nombre,$apellido,$dni);
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
    
        function insertarcliente($u,$n,$a,$d){
    
                
                $consulta = $this->con->prepare("INSERT INTO cliente (usuario,nombre,apellido,dni) VALUES (:usuario,:nombre,:apellido,:dni)");
                $consulta->bindParam(":usuario",$u);
                $consulta->bindParam(":nombre",$n);
                $consulta->bindParam(":apellido",$a);
                $consulta->bindParam(":dni",$d);
                return $consulta->execute();
            }
       }
	
   }
?>