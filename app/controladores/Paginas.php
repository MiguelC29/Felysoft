<?php
    class Paginas extends Controlador {

        public function __construct() {
            
        }

        public function index() {
            $datos = [
                'titulo' => 'Bienvenido a FELYSOFT'
            ];

            $this->vista('paginas/inicio', $datos);
        }
    }
?>