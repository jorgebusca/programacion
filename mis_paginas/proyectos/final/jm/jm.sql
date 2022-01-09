-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2020 a las 01:37:52
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `clavecarrito` int(11) NOT NULL,
  `idcarrito` int(11) NOT NULL,
  `idusario` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`clavecarrito`, `idcarrito`, `idusario`, `idproducto`, `cantidad`) VALUES
(1, 1, 1, 1, 2),
(2, 1, 1, 2, 3),
(3, 2, 2, 2, 4),
(4, 2, 2, 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `IDCATEGORIA` int(11) NOT NULL,
  `DESCRIPCION` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`IDCATEGORIA`, `DESCRIPCION`) VALUES
(1, 'HERRAMIENTAS'),
(2, 'ELECTRICIDAD'),
(3, 'REPUESTOS'),
(4, 'MAQUINARIA PESADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `IDPRODUCTO` int(11) NOT NULL,
  `NOMBRE` varchar(500) NOT NULL,
  `DETALLE` varchar(500) NOT NULL,
  `PRECIO` double NOT NULL,
  `IDCATEGORIA` int(11) NOT NULL,
  `FOTO` varchar(45) DEFAULT NULL,
  `ESOFERTA` tinyint(4) DEFAULT NULL,
  `IDUSUARIO_CREADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`IDPRODUCTO`, `NOMBRE`, `DETALLE`, `PRECIO`, `IDCATEGORIA`, `FOTO`, `ESOFERTA`, `IDUSUARIO_CREADO`) VALUES
(1, 'herramienta2', 'electrica', 800, 1, 'herramienta2.jpg', 0, 1),
(2, 'herramienta3', 'Taladro Staneley ', 850, 4, 'herramienta3.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IDUSUARIO` int(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `LEGAJO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDUSUARIO`, `EMAIL`, `PASSWORD`, `LEGAJO`) VALUES
(1, 'JMZ@YAHOO.COM', '123456', 222),
(2, 'PROFESOR@YAHOO.COM', '123456', 2223);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`clavecarrito`),
  ADD KEY `fkusuario` (`idusario`),
  ADD KEY `fkproducto` (`idproducto`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IDCATEGORIA`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`IDPRODUCTO`),
  ADD KEY `CATEGORIAITEMS` (`IDCATEGORIA`),
  ADD KEY `USUARIO_ITEMS` (`IDUSUARIO_CREADO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IDUSUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `clavecarrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `IDPRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fkproducto` FOREIGN KEY (`idproducto`) REFERENCES `items` (`IDPRODUCTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkusuario` FOREIGN KEY (`idusario`) REFERENCES `usuarios` (`IDUSUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `CATEGORIAITEMS` FOREIGN KEY (`IDCATEGORIA`) REFERENCES `categoria` (`IDCATEGORIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `USUARIO_ITEMS` FOREIGN KEY (`IDUSUARIO_CREADO`) REFERENCES `usuarios` (`IDUSUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
