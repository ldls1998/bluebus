<?php

class Usuario{
    private $con;
   

    function __construct($con){
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

    
    public function iniciar(String $tipo,String $usuario,String $contrasenia){
        
        $consulta = $this->con->prepare("SELECT * FROM usuario WHERE usuario = :usuario AND contrasenia=:contrasenia");

        $consulta->bindParam(":usuario",$usuario);
        $consulta->bindParam(":contrasenia",$contrasenia);
        $consulta->execute();
        
        if($consulta->rowCount()== 1){
            $success = $this->validarcuenta($tipo,$usuario);
            if($success){
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

       public function validarcuenta(String $tipo,String $usuario){
       
       if($tipo == 'empresa'){ 
       $consulta = $this->con->prepare("SELECT * FROM empresa WHERE usuario = :usuario");
       $consulta->bindParam(":usuario",$usuario);
       $consulta->execute();
       
       if($consulta->rowCount()==1){
           return true;
       }
       else{
        return false;
       }
       }
       else{
        $consulta2 = $this->con->prepare("SELECT * FROM cliente WHERE usuario = :usuario");
        $consulta2->bindParam(":usuario",$usuario);
        $consulta2->execute();
        if($consulta2->rowCount()==1){
            return true;
        }
        else{
            return false;
           }
     }
       }

    private function insertarDB($u, $c){
        $consulta = $this->con->prepare("INSERT INTO usuario (usuario,contrasenia) VALUES (:usuario,:contrasenia)");
        $consulta->bindParam(":usuario",$u);
        $consulta->bindParam(":contrasenia",$c);

        return $consulta->execute();
  }}

?>