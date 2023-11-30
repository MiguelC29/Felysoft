<?php
    class Servicios extends Controlador {

        public function __construct() {
            $this->tiposervicioModelo = $this->modelo('Tiposervicio');
            $this->servicioModelo = $this->modelo('Servicio');
        }

        public function index() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $busqueda = trim($_POST['buscar']);

                if (empty($busqueda)) {
                    echo "<script language='JavaScript'>
                            alert('Ingrese el nombre del producto a buscar');
                            location.assign('productos');
                        </script>";
                } else {
                    $serviciosBusqueda = $this->servicioModelo->busquedaServicios($busqueda);

                    $datos = [
                        'servicios' => $serviciosBusqueda,
                    ];
                }
            } else {
                $servicios = $this->servicioModelo->obtenerServicio();
                
                $datos = [
                    'servicios' => $servicios,
                ];
            }
            $this->vista('paginas/servicios/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //aqui obtenengo la fecha y hora actuales en el formato "Y-m-d H:i:s"
                $fechaActual = (new DateTime())->format('Y-m-d H:i:s');
        
                $datos = [
                    'estado' => trim($_POST['estado']),
                    'fechaCreacion' => $fechaActual,
                    'fechaModificacion' => $fechaActual,
                    'precioAdicional' => trim($_POST['precioAdicional']),
                    'total' => trim($_POST['total']),
                    'fkIdTipoSer' => trim($_POST['idTipoServicio'])
                ];
        
                if ($this->servicioModelo->agregarServicio($datos)) {
                    redireccionar('servicios');
                } else {
                    die('Algo salió mal');
                }

            } else {
                $tiposervicios = $this->tiposervicioModelo->obtenerTiposervicio();
        
                $datos = [
                    'estado' => '',
                    'fechaCreacion' => '',
                    'fechaModificacion' => '',
                    'precioAdicional' => '',
                    'total' => '',
                    'fkIdTipoSer' => '',
                    'tiposervicios' => $tiposervicios
                ];
        
                $this->vista('paginas/servicios/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'id' => $id,
                    'estado' => $_POST['estado'],
                ];
        
                //aqui actualizo la fecha de modificacion antes de editar el servicio
                $datos['fechaModificacion'] = date('Y-m-d H:i:s');
        
                if ($this->servicioModelo->editarServicio($datos)) {
                    redireccionar('servicios');
                } else {
                    die('Algo salió mal');
                }
            } else {
                $servicio = $this->servicioModelo->obtenerIdServicio($id);
        
                $datos = [
                    'pkIdServicio' => $servicio->pkIdServicio,
                    'estado' => $servicio->estado,
                    'fechaModificacion' => $servicio->fechaModificacion,
                ];
        
                $this->vista('paginas/servicios/editar', $datos);
            }
        }

        public function borrar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($this->servicioModelo->borrarServicio($id)) {
                    redireccionar('servicios');
                } else {
                    die('Algo salió mal');
                }
            } else {
                $servicio = $this->servicioModelo->obtenerIdServicio($id);

                $datos = [
                    'pkIdServicio' => $servicio->pkIdServicio,
                    'estado' => $servicio->estado,
                    'fechaModificacion' => $servicio->fechaModificacion
                ];

                $this->vista('paginas/servicios/borrar', $datos);
            }
        }
    }

?>