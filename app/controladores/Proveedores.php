<?php
    class Proveedores extends Controlador {

        public function __construct() {
            $this->proveedoresModelo = $this->modelo('Proveedor');
        }

        public function index() {

            //Obtener los proveedores
            $proveedores = $this->proveedoresModelo->obtenerProveedores();

            $datos = [
                'proveedores' => $proveedores
            ];

            $this->vista('paginas/proveedores/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'nit' => trim($_POST['nit']),
                    'nombre' => trim($_POST['nombre']),
                    'telefono' => trim($_POST['telefono']),
                    'email' => trim($_POST['email'])
                ];

                if ($this->proveedoresModelo->agregarProveedor($datos)) {
                    redireccionar('proveedores');
                } else {
                    die('Algo salió mal');
                }

            } else {
                $datos = [
                    'nit' => '',
                    'nombre' => '',
                    'telefono' => '',
                    'email' => ''
                ];

                $this->vista('paginas/proveedores/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdProveedores' => $id,
                    'nit' => trim($_POST['nit']),
                    'nombre' => trim($_POST['nombre']),
                    'telefono' => trim($_POST['telefono']),
                    'email' => trim($_POST['email'])
                ];

                if ($this->proveedoresModelo->actualizarProveedor($datos)) {
                    redireccionar('proveedores');
                } else {
                    die('Algo salió mal');
                }

            } else {

                //Obtener información de usuario desde el modelo
                $proveedor = $this->proveedoresModelo->obtenerProveedorId($id);

                $datos = [
                    'pkIdProveedores' => $proveedor->pkIdProveedores,
                    'nit' => $proveedor->nit,
                    'nombre' => $proveedor->nombre,
                    'telefono' => $proveedor->telefono,
                    'email' => $proveedor->email
                ];

                $this->vista('paginas/proveedores/editar', $datos);
            }
        }

        public function borrar($id) {

            //Obtener información de usuario desde el modelo
            $proveedor = $this->proveedoresModelo->obtenerProveedorId($id);

            $datos = [
                'pkIdProveedores' => $proveedor->pkIdProveedores,
                'nit' => $proveedor->nit,
                'nombre' => $proveedor->nombre,
                'telefono' => $proveedor->telefono,
                'email' => $proveedor->email
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdProveedores' => $id
                ];

                if ($this->proveedoresModelo->borrarProveedor($datos)) {
                    redireccionar('proveedores');
                } else {
                    die('Algo salió mal');
                }

            }

            $this->vista('paginas/proveedores/borrar', $datos);
        }
    }
?>