<?php
    require_once 'config/configurar.php';
    
    //Autoload php
    spl_autoload_register(function($nombreClase) {
        require_once 'librerias/' . $nombreClase . '.php';
    });
?>