-- Mostrar servicios

DROP procedure IF EXISTS `mostrar_servicios`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `mostrar_servicios` ()
BEGIN
	SELECT pkIdServicio, fechaCreacion, estado, fechaModificacion, precioAdicional, total, nombre AS nombreTipoServicio, descripcion AS descripcionTipoServicio, precio AS precioTipoServicio
				FROM servicios INNER JOIN tiposervicio ON fkIdTipoSer = idTipoServicio
				ORDER BY fechaCreacion, nombre, descripcion;
END$$

DELIMITER ;


-- Agregar servicio

DROP procedure IF EXISTS `agregar_servicio`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `agregar_servicio` (
in estadoS varchar(320),
in fechaCreacionS datetime,
in fechaModificacionS datetime,
in precioAdicionalS decimal,
in totalS decimal(10,0),
in fkIdTipoSerS int(11)
)
BEGIN
	INSERT INTO servicios (estado, fechaCreacion, fechaModificacion, precioAdicional, total, fkIdTipoSer) VALUES (estadoS, fechaCreacionS, fechaModificacionS, precioAdicionalS, totalS, fkIdTipoSerS);
END$$

DELIMITER ;


-- Mostrar servicio especifico

DROP procedure IF EXISTS `mostrar_servicio_especifico`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `mostrar_servicio_especifico` (
in idS int(11)
)
BEGIN
	SELECT * FROM servicios WHERE pkIdServicio = idS;
END$$

DELIMITER ;


-- Mostrar servicio excepto

DROP procedure IF EXISTS `mostrar_servicio_excepto`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `mostrar_servicio_excepto` (
in id int(11)
)
BEGIN
	SELECT * FROM servicios WHERE pkIdServicio != id ORDER BY fechaCreacion;
END$$

DELIMITER ;


-- Editar servicio

DROP procedure IF EXISTS `actualizar_servicio`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_servicio`(
    IN idS INT(11),
    IN estadoS VARCHAR(320),
    IN fechaModificacionS DATETIME
)
BEGIN
    UPDATE servicios SET estado = estadoS, fechaModificacion = fechaModificacionS WHERE pkIdServicio = idS;
END$$

DELIMITER ;


-- Borrar servicio

DROP procedure IF EXISTS `borrar_servicio`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `borrar_servicio` (
in idS int(11)
)
BEGIN
	DELETE FROM servicios WHERE pkIdServicio = idS;
END$$

DELIMITER ;