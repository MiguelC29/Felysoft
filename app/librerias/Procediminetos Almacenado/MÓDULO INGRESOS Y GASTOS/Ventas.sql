-- VENTAS --*

--MOSTRAR VENTAS
DROP procedure IF EXISTS `mostrar_ventas`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `mostrar_ventas` ()
BEGIN
SELECT * FROM ventas INNER JOIN pago ON fkIdPago = pkIdPago;
END$$

DELIMITER ;

--AGREGAR VENTAS
DROP procedure IF EXISTS `agregar_ventas`;

USE `db_felysoft`;
DROP procedure IF EXISTS `db_felysoft`.`agregar_ventas`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_ventas`(
in fechaVentaI datetime,
in	subtotalI	decimal(10,0),
in totalI	decimal(10,0),	
in fkIdPagoI int(11)
)
BEGIN
		INSERT INTO ventas (fechaVenta,
							subtotal,
							total,
							fkIdPago
                            )
		VALUES (fechaVentaI, subtotalI, totalI, fkIdPagoI);
						
END$$

DELIMITER ;
;


--MOSTRAR VENTA ESPECIFICA
DROP procedure IF EXISTS `mostrar_venta_especifica`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_venta_especifica`(
    IN id INT(11)
)
BEGIN
    SELECT * FROM ventas WHERE pkIdVenta = id;
END$$

DELIMITER ;


--ACTUALIZAR VENTAS
DROP procedure IF EXISTS `actualizar_ventas`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_ventas`(
in id int(11),
in fechaVentaU datetime,
in	subtotalU	decimal(10,0),
in totalU	varchar(320),	
in	fkIdPagoU	int(11)
)
BEGIN
UPDATE ventas	SET fechaVenta = fechaVentaU,
					subtotal = subtotalU,
					total = totalU,
					fkIdPago = fkIdPagoU
WHERE pkIdVenta = id;	
END$$


--BORRAR VENTAS
DROP procedure IF EXISTS `db_felysoft`.`borrar_ventas`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_ventas`(
in id int(11)
)
BEGIN
	DELETE FROM ventas WHERE pkIdVenta = id;
END$$

DELIMITER ;
;
