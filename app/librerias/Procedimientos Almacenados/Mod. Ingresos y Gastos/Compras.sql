-- COMPRAS -- 

-- MOSTRAR COMPRAS 
    DROP procedure IF EXISTS `db_felysoft`.`mostrar_compras`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_compras`()
    BEGIN
        SELECT * FROM compras;
    END$$

    DELIMITER ;
    ;

-- MOSTRAR UNA COMPRA ESPECÍFICA
    DROP procedure IF EXISTS `db_felysoft`.`mostrar_compra_especifica`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_compra_especifica`(
        IN id INT(11)
    )
    BEGIN
        SELECT * FROM compras WHERE pkIdCompra = id;
    END$$

    DELIMITER ;
    ;

-- AGREGAR COMPRAS
    DROP procedure IF EXISTS `db_felysoft`.`agregar_compras`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_compras`(
    in fechaI datetime,	
    in totalI int(11)
    )
    BEGIN
            INSERT INTO compras (fecha,
                                total
                                )
            VALUES (fechaI, totalI );
                                
    END$$

    DELIMITER ;
    ;

-- ACTUALIZAR COMPRAS 
    DROP procedure IF EXISTS `db_felysoft`.`actualizar_compras`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_compras`(
    in id int(11),
    in fechaCompraU datetime,
    in totalU int(11)
    )
    BEGIN
    UPDATE compras	SET fechaCompra = fechaCompraU,
                        total = totalU
    WHERE pkIdCompra = id;	


    END$$

-- BORRAR COMPRAS
    DROP procedure IF EXISTS `db_felysoft`.`borrar_compras`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_compras`(
    in id int(11)
    )
    BEGIN
        DELETE FROM compras WHERE pkIdCompra = id;
    END$$

    DELIMITER ;
    ;