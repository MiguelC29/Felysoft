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
            return confirm('¿Estas Seguro?, se eliminarán los datos');
        }

        function confirmarInsert() {
            return confirm('¿Estas Seguro?, se guardarán los datos ingresados');
        }

        function confirmarUpdate() {
            return confirm('¿Estas Seguro?, se modificarán los datos');
        }
    </script>
    <title><?php echo NOMBRESITIO;?></title>
</head>
<body>