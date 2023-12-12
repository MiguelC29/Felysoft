<?php require RUTA_APP . '/vistas/inc/header.php';?>
<h1 class="text-white text-center mt-2">LISTADO DE RESERVAS</h1>
    <div class="my-2">
        <a href="reservas/agregar"><i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="TablesFelysoft" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha Reserva</th>
                            <th>Descripcion</th>
                            <th>Abono</th>
                            <th>Tiempo de Reserva</th>
                            <th>Libro Elegido</th>
                            <th>Cliente</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['reservas'] as $reserva) : ?>
                        <tr>
                            <td><?php echo $reserva->pkIdReserva; ?></td>
                            <td><?php echo $reserva->fechaReserva; ?></td>
                            <td><?php echo $reserva->descripcion; ?></td>
                            <td><?php echo $reserva->abono; ?></td>
                            <td><?php echo $reserva->tiempo; ?></td>
                            <td><?php echo $reserva->Libro; ?></td>
                            <td><?php echo $reserva->Cliente; ?></td> 
                            <td>
                                <a href="<?php echo RUTA_URL; ?>reservas/editar/<?php echo $reserva->pkIdReserva; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?php echo RUTA_URL; ?>reservas/borrar/<?php echo $reserva->pkIdReserva; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require RUTA_APP . '/vistas/inc/footer.php';?>