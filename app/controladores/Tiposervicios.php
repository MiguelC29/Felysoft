<?php
    class Tiposervicios extends Controlador {

        public function __construct() {
            $this->tiposervicioModelo = $this->modelo('Tiposervicio');
        }

        public function index() {
            $tiposervicios = $this->tiposervicioModelo->obtenerTiposervicio();
            $datos = ['tiposervicios' => $tiposervicios];
            $this->vista('paginas/tiposervicios/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'nombre' => trim($_POST['nombre']),
                    'descripcion' => trim($_POST['descripcion']),
                    'precio' => trim($_POST['precio'])
                ];

                if ($this->tiposervicioModelo->agregarTiposervicio($datos)) {
                    redireccionar('tiposervicios');
                } else {
                    die('Algo salió mal');
                }

            } else {
                $datos = [
                    'nombre' => '',
                    'descripcion' => '',
                    'precio' => ''
                ];

                $this->vista('paginas/tiposervicios/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'idTipoServicio' => $id,
                    'nombre' => trim($_POST['nombre']),
                    'descripcion' => trim($_POST['descripcion']),
                    'precio' => trim($_POST['precio'])
                ];

                if ($this->tiposervicioModelo->actualizarTiposervicio($datos)) {
                    redireccionar('tiposervicios');
                } else {
                    die('Algo salió mal');
                }

            } else {

                //Obtener información de usuario desde el modelo
                $tiposervicio = $this->tiposervicioModelo->obtenerIdTipoServicio($id);

                $datos = [
                    'idTipoServicio' => $tiposervicio->idTipoServicio,
                    'nombre' => $tiposervicio->nombre,
                    'descripcion' => $tiposervicio->descripcion,
                    'precio' => $tiposervicio->precio
                ];

                $this->vista('paginas/tiposervicios/editar', $datos);
            }
        }

        public function borrar($id) {

            //Obtener información de usuario desde el modelo
            $tiposervicio = $this->tiposervicioModelo->obtenerIdTipoServicio($id);

            $datos = [
                'idTipoServicio' => $tiposervicio->idTipoServicio,
                'nombre' => $tiposervicio->nombre,
                'descripcion' => $tiposervicio->descripcion,
                'precio' => $tiposervicio->precio
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'idTipoServicio' => $id
                ];

                if ($this->tiposervicioModelo->borrarTiposervicio($datos)) {
                    redireccionar('tiposervicios');
                } else {
                    die('Algo salió mal');
                }

            }

            $this->vista('paginas/tiposervicios/borrar', $datos);
        }

    }
