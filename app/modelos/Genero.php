<?php

    class Genero {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerGeneros() {
            $this->db->query('SELECT * FROM genero');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarGenero($datos) {
            $this->db->query('INSERT INTO genero (nombre, descripcion) VALUES (:nombre, :descripcion)');

            //Vincular valores
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':descripcion', $datos['descripcion']); 

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerGeneroId($id) {
            $this->db->query('SELECT * FROM genero WHERE pkIdGenero = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function actualizarGenero($datos) {
            $this->db->query('UPDATE genero SET nombre = :nombre , descripcion = :descripcion  WHERE pkIdGenero = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdGenero']);
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarGenero($datos) {
            $this->db->query('DELETE FROM genero WHERE pkIdGenero = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdGenero']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>