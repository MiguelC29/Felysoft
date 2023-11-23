<?php
    class Categorias extends Controlador {

        public function __construct() {
            $this->categoriasModelo = $this->modelo('Categoria');
        }

        public function index() {

            //Obtener las categorias
            $categorias = $this->categoriasModelo->obtenerCategorias();

            $datos = [
                'categorias' => $categorias
            ];

            $this->vista('paginas/categorias/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'nombre' => trim($_POST['nombre'])
                ];

                if ($this->categoriasModelo->agregarCategoria($datos)) {
                    redireccionar('categorias');
                } else {
                    die('Algo salió mal');
                }

            } else {
                $datos = [
                    'nombre' => ''
                ];

                $this->vista('paginas/categorias/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdCategoria' => $id,
                    'nombre' => trim($_POST['nombre'])
                ];

                if ($this->categoriasModelo->actualizarCategoria($datos)) {
                    redireccionar('categorias');
                } else {
                    die('Algo salió mal');
                }

            } else {

                //Obtener información de usuario desde el modelo
                $categoria = $this->categoriasModelo->obtenerCategoriaId($id);

                $datos = [
                    'pkIdCategoria' => $categoria->pkIdCategoria,
                    'nombre' => $categoria->nombre
                ];

                $this->vista('paginas/categorias/editar', $datos);
            }
        }

        public function borrar($id) {

            //Obtener información de usuario desde el modelo
            $categoria = $this->categoriasModelo->obtenerCategoriaId($id);

            $datos = [
                'pkIdCategoria' => $categoria->pkIdCategoria,
                'nombre' => $categoria->nombre
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdCategoria' => $id
                ];

                if ($this->categoriasModelo->borrarCategoria($datos)) {
                    redireccionar('categorias');
                } else {
                    die('Algo salió mal');
                }

            }

            $this->vista('paginas/categorias/borrar', $datos);
        }
    }
?>