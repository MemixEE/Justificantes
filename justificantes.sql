-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-05-2019 a las 00:19:18
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `justificantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `justificante`
--

CREATE TABLE `justificante` (
  `id` int(11) NOT NULL,
  `numeroDeCuenta` int(11) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaVigencia` datetime NOT NULL,
  `fechaInicial` datetime NOT NULL,
  `fechaFinal` datetime NOT NULL,
  `correoTutor` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `correoCordinador` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `motivo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `evidencia` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(60) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'PENDIENTE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `justificante`
--

INSERT INTO `justificante` (`id`, `numeroDeCuenta`, `fechaCreacion`, `fechaVigencia`, `fechaInicial`, `fechaFinal`, `correoTutor`, `correoCordinador`, `motivo`, `descripcion`, `evidencia`, `status`) VALUES
(4, 20177912, '2019-05-15 03:12:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nose@ucol.mx', 'jose@ucol.mx', 'VIAJE', 'me fui de campamento.', 'png', 'PENDIENTE'),
(9, 20147712, '2019-05-21 17:15:02', '2019-05-22 04:14:01', '2019-05-20 07:00:00', '2019-05-20 09:30:00', 'nose@ucol.mx', 'nose@ucol.mx', 'ENFERMEDAD', 'dwedwed', 'png', 'PENDIENTE'),
(10, 2015882, '2019-05-21 17:15:02', '2019-05-23 02:07:06', '2019-05-19 00:00:00', '2019-05-20 00:00:00', 'jose@ucol.mx', 'josefina@ucol.mx', 'ASUNTOS PERSONALES', 'dwededew', 'jpg', 'PENDIENTE'),
(14, 32113, '2019-05-21 17:18:18', '2019-05-13 00:00:00', '2019-05-23 00:00:00', '2019-05-30 00:00:00', 'dwedwe@ucol.mx', 'ded@uco.mx', 'VIAJE', 'dede', 'png', 'PENDIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo`
--

CREATE TABLE `motivo` (
  `id` int(11) NOT NULL,
  `motivo` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `motivo`
--

INSERT INTO `motivo` (`id`, `motivo`) VALUES
(2, 'ASUNTOS PERSONALES'),
(1, 'ENFERMEDAD'),
(3, 'VIAJE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `justificante`
--
ALTER TABLE `justificante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motivo_2` (`motivo`),
  ADD KEY `motivo` (`motivo`) USING BTREE;

--
-- Indices de la tabla `motivo`
--
ALTER TABLE `motivo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `motivo` (`motivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `justificante`
--
ALTER TABLE `justificante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `motivo`
--
ALTER TABLE `motivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `justificante`
--
ALTER TABLE `justificante`
  ADD CONSTRAINT `motivos` FOREIGN KEY (`motivo`) REFERENCES `motivo` (`motivo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
