<?php

     //aqui establecemos el horario a GMT-5 (Colombia)
    date_default_timezone_set('America/Bogota');

    class Servicio {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerServicio() {
            //$this->db->query('SELECT pkIdServicio, fechaCreacion, estado, fechaModificacion, precioAdicional, total, nombre AS nombreTipoServicio, descripcion AS descripcionTipoServicio, precio AS precioTipoServicio
            //FROM servicios INNER JOIN tiposervicio ON fkIdTipoSer = idTipoServicio
            //ORDER BY fechaCreacion, nombre, descripcion;');
            $this->db->query('call mostrar_servicios');
        
            $resultados = $this->db->registros();
        
            return $resultados;
        }
        

        public function agregarServicio($datos) {
            //$this->db->query('INSERT INTO servicios (estado, fechaCreacion, fechaModificacion, precioAdicional, total, fkIdTipoSer) VALUES (:estado, :fechaCreacion, :fechaModificacion, :precioAdicional, :total, :fkIdTipoSer)');
            $this->db->query('call agregar_servicio (:estado, :fechaCreacion, :fechaModificacion, :precioAdicional, :total, :fkIdTipoSer)');

            $this->db->bind(':estado', $datos['estado']);
            $this->db->bind(':fechaCreacion', $datos['fechaCreacion']);
            $this->db->bind(':fechaModificacion', $datos['fechaModificacion']);
            $this->db->bind(':precioAdicional', $datos['precioAdicional']);
            $this->db->bind(':total', $datos['total']);
            $this->db->bind(':fkIdTipoSer', $datos['fkIdTipoSer']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function editarServicio($datos) {
            //$this->db->query('UPDATE servicios SET estado = :estado, fechaModificacion = :fechaModificacion WHERE pkIdServicio = :id');
            $this->db->query('call actualizar_servicio(:estado, :fechaModificacion, :id)');

            $this->db->bind(':estado', $datos['estado']);
            $this->db->bind(':fechaModificacion', $datos['fechaModificacion']);
            $this->db->bind(':id', $datos['id']);

            if ($this->db->execute()) {
                return true;
            } else {
                print_r($this->db->error());
                return false;
            }
            
        }

        public function borrarServicio($id) {
            //$this->db->query('DELETE FROM servicios WHERE pkIdServicio = :id');
            $this->db->query('call borrar_servicio (:id)');
            $this->db->bind(':id', $id);

            return $this->db->execute();
        }

        public function obtenerIdServicio($id) {
            //$this->db->query('SELECT * FROM servicios WHERE pkIdServicio = :id');
            $this->db->query('call mostrar_servicio_especifico(:id)');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function obtenerServiciosExcepto($id) {
            //$this->db->query('SELECT * FROM servicios WHERE pkIdServicio != :id ORDER BY fechaCreacion');
            $this->db->query('call mostrar_servicio_excepto (:id)');
            $this->db->bind(':id', $id);

            $resultados = $this->db->registros();

            return $resultados;
        }
    }
?>