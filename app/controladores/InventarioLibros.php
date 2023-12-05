<?php
    class InventarioLibros extends Controlador {

        public function __construct() {
            $this->inventarioLibrosModelo = $this->modelo('InventarioLibro');
        }

        public function index() {
            //Obtener los libros
            $inventarioLibros = $this->inventarioLibrosModelo->obtenerInventarioLibros();
            
            $datos = [
                'inventarioLibros' => $inventarioLibros
            ];

            $this->vista('paginas/inventario/libros/inicio', $datos);
        }

        // public function agregar() {
        //     // $_FILES LA VARIABLE SUPERGLOBAL, DONDE SE ALMACENAN LAS IMAGENES
        //     //validar si se envio una foto, si tiene un name es porque si se mando
        //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //         $datos = [
        //             'nombre' => trim($_POST['nombre']),
        //             'marca' => trim($_POST['marca']),
        //             'precioVenta' => trim($_POST['precioVenta']),
        //             'fechaVencimiento' => trim($_POST['fechaVencimiento']),
        //             'fkIdCategoria' => trim($_POST['idCategoria']),
        //             'fkIdProveedor' => trim($_POST['idProveedor']),
        //             'imagen' => $binariosImagen,
        //             'tipoImg' => $tipoArchivo,
        //         ];

        //         if ($this->productosModelo->agregarProducto($datos)) {
        //             redireccionar('productos');
        //         } else {
        //             die('Algo salió mal');
        //         }
        //     } else {
        //         //Obtener las categorias
        //         $categorias = $this->categoriasModelo->obtenerCategorias();
        //         //Obtener los proveedores
        //         $proveedores = $this->proveedoresModelo->obtenerProveedores();
        //         $datos = [
        //             'nombre' => '',
        //             'marca' => '',
        //             'precioVenta' => '',
        //             'fechaVencimiento' => '',
        //             'fkIdCategoria' => '',
        //             'fkIdProveedor' => '',
        //             'imagen' => '',
        //             'tipoImg' => '',
        //             'categorias' => $categorias,
        //             'proveedores' => $proveedores
        //         ];

        //         $this->vista('paginas/productos/agregar', $datos);
        //     }
        // }

        // public function editar($id) {
        //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //         if (isset($_FILES['imagenP']['name'])) {
        //             //retener la info de la img
        //             $tipoArchivo = $_FILES['imagenP']['type']; //obtener tipo del archivo
        //             $nombreArchivo = $_FILES['imagenP']['name']; //obtener nombre del archivo
        //             $tamanoArchivo = $_FILES['imagenP']['size']; //obtener tamaño del archivo
        //             $permitido = array("image/png","image/jpg","image/jpeg"); //tipos de datos permitidos
        //             if (in_array($tipoArchivo, $permitido) == false) {
        //                 die("<script>alert('Archivo no permitido.'); location.href='';</script>");
        //             }
        
        //             //fopen abrimos un archivo o leemos un archivo
        //             //tmp_name es el nombre temporal de donde se almacenan temporalmente las img que subimos
        //             // 'r' -> modo de fopen, modo de abrir el archivo modo r(read) de lectura
        //             $imagenSubida = fopen($_FILES['imagenP']['tmp_name'], 'r');
        //             //Extraer los binarios de la img
        //             $binariosImagen = fread($imagenSubida, $tamanoArchivo);
        //             // $binariosImagen = mysqli_escape_string($conectar, $binariosImagen);

        //             $datos = [
        //                 'pkIdProducto' => $id,
        //                 'nombre' => trim($_POST['nombre']),
        //                 'marca' => trim($_POST['marca']),
        //                 'precioVenta' => trim($_POST['precioVenta']),
        //                 'fechaVencimiento' => trim($_POST['fechaVencimiento']),
        //                 'fkIdCategoria' => trim($_POST['idCategoria']),
        //                 'fkIdProveedor' => trim($_POST['idProveedor']),
        //                 'imagen' => $binariosImagen,
        //                 'tipoImg' => $tipoArchivo
        //             ];
        //         }
        //         if ($this->productosModelo->actualizarProducto($datos)) {
        //             redireccionar('productos');
        //         } else {
        //             die('Algo salió mal');
        //         }
        //     } else {

        //         //Obtener información de usuario desde el modelo
        //         $productos = $this->productosModelo->obtenerProductoId($id);

        //         //Obtener las categorias
        //         $categoria = $this->categoriasModelo->obtenerCategoriaId($productos->fkIdCategoria);
        //         $categoriasExp = $this->categoriasModelo->obtenerCategoriasExcepto($productos->fkIdCategoria);
        //         // //Obtener los proveedores
        //         $proveedor = $this->proveedoresModelo->obtenerProveedorId($productos->fkIdProveedor);
        //         $proveedoresExp = $this->proveedoresModelo->obtenerProveedoresExcepto($productos->fkIdProveedor);

        //         $datos = [
        //             'pkIdProducto' => $productos->pkIdProducto,
        //             'nombre' => $productos->nombre,
        //             'marca' => $productos->marca,
        //             'precioVenta' => $productos->precioVenta,
        //             'fechaVencimiento' => $productos->fechaVencimiento,
        //             'fkIdCategoria' => $productos->fkIdCategoria,
        //             'fkIdProveedor' => $productos->fkIdProveedor,
        //             'imagen' => $productos->imagen,
        //             'categorias' => $categoriasExp,
        //             'imagenP' => $productos->imagen,
        //             'tipoImgP' => $productos->tipoImg,
        //             'proveedores' => $proveedoresExp,
        //             'categoria' => $categoria,
        //             'proveedor' => $proveedor
        //         ];

        //         $this->vista('paginas/productos/editar', $datos);
        //     }
        // }

        // public function borrar($id) {

        //     //Obtener información de usuario desde el modelo
        //     $productos = $this->productosModelo->obtenerProductoId($id);
        //     //Obtener las categorias
        //     $categoria = $this->categoriasModelo->obtenerCategoriaId($productos->fkIdCategoria);
        //     // //Obtener los proveedores
        //     $proveedor = $this->proveedoresModelo->obtenerProveedorId($productos->fkIdProveedor);

        //     $datos = [
        //         'pkIdProducto' => $productos->pkIdProducto,
        //         'nombre' => $productos->nombre,
        //         'marca' => $productos->marca,
        //         'precioVenta' => $productos->precioVenta,
        //         'fechaVencimiento' => $productos->fechaVencimiento,
        //         'fkIdCategoria' => $productos->fkIdCategoria,
        //         'fkIdProveedor' => $productos->fkIdProveedor,
        //         'imagen' => $productos->imagen,
        //         'tipoImg' => $productos->tipoImg,
        //         'nomCat' => $categoria->nombre,
        //         'nomPro' => $proveedor->nombre
        //     ];

        //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //         $datos = [
        //             'pkIdProducto' => $id
        //         ];

        //         if ($this->productosModelo->borrarProducto($datos)) {
        //             redireccionar('productos');
        //         } else {
        //             die('Algo salió mal');
        //         }
        //     }

        //     $this->vista('paginas/productos/borrar', $datos);
        // }
    }
?>