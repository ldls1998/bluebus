<?php

class Bus
{
    private $placa;
    private $codigo;
    private $chofer;
    private $empresa;

    private $con;

    function __construct($con){
        $this->con=$con;
    }

    function Bus($placa, $codigo, $chofer, $empresa)
    {
        $this->placa = $placa;
        $this->codigo = $codigo;
        $this->chofer = $chofer;
        $this->empresa = $empresa;
    }

    function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    function setChofer($chofer)
    {
        $this->chofer = $chofer;
    }

    function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    function getPlaca($placa)
    {
        return $this->placa;
    }

    function getCodigo($codigo)
    {
        return $this->codigo;
    }

    function getChofer($chofer)
    {
        return $this->chofer;
    }

    function getEmpresa($empresa)
    {
        return $this->empresa;
    }


    function añadirbus($placa,$asientos,$empresa)
    {
       
        $consulta = $this->con->prepare("INSERT INTO bus (placa,N_asientos,empresa) VALUES (:placa,:asientos,:empresa)");
        $consulta->bindParam(":placa", $placa);
        $consulta->bindParam(":asientos", $asientos);
        $consulta->bindParam(":empresa", $empresa);

        return  $consulta->execute();
    }


    function listadodebuses($empresa)
    {

        $consulta = $this->con->prepare("SELECT * FROM bus WHERE empresa = :empresa");
        $consulta->bindParam(":empresa", $empresa);
        $consulta->execute();
        
        $bus = $consulta->fetchAll(PDO::FETCH_ASSOC);
       
        return $bus;}
       
    
    function buscarbusporplaca($empresa, $placa)
        {
    
            $consulta = $this->con->prepare("SELECT * FROM bus WHERE empresa = :empresa AND placa = :placa");
            $consulta->bindParam(":placa", $placa);
            $consulta->bindParam(":empresa", $empresa);
            $consulta->execute();
            
            $bus = $consulta->fetchAll(PDO::FETCH_ASSOC);
           
            return $bus;
        }
           

    function eliminarBus($placa)
    {

        $consulta = $this->con->prepare("DELETE FROM bus WHERE placa = :placa;");
        $consulta->bindParam(":placa", $placa);

        return $consulta->execute();
    }

    function modificarPlaca($placa, $placaNueva)
    {

        $consulta = $this->con->prepare("UPDATE bus SET placa = :placaNueva WHERE placa = :placa;");
        $consulta->bindParam(":placa", $placa);
        $consulta->bindParam(":placaNueva", $placaNueva);

        return $consulta->execute();
    }

    function modificarCodigo($placa, $codigoNuevo)
    {

        $consulta = $this->con->prepare("UPDATE bus SET codigo = :codigoNuevo WHERE placa = :placa;");
        $consulta->bindParam(":placa", $placa);
        $consulta->bindParam(":codigoNuevo", $codigoNuevo);

        return $consulta->execute();
    }

    function modificarChofer($placa, $choferNuevo)
    {

        $consulta = $this->con->prepare("UPDATE bus SET chofer = :choferNuevo WHERE placa = :placa;");
        $consulta->bindParam(":choferNuevo", $choferNuevo);
        $consulta->bindParam(":placa", $placa);

        return $consulta->execute();
    }

    function modificarEmpresa($empresaNueva, $placa)
    {

        $consulta = $this->con->prepare("UPDATE bus SET empresa = :empresaNueva WHERE placa = :placa;");
        $consulta->bindParam(":empresaNueva", $empresaNueva);
        $consulta->bindParam(":placa", $placa);

        return $consulta->execute();
    }
}
?>