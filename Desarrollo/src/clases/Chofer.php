<?php

class Chofer
{
  

    private $con;

    function __construct($con){
        $this->con=$con;
    }

     
    function añadirchofer($nombre,$apellido,$brebete,$empresa)
    {

        $consulta = $this->con->prepare("INSERT INTO chofer (nombre,apellido,N_brebete,empresa) VALUES (:nombre,:apellido,:direccion,:brebete,:empresa)");
        $consulta->bindParam(":nombre", $empresa);
        $consulta->bindParam(":apellido", $empresa);
        $consulta->bindParam(":brebete", $empresa);
        $consulta->bindParam(":empresa", $empresa);
       
        
      
       
        return  $consulta->execute();
    }
       
    
    function listadodechoferes($empresa)
    {

        $consulta = $this->con->prepare("SELECT * FROM chofer WHERE empresa = :empresa");
        $consulta->bindParam(":empresa", $empresa);
        $consulta->execute();
        
        $bus = $consulta->fetchAll(PDO::FETCH_ASSOC);
       
        return $bus;}
       
    

    function eliminarChofer($id)
    {

        $consulta = $this->con->prepare("DELETE FROM chofer WHERE id_chofer = :id;");
        $consulta->bindParam(":id", $id);

        return $consulta->execute();
    }
}
?>