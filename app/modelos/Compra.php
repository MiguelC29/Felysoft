<?php

    class Compra {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerCompras() {
            //$this->db->query('SELECT * FROM compras');
            $this->db->query('call mostrar_compras');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarCompra($datos) {
            //$this->db->query('INSERT INTO compras (fechaCompra, total) VALUES (:fechaCompra, :total)');
            $this->db->query('CALL agregar_compras (:fechaCompra, :total)');

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
            //$this->db->query('SELECT * FROM compras WHERE pkIdCompra = :id');
            $this->db->query('CALL mostrar_compra_especifica (:id)');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function obtenerComprasExcepto($id) { //revisar
            $this->db->query('SELECT * FROM compras WHERE pkIdCompra != :id');
            $this->db->bind(':id', $id);

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function actualizarCompra($datos) {
            //$this->db->query('UPDATE compras SET fechaCompra = :fechaCompra, total = :total WHERE pkIdCompra = :id');
            //$this->db->query('CALL actualizar_compras (:id, :fechaCompra, :total)');
            $this->db->query('CALL actualizar_compras (:id, :fechaCompra, :total)');

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
            //$this->db->query('DELETE FROM compras WHERE pkIdCompra = :id');
            $this->db->query('CALL borrar_compras (:id)');

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