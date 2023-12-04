<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="card card-body bg-light mt-5">
    <h2>Agregar usuarios</h2>
    <form  action="<?php echo RUTA_URL;?>usuarios/agregar" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="tipoDocu">Tipo de documento: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="tipoDocu" id="tipoDocu" required>
                <option value="" selected disabled>Seleccione el tipo de documento</option>
                <option value="C.C">Cédula de ciudadania</option>
                <option value="T.I">Tarjeta de Identidad</option>
                <option value="C.E">Cédula de extranjeria</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pkIdIdentificacion">Número de documento: <sup>*</sup></label>
            <input type="number" name="pkIdIdentificacion" class="form-control form-control-lg" required>
        </div>

        <div class="form-group">
            <label for="nombres">Nombres: <sup>*</sup></label>
            <input type="text" name="nombres" class="form-control form-control-lg" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos: <sup>*</sup></label>
            <input type="text" name="apellidos" class="form-control form-control-lg" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección: <sup>*</sup></label>
            <input type="text" name="direccion" class="form-control form-control-lg" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono: <sup>*</sup></label>
            <input type="number" name="telefono" class="form-control form-control-lg" required>
        </div>

        <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg" required>
        </div>

        <div class="form-group">
            <label for="genero">Genero: <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="genero" id="genero" required>
                <option value="" selected disabled>Seleccione su género</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>

        <div class="form-group">
            <label for="usuario">Usuario: <sup>*</sup></label>
            <input type="text" name="usuario" class="form-control form-control-lg" required>
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña: <sup>*</sup></label>
            <input type="password" name="contrasena" class="form-control form-control-lg" required>
        </div>

        <div class="form-group">
            <label for="idRol">Rol (Nombre): <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idRol" required>
            <option value= "" selected disabled>Seleccione el nombre del rol</option>
            <?php foreach($datos['roles'] as $rol) : ?>
                <option value="<?php echo $rol->pkIdRol; ?>"><?php echo $rol->nombre; ?></option>
            <?php endforeach; ?>
            </select>
        </div>

        <input type="submit" class="btn btn-success" value="Agregar Usuario" onclick='return confirmarInsert()'>
        <a href="<?php echo RUTA_URL;?>usuarios" class="btn btn-primary">Volver</a>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>
