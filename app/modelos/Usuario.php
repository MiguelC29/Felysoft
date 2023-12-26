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
            $query = 'INSERT INTO usuarios (pkIdIdentificacion, tipoDocu, nombres, apellidos, direccion, telefono, email, genero, usuario, contrasena, fkIdRol';
        
            // Verificar si se ha proporcionado una imagen
            if (isset($datos['imagen']) && !empty($datos['imagen'])) {
                $query .= ', imagen, tipoImg';
            }
        
            $query .= ') VALUES (:pkIdIdentificacion, :tipoDocu, :nombres, :apellidos, :direccion, :telefono, :email, :genero,  :usuario, :contrasena, :fkIdRol';
        
            // Vincular la imagen solo si se proporciona una imagen
            if (isset($datos['imagen']) && !empty($datos['imagen'])) {
                $query .= ', :imagen, :tipoImg';
            }
        
            $query .= ')';
        
            $this->db->query($query);
        
            // Vincular valores
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
        
            // Vincular la imagen solo si se proporciona una imagen
            if (isset($datos['imagen']) && !empty($datos['imagen'])) {
                $this->db->bind(':imagen', $datos['imagen']);
                $this->db->bind(':tipoImg', $datos['tipoImg']);
            }
        
            $this->db->bind(':fkIdRol', $datos['fkIdRol']);
        
            // Ejecutar
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
            $query = 'UPDATE usuarios SET tipoDocu = :tipoDocu, nombres = :nombres, apellidos = :apellidos, direccion = :direccion, telefono = :telefono, email = :email, genero = :genero, usuario = :usuario, contrasena = :contrasena, fkIdRol = :fkIdRol';
            // $this->db->query('CALL actualizar_usuarios(:pkIdIdentificacion, :tipoDocu, :nombres, :apellidos, :direccion, :telefono, :email, :genero, :usuario, :contrasena, :fkIdRol)');

            // Verificar si se ha proporcionado una nueva imagen
            if (isset($datos['imagen']) && !empty($datos['imagen'])) {
                $query .= ', imagen = :imagen, tipoImg = :tipoImg';
            }

            $query .= ' WHERE pkIdIdentificacion = :pkIdIdentificacion';

            $this->db->query($query);

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

            // Vincular la imagen solo si se proporciona una nueva imagen
            if (isset($datos['imagen']) && !empty($datos['imagen'])) {
                $this->db->bind(':imagen', $datos['imagen']);
                $this->db->bind(':tipoImg', $datos['tipoImg']);
            }

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
