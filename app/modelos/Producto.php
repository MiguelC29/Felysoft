<?php

    class Producto {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerProductos() {
            // $this->db->query('SELECT * FROM productos');
            //$this->db->query('SELECT pkIdProducto, imagen, tipoImg, productos.nombre as nombre, marca, precioVenta, fechaVencimiento, categoria.nombre as categoria, proveedores.nombre as proveedor FROM productos INNER JOIN categoria ON fkIdCategoria = pkIdCategoria INNER JOIN proveedores ON fkIdProveedor = pkIdProveedores');
            $this->db->query('call mostrar_productos');

            $resultados = $this->db->registros();

            return $resultados;
        }

        public function agregarProducto($datos) {
            //$this->db->query('INSERT INTO productos (nombre, marca, precioVenta, fechaVencimiento, fkIdCategoria, fkIdProveedor, imagen, tipoImg) VALUES (:nombre, :marca, :precioVenta, :fechaVencimiento, :fkIdCategoria, :fkIdProveedor, :imagen, :tipoImg)');
            $this->db->query('CALL agregar_productos(:nombre, :marca, :precioVenta, :fechaVencimiento, :fkIdCategoria, :fkIdProveedor, :imagen, :tipoImg)');
     
            //Vincular valores
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':marca', $datos['marca']);
            $this->db->bind(':precioVenta', $datos['precioVenta']);
            $this->db->bind(':fechaVencimiento', $datos['fechaVencimiento']);
            $this->db->bind(':fkIdCategoria', $datos['fkIdCategoria']);
            $this->db->bind(':fkIdProveedor', $datos['fkIdProveedor']);
            $this->db->bind(':imagen', $datos['imagen']);
            $this->db->bind(':tipoImg', $datos['tipoImg']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerProductoId($id) {
            //$this->db->query('SELECT * FROM productos WHERE pkIdProducto = :id');
            $this->db->query('CALL mostrar_producto_especifico (:id)');
            $this->db->bind(':id', $id);

            $fila = $this->db->registro();

            return $fila;
        }

        public function actualizarProducto($datos) {
            $query = 'UPDATE productos SET nombre = :nombre, marca = :marca, precioVenta = :precioVenta, fechaVencimiento = :fechaVencimiento, fkIdCategoria = :fkIdCategoria, fkIdProveedor = :fkIdProveedor';
        
            // Verificar si se ha proporcionado una nueva imagen
            if (isset($datos['imagen']) && !empty($datos['imagen'])) {
                $query .= ', imagen = :imagen, tipoImg = :tipoImg';
            }
        
            $query .= ' WHERE pkIdProducto = :id';
        
            $this->db->query($query);
        
            // Vincular los valores
            $this->db->bind(':id', $datos['pkIdProducto']);
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':marca', $datos['marca']);
            $this->db->bind(':precioVenta', $datos['precioVenta']);
            $this->db->bind(':fechaVencimiento', $datos['fechaVencimiento']);
            $this->db->bind(':fkIdCategoria', $datos['fkIdCategoria']);
            $this->db->bind(':fkIdProveedor', $datos['fkIdProveedor']);
        
            // Vincular la imagen solo si se proporciona una nueva imagen
            if (isset($datos['imagen']) && !empty($datos['imagen'])) {
                $this->db->bind(':imagen', $datos['imagen']);
                $this->db->bind(':tipoImg', $datos['tipoImg']);
            }
        
            // Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }        

        public function borrarProducto($datos) {
            //$this->db->query('DELETE FROM productos WHERE pkIdProducto = :id');
            $this->db->query('CALL borrar_productos (:id)');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdProducto']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function obtenerCantidadProductos() {
            $this->db->query('SELECT COUNT(*) as cantidad FROM productos');
            $resultado = $this->db->registro();
            return $resultado->cantidad;
        }
    }
?>