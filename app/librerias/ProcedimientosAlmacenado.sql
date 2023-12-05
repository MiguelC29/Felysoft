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



-- PRODUCTOS --*

-- MOSTRAR PRODUCTOS
    DROP procedure IF EXISTS `db_felysoft`.`mostrar_productos`;
    ;

    DELIMITER $$
    USE `db_felysoft`$$
    CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_productoss`()
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
        SELECT * FROM proveedores WHERE pkIdProveedor = id;
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

-- 

