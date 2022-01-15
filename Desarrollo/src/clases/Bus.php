<?php

    class Bus {
        private $placa;
        private $codigo;
        private $chofer;
        private $empresa;
        
        function Bus($placa,$codigo,$chofer,$empresa) {
            $this->placa = $placa;
            $this->codigo = $codigo;
            $this->chofer = $chofer;
            $this->empresa = $empresa;
        }

        function setPlaca($placa) {
            $this->placa = $placa;
        }

        function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        function setChofer($chofer) {
            $this->chofer = $chofer;
        }

        function setEmpresa($empresa) {
            $this->empresa = $empresa;
        }

        function getPlaca($placa) {
            return $this->placa;
        }

        function getCodigo($codigo) {
            return $this->codigo;
        }

        function getChofer($chofer) {
            return $this->chofer;
        }

        function getEmpresa($empresa) {
            return $this->empresa;
        }
    }
?>