-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2018 a las 04:33:50
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
-- Estructura de tabla para la tabla `carritodecompras`
--

CREATE TABLE IF NOT EXISTS `carritodecompras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(20) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Precio` decimal(9,2) DEFAULT NULL,
  `CATEGORIADELPRODUCTO_Nom_cat` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_CARRITODECOMPRAS_CATEGORIADELPRODUCTO1_idx` (`CATEGORIADELPRODUCTO_Nom_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `carritodecompras`
--

INSERT INTO `carritodecompras` (`id`, `Codigo`, `Nombre`, `imagen`, `Descripcion`, `Precio`, `CATEGORIADELPRODUCTO_Nom_cat`) VALUES
(1, '1', 'Banana Split', 'img/postres/bananasplit.png', 'Es un postre principalmente hecho de helado y banano', '6000.00', 'Postres'),
(2, '2', 'Brownie con Helado', 'img/postres/brownie-con-helado.png', 'Es un pastelito de chocolate acompañado con una bola de helado', '5000.00', 'Postres'),
(3, '3', 'Fresas Con Crema de Leche', 'img/postres/fresa-con-crema.png', 'Este es un postre que viene en una copa de fresas con crema de leche', '5000.00', 'Postres'),
(4, '4', 'Copa de Helado Grande', 'img/postres/copa-de-helado-grande.png', 'Es una copa de helado que contiene helado, galletas, barquillos y algunas frutas', '5000.00', 'Postres'),
(5, '5', 'Copa de Helado Pequeña', 'img/postres/copa-de-helado-pequeña.png', 'Es una copa de helado que contiene helado, galleta y barquillos ', '4000.00', 'Postres'),
(6, '6', 'Fresas Con Crema y Helado', 'img/postres/fresas-con-helado.png', 'Este es un postre que viene en una copa de fresas con crema de leche y helado', '5500.00', 'Postres'),
(7, '7', 'Malteada de Mora', 'img/bebidas/malteada-mora.png', 'Es una bebida de sabor a mora ademas de ser a base de leche contiene helado y cereza', '4000.00', 'Bebidas'),
(8, '8', 'Malteada de Fresa', 'img/bebidas/malteada-fresa.png', 'Es una bebida de sabor a fresa ademas de ser a base de leche contiene helado y cereza', '4000.00', 'Bebidas'),
(9, '9', 'Malteada de Vainilla', 'img/bebidas/Malteada-de-Vainilla.png', 'Es una bebida de sabor a vainilla ademas de ser a base de leche contiene helado y cereza', '4000.00', 'Bebidas'),
(10, '10', 'Malteada de Nata', 'img/bebidas/malteada-de-nata.png', 'Es una bebida de sabor a nata ademas de ser a base de leche contiene helado y cereza', '4000.00', 'Bebidas'),
(11, '11', 'Malteada de Mandarina', 'img/bebidas/mandarina.png', 'Es una bebida de sabor a mora ademas de ser a base de leche contiene helado y cereza', '4000.00', 'Bebidas'),
(12, '12', 'Malteada de Arequipe', 'img/bebidas/malteada-de-arequipe.png', 'Es una bebida de sabor a mora ademas de ser a base de leche contiene helado y cereza', '1500.00', 'Bebidas'),
(13, '13', 'Jugo de Lulo', 'img/bebidas/jugolulo.png', 'Es una bebida de sabor a lulo que contiene leche', '3500.00', 'Bebidas'),
(14, '14', 'Jugo de Mora', 'img/bebidas/jugo-mora.png', 'Es una bebida de sabor a mora que contiene leche', '3500.00', 'Bebidas'),
(15, '15', 'Jugo de Borojo', 'img/bebidas/borojo.png', 'Es una bebida de sabor a Borojo que contiene leche', '3500.00', 'Bebidas'),
(16, '16', 'Jugo de Guanabana', 'img/bebidas/jugo-de-guanábana.png', 'Es una bebida de sabor a Guanabana que contiene leche', '3500.00', 'Bebidas'),
(17, '17', 'Jugo de Fresa', 'img/bebidas/jugo-de-fresa.png', 'Es una bebida de sabor a Fresa que contiene leche', '3500.00', 'Bebidas'),
(18, '18', 'Jugo de Maracuya', 'img/bebidas/jugomaracuya.png', 'Es una bebida de sabor a Maracuya que contiene leche', '3500.00', 'Bebidas'),
(19, '19', 'Jugo de Curuba', 'img/bebidas/curuba.png', 'Es una bebida de sabor a Curuba que contiene leche ', '3500.00', 'Bebidas'),
(20, '20', 'Jugo de Mango', 'img/bebidas/jugomango.png', 'Es una bebida de sabor a Mango que contiene leche', '3500.00', 'Bebidas'),
(21, '21', 'Jugo de Papaya', 'img/bebidas/papaya_jugo.png', 'Es una bebida de sabor a Papaya que contiene leche', '3500.00', 'Bebidas'),
(22, '22', 'Jugo de Banano', 'img/bebidas/banano2.png', 'Es una bebida de sabor a Banano que contiene leche', '3500.00', 'Bebidas'),
(23, '23', 'Jugo de Melon', 'img/bebidas/Jugo-melon.png', 'Es una bebida de sabor a Melon que contiene leche', '3500.00', 'Bebidas'),
(24, '24', 'Jugo de Naranja', 'img/bebidas/jugo-de-naranja.png', 'Es una bebida de sabor a Naranja que contiene leche', '3500.00', 'Bebidas'),
(25, '25', 'Avena Grande', 'img/bebidas/avena-grande.png', 'Es una deliciosa bebida grande que contiene avena y leche', '3500.00', 'Bebidas'),
(26, '26', 'Avena Pequeña', 'img/bebidas/avena-pequeña.png', 'Es una deliciosa bebida pequeña que contiene avena y leche', '3500.00', 'Bebidas'),
(27, '27', 'Salpicon', 'img/bebidas/salpicon-solo.png', 'Es una bebida deliciosa con distinto pedazos fruta dentro de ella', '3500.00', 'Bebidas'),
(28, '28', 'Salpicon con Helado', 'img/bebidas/salpicon-helado.png', 'Es una bebida deliciosa con distinto pedazos fruta dentro de ella ademas de tener helado', '3500.00', 'Bebidas'),
(29, '29', 'Ensalada Natural', 'img/ensaladas/ensalada-natural.png', 'Deliciosa ensalada natural con crema de leche y variedad de frutas al gusto', '5000.00', 'Ensaladas'),
(30, '30', 'Ensalada Junior', 'img/ensaladas/ensalada-junior.png', 'Sabrosa ensalada junior acompañada de helado crema de leche frutas al gusto y galleta', '4000.00', 'Ensaladas'),
(31, '31', 'Ensalada Junior Especial', 'img/ensaladas/ensalada-junior-especial.png', 'Nutritiva en especial con queso crema de leche variedad de frutas y tres bolas de helado con barquillo', '5000.00', 'Ensaladas'),
(32, '32', 'Ensalada Sencilla', 'img/ensaladas/senacilla.png', 'Ensalada sencilla con crema de leche y frutas al gusto', '6000.00', 'Ensaladas'),
(33, '33', 'Ensalada Especial', 'img/ensaladas/especial.png', 'Nutritiva y deliciosa ensalada especial acompañada con crema de leche queso helado y salsa de chocolate', '6500.00', 'Ensaladas'),
(34, '34', 'Ensalada Super Especial', 'img/ensaladas/super-especial.png', 'Nutritiva y deliciosa ensalada super especial mcuho mas grande que la super especial acompañada con crema de leche queso helado y salsa de chocolate ', '7000.00', 'Ensaladas'),
(35, '35', 'Pocion de Fruta', 'img/ensaladas/porcion-de-fruta.png', 'Es una porcion que contiene distintas frutas nutritivas ', '3000.00', 'Ensaladas');

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
  `usuario` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mensaje` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `usuario`, `fecha`, `mensaje`) VALUES
(1, 'andres', '2018-05-22 06:40:47', 'ddd'),
(2, 'andres', '2018-05-22 08:23:13', 'sebastian es puto'),
(8, 'andres', '2018-05-23 19:13:24', 'hola'),
(9, 'andres', '2018-07-13 19:43:36', 'jjjj'),
(10, 'marlon alejandro', '2018-07-13 20:10:31', 'jlkasdjkasld'),
(11, 'marlon alejandro', '2018-07-13 20:11:17', 'aSADSAD');

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
  `PRODUCTO_cod_producto` int(11) NOT NULL,
  `Usuario_Id_usu` bigint(20) NOT NULL,
  `Usuario_Tipo_doc_Tipo_doc` varchar(15) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`idCompra`),
  KEY `fk_Compra_PRODUCTO1_idx` (`PRODUCTO_cod_producto`),
  KEY `fk_Compra_Usuario1_idx` (`Usuario_Id_usu`,`Usuario_Tipo_doc_Tipo_doc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`idCompra`, `Nom_usu`, `Nom_pro`, `Prec_pro`, `Cant`, `Total`, `PRODUCTO_cod_producto`, `Usuario_Id_usu`, `Usuario_Tipo_doc_Tipo_doc`, `Fecha`) VALUES
