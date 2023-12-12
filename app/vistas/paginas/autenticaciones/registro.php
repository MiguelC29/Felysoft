<?php require RUTA_APP . '/vistas/inc/headerRegistro.php';?>

<body style="width: 1800px;">
    <div class="page">
        <div class="container">
            <div class="left">
                <img id="logoL" src="https://i.postimg.cc/bvLWrs3P/logo.png" alt="registro form" class="h-100 w-75" style="border-radius: 1rem 0 0 1rem; margin: -30px 40px;" />
            </div>
            <div class="right">
                <h5 class="text-center">REGISTRO DE USUARIO</h5>
                <hr>
                <form id="register-form" action="<?php echo RUTA_URL; ?>autenticaciones/registrarUsuario" method="POST">
                    <label for="pkIdIdentificacion">Número de Identificación</label>
                    <input type="number" id="pkIdIdentificacion" name="pkIdIdentificacion" required>

                    <label for="tipoDocu">Tipo de Documento</label>
                    <input type="text" id="tipoDocu" name="tipoDocu" required>

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

                    <label for="genero">Género</label>
                    <input type="text" id="genero" name="genero" required>

                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" required>

                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" required>

                    <label for="confirmar-contrasena">Confirmar Contraseña</label>
                    <input type="password" id="confirmar-contrasena" name="confirmar-contrasena" required>

                    <label for="fkIdRol">Rol</label>
                    <select id="fkIdRol" name="fkIdRol" required>
                        <?php foreach ($datos['roles'] as $rol): ?>
                        <option value="<?php echo $rol->pkIdRol; ?>"><?php echo $rol->nombre; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <input type="submit" id="submit" value="Registrarse" onclick='return registroExitoso()'>
                    <hr>
                </form>
            </div>
        </div>

        <div class="botonLogin">
            <a href="<?php echo RUTA_URL; ?>autenticaciones/login"><button id="botonL">Iniciar Sesión</button></a>
        </div>

    </div>
    </div>
</body>

</html>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>