<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<a href="ventas/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL ?>" class="btn btn-primary">Volver</a>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">

                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha Venta</th>
                            <th>Subtotal</th>
                            <th>Total</th>
                            <th>Pago (Método)</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos['ventas'] as $venta) : ?>
                            <tr>
                                <td><?php echo $venta->pkIdVenta; ?></td>
                                <td><?php echo $venta->fechaVenta; ?></td>
                                <td><?php echo $venta->subtotal; ?></td>
                                <td><?php echo $venta->total; ?></td>
                                <td><?php echo $venta->metodoPago; ?></td>
                            
                                <td>
                                    <a href="<?php echo RUTA_URL; ?>ventas/editar/<?php echo $venta->pkIdVenta; ?>" class="btn btn-warning">Editar</a>
                                    <a href="<?php echo RUTA_URL; ?>ventas/borrar/<?php echo $venta->pkIdVenta; ?>" class="btn btn-danger">Borrar</a>
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