(68, 'andres', 'Banana Split', '6000', 1, '6000', 1, 124, 'TI', '2018-07-11'),
(69, 'andres', 'Banana Split', '6000', 1, '6000', 1, 124, 'TI', '2018-07-11'),
(70, 'andres', 'Malteada de Fresa', '4000', 1, '4000', 8, 124, 'TI', '2018-07-11'),
(71, 'andres', 'Ensalada Natural', '5000', 2, '10000', 29, 124, 'TI', '2018-07-11'),
(72, 'andres', 'Ensalada Junior Especial', '5000', 1, '5000', 31, 124, 'TI', '2018-07-11'),
(73, 'angie', 'Jugo de Fresa', '3500', 1, '3500', 17, 9999, 'TI', '2018-07-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE IF NOT EXISTS `ingredientes` (
  `cod_ingrediente` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_ing` varchar(45) NOT NULL,
  `Valor_ing` decimal(10,0) NOT NULL,
  `cant_existente` int(11) NOT NULL,
  `Stock_max` int(11) NOT NULL,
  `Stock_min` int(11) NOT NULL,
  `Estado_ing` tinyint(1) NOT NULL,
  `Peso_ing` int(11) DEFAULT NULL,
  `PROVEEDOR_idPROVEEDOR` int(11) NOT NULL,
  PRIMARY KEY (`cod_ingrediente`),
  KEY `fk_Ingredientes_PROVEEDOR1_idx` (`PROVEEDOR_idPROVEEDOR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`cod_ingrediente`, `Nom_ing`, `Valor_ing`, `cant_existente`, `Stock_max`, `Stock_min`, `Estado_ing`, `Peso_ing`, `PROVEEDOR_idPROVEEDOR`) VALUES
(1, 'Papaya', '1000', 80, 80, 50, 1, 18, 1),
(2, 'Melon', '1000', 80, 80, 50, 1, 18, 1),
(3, 'Fresa', '1000', 80, 80, 50, 1, 18, 1),
(4, 'Banano', '1000', 80, 80, 50, 1, 18, 1),
(5, 'Piña', '1000', 80, 80, 50, 1, 18, 1),
(6, 'Guayaba', '1000', 80, 80, 50, 1, 18, 1),
(7, 'cereza', '1000', 80, 80, 50, 1, 18, 1),
(8, 'Chocolate', '1000', 80, 80, 50, 1, 18, 1),
(9, 'Azucar', '1000', 80, 80, 50, 1, 18, 1),
(10, 'Merengon', '1000', 80, 80, 50, 1, 18, 1),
(11, 'Crema de Leche', '1000', 80, 80, 50, 1, 18, 1),
(12, 'Guanabana', '1000', 80, 80, 50, 1, 18, 1),
(13, 'Manzana', '1000', 80, 80, 50, 1, 18, 1),
(14, 'durazno', '300', 80, 80, 50, 1, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `n_inventario` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inventario` date NOT NULL,
  `Usuario_id_usu` bigint(20) NOT NULL,
  `Usuario_Tipo_doc_Tipo_doc` varchar(15) NOT NULL,
  `Ingredientes_cod_ingrediente` int(11) NOT NULL,
  PRIMARY KEY (`n_inventario`,`Usuario_id_usu`,`Usuario_Tipo_doc_Tipo_doc`,`Ingredientes_cod_ingrediente`),
  KEY `fk_Inventario_Usuario1_idx` (`Usuario_id_usu`,`Usuario_Tipo_doc_Tipo_doc`),
  KEY `fk_Inventario_Ingredientes1_idx` (`Ingredientes_cod_ingrediente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`n_inventario`, `fecha_inventario`, `Usuario_id_usu`, `Usuario_Tipo_doc_Tipo_doc`, `Ingredientes_cod_ingrediente`) VALUES
