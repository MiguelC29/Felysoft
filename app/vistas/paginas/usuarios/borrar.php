<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>usuarios/borrar/<?php echo $datos['pkIdIdentificacion']?>" method="post">
        <h2 class="titulo-form">BORRAR USUARIO</h2>

        <div class="form-group">
            <label for="tipoDocu">Tipo de documento:</label>
            <input type="text" name="tipoDocu" class="form-control form-control-lg" value="<?php echo $datos['tipoDocu']?>" readonly>
        </div>
        <div class="form-group">
            <label for="pkIdIdentificacion">Número de documento:</label>
            <input type="number" name="pkIdIdentificacion" class="form-control form-control-lg" value="<?php echo $datos['pkIdIdentificacion']?>" readonly>
        </div>
        <div class="form-group">
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" class="form-control form-control-lg" value="<?php echo $datos['nombres']?>" readonly>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" class="form-control form-control-lg" value="<?php echo $datos['apellidos']?>" readonly>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" class="form-control form-control-lg" value="<?php echo $datos['direccion']?>" readonly>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control form-control-lg" value="<?php echo $datos['telefono']?>" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $datos['email']?>" readonly>
        </div>
        <div class="form-group">
            <label for="genero">Genero:</label>
            <input type="text" name="genero" class="form-control form-control-lg" value="<?php echo $datos['genero']?>" readonly>
        </div>
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" class="form-control form-control-lg" value="<?php echo $datos['usuario']?>" readonly>
        </div>
        <div class="form-group">
            <label for="nomRol">Rol:</label>
            <input type="text" name="nomRol" class="form-control form-control-lg" value="<?php echo $datos['nomRol']?>" readonly>
        </div>

        <div class="form-group">
            <div class="mb-3 mt-2">
                <label for="nombre">Foto de perfil:</label>
                <?php if ($datos['imagen'] == null) { ?>
                    <img width="200px" height="200px" src="https://i.postimg.cc/HLH1VGmw/user.png" alt="">
                <?php
                    } else {
                ?>
                    <img width="200px" height="200px" src="data:<?php echo $datos['tipoImg'] ?>;base64,<?php echo base64_encode($datos['imagen']) ?>">
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Borrar" onclick="confirmarDelete()">
            <a href="<?php echo RUTA_URL;?>usuarios" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>