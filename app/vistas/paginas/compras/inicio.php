<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<h1 class="text-white text-center mt-2">LISTADO DE COMPRAS</h1>

    <div class="my-2">
        <a href="compras/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center" style="width:100%">
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
                                    <a href="<?php echo RUTA_URL; ?>compras/editar/<?php echo $compra->pkIdCompra; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?php echo RUTA_URL; ?>compras/borrar/<?php echo $compra->pkIdCompra; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
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