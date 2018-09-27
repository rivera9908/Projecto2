-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2018 a las 05:35:06
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `cod_auditoria` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_aud` varchar(100) DEFAULT NULL,
  `nom_ing` varchar(45) NOT NULL,
  `descripcion_aud` text NOT NULL,
  `fecha_aud` date DEFAULT NULL,
  PRIMARY KEY (`cod_auditoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`cod_auditoria`, `usuario_aud`, `nom_ing`, `descripcion_aud`, `fecha_aud`) VALUES
(94, 'root@localhost', 'Fresa', 'Se hizo inventario del ingrediente  el dia  " 2018-09-11 "  por el empleado con N.I.  " 333 "  y con tipo de documento  " TI ".  La cantidad ingresada fue  " 10 " ', '2018-09-10'),
(95, 'root@localhost', 'Banano', 'Se hizo inventario del ingrediente  el dia  " 2018-09-11 "  por el empleado con N.I.  " 333 "  y con tipo de documento  " TI ".  La cantidad ingresada fue  " 1 " ', '2018-09-10'),
(96, 'root@localhost', 'Fresa', ' Se modifico la cantidad existente del ingrediente. La cantidad existente anterior de este ingrediente era   " 21  " pero ahora la cantidad existente actual de ingrediente es  "31 " ', '2018-09-10'),
(97, 'root@localhost', 'Banano', ' Se modifico la cantidad existente del ingrediente. La cantidad existente anterior de este ingrediente era   " 69  " pero ahora la cantidad existente actual de ingrediente es  "70 " ', '2018-09-10'),
(98, 'root@localhost', 'Cereza', 'Se hizo inventario del ingrediente  el dia  " 2018-09-05 "  por el empleado con N.I.  " 333 "  y con tipo de documento  " TI ".  La cantidad ingresada fue  " 10 " ', '2018-09-10'),
(99, 'root@localhost', 'Helado', 'Se hizo inventario del ingrediente  el dia  " 2018-09-05 "  por el empleado con N.I.  " 333 "  y con tipo de documento  " TI ".  La cantidad ingresada fue  " 10 " ', '2018-09-10'),
(100, 'root@localhost', 'Banano', 'Se hizo inventario del ingrediente  el dia  " 2018-09-05 "  por el empleado con N.I.  " 333 "  y con tipo de documento  " TI ".  La cantidad ingresada fue  " 5 " ', '2018-09-10'),
(101, 'root@localhost', 'Cereza', ' Se modifico la cantidad existente del ingrediente. La cantidad existente anterior de este ingrediente era   " 65  " pero ahora la cantidad existente actual de ingrediente es  "75 " ', '2018-09-10'),
(102, 'root@localhost', 'Helado', ' Se modifico la cantidad existente del ingrediente. La cantidad existente anterior de este ingrediente era   " 51  " pero ahora la cantidad existente actual de ingrediente es  "61 " ', '2018-09-10'),
(103, 'root@localhost', 'Banano', ' Se modifico la cantidad existente del ingrediente. La cantidad existente anterior de este ingrediente era   " 70  " pero ahora la cantidad existente actual de ingrediente es  "75 " ', '2018-09-10'),
(104, 'root@localhost', 'Banano', 'Se hizo inventario del ingrediente  el dia  " 2018-09-07 "  por el empleado con N.I.  " 333 "  y con tipo de documento  " TI ".  La cantidad ingresada fue  " 5 " ', '2018-09-10'),
(105, 'root@localhost', 'Helado', 'Se hizo inventario del ingrediente  el dia  " 2018-09-07 "  por el empleado con N.I.  " 333 "  y con tipo de documento  " TI ".  La cantidad ingresada fue  " 5 " ', '2018-09-10'),
(106, 'root@localhost', 'Banano', ' Se modifico la cantidad existente del ingrediente. La cantidad existente anterior de este ingrediente era   " 75  " pero ahora la cantidad existente actual de ingrediente es  "80 " ', '2018-09-10'),
(107, 'root@localhost', 'Helado', ' Se modifico la cantidad existente del ingrediente. La cantidad existente anterior de este ingrediente era   " 61  " pero ahora la cantidad existente actual de ingrediente es  "66 " ', '2018-09-10'),
(120, 'root@localhost', 'Fresa', 'Se hizo inventario del ingrediente  el dia  " 2018-08-26 "  --  por el empleado con N.I.  " 333 "  --  con el tipo de documento  " TI "  --  hizo inventario del codigo de ingrediente  " 15 "  --  La cantidad ingresada fue  " 1 " ', '2018-08-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriadelproducto`
--

CREATE TABLE IF NOT EXISTS `categoriadelproducto` (
  `Nom_cat` varchar(45) NOT NULL,
  `estado_cat` tinyint(1) NOT NULL,
  PRIMARY KEY (`Nom_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoriadelproducto`
--

INSERT INTO `categoriadelproducto` (`Nom_cat`, `estado_cat`) VALUES
('Bebidas', 1),
('Ensaladas', 1),
('Postres', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `mensaje` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `usuario`, `fecha`, `mensaje`) VALUES
(1, 'jenifer22', '2018-09-08', 'hola'),
(7, 'andres', '2018-09-10', 'no ha cambiado nada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `idCompra` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_usu` varchar(45) DEFAULT NULL,
  `Nom_pro` varchar(45) DEFAULT NULL,
  `Prec_pro` decimal(10,0) DEFAULT NULL,
  `Cant` int(11) DEFAULT NULL,
  `Total` decimal(10,0) DEFAULT NULL,
  `Producto_cod_producto` int(11) NOT NULL,
  `Usuario_Id_usu` bigint(20) NOT NULL,
  `Usuario_Tipo_doc_Tipo_doc` varchar(15) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`idCompra`),
  KEY `fk_Compra_Usuario1_idx` (`Usuario_Id_usu`,`Usuario_Tipo_doc_Tipo_doc`),
  KEY `fk_Compra_Producto1_idx` (`Producto_cod_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idCompra`, `Nom_usu`, `Nom_pro`, `Prec_pro`, `Cant`, `Total`, `Producto_cod_producto`, `Usuario_Id_usu`, `Usuario_Tipo_doc_Tipo_doc`, `Fecha`) VALUES
(1, 'angie', 'Copa de Helado Grande', '5000', 2, '10000', 4, 9999, 'TI', '2018-09-08'),
(2, 'angie', 'Copa de Helado Grande', '5000', 2, '10000', 4, 9999, 'TI', '2018-09-08'),
(3, 'angie', 'Fresas Con Crema de Leche', '5000', 2, '10000', 3, 9999, 'TI', '2018-09-08'),
(4, 'angie', 'Brownie con Helado', '5000', 1, '5000', 2, 9999, 'TI', '2018-09-08'),
(5, 'angie', 'Copa de Helado Grande', '5000', 2, '10000', 4, 9999, 'TI', '2018-09-07'),
(6, 'angie', 'Fresas Con Crema de Leche', '5000', 2, '10000', 3, 9999, 'TI', '2018-09-07'),
(7, 'angie', 'Brownie con Helado', '5000', 1, '5000', 2, 9999, 'TI', '2018-09-07'),
(8, 'angie', 'Fresas Con Crema de Leche', '5000', 2, '10000', 3, 9999, 'TI', '2018-09-08'),
(9, 'angie', 'Fresas Con Crema de Leche', '5000', 2, '10000', 3, 9999, 'TI', '2018-09-05'),
(13, 'angie', 'Copa de Helado Grande', '5000', 1, '5000', 4, 9999, 'TI', '2018-09-05'),
(14, 'jenifer22', 'Malteada de Mandarina', '4000', 1, '4000', 11, 9908140764, 'TI', '2018-09-05'),
(15, 'jenifer22', 'Fresas Con Crema de Leche', '5000', 1, '5000', 3, 9908140764, 'TI', '2018-09-08'),
(16, 'jenifer22', 'Fresas Con Crema de Leche', '5000', 1, '5000', 3, 9908140764, 'TI', '2018-09-08'),
(17, 'andres', 'Fresas Con Crema de Leche', '5000', 1, '5000', 3, 124, 'TI', '2018-09-10'),
(18, 'andres', 'Brownie con Helado', '5000', 1, '5000', 2, 124, 'TI', '2018-09-10'),
(19, 'andres', 'Jugo de Guanabana', '3500', 1, '3500', 16, 124, 'TI', '2018-09-10'),
(20, 'andres', 'Fresas Con Crema de Leche', '5000', 1, '5000', 3, 124, 'TI', '2018-09-10'),
(21, 'andres', 'Malteada de Arequipe', '1500', 1, '1500', 12, 124, 'TI', '2018-09-09'),
(24, 'andres', 'Banana Split', '6000', 1, '6000', 1, 124, 'TI', '2018-09-10'),
(25, 'andres', 'Ensalada Especial', '6500', 3, '19500', 33, 124, 'TI', '2018-09-10'),
(26, 'andres', 'Brownie con Helado', '5000', 1, '5000', 2, 124, 'TI', '2018-09-05'),
(27, 'andres', 'Brownie con Helado', '5000', 1, '5000', 2, 124, 'TI', '2018-09-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrediente`
--

CREATE TABLE IF NOT EXISTS `ingrediente` (
  `cod_ingrediente` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_ing` varchar(45) NOT NULL,
  `Valor_ing` decimal(10,0) NOT NULL,
  `cant_existente` int(11) NOT NULL,
  `Stock_max` int(11) NOT NULL,
  `Stock_min` int(11) NOT NULL,
  `Estado_ing` tinyint(1) NOT NULL,
  `Peso_ing` int(11) DEFAULT NULL,
  `Proveedor_IdPROVEEDOR` int(11) NOT NULL,
  PRIMARY KEY (`cod_ingrediente`),
  KEY `fk_Ingrediente_Proveedor1_idx` (`Proveedor_IdPROVEEDOR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `ingrediente`
--

INSERT INTO `ingrediente` (`cod_ingrediente`, `Nom_ing`, `Valor_ing`, `cant_existente`, `Stock_max`, `Stock_min`, `Estado_ing`, `Peso_ing`, `Proveedor_IdPROVEEDOR`) VALUES
(1, 'Papaya', '1000', 72, 80, 50, 1, 18, 1),
(2, 'Melon', '1000', 74, 80, 50, 1, 18, 1),
(3, 'Fresa', '1000', 31, 80, 50, 1, 18, 1),
(4, 'Banano', '1000', 80, 80, 50, 1, 18, 1),
(5, 'Pera', '1000', 80, 80, 50, 1, 1, 1),
(6, 'Guayaba', '1000', 80, 80, 50, 1, 18, 1),
(7, 'Cereza', '1000', 75, 80, 50, 1, 18, 1),
(8, 'Chocolate', '1000', 77, 80, 50, 1, 18, 1),
(9, 'Azucar', '1000', 76, 80, 50, 1, 18, 1),
(10, 'Merengon', '1000', 80, 80, 50, 1, 18, 1),
(11, 'Crema de Leche', '1000', 70, 80, 50, 1, 18, 1),
(12, 'Guanabana', '1000', 79, 80, 50, 1, 18, 1),
(13, 'Manzana', '1000', 71, 80, 50, 1, 18, 1),
(14, 'Durazno', '300', 80, 80, 50, 1, 5, 1),
(15, 'Helado', '1000', 66, 80, 50, 1, 1, 2),
(16, 'Brownie', '5000', 77, 80, 50, 1, 1, 2),
(17, 'Galleta', '500', 26, 80, 50, 1, 1, 2),
(18, 'Barquillo', '600', 35, 80, 50, 1, 1, 2),
(19, 'Jarabe de Chocolate', '10000', 53, 15, 5, 1, 1, 2),
(20, 'Leche', '2000', 76, 80, 50, 1, 1, 2),
(21, 'Mora', '1000', 70, 80, 50, 1, 1, 2),
(22, 'Vainilla', '500', 80, 80, 50, 1, 1, 2),
(23, 'Nata', '1000', 80, 80, 50, 1, 1, 2),
(24, 'Mandarina', '1000', 77, 80, 50, 1, 1, 2),
(25, 'Arequipe', '1000', 79, 80, 50, 1, 1, 2),
(26, 'Lulo', '1000', 80, 80, 50, 1, 1, 2),
(27, 'Borojo', '1000', 80, 80, 50, 1, 1, 2),
(28, 'Guanabana', '2000', 80, 80, 50, 1, 1, 2),
(29, 'Maracuya', '500', 80, 80, 50, 1, 1, 1),
(30, 'Mango', '1000', 80, 80, 50, 1, 1, 1),
(31, 'Curuba', '1000', 80, 80, 50, 1, 1, 1),
(32, 'Agua', '500', 76, 80, 50, 1, 1, 2),
(33, 'Naranja', '400', 80, 80, 50, 1, 1, 1),
(34, 'Avena', '2000', 80, 80, 50, 1, 1, 1),
(35, 'Kiwi', '3000', 80, 80, 50, 1, 1, 2);

--
-- Disparadores `ingrediente`
--
DROP TRIGGER IF EXISTS `actualizacion_cant_existente`;
DELIMITER //
CREATE TRIGGER `actualizacion_cant_existente` AFTER UPDATE ON `ingrediente`
 FOR EACH ROW INSERT INTO 
auditoria (usuario_aud, nom_ing, descripcion_aud, fecha_aud) VALUES (user(),
CONCAT (OLD.Nom_ing),                                                  
CONCAT (' Se modifico la cantidad existente del ingrediente. La cantidad existente anterior de este ingrediente era  ', ' " ', OLD.cant_existente, '  " ', 'pero ahora la cantidad existente actual de ingrediente es ', ' "', NEW.cant_existente, ' " '), NOW())
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `n_inventario` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inventario` date NOT NULL,
  `Usuario_id_usu` bigint(20) NOT NULL,
  `Usuario_Tipo_doc_Tipo_doc` varchar(15) NOT NULL,
  `Ingrediente_cod_ingrediente` int(11) NOT NULL,
  `Nom_ing` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`n_inventario`,`Usuario_id_usu`,`Usuario_Tipo_doc_Tipo_doc`,`Ingrediente_cod_ingrediente`),
  KEY `fk_Inventario_Usuario1_idx` (`Usuario_id_usu`,`Usuario_Tipo_doc_Tipo_doc`),
  KEY `fk_Inventario_Ingrediente1_idx` (`Ingrediente_cod_ingrediente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`n_inventario`, `fecha_inventario`, `Usuario_id_usu`, `Usuario_Tipo_doc_Tipo_doc`, `Ingrediente_cod_ingrediente`, `Nom_ing`, `cantidad`) VALUES
(30, '2018-09-07', 333, 'TI', 3, 'Fresa', 15),
(31, '2018-09-07', 333, 'TI', 4, 'Banano', 7),
(32, '2018-09-11', 333, 'TI', 3, 'Fresa', 10),
(33, '2018-09-11', 333, 'TI', 4, 'Banano', 1),
(34, '2018-09-05', 333, 'TI', 7, 'Cereza', 10),
(35, '2018-09-05', 333, 'TI', 15, 'Helado', 10),
(36, '2018-09-05', 333, 'TI', 4, 'Banano', 5),
(37, '2018-09-07', 333, 'TI', 4, 'Banano', 5),
(38, '2018-09-07', 333, 'TI', 15, 'Helado', 5);

--
-- Disparadores `inventario`
--
DROP TRIGGER IF EXISTS `inventario_agregar`;
DELIMITER //
CREATE TRIGGER `inventario_agregar` AFTER INSERT ON `inventario`
 FOR EACH ROW INSERT INTO auditoria (usuario_aud, nom_ing, descripcion_aud, fecha_aud)
VALUES(user(), CONCAT(NEW.Nom_ing),
       CONCAT('Se hizo inventario del ingrediente ', ' el dia ' ' " ', NEW.fecha_inventario, ' " ', ' por el empleado con N.I. ', ' " ', NEW.Usuario_id_usu, ' " ', ' y con tipo de documento ', ' " ',  NEW.Usuario_Tipo_doc_Tipo_doc, ' ". ', ' La cantidad ingresada fue ', ' " ', NEW.cantidad, ' " '), NOW())
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `cod_producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_pro` varchar(45) NOT NULL,
  `Prec_pro` decimal(10,0) NOT NULL,
  `Desc_pro` varchar(200) NOT NULL,
  `img_pro` varchar(45) NOT NULL,
  `estado_pro` tinyint(1) NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `Categoriadelproducto_Nom_cat` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_producto`),
  KEY `fk_Producto_Categoriadelproducto1_idx` (`Categoriadelproducto_Nom_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_producto`, `Nom_pro`, `Prec_pro`, `Desc_pro`, `img_pro`, `estado_pro`, `fecha_ingreso`, `Categoriadelproducto_Nom_cat`) VALUES
(1, 'Banana Split', '6000', 'Es un postre principalmente hecho de helado y banano', 'postres/bananasplit.png', 1, '2018-06-15 00:00:00', 'Postres'),
(2, 'Brownie con Helado', '5000', 'Es un pastelito de chocolate acompañado con una bola de helado', 'postres/brownie-con-helado.png', 1, '2018-06-15 00:00:00', 'Postres'),
(3, 'Fresas Con Crema de Leche', '5000', 'Este es un postre que viene en una copa de fresas con crema de leche', 'postres/fresa-con-crema.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(4, 'Copa de Helado Grande', '5000', 'Es una copa de helado que contiene helado, galletas y barquillos ', 'postres/copa-de-helado-grande.png', 1, '2018-06-15 00:00:00', 'Postres'),
(5, 'Copa de Helado Pequeña', '4000', 'Es una copa de helado que contiene helado, galleta y barquillos ', 'postres/copa-de-helado-pequeña.png', 1, '2018-06-15 00:00:00', 'Postres'),
(6, 'Fresas Con Crema y Helado', '5500', 'Este es un postre que viene en una copa de fresas con crema de leche y helado', 'postres/fresas-con-helado.png', 1, '2018-06-15 00:00:00', 'Postres'),
(7, 'Malteada de Mora', '4000', 'Es una bebida de sabor a mora ademas de ser a base de leche contiene helado y cereza', 'bebidas/malteada-mora.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(8, 'Malteada de Fresa', '4000', 'Es una bebida de sabor a fresa ademas de ser a base de leche contiene helado y cereza', 'bebidas/malteada-fresa.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(9, 'Malteada de Vainilla', '4000', 'Es una bebida de sabor a vainilla ademas de ser a base de leche contiene helado y cereza', 'bebidas/Malteada-de-Vainilla.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(10, 'Malteada de Nata', '4000', 'Es una bebida de sabor a nata ademas de ser a base de leche contiene helado y cereza', 'bebidas/malteada-de-nata.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(11, 'Malteada de Mandarina', '4000', 'Es una bebida de sabor a mandarina ademas de ser a base de leche contiene helado y cereza', 'bebidas/mandarina.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(12, 'Malteada de Arequipe', '1500', 'Es una bebida de sabor a arequipe ademas de ser a base de leche contiene helado y cereza', 'bebidas/malteada-de-arequipe.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(13, 'Jugo de Lulo', '3500', 'Es una bebida de sabor a lulo que contiene leche', 'bebidas/jugolulo.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(14, 'Jugo de Mora', '3500', 'Es una bebida de sabor a mora que contiene leche', 'bebidas/jugo-mora.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(15, 'Jugo de Borojo', '3500', 'Es una bebida de sabor a Borojo que contiene leche', 'bebidas/borojo.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(16, 'Jugo de Guanabana', '3500', 'Es una bebida de sabor a Guanabana que contiene leche', 'bebidas/jugo-de-guanábana.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(17, 'Jugo de Fresa', '3500', 'Es una bebida de sabor a Fresa que contiene leche', 'bebidas/jugo-de-fresa.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(18, 'Jugo de Maracuya', '3500', 'Es una bebida de sabor a Maracuya que contiene leche', 'bebidas/jugomaracuya.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(19, 'Jugo de Curuba', '3500', 'Es una bebida de sabor a Curuba que contiene leche ', 'bebidas/curuba.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(20, 'Jugo de Mango', '3500', 'Es una bebida de sabor a Mango que contiene leche', 'bebidas/jugomango.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(21, 'Jugo de Papaya', '3500', 'Es una bebida de sabor a Papaya que contiene leche', 'bebidas/papaya_jugo.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(22, 'Jugo de Banano', '3500', 'Es una bebida de sabor a Banano que contiene leche', 'bebidas/banano2.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(23, 'Jugo de Melon', '3500', 'Es una bebida de sabor a Melon que contiene leche', 'bebidas/Jugo-melon.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(24, 'Jugo de Naranja', '3500', 'Es una bebida de sabor a Naranja que contiene leche', 'bebidas/jugo-de-naranja.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(25, 'Avena Grande', '3500', 'Es una deliciosa bebida grande que contiene avena y leche', 'bebidas/avena-grande.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(26, 'Avena Pequeña', '3500', 'Es una deliciosa bebida pequeña que contiene avena y leche', 'bebidas/avena-pequeña.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(27, 'Salpicon', '3500', 'Es una bebida deliciosa con distinto pedazos fruta dentro de ella', 'bebidas/salpicon-solo.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(28, 'Salpicon con Helado', '3500', 'Es una bebida deliciosa con distinto pedazos fruta dentro de ella ademas de tener helado', 'bebidas/salpicon-helado.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(29, 'Ensalada Natural', '5000', 'Deliciosa ensalada natural con crema de leche y variedad de frutas al gusto', 'ensaladas/ensalada-natural.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(30, 'Ensalada Junior', '4000', 'Sabrosa ensalada junior acompañada de helado crema de leche frutas al gusto y galleta', 'ensaladas/ensalada-junior.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(31, 'Ensalada Junior Especial', '5000', 'Nutritiva en especial con queso crema de leche variedad de frutas y tres bolas de helado con barquillo', 'ensaladas/ensalada-junior-especial.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(32, 'Ensalada Sencilla', '6000', 'Ensalada sencilla con crema de leche y frutas al gusto', 'ensaladas/senacilla.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(33, 'Ensalada Especial', '6500', 'Nutritiva y deliciosa ensalada especial acompañada con crema de leche queso helado y salsa de chocolate', 'ensaladas/especial.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(34, 'Ensalada Super Especial', '7000', 'Nutritiva y deliciosa ensalada super especial mucho mas grande que la especial acompañada con crema de leche queso helado y salsa de chocolate ', 'ensaladas/super-especial.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(35, 'Pocion de Fruta', '3000', 'Es una porcion que contiene distintas frutas nutritivas ', 'ensaladas/porcion-de-fruta.png', 1, '2018-06-15 00:00:00', 'Ensaladas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_has_ingrediente`
--

CREATE TABLE IF NOT EXISTS `producto_has_ingrediente` (
  `Producto_cod_producto` int(11) NOT NULL,
  `Nom_pro` varchar(45) DEFAULT NULL,
  `Ingrediente_cod_ingrediente` int(11) NOT NULL,
  `Nom_ing` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`Producto_cod_producto`,`Ingrediente_cod_ingrediente`),
  KEY `fk_Producto_has_Ingrediente_Ingrediente1_idx` (`Ingrediente_cod_ingrediente`),
  KEY `fk_Producto_has_Ingrediente_Producto1_idx` (`Producto_cod_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_has_ingrediente`
--

INSERT INTO `producto_has_ingrediente` (`Producto_cod_producto`, `Nom_pro`, `Ingrediente_cod_ingrediente`, `Nom_ing`, `cantidad`) VALUES
(1, 'Banana Split', 3, 'Fresa', 1),
(1, 'Banana Split', 4, 'Banano', 1),
(1, 'Banana Split', 7, 'Cereza', 1),
(1, 'Banana Split', 11, 'Crema de Leche', 1),
(1, 'Banana Split', 17, 'Galleta', 2),
(1, 'Banana Split', 19, 'Jarabe de Chocolate', 1),
(2, 'Brownie con Helado', 8, 'Chocolate', 1),
(2, 'Brownie con Helado', 15, 'Helado', 1),
(2, 'Brownie con Helado', 16, 'Brownie', 1),
(2, 'Brownie con Helado', 19, 'Jarabe de Chocolate', 1),
(3, 'Fresas Con Crema de Leche', 3, 'Fresa', 15),
(3, 'Fresas Con Crema de Leche', 11, 'Crema de Leche', 1),
(4, 'Copa de Helado Grande', 15, 'Helado', 3),
(4, 'Copa de Helado Grande', 17, 'Galleta', 2),
(4, 'Copa de Helado Grande', 18, 'Barquillo', 2),
(4, 'Copa de Helado Grande', 19, 'Jarabe de Chocolate', 1),
(5, 'Copa de Helado Pequeña', 15, 'Helado', 2),
(5, 'Copa de Helado Pequeña', 17, 'Galleta', 1),
(5, 'Copa de Helado Pequeña', 18, 'Barquillo', 1),
(5, 'Copa de Helado Pequeña', 19, 'Jarabe de Chocolate', 1),
(6, 'Fresas Con Crema y Helado', 3, 'Fresa', 15),
(6, 'Fresas Con Crema y Helado', 11, 'Crema de Leche', 1),
(6, 'Fresas Con Crema y Helado', 15, 'Helado', 3),
(7, 'Malteada de Mora', 7, 'Cereza', 1),
(7, 'Malteada de Mora', 9, 'Azucar', 1),
(7, 'Malteada de Mora', 11, 'Crema de Leche', 1),
(7, 'Malteada de Mora', 15, 'Helado', 2),
(7, 'Malteada de Mora', 20, 'Leche', 1),
(7, 'Malteada de Mora', 21, 'Mora', 10),
(7, 'Malteada de Mora', 32, 'Agua', 1),
(8, 'Malteada de Fresa', 3, 'Fresa', 10),
(8, 'Malteada de Fresa', 7, 'Cereza', 1),
(8, 'Malteada de Fresa', 9, 'Azucar', 1),
(8, 'Malteada de Fresa', 11, 'Crema de Leche', 1),
(8, 'Malteada de Fresa', 15, 'Helado', 2),
(8, 'Malteada de Fresa', 20, 'Leche', 1),
(8, 'Malteada de Fresa', 32, 'Agua', 1),
(9, 'Malteada de Vainilla', 7, 'Cereza', 1),
(9, 'Malteada de Vainilla', 9, 'Azucar', 1),
(9, 'Malteada de Vainilla', 11, 'Crema de Leche', 1),
(9, 'Malteada de Vainilla', 15, 'Helado', 2),
(9, 'Malteada de Vainilla', 20, 'Leche', 1),
(9, 'Malteada de Vainilla', 22, 'Vainilla', 2),
(9, 'Malteada de Vainilla', 32, 'Agua', 1),
(10, 'Malteada de Nata', 7, 'Cereza', 1),
(10, 'Malteada de Nata', 9, 'Azucar', 1),
(10, 'Malteada de Nata', 11, 'Crema de Leche', 1),
(10, 'Malteada de Nata', 15, 'Helado', 2),
(10, 'Malteada de Nata', 20, 'Leche', 1),
(10, 'Malteada de Nata', 23, 'Nata', 3),
(10, 'Malteada de Nata', 32, 'Agua', 1),
(11, 'Malteada de Mandarina', 7, 'Cereza', 1),
(11, 'Malteada de Mandarina', 9, 'Azucar', 1),
(11, 'Malteada de Mandarina', 11, 'Crema de Leche', 1),
(11, 'Malteada de Mandarina', 15, 'Helado', 2),
(11, 'Malteada de Mandarina', 20, 'Leche', 1),
(11, 'Malteada de Mandarina', 24, 'Mandarina', 3),
(11, 'Malteada de Mandarina', 32, 'Agua', 1),
(12, 'Malteada de Arequipe', 7, 'Cereza', 1),
(12, 'Malteada de Arequipe', 9, 'Azucar', 1),
(12, 'Malteada de Arequipe', 11, 'Crema de Leche', 1),
(12, 'Malteada de Arequipe', 15, 'Helado', 2),
(12, 'Malteada de Arequipe', 20, 'Leche', 1),
(12, 'Malteada de Arequipe', 25, 'Arequipe', 1),
(12, 'Malteada de Arequipe', 32, 'Agua', 1),
(13, 'Jugo de Lulo', 9, 'Azucar', 1),
(13, 'Jugo de Lulo', 20, 'Leche', 1),
(13, 'Jugo de Lulo', 26, 'Lulo', 4),
(13, 'Jugo de Lulo', 32, 'Agua', 1),
(14, 'Jugo de Mora', 9, 'Azucar', 1),
(14, 'Jugo de Mora', 20, 'Leche', 1),
(14, 'Jugo de Mora', 21, 'Mora', 10),
(14, 'Jugo de Mora', 32, 'Agua', 1),
(15, 'Jugo de Borojo', 9, 'Azucar', 1),
(15, 'Jugo de Borojo', 20, 'Leche', 1),
(15, 'Jugo de Borojo', 27, 'Borojo', 4),
(15, 'Jugo de Borojo', 32, 'Agua', 1),
(16, 'Jugo de Guanabana', 9, 'Azucar', 1),
(16, 'Jugo de Guanabana', 12, 'Guanabana', 1),
(16, 'Jugo de Guanabana', 20, 'Leche', 1),
(16, 'Jugo de Guanabana', 32, 'Agua', 1),
(17, 'Jugo de Fresa', 3, 'Fresa', 10),
(17, 'Jugo de Fresa', 9, 'Azucar', 1),
(17, 'Jugo de Fresa', 20, 'Leche', 1),
(17, 'Jugo de Fresa', 32, 'Agua', 1),
(18, 'Jugo de Maracuya', 9, 'Azucar', 1),
(18, 'Jugo de Maracuya', 29, 'Maracuya', 4),
(18, 'Jugo de Maracuya', 32, 'Agua', 1),
(19, 'Jugo de Curuba', 9, 'Azucar', 1),
(19, 'Jugo de Curuba', 20, 'Leche', 1),
(19, 'Jugo de Curuba', 31, 'Curuba', 4),
(19, 'Jugo de Curuba', 32, 'Agua', 1),
(20, 'Jugo de Mango', 9, 'Azucar', 1),
(20, 'Jugo de Mango', 20, 'Leche', 1),
(20, 'Jugo de Mango', 30, 'Mango', 3),
(20, 'Jugo de Mango', 32, 'Agua', 1),
(21, 'Jugo de Papaya', 1, 'Papaya', 1),
(21, 'Jugo de Papaya', 9, 'Azucar', 1),
(21, 'Jugo de Papaya', 32, 'Agua', 1),
(22, 'Jugo de Banano', 4, 'Banano', 4),
(22, 'Jugo de Banano', 9, 'Azucar', 1),
(22, 'Jugo de Banano', 20, 'Leche', 1),
(22, 'Jugo de Banano', 32, 'Agua', 1),
(23, 'Jugo de Melon', 2, 'Melon', 2),
(23, 'Jugo de Melon', 9, 'Azucar', 1),
(23, 'Jugo de Melon', 32, 'Agua', 1),
(24, 'Jugo de Naranja', 9, 'Azucar', 1),
(24, 'Jugo de Naranja', 32, 'Agua', 1),
(24, 'Jugo de Naranja', 33, 'Naranja', 3),
(25, 'Avena Grande', 9, 'Azucar', 1),
(25, 'Avena Grande', 20, 'Leche', 1),
(25, 'Avena Grande', 32, 'Agua', 1),
(25, 'Avena Grande', 34, 'Avena', 1),
(26, 'Avena Pequeña', 9, 'Azucar', 1),
(26, 'Avena Pequeña', 20, 'Leche', 1),
(26, 'Avena Pequeña', 32, 'Agua', 1),
(26, 'Avena Pequeña', 34, 'Avena', 1),
(27, 'Salpicon', 1, 'Papaya', 1),
(27, 'Salpicon', 3, 'Fresa', 4),
(27, 'Salpicon', 4, 'Banano', 1),
(27, 'Salpicon', 13, 'Manzana', 1),
(27, 'Salpicon', 30, 'Mango', 1),
(28, 'Salpicon con Helado', 1, 'Papaya', 1),
(28, 'Salpicon con Helado', 3, 'Fresa', 4),
(28, 'Salpicon con Helado', 4, 'Banano', 1),
(28, 'Salpicon con Helado', 13, 'Manzana', 1),
(28, 'Salpicon con Helado', 15, 'Helado', 1),
(28, 'Salpicon con Helado', 30, 'Mango', 1),
(29, 'Ensalada Natural', 1, 'Papaya', 1),
(29, 'Ensalada Natural', 2, 'Melon', 2),
(29, 'Ensalada Natural', 3, 'Fresa', 5),
(29, 'Ensalada Natural', 4, 'Banano', 2),
(29, 'Ensalada Natural', 7, 'Cereza', 3),
(29, 'Ensalada Natural', 13, 'Manzana', 2),
(30, 'Ensalada Junior', 1, 'Papaya', 1),
(30, 'Ensalada Junior', 2, 'Melon', 2),
(30, 'Ensalada Junior', 3, 'Fresa', 5),
(30, 'Ensalada Junior', 4, 'Banano', 3),
(30, 'Ensalada Junior', 7, 'Cereza', 2),
(30, 'Ensalada Junior', 11, 'Crema de Leche', 1),
(30, 'Ensalada Junior', 13, 'Manzana', 3),
(30, 'Ensalada Junior', 15, 'Helado', 2),
(30, 'Ensalada Junior', 17, 'Galleta', 2),
(30, 'Ensalada Junior', 18, 'Barquillo', 1),
(31, 'Ensalada Junior Especial', 1, 'Papaya', 1),
(31, 'Ensalada Junior Especial', 2, 'Melon', 1),
(31, 'Ensalada Junior Especial', 3, 'Fresa', 5),
(31, 'Ensalada Junior Especial', 4, 'Banano', 3),
(31, 'Ensalada Junior Especial', 7, 'Cereza', 4),
(31, 'Ensalada Junior Especial', 11, 'Crema de Leche', 1),
(31, 'Ensalada Junior Especial', 13, 'Manzana', 3),
(31, 'Ensalada Junior Especial', 15, 'Helado', 3),
(31, 'Ensalada Junior Especial', 17, 'Galleta', 3),
(31, 'Ensalada Junior Especial', 18, 'Barquillo', 3),
(32, 'Ensalada Sencilla', 1, 'Papaya', 1),
(32, 'Ensalada Sencilla', 2, 'Melon', 2),
(32, 'Ensalada Sencilla', 3, 'Fresa', 3),
(32, 'Ensalada Sencilla', 4, 'Banano', 3),
(32, 'Ensalada Sencilla', 11, 'Crema de Leche', 1),
(32, 'Ensalada Sencilla', 13, 'Manzana', 3),
(32, 'Ensalada Sencilla', 17, 'Galleta', 1),
(32, 'Ensalada Sencilla', 18, 'Barquillo', 1),
(32, 'Ensalada Sencilla', 19, 'Jarabe de Chocolate', 1),
(33, 'Ensalada Especial', 1, 'Papaya', 1),
(33, 'Ensalada Especial', 2, 'Melon', 2),
(33, 'Ensalada Especial', 3, 'Fresa', 6),
(33, 'Ensalada Especial', 4, 'Banano', 4),
(33, 'Ensalada Especial', 7, 'Cereza', 2),
(33, 'Ensalada Especial', 11, 'Crema de Leche', 1),
(33, 'Ensalada Especial', 13, 'Manzana', 3),
(33, 'Ensalada Especial', 15, 'Helado', 2),
(33, 'Ensalada Especial', 17, 'Galleta', 2),
(33, 'Ensalada Especial', 18, 'Barquillo', 3),
(34, 'Ensalada Super Especial', 1, 'Papaya', 1),
(34, 'Ensalada Super Especial', 2, 'Melon', 3),
(34, 'Ensalada Super Especial', 3, 'Fresa', 5),
(34, 'Ensalada Super Especial', 4, 'Banano', 4),
(34, 'Ensalada Super Especial', 7, 'Cereza', 3),
(34, 'Ensalada Super Especial', 11, 'Crema de Leche', 1),
(34, 'Ensalada Super Especial', 13, 'Manzana', 3),
(34, 'Ensalada Super Especial', 15, 'Helado', 3),
(34, 'Ensalada Super Especial', 17, 'Galleta', 2),
(34, 'Ensalada Super Especial', 18, 'Barquillo', 3),
(34, 'Ensalada Super Especial', 19, 'Jarabe de Chocolate', 1),
(35, 'Pocion de Fruta', 1, 'Papaya', 1),
(35, 'Pocion de Fruta', 2, 'Melon', 1),
(35, 'Pocion de Fruta', 3, 'Fresa', 1),
(35, 'Pocion de Fruta', 4, 'Banano', 1),
(35, 'Pocion de Fruta', 7, 'Cereza', 1),
(35, 'Pocion de Fruta', 13, 'Manzana', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `IdPROVEEDOR` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_provee` varchar(45) NOT NULL,
  `Estado_provee` tinyint(1) NOT NULL,
  `Telefono_provee` bigint(20) NOT NULL,
  `Direccion_provee` varchar(45) NOT NULL,
  PRIMARY KEY (`IdPROVEEDOR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`IdPROVEEDOR`, `Nom_provee`, `Estado_provee`, `Telefono_provee`, `Direccion_provee`) VALUES
(1, 'marcos', 1, 3055722039, 'calle 117 b sur # 0-15'),
(2, 'marlon', 1, 2009642, 'calle 115 b este #0-20'),
(6, 'daniel22', 1, 2009642, 'calle 118 b este #0-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `Nom_rol` varchar(20) NOT NULL,
  `Estado_rol` tinyint(1) NOT NULL,
  PRIMARY KEY (`Nom_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Nom_rol`, `Estado_rol`) VALUES
('Administrador', 1),
('Cliente', 1),
('Empleado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc`
--

CREATE TABLE IF NOT EXISTS `tipo_doc` (
  `Tipo_doc` varchar(15) NOT NULL,
  `Estado_tdoc` tinyint(1) NOT NULL,
  PRIMARY KEY (`Tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_doc`
--

INSERT INTO `tipo_doc` (`Tipo_doc`, `Estado_tdoc`) VALUES
('CC', 1),
('CE', 1),
('TI', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_telefono`
--

CREATE TABLE IF NOT EXISTS `tipo_telefono` (
  `Tipo_telefono` varchar(45) NOT NULL,
  `Estado_ttel` tinyint(1) NOT NULL,
  PRIMARY KEY (`Tipo_telefono`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_telefono`
--

INSERT INTO `tipo_telefono` (`Tipo_telefono`, `Estado_ttel`) VALUES
('Celular', 1),
('Hogar', 1),
('Trabajo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_usu` bigint(20) NOT NULL,
  `Nom_usu` varchar(45) NOT NULL,
  `Pass_usu` varchar(45) NOT NULL,
  `Tipo_doc_Tipo_doc` varchar(15) NOT NULL,
  `Rol_nom_rol` varchar(20) NOT NULL,
  `Estado_usu` tinyint(1) NOT NULL,
  `Tipo_telefono` varchar(15) DEFAULT NULL,
  `Num_tel` bigint(20) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_usu`,`Tipo_doc_Tipo_doc`),
  KEY `fk_Usuario_Tipo_doc1_idx` (`Tipo_doc_Tipo_doc`),
  KEY `fk_Usuario_Rol1_idx` (`Rol_nom_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usu`, `Nom_usu`, `Pass_usu`, `Tipo_doc_Tipo_doc`, `Rol_nom_rol`, `Estado_usu`, `Tipo_telefono`, `Num_tel`, `Correo`) VALUES
(124, 'andres', 'temp123', 'TI', 'Cliente', 1, 'Celular', 2231233, 'marlon99@gmail.com'),
(333, 'diego', '123', 'TI', 'Empleado', 1, 'Celular', 42341243, 'marlon99@gmail.com'),
(2222, 'matias canson', '123', 'TI', 'Administrador', 1, 'Celular', 75478599, 'marlon2@gmail.com'),
(9908, 'marlon', '123', 'TI', 'Administrador', 1, 'Celular', 132283960, 'marlon92@gmail.com'),
(9999, 'angie', '123', 'TI', 'Cliente', 1, 'Celular', 3132285958, 'marlon99@gmail.com'),
(1022938617, 'miguel', 'FwyCtNR2', 'TI', 'Cliente', 1, 'Celular', 3134261071, 'miguel20@gmail.com'),
(1023037421, 'carlos123', '123', 'TI', 'Cliente', 1, 'Hogar', 2134556, 'qweqwe@gmail.com'),
(9908140763, 'tomas lopez', '123', 'TI', 'Empleado', 1, 'Celular', 2147483666, 'marlon97@gmail.com'),
(9908140764, 'jenifer22', '123', 'TI', 'Cliente', 1, 'Celular', 3132285958, 'jen99@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_tipo_telefono`
--

CREATE TABLE IF NOT EXISTS `usuario_has_tipo_telefono` (
  `Usuario_id_usu` bigint(20) NOT NULL,
  `Usuario_Tipo_doc_Tipo_doc` varchar(15) NOT NULL,
  `Tipo_telefono_Tipo_telefono` varchar(45) NOT NULL,
  `N_telefono` bigint(20) NOT NULL,
  PRIMARY KEY (`Usuario_id_usu`,`Usuario_Tipo_doc_Tipo_doc`,`Tipo_telefono_Tipo_telefono`),
  KEY `fk_Usuario_has_Tipo_telefono_Tipo_telefono1_idx` (`Tipo_telefono_Tipo_telefono`),
  KEY `fk_Usuario_has_Tipo_telefono_Usuario1_idx` (`Usuario_id_usu`,`Usuario_Tipo_doc_Tipo_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_has_tipo_telefono`
--

INSERT INTO `usuario_has_tipo_telefono` (`Usuario_id_usu`, `Usuario_Tipo_doc_Tipo_doc`, `Tipo_telefono_Tipo_telefono`, `N_telefono`) VALUES
(9908140763, 'TI', 'Celular', 2147483666),
(9908140764, 'TI', 'Celular', 3132285958);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_Compra_Producto1` FOREIGN KEY (`Producto_cod_producto`) REFERENCES `producto` (`cod_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Compra_Usuario1` FOREIGN KEY (`Usuario_Id_usu`, `Usuario_Tipo_doc_Tipo_doc`) REFERENCES `usuario` (`Id_usu`, `Tipo_doc_Tipo_doc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD CONSTRAINT `fk_Ingrediente_Proveedor1` FOREIGN KEY (`Proveedor_IdPROVEEDOR`) REFERENCES `proveedor` (`IdPROVEEDOR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `fk_Inventario_Ingrediente1` FOREIGN KEY (`Ingrediente_cod_ingrediente`) REFERENCES `ingrediente` (`cod_ingrediente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Inventario_Usuario1` FOREIGN KEY (`Usuario_id_usu`, `Usuario_Tipo_doc_Tipo_doc`) REFERENCES `usuario` (`Id_usu`, `Tipo_doc_Tipo_doc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_Producto_Categoriadelproducto1` FOREIGN KEY (`Categoriadelproducto_Nom_cat`) REFERENCES `categoriadelproducto` (`Nom_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_has_ingrediente`
--
ALTER TABLE `producto_has_ingrediente`
  ADD CONSTRAINT `fk_Producto_has_Ingrediente_Producto1` FOREIGN KEY (`Producto_cod_producto`) REFERENCES `producto` (`cod_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Producto_has_Ingrediente_Ingrediente1` FOREIGN KEY (`Ingrediente_cod_ingrediente`) REFERENCES `ingrediente` (`cod_ingrediente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Tipo_doc1` FOREIGN KEY (`Tipo_doc_Tipo_doc`) REFERENCES `tipo_doc` (`Tipo_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`Rol_nom_rol`) REFERENCES `rol` (`Nom_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_has_tipo_telefono`
--
ALTER TABLE `usuario_has_tipo_telefono`
  ADD CONSTRAINT `fk_Usuario_has_Tipo_telefono_Usuario1` FOREIGN KEY (`Usuario_id_usu`, `Usuario_Tipo_doc_Tipo_doc`) REFERENCES `usuario` (`Id_usu`, `Tipo_doc_Tipo_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Usuario_has_Tipo_telefono_Tipo_telefono1` FOREIGN KEY (`Tipo_telefono_Tipo_telefono`) REFERENCES `tipo_telefono` (`Tipo_telefono`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
