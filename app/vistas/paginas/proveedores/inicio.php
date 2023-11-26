<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="proveedores/agregar" class="btn btn-primary">Insertar</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>NIT</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($datos['proveedores'] as $proveedor) : ?>
        <tr>
            <td><?php echo $proveedor->pkIdProveedores; ?></td>
            <td><?php echo $proveedor->nit; ?></td>
            <td><?php echo $proveedor->nombre; ?></td>
            <td><?php echo $proveedor->telefono; ?></td>
            <td><?php echo $proveedor->email; ?></td>
            <td>
                <a href="<?php echo RUTA_URL; ?>proveedores/editar/<?php echo $proveedor->pkIdProveedores; ?>" class="btn btn-warning">Editar</a>
                <a href="<?php echo RUTA_URL; ?>proveedores/borrar/<?php echo $proveedor->pkIdProveedores; ?>" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>