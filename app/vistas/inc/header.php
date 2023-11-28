<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>/css/estilos.css">
    <script type="text/javascript">
        function confirmarDelete() {
            Swal.fire({
                title: "¿Estás seguro? Se eliminarán los datos.",
                showCancelButton: true,
                confirmButtonText: 'Ok', //Deben usar onclick en los submit, ejemplo: <input type="submit" class="btn btn-success" value="Agregar Servicio" onclick="return confirmarInsert()">
                cancelButtonText: 'Cancelar',
                icon: 'warning'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('formsFelysoft').submit(); //Deben usar este ID en sus formularios, ejemplo: <form id="formsFelysoft" action="...
                }
            });
            return false; //Evita que el formulario se envie automaticamente
        }

        function confirmarInsert() {
            Swal.fire({
                title: "¿Estás seguro? Se guardarán los datos ingresados.",
                showCancelButton: true,
                confirmButtonText: 'Ok',
                cancelButtonText: 'Cancelar',
                icon: 'warning'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('formsFelysoft').submit();
                }
            });
            return false;
        }

        function confirmarUpdate() {
            Swal.fire({
                title: "¿Estás seguro? Se actualizarán los datos ingresados.",
                showCancelButton: true,
                confirmButtonText: 'Ok',
                cancelButtonText: 'Cancelar',
                icon: 'warning'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('formsFelysoft').submit();
                }
            });
            return false;
        }
    </script>
    <title><?php echo NOMBRESITIO;?></title>
</head>
<body>