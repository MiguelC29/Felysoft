--MOSTRAR GENEROS
DROP procedure IF EXISTS `mostrar_generos`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_generos`()
BEGIN
    SELECT  *
    FROM genero;
END$$

DELIMITER ;
--MOSTRAR GENERO ESPECIFICO
DROP procedure IF EXISTS `mostrar_genero_especifico`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_genero_especifico`(IN `id` INT(11))
BEGIN
    SELECT * FROM genero WHERE pkIdGenero = id;
END$$

DELIMITER ;

--AGREGAR GENERO
DROP procedure IF EXISTS `agregar_genero`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_genero`(IN `nombreI` VARCHAR(45), IN `descripcionI` VARCHAR(320))
BEGIN
		INSERT INTO genero (nombre,
							descripcion
                            )
		VALUES (nombreI, descripcionI);
							
END$$

DELIMITER ;

--ACTUALIZAR GENEROS
DROP procedure IF EXISTS `actualizar_generos`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_generos`(IN `id` INT(11), IN `nombreU` VARCHAR(320), `descripcionU` VARCHAR(320))
BEGIN
UPDATE genero SET nombre = nombreU , descripcion = descripcionU
WHERE pkIdGenero = id;	
END$$

DELIMITER ;
--BORRAR GENERO
DROP procedure IF EXISTS `borrar_generos`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_generos`(IN `id` INT(11))
BEGIN
	DELETE FROM genero WHERE pkIdGenero = id;

END$$

DELIMITER ;
