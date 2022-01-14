<?php
    session_start();
    date_default_timezone_set('America/Lima');
    try{
        $con = new PDO("mysql:dbname=viajeseguro;host=localhost","root","");
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    catch(PDOException $th){
        echo "Conexión fallida: " .$th->getMessage();
    }
?>