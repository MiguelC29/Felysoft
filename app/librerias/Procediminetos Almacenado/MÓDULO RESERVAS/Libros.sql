--MOSTRAR LIBROS
DROP procedure IF EXISTS `mostrar_libros`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_libros`()
BEGIN
    SELECT  l.pkIdLibro,
            l.titulo,
            l.editorial,
            l.descripcion,
            l.anioPublicacion,
            l.precioHora,
            a.nombre AS nombre_autor,
            g.nombre AS nombre_genero
    FROM libros l
    INNER JOIN autores a ON l.fkIdAutor = a.pkIdAutor
    INNER JOIN genero g ON l.fkIdGenero = g.pkIdGenero;
END$$

DELIMITER ;
--AGREGAR LIBROS
DROP procedure IF EXISTS `agregar_libros`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_libros`(IN `tituloI` VARCHAR(320), IN `editorialI` VARCHAR(320), IN `descripcionI` VARCHAR(320), IN `anioPublicacionI` SMALLINT(6), IN `precioHoraI` DECIMAL(10,0), IN `nombreAI` INT(11), IN `nombreGI` INT(11))
BEGIN
		INSERT INTO libros (titulo,
							editorial,
							descripcion,
							anioPublicacion,
							precioHora,
                            fkIdAutor,
                            fkIdGenero
                            )
		VALUES (tituloI, editorialI, descripcionI, anioPublicacionI, precioHoraI, nombreAI, nombreGI);
END$$

DELIMITER ;

--MOSTRAR LIBRO ESPECIFICO
    DROP procedure IF EXISTS `mostrar_libro_especifico`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_libro_especifico`(IN `id` INT(11))
    BEGIN
        SELECT * FROM libros WHERE pkIdLibro = id;
    END$$

    DELIMITER ;
    --ACTUALIZAR LIBROS
        DROP procedure IF EXISTS `actualizar_libros`;

        DELIMITER $$
        USE `db_felysoft`$$
        CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_libros`(IN `id` INT(11), IN `tituloU` VARCHAR(45), IN `editorialU` VARCHAR(45), IN `descripcionU` DECIMAL(10,0), IN `anioPublicacionU` DATE,`precioHoraU` DECIMAL(10,0), IN `fkIdAutor` INT(11), IN `fkIdGenero` INT(11))
        BEGIN
        UPDATE libros SET 
                            titulo = tituloU,
                            editorial = editorialU,
                            descripcion = descripcionU,
                            anioPublicacion = anioPublicacionU,
                            precioHora = precioHoraU,
                            fkIdAutor = fkIdAutor,
                            fkIdGenero = fkIdGenero
        WHERE pkIdLibro = id;	
        END$$

        DELIMITER ;
        --BORRAR LIBROS
        DROP procedure IF EXISTS `borrar_libros`;

        DELIMITER $$
        USE `db_felysoft`$$
        CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_libros`(IN `id` INT(11))
        BEGIN
            DELETE FROM libros WHERE pkIdLibro = id;
        END$$

        DELIMITER ;