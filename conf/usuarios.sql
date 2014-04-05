-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-04-2012 a las 11:53:47
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `idciudad` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `idprov` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idciudad`),
  KEY `idprov` (`idprov`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idciudad`, `nombre`, `idprov`) VALUES
(1, 'Vitoria-Gasteiz', 1),
(2, 'Salamanca', 2),
(3, 'Bilbo', 3),
(4, 'Donosti', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `userid` int(10) unsigned NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `descript` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `idpais` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idpais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idpais`, `nombre`) VALUES
(1, 'España');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prov`
--

CREATE TABLE IF NOT EXISTS `prov` (
  `idprov` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `idpais` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idprov`),
  KEY `idpais` (`idpais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `prov`
--

INSERT INTO `prov` (`idprov`, `nombre`, `idpais`) VALUES
(1, 'Álava', 1),
(2, 'Salamanca', 1),
(3, 'Bizkaia', 1),
(4, 'Gipuzkoa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relusertag`
--

CREATE TABLE IF NOT EXISTS `relusertag` (
  `iduser` int(10) unsigned NOT NULL,
  `idtag` int(10) unsigned NOT NULL,
  PRIMARY KEY (`iduser`,`idtag`),
  KEY `idtag` (`idtag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `idtag` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idtag`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tag`
--

INSERT INTO `tag` (`idtag`, `nombre`) VALUES
(1, 'gueno'),
(2, 'maaaaalo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cp` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idciudad` int(10) unsigned DEFAULT NULL,
  `boletin` tinyint(1) NOT NULL DEFAULT '1',
  `acepta` tinyint(1) NOT NULL DEFAULT '1',
  `encmethod` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'MD5',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `idciudad` (`idciudad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `pass`, `email`, `cp`, `idciudad`, `boletin`, `acepta`, `encmethod`) VALUES
(4, 'usuario', 'ad57484016654da87125db86f4227ea3', 'pepesan@gmail.com', '10101', 1, 1, 1, 'MD5'),
(7, 'usuario2', 'Pepesan27', 'pepesan@gmail.com', '10101', 2, 1, 1, 'none'),
(11, 'pepesan3', 'Newbeat2', 'pepesan2@gmail.com', '010102', 1, 0, 0, 'none'),
(12, 'pepesan27', 'Sta3war2', 'pepesan@gmail.com', '01010', 1, 1, 1, 'none');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`idprov`) REFERENCES `prov` (`idprov`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prov`
--
ALTER TABLE `prov`
  ADD CONSTRAINT `prov_ibfk_1` FOREIGN KEY (`idpais`) REFERENCES `pais` (`idpais`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `relusertag`
--
ALTER TABLE `relusertag`
  ADD CONSTRAINT `relusertag_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relusertag_ibfk_2` FOREIGN KEY (`idtag`) REFERENCES `tag` (`idtag`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idciudad`) REFERENCES `ciudad` (`idciudad`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
