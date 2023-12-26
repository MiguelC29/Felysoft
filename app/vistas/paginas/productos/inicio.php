<?php require RUTA_APP . '/vistas/inc/header.php';?>
<?php if($_SESSION['rolU'] == 1) {?>
<h1 class="text-white text-center mt-2">LISTADO DE PRODUCTOS</h1>
<div class="my-2">
    <a href="productos/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
</div>
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
                        <td><?php echo $producto->nombre; ?></td>
                        <td><?php echo $producto->marca; ?></td>
                        <td><?php echo $producto->precioVenta; ?></td>
                        <td><?php echo $producto->fechaVencimiento; ?></td>
                        <td><?php echo $producto->nombre_categoria; ?></td>
                        <td><?php echo $producto->nombre_proveedor; ?></td>
                        <td>
                            <a href="<?php echo RUTA_URL; ?>productos/editar/<?php echo $producto->pkIdProducto; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?php echo RUTA_URL; ?>productos/borrar/<?php echo $producto->pkIdProducto; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
} else {?>
<style>.ppal {display: none;}</style>
<?php
    require RUTA_APP . '/vistas/inc/noAcceso.php';
}
?>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>