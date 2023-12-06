-- CATEGORIAS --*

-- MOSTRAR CATEGORIAS
    DROP procedure IF EXISTS `mostrar_categorias`;

    USE `db_felysoft`;
    DROP procedure IF EXISTS `db_felysoft`.`mostrar_categorias`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_categorias`()
    BEGIN
        SELECT  pkIdCategoria,
                nombre
        FROM categoria;
    END$$

    DELIMITER ;
    ;

-- AGREGAR CATEGORIAS 
    DROP procedure IF EXISTS `agregar_categorias`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_categorias`(
    in nombreI varchar(45)
    )
    BEGIN
            INSERT INTO categoria (nombre)
            VALUES (nombreI);
    END$$

    DELIMITER ;

-- AGREGAR CATEGORIA ESPECIFICA
    DROP procedure IF EXISTS `mostrar_categoria_especifica`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_categoria_especifica`(
        IN id INT(11)
    )
    BEGIN
        SELECT * FROM categoria WHERE pkIdCategoria = id;
    END$$

    DELIMITER ;

-- ACTUALIZAR CATEGORIAS
    DROP procedure IF EXISTS `actualizar_categorias`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_categorias`(
    in id int(11),
    in nombreU varchar(45)
    )
    BEGIN
    UPDATE categoria	SET nombre = nombreU
    WHERE pkIdCategoria = id;	
    END$$

    DELIMITER ;

-- BORRAR CATEGORIAS
    DROP procedure IF EXISTS `borrar_categorias`;

    USE `db_felysoft`;
    DROP procedure IF EXISTS `db_felysoft`.`borrar_categorias`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_categorias`(
    in id int(11)
    )
    BEGIN
        DELETE FROM categoria WHERE pkIdCategoria = id;

    END$$

    DELIMITER ;
    ;