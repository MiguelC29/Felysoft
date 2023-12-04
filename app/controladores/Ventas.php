<?php
class Ventas extends Controlador
{

    public function __construct()
    {
        $this->ventasModelo = $this->modelo('Venta');
        $this->pagosModelo = $this->modelo('Pago');
    }

    public function index()
    {
        //Obtener los ventas
        $ventas = $this->ventasModelo->obtenerVentas();

        $datos = [
            'ventas' => $ventas,
        ];

        $this->vista('paginas/ventas/inicio', $datos);
    }

//AGREGAR
    public function agregar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'fechaVenta' => trim($_POST['fechaVenta']),
                'subtotal' => trim($_POST['subtotal']),
                'total' => trim($_POST['total']),
                'fkIdPago' => trim($_POST['idPago'])
            ];

            if ($this->ventasModelo->agregarVenta($datos)) {
                redireccionar('ventas');
            } else {
                die('Algo salió mal');
            }
        } else {
            //Obtener los pagos
            $pagos = $this->pagosModelo->obtenerPagos();
            $datos = [
                'fechaVenta' => '',
                'subtotal' => '',
                'total' => '',
                'fkIdPago' => '',
                'pagos' => $pagos
            ];

            $this->vista('paginas/ventas/agregar', $datos);
        }
    }

//EDITAR
    public function editar($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'pkIdVenta' => $id,
                'fechaVenta' => trim($_POST['fechaVenta']),
                'subtotal' => trim($_POST['subtotal']),
                'total' => trim($_POST['total']),
                'fkIdPago' => trim($_POST['idPago'])
            ];

            if ($this->ventasModelo->actualizarVenta($datos)) {
                redireccionar('ventas');
            } else {
                die('Algo salió mal');
            }
        } else {

            //Obtener información de usuario desde el modelo
            $ventas = $this->ventasModelo->obtenerVentaId($id);

            // //Obtener los pagos
            $pago = $this->pagosModelo->obtenerPagoId($ventas->fkIdPago);
            $pagosExp = $this->pagosModelo->obtenerPagosExcepto($ventas->fkIdPago);

            $datos = [
                'pkIdVenta' => $ventas->pkIdVenta,
                'fechaVenta' => $ventas->fechaVenta,
                'subtotal' => $ventas->subtotal,
                'total' => $ventas->total,
                'fkIdPago' => $ventas->fkIdPago,

                'pagos' => $pagosExp,
                'pago' => $pago
            ];

            $this->vista('paginas/ventas/editar', $datos);
        }
    }



//BORRAR
    public function borrar($id)
    {

        //Obtener información de usuario desde el modelo
        $ventas = $this->ventasModelo->obtenerVentaId($id);
        // //Obtener los pagos
        $pago = $this->pagosModelo->obtenerPagoId($ventas->fkIdPago);

        $datos = [
            'pkIdVenta' => $ventas->pkIdVenta,
            'fechaVenta' => $ventas->fechaVenta,
            'subtotal' => $ventas->subtotal,
            'total' => $ventas->total,
            'fkIdPago' => $ventas->fkIdPago,

            'nomPago' => $pago->metodoPago
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'pkIdVenta' => $id
            ];

            if ($this->ventasModelo->borrarVenta($datos)) {
                redireccionar('ventas');
            } else {
                die('Algo salió mal');
            }
        }

        $this->vista('paginas/ventas/borrar', $datos);
    }
}
