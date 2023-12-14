<?php

    class Usuario {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerUsuarios() {
            // $this->db->query('SELECT * FROM usuarios INNER JOIN rol ON fkIdRol = pkIdRol');
            $this->db->query('CALL mostrar_usuarios');

            $resultados = $this->db->registros();

            return $resultados;
        }


        public function agregarUsuario($datos) {
            //$this->db->query('INSERT INTO usuarios (pkIdIdentificacion, tipoDocu, nombres, apellidos, direccion, telefono, email, genero, usuario, contrasena, fkIdRol) VALUES (:pkIdIdentificacion, :tipoDocu, :nombres, :apellidos, :direccion, :telefono, :email, :genero,  :usuario, :contrasena, :fkIdRol)');
            $this->db->query('CALL agregar_usuarios(:pkIdIdentificacion, :tipoDocu, :nombres, :apellidos, :direccion, :telefono, :email, :genero, :usuario, :contrasena, :fkIdRol)');

            //Vincular valores
            $this->db->bind(':pkIdIdentificacion', $datos['pkIdIdentificacion']);
            $this->db->bind(':tipoDocu', $datos['tipoDocu']);
            $this->db->bind(':nombres', $datos['nombres']);
            $this->db->bind(':apellidos', $datos['apellidos']);
            $this->db->bind(':direccion', $datos['direccion']);
            $this->db->bind(':telefono', $datos['telefono']);
            $this->db->bind(':email', $datos['email']);
            $this->db->bind(':genero', $datos['genero']);
            $this->db->bind(':usuario', $datos['usuario']);
            $this->db->bind(':contrasena', $datos['contrasena']);
            $this->db->bind(':fkIdRol', $datos['fkIdRol']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerUsuarioId($id) {
            // $this->db->query('SELECT * FROM usuarios WHERE pkIdIdentificacion = :id');
            $this->db->query('CALL mostrar_usuario_especifico (:id)');


            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function actualizarUsuario($datos) {
            //$this->db->query('UPDATE usuarios SET pkIdIdentificacion = :pkIdIdentificacion, tipoDocu = :tipoDocu, nombres = :nombres, apellidos = :apellidos, direccion = :direccion, telefono = :telefono, email = :email, genero = :genero, usuario = :usuario, contrasena = :contrasena, fkIdRol = :fkIdRol, WHERE pkIdUsuario = :id');
            $this->db->query('CALL actualizar_usuarios(:pkIdIdentificacion, :tipoDocu, :nombres, :apellidos, :direccion, :telefono, :email, :genero, :usuario, :contrasena, :fkIdRol)');


            //Vincular los valores
            $this->db->bind(':pkIdIdentificacion', $datos['pkIdIdentificacion']);
            $this->db->bind(':tipoDocu', $datos['tipoDocu']);
            $this->db->bind(':nombres', $datos['nombres']);
            $this->db->bind(':apellidos', $datos['apellidos']);
            $this->db->bind(':direccion', $datos['direccion']);
            $this->db->bind(':telefono', $datos['telefono']);
            $this->db->bind(':email', $datos['email']);
            $this->db->bind(':genero', $datos['genero']);
            $this->db->bind(':usuario', $datos['usuario']);
            $this->db->bind(':contrasena', $datos['contrasena']);
            $this->db->bind(':fkIdRol', $datos['fkIdRol']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }

        public function borrarUsuario($datos) {
            // $this->db->query('DELETE FROM usuarios WHERE pkIdIdentificacion = :id');
            $this->db->query('CALL borrar_usuarios (:id)');


            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdIdentificacion']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>