(2, '2018-12-18', 333, 'TI', 2),
(10, '2018-06-09', 333, 'TI', 5),
(16, '2018-06-30', 333, 'TI', 1),
(17, '2018-06-30', 333, 'TI', 6),
(18, '2018-06-23', 333, 'TI', 1),
(20, '2018-06-29', 333, 'TI', 1),
(21, '2018-06-29', 333, 'TI', 5),
(22, '2018-06-29', 333, 'TI', 6),
(26, '2018-07-13', 333, 'TI', 2),
(27, '2018-07-13', 333, 'TI', 4),
(28, '2018-07-13', 333, 'TI', 1),
(29, '2018-07-13', 333, 'TI', 5),
(30, '2018-07-13', 333, 'TI', 2),
(31, '2018-07-15', 333, 'TI', 1),
(32, '2018-07-15', 333, 'TI', 10);

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
  `CAT_Nom_cat` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_producto`),
  KEY `fk_PRODUCTO_CATEGORIADELPRODUCTO1_idx` (`CAT_Nom_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_producto`, `Nom_pro`, `Prec_pro`, `Desc_pro`, `img_pro`, `estado_pro`, `fecha_ingreso`, `CAT_Nom_cat`) VALUES
(1, 'Banana Split', '6000', 'Es un postre principalmente hecho de helado y banano', 'postres/bananasplit.png', 1, '2018-06-15 00:00:00', 'Postres'),
(2, 'Brownie con Helado', '5000', 'Es un pastelito de chocolate acompañado con una bola de helado', 'postres/brownie-con-helado.png', 1, '2018-06-15 00:00:00', 'Postres'),
(3, 'Fresas Con Crema de Leche', '5000', 'Este es un postre que viene en una copa de fresas con crema de leche', 'postres/fresa-con-crema.png', 1, '2018-06-15 00:00:00', 'Postres'),
(4, 'Copa de Helado Grande', '5000', 'Es una copa de helado que contiene helado, galletas, barquillos y algunas frutas', 'postres/copa-de-helado-grande.png', 1, '2018-06-15 00:00:00', 'Postres'),
(5, 'Copa de Helado Pequeña', '4000', 'Es una copa de helado que contiene helado, galleta y barquillos ', 'postres/copa-de-helado-pequeña.png', 1, '2018-06-15 00:00:00', 'Postres'),
(6, 'Fresas Con Crema y Helado', '5500', 'Este es un postre que viene en una copa de fresas con crema de leche y helado', 'postres/fresas-con-helado.png', 1, '2018-06-15 00:00:00', 'Postres'),
(7, 'Malteada de Mora', '4000', 'Es una bebida de sabor a mora ademas de ser a base de leche contiene helado y cereza', 'bebidas/malteada-mora.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(8, 'Malteada de Fresa', '4000', 'Es una bebida de sabor a fresa ademas de ser a base de leche contiene helado y cereza', 'bebidas/malteada-fresa.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(9, 'Malteada de Vainilla', '4000', 'Es una bebida de sabor a vainilla ademas de ser a base de leche contiene helado y cereza', 'bebidas/Malteada-de-Vainilla.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(10, 'Malteada de Nata', '4000', 'Es una bebida de sabor a nata ademas de ser a base de leche contiene helado y cereza', 'bebidas/malteada-de-nata.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(11, 'Malteada de Mandarina', '4000', 'Es una bebida de sabor a mora ademas de ser a base de leche contiene helado y cereza', 'bebidas/mandarina.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
(12, 'Malteada de Arequipe', '1500', 'Es una bebida de sabor a mora ademas de ser a base de leche contiene helado y cereza', 'bebidas/malteada-de-arequipe.png', 1, '2018-06-15 00:00:00', 'Bebidas'),
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
(30, 'Ensalada Junior', '4000', 'Sabrosa ensalada juniro acompañada de helado crema de leche frutas al gusto y galleta', 'ensaladas/ensalada-junior.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(31, 'Ensalada Junior Especial', '5000', 'Nutritiva en especial con queso crema de leche variedad de frutas y tres bolas de helado con barquillo', 'ensaladas/ensalada-junior-especial.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(32, 'Ensalada Sencilla', '6000', 'Ensalada sencilla con crema de leche y frutas al gusto', 'ensaladas/senacilla.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(33, 'Ensalada Especial', '6500', 'Nutritiva y deliciosa ensalada especial acompañada con crema de leche queso helado y salsa de chocolate', 'ensaladas/especial.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(34, 'Ensalada Super Especial', '7000', 'Nutritiva y deliciosa ensalada super especial mcuho mas grande que la super especial acompañada con crema de leche queso helado y salsa de chocolate ', 'ensaladas/super-especial.png', 1, '2018-06-15 00:00:00', 'Ensaladas'),
(35, 'Pocion de Fruta', '3000', 'Es una porcion que contiene distintas frutas nutritivas ', 'ensaladas/porcion-de-fruta.png', 1, '2018-06-15 00:00:00', 'Ensaladas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_has_ingredientes`
--

CREATE TABLE IF NOT EXISTS `producto_has_ingredientes` (
  `PRODUCTO_cod_producto` int(11) NOT NULL,
  `Ingredientes_cod_ingrediente` int(11) NOT NULL,
  PRIMARY KEY (`PRODUCTO_cod_producto`,`Ingredientes_cod_ingrediente`),
  KEY `fk_PRODUCTO_has_Ingredientes_Ingredientes1_idx` (`Ingredientes_cod_ingrediente`),
  KEY `fk_PRODUCTO_has_Ingredientes_PRODUCTO1_idx` (`PRODUCTO_cod_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`IdPROVEEDOR`, `Nom_provee`, `Estado_provee`, `Telefono_provee`, `Direccion_provee`) VALUES
(1, 'marcos', 1, 3055722039, 'calle 117 b sur # 0-15'),
(2, 'marlon', 1, 2009642, 'calle 115 b este #0-20');

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
  `Tipo_telefono` varchar(15) NOT NULL,
  `Num_tel` bigint(20) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_usu`,`Tipo_doc_Tipo_doc`),
  KEY `fk_Usuario_Tipo_doc1_idx` (`Tipo_doc_Tipo_doc`),
  KEY `fk_Usuario_Rol1_idx` (`Rol_nom_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usu`, `Nom_usu`, `Pass_usu`, `Tipo_doc_Tipo_doc`, `Rol_nom_rol`, `Estado_usu`, `Tipo_telefono`, `Num_tel`, `Correo`) VALUES
(123, 'ejemplo', '123', 'TI', 'Cliente', 0, 'Celular', 123123, 'marlon99@gmail.com'),
(124, 'andres', 'temp123', 'TI', 'Cliente', 1, 'Celular', 2231233, 'marlon99@gmail.com'),
(333, 'diego', '123', 'TI', 'Empleado', 1, 'Celular', 42341243, 'marlon99@gmail.com'),
(444, 'sebastian puto', '123', 'TI', 'Cliente', 1, 'Celular', 2008238, 'marlon99@gmail.com'),
(9908, 'marlon', '123', 'TI', 'Administrador', 1, 'Celular', 132283958, 'marlon99@gmail.com'),
(9999, 'angie', '123', 'TI', 'Cliente', 1, 'Celular', 3132285958, 'marlon99@gmail.com'),
(39551696, 'luz', '123', 'TI', 'Cliente', 1, 'Celular', 3044722039, 'marlon99@gmail.com');

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
(123, 'TI', 'Hogar', 123123),
(9999, 'TI', 'Celular', 3132285958),
(39551696, 'TI', 'Celular', 3044722039);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_Compra_PRODUCTO1` FOREIGN KEY (`PRODUCTO_cod_producto`) REFERENCES `producto` (`cod_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Compra_Usuario1` FOREIGN KEY (`Usuario_Id_usu`, `Usuario_Tipo_doc_Tipo_doc`) REFERENCES `usuario` (`Id_usu`, `Tipo_doc_Tipo_doc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD CONSTRAINT `fk_Ingredientes_PROVEEDOR1` FOREIGN KEY (`PROVEEDOR_idPROVEEDOR`) REFERENCES `proveedor` (`IdPROVEEDOR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `fk_Inventario_Ingredientes1` FOREIGN KEY (`Ingredientes_cod_ingrediente`) REFERENCES `ingredientes` (`cod_ingrediente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Inventario_Usuario1` FOREIGN KEY (`Usuario_id_usu`, `Usuario_Tipo_doc_Tipo_doc`) REFERENCES `usuario` (`Id_usu`, `Tipo_doc_Tipo_doc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_PRODUCTO_CATEGORIADELPRODUCTO1` FOREIGN KEY (`CAT_Nom_cat`) REFERENCES `categoriadelproducto` (`Nom_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_has_ingredientes`
--
ALTER TABLE `producto_has_ingredientes`
  ADD CONSTRAINT `fk_PRODUCTO_has_Ingredientes_Ingredientes1` FOREIGN KEY (`Ingredientes_cod_ingrediente`) REFERENCES `ingredientes` (`cod_ingrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PRODUCTO_has_Ingredientes_PRODUCTO1` FOREIGN KEY (`PRODUCTO_cod_producto`) REFERENCES `producto` (`cod_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`Rol_nom_rol`) REFERENCES `rol` (`Nom_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Usuario_Tipo_doc1` FOREIGN KEY (`Tipo_doc_Tipo_doc`) REFERENCES `tipo_doc` (`Tipo_doc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_has_tipo_telefono`
--
ALTER TABLE `usuario_has_tipo_telefono`
  ADD CONSTRAINT `fk_Usuario_has_Tipo_telefono_Tipo_telefono1` FOREIGN KEY (`Tipo_telefono_Tipo_telefono`) REFERENCES `tipo_telefono` (`Tipo_telefono`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Usuario_has_Tipo_telefono_Usuario1` FOREIGN KEY (`Usuario_id_usu`, `Usuario_Tipo_doc_Tipo_doc`) REFERENCES `usuario` (`Id_usu`, `Tipo_doc_Tipo_doc`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
