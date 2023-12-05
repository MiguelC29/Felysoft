<?php require RUTA_APP . '/vistas/inc/header.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <!-- Agrega tus estilos y scripts aquí si es necesario -->
</head>

<body>
    <h2>Formulario de Registro</h2>
    <div class="form">
        <form id="register-form" action="<?php echo RUTA_URL; ?>auth/registrarUsuario" method="post">
            <label for="nombres">Nombres</label>
            <input type="text" id="nombres" name="nombres" autofocus required>
            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" required>
            <label for="telefono">Teléfono</label>
            <input type="number" id="telefono" name="telefono" required>
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" required>
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>
            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" required>
            <label for="confirmar-contrasena">Confirmar Contraseña</label>
            <input type="password" id="confirmar-contrasena" name="confirmar-contrasena" required>
            <input type="submit" id="submit" value="Registrarse">
        </form>
    </div>

</body>

</html>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>