<?php
    class VentaInicio {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerVenta() {
            $this->db->query('SELECT pkIdVenta, fechaVenta, total FROM ventas');

            $resultados = $this->db->registros();
            
            return $resultados;
        }
    }
?>