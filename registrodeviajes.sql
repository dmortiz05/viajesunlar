-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-08-2019 a las 20:39:35
-- Versión del servidor: 10.3.12-MariaDB
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrodeviajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automotor`
--

DROP TABLE IF EXISTS `automotor`;
CREATE TABLE IF NOT EXISTS `automotor` (
  `idautomotor` int(11) NOT NULL AUTO_INCREMENT,
  `patente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `proximoservice` date NOT NULL,
  `sede` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idautomotor`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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

DROP TABLE IF EXISTS `automotorchofer`;
CREATE TABLE IF NOT EXISTS `automotorchofer` (
  `idautomotor` int(11) NOT NULL,
  `idchofer` int(11) NOT NULL,
  KEY `fkidautomotor` (`idautomotor`),
  KEY `fkidchofer` (`idchofer`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automotorviaje`
--

DROP TABLE IF EXISTS `automotorviaje`;
CREATE TABLE IF NOT EXISTS `automotorviaje` (
  `idautomotor` int(11) NOT NULL,
  `idviaje` int(11) NOT NULL,
  KEY `fkidautomotor` (`idautomotor`),
  KEY `fkidviaje` (`idviaje`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chofer`
--

DROP TABLE IF EXISTS `chofer`;
CREATE TABLE IF NOT EXISTS `chofer` (
  `idchofer` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(30) NOT NULL,
  `gruposanguineo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `polizaseguro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `licencia` int(15) NOT NULL,
  `vencimientocarnet` date NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idchofer`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `chofer`
--

INSERT INTO `chofer` (`idchofer`, `dni`, `nombre`, `apellido`, `direccion`, `telefono`, `gruposanguineo`, `polizaseguro`, `licencia`, `vencimientocarnet`, `observaciones`) VALUES
(1, '38926864', 'fefew', 'wfskdjbgk', 'fdsjngjksb', 651618616, 'A-', 'dgsdg', 651615, '2020-08-08', 'dgsdg'),
(2, '68268468', 'fefew', 'ugvbsdbg', 'sdkbgksdb', 261684681, 'A-', 'kdbskdbg', 646186, '2020-08-08', 'sdfsd'),
(3, '68486165', 'gdjksbgdksb', 'sdgnksdb', 'gkdjbgskjb', 6481864, 'B+', 'odighsd', 84684684, '0008-08-08', 'fsafas'),
(4, '36496554', 'ORTIZ', 'DIEGO', 'DSD', 381816841, 'AB-', 'EA456', 61648, '2020-08-08', 'SFS'),
(5, '36496554', 'DIEGO', 'ORTIZ', 'DSD', 381816841, 'AB-', 'EA456', 61648, '2020-08-08', 'SFS'),
(6, '38332626', 'IFWEHGIU', 'ASOGI', 'GWDIUGH', 304628739, '0+', 'EASGG45489', 849848, '2020-08-08', 'FER'),
(7, '38332626', 'Priscila', 'Orona', 'retamo', 38332626, 'AB+', 'WRA784', 98461, '2021-08-08', 'ERR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargadodeviaje`
--

DROP TABLE IF EXISTS `encargadodeviaje`;
CREATE TABLE IF NOT EXISTS `encargadodeviaje` (
  `idencargadodeviaje` int(11) NOT NULL AUTO_INCREMENT,
  `idviaje` int(11) NOT NULL,
  `dni` int(10) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(30) NOT NULL,
  `email` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `gruposanguineo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `polizaseguro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idencargadodeviaje`),
  KEY `fkidviaje` (`idviaje`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `idevento` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `inicio` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `final` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idevento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajero`
--

DROP TABLE IF EXISTS `pasajero`;
CREATE TABLE IF NOT EXISTS `pasajero` (
  `idpasajero` int(11) NOT NULL AUTO_INCREMENT,
  `idviaje` int(11) NOT NULL,
  `dni` int(10) NOT NULL,
  `codigocarrera` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nummatricula` int(10) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(30) NOT NULL,
  `gruposanguineo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `polizaseguro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idpasajero`),
  KEY `fkidviaje` (`idviaje`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

DROP TABLE IF EXISTS `presupuesto`;
CREATE TABLE IF NOT EXISTS `presupuesto` (
  `idpresupuesto` int(11) NOT NULL AUTO_INCREMENT,
  `total` decimal(10,0) NOT NULL,
  `combustible` decimal(10,0) NOT NULL,
  `imprevisto` decimal(10,0) NOT NULL,
  `lavado` decimal(10,0) NOT NULL,
  `peaje` decimal(10,0) NOT NULL,
  `estacionamiento` decimal(10,0) NOT NULL,
  `viatico` decimal(10,0) NOT NULL,
  `observaciones` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idpresupuesto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Se especifica el presupuesto de el viaje realizado';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

DROP TABLE IF EXISTS `viaje`;
CREATE TABLE IF NOT EXISTS `viaje` (
  `idviaje` int(11) NOT NULL AUTO_INCREMENT,
  `codigoexpediente` int(10) NOT NULL,
  `numorden` int(10) NOT NULL,
  `anioexpediente` int(10) NOT NULL,
  `sedeorigen` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `destinoprovincia` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `destinolocalidad` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `distanciaestimada` int(30) NOT NULL,
  `fechasalida` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecharegreso` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `motivoviaje` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idviaje`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
