<?php
    class Roles extends Controlador {

        public function __construct() {
            $this->rolesModelo = $this->modelo('Rol');
        }

        public function index() {

            //Obtener las roles
            $roles = $this->rolesModelo->obtenerRoles();

            $datos = [
                'roles' => $roles
            ];

            $this->vista('paginas/roles/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'nombre' => trim($_POST['nombre'])
                ];

                if ($this->rolesModelo->agregarRol($datos)) {
                    redireccionar('roles');
                } else {
                    die('Algo salió mal');
                }

            } else {
                $datos = [
                    'nombre' => ''
                ];

                $this->vista('paginas/roles/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdRol' => $id,
                    'nombre' => trim($_POST['nombre'])
                ];

                if ($this->rolesModelo->actualizarRol($datos)) {
                    redireccionar('roles');
                } else {
                    die('Algo salió mal');
                }

            } else {

                //Obtener información de usuario desde el modelo
                $rol = $this->rolesModelo->obtenerRolId($id);

                $datos = [
                    'pkIdRol' => $rol->pkIdRol,
                    'nombre' => $rol->nombre
                ];

                $this->vista('paginas/roles/editar', $datos);
            }
        }

        public function borrar($id) {

            //Obtener información de usuario desde el modelo
            $rol = $this->rolesModelo->obtenerRolId($id);

            $datos = [
                'pkIdRol' => $rol->pkIdRol,
                'nombre' => $rol->nombre
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdRol' => $id
                ];

                if ($this->rolesModelo->borrarRol($datos)) {
                    redireccionar('roles');
                } else {
                    die('Algo salió mal');
                }

            }

            $this->vista('paginas/roles/borrar', $datos);
        }
    }
?>