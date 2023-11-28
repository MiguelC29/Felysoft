<?php
    class Pagos extends Controlador {

        public function __construct() {
            $this->pagosModelo = $this->modelo('Pago');
        }

        public function index() {

            //Obtener las categorias
            $pagos = $this->pagosModelo->obtenerPagos();

            $datos = [
                'pagos' => $pagos
            ];

            $this->vista('paginas/pagos/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'metodoPago' => trim($_POST['metodoPago']),
                    'estado' => trim($_POST['estado']),
                    'fechaPago' => trim($_POST['fechaPago']),
                    'valorPago' => trim($_POST['valorPago'])
                ];

                if ($this->pagosModelo->agregarPago($datos)) {
                    redireccionar('pagos');
                } else {
                    die('Algo salió mal');
                }

            } else {
                $datos = [
                    'metodoPago' => '',
                    'estado' => '',
                    'fechaPago' => '',
                    'valorPago' => ''
                ];

                $this->vista('paginas/pagos/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdPago' => $id,
                    'metodoPago' => trim($_POST['metodoPago']),
                    'estado' => trim($_POST['estado']),
                    'fechaPago' => trim($_POST['fechaPago']),
                    'valorPago' => trim($_POST['valorPago'])
                ];

                if ($this->pagosModelo->actualizarPago($datos)) {
                    redireccionar('pagos');
                } else {
                    die('Algo salió mal');
                }

            } else {

                //Obtener información de usuario desde el modelo
                $pago = $this->pagosModelo->obtenerPagoId($id);

                $datos = [
                    'pkIdPago' => $pago->pkIdPago,
                    'metodoPago' => $pago->metodoPago,
                    'estado' => $pago->estado,
                    'fechaPago' => $pago->fechaPago,
                    'valorPago' => $pago->valorPago
                ];

                $this->vista('paginas/pagos/editar', $datos);
            }
        }

        public function borrar($id) {

            //Obtener información de usuario desde el modelo
            $pago = $this->pagosModelo->obtenerPagoId($id);

            $datos = [
                'pkIdPago' => $pago->pkIdPago,
                'metodoPago' => $pago->metodoPago,
                'estado' => $pago->estado,
                'fechaPago' => $pago->fechaPago,
                'valorPago' => $pago->valorPago
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdPago' => $id
                ];

                if ($this->pagosModelo->borrarPago($datos)) {
                    redireccionar('pagos');
                } else {
                    die('Algo salió mal');
                }

            }

            $this->vista('paginas/pagos/borrar', $datos);
        }
    }
?>