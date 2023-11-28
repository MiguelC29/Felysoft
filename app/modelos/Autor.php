<?php

    class Autor {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerAutores() {
            $this->db->query('SELECT * FROM autores');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarAutor($datos) {
            $this->db->query('INSERT INTO autores (nombre, nacionalidad, fechaNacim, biografia) VALUES (:nombre, :nacionalidad, :fechaNacim, :biografia)');

            //Vincular valores
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':nacionalidad', $datos['nacionalidad']); 
            $this->db->bind(':fechaNacim', $datos['fechaNacim']);
            $this->db->bind(':biografia', $datos['biografia']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerAutorId($id) {
            $this->db->query('SELECT * FROM autores WHERE pkIdAutor = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function actualizarAutor($datos) {
            $this->db->query('UPDATE autores SET nombre = :nombre , nacionalidad = :nacionalidad , fechaNacim = :fechaNacim , biografia = :biografia WHERE pkIdAutor = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdAutor']);
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':nacionalidad', $datos['nacionalidad']);
            $this->db->bind(':fechaNacim', $datos['fechaNacim']);
            $this->db->bind(':biografia', $datos['biografia']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarAutor($datos) {
            $this->db->query('DELETE FROM autores WHERE pkIdAutor = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdAutor']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>