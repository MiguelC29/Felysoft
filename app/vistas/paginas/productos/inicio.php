<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="productos/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL?>" class="btn btn-primary">Volver</a>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Precio Venta</th>
                            <th>Fecha de Vencimiento</th>
                            <th>Categoria</th>
                            <th>Proveedor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['productos'] as $producto) : ?>
                        <tr>
                            <td><?php echo $producto->pkIdProducto; ?></td>
                            <td><img width = "100px" height = "100px" src="data:<?php echo $producto->tipoImg?>;base64,<?php echo base64_encode($producto->imagen)?>"></td>
                            <td><?php echo $producto->producto; ?></td>
                            <td><?php echo $producto->marca; ?></td>
                            <td><?php echo $producto->precioVenta; ?></td>
                            <td><?php echo $producto->fechaVencimiento; ?></td>
                            <td><?php echo $producto->categoria; ?></td>
                            <td><?php echo $producto->proveedor; ?></td>
                            <td>
                                <a href="<?php echo RUTA_URL; ?>productos/editar/<?php echo $producto->pkIdProducto; ?>" class="btn btn-warning">Editar</a>
                                <a href="<?php echo RUTA_URL; ?>productos/borrar/<?php echo $producto->pkIdProducto; ?>" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>