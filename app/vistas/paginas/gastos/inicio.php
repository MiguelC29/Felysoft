<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="gastos/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL?>" class="btn btn-primary">Volver</a>
<form class="w-100 me-3" role="search" method="post">
    <input id="buscar" name="buscar" type="search" class="form-control" placeholder="Buscar gastos..." aria-label="Search">
</form>
<a href="gastos" type="button" class="btn btn-primary py-2 px-3 mb-4 mx-2">Mostrar todos los gastos</a>
<table class="table text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Descripción</th>
            <th>Compra (Total)</th>
            <th>Pago (Método)</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($datos['gastos'] as $gasto) : ?>
        <tr>
            <td><?php echo $gasto->pkIdGasto; ?></td>
            <td><?php echo $gasto->fecha; ?></td>
            <td><?php echo $gasto->monto; ?></td>
            <td><?php echo $gasto->descripcion; ?></td>
            <td><?php echo $gasto->compra; ?></td>
            <td><?php echo $gasto->pago; ?></td>
            <td>
                <a href="<?php echo RUTA_URL; ?>gastos/editar/<?php echo $gasto->pkIdGasto; ?>" class="btn btn-warning">Editar</a>
                <a href="<?php echo RUTA_URL; ?>gastos/borrar/<?php echo $gasto->pkIdGasto; ?>" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>