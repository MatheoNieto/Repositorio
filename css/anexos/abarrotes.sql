-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2018 a las 16:19:11
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abarrotes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cedula_c` varchar(45) NOT NULL,
  `nombre_c` varchar(45) DEFAULT NULL,
  `telefono_c` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cedula_c`, `nombre_c`, `telefono_c`) VALUES
('12344321', 'María', '3420864'),
('123456780', 'Jairo', '3245644'),
('123456789', 'Carlos', '3323456'),
('43211234', 'Martha', '3421322'),
('987654321', 'Juan', '3309867');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombre_p` varchar(45) NOT NULL,
  `descripcion_p` varchar(100) DEFAULT NULL,
  `cantidad_p` int(11) DEFAULT NULL,
  `precio_p` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre_p`, `descripcion_p`, `cantidad_p`, `precio_p`) VALUES
(1, 'leche', 'bolsa con leche 1 lt', 50, 2000),
(2, 'pan tajado', 'pan tajado 250 gr', 50, 2500),
(3, 'papel hijiénico', 'papel hijiénico triple hoja', 50, 1500),
(4, 'shampoo', 'sobre de shampoo anticaspa', 50, 500),
(5, 'queso', 'queso cuajada 1 libra', 50, 3000),
(6, 'gaseosa', 'gaseosa 2 lts', 50, 2200),
(7, 'lentejas', 'lentejas 1 lb', 50, 2200),
(8, 'frijoles', 'frijoles 1 lb', 50, 3000),
(9, 'agua', 'bolsa con agua 350 mlt', 50, 500),
(10, 'panela', '1 atado de panela', 50, 2500),
(11, 'jamon', 'jamon 20 tajadas', 50, 5000),
(12, 'sal', 'sal 1 lb', 50, 1500),
(13, 'azúcar', 'azúcar 1 lb', 50, 2500),
(14, 'café', 'café 1 lb', 50, 3500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_r` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_r`) VALUES
(1, 'Aministrador'),
(2, 'Cajero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula_u` varchar(45) NOT NULL,
  `nombres_u` varchar(45) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `rol_id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula_u`, `nombres_u`, `password`, `rol_id_rol`) VALUES
('1088023625', 'Juan Jose', '1234', 1),
('12345', 'Camilo', '1234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cantidad_producto` int(11) DEFAULT NULL,
  `total_venta` int(11) DEFAULT NULL,
  `productos_id_productos` int(11) NOT NULL,
  `usuarios_cedula_u` varchar(45) NOT NULL,
  `clientes_cedula_c` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cedula_c`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula_u`),
  ADD KEY `fk_usuarios_rol_idx` (`rol_id_rol`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`),
  ADD KEY `fk_ventas_productos1_idx` (`productos_id_productos`),
  ADD KEY `fk_ventas_usuarios1_idx` (`usuarios_cedula_u`),
  ADD KEY `fk_ventas_clientes1_idx` (`clientes_cedula_c`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_rol` FOREIGN KEY (`rol_id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_ventas_clientes1` FOREIGN KEY (`clientes_cedula_c`) REFERENCES `clientes` (`cedula_c`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ventas_productos1` FOREIGN KEY (`productos_id_productos`) REFERENCES `productos` (`id_productos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ventas_usuarios1` FOREIGN KEY (`usuarios_cedula_u`) REFERENCES `usuarios` (`cedula_u`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
