<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<a href="compras/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL ?>" class="btn btn-primary">Volver</a>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha de Compra</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos['compras'] as $compra) : ?>
                            <tr>
                                <td><?php echo $compra->pkIdCompra; ?></td>
                                <td><?php echo $compra->fechaCompra; ?></td>
                                <td><?php echo $compra->total; ?></td>
                                <td>
                                    <a href="<?php echo RUTA_URL; ?>compras/editar/<?php echo $compra->pkIdCompra; ?>" class="btn btn-warning">Editar</a>
                                    <a href="<?php echo RUTA_URL; ?>compras/borrar/<?php echo $compra->pkIdCompra; ?>" class="btn btn-danger">Borrar</a>
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