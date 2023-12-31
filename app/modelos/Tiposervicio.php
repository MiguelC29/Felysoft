<?php
    class Tiposervicio {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerTiposervicio() {
            //$this->db->query('SELECT * FROM tiposervicio');
            $this->db->query('call mostrar_tiposervicios');
            $resultados = $this->db->registros();
            return $resultados;
        }

        public function agregarTiposervicio($datos) {
            //$this->db->query('INSERT INTO tiposervicio (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)');
            $this->db->query('call agregar_tiposervicio(:nombre, :descripcion, :precio)');

            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            $this->db->bind(':precio', $datos['precio']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerIdTipoServicio($id) {
            //$this->db->query('SELECT * FROM tiposervicio WHERE idTipoServicio = :id');
            $this->db->query('call mostrar_tiposervicio_especifico (:id)');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function obtenerTipoServiciosExcepto($id) {
            //$this->db->query('SELECT * FROM tiposervicio WHERE idTipoServicio != :id');
            $this->db->query('call mostrar_tiposervicio_excepto (:id)');
            $this->db->bind(':id', $id);

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function actualizarTiposervicio($datos) {
            //$this->db->query('UPDATE tiposervicio SET nombre = :nombre, descripcion = :descripcion, precio = :precio WHERE idTipoServicio = :id');
            $this->db->query('call actualizar_tiposervicio(:id, :nombre, :descripcion, :precio)');

            //Vincular los valores
            $this->db->bind(':id', $datos['idTipoServicio']);
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            $this->db->bind(':precio', $datos['precio']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarTiposervicio($datos) {
            //$this->db->query('DELETE FROM tiposervicio WHERE idTipoServicio = :id');
            $this->db->query('call borrar_tiposervicio (:id)');

            //Vincular los valores
            $this->db->bind(':id', $datos['idTipoServicio']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
}
