<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
    <div class="my-2">
        <a href="gastos/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">

                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Método de pago</th>
                            <th>Estado</th>
                            <th>Fecha de pago</th>
                            <th>Valor de pago</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos['pagos'] as $pago) : ?>
                            <tr>
                                <td><?php echo $pago->pkIdPago; ?></td>
                                <td><?php echo $pago->metodoPago; ?></td>
                                <td><?php echo $pago->estado; ?></td>
                                <td><?php echo $pago->fechaPago; ?></td>
                                <td><?php echo $pago->valorPago; ?></td>
                                <td>
                                    <a href="<?php echo RUTA_URL; ?>pagos/editar/<?php echo $pago->pkIdPago; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?php echo RUTA_URL; ?>pagos/borrar/<?php echo $pago->pkIdPago; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>