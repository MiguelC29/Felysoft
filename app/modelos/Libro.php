<?php

    class Libro {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerLibros() {
            // $this->db->query('SELECT * FROM gastos');
            $this->db->query('SELECT pkIdLibro, titulo, editorial, libros.descripcion, anioPublicacion, precioHora, autores.nombre as autor, genero.nombre as genero FROM libros INNER JOIN autores ON fkIdAutor = pkIdAutor INNER JOIN genero ON fkIdGenero = pkIdGenero ');

            $resultados = $this->db->registros();

            return $resultados;
        }
        public function agregarLibro($datos) {
            $this->db->query('INSERT INTO libros (titulo, editorial, descripcion, anioPublicacion, precioHora, fkIdAutor, fkIdGenero) VALUES (:titulo, :editorial, :descripcion, :anioPublicacion, :precioHora, :fkIdAutor, :fkIdGenero)');

            //Vincular valores
            $this->db->bind(':titulo', $datos['titulo']);
            $this->db->bind(':editorial', $datos['editorial']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            $this->db->bind(':anioPublicacion', $datos['anioPublicacion']);
            $this->db->bind(':precioHora', $datos['precioHora']);
            $this->db->bind(':fkIdAutor', $datos['fkIdAutor']);
            $this->db->bind(':fkIdGenero', $datos['fkIdGenero']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerLibroId($id) {
            $this->db->query('SELECT * FROM libros WHERE pkIdLibro = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function obtenerLibrosExcepto($id) {
            $this->db->query('SELECT * FROM libros WHERE pkIdLibro != :id ORDER BY nombre');
            $this->db->bind(':id', $id);

            $resultado = $this->db->registros();

            return $resultado;
        }

        public function actualizarLibros($datos) {
            $this->db->query('UPDATE libros SET titulo = :titulo, editorial = :editorial, descripcion = :descripcion, anioPublicacion = :anioPublicacion, precioHora = :precioHora, fkIdAutor = :fkIdAutor, fkIdGenero = :fkIdGenero WHERE pkIdLibro = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdLibro']);
            $this->db->bind(':titulo', $datos['titulo']);
            $this->db->bind(':editorial', $datos['editorial']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            $this->db->bind(':anioPublicacion', $datos['anioPublicacion']);
            $this->db->bind(':precioHora', $datos['precioHora']);
            $this->db->bind(':fkIdAutor', $datos['fkIdAutor']);
            $this->db->bind(':fkIdGenero', $datos['fkIdGenero']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarLibro($datos) {
            $this->db->query('DELETE FROM libros WHERE pkIdLibro = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdLibro']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
    ?>