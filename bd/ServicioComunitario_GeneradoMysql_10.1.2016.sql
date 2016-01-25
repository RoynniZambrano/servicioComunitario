-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-01-2016 a las 22:15:28
-- Versión del servidor: 5.5.46-0ubuntu0.14.04.2
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ServicioComunitario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `id_actividad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_actividad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `nombre`, `descripcion`) VALUES
(2, 'sdfasdfa', 'asdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasdasdfasdfasdfasdfasd'),
(4, 'sdfgh8765432', NULL),
(5, 'dfgjhkl876543 gfhj', NULL),
(6, 'dfgjhkl876543 gfhjF', 'itr56       fgjjh34'),
(7, '......', '....');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adicionales`
--

CREATE TABLE IF NOT EXISTS `adicionales` (
  `id_adicionales` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `diario_id_diario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_adicionales`),
  KEY `fk_resultados_diario1_idx` (`diario_id_diario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinadores_has_profesor`
--

CREATE TABLE IF NOT EXISTS `coordinadores_has_profesor` (
  `coordinadores_has_profesor_id` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id_proyecto` int(11) DEFAULT NULL,
  `profesor_id_suplente` int(11) DEFAULT NULL,
  `profesor_id_proyecto` int(11) DEFAULT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`coordinadores_has_profesor_id`),
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `coordinadores_has_profesor`
--

INSERT INTO `coordinadores_has_profesor` (`coordinadores_has_profesor_id`, `proyecto_id_proyecto`, `profesor_id_suplente`, `profesor_id_proyecto`, `periodo`) VALUES
(2, 1, 10, 9, '2016-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario`
--

CREATE TABLE IF NOT EXISTS `diario` (
  `id_diario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estudiante_id_estudiante` int(11) DEFAULT NULL,
  `personal` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `fortalezas` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `debilidades` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `conclusion` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `periodo_id_periodo` int(11) NOT NULL,
  `hora_inicio` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hora_fin` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persona` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `calificacion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacion` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horas` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ninos` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adultos` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tercera_edad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discapacidad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comunidad` text COLLATE utf8_unicode_ci,
  `descripcion` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_diario`,`periodo_id_periodo`),
  KEY `fk_diario_estudiante1_idx` (`estudiante_id_estudiante`),
  KEY `fk_diario_cronograma1_idx` (`periodo_id_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario_has_actividad`
--

CREATE TABLE IF NOT EXISTS `diario_has_actividad` (
  `diario_id_diario` int(11) NOT NULL,
  `actividad_id_actividad` int(11) NOT NULL,
  PRIMARY KEY (`diario_id_diario`,`actividad_id_actividad`),
  KEY `fk_diario_has_actividad_diario1_idx` (`diario_id_diario`),
  KEY `fk_diario_has_actividad_actividad1_idx` (`actividad_id_actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SC` enum('iniciado','culminado') COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `perfil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `semestre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estatus` enum('activo','inactivo') COLLATE utf8_unicode_ci NOT NULL,
  `profesor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proyecto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `nombre`, `apellido`, `cedula`, `clave`, `correo`, `telefono`, `SC`, `genero`, `perfil`, `name_login`, `departamento`, `semestre`, `periodo`, `estatus`, `profesor`, `proyecto`) VALUES
(1, 'dfsdf', 'sdfsdfsd', '23423423', 'temporal', 'correo@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'ttemporal1', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(2, 'gsdfgsdf', 'dfgsdfg', '3223233', 'temporal', 'correo1@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal2', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(3, 'sdfasdf', 'sdfasdf', '3232344', 'temporal', 'sdfa@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal3', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(4, 'fasdfasdf', 'asdfasdf', '3344455', 'temporal', 'asdfasdf@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'tempral4', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(5, 'asfasdf', 'asdfasdf', '33221114', 'temporal', '2323@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temproal5', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(6, 'fdsfsd', 'sdfsdf', '2211339', 'temporal', 'dsfsdf@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal6', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(7, 'fsdfa', 'sadfasd', '6677889', 'temporal', 'asdfasdfas@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal7', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(8, 'dfgadsfasdf', 'adsfasdf', '44556667', 'temporal', 'dsafasdfa@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal8', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(9, 'kfalsjklsadfjlk', 'sdlkfjsakldfjkal', '33233223', 'temporal', '2correo@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal9', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(10, 'sdfasdfas', 'asdfasdfa', '2342342', 'temporal', 'asdfasdfa@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporl10', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(11, 'afdsdfasd', 'asdfasdfas', '44553311', 'temporal', 'fasdfasdf@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal11', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(12, 'dsfsdfas', 'asdfasdf', '1100220', 'temporal', 'correoww@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal12', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(13, 'dfasdfasdf', 'asdfasdfas', '4433220', 'temporal', 'fasdfasdfasdf@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temopral13', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(14, 'dfasdfasdf', 'asdfasdfas', '4433221', 'temporal', 'fasdfasdf2asdf@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temopral14', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(15, 'ffff', 'ffff', '33442111', 'temporal', '333c@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal15', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(16, 'fsdfasdfas', 'asdfadfa', '2211221', 'temporal', 'adsfasd@correo.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal16', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(17, 'sdfasdf', 'asdfasdf', '1231233', 'temporal', 'dsfasdfasdf@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal17', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(18, 'sdfasdf', 'asdfasdfasd', '1111112', 'temporal', 'correo33@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal19', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(19, 'sdfasdfas', 'sdfasdfasf', '1111113', 'temporal', 'correo20@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temopral20', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(21, 'aaaaaaab', 'aaaaaaaaaab', '1111115', 'temporal', 'correo2@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal22', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(22, 'saaaaaaaa', 'aaaaaaaaaab', '1111116', 'temporal', 'correo23@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal23', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(23, 'aaaaaaaaaav', 'aaaaaaaaaaav', '33232355', 'temporal', 'correo24@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal24', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(24, 'AAAAAAAAB sfsdfds', 'AAAAAAAAAB', '2121212', 'temporal', 'correo25@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal25', 'Computación', '1', '2015-1', 'activo', NULL, NULL),
(25, 'AAAAAAAAB', 'AAAAAAAAA', '2121213', 'TEMPORAL', 'correo26@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal26', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(26, 'dsfsdfsdf', 'sdfsdfsd', '3344511', 'temporal', 'correo27@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal27', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(27, 'sfdfasdf', 'asdfasdf', '1111117', 'temporal', 'correo28@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal28', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(28, 'sdfghj', 'sdfghj', '11111121', 'temporal', 'crr@ggg.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal30', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(29, 'sadfasdf', 'adsfasdf', '11111122', 'temporal', 'correo31@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal31', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(30, 'fasdfa', 'sdfjasklj', '11111124', 'temporal', 'correo32@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal32', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(31, 'sdfakslf', 'kjklsdjflaksj', '11111151', 'temporal', 'correo34@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temopral34', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(32, 'asdfasdf', 'dsafasdf', '11111126', 'temporal', 'correo35@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal35', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(33, 'fsdfs', 'jksjfl', '1111118', 'temporal', 'correo36@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal36', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(34, 'fsdfs', 'jksjfl', '1111119', 'temporal', 'correo37@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal37', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(35, 'sdfasdf', 'asdfasdf', '1112222', 'temporal', 'correo40@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'temporal40', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(36, 'dfgdfg', 'dfgdfg', '1234567', 'temporal', 'sdfas@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'pepito2', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(37, 'dklfjlaskj', 'lksjdfkljslk', '6667778', 'temporal', 'coojosj@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'pepito3', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(38, 'fdsfs', 'sdfsdf', '2211227', 'temporal2', 'dsfsfdf@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'pepito4', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(39, 'sfsdfsd', 'sdfsdfsd', '2222222', 'temporal', 'corr33eo@gmail.com', NULL, 'iniciado', 'male', 'estudiante', 'pepito5', 'Computación', '1', '2015-1', 'inactivo', NULL, NULL),
(40, 'Gabriel', 'Nunez', '33338383', 'temporal', 'gby@hotmail.com', NULL, 'iniciado', 'female', 'estudiante', 'gnunez', 'Computación', '5', '2015-1', 'inactivo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase`
--

CREATE TABLE IF NOT EXISTS `fase` (
  `id_fase` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_fase`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `fase`
--

INSERT INTO `fase` (`id_fase`, `nombre`, `descripcion`) VALUES
(2, 'sdafasdfasdfasd fas2342342342', NULL),
(3, '32333333', 'fsadfasdfas dfas dfa sdfa sdf a43r432 r3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase_has_actividad`
--

CREATE TABLE IF NOT EXISTS `fase_has_actividad` (
  `fase_id_fase` int(11) NOT NULL,
  `actividad_id_actividad` int(11) NOT NULL,
  PRIMARY KEY (`fase_id_fase`,`actividad_id_actividad`),
  KEY `fk_fase_has_actividad_actividad1_idx` (`actividad_id_actividad`),
  KEY `fk_fase_has_actividad_fase1_idx` (`fase_id_fase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fase_has_actividad`
--

INSERT INTO `fase_has_actividad` (`fase_id_fase`, `actividad_id_actividad`) VALUES
(3, 2),
(3, 4),
(3, 5),
(3, 6),
(2, 7),
(3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha_periodo`
--

CREATE TABLE IF NOT EXISTS `fecha_periodo` (
  `id_fecha_periodo` int(11) NOT NULL AUTO_INCREMENT,
  `actual` tinyint(1) DEFAULT NULL,
  `anterior` tinyint(1) DEFAULT NULL,
  `proximo` tinyint(1) DEFAULT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_fecha_periodo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `fecha_periodo`
--

INSERT INTO `fecha_periodo` (`id_fecha_periodo`, `actual`, `anterior`, `proximo`, `periodo`) VALUES
(1, 0, 0, 0, '2015-1'),
(2, 1, 0, 0, '2015-2'),
(3, 0, 0, 0, '2016-1'),
(4, 0, 0, 0, '2016-2'),
(5, 0, 0, 0, '2017-1'),
(6, 0, 0, 0, '2017-2'),
(7, 0, 0, 0, '2018-1'),
(8, 0, 0, 0, '2018-2'),
(9, 0, 0, 0, '2019-1'),
(10, 0, 0, 0, '2019-2'),
(11, 0, 0, 0, '2020-1'),
(12, 0, 0, 0, '2020-2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_final`
--

CREATE TABLE IF NOT EXISTS `informe_final` (
  `id_informe_final` int(11) NOT NULL AUTO_INCREMENT,
  `informe` blob,
  `id_estudiante` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_informe_final`),
  KEY `id_estudiante_foreign` (`id_estudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_adicional`
--

CREATE TABLE IF NOT EXISTS `info_adicional` (
  `id_info_adicional` int(11) NOT NULL AUTO_INCREMENT,
  `resumen` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `problema` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `justificacion` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `objetivo` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resultados` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conclusion` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estudiante_id_estudiante` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_info_adicional`),
  KEY `fk_info_adicional_estudiante1_idx` (`estudiante_id_estudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laborsc`
--

CREATE TABLE IF NOT EXISTS `laborsc` (
  `id_laborsc` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id_proyecto` int(11) DEFAULT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_laborsc`),
  KEY `fk_laborsc_proyecto1_idx` (`proyecto_id_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `laborsc`
--

INSERT INTO `laborsc` (`id_laborsc`, `proyecto_id_proyecto`, `periodo`) VALUES
(2, 1, '2015-2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laborsc_has_estudiante`
--

CREATE TABLE IF NOT EXISTS `laborsc_has_estudiante` (
  `estudiante_id_estudiante` int(11) NOT NULL,
  `laborsc_id_laborsc` int(11) NOT NULL,
  PRIMARY KEY (`estudiante_id_estudiante`,`laborsc_id_laborsc`),
  KEY `fk_laborsc_has_estudiante_estudiante1_idx` (`estudiante_id_estudiante`),
  KEY `fk_laborsc_has_estudiante_laborsc1_idx` (`laborsc_id_laborsc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
  `id_periodo` int(11) NOT NULL AUTO_INCREMENT,
  `estudiante_id_estudiante` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `comentario` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `calificacion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacion` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_periodo`),
  KEY `fk_cronograma_estudiante1_idx` (`estudiante_id_estudiante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo_has_actividad`
--

CREATE TABLE IF NOT EXISTS `periodo_has_actividad` (
  `periodo_id_periodo` int(11) NOT NULL,
  `actividad_id_actividad` int(11) NOT NULL,
  PRIMARY KEY (`periodo_id_periodo`,`actividad_id_actividad`),
  KEY `fk_periodo_has_actividad_actividad1_idx` (`actividad_id_actividad`),
  KEY `fk_periodo_has_actividad_periodo1_idx` (`periodo_id_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `id_profesor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `perfil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proyecto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_profesor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombre`, `apellido`, `cedula`, `clave`, `correo`, `telefono`, `perfil`, `genero`, `name_login`, `departamento`, `periodo`, `estatus`, `proyecto`) VALUES
(1, 'nombre nombredfdf', 'dfasdf SDF', '12123124', 'temporal', 'sc@gmail.com', '2418487894', 'coordinador de servicio comunitario', 'male', 'sc', 'Computación', '2015-1', 'activo', NULL),
(5, 'dfjasdklfj', 'kjdskjflaks', '22333111', 'temporal', 'sdkfjkls@gmail.com', NULL, 'tutor', 'male', 'dfsdfs', 'Computación', '2015-1', 'activo', NULL),
(6, 'asfsdf', 'sfdadsf', '1112221', 'temporal', 'correo1@gmail.com', NULL, 'coordinador suplente', 'male', 'temporal40', 'Computación', '2015-1', 'inactivo', NULL),
(7, 'asdfasdf', 'asdfasdf', '1112223', 'temporal', 'correo10@gmail.com', NULL, 'coordinador de proyecto', 'male', 'temporal10', 'Computación', '2015-1', 'inactivo', NULL),
(8, 'asdfasd', 'asdfasd', '32323444', 'tesis_adminbundle_estudiante', 'corerero@gmail.com', '', 'tutor', 'male', 'pepito10', 'Computación', '2015-1', 'inactivo', NULL),
(9, 'sdfsadf coordinador proyecto', 'sadfasdf', '33322211', 'tesis_adminbundle_estudiante', 'sdfasdfasdfa@gmail.com', NULL, 'coordinador de proyecto', 'male', 'pepito111', 'Computación', '2015-1', 'activo', NULL),
(10, 'sdfsdf', 'dsfasdf', '12332144', 'temporal', 'sdfkajsdfkj@gmail.com', '', 'coordinador suplente', 'male', 'pepito10', 'Computación', '2015-1', 'activo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `locacion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `instituto` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `instituto_propone` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `justificacion` text COLLATE utf8_unicode_ci,
  `periodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_desco` date DEFAULT NULL,
  `descripcion` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estatus` enum('activo','inactivo') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `nombre`, `fecha_inicio`, `fecha_fin`, `locacion`, `instituto`, `instituto_propone`, `justificacion`, `periodo`, `departamento`, `fecha_desco`, `descripcion`, `estatus`) VALUES
(1, 'fsdfsadfasdfcv 553', '2015-12-03', '2015-12-17', 'asdfasdfasdf', 'interno', 'sdfasdfasdfasf', 'asdfasdfasdfasdfasdf', '2015-1', 'Computación', '2015-12-01', 'sdfasdfasdfasdfasdf', 'inactivo'),
(3, 'fsdfsadfasdassdff', '2015-12-03', '2015-12-17', 'asdfasdfasdf', 'interno', 'sdfasdfasdfasf', 'asdfasdfasdfasdfasdf', '2017-1', 'Computación', '2015-12-01', 'sdfasdfasdfasdfasdf', 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_has_fase`
--

CREATE TABLE IF NOT EXISTS `proyecto_has_fase` (
  `proyecto_id_proyecto` int(11) NOT NULL,
  `fase_id_fase` int(11) NOT NULL,
  PRIMARY KEY (`proyecto_id_proyecto`,`fase_id_fase`),
  KEY `fk_proyecto_has_fase_fase1_idx` (`fase_id_fase`),
  KEY `fk_proyecto_has_fase_proyecto1_idx` (`proyecto_id_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyecto_has_fase`
--

INSERT INTO `proyecto_has_fase` (`proyecto_id_proyecto`, `fase_id_fase`) VALUES
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE IF NOT EXISTS `tutores` (
  `id_tutores` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id_proyecto` int(11) DEFAULT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tutores`),
  KEY `fk_gestiona_proyecto1_idx` (`proyecto_id_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`id_tutores`, `proyecto_id_proyecto`, `periodo`) VALUES
(5, 1, '2015-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores_has_profesor`
--

CREATE TABLE IF NOT EXISTS `tutores_has_profesor` (
  `tutores_id_tutores` int(11) NOT NULL,
  `profesor_id_profesor` int(11) NOT NULL,
  PRIMARY KEY (`tutores_id_tutores`,`profesor_id_profesor`),
  KEY `fk_tutoria_has_usuario_usuario1_idx` (`profesor_id_profesor`),
  KEY `fk_tutoria_has_usuario_tutoria1_idx` (`tutores_id_tutores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tutores_has_profesor`
--

INSERT INTO `tutores_has_profesor` (`tutores_id_tutores`, `profesor_id_profesor`) VALUES
(5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE IF NOT EXISTS `tutoria` (
  `id_tutoria` int(11) NOT NULL AUTO_INCREMENT,
  `profesor_id_profesor` int(11) DEFAULT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tutoria`),
  KEY `fk_tutoria_profesor1_idx` (`profesor_id_profesor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tutoria`
--

INSERT INTO `tutoria` (`id_tutoria`, `profesor_id_profesor`, `periodo`) VALUES
(4, 5, '2015-2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria_has_estudiante`
--

CREATE TABLE IF NOT EXISTS `tutoria_has_estudiante` (
  `tutoria_id_tutoria` int(11) NOT NULL,
  `estudiante_id_estudiante` int(11) NOT NULL,
  PRIMARY KEY (`tutoria_id_tutoria`,`estudiante_id_estudiante`),
  KEY `fk_tutoria_has_estudiante_tutoria1_idx` (`tutoria_id_tutoria`),
  KEY `fk_tutoria_has_estudiante_estudiante1_idx` (`estudiante_id_estudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tutoria_has_estudiante`
--

INSERT INTO `tutoria_has_estudiante` (`tutoria_id_tutoria`, `estudiante_id_estudiante`) VALUES
(4, 24);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adicionales`
--
ALTER TABLE `adicionales`
  ADD CONSTRAINT `fk_resultados_diario1` FOREIGN KEY (`diario_id_diario`) REFERENCES `diario` (`id_diario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `coordinadores_has_profesor`
--
ALTER TABLE `coordinadores_has_profesor`
  ADD CONSTRAINT `FK_9B93487547B163A5` FOREIGN KEY (`profesor_id_proyecto`) REFERENCES `profesor` (`id_profesor`),
  ADD CONSTRAINT `FK_9B9348758A19767` FOREIGN KEY (`proyecto_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`),
  ADD CONSTRAINT `FK_9B934875BE148839` FOREIGN KEY (`profesor_id_suplente`) REFERENCES `profesor` (`id_profesor`);

--
-- Filtros para la tabla `diario`
--
ALTER TABLE `diario`
  ADD CONSTRAINT `fk_diario_cronograma1` FOREIGN KEY (`periodo_id_periodo`) REFERENCES `periodo` (`id_periodo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diario_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `diario_has_actividad`
--
ALTER TABLE `diario_has_actividad`
  ADD CONSTRAINT `fk_diario_has_actividad_actividad1` FOREIGN KEY (`actividad_id_actividad`) REFERENCES `actividad` (`id_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diario_has_actividad_diario1` FOREIGN KEY (`diario_id_diario`) REFERENCES `diario` (`id_diario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fase_has_actividad`
--
ALTER TABLE `fase_has_actividad`
  ADD CONSTRAINT `fk_fase_has_actividad_actividad1` FOREIGN KEY (`actividad_id_actividad`) REFERENCES `actividad` (`id_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fase_has_actividad_fase1` FOREIGN KEY (`fase_id_fase`) REFERENCES `fase` (`id_fase`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `informe_final`
--
ALTER TABLE `informe_final`
  ADD CONSTRAINT `id_estudiante_foreign` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `info_adicional`
--
ALTER TABLE `info_adicional`
  ADD CONSTRAINT `fk_info_adicional_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `laborsc`
--
ALTER TABLE `laborsc`
  ADD CONSTRAINT `fk_laborsc_proyecto1` FOREIGN KEY (`proyecto_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `laborsc_has_estudiante`
--
ALTER TABLE `laborsc_has_estudiante`
  ADD CONSTRAINT `fk_laborsc_has_estudiante_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_laborsc_has_estudiante_laborsc1` FOREIGN KEY (`laborsc_id_laborsc`) REFERENCES `laborsc` (`id_laborsc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD CONSTRAINT `fk_cronograma_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `periodo_has_actividad`
--
ALTER TABLE `periodo_has_actividad`
  ADD CONSTRAINT `fk_periodo_has_actividad_periodo1` FOREIGN KEY (`periodo_id_periodo`) REFERENCES `periodo` (`id_periodo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_periodo_has_actividad_actividad1` FOREIGN KEY (`actividad_id_actividad`) REFERENCES `actividad` (`id_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto_has_fase`
--
ALTER TABLE `proyecto_has_fase`
  ADD CONSTRAINT `fk_proyecto_has_fase_fase1` FOREIGN KEY (`fase_id_fase`) REFERENCES `fase` (`id_fase`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyecto_has_fase_proyecto1` FOREIGN KEY (`proyecto_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD CONSTRAINT `fk_gestiona_proyecto1` FOREIGN KEY (`proyecto_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tutores_has_profesor`
--
ALTER TABLE `tutores_has_profesor`
  ADD CONSTRAINT `fk_tutoria_has_usuario_tutoria1` FOREIGN KEY (`tutores_id_tutores`) REFERENCES `tutores` (`id_tutores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tutoria_has_usuario_usuario1` FOREIGN KEY (`profesor_id_profesor`) REFERENCES `profesor` (`id_profesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD CONSTRAINT `fk_tutoria_profesor1` FOREIGN KEY (`profesor_id_profesor`) REFERENCES `profesor` (`id_profesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tutoria_has_estudiante`
--
ALTER TABLE `tutoria_has_estudiante`
  ADD CONSTRAINT `fk_tutoria_has_estudiante_tutoria1` FOREIGN KEY (`tutoria_id_tutoria`) REFERENCES `tutoria` (`id_tutoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tutoria_has_estudiante_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
