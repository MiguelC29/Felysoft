<?php

    class Pago {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerPagos() {
            $this->db->query('SELECT * FROM pago');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarPago($datos) {
            $this->db->query('INSERT INTO pago (metodoPago, estado, fechaPago, valorPago) VALUES (:metodoPago, :estado, :fechaPago, :valorPago)');

            //Vincular valores
            $this->db->bind(':metodoPago', $datos['metodoPago']);
            $this->db->bind(':estado', $datos['estado']);
            $this->db->bind(':fechaPago', $datos['fechaPago']);
            $this->db->bind(':valorPago', $datos['valorPago']);

  
            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerPagoId($id) {
            $this->db->query('SELECT * FROM pago WHERE pkIdPago = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function actualizarPago($datos) {
            $this->db->query('UPDATE pago SET metodoPago = :metodoPago, estado = :estado, fechaPago = :fechaPago, valorPago = :valorPago  WHERE pkIdPago = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdPago']);
            $this->db->bind(':metodoPago', $datos['metodoPago']);
            $this->db->bind(':estado', $datos['estado']);
            $this->db->bind(':fechaPago', $datos['fechaPago']);
            $this->db->bind(':valorPago', $datos['valorPago']);


            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarPago($datos) {
            $this->db->query('DELETE FROM pago WHERE pkIdPago = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdPago']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>