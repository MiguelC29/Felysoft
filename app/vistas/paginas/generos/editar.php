<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>generos/editar/<?php echo $datos['pkIdGenero'] ?>" method="post" novalidate>
        <h2 class="titulo-form">EDITAR GÉNERO</h2>
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" name="nombre" class="form-control form-control-lg" value="<?php echo $datos['nombre'] ?>" required>
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion: <sup>*</sup></label>
            <input type="text" name="descripcion" class="form-control form-control-lg" value="<?php echo $datos['descripcion'] ?>" required>
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
            <a href="<?php echo RUTA_URL; ?>generos" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>