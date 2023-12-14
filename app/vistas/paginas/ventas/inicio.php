<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<?php require RUTA_APP . '/vistas/inc/sidebar.php'; ?>
<?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>

<h1 class="text-white text-center mt-2">LISTADO DE VENTAS</h1>
    <div class="my-2">
        <a href="ventas/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
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
                                    <a href="<?php echo RUTA_URL; ?>ventas/editar/<?php echo $venta->pkIdVenta; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?php echo RUTA_URL; ?>ventas/borrar/<?php echo $venta->pkIdVenta; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?> 