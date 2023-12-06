-- INGRESOS --*

--MOSTRAR INGRESOS
DROP procedure IF EXISTS `mostrar_ingresos`;

USE `db_felysoft`;
DROP procedure IF EXISTS `db_felysoft`.`mostrar_ingresos`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_ingresos`()
BEGIN
SELECT * FROM ingresos
INNER JOIN ventas ON fkIdVenta = pkIdVenta;
END$$

DELIMITER ;
;


--AGREGAR INGRESOS
DROP procedure IF EXISTS `mostrar_ingresos`;

USE `db_felysoft`;
DROP procedure IF EXISTS `db_felysoft`.`mostrar_ingresos`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_ingresos`()
BEGIN
    SELECT  pkIdIngreso,
            fecha,
            monto,
            fkIdVenta
    FROM ingresos 
    INNER JOIN ventas ON fkIdVenta = pkIdVenta;
END$$

DELIMITER ;
;


--MOSTRAR INGRESO ESPECIFICO
DROP procedure IF EXISTS `db_felysoft`.`mostrar_ingreso_especifico`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_ingreso_especifico`(
    IN id INT(11))
BEGIN
SELECT * FROM ingresos WHERE pkIdIngreso = id;
END$$

DELIMITER ;
;


--ACTUALIZAR INGRESOS
DROP procedure IF EXISTS `actualizar_ingresos`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_ingresos`(
in id int(11),
in fechaU datetime,
in montoU decimal(10,0),
in	fkIdVentaU	int(11)
)
BEGIN
UPDATE ingresos	SET fecha = fechaU,
					monto = montoU,
					fkIdVenta = fkIdVentaU
WHERE pkIdIngreso = id;	
END$$

DELIMITER ;


--BORRAR INGRESOS
DROP procedure IF EXISTS `borrar_ingresos`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_ingresos`(
in id int(11)
)
BEGIN
	DELETE FROM ingresos WHERE pkIdIngreso = id;
END$$

DELIMITER ;
