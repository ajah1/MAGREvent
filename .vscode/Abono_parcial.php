<?php
    class Abono_completo extends Entrada{
        private $numero_dias;
        private $precio;

        public function __construct($numero_dias, $precio){
            $this->numero_dias = $numero_dias;
            $this->precio = $precio;
        }
    }
?>