<?php

    class Autenticaciones extends Controlador {

        public function __construct() {
            $this->autenticacionModelo = $this->modelo('Autenticacion');
            $this->usuariosModelo = $this->modelo('Usuario');
            $this->rolesModelo = $this->modelo('Rol');
        }

        public function index() {
            $this->vista('paginas/autenticaciones/login');
        }

        public function registro() {
            $roles = $this->rolesModelo->obtenerRoles();

            $datos = [
                'roles' => $roles
            ];

            $this->vista('paginas/autenticaciones/registro', $datos);
        }

        public function iniciarSesion() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];

                // Llamada al método obtenerUsuarioPorCredenciales()
                $usuario = $this->autenticacionModelo->obtenerUsuarioPorCredenciales($usuario, $contrasena);

                if ($usuario) {
                    // Iniciar sesión
                    $_SESSION['usuario_id'] = $usuario->pkIdIdentificacion;
                    $_SESSION['usuario_nombre'] = $usuario->usuario;
                    
                    // Redireccionar al panel de control u otra página después del inicio de sesión
                    redireccionar('paginas');
                    exit();
                } else {
                    echo "<script>alert('Usuario no encontrado');</script>";
                    redireccionar('autenticaciones/login');
                }
            } else {
                // Si no es una solicitud POST, manejar de acuerdo a tus necesidades
                //redireccionar('paginas/autenticaciones/login');
            }
        }

        public function cerrarSesion() {
            // Destruir la sesión y redirigir al inicio
            session_start();
            session_unset();
            session_destroy();
            redireccionar('autenticaciones/login');
        }

        public function registrarUsuario() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdIdentificacion' => trim($_POST['pkIdIdentificacion']),
                    'tipoDocu' => trim($_POST['tipoDocu']),
                    'nombres' => trim($_POST['nombres']),
                    'apellidos' => trim($_POST['apellidos']),
                    'direccion' => trim($_POST['direccion']),
                    'telefono' => trim($_POST['telefono']),
                    'email' => trim($_POST['email']),
                    'genero' => trim($_POST['genero']),
                    'usuario' => trim($_POST['usuario']),
                    'contrasena' => trim($_POST['contrasena']),
                    'confirmar_contrasena' => trim($_POST['confirmar-contrasena']),
                    'fkIdRol' => trim($_POST['fkIdRol'])
                ];

                if ($datos['contrasena'] !== $datos['confirmar_contrasena']) {
                    echo "<script>alert('Verifica que las contraseñas sean iguales.');</script>";
                    redireccionar('autenticaciones/registro');
                }

                if ($this->usuariosModelo->agregarUsuario($datos)) {
                    redireccionar('autenticaciones/login');
                } else {
                    echo "<script>alert('Error al registrar usuario');</script>";
                    redireccionar('autenticaciones/registro');
                }
            } else {
        
            }
        }
    }
?>