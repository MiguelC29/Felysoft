<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="contenedor-form">
    <form class="needs-validation" id="formsFelysoft" action="<?php echo RUTA_URL; ?>tiposervicios/agregar" method="post" novalidate>
        <h2 class="titulo-form">AGREGAR SERVICIO</h2>
        <div class="form-group mb-3">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input id="inputFelysoft" type="text" name="nombre" class="form-control form-control-lg" required />
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="descripcion">Descripción: <sup>*</sup></label>
            <input id="inputFelysoft" type="text" name="descripcion" class="form-control form-control-lg" required />
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="precio">Precio: <sup>*</sup></label>
            <input id="inputFelysoft" type="text" name="precio" class="form-control form-control-lg" required />
            <div class="valid-feedback">
                Campo completado!
            </div>
            <div class="invalid-feedback">
                Por favor, complete el campo!
            </div>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Agregar">
            <a href="<?php echo RUTA_URL; ?>tiposervicios" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>