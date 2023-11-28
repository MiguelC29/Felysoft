<?php
class Gastos extends Controlador
{

    public function __construct()
    {
        $this->gastosModelo = $this->modelo('Gasto');
        $this->comprasModelo = $this->modelo('Compra');
        $this->pagosModelo = $this->modelo('Pago');
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $busqueda = trim($_POST['buscar']);

            if (empty($busqueda)) {
                echo "<script language='JavaScript'>
                            alert('Ingrese el nombre del producto a buscar');
                            location.assign('productos');
                        </script>";
            } else {
                $gastosBusqueda = $this->gastosModelo->busquedaGastos($busqueda);

                $datos = [
                    'gastos' => $gastosBusqueda,
                ];
            }
        } else {
            //Obtener los productos
            $gastos = $this->gastosModelo->obtenerGastos();

            $datos = [
                'gastos' => $gastos,
            ];
        }
        $this->vista('paginas/gastos/inicio', $datos);
    }

    public function agregar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'fecha' => trim($_POST['fecha']),
                'monto' => trim($_POST['monto']),
                'descripcion' => trim($_POST['descripcion']),
                'fkIdCompra' => trim($_POST['idCompra']),
                'fkIdPago' => trim($_POST['idPago'])
            ];


            if ($this->gastosModelo->agregarGasto($datos)) {
                redireccionar('gastos');
            } else {
                die('Algo salió mal');
            }
        } else {
            //Obtener las compras
            $compras = $this->comprasModelo->obtenerCompras();
            //Obtener los pagos
            $pagos = $this->pagosModelo->obtenerPagos();
            $datos = [
                'fecha' => '',
                'monto' => '',
                'descripcion' => '',
                'fkIdCompra' => '',
                'fkIdPago' => '',
                'compras' => $compras,
                'pagos' => $pagos
            ];

            $this->vista('paginas/gastos/agregar', $datos);
        }
    }

    public function editar($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'pkIdGasto' => $id,
                'fecha' => trim($_POST['fecha']),
                'monto' => trim($_POST['monto']),
                'descripcion' => trim($_POST['descripcion']),
                'fkIdCompra' => trim($_POST['idCompra']),
                'fkIdPago' => trim($_POST['idPago'])
            ];

            if ($this->gastosModelo->actualizarGasto($datos)) {
                redireccionar('gastos');
            } else {
                die('Algo salió mal');
            }
        } else {

            //Obtener información de usuario desde el modelo
            $gastos = $this->gastosModelo->obtenerGastoId($id);

            //Obtener las compras
            $compra = $this->comprasModelo->obtenerCompraId($gastos->fkIdCompra);
            $comprasExp = $this->comprasModelo->obtenerComprasExcepto($gastos->fkIdCompra);
            // //Obtener los pagos
            $pago = $this->pagosModelo->obtenerPagoId($gastos->fkIdPago);
            $pagosExp = $this->pagosModelo->obtenerPagosExcepto($gastos->fkIdPago);

            $datos = [
                'pkIdGasto' => $gastos->pkIdGasto,
                'fecha' => $gastos->fecha,
                'monto' => $gastos->monto,
                'descripcion' => $gastos->descripcion,
                'fkIdCompra' => $gastos->fkIdCompra,
                'fkIdPago' => $gastos->fkIdPago,

                'compras' => $comprasExp,
                'pagos' => $pagosExp,
                'compra' => $compra,
                'pago' => $pago
            ];

            $this->vista('paginas/gastos/editar', $datos);
        }
    }

    public function borrar($id) {

        //Obtener información de usuario desde el modelo
        $gastos = $this->gastosModelo->obtenerGastoId($id);
        //Obtener las categorias
        $Compra = $this->comprasModelo->obtenerCompraId($gastos->fkIdCompra);
        // //Obtener los proveedores
        $Pago = $this->pagosModelo->obtenerPagoId($gastos->fkIdPago);

        $datos = [
            'pkIdGasto' => $gastos->pkIdGasto,
            'fecha' => $gastos->fecha,
            'monto' => $gastos->monto,
            'descripcion' => $gastos->descripcion,
            'fkIdCompra' => $gastos->fkIdCompra,
            'fkIdPago' => $gastos->fkIdPago,

            'nomCompra' => $compra->nombre,
            'nomPago' => $pago->nombre
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'pkIdGasto' => $id
            ];

            if ($this->gastosModelo->borrarGasto($datos)) {
                redireccionar('gastos');
            } else {
                die('Algo salió mal');
            }
        }

        $this->vista('paginas/gastos/borrar', $datos);
    }
}