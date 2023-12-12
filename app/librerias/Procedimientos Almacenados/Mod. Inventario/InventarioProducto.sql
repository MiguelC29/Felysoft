-- INVENTARIO -- (REVISAR BIEN ESTAA PARTE)

--MOSTRAR INVENTARIO
DROP procedure IF EXISTS `mostrar_inventario_Productos`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_inventario_Productos`()
BEGIN
    SELECT pkIdProducto, imagen, tipoImg, nombre, marca, precioVenta, fechaVencimiento, stock 
    FROM inventario 
    INNER JOIN productos ON fkIdProducto = pkIdProducto 
    WHERE tipoInventario= "Producto";
END$$

DELIMITER ;



--CONSULTAR STOCK
DROP procedure IF EXISTS `db_felysoft`.`consultar_stock`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_stock`(
in id int(11)
)
BEGIN
SELECT stock FROM inventario 
WHERE fkIdProducto = id;
END$$

DELIMITER ;

--ACTUALIZAR STOCK
DROP procedure IF EXISTS `actualizar_stock`;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_stock`(
in id int(11),
in stockU int(11)
)
BEGIN
UPDATE inventario SET stock = stockU WHERE fkIdProducto = id;
END$$

DELIMITER ;


-- AGREGAR PRODUCTO Y A SU VEZ EN EL INVENTARIO
DROP procedure IF EXISTS `db_felysoft`.`insertar_pAro_inve`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_pro_inve`(
in imagen blob,
in nomProduc varchar(45),
in marca varchar(45),
in precioVenta DECIMAL(10,0),
in fechaVenci date,
in idcategoria int,
in idproveedor int,
in stock int,
in tipoImg varchar(45)
)
begin
insert into productos  (imagen, nombre, marca, precioVenta, fechaVencimiento, fkIdCategoria, fkIdProveedor, tipoImg )
values(imagen,nomProduc,marca,precioVenta,fechaVenci,idcategoria,idproveedor, tipoImg);

insert into inventario (stock, tipoInventario, fkIdProducto )
values(stock,"Producto",(select max(pkIdProducto) from productos));
end$$

DELIMITER ;
;