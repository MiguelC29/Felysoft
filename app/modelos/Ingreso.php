<?php

    class Ingreso {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerIngresos() {
            
            $this->db->query('SELECT * FROM ingresos INNER JOIN ventas ON fkIdVenta = pkIdVenta ORDER BY pkIdIngreso');
            

            $resultados = $this->db->registros();

            return $resultados;
        }


        public function agregarIngreso($datos) {
            $this->db->query('INSERT INTO ingresos (fecha, monto, fkIdVenta) VALUES (:fecha, :monto, :fkIdVenta)');

            //Vincular valores
            $this->db->bind(':fecha', $datos['fecha']);
            $this->db->bind(':monto', $datos['monto']);
            $this->db->bind(':fkIdVenta', $datos['fkIdVenta']);


            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerIngresoId($id) {
            $this->db->query('SELECT * FROM ingresos WHERE pkIdIngreso = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function actualizarIngreso($datos) {
            $this->db->query('UPDATE ingresos SET fecha = :fecha, monto = :monto, fkIdVenta = :fkIdVenta WHERE pkIdIngreso = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdIngreso']);
            $this->db->bind(':fecha', $datos['fecha']);
            $this->db->bind(':monto', $datos['monto']);
            $this->db->bind(':fkIdVenta', $datos['fkIdVenta']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarIngreso($datos) {
            $this->db->query('DELETE FROM ingresos WHERE pkIdIngreso= :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdIngreso']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>