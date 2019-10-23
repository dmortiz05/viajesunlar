-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-10-2019 a las 11:32:59
-- Versión del servidor: 10.1.38-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_parque`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idalumno` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `dni` int(11) NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `telefono` int(11) NOT NULL,
  `codigomatricula` int(10) NOT NULL,
  `numeromatricula` int(10) NOT NULL,
  `gruposanguineo` int(10) NOT NULL,
  `polizaseguro` int(10) NOT NULL,
  `observaciones` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automotor`
--

CREATE TABLE `automotor` (
  `idautomotor` int(11) NOT NULL,
  `patente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `proximoservice` date NOT NULL,
  `sede` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `automotor`
--

INSERT INTO `automotor` (`idautomotor`, `patente`, `marca`, `modelo`, `tipo`, `proximoservice`, `sede`, `observaciones`) VALUES
(1, 'HEM 338', 'PEUGEOT', '407 HDI', 'SEDAN', '2019-06-29', 'Capital', NULL),
(2, 'AJE 456', 'MERCEDES BENZ', '400 RSD', 'OMNIBUS', '2019-06-29', 'Capital', NULL),
(3, 'ERF 214', 'TOYOTA', 'HILUX', 'PICK-UP', '2019-06-29', 'Capital', NULL),
(4, 'HJK 484', 'MERCEDES BENZ', 'SPRINTER 413', 'MINIBUS', '2019-06-29', 'Capital', NULL),
(5, 'KNJ 444', 'NISSAN', 'SENTRA', 'SEDAN', '2019-06-29', 'Capital', NULL),
(6, 'LHE 304', 'MERCEDES BENZ', 'LO915', 'MINIBUS', '2019-06-29', 'Capital', NULL),
(7, 'LMA 550', 'MERCEDES BENZ', 'O500', 'OMNIBUS', '2019-06-29', 'Capital', NULL),
(8, 'AOB 914', 'TOYOTA', 'HILUX', 'PICK-UP', '2019-06-29', 'Capital', 'PARQUE SOLAR'),
(9, 'LTY 049', 'VOLKSWAGEN', '8-150', 'CAMION', '2019-06-29', 'Capital', NULL),
(10, 'LHE 344', 'TOYOTA', 'HILUX', 'PICK-UP', '2019-06-29', 'Capital', 'MUSEO'),
(11, 'LRX 524', 'TOYOTA', 'HILUX', 'PICK-UP', '2019-06-29', 'Capital', 'PEA'),
(12, 'FOA 317', 'CHEVROLET', 'S10', 'PICK-UP', '2019-06-29', 'Capital', 'HOSPITAL'),
(13, 'JWY 135', 'RENAULT', 'KANGOO 1.5 DCI', 'UTILITARIO', '2019-06-29', 'Ulapes', NULL),
(14, 'FOA 316', 'CHEVROLET', 'S10', 'PICK-UP', '2019-06-29', 'Olta', NULL),
(15, 'ERF 220', 'MERCEDES BENZ', 'SPRINTER 413', 'MINIBUS', '2019-06-29', 'Aimogasta', NULL),
(16, 'LHE 345', 'TOYOTA', '4x2 HILUX SR 3.0', 'PICK-UP', '2019-06-29', 'Aimogasta', NULL),
(17, 'FOA 314', 'MERCEDES BENZ', 'SPRINTER 413', 'MINIBUS', '2019-06-29', 'Chamical', NULL),
(18, 'LWE 200', 'TOYOTA', 'HILUX', 'PICK-UP', '2019-06-29', 'Chamical', 'NUEVA'),
(19, 'JWY 505', 'RENAULT', 'HILUX', 'PICK-UP', '2019-06-29', 'Chamical', NULL),
(20, 'CUX 973', 'FORD', 'TRANSIT 190L', 'COMBI', '2019-06-29', 'Villa Union', NULL),
(21, 'LMA 505', 'TOYOTA', '4x2 HILUX SR 3.0', 'PICK-UP', '2019-06-29', 'Villa Union', NULL),
(22, 'LMA 504', 'TOYOTA', '4x2 HILUX SR 3.0', 'PICK-UP', '2019-06-29', 'Chepes', NULL),
(23, 'ERF 221', 'MERCEDES BENZ', 'SPRINTER 413', 'MINIBUS', '2019-06-29', 'Catuna', NULL),
(24, 'LJM 729', 'TOYOTA', 'HILUX 4x2', 'PICK-UP', '2019-06-29', 'Catuna', NULL),
(25, 'HJK 485', 'MERCEDES BENZ', 'SPRINTER 413', 'COMBI', '2019-06-29', 'Capital', 'HOSPITAL (AMBULANCIA)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automotorchofer`
--

CREATE TABLE `automotorchofer` (
  `idautomotor` int(11) NOT NULL,
  `idchofer` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automotorviaje`
--

CREATE TABLE `automotorviaje` (
  `idautomotor` int(11) NOT NULL,
  `idviaje` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chofer`
--

CREATE TABLE `chofer` (
  `idchofer` int(11) NOT NULL,
  `dni` bigint(10) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` bigint(30) NOT NULL,
  `gruposanguineo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `polizaseguro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `licencia` int(15) NOT NULL,
  `vencimientocarnet` date NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `chofer`
--

INSERT INTO `chofer` (`idchofer`, `dni`, `nombre`, `apellido`, `direccion`, `telefono`, `gruposanguineo`, `polizaseguro`, `licencia`, `vencimientocarnet`, `observaciones`) VALUES
(4, 12121212, 'asdf', 'wsadf', 'asdf', 2323232323, 'A+', 'asdf', 1234, '2019-10-24', 'sdzfcgvhb'),
(7, 38332626, 'Priscila', 'Orona', 'Retamo', 3804628739, 'B+', 'asdf', 1234, '2019-10-29', 'dzbfgbnhj,h');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `iddocente` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `dni` int(11) NOT NULL,
  `legajo` int(10) NOT NULL,
  `telefono` int(11) NOT NULL,
  `gruposanguineo` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `polizaseguro` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `observaciones` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargadodeviaje`
--

CREATE TABLE `encargadodeviaje` (
  `idencargadodeviaje` int(11) NOT NULL,
  `idviaje` int(11) NOT NULL,
  `dni` int(10) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(30) NOT NULL,
  `email` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `gruposanguineo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `polizaseguro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idevento` int(11) NOT NULL,
  `titulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `final` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graduado`
--

CREATE TABLE `graduado` (
  `idgraduado` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `dni` int(11) NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `telefono` int(11) NOT NULL,
  `codigomatricula` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `numeromatricula` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `gruposanguineo` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `polizaseguro` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `observaciones` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nodocente`
--

CREATE TABLE `nodocente` (
  `idnodocente` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `dni` int(11) NOT NULL,
  `legajo` int(10) NOT NULL,
  `telefono` int(11) NOT NULL,
  `gruposanguineo` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `polizaseguro` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `observaciones` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro`
--

CREATE TABLE `otro` (
  `idotro` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `dni` int(11) NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `telefono` int(11) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `gruposanguineo` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `aseguradora` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `codigoseguro` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `razonviaje` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `observaciones` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajero`
--

CREATE TABLE `pasajero` (
  `idpasajero` int(11) NOT NULL,
  `idviaje` int(11) NOT NULL,
  `dni` int(10) NOT NULL,
  `codigomatricula` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `numeromatricula` int(10) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(30) NOT NULL,
  `gruposanguineo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `polizaseguro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `idpresupuesto` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `combustible` decimal(10,0) NOT NULL,
  `imprevisto` decimal(10,0) NOT NULL,
  `lavado` decimal(10,0) NOT NULL,
  `peaje` decimal(10,0) NOT NULL,
  `estacionamiento` decimal(10,0) NOT NULL,
  `viatico` decimal(10,0) NOT NULL,
  `observaciones` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Se especifica el presupuesto de el viaje realizado';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nickname` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE `viaje` (
  `idviaje` int(11) NOT NULL,
  `codigoexpediente` int(10) NOT NULL,
  `numeroorden` int(10) NOT NULL,
  `anioexpediente` int(10) NOT NULL,
  `sedeorigen` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `destinoprovincia` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `destinolocalidad` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `distanciaestimada` int(30) NOT NULL,
  `fechasalida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecharegreso` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `motivoviaje` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idalumno`),
  ADD UNIQUE KEY `idalumno` (`idalumno`),
  ADD KEY `idalumno_2` (`idalumno`),
  ADD KEY `idalumno_3` (`idalumno`);

--
-- Indices de la tabla `automotor`
--
ALTER TABLE `automotor`
  ADD PRIMARY KEY (`idautomotor`);

--
-- Indices de la tabla `automotorchofer`
--
ALTER TABLE `automotorchofer`
  ADD KEY `fkidautomotor` (`idautomotor`),
  ADD KEY `fkidchofer` (`idchofer`);

--
-- Indices de la tabla `automotorviaje`
--
ALTER TABLE `automotorviaje`
  ADD KEY `fkidautomotor` (`idautomotor`),
  ADD KEY `fkidviaje` (`idviaje`);

--
-- Indices de la tabla `chofer`
--
ALTER TABLE `chofer`
  ADD PRIMARY KEY (`idchofer`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`iddocente`),
  ADD UNIQUE KEY `iddocente` (`iddocente`);

--
-- Indices de la tabla `encargadodeviaje`
--
ALTER TABLE `encargadodeviaje`
  ADD PRIMARY KEY (`idencargadodeviaje`),
  ADD KEY `fkidviaje` (`idviaje`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idevento`);

--
-- Indices de la tabla `graduado`
--
ALTER TABLE `graduado`
  ADD PRIMARY KEY (`idgraduado`),
  ADD UNIQUE KEY `idgraduado` (`idgraduado`);

--
-- Indices de la tabla `nodocente`
--
ALTER TABLE `nodocente`
  ADD PRIMARY KEY (`idnodocente`),
  ADD UNIQUE KEY `idnodocente` (`idnodocente`);

--
-- Indices de la tabla `otro`
--
ALTER TABLE `otro`
  ADD PRIMARY KEY (`idotro`),
  ADD UNIQUE KEY `idotro` (`idotro`);

--
-- Indices de la tabla `pasajero`
--
ALTER TABLE `pasajero`
  ADD PRIMARY KEY (`idpasajero`),
  ADD KEY `fkidviaje` (`idviaje`);

--
-- Indices de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`idpresupuesto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`idviaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idalumno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `automotor`
--
ALTER TABLE `automotor`
  MODIFY `idautomotor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `chofer`
--
ALTER TABLE `chofer`
  MODIFY `idchofer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `iddocente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `encargadodeviaje`
--
ALTER TABLE `encargadodeviaje`
  MODIFY `idencargadodeviaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `graduado`
--
ALTER TABLE `graduado`
  MODIFY `idgraduado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nodocente`
--
ALTER TABLE `nodocente`
  MODIFY `idnodocente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `otro`
--
ALTER TABLE `otro`
  MODIFY `idotro` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pasajero`
--
ALTER TABLE `pasajero`
  MODIFY `idpasajero` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  MODIFY `idpresupuesto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `idviaje` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
