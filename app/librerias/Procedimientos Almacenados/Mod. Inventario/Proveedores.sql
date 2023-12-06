-- PROVEEDORES --*

-- MOSTRAR PROVEEDORES 
    DROP procedure IF EXISTS `mostrar_proveedores`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_proveedores`()
    BEGIN
        SELECT  *
        FROM proveedores;
    END$$

    DELIMITER ;

-- AGREGAR PROVEEDORES 
    DROP procedure IF EXISTS `agregar_proveedores`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_proveedores`(
    in nitI	varchar(320),
    in	nombreI	varchar(320),
    in telefonoI bigint(20),	
    in emailI varchar(320)
    )
    BEGIN
            INSERT INTO proveedores (nit,
                                nombre,
                                telefono,
                                email
                                )
            VALUES (nitI, nombreI, telefonoI, emailI);
    END$$

    DELIMITER ;

-- AGREGAR PROVEEDOR ESPECIFICO
    DROP procedure IF EXISTS `mostrar_proveedor_especifico`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_proveedor_especifico`(
        IN id INT(11)
    )
    BEGIN
        SELECT * FROM proveedores WHERE pkIdProveedores = id;
    END$$

    DELIMITER ;

-- ACTUALIZAR PROVEEDORES
    DROP procedure IF EXISTS `actualizar_proveedores`;

    USE `db_felysoft`;
    DROP procedure IF EXISTS `db_felysoft`.`actualizar_proveedores`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_proveedores`(
    in id int(11),
    in nitU varchar(320),
    in	nombreU	varchar(320),
    in telefonoU	bigint(20),	
    in emailU varchar(320)
    )
    BEGIN
    UPDATE proveedores	SET nit = nitU,
                        nombre = nombreU,
                        telefono = telefonoU,
                        email = emailU
    WHERE pkIdProveedores = id;	
    END$$

    DELIMITER ;
    ;