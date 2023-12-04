<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

    <div class="row pt-5">
        <div class="col-sm-3">
            <div class="rectangle text-black bg-white border border-primary p-3 text-center d-flex align-items-center justify-content-center">
                <i class="bi bi-cart3" style="font-size: 3em; margin-right: 0.5em;"></i>
                <!-- <p class="mb-0" style="font-size: 3em; margin-right: 0.5em;"><?php echo $datos['cantidadProductos']; ?></p> -->
            </div>
        </div>

        <div div class="col-sm-3">
            <div class="rectangle text-black bg-white border border-primary p-3 text-center d-flex align-items-center justify-content-center">
                <i class="bi bi-currency-dollar" style="font-size: 3em; margin-right: 0.5em;"></i>
                <p class="mb-0" style="font-size: 3em; margin-right: 0.5em;">55</p>
            </div>
        </div>

        <div div class="col-sm-3">
            <div class="rectangle text-black bg-white border border-primary p-3 text-center d-flex align-items-center justify-content-center">
                <i class="bi bi-cash-coin" style="font-size: 3em; margin-right: 0.5em;"></i>
                <p class="mb-0" style="font-size: 3em; margin-right: 0.5em;">100.000</p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="rectangle bg-white border border-primary p-3 text-center">
                <h2>55</h2>
                <i class="bi bi-icono-4 text-warning"></i>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>N. de Venta</th>
                            <th>Fecha</th>
                            <th>Total de la venta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos['ventasinicio'] as $ventasinicio) : ?>
                            <tr>
                                <td><?php echo $ventasinicio->pkIdVenta; ?></td>
                                <td><?php echo $ventasinicio->fechaVenta; ?></td>
                                <td><?php echo $ventasinicio->total; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>
