-- USUARIOS

-- MOSTRAR USUARIOS
DROP procedure IF EXISTS `mostrar_usuarios`;

DELIMITER $$
USE `db_felysoft`$$
CREATE PROCEDURE `mostrar_usuarios` ()
BEGIN

SELECT * FROM usuarios;

END$$

DELIMITER ;

-- AGREGAR USUARIOS
DROP procedure IF EXISTS `db_felysoft`.`agregar_usuarios`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_usuarios`(
in identificacion int(11),
in tipoDocu	varchar(20),
in nombres	varchar(45),
in apellidos	varchar(45),
in direccion	varchar(45),
in telefono	bigint(20),
in email	varchar(320),
in genero	char(1),
in usuario	varchar(45),
in contrasena	varchar(45),
in fkIdRol	int(11)
)
BEGIN
INSERT INTO usuarios (pkIdIdentificacion, tipoDocu, nombres, apellidos, direccion, telefono, email, genero, usuario, contrasena, fkIdRol)

VALUES (
identificacion,
tipoDocu,
nombres,
apellidos,
direccion,
telefono,
email,
genero,
usuario,
contrasena,
fkIdRol );
END$$

DELIMITER ;
;

-- MOSTRAR USUARIO ESPECIFICO
DROP procedure IF EXISTS `mostrar_usuario_especifico`;

USE `db_felysoft`;
DROP procedure IF EXISTS `db_felysoft`.`mostrar_usuario_especifico`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_usuario_especifico`(IN id	bigint(20))
BEGIN
    SELECT * FROM usuarios WHERE pkIdIdentificacion = id;
END$$

DELIMITER ;
;



-- ACTUALIZAR USUARIOS
DROP procedure IF EXISTS `actualizar_usuarios`;

USE `db_felysoft`;
DROP procedure IF EXISTS `db_felysoft`.`actualizar_usuarios`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_usuarios`(
IN id	bigint(20),
IN tipoDocu	varchar(20),
IN nombres	varchar(45),
IN apellidos	varchar(45),
direccion	varchar(45),
telefono	bigint(20),
email	varchar(320),
genero	char(1),
usuario	varchar(45),
contrasena	varchar(45),
fkIdRol	int(11)
)
BEGIN
UPDATE usuarios	SET 
pkIdIdentificacion = id,
tipoDocu = tipoDocu,
nombres =  nombres,
apellidos = apellidos,
direccion = direccion,
telefono = telefono,
email = email,
genero = genero,
usuario = usuario,
contrasena =  contrasena,
fkIdRol = fkIdRol
WHERE pkIdIdentificacion = id;	
END$$

DELIMITER ;
;

--BORRAR USUARIOS
DROP procedure IF EXISTS `borrar_usuarios`;

USE `db_felysoft`;
DROP procedure IF EXISTS `db_felysoft`.`borrar_usuarios`;
;

DELIMITER $$
USE `db_felysoft`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar_usuarios`(
IN `id` INT(11)
)
BEGIN
	DELETE FROM usuarios WHERE pkIdIdentificacion = id;

END$$

DELIMITER ;
;