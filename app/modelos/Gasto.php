<?php

    class Gasto {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerGastos() {
            
            $this->db->query('SELECT * FROM gastos LEFT JOIN compras ON fkIdCompra = pkIdCompra INNER JOIN pago ON fkIdPago = pkIdPago ORDER BY pkIdGasto');
            

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function busquedaGastos($busqueda) {
        
            $this->db->query('SELECT * FROM gastos LEFT JOIN compras ON fkIdCompra = pkIdCompra INNER JOIN pago ON fkIdPago = pkIdPago WHERE gastos.descripcion like :inputBuscar');

            $this->db->bind(':inputBuscar', '%' . $busqueda . '%');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarGasto($datos) {
            $this->db->query('INSERT INTO gastos (fecha, monto, descripcion, fkIdCompra, fkIdPago) VALUES (:fecha, :monto, :descripcion, :fkIdCompra, :fkIdPago)');

            //Vincular valores
            $this->db->bind(':fecha', $datos['fecha']);
            $this->db->bind(':monto', $datos['monto']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            $this->db->bind(':fkIdCompra', $datos['fkIdCompra']);
            $this->db->bind(':fkIdPago', $datos['fkIdPago']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerGastoId($id) {
            $this->db->query('SELECT * FROM gastos WHERE pkIdGasto = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function actualizarGasto($datos) {
            $this->db->query('UPDATE gastos SET fecha = :fecha, monto = :monto, descripcion = :descripcion, fkIdCompra = :fkIdCompra, fkIdPago = :fkIdPago WHERE pkIdGasto = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdGasto']);
            $this->db->bind(':fecha', $datos['fecha']);
            $this->db->bind(':monto', $datos['monto']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            $this->db->bind(':fkIdCompra', $datos['fkIdCompra']);
            $this->db->bind(':fkIdPago', $datos['fkIdPago']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarGasto($datos) {
            $this->db->query('DELETE FROM gastos WHERE pkIdGasto = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdGasto']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>