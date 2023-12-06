-- Mostrar tiposervicios

DROP procedure IF EXISTS `mostrar_tiposervicios`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `mostrar_tiposervicios` ()
BEGIN
	SELECT * FROM tiposervicio;
END$$

DELIMITER ;


-- Mostrar tiposervicio especifico


DROP procedure IF EXISTS `mostrar_tiposervicio_especifico`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_tiposervicio_especifico`(
in id int(11)
)
BEGIN
	SELECT * FROM tiposervicio WHERE idTipoServicio = id;
END$$

DELIMITER ;


-- Mostrar tiposervicio excepto


DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `mostrar_tiposervicio_excepto` (
in id int(11)
)
BEGIN
	SELECT * FROM tiposervicio WHERE idTipoServicio != id;
END$$

DELIMITER ;


-- Agregar tiposervicios

DROP procedure IF EXISTS `agregar_tiposervicio`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_tiposervicio`(
in nombreTS varchar(45),
in descripcionTS varchar(540),
in precioTS decimal (10,0)
)
BEGIN
INSERT INTO tiposervicio (nombre, descripcion, precio) VALUES (nombreTS, descripcionTS, precioTS);
END$$

DELIMITER ;


-- Actualizar tiposervicio

DROP procedure IF EXISTS `actualizar_tiposervicio`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `actualizar_tiposervicio` (
in id int(11),
in nombreTS varchar(45),
in descripcionTS varchar(540),
in precioTS decimal (10,0)
)
BEGIN
	UPDATE tiposervicio SET nombre = nombreTS, descripcion = descripcionTS, precio = precioTS WHERE idTipoServicio = id;
END$$

DELIMITER ;


-- Borrar tiposervicio

DROP procedure IF EXISTS `borrar_tiposervicio`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `borrar_tiposervicio` (
id int(11)
)
BEGIN
	DELETE FROM tiposervicio WHERE idTipoServicio = id;
END$$

DELIMITER ;
