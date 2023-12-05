-- GASTOS --*

-- MOSTRAR GASTOS
    DROP procedure IF EXISTS `db_felysoft`.`mostrar_gastos`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_gastos`()
    BEGIN
        SELECT  pkIdGasto,
                fecha,
                monto,
                descripcion,
                total,
                metodoPago
        FROM gastos 
        LEFT JOIN compras ON fkIdCompra = pkIdCompra
        LEFT JOIN pago ON fkIdPago = pkIdPago;
    END$$

-- AGREGAR GASTOS
    DROP procedure IF EXISTS `db_felysoft`.`agregar_gastos`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_gastos`(
    in fechaI datetime,
    in	montoI	decimal(10,0),
    in descripcionI	varchar(320),	
    in totalI int(11),
    in	metodoPagoI	int(11)
    )
    BEGIN
            INSERT INTO gastos (fecha,
                                monto,
                                descripcion,
                                fkIdCompra,
                                fkIdPago
                                )
            VALUES (fechaI, montoI, descripcionI, totalI, metodoPagoI );
                                
    END$$

    DELIMITER ;
    ;

-- AGREGAR GASTO ESPECIFICO 
    DROP procedure IF EXISTS `db_felysoft`.`mostrar_gasto_especifico`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_gasto_especifico`(
        IN id INT(11)
    )
    BEGIN
        SELECT * FROM gastos WHERE pkIdGasto = id;
    END$$

    DELIMITER ;
    ;

-- ACTUALIZAR GASTOS
    DROP procedure IF EXISTS `db_felysoft`.`actualizarR_gastos`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarR_gastos`(
    in id int(11),
    in fechaU datetime,
    in	montoU	decimal(10,0),
    in descripcionU	varchar(320),	
    in totalU int(11),
    in	metodoPagoU	int(11)
    )
    BEGIN
    UPDATE gastos	SET fecha = fechaU,
                        monto = montoU,
                        descripcion = descripcionU,
                        fkIdCompra = totalU,
                        fkIdPago = metodoPagoU
    WHERE pkIdGasto = id;	
    END$$

    DELIMITER ;
    ;

-- ELIMINAR GASTOS
    DROP procedure IF EXISTS `db_felysoft`.`borrar_Hgastos`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_Hgastos`(
    in id int(11)
    )
    BEGIN
        DELETE FROM gastos WHERE pkIdGasto = id;
    END$$

    DELIMITER ;
    ;