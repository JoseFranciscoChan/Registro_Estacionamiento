-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 06:32:50
-- Versión del servidor: 10.4.20-MariaDB-log
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registroestacionamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_Admin` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_Admin`, `nombre`, `direccion`, `telefono`, `usuario`, `password`) VALUES
(5, 'Jose Francisco Chan Haas', 'Calle 16 S/N Barrio San Roman, Nunkini, Calkini, Campeche', 2147483647, 'al01@uacam.mx', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'Domingo', 'Campeche', 7987878, 'al02@uacam.mx', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificación`
--

CREATE TABLE `identificación` (
  `id` int(11) NOT NULL,
  `Indentificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `punto_de_atención`
--

CREATE TABLE `punto_de_atención` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Dirección` text COLLATE utf8_spanish2_ci NOT NULL,
  `Espacios` int(11) NOT NULL,
  `EspaciosDisponibles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `punto_de_atención`
--

INSERT INTO `punto_de_atención` (`id`, `Nombre`, `Dirección`, `Espacios`, `EspaciosDisponibles`) VALUES
(1, 'Universidad Autonoma de Campeche\r\nFacultad de Ingenieria', 'Predio s/n por Av. Humberto Lanz Cárdenas Siglo XXIII, Av. Exhacienda Kala, 24085 Campeche, Camp.', 10, 10),
(2, '1', '1', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `Fecha` text COLLATE utf8_spanish2_ci NOT NULL,
  `Hora` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `id_indentificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehículo`
--

CREATE TABLE `vehículo` (
  `id` int(11) NOT NULL,
  `NombeUsuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Indentificacion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Tipo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Modelo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Color` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Matricula` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `id_tick` int(11) NOT NULL,
  `Fecha` text COLLATE utf8_spanish2_ci NOT NULL,
  `Hora` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vehículo`
--

INSERT INTO `vehículo` (`id`, `NombeUsuario`, `Indentificacion`, `Tipo`, `Modelo`, `Color`, `Matricula`, `id_tick`, `Fecha`, `Hora`) VALUES
(1, 'Jose Chan', 'Alumno', 'Motocicleta', 'ft 180 tc', 'negro y azul', 'fdfd12', 1, '2021-11-17', '09:27'),
(2, 'Jose Chan', 'Alumno', 'Motocicleta', 'ft 180 tc', 'negro y azul', 'fdfd12', 2, '2021-11-17', '09:27'),
(9, 'Domingo', 'visitante', 'Auto', 'chevrolet', 'Blanco', 'jhjhj5', 3, '2021-11-17', '09:27'),
(10, 'Marciana', 'profesor', 'Auto', 'Nissan', 'Azul', 'dsfdf5', 4, '2021-11-16', '10:29'),
(11, 'Eugenio', 'Personal administrativo', 'Auto', 'Nissan', 'Rojo', 'fsd45', 5, '2021-11-17', '15:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_Admin`);

--
-- Indices de la tabla `identificación`
--
ALTER TABLE `identificación`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `punto_de_atención`
--
ALTER TABLE `punto_de_atención`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehículo`
--
ALTER TABLE `vehículo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `identificación`
--
ALTER TABLE `identificación`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `punto_de_atención`
--
ALTER TABLE `punto_de_atención`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehículo`
--
ALTER TABLE `vehículo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
