<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>tiposervicios/editar/<?php echo $datos['idTipoServicio'] ?>" method="post" novalidate>
        <h2 class="titulo-form">EDITAR SERVICIO</h2>
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción: <sup>*</sup></label>
            <input type="text" id="descripcion" name="descripcion" class="form-control form-control-lg" value="<?php echo $datos['descripcion'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="precio">Precio: <sup>*</sup></label>
            <input type="text" id="precio" name="precio" class="form-control form-control-lg" value="<?php echo $datos['precio'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>

        <div class="text-center">
<<<<<<< HEAD
            <input type="submit" class="btn btn-success" value="Guardar">
=======
            <input type="submit" class="btn btn-success" value="Editar" onclick="confirmarUpdate()">
>>>>>>> f4be392e6beea88fae5d5b47bc2dcd8f1ff220ae
            <a href="<?php echo RUTA_URL; ?>tiposervicios" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
