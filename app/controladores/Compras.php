<?php
    class Compras extends Controlador {

        public function __construct() {
            $this->comprasModelo = $this->modelo('Compra');
        }

        public function index() {

            //Obtener las categorias
            $compras = $this->comprasModelo->obtenerCompras();

            $datos = [
                'compras' => $compras
            ];

            $this->vista('paginas/compras/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'fechaCompra' => trim($_POST['fechaCompra']),
                    'total' => trim($_POST['total'])
                ];

                if ($this->comprasModelo->agregarCompra($datos)) {
                    redireccionar('compras');
                } else {
                    die('Algo salió mal');
                }

            } else {
                $datos = [
                    'fechaCompra' => '',
                    'total' => ''
                ];

                $this->vista('paginas/compras/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdCompra' => $id,
                    'fechaCompra' => trim($_POST['fechaCompra']),
                    'total' => trim($_POST['total'])
                ];

                if ($this->comprasModelo->actualizarCompra($datos)) {
                    redireccionar('compras');
                } else {
                    die('Algo salió mal');
                }

            } else {

                //Obtener información de usuario desde el modelo
                $compra = $this->comprasModelo->obtenerCompraId($id);

                $datos = [
                    'pkIdCompra' => $compra->pkIdCompra,
                    'fechaCompra' => $compra->fechaCompra,
                    'total' => $compra->total
                ];

                $this->vista('paginas/compras/editar', $datos);
            }
        }

        public function borrar($id) {

            //Obtener información de usuario desde el modelo
            $compra = $this->comprasModelo->obtenerCompraId($id);

            $datos = [
                'pkIdCompra' => $compra->pkIdCompra,
                'fechaCompra' => $compra->fechaCompra,
                'total' => $compra->total
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdCompra' => $id
                ];

                if ($this->comprasModelo->borrarCompra($datos)) {
                    redireccionar('compras');
                } else {
                    die('Algo salió mal');
                }

            }

            $this->vista('paginas/compras/borrar', $datos);
        }
    }
?>