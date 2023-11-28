<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="pagos/agregar">Insertar</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Método de pago</th>
            <th>Estado</th>
            <th>Fecha de pago</th>
            <th>Valor de pago</th>
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


            <td><a href="<?php echo RUTA_URL; ?>pagos/editar/<?php echo $pago->pkIdPago; ?>">Editar</a></td>
            <td><a href="<?php echo RUTA_URL; ?>pagos/borrar/<?php echo $pago->pkIdPago; ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>