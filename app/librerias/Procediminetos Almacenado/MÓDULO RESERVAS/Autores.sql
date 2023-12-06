-- MOSTRAR Autores
    DROP procedure IF EXISTS `mostrar_autores`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_autores`()
    BEGIN
        SELECT  *
        FROM autores;
    END$$

    DELIMITER ;

    -- AGREGAR AUTORES
    DROP procedure IF EXISTS `agregar_autores`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_autores`(IN `nombreI` VARCHAR(320), IN `nacionalidadI` VARCHAR(45), IN `fechaNacimI` DATE, IN `biografiaI` VARCHAR(540))
    BEGIN
            INSERT INTO autores (nombre,
                                nacionalidad,
                                fechaNacim,
                                biografia
                                )
            VALUES (nombreI, nacionalidadI, fechaNacimI, biografiaI);
                                
    END$$

    DELIMITER ;
-- AGREGAR AUTOR ESPECIFICO
    DROP procedure IF EXISTS `mostrar_autor_especifico`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_autor_especifico`(IN `id` INT(11))
    BEGIN
        SELECT * FROM autores WHERE pkIdAutor = id;
    END$$

    DELIMITER ;

--ACTUALIZAR AUTORES
DROP procedure IF EXISTS `actualizar_autores`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_autores`(IN `id` INT(11), IN `nombreU` VARCHAR(320), `nacionalidadU` VARCHAR(45),`fechaNacimU` DATE ,`biografiaU` VARCHAR(540))
BEGIN
UPDATE autores	SET nombre = nombreU , nacionalidad = nacionalidadU , fechaNacim = fechaNacimU , biografia = biografiaU
WHERE pkIdAutor = id;	
END$$

DELIMITER ;

--BORRAR AUTORES
DROP procedure IF EXISTS `borrar_autores`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_autores`(IN `id` INT(11))
BEGIN
	DELETE FROM autores WHERE pkIdAutor = id;

END$$

DELIMITER ;