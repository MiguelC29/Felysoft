<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="compras/agregar">Insertar</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Fecha de Compra</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($datos['compras'] as $compra) : ?>
        <tr>
            <td><?php echo $compra->pkIdCompra; ?></td>
            <td><?php echo $compra->fechaCompra; ?></td>
            <td><?php echo $compra->total; ?></td>

            <td><a href="<?php echo RUTA_URL; ?>compras/editar/<?php echo $compra->pkIdCompra; ?>">Editar</a></td>
            <td><a href="<?php echo RUTA_URL; ?>compras/borrar/<?php echo $compra->pkIdCompra; ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>