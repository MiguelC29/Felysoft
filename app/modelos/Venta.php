<?php

    class Venta {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

//OBTENER VENTAS
        public function obtenerVentas() {
            
            $this->db->query('SELECT * FROM ventas INNER JOIN pago ON fkIdPago = pkIdPago');
            //$this->db->query('call mostrar_ventas');


            $resultados = $this->db->registros();

            return $resultados;
        }


//AGREGAR VENTAS
        public function agregarVenta($datos) {
            $this->db->query('INSERT INTO ventas (fechaVenta, subtotal, total, fkIdPago) VALUES (:fechaVenta, :subtotal, :total, :fkIdPago)');
            //$this->db->query('CALL agregar_ventas(:fecha, :monto, :descripcion, :fkIdCompra, :fkIdPago)');

            //Vincular valores
            $this->db->bind(':fechaVenta', $datos['fechaVenta']);
            $this->db->bind(':subtotal', $datos['subtotal']);
            $this->db->bind(':total', $datos['total']);
            $this->db->bind(':fkIdPago', $datos['fkIdPago']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

//OBTENER UNA VENTA ESPECÍFICA
            public function obtenerVentaId($id) {
                $this->db->query('SELECT * FROM ventas WHERE pkIdVenta = :id');
                //$this->db->query('CALL mostrar_venta_especifica (:id)');
                $this->db->bind(':id', $id);

                $result = $this->db->registro();

                return $result;
            }

//OBTENER VENTAS EXCEPTO
            public function obtenerVentasExcepto($id) {
                $this->db->query('SELECT * FROM ventas WHERE pkIdVenta != :id');
                $this->db->bind(':id', $id);

                $resultados = $this->db->registros();

                return $resultados;
            }

//ACTUALIZAR VENTAS
        public function actualizarVenta($datos) {
            $this->db->query('UPDATE ventas SET fechaVenta = :fechaVenta, subtotal = :subtotal, total = :total, fkIdPago = :fkIdPago WHERE pkIdVenta = :id');
            //$this->db->query('CALL actualizar_ventas (:id, :fecha, :monto, :descripcion, :total, :metodoPago)');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdVenta']);
            $this->db->bind(':fechaVenta', $datos['fechaVenta']);
            $this->db->bind(':subtotal', $datos['subtotal']);
            $this->db->bind(':total', $datos['total']);
            $this->db->bind(':fkIdPago', $datos['fkIdPago']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }


//ELIMINAR VENTAS
        public function borrarVenta($datos) {
            $this->db->query('DELETE FROM ventas WHERE pkIdVenta = :id');
            //$this->db->query('CALL borrar_ventas (:id)');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdVenta']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>