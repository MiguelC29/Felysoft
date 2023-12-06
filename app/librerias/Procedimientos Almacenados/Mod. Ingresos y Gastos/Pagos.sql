--PAGOS--*

--MOSTRAR PAGOS
DROP procedure IF EXISTS `mostrar_pagos`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `mostrar_pagos` ()
BEGIN
SELECT * FROM pago;
END$$

DELIMITER ;

--AGREGAR PAGOS
DROP procedure IF EXISTS `agregar_pagos`;

USE `db_felysoft`;
DROP procedure IF EXISTS `db_felysoft`.`agregar_pagos`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_pagos`(
in metodoPagoI varchar(45),
in	estadoI	varchar(45),
in fechaPagoI	datetime,	
in valorPagoi decimal(10,0)
)
BEGIN
		INSERT INTO pago (metodoPago,
							estado,
							fechaPago,
							valorPago
                            )
		 VALUES (metodoPagoI, estadoI, fechaPagoI, valorPagoI);
END$$

DELIMITER ;
;

--MOSTRAR PAGO ESPECIFICO
DROP procedure IF EXISTS `mostrar_pago_especifico`;

USE `db_felysoft`;
DROP procedure IF EXISTS `db_felysoft`.`mostrar_pago_especifico`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_pago_especifico`(
    IN id INT(11))
BEGIN
SELECT * FROM pago WHERE pkIdPago = id;
END$$

DELIMITER ;
;


--MOSTRAR PAGOS EXCEPTO
DROP procedure IF EXISTS `mostrar_pagos_excepto`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `mostrar_pagos_excepto` ()
BEGIN
SELECT * FROM pago WHERE pkIdPago != id;
END$$

DELIMITER ;


--ACTUALIZAR  PAGOS
DROP procedure IF EXISTS `actualizar_pagos`;

USE `db_felysoft`;
DROP procedure IF EXISTS `db_felysoft`.`actualizar_pagos`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_pagos`(
in id int(11),
in metodoPagoU varchar(45),
in	estadoU	varchar(45),
in fechaPagoU	date,	
in valorPagoU decimal(10,0)
)
BEGIN
UPDATE pago	SET metodoPago = metodoPagoU,
					estado = estadoU,
					fechaPago = fechaPagoU,
					valorPago = valorPagoU
WHERE pkIdPago = id;	
END$$

DELIMITER ;
;

DELIMITER ;

--BORRAR PAGOS
DROP procedure IF EXISTS `borrar_pagos`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `borrar_pagos` ()
BEGIN
	DELETE FROM pago WHERE pkIdPago = id;
END$$

DELIMITER ;

