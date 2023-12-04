<?php require RUTA_APP . '/vistas/inc/header.php';?>
<div class="my-2">
    <a href="proveedores/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table id="TablesFelysoft" class="table table-hover table-bordered text-center">
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
                            <a href="<?php echo RUTA_URL; ?>proveedores/editar/<?php echo $proveedor->pkIdProveedores; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?php echo RUTA_URL; ?>proveedores/borrar/<?php echo $proveedor->pkIdProveedores; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>