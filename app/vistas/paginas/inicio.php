<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<div class="container mt-4">
    <a href="<?php echo RUTA_URL ?>categorias" class="btn btn-success">CATEGORIAS</a>
    <a href="<?php echo RUTA_URL ?>compras" class="btn btn-success">COMPRAS</a>
    <a href="<?php echo RUTA_URL ?>productos" class="btn btn-success">PRODUCTOS</a>
    <a href="<?php echo RUTA_URL ?>proveedores" class="btn btn-success">PROVEEDORES</a>
    <a href="<?php echo RUTA_URL ?>tiposervicios" class="btn btn-success">SERVICIOS</a>
    <a href="<?php echo RUTA_URL ?>servicios" class="btn btn-success">SERVICIOS AGENDADOS</a>
    <a href="<?php echo RUTA_URL ?>autores" class="btn btn-success">AUTORES</a>
    <a href="<?php echo RUTA_URL ?>generos" class="btn btn-success">GENEROS</a>
    <a href="<?php echo RUTA_URL ?>pagos" class="btn btn-success">PAGOS</a>
    <a href="<?php echo RUTA_URL ?>gastos" class="btn btn-success">GASTOS</a>
    <a href="<?php echo RUTA_URL ?>libros" class="btn btn-success">LIBROS</a>

    <div class="row pt-5">
        <div div class="col-sm-3">
            <div class="rectangle bg-white border border-primary p-3 text-center d-flex align-items-center justify-content-center">
                <i class="bi bi-cart3" style="font-size: 3em; margin-right: 0.5em;"></i>
                <p class="mb-0" style="font-size: 3em; margin-right: 0.5em;">55</p>
            </div>
        </div>

        <div div class="col-sm-3">
            <div class="rectangle bg-white border border-primary p-3 text-center d-flex align-items-center justify-content-center">
                <i class="bi bi-currency-dollar" style="font-size: 3em; margin-right: 0.5em;"></i>
                <p class="mb-0" style="font-size: 3em; margin-right: 0.5em;">55</p>
            </div>
        </div>

        <div div class="col-sm-3">
            <div class="rectangle bg-white border border-primary p-3 text-center d-flex align-items-center justify-content-center">
                <i class="bi bi-cash-coin" style="font-size: 3em; margin-right: 0.5em;"></i>
                <p class="mb-0" style="font-size: 3em; margin-right: 0.5em;">100.000</p>
            </div>
        </div>

        <!-- Columna 4 -->
        <div class="col-sm-3">
            <div class="rectangle bg-white border border-primary p-3 text-center">
                <h2>55</h2>
                <i class="bi bi-icono-4 text-warning"></i>
            </div>
        </div>
    </div>

</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>