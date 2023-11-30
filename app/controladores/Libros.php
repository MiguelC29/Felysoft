<?php
    class Libros extends Controlador {

        public function __construct() {
            $this->librosModelo = $this->modelo('Libro');
            $this->generosModelo = $this->modelo('Genero');
            $this->autoresModelo = $this->modelo('Autor');
        }
        public function index() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $busqueda = trim($_POST['buscar']);

                if (empty($busqueda)) {
                    echo "<script language='JavaScript'>
                            alert('Ingrese el nombre del Libro a buscar');
                            location.assign('libros');
                        </script>";
                } else {
                    $librosBusqueda = $this->librosModelo->busquedaLibros($busqueda);

                    $datos = [
                        'libros' => $librosBusqueda,
                    ];
                }
            } else {
                //Obtener los libros
                $libros = $this->librosModelo->obtenerLibros();
                
                $datos = [
                    'libros' => $libros,
                ];
            }
            $this->vista('paginas/libros/inicio', $datos);
        }

        public function agregar() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $datos = [
                        'titulo' => trim($_POST['titulo']),
                        'editorial' => trim($_POST['editorial']),
                        'descripcion' => trim($_POST['descripcion']),
                        'anioPublicacion' => trim($_POST['anioPublicacion']),
                        'precioHora' => trim($_POST['precioHora']),
                        'fkIdAutor' => trim($_POST['idAutor']),
                        'fkIdGenero' => trim($_POST['idGenero']),
                    ];

                if ($this->librosModelo->agregarLibro($datos)) {
                    redireccionar('libros');
                } else {
                    die('Algo salió mal');
                }
             }else {
                //Obtener los autores
                $autores = $this->autoresModelo->obtenerAutores();
                //Obtener los generos
                $generos = $this->generosModelo->obtenerGeneros();
                $datos = [
                    'titulo' => '',
                    'editorial' => '',
                    'descripcion' => '',
                    'anioPublicacion' => '',
                    'precioHora' => '',
                    'fkIdAutor' => '',
                    'fkIdGenero' => '',
                    'autores' => $autores,
                    'generos' => $generos
                ];

                $this->vista('paginas/libros/agregar', $datos);
            }
        }

        public function editar($id) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdLibro'=>$id,
                    'titulo' => trim($_POST['titulo']),
                    'editorial' => trim($_POST['editorial']),
                    'descripcion' => trim($_POST['descripcion']),
                    'anioPublicacion' => trim($_POST['anioPublicacion']),
                    'precioHora' => trim($_POST['precioHora']),
                    'fkIdAutor' => trim($_POST['idAutor']),
                    'fkIdGenero' => trim($_POST['idGenero']),
                ];
                
                if ($this->librosModelo->actualizarLibros($datos)) {
                    redireccionar('libros');
                } else {
                    die('Algo salió mal');
                }
            } else {

                //Obtener información de usuario desde el modelo
                $libros = $this->librosModelo->obtenerLibroId($id);

                //Obtener los Autores
                $autor = $this->autoresModelo->obtenerAutorId($libros->fkIdAutor);
                $autoresExp = $this->autoresModelo->obtenerAutoresExcepto($libros->fkIdAutor);
                // //Obtener los generos
                $genero = $this->generosModelo->obtenerGeneroId($libros->fkIdGenero);
                $generosExp = $this->generosModelo->obtenerGenerosExcepto($libros->fkIdGenero);

                $datos = [
                    'pkIdLibro' => $libros->pkIdLibro,
                    'titulo' => $libros->titulo,
                    'editorial' => $libros->editorial,
                    'descripcion' => $libros->descripcion,
                    'anioPublicacion' => $libros->anioPublicacion,
                    'precioHora' => $libros->precioHora,
                    'fkIdAutor' => $libros->fkIdAutor,
                    'fkIdGenero' => $libros->fkIdGenero,
                    'autores' => $autoresExp,
                    'generos' => $generosExp,
                    'autor' => $autor,
                    'genero' => $genero
                ];

                $this->vista('paginas/libros/editar', $datos);
            }
        }

        public function borrar($id) {

            //Obtener información de usuario desde el modelo
            $libros = $this->librosModelo->obtenerLibroId($id);
            //Obtener los autores
            $autor = $this->autoresModelo->obtenerAutorId($libros->fkIdAutor);
            // //Obtener los generos
            $genero = $this->generosModelo->obtenerGeneroId($libros->fkIdGenero);

            $datos = [
                'pkIdLibro' => $libros->pkIdLibro,
                'titulo' => $libros->titulo,
                'editorial' => $libros->editorial,
                'descripcion' => $libros->descripcion,
                'anioPublicacion' => $libros->anioPublicacion,
                'precioHora' => $libros->precioHora,
                'fkIdAutor' => $libros->fkIdAutor,
                'fkIdGenero' => $libros->fkIdGenero,
                'nomAut' => $autor->nombre,
                'nomGen' => $genero->nombre
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'pkIdLibro' => $id
                ];

                if ($this->librosModelo->borrarLibro($datos)) {
                    redireccionar('libros');
                } else {
                    die('Algo salió mal');
                }
            }

            $this->vista('paginas/libros/borrar', $datos);
        }
    }
    ?>