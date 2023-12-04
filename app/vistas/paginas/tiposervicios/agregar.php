<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="card card-body bg-secondary text-black mt-5">
    <h2 class="text-center">AGREGAR SERVICIO</h2>

    <form id="formsFelysoft" action="<?php echo RUTA_URL; ?>tiposervicios/agregar" method="post">
        <div class="form-group mb-3">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input id="inputFelysoft" type="text" name="nombre" class="form-control form-control-lg" required />
        </div>
        <div class="form-group mb-3">
            <label for="descripcion">Descripción: <sup>*</sup></label>
            <input id="inputFelysoft" type="text" name="descripcion" class="form-control form-control-lg" required />
        </div>
        <div class="form-group mb-3">
            <label for="precio">Precio: <sup>*</sup></label>
            <input id="inputFelysoft" type="text" name="precio" class="form-control form-control-lg" required />
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Agregar Servicio" onclick="return confirmarInsert()">
            <a href="<?php echo RUTA_URL; ?>tiposervicios" class="btn btn-primary">Volver</a>
        </div>
    </form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>