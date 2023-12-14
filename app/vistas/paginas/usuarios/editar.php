<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL;?>usuarios/editar/<?php echo $datos['pkIdIdentificacion']?>" method="post" novalidate>
        <h2 class="titulo-form">EDITAR USUARIO</h2>
        <div class="form-group">
            <label for="tipoDocu">Tipo de documento: <sup>*</sup></label>
            <input type="text" name="tipoDocu" class="form-control form-control-lg" value="<?php echo $datos['tipoDocu']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="pkIdIdentificacion">Número de documento: <sup>*</sup></label>
            <input type="number" name="pkIdIdentificacion" class="form-control form-control-lg" value="<?php echo $datos['pkIdIdentificacion']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        
        <div class="form-group">
            <label for="nombres">Nombres: <sup>*</sup></label>
            <input type="text" name="nombres" class="form-control form-control-lg" value="<?php echo $datos['nombres']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos: <sup>*</sup></label>
            <input type="text" name="apellidos" class="form-control form-control-lg" value="<?php echo $datos['apellidos']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección: <sup>*</sup></label>
            <input type="text" name="direccion" class="form-control form-control-lg" value="<?php echo $datos['direccion']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono: <sup>*</sup></label>
            <input type="number" name="telefono" class="form-control form-control-lg" value="<?php echo $datos['telefono']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $datos['email']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="genero">Genero: <sup>*</sup></label>
            <input type="text" name="genero" class="form-control form-control-lg" value="<?php echo $datos['genero']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="usuario">Usuario: <sup>*</sup></label>
            <input type="text" name="usuario" class="form-control form-control-lg" value="<?php echo $datos['usuario']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña: <sup>*</sup></label>
            <input type="password" name="contrasena" class="form-control form-control-lg" value="<?php echo $datos['contrasena']?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
  
        <div class="form-group">
            <label for="idRol">Rol (Nombre): <sup>*</sup></label>
            <select class="form-select" aria-label="Default select example" name="idRol">
            <option value = "" selected disabled>Seleccione el Rol</option>
            <option value="<?php echo $datos['rol']->pkIdRol; ?>" selected>
            <?php echo $datos['rol']->nombre; ?></option>
            <?php foreach($datos['roles'] as $rol) : ?>
                <option value="<?php echo $rol->pkIdRol; ?>"><?php echo $rol->nombre; ?></option>
            <?php endforeach; ?>
            </select>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Guardar" onclick="confirmarUpdate()">
            <a href="<?php echo RUTA_URL;?>usuarios" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>