<?php

class Horario 
{
    private $horario;
    private $hora_salida;
    private $frec_sal;

    function Horario($horario, $hora_salida, $frec_sal)
    {
        $this->horario = $horario;
        $this->hora_salida = $hora_salida;
        $this->frec_sal = $frec_sal;
    }

    function setHorario($horario)
    {
        $this->horario = $horario;
    }
    
    function setHora_salida($hora_salida)
    {
        $this->hora_salida = $hora_salida;
    }

    function setFrec_sal($frec_sal)
    {
        $this->frec_sal = $frec_sal;
    }

    function getHorario($horario)
    {
        return $this->horario;
    }

    function getHora_salida($hora_salida)
    {
        return $this->hora_salida;
    }

    function getFrec_sal($frec_sal)
    {
        return $this->frec_sal;
    }

    function modificarHorario($horario, $horarioNuevo)
    {

        $consulta = $this->con->prepare("UPDATE horario SET horario = :horarioNuevo WHERE horario = :horario;");
        $consulta->bindParam(":horario", $horario);
        $consulta->bindParam(":horarioNuevo", $horarioNuevo);

        return $consulta->execute();
    }

    function modificarHora_salida($horario, $hora_salidaNuevo)
    {

        $consulta = $this->con->prepare("UPDATE horario SET hora_salida = :hora_salidaNuevo WHERE horario = :horario;");
        $consulta->bindParam(":horario", $horario);
        $consulta->bindParam(":hora_salida", $hora_salidaNuevo);

        return $consulta->execute();
    }

    function modificarFrec_sal($horario, $frec_salNuevo)
    {

        $consulta = $this->con->prepare("UPDATE horario SET horario = :frec_sal WHERE horario = :horario;");
        $consulta->bindParam(":horario", $horario);
        $consulta->bindParam(":frec_salNuevo", $frec_salNuevo);

        return $consulta->execute();
    }
}

?>