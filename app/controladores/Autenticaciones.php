<?php

class Autenticaciones extends Controlador {

    public function __construct() {
        $this->autenticacionModelo = $this->modelo('Autenticacion');
    }

    public function index() {
        $this->vista('paginas/autenticaciones/login');
    }

    public function iniciarSesion() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
    
            // Llamada al método obtenerUsuarioPorCredenciales()
            $usuario = $autenticacion->obtenerUsuarioPorCredenciales($usuario, $contrasena);
    
            if ($usuario) {
                // Iniciar sesión
                $_SESSION['usuario_id'] = $usuario->pkIdIdentificacion;
                $_SESSION['usuario_nombre'] = $usuario->usuario;
                
                // Redireccionar al panel de control u otra página después del inicio de sesión
                redireccionar('paginas/inicio');
                exit();
            } else {
                echo "<script>alert('Usuario no encontrado');</script>";
                redireccionar('paginas/autenticaciones/login');
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
        redireccionar('paginas/autenticaciones/login');
    }

    // Otras funciones necesarias para la autenticación
}
?>
