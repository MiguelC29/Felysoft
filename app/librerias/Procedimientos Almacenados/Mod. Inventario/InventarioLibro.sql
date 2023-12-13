-- AGREGAR LIBRO Y A SU VEZ EN EL INVENTARIO
DROP procedure IF EXISTS `insertar_libro_inve`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_libro_inve`(
in titulo varchar(45),
in editorial varchar(45),
in descripcion varchar(45),
in anioPublicacion smallint(6),
in precioHora decimal(10,0),
in idautor int,
in idgenero int,
in stock int,
in estado  varchar(45)
)
begin
insert into libros  (titulo, editorial, descripcion, anioPublicacion, precioHora, fkIdAutor, fkIdGenero)
values(titulo, editorial, descripcion, anioPublicacion, precioHora, idautor, idgenero);

insert into inventario (stock , tipoInventario, fkIdLibro, estado)
values(1,"Libro Digital",(select max(pkIdLibro) from libros), estado);
end$$

DELIMITER ;


-- CONSULTAR TIPO DE INVENTARIO
DROP procedure IF EXISTS `consultarTipoInv`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=root@localhost PROCEDURE consultarTipoInv(in tipoInv VARCHAR(30))
BEGIN
IF tipoInv = "Producto" THEN
    SELECT pkIdProducto, imagen, tipoImg, nombre, marca, precioVenta, fechaVencimiento, stock 
    FROM inventario 
    INNER JOIN productos ON fkIdProducto = pkIdProducto;
END IF;
IF tipoInv = "Libro Digital" THEN
    SELECT  pkIdLibro,
            titulo,
            editorial,
            precioHora,
            a.nombre AS autor,
            g.nombre AS genero,
            estado
    FROM inventario
    INNER JOIN libros ON fkIdLibro = pkIdLibro
    INNER JOIN autores a ON libros.fkIdAutor = a.pkIdAutor
    INNER JOIN genero g ON libros.fkIdGenero = g.pkIdGenero;
    END IF;
END$$

DELIMITER ;


-- CONSULTAR ESTADO
DROP procedure IF EXISTS `consultar_estado`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=root@localhost PROCEDURE consultar_estado(IN id INT(11))
BEGIN
SELECT estado FROM inventario 
WHERE fkIdLibro = id;
END$$

DELIMITER ;

