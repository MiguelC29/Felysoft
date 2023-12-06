-- PRODUCTOS --*

-- MOSTRAR PRODUCTOS
    DROP procedure IF EXISTS `db_felysoft`.`mostrar_productos`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_productos`()
    BEGIN
        SELECT  productos.pkIdProducto,
                productos.nombre,
                productos.marca,
                productos.precioVenta,
                productos.fechaVencimiento,
                categoria.nombre,
                proveedores.nombre,
                productos.imagen, 
                productos.tipoImg
        FROM productos
        INNER JOIN categoria ON productos.fkIdCategoria = categoria.pkIdCategoria
        INNER JOIN proveedores ON productos.fkIdProveedor = proveedores.pkIdProveedores;
    END$$

    DELIMITER ;
    ;

-- AGREGAR PRODUCTOS
    DROP procedure IF EXISTS `db_felysoft`.`mostrar_productos`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_productos`()
    BEGIN
        SELECT  p.pkIdProducto,
                p.nombre,
                p.marca,
                p.precioVenta,
                p.fechaVencimiento,
                c.nombre AS nombre_categoria,
                pr.nombre AS nombre_proveedor,
                p.imagen, 
                p.tipoImg
        FROM productos p
        INNER JOIN categoria c ON p.fkIdCategoria = c.pkIdCategoria
        INNER JOIN proveedores pr ON p.fkIdProveedor = pr.pkIdProveedores;
    END$$

    DELIMITER ;
    ;

-- AGREGAR PRODUCTO ESPECIFICO
    DROP procedure IF EXISTS `mostrar_producto_especifico`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_producto_especifico`(
        IN id INT(11)
    )
    BEGIN
        SELECT * FROM productos WHERE pkIdProducto = id;
    END$$

    DELIMITER ;

-- ACTUALIZAR PRODUCTOS
    DROP procedure IF EXISTS `actualizar_productos`;

    USE `db_felysoft`;
    DROP procedure IF EXISTS `db_felysoft`.`actualizar_productos`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_productos`(
    in id int(11),
    in nombreU varchar(45),
    in marcaU	varchar(45),
    in precioVentaU	decimal(10,0),	
    in fechaVencimientoU date,
    in nombreCU int(11),
    in nombrePU int(11),
    in imagenU blob,
    in tipoImgU varchar(50)
    )
    BEGIN
    UPDATE productos	SET 
                        nombre = nombreU,
                        marca = marcaU,
                        precioVenta = precioVentaU,
                        fechaVencimiento = fechaVencimientoU,
                        fkIdCategoria = nombreCU,
                        fkIdProveedor = nombrePU
    WHERE pkIdProducto = id;	
    END$$

    DELIMITER ;
    ;

-- BORRAR PRODUCTOS
    DROP procedure IF EXISTS `borrar_productos`;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_productos`(
    in id int(11)
    )
    BEGIN
        DELETE FROM productos WHERE pkIdProducto = id;
    END$$

    DELIMITER ;