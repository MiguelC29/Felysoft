<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="pagos/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL?>" class="btn btn-primary">Volver</a>
<table class="table text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Método de pago</th>
            <th>Estado</th>
            <th>Fecha de pago</th>
            <th>Valor de pago</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($datos['pagos'] as $pago) : ?>
        <tr>
            <td><?php echo $pago->pkIdPago; ?></td>
            <td><?php echo $pago->metodoPago; ?></td>
            <td><?php echo $pago->estado; ?></td>
            <td><?php echo $pago->fechaPago; ?></td>
            <td><?php echo $pago->valorPago; ?></td>
            <td>
                <a href="<?php echo RUTA_URL; ?>pagos/editar/<?php echo $pago->pkIdPago; ?>" class="btn btn-warning">Editar</a>
                <a href="<?php echo RUTA_URL; ?>pagos/borrar/<?php echo $pago->pkIdPago; ?>" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>