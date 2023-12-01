<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JQUERY -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.6.0/css/searchBuilder.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css" />
    <!-- CSS Propio -->
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL ?>/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL ?>/css/sidebar.css">
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
                    document.getElementById('formsFelysoft')
                        .submit(); //Deben usar este ID en sus formularios, ejemplo: <form id="formsFelysoft" action="...
                }
            });
            return false; //Evita que el formulario se envie automaticamente
        }

        function confirmarInsert() {
            var formulario = document.getElementById('formsFelysoft');

            if (formulario.checkValidity()) { //checkValidity valida que el formulario cumpla primero con los required
                Swal.fire({
                    title: "¿Estás seguro? Se guardarán los datos ingresados.",
                    showCancelButton: true,
                    confirmButtonText: 'Ok',
                    cancelButtonText: 'Cancelar',
                    icon: 'warning'
                }).then((result) => {
                    if (result.value) {
                        formulario.submit();
                    }
                });
            } else {
                formulario.reportValidity(); //reportValidity muestra la validacion de los required en los input
            }
            return false;
        }


        function confirmarUpdate() {
            var formulario = document.getElementById('formsFelysoft');

            if (formulario.checkValidity()) {
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
            } else {
                formulario.reportValidity();
            }
            return false;
        }
    </script>
    <title><?php echo NOMBRESITIO; ?></title>
</head>

<body>
    <div class="contenedor add active" id="container">
		<div class="brand">
			<h3>Web Dev</h3>
			<a href="#" id="toggle"><i class="bi bi-list"></i></a>
		</div>
		<div class="user">
			<img src="img/user.png" alt="">
			<div class="name">
				<h5>Alex Milton</h5>
				<span>Web Developer</span>
			</div>
		</div>
		<div class="nave">
			<ul>
				<li><a href="#"><i class="bi bi-house"></i><span>DashBoard</span></a></li>
				<li><a href="#"><i class="bi bi-person"></i><span>User</span></a></li>
				<li><a href="#"><i class="bi bi-chat-right-text"></i><span>Message</span></a></li>
				<li><a href="#"><i class="bi bi-graph-up-arrow"></i><span>Analytics</span></a></li>
				<li><a href="#"><i class="bi bi-folder"></i><span>file manager</span></a></li>
				<li><a href="#"><i class="bi bi-cart"></i><span>Order</span></a></li>
				<li><a href="#"><i class="bi bi-heart"></i><span>WishList</span></a></li>
				<li><a href="#"><i class="bi bi-gear"></i><span>Setting</span></a></li>
			</ul>
		</div>

		<div class="nave">
			<ul>
				<li class="pb-5"><a href="#"><i class="bi bi-box-arrow-in-right"></i><span>Log Out</span></a></li>
			</ul>
		</div>
        </div>
        <div class="container-fluid">
        <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo RUTA_URL ?>">
            <img src=".\public\img\logo.png" alt="Logo" width="30" height="35" class="d-inline-block">
            <em class="text-white align-middle"><?php echo NOMBRESITIO; ?></em>
            </a>
            <div class="datetime text-white" id="datetime"></div>
        </div>
        </nav>
