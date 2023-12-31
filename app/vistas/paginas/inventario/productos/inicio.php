<?php require RUTA_APP . '/vistas/inc/header.php';?>

<h1 class="text-white text-center mt-2">LISTADO DE PRODUCTOS EN INVENTARIO</h1>
    <!-- <div class="my-2">
        <a href="inventarioProductos/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div> -->
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive my-4">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>IdProducto</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Precio Venta</th>
                            <th>Fecha de Vencimiento</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['inventarioProductos'] as $producto) : ?>
                        <tr>
                            <td><?php echo $producto->pkIdProducto; ?></td>
                            <td><img width = "100px" height = "100px" src="data:<?php echo $producto->tipoImg?>;base64,<?php echo base64_encode($producto->imagen)?>"></td>
                            <td><?php echo $producto->nombre; ?></td>
                            <td><?php echo $producto->marca; ?></td>
                            <td><?php echo $producto->precioVenta; ?></td>
                            <td><?php echo $producto->fechaVencimiento; ?></td>
                            <?php
                                if ($producto->stock < 5) {?>
                                    <td style="background-color: #F96565;"><?php echo $producto->stock; ?></td>
                                <?php
                                } elseif ($producto->stock >= 5 && $producto->stock <= 15) {?>
                                    <td style="background-color: #FFFA99;"><?php echo $producto->stock; ?></td>
                                <?php
                                } else {?>
                                    <td style="background-color: #9CEFAC;"><p><?php echo $producto->stock; ?></p></td>
                                <?php
                                }
                            ?>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?php echo $producto->pkIdProducto; ?>" class="editar-stock"><i class="bi bi-plus-circle-fill" style="font-size: 2rem;"></i></a>
                                <!-- <a href="<?php echo RUTA_URL; ?>inventarioProductos/editar/<?php echo $producto->pkIdProducto; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?php echo RUTA_URL; ?>inventarioProductos/borrar/<?php echo $producto->pkIdProducto; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Stock Producto</h1>
                <a type="btn" class="btn-close" href="<?php echo RUTA_URL ?>inventarioProductos" aria-label="Close"></a>
            </div>
            <div class="modal-body">
            <form id="formsFelysoft" action="<?php?>" method="POST">
                <div class="mb-3">
                    <label for="stockEntrante" class="col-form-label">Stock:</label>
                    <input type="number" class="form-control" id="stockEntrante" name="stockEntrante" id="stockEntrante" required min="1" max="100">
                </div>
                <div class="text-center">
                    <a type="btn" class="btn btn-secondary me-2" href="<?php echo RUTA_URL ?>inventarioProductos">Cerrar</a>
                    <input type="submit" class="btn btn-primary" value="Agregar">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>