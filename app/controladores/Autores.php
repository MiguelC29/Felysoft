<?php
    class Autores extends Controlador {

        public function __construct() {
            $this->autoresModelo = $this->modelo('Autor');
        }

        public function index() {

            //Obtener los autores
            $autores = $this->autoresModelo->obtenerAutores();

            $datos = [
                'autores' => $autores
            ];

            $this->vista('paginas/autores/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'nombre' => trim($_POST['nombre']),
                    'nacionalidad' => trim($_POST['nacionalidad']),
                    'fechaNacim' => trim($_POST['fechaNacim']),
                    'biografia' => trim($_POST['biografia'])
                ];

                if ($this->autoresModelo->agregarAutor($datos)) {
                    redireccionar('autores');
                } else {
                    die('Algo salió mal');
                }

            } else {
                $datos = [
                    'nombre' => '',
                    'nacionalidad' => '',
                    'fechaNacim' => '',
                    'biografia' => '',
                ];

                $this->vista('paginas/autores/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdAutor' => $id,
                    'nombre' => trim($_POST['nombre']),
                    'nacionalidad' => trim($_POST['nacionalidad']),
                    'fechaNacim' => trim($_POST['fechaNacim']),
                    'biografia' => trim($_POST['biografia'])
                ];

                if ($this->autoresModelo->actualizarAutor($datos)) {
                    redireccionar('autores');
                } else {
                    die('Algo salió mal');
                }

            } else {

                //Obtener información de usuario desde el modelo
                $autores = $this->autoresModelo->obtenerAutorId($id);

                $datos = [
                    'pkIdAutor' => $autores->pkIdAutor,
                    'nombre' => $autores->nombre,
                    'nacionalidad' => $autores->nacionalidad,
                    'fechaNacim' => $autores->fechaNacim,
                    'biografia' => $autores->biografia

                ];

                $this->vista('paginas/autores/editar', $datos);
            }
        }

        public function borrar($id) {

            //Obtener información de usuario desde el modelo
            $autor = $this->autoresModelo->obtenerAutorId($id);

            $datos = [
                'pkIdAutor' => $autor->pkIdAutor,
                'nombre' => $autor->nombre,
                'nacionalidad' => $autor->nacionalidad,
                'fechaNacim' => $autor->fechaNacim,
                'biografia' => $autor->biografia
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdAutor' => $id
                ];

                if ($this->autoresModelo->borrarAutor($datos)) {
                    redireccionar('autores');
                } else {
                    die('Algo salió mal');
                }

            }

            $this->vista('paginas/autores/borrar', $datos);
        }
    }
?>