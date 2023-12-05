<?php require RUTA_APP . '/vistas/inc/headerLogin.php';?>

<body style="width: 1800px;">
    <div class="page">
        <div class="container">
            <div class="left">
                <img id="logoL" src="https://i.postimg.cc/bvLWrs3P/logo.png" alt="login form" class="h-100 w-75"
                    style="border-radius: 1rem 0 0 1rem; margin: -30px 40px;" />
            </div>
            <div class="right">
                <svg viewBox="0 0 320 300">
                    <defs>
                        <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307"
                            y2="193.49992" gradientUnits="userSpaceOnUse">
                            <stop style="stop-color:#5765ce;" offset="0" id="stop876" />
                            <stop style="stop-color: white;" offset="1" id="stop878" />
                        </linearGradient>
                    </defs>
                    <path
                        d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
                </svg>
            <div class="form">
                <form action="<?php echo RUTA_URL; ?>autenticaciones/iniciarSesion" method="post">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="email" name="usuario" autofocus required>

                        <label for="contrasena">Contraseña</label>
                        <input type="password" id="password" name="contrasena" required>
                        
                        <input type="submit" id="submit" value="Ingresar">
                    </form>
                </div>
            </div>

            <div class="botonRegistro">
                <a href="<?php echo RUTA_URL; ?>autenticaciones/registro"><button id="botonR">Registrarse</button></a>
            </div>
        </div>
    </div>
</body>

</html>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>