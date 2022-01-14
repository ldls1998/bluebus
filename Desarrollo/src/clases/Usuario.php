<?php

class Usuario{
    private $con;
    public function __construct($con){
        $this->con=$con;
    }

    public function registrar($usuario,$contraseña){
     $success = $this->insertarDB($usuario,$contraseña);
     if($success){
        return true;
     }
     else{
       return false;
     }
    }

    
    public function iniciar($usuario,$contrasenia){
        
        
        $consulta = $this->con->prepare("SELECT * FROM usuario WHERE usuario = :usuario AND contrasenia=:contrasenia");
        
       
        $consulta->bindParam(":usuario",$usuario);
        $consulta->bindParam(":contrasenia",$contrasenia);
        $consulta->execute();
        
        if($consulta->rowCount()== 1){
            return true;
        }
        else{
            return false;
        }

        
       }
    private function insertarDB($u, $c){
        $consulta = $this->con->prepare("INSERT INTO usuario (usuario,contrasenia) VALUES (:usuario,:contrasenia)");
        
       
        $consulta->bindParam(":usuario",$u);
        $consulta->bindParam(":contrasenia",$c);

        return $consulta->execute();
    
    }

}
?>