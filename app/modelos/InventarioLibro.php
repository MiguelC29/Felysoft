<?php

    class InventarioLibro {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerInventarioLibros() {
            $this->db->query('SELECT pkIdLibro, titulo, editorial, precioHora, autores.nombre as autor, genero.nombre as genero, stock FROM inventario INNER JOIN libros ON fkIdLibro = pkIdLibro INNER JOIN autores ON fkIdAutor = pkIdAutor INNER JOIN genero ON fkIdGenero = pkIdGenero WHERE tipoInventario="Libro Digital"');

            $resultados = $this->db->registros();

            return $resultados;
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