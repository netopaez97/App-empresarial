-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2019 a las 16:23:57
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_integral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_int`
--

CREATE TABLE `categoria_int` (
  `id` int(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_int`
--

INSERT INTO `categoria_int` (`id`, `categoria`) VALUES
(1, 'automoviles'),
(2, 'repuestos'),
(3, 'usados'),
(4, 'accesorios'),
(5, '1'),
(6, '1'),
(7, '2'),
(8, '2'),
(9, '2'),
(10, '2'),
(11, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id` int(11) NOT NULL,
  `insumo` varchar(255) NOT NULL,
  `unidad_medida` varchar(255) NOT NULL,
  `costo` int(255) NOT NULL,
  `fecha_compra` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `proveedor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id`, `insumo`, `unidad_medida`, `costo`, `fecha_compra`, `fecha_vencimiento`, `proveedor`) VALUES
(1, 'Límpido', 'litros', 50000, '2019-03-09', '2019-03-21', 'La Victoria'),
(2, 'Límpido', 'litros', 50000, '2019-03-09', '2019-03-21', 'La Victoria'),
(3, 'Escoba', 'NA', 2000, '2019-03-21', '2019-03-21', 'La mejor'),
(4, 'Escoba', 'NA', 2000, '2019-03-21', '2019-03-21', 'La mejor'),
(5, 'Escoba', 'NA', 2000, '2019-03-21', '2019-03-21', 'La mejor'),
(6, 'chasis', 'NA', 2000000, '2019-03-14', '2019-03-31', 'Caterpillar'),
(7, 'Límpido', 'litros', 50000, '2019-03-09', '2019-03-21', 'La Victoria'),
(8, 'Escoba', 'NA', 15000, '2019-03-21', '2019-03-21', 'La mejor'),
(9, 'Desodorante', 'ml', 5000, '2019-03-28', '2019-04-20', 'Speed Stick'),
(10, 'Desodorante', 'ml', 5000, '2019-03-28', '2019-04-20', 'Speed Stick'),
(11, 'Desodorante', 'ml', 5000, '2019-03-28', '2019-04-20', 'Speed Stick'),
(12, 'Desodorante', 'ml', 5000, '2019-03-28', '2019-04-20', 'Speed Stick');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos_servicio`
--

CREATE TABLE `insumos_servicio` (
  `id` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_insumo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_activos`
--

CREATE TABLE `inv_activos` (
  `id` int(255) NOT NULL,
  `activo` varchar(255) NOT NULL,
  `fecha_compra` date NOT NULL,
  `valor` varchar(255) NOT NULL,
  `depreciacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inv_activos`
--

INSERT INTO `inv_activos` (`id`, `activo`, `fecha_compra`, `valor`, `depreciacion`) VALUES
(1, 'Computador de mesa', '2019-01-02', '3000000', '6'),
(2, 'Servidor 1', '2019-01-16', '5000000', '10'),
(3, 'Neto', '2019-03-13', '12345', '1'),
(4, 'Neto', '2019-03-07', '12345', '1'),
(5, 'Neto', '2019-03-06', '12', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_comercial`
--

CREATE TABLE `inv_comercial` (
  `id` int(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `costo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(255) NOT NULL,
  `categoria` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inv_comercial`
--

INSERT INTO `inv_comercial` (`id`, `codigo`, `producto`, `costo`, `fecha`, `estado`, `categoria`) VALUES
(1, '001', 'Spark GT', '22000000', '2019-01-14', 'disponible', 1),
(2, '002', 'camaro GT', '13000000', '2019-01-13', 'disponible', 1),
(3, '001', 'pantalla pioner', '25000', '2019-01-15', 'disponible', 4),
(4, '001', 'caja de cambios FTR', '1500000', '2019-01-09', 'disponible', 2),
(5, '40', 'Sail', '45000000', '2019-01-25', 'disponible', 1),
(6, '004', 'Spark GT', '22000000', '2019-01-16', 'disponible', 1),
(7, '12331', 'Spark GT', '32000000', '2019-02-07', 'Disponible', 1),
(8, '010', 'camaro GT', '13000000', '2019-02-05', 'no disponible', 2),
(36, '1234', 'Aveo Sedan', '1234', '2019-03-01', 'Disponible', 1),
(37, '1234', 'Aveo Sedan', '1234', '2019-03-01', 'Disponible', 1),
(38, '1234', 'Aveo Sedan', '1234', '2019-03-01', 'Disponible', 1),
(39, '123', 'Sensor de reversa', '12345', '2019-03-14', 'Disponible', 4),
(40, '123', 'Sensor de reversa', '12345', '2019-03-14', 'Disponible', 4),
(41, '123', 'Sensor de reversa', '12345', '2019-03-14', 'Disponible', 4),
(42, '123', 'Sensor de reversa', '12345', '2019-03-14', 'Disponible', 4),
(43, '123', 'Aveo Sedan', '1234', '2019-03-21', 'Disponible', 1403),
(44, '123', 'Aveo Sedan', '1234', '2019-03-21', 'Disponible', 1403),
(45, '123', 'Aveo Sedan', '1234', '2019-03-21', 'Disponible', 1403),
(46, '123', 'Spark GT', '1234', '2019-03-15', 'Disponible', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_otros`
--

CREATE TABLE `inv_otros` (
  `id` int(255) NOT NULL,
  `producto` varchar(255) DEFAULT NULL,
  `descripcion` mediumtext,
  `comprador` varchar(255) DEFAULT NULL,
  `area` varchar(2255) DEFAULT NULL,
  `fecha_compra` date DEFAULT NULL,
  `proveedor` varchar(255) DEFAULT NULL,
  `costo` varchar(255) DEFAULT NULL,
  `unidades` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inv_otros`
--

INSERT INTO `inv_otros` (`id`, `producto`, `descripcion`, `comprador`, `area`, `fecha_compra`, `proveedor`, `costo`, `unidades`) VALUES
(1, 'Gaseosas', 'Gasesosas para evento de fin de año', 'Neto', 'Sistemas', '2019-01-08', 'Postobón S.A', '500000', '120'),
(2, 'choclatinas', 'Para evento de fin de año', 'Neto', 'Sistemas', '2019-01-08', 'Chocolates de Colombia', '30000', '100'),
(3, 'galletas festival', 'a', 'Luis Ernesto', 'Sistemas', '2019-01-09', 'Colombina', '20000', '40'),
(4, 'Papas', 'a', 'Luis Fernando', 'Prueba', '2019-01-02', 'Margarita', '30000', '30'),
(8, 'a', 'a', 'a', 'a', '2019-03-27', 'a', '123', '1'),
(9, 'Otros', 'Producto de prueba', 'Luis Ernesto', 'Gip', '2019-03-06', 'CerrejÃ³n', '45000', '1'),
(10, 'Neto', 'Neto', 'Neto', 'Neto', '2019-03-15', 'PostobÃ³n S.A', '12345', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_referencia`
--

CREATE TABLE `producto_referencia` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `codigo_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_referencia`
--

INSERT INTO `producto_referencia` (`id`, `nombre`, `codigo_categoria`) VALUES
(1, 'Spark GT', '1'),
(2, 'camaro GT', '1'),
(3, 'admin', '123'),
(4, 'Aveo Sedan', '1403'),
(5, 'Spark Lite', '1'),
(6, 'Sensor de reversa', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `valor`) VALUES
(1, 'Mantenimiento preventivo', 250000),
(2, 'Cambio de chasis', 100000),
(4, 'Cambio de aceite', 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `rol` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`, `nombre`, `rol`) VALUES
(1, 'admin', '123', 'luis fernando reyes', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_int`
--
ALTER TABLE `categoria_int`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `insumos_servicio`
--
ALTER TABLE `insumos_servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_insumo` (`id_insumo`);

--
-- Indices de la tabla `inv_activos`
--
ALTER TABLE `inv_activos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_comercial`
--
ALTER TABLE `inv_comercial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_otros`
--
ALTER TABLE `inv_otros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto_referencia`
--
ALTER TABLE `producto_referencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_int`
--
ALTER TABLE `categoria_int`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `insumos_servicio`
--
ALTER TABLE `insumos_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inv_activos`
--
ALTER TABLE `inv_activos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `inv_comercial`
--
ALTER TABLE `inv_comercial`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `inv_otros`
--
ALTER TABLE `inv_otros`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `producto_referencia`
--
ALTER TABLE `producto_referencia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `insumos_servicio`
--
ALTER TABLE `insumos_servicio`
  ADD CONSTRAINT `insumos_servicio_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id`),
  ADD CONSTRAINT `insumos_servicio_ibfk_2` FOREIGN KEY (`id_insumo`) REFERENCES `insumos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
