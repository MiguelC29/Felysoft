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
                            <th>Fecha</th>
                            <th>Monto</th>
                            <th>Descripción</th>
                            <th>Compra (Total)</th>
                            <th>Pago (Método)</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos['gastos'] as $gasto) : ?>
                            <tr>
                                <td><?php echo $gasto->pkIdGasto; ?></td>
                                <td><?php echo $gasto->fecha; ?></td>
                                <td><?php echo $gasto->monto; ?></td>
                                <td><?php echo $gasto->descripcion; ?></td>
                                <td><?php echo $gasto->total; ?></td>
                                <td><?php echo $gasto->metodoPago; ?></td>
                                <td>
                                    <a href="<?php echo RUTA_URL; ?>gastos/editar/<?php echo $gasto->pkIdGasto; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?php echo RUTA_URL; ?>gastos/borrar/<?php echo $gasto->pkIdGasto; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?> 