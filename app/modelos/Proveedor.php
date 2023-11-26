<?php

    class Proveedor {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerProveedores() {
            $this->db->query('SELECT * FROM proveedores');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarProveedor($datos) {
            $this->db->query('INSERT INTO proveedores(nit, nombre, telefono, email) VALUES (:nit, :nombre, :telefono, :email)');

            //Vincular valores
            $this->db->bind(':nit', $datos['nit']);
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':telefono', $datos['telefono']);
            $this->db->bind(':email', $datos['email']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerProveedorId($id) {
            $this->db->query('SELECT * FROM proveedores WHERE pkIdProveedores = :id');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function actualizarProveedor($datos) {
            $this->db->query('UPDATE proveedores SET nit = :nit, nombre = :nombre, telefono = :telefono, email = :email WHERE pkIdProveedores = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdProveedores']);
            $this->db->bind(':nit', $datos['nit']);
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':telefono', $datos['telefono']);
            $this->db->bind(':email', $datos['email']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarProveedor($datos) {
            $this->db->query('DELETE FROM proveedores WHERE pkIdProveedores = :id');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdProveedores']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>