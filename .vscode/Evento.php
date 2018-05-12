<?php
    class Evento{
        private $id;
        private $nombre;
        private $fecha_inicio;
        private $fecha_fin;
        private $direccion;
        private $entradas;

        public function __construct($id, $nombre, $fecha_inicio, $fecha_fin, $direccion){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->fecha_inicio = $fecha_inicio;
            $this->fecha_fin = $fecha_fin;
            $this->direccion = $direccion;
            $this->entradas = array();
        }
    }
?>