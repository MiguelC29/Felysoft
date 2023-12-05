<?php

    class Cliente {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerClientes() {
            $this->db->query('SELECT pkIdCliente, fechaRegistro, fkIdIdentificacion FROM cliente INNER JOIN usuarios ON fkIdIdentificacion = pkIdIdentificacion');

            $resultados = $this->db->registros();

            return $resultados;
        }
        public function agregarCliente($datos) {
            $this->db->query('INSERT INTO cliente (fechaRegistro, fkIdIdentificacion) VALUES (:fechaRegistro, :fkIdIdentificacion)');

            //Vincular valores
            $this->db->bind(':fechaRegistro', $datos['fechaRegistro']);
            $this->db->bind(':fkIdIdentificacion', $datos['fkIdIdentificacion']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerClienteId($id) {
            $this->db->query('SELECT * FROM cliente WHERE pkIdCliente = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function obtenerClientesExcepto($id) {
            $this->db->query('SELECT * FROM cliente WHERE pkIdCliente != :id ORDER BY fechaRegistro');
            $this->db->bind(':id', $id);

            $resultado = $this->db->registros();

            return $resultado;
        }
    }
    ?>