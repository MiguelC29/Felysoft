<?php

    class Rol {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerRoles() {
            $this->db->query('SELECT * FROM rol');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarRol($datos) {
            $this->db->query('INSERT INTO rol (nombre) VALUES (:nombre)');

            //Vincular valores
            $this->db->bind(':nombre', $datos['nombre']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerRolId($id) {
            $this->db->query('SELECT * FROM rol WHERE pkIdRol = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function obtenerRolesExcepto($id) {
            $this->db->query('SELECT * FROM rol WHERE pkIdRol != :id');
            $this->db->bind(':id', $id);

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function actualizarRol($datos) {
            $this->db->query('UPDATE rol SET nombre = :nombre WHERE pkIdRol = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdRol']);
            $this->db->bind(':nombre', $datos['nombre']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarRol($datos) {
            $this->db->query('DELETE FROM rol WHERE pkIdRol= :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdRol']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>