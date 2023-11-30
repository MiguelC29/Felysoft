<?php require RUTA_APP . '/vistas/inc/header.php';?>
<a href="libros/agregar" class="btn btn-primary">Insertar</a>
<a href="<?php echo RUTA_URL?>" class="btn btn-primary">Volver</a>
<form class="w-100 me-3" role="search" method="post">
    <input id="buscar" name="buscar" type="search" class="form-control" placeholder="Buscar Libros..." aria-label="Search">
</form>
<a href="libros" type="button" class="btn btn-primary py-2 px-3 mb-4 mx-2">Mostrar todos los Libros</a>
<table class="table text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Editorial</th>
            <th>Descripcion</th>
            <th>Año de Publicacion</th>
            <th>Precio Por Hora</th>
            <th>Autor</th>
            <th>Genero</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php $contador = 0;
    foreach($datos['libros'] as $libro) : ?>
        <tr>
            <td><?php echo $libro->pkIdLibro; ?></td>
            <td><?php echo $libro->titulo; ?></td>
            <td><?php echo $libro->editorial; ?></td>
            <td><?php echo $libro->descripcion; ?></td>
            <td><?php echo $libro->anioPublicacion; ?></td>
            <td><?php echo $libro->precioHora; ?></td>
            <td><?php echo $libro->autor; ?></td>
            <td><?php echo $libro->genero; ?></td>
            <td>
                <a href="<?php echo RUTA_URL; ?>libros/editar/<?php echo $libro->pkIdLibro; ?>" class="btn btn-warning">Editar</a>
                <a href="<?php echo RUTA_URL; ?>libros/borrar/<?php echo $libro->pkIdLibro; ?>" class="btn btn-danger">Borrar</a>
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