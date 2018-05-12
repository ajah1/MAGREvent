<?php
    class Persona{
        private $dni;
        private $nombre;
        private $apellido;
        private $correo;
        private $edad;
        private $direccion;

        public function __construct($dni, $nombre, $apellido, $correo, $edad, $direccion){
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->correo = $correo;
            $this->edad = $edad;
            $this->direccion = $direccion;
        }
    }
?>