<?php
    class Carritos extends Controlador {

        public function index() {
            $this->vista('paginas/carrito/inicio');
        }

        public function cart() {
            session_start();
            //aqui empieza el carrito

            if (isset($_SESSION['carrito'])){
                $carrito_mio=$_SESSION['carrito'];
                if(isset($_POST['titulo'])){
                    $titulo=$_POST['titulo'];
                    $precio=$_POST['precio'];
                    $cantidad=$_POST['cantidad'];
                    $num=0;
                    $carrito_mio[]=array("titulo"=>$titulo, "precio"=>$precio, "cantidad"=>$cantidad);
                }
            } else {
                $titulo=$_POST['titulo'];
                $precio=$_POST['precio'];
                $cantidad=$_POST['cantidad'];
                $carrito_mio[]=array("titulo"=>$titulo, "precio"=>$precio, "cantidad"=>$cantidad);
            }

            $_SESSION['carrito'] = $carrito_mio;

            header("Location: ".$_SERVER['HTTP_REFERER']."");
        }

        public function borrarCarro() {
            session_start();
            header("Location: ".$_SERVER['HTTP_REFERER']."");
            unset($_SESSION['carrito']);
        }
    }
?>