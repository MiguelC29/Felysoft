<?php

    class Categoria {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerCategorias() {
            //$this->db->query('SELECT * FROM categoria ORDER BY nombre');
            $this->db->query('call mostrar_categorias');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarCategoria($datos) {
            //$this->db->query('INSERT INTO categoria (nombre) VALUES (:nombre)');
            $this->db->query('CALL agregar_categorias(:nombre)');

            //Vincular valores
            $this->db->bind(':nombre', $datos['nombre']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerCategoriaId($id) {
            //$this->db->query('SELECT * FROM categoria WHERE pkIdCategoria = :id');
            $this->db->query('CALL mostrar_categoria_especifica (:id)');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function obtenerCategoriasExcepto($id) {                                             //revisar
            $this->db->query('SELECT * FROM categoria WHERE pkIdCategoria != :id ORDER BY nombre');
            $this->db->bind(':id', $id);

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function actualizarCategoria($datos) {
            //$this->db->query('UPDATE categoria SET nombre = :nombre WHERE pkIdCategoria = :id');
            $this->db->query('CALL actualizar_categorias (:id, :nombre)');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdCategoria']);
            $this->db->bind(':nombre', $datos['nombre']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarCategoria($datos) {
            //$this->db->query('DELETE FROM categoria WHERE pkIdCategoria = :id');
            $this->db->query('CALL borrar_categorias (:id)');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdCategoria']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>