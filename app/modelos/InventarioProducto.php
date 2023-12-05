<?php

    class InventarioProducto {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerInventarioProductos() {
            $this->db->query('SELECT pkIdProducto, imagen, tipoImg, nombre, marca, precioVenta, fechaVencimiento, stock FROM inventario INNER JOIN productos ON fkIdProducto = pkIdProducto WHERE tipoInventario="Producto"');

            $resultados = $this->db->registros();

            return $resultados;
        } 
        
        public function actualizarStock($datos) {
            // Obtener el stock actual
            $this->db->query('SELECT stock FROM inventario WHERE fkIdProducto = :id');
            $this->db->bind(':id', $datos['pkIdProducto']);
            $stockActual = $this->db->registro();
        
            // Verificar si se encontró un registro
            if ($stockActual) {
                // Obtener el valor numérico del stock actual
                $valorStockActual = $stockActual->stock;
        
                // Sumar el stock entrante al stock actual
                $nuevoStock = $valorStockActual + $datos['stockEntrante'];
        
                // Actualizar el stock en la base de datos
                $this->db->query('UPDATE inventario SET stock = :nuevoStock WHERE fkIdProducto = :id');
                $this->db->bind(':id', $datos['pkIdProducto']);
                $this->db->bind(':nuevoStock', $nuevoStock);
        
                // Ejecutar la actualización
                if ($this->db->execute()) {
                    return true;
                } else {
                    return false;
                }
            } else {
                // Manejar el caso en el que no se encuentra el registro
                return false;
            }
        }        

        // public function agregarProducto($datos) {
        //     $this->db->query('INSERT INTO productos (nombre, marca, precioVenta, fechaVencimiento, fkIdCategoria, fkIdProveedor, imagen, tipoImg) VALUES (:nombre, :marca, :precioVenta, :fechaVencimiento, :fkIdCategoria, :fkIdProveedor, :imagen, :tipoImg)');

        //     //Vincular valores
        //     $this->db->bind(':nombre', $datos['nombre']);
        //     $this->db->bind(':marca', $datos['marca']);
        //     $this->db->bind(':precioVenta', $datos['precioVenta']);
        //     $this->db->bind(':fechaVencimiento', $datos['fechaVencimiento']);
        //     $this->db->bind(':fkIdCategoria', $datos['fkIdCategoria']);
        //     $this->db->bind(':fkIdProveedor', $datos['fkIdProveedor']);
        //     $this->db->bind(':imagen', $datos['imagen']);
        //     $this->db->bind(':tipoImg', $datos['tipoImg']);

        //     //Ejecutar
        //     if ($this->db->execute()) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

        // public function obtenerProductoId($id) {
        //     $this->db->query('SELECT * FROM productos WHERE pkIdProducto = :id');
        //     $this->db->bind(':id', $id);

        //     $fila = $this->db->registro();

        //     return $fila;
        // }

        // public function actualizarProducto($datos) {
        //     $this->db->query('UPDATE productos SET nombre = :nombre, marca = :marca, precioVenta = :precioVenta, fechaVencimiento = :fechaVencimiento, fkIdCategoria = :fkIdCategoria, fkIdProveedor = :fkIdProveedor, imagen = :imagen, tipoImg = :tipoImg WHERE pkIdProducto = :id');

        //     //Vincular los valores
        //     $this->db->bind(':id', $datos['pkIdProducto']);
        //     $this->db->bind(':nombre', $datos['nombre']);
        //     $this->db->bind(':marca', $datos['marca']);
        //     $this->db->bind(':precioVenta', $datos['precioVenta']);
        //     $this->db->bind(':fechaVencimiento', $datos['fechaVencimiento']);
        //     $this->db->bind(':fkIdCategoria', $datos['fkIdCategoria']);
        //     $this->db->bind(':fkIdProveedor', $datos['fkIdProveedor']);
        //     $this->db->bind(':imagen', $datos['imagen']);
        //     $this->db->bind(':tipoImg', $datos['tipoImg']);

        //     //Ejecutar
        //     if ($this->db->execute()) {
        //         return true;
        //     } else {
        //         return false;
        //     }            
        // }

        // public function borrarProducto($datos) {
        //     $this->db->query('DELETE FROM productos WHERE pkIdProducto = :id');

        //     //Vincular los valores
        //     $this->db->bind(':id', $datos['pkIdProducto']);

        //     //Ejecutar
        //     if ($this->db->execute()) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

        // public function obtenerCantidadProductos() {
        //     $this->db->query('SELECT COUNT(*) as cantidad FROM productos');
        //     $resultado = $this->db->registro();
        //     return $resultado->cantidad;
        // }
    }
?>