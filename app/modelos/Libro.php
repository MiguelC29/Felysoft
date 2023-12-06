<?php

    class Libro {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerLibros() {
            $this->db->query('call mostrar_libros');

            $resultados = $this->db->registros();

            return $resultados;
        }
        public function agregarLibro($datos) {
            $this->db->query('CALL agregar_libros(:titulo,:editorial, :descripcion, :anioPublicacion, :precioHora, :fkIdAutor,:fkIdGenero)');

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
            $this->db->query('CALL mostrar_libro_especifico (:id)');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function obtenerLibrosExcepto($id) {
            $this->db->query('SELECT * FROM libros WHERE pkIdLibro != :id ORDER BY titulo');
            $this->db->bind(':id', $id);

            $resultado = $this->db->registros();

            return $resultado;
        }

        public function actualizarLibros($datos) {
            $this->db->query('CALL actualizar_libros (:id, :titulo, :editorial, :descripcion, :anioPublicacion, :precioHora, :fkIdAutor, :fkIdGenero)');

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
            $this->db->query('CALL borrar_libros (:id)');

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