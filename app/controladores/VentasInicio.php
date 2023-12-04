<?php
    class VentasInicio extends Controlador {

        public function __construct() {
            $this->ventainicioModelo = $this->modelo('VentaInicio');
        }

        public function index() {
            $ventasinicio = $this->ventainicioModelo->obtenerVenta();
            $datos = ['ventasinicio' => $ventasinicio];
            $this->vista('paginas\inicio', $datos);
        }

    }

?>