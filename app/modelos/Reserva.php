<?php

    class Reserva {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerReservas() {
            $this->db->query('SELECT pkIdReserva, fechaReserva, reserva.descripcion, abono, tiempo, libros.titulo as Libro, cliente.fkIdIdentificacion as Cliente FROM reserva INNER JOIN libros ON fkIdLibro = pkIdlibro INNER JOIN cliente ON fkIdCliente = pkIdCliente ');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarReserva($datos) {
            $this->db->query('INSERT INTO reserva (fechaReserva, descripcion, abono, tiempo, fkIdLibro, fkIdCliente) VALUES (:fechaReserva, :descripcion, :abono, :tiempo, :fkIdLibro, :fkIdCliente)');

            //Vincular valores
            $this->db->bind(':fechaReserva', $datos['fechaReserva']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            $this->db->bind(':abono', $datos['abono']);
            $this->db->bind(':tiempo', $datos['tiempo']);
            $this->db->bind(':fkIdLibro', $datos['fkIdLibro']);
            $this->db->bind(':fkIdCliente', $datos['fkIdCliente']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerReservaId($id) {
            $this->db->query('SELECT * FROM reserva WHERE pkIdReserva = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function obtenerReservasExcepto($id) {
            $this->db->query('SELECT * FROM reserva WHERE pkIdReserva != :id');
            $this->db->bind(':id', $id);

            $resultado = $this->db->registros();

            return $resultado;
        }

        public function actualizarReservas($datos) {
            $this->db->query('UPDATE reserva SET fechaReserva = :fechaReserva, descripcion = :descripcion, abono = :abono, tiempo = :tiempo, fkIdLibro = :fkIdLibro, fkIdCliente = :fkIdCliente WHERE pkIdReserva = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdReserva']);
            $this->db->bind(':fechaReserva', $datos['fechaReserva']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            $this->db->bind(':abono', $datos['abono']);
            $this->db->bind(':tiempo', $datos['tiempo']);
            $this->db->bind(':fkIdLibro', $datos['fkIdLibro']);
            $this->db->bind(':fkIdCliente', $datos['fkIdCliente']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarReserva($datos) {
            $this->db->query('DELETE FROM reserva WHERE pkIdReserva = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdReserva']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
    ?>