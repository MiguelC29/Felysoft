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



--ACTUALIZAR STOCK
DROP procedure IF EXISTS `actualizar_stock`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `actualizar_stock` ()
BEGIN
SELECT stock FROM inventario 
WHERE fkIdProducto = id;
END$$

DELIMITER ;




