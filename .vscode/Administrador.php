<?php
    class Administrador extends Persona{
        private $usuario;
        private $password;

        public function __construct($usuario, $password){
            $this->usuario = $usuario;
            $this->password = $password;

        }
    }
?>