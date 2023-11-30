<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<a href="gastos/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL ?>" class="btn btn-primary">Volver</a>
<div class="container">
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
                                <td><?php echo $gasto->fkIdCompra; ?></td>
                                <td><?php echo $gasto->fkIdPago; ?></td>
                                <td>
                                    <a href="<?php echo RUTA_URL; ?>gastos/editar/<?php echo $gasto->pkIdGasto; ?>" class="btn btn-warning">Editar</a>
                                    <a href="<?php echo RUTA_URL; ?>gastos/borrar/<?php echo $gasto->pkIdGasto; ?>" class="btn btn-danger">Borrar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>