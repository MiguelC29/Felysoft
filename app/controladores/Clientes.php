<?php
    class Clientes extends Controlador {

        public function __construct() {
            $this->clientesModelo = $this->modelo('Cliente');
            $this->usuariosModelo = $this->modelo('Usuario');
        }
        public function index() {
            //Obtener los Clientes
            $clientes = $this->clientesModelo->obtenerClientes();
            
            $datos = [
                'cliente' => $clientes,
            ];
            $this->vista('paginas/clientes/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $datos = [
                        'fechaRegistro' => trim($_POST['fechaRegistro']),
                        'fkIdIdentificacion' => trim($_POST['fkIdIdentificacion']),
                    ];

                if ($this->clientesModelo->agregarCliente($datos)) {
                    redireccionar('clientes');
                } else {
                    die('Algo salió mal');
                }
             }else {
                //Obtener la identificacion 
                $usuarios = $this->usuariosModelo->obtenerUsuarios();
                $datos = [
                    'fechaIdCliente' => '',
                    'fkIdIdentificacion' => '',
                    'usuarios' => $usuarios
                ];

                $this->vista('paginas/clientes/agregar', $datos);
            }
        }
    }
?>