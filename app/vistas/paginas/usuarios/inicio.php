<?php require RUTA_APP . '/vistas/inc/header.php'; ?>

<h1 class="text-white text-center mt-2">LISTADO DE USUARIOS</h1>
    <div class="my-2">
        <a href="usuarios/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tipo Documento</th>
                            <th>Identificación</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Foto Perfil</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Género</th>
                            <!-- <th>Rol</th> -->
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos['usuarios'] as $usuario) : ?>
                            <tr>
                                <td><?php echo $usuario->tipoDocu; ?></td>
                                <td><?php echo $usuario->pkIdIdentificacion; ?></td>
                                <td><?php echo $usuario->nombres; ?></td>
                                <td><?php echo $usuario->apellidos; ?></td>
                                <?php if ($usuario->imagen == null) { ?>
                                <td><img width = "100px" height = "100px" src="https://i.postimg.cc/HLH1VGmw/user.png" alt=""></td>
                                <?php
                                    } else {
                                ?>
                                    <td><img width = "100px" height = "100px" src="data:<?php echo $usuario->tipoImg?>;base64,<?php echo base64_encode($usuario->imagen)?>"></td>
                                <?php
                                    }
                                ?>
                                <td><?php echo $usuario->direccion; ?></td>
                                <td><?php echo $usuario->telefono; ?></td>
                                <td><?php echo $usuario->email; ?></td>
                                <td><?php echo $usuario->genero; ?></td>
                                <!-- <td><?php echo $usuario->usuario; ?></td>
                                <td><?php echo $usuario->contrasena; ?></td>
                                <td><?php echo $usuario->nombre; ?></td> -->
                                <td>
                                    <a href="<?php echo RUTA_URL; ?>usuarios/editar/<?php echo $usuario->pkIdIdentificacion; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?php echo RUTA_URL; ?>usuarios/borrar/<?php echo $usuario->pkIdIdentificacion; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>