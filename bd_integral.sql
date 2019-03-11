-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 04:51 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_integral`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria_int`
--

CREATE TABLE `categoria_int` (
  `id` int(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria_int`
--

INSERT INTO `categoria_int` (`id`, `categoria`) VALUES
(1, 'automoviles'),
(2, 'repuestos'),
(3, 'usados'),
(4, 'accesorios');

-- --------------------------------------------------------

--
-- Table structure for table `inv_activos`
--

CREATE TABLE `inv_activos` (
  `id` int(255) NOT NULL,
  `activo` varchar(255) NOT NULL,
  `fecha_compra` date NOT NULL,
  `valor` varchar(255) NOT NULL,
  `depresiacion` varchar(255) NOT NULL,
  `valor_restante` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_comercial`
--

CREATE TABLE `inv_comercial` (
  `id` int(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `costo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `dias` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `categoria` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inv_comercial`
--

INSERT INTO `inv_comercial` (`id`, `codigo`, `producto`, `costo`, `fecha`, `dias`, `estado`, `categoria`) VALUES
(1, '001', 'spark GT', '22000000', '2019-01-14', '1', 'disponible', 1),
(2, '002', 'camaro GT', '13000000', '2019-01-13', '2', 'disponible', 1),
(3, '001', 'pantalla pioner', '25000', '2019-01-15', '1', 'disponible', 4),
(4, '001', 'caja de cambios FTR', '1500000', '2019-01-09', '1', 'disponible', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inv_otros`
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
-- Dumping data for table `inv_otros`
--

INSERT INTO `inv_otros` (`id`, `producto`, `descripcion`, `comprador`, `area`, `fecha_compra`, `proveedor`, `costo`, `unidades`) VALUES
(1, 'Gaseosas', 'Gasesosas para evento de fin de año', 'Neto', 'Sistemas', '2019-01-08', 'Postobón S.A', '500000', '120'),
(2, 'choclatinas', 'Para evento de fin de año', 'Neto', 'Sistemas', '2019-01-08', 'Chocolates de Colombia', '30000', '100');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `rol` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`, `nombre`, `rol`) VALUES
(1, 'admin', '123', 'luis fernando reyes', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_int`
--
ALTER TABLE `categoria_int`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_activos`
--
ALTER TABLE `inv_activos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_comercial`
--
ALTER TABLE `inv_comercial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_otros`
--
ALTER TABLE `inv_otros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_int`
--
ALTER TABLE `categoria_int`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inv_activos`
--
ALTER TABLE `inv_activos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inv_comercial`
--
ALTER TABLE `inv_comercial`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inv_otros`
--
ALTER TABLE `inv_otros`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
