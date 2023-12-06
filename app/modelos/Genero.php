<?php

    class Genero {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerGeneros() {
            $this->db->query('call mostrar_generos');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarGenero($datos) {
            $this->db->query('CALL agregar_genero(:nombre, :descripcion)');

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
            $this->db->query('CALL mostrar_genero_especifico (:id)');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }
        public function obtenerGenerosExcepto($id) {
            $this->db->query('SELECT * FROM genero WHERE pkIdGenero != :id ORDER BY nombre ');
            $this->db->bind(':id', $id);

            $resultados = $this->db->registros();

            return $resultados;
        }
        public function actualizarGenero($datos) {
            $this->db->query('CALL actualizar_generos (:id, :nombre, :descripcion)');

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
            $this->db->query('CALL borrar_generos (:id)');

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