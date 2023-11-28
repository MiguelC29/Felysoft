<?php

    class Compra {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerCompras() {
            $this->db->query('SELECT * FROM compras');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarCompra($datos) {
            $this->db->query('INSERT INTO compras (fechaCompra, total) VALUES (:fechaCompra, :total)');

            //Vincular valores
            $this->db->bind(':fechaCompra', $datos['fechaCompra']);
            $this->db->bind(':total', $datos['total']);
  
            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerCompraId($id) {
            $this->db->query('SELECT * FROM compras WHERE pkIdCompra = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function actualizarCompra($datos) {
            $this->db->query('UPDATE compras SET fechaCompra = :fechaCompra, total = :total WHERE pkIdCompra = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdCompra']);
            $this->db->bind(':fechaCompra', $datos['fechaCompra']);
            $this->db->bind(':total', $datos['total']);


            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarCompra($datos) {
            $this->db->query('DELETE FROM compras WHERE pkIdCompra = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdCompra']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>