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