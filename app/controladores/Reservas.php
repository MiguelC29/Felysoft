<?php
    class Reservas extends Controlador {

        public function __construct() {
            $this->reservasModelo = $this->modelo('Reserva');
            $this->librosModelo = $this->modelo('Libro');
            $this->clientesModelo = $this->modelo('Cliente');
            
        }
        public function index() {
            //Obtener las Reservas
            $reservas = $this->reservasModelo->obtenerReservas();
            
            $datos = [
                'reservas' => $reservas,
            ];
            $this->vista('paginas/reservas/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $datos = [
                        'fechaReserva' => trim($_POST['fechaReserva']),
                        'descripcion' => trim($_POST['descripcion']),
                        'abono' => trim($_POST['abono']),
                        'tiempo' => trim($_POST['tiempo']),
                        'fkIdLibro' => trim($_POST['idLibro']),
                        'fkIdCliente' => trim($_POST['idCliente']),
                    ];

                if ($this->reservasModelo->agregarReserva($datos)) {
                    redireccionar('reservas');
                } else {
                    die('Algo salió mal');
                }
             }else {
                //Obtener los libros
                $libro = $this->librosModelo->obtenerLibros();
                //Obtener los Clientes
                $cliente = $this->clientesModelo->obtenerClientes();
                $datos = [
                    'fechaReserva' => '',
                    'descripcion' => '',
                    'abono' => '',
                    'tiempo' => '',
                    'fkIdLibro' => '',
                    'fkIdCliente' => '',
                    'libros' => $libro,
                    'clientes' => $cliente
                ];

                $this->vista('paginas/reservas/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdReserva'=>$id,
                    'fechaReserva' => trim($_POST['fechaReserva']),
                    'descripcion' => trim($_POST['descripcion']),
                    'abono' => trim($_POST['abono']),
                    'tiempo' => trim($_POST['tiempo']),
                    'fkIdLibro' => trim($_POST['idLibro']),
                    'fkIdCliente' => trim($_POST['idCliente']),
                ];
                
                if ($this->reservasModelo->actualizarReservas($datos)) {
                    redireccionar('reservas');
                } else {
                    die('Algo salió mal');
                }
            } else {

                //Obtener información de usuario desde el modelo
                $reservas = $this->reservasModelo->obtenerReservaId($id);

                //Obtener los Libros
                $libro = $this->librosModelo->obtenerLibroId($reservas->fkIdLibro);
                $librosExp = $this->librosModelo->obtenerLibrosExcepto($reservas->fkIdLibro);
                // //Obtener los clientes
                $cliente = $this->clientesModelo->obtenerClienteId($reservas->fkIdCliente);
                $clientesExp = $this->clientesModelo->obtenerClienteExcepto($reservas->fkIdCliente);

                $datos = [
                    'pkIdReserva' => $reservas->pkIdReserva,
                    'fechaReserva' => $reservas->fechaReserva,
                    'descripcion' => $reservas->descripcion,
                    'abono' => $reservas->abono,
                    'tiempo' => $reservas->tiempo,
                    'fkIdLibro' => $reservas->fkIdLibro,
                    'fkIdCliente' => $reservas->fkIdCliente,
                    'libros' => $librosExp,
                    'clientes' => $clientesExp,
                    'libro' => $libro,
                    'cliente' => $cliente
                ];

                $this->vista('paginas/reservas/editar', $datos);
            }
        }

        public function borrar($id) {

            //Obtener información de usuario desde el modelo
            $reservas = $this->reservasModelo->obtenerReservaId($id);
            //Obtener los libros
            $libro = $this->librosModelo->obtenerLibroId($reservas->fkIdLibro);
            // //Obtener los Cliente
            $cliente = $this->clientesModelo->obtenerClienteId($reservas->fkIdCLiente);

            $datos = [
                'pkIdReserva' => $reservas->pkIdReserva,
                'fechaReserva' => $reservas->fechaReserva,
                'descripcion' => $reservas->descripcion,
                'abono' => $reservas->abono,
                'tiempo' => $reservas->tiempo,
                'fkIdLibro' => $reservas->fkIdLibro,
                'fkIdCliente' => $reservas->fkIdCliente,
                'nomLib' => $libro->titulo,
                'nomCli' => $Cliente->fkIdIdentificacion
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdReserva' => $id
                ];

                if ($this->reservasModelo->borrarReserva($datos)) {
                    redireccionar('reservas');
                } else {
                    die('Algo salió mal');
                }
            }

            $this->vista('paginas/reservas/borrar', $datos);
        }
    }
    ?>