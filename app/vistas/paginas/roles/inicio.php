<?php require RUTA_APP . '/vistas/inc/header.php';?>
<?php require RUTA_APP . '/vistas/inc/sidebar.php'; ?>
<?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>

    <h1 class="text-white text-center mt-2">LISTADO DE ROLES</h1>
    <div class="my-2">
        <a href="roles/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['roles'] as $rol) : ?>
                        <tr>
                            <td><?php echo $rol->pkIdRol; ?></td>
                            <td><?php echo $rol->nombre; ?></td>
                            <td>
                                <a href="<?php echo RUTA_URL; ?>roles/editar/<?php echo $rol->pkIdRol; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?php echo RUTA_URL; ?>roles/borrar/<?php echo $rol->pkIdRol; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>