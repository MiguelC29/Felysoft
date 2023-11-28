<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="productos/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL?>" class="btn btn-primary">Volver</a>
<form class="w-100 me-3" role="search" method="post">
    <input id="buscar" name="buscar" type="search" class="form-control" placeholder="Buscar productos..." aria-label="Search">
</form>
<a href="productos" type="button" class="btn btn-primary py-2 px-3 mb-4 mx-2">Mostrar todos los productos</a>
<table class="table text-center">
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
    <?php $contador = 0;
    foreach($datos['productos'] as $producto) : ?>
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
    <?php
    $contador++;
    endforeach; ?>
    </tbody>
    <?php echo "<p class='text-success ms-2'>$contador resultados encontrados</p>"?>
</table>
<?php if ($contador == 0){echo "<h2 class='text-center text-primary'>No se encontraron resultados de búsqueda</h2>";}?>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>