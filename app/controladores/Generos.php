<?php
    class Generos extends Controlador {

        public function __construct() {
            $this->generosModelo = $this->modelo('Genero');
        }

        public function index() {

            //Obtener los generos
            $generos = $this->generosModelo->obtenerGeneros();

            $datos = [
                'generos' => $generos
            ];

            $this->vista('paginas/generos/inicioG', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'nombre' => trim($_POST['nombre']),
                    'descripcion' => trim($_POST['descripcion'])
                ];

                if ($this->generosModelo->agregarGenero($datos)) {
                    redireccionar('generos');
                } else {
                    die('Algo salió mal');
                }

            } else {
                $datos = [
                    'nombre' => '',
                    'descripcion' => '',
                ];

                $this->vista('paginas/generos/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdGenero' => $id,
                    'nombre' => trim($_POST['nombre']),
                    'descripcion' => trim($_POST['descripcion'])
                ];

                if ($this->generosModelo->actualizarGenero($datos)) {
                    redireccionar('generos');
                } else {
                    die('Algo salió mal');
                }

            } else {

                //Obtener información de usuario desde el modelo
                $generos = $this->generosModelo->obtenerGeneroId($id);

                $datos = [
                    'pkIdGenero' => $generos->pkIdGenero,
                    'nombre' => $generos->nombre,
                    'descripcion' => $generos->descripcion
                ];

                $this->vista('paginas/generos/editar', $datos);
            }
        }

        public function borrar($id) {

            //Obtener información de usuario desde el modelo
            $genero = $this->generosModelo->obtenerGeneroId($id);

            $datos = [
                'pkIdGenero' => $genero->pkIdGenero,
                'nombre' => $genero->nombre,
                'descripcion' => $genero->descripcion
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdGenero' => $id
                ];

                if ($this->generosModelo->borrarGenero($datos)) {
                    redireccionar('generos');
                } else {
                    die('Algo salió mal');
                }

            }

            $this->vista('paginas/generos/borrar', $datos);
        }
    }
?>