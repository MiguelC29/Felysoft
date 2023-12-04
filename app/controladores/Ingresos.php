<?php
class Ingresos extends Controlador
{

    public function __construct()
    {
        $this->ingresosModelo = $this->modelo('Ingreso');
        $this->ventasModelo = $this->modelo('Venta'); //TENER EN CUENTA SI SE DEBE CREAR TODO RESPECTO A VENTAS.
    }

    public function index()
    {
        //Obtener los ingresos
        $ingresos = $this->ingresosModelo->obtenerIngresos();

        $datos = [
            'ingresos' => $ingresos,
        ];

        $this->vista('paginas/ingresos/inicio', $datos);
    }

    //AGREGAR
    public function agregar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'fecha' => trim($_POST['fecha']),
                'monto' => trim($_POST['monto']),
                'fkIdVenta' => trim($_POST['idVenta'])
            ];

            if ($this->ingresosModelo->agregarIngreso($datos)) {
                redireccionar('ingresos');
            } else {
                die('Algo salió mal');
            }
        } else {
            //Obtener las ventas
            $ventas = $this->ventasModelo->obtenerVentas();
            $datos = [
                'fecha' => '',
                'monto' => '',
                'fkIdVenta' => '',
                'ventas' => $ventas
            ];

            $this->vista('paginas/ingresos/agregar', $datos);
        }
    }

    //EDITAR
    public function editar($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'pkIdIngreso' => $id,
                'fecha' => trim($_POST['fecha']),
                'monto' => trim($_POST['monto']),
                'fkIdVenta' => trim($_POST['idVenta'])
            ];

            if ($this->ingresosModelo->actualizarIngreso($datos)) {
                redireccionar('ingresos');
            } else {
                die('Algo salió mal');
            }
        } else {

            //Obtener información de usuario desde el modelo
            $ingresos = $this->ingresosModelo->obtenerIngresoId($id);

            //Obtener las ventas
            $venta = $this->ventasModelo->obtenerVentaId($ingresos->fkIdVenta);
            $ventasExp = $this->ventasModelo->obtenerVentasExcepto($ingresos->fkIdVenta);

            $datos = [
                'pkIdIngreso' => $ingresos->pkIdIngreso,
                'fecha' => $ingresos->fecha,
                'monto' => $ingresos->monto,
                'fkIdVenta' => $ingresos->fkIdVenta,

                'ventas' => $ventasExp,
                'venta' => $venta,
            ];

            $this->vista('paginas/ingresos/editar', $datos);
        }
    }



    //BORRAR
    public function borrar($id)
    {

        //Obtener información de usuario desde el modelo
        $ingresos = $this->ingresosModelo->obtenerIngresoId($id);
        //Obtener las categorias
        $venta = $this->ventasModelo->obtenerVentaId($ingresos->fkIdVenta);

        $datos = [
            'pkIdIngreso' => $ingresos->pkIdIngreso,
            'fecha' => $ingresos->fecha,
            'monto' => $ingresos->monto,
            'fkIdVenta' => $ingresos->fkIdVenta,

            'nomVenta' => $venta->subtotal
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'pkIdIngreso' => $id
            ];

            if ($this->ingresosModelo->borrarIngreso($datos)) {
                redireccionar('ingresos');
            } else {
                die('Algo salió mal');
            }
        }

        $this->vista('paginas/ingresos/borrar', $datos);
    }
}