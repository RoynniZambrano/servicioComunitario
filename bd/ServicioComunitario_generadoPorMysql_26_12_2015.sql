-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-12-2015 a las 22:35:51
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
  `comentario` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fase_id_fase` int(11) NOT NULL,
  PRIMARY KEY (`id_actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
-- Estructura de tabla para la tabla `coordinadores`
--

CREATE TABLE IF NOT EXISTS `coordinadores` (
  `id_coordinadores` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id_proyecto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_coordinadores`),
  KEY `fk_coordinadores_proyecto1_idx` (`proyecto_id_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinadores_has_profesor`
--

CREATE TABLE IF NOT EXISTS `coordinadores_has_profesor` (
  `profesor_id_proyecto` int(11) NOT NULL,
  `coordinadores_id_coordinadores` int(11) NOT NULL,
  `profesor_id_suplente` int(11) NOT NULL,
  PRIMARY KEY (`profesor_id_proyecto`,`coordinadores_id_coordinadores`,`profesor_id_suplente`),
  KEY `fk_tutoria_has_usuario_usuario1_idx` (`profesor_id_proyecto`),
  KEY `fk_coordinadores_has_profesor_coordinadores1_idx` (`coordinadores_id_coordinadores`),
  KEY `fk_coordinadores_has_profesor_profesor1_idx` (`profesor_id_suplente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario`
--

CREATE TABLE IF NOT EXISTS `diario` (
  `id_diario` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `estudiante_id_estudiante` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id_estudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase`
--

CREATE TABLE IF NOT EXISTS `fase` (
  `id_fase` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comentario` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proyecto_id_proyecto` int(11) NOT NULL,
  PRIMARY KEY (`id_fase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_final`
--

CREATE TABLE IF NOT EXISTS `informe_final` (
  `id_informe_final` int(11) NOT NULL AUTO_INCREMENT,
  `informe` blob,
  `id_estudiante` int(11) NOT NULL,
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
  `estudiante_id_estudiante` int(11) NOT NULL,
  PRIMARY KEY (`id_info_adicional`),
  KEY `fk_info_adicional_estudiante1_idx` (`estudiante_id_estudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laborsc`
--

CREATE TABLE IF NOT EXISTS `laborsc` (
  `id_laborsc` int(11) NOT NULL,
  `proyecto_id_proyecto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_laborsc`),
  KEY `fk_laborsc_proyecto1_idx` (`proyecto_id_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `estatus` enum('activo','inactivo') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_profesor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombre`, `apellido`, `cedula`, `clave`, `correo`, `telefono`, `perfil`, `genero`, `name_login`, `departamento`, `periodo`, `estatus`) VALUES
(1, 'nombre', 'apellido', '12123123', 'temporal', 'sc@gmail.com', NULL, 'coordinador de servicio comunitario', NULL, 'sc', 'computacion', '2015-1', 'activo');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE IF NOT EXISTS `tutores` (
  `id_tutores` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id_proyecto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tutores`),
  KEY `fk_gestiona_proyecto1_idx` (`proyecto_id_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE IF NOT EXISTS `tutoria` (
  `id_tutoria` int(11) NOT NULL,
  `profesor_id_profesor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tutoria`),
  KEY `fk_tutoria_profesor1_idx` (`profesor_id_profesor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adicionales`
--
ALTER TABLE `adicionales`
  ADD CONSTRAINT `fk_resultados_diario1` FOREIGN KEY (`diario_id_diario`) REFERENCES `diario` (`id_diario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `coordinadores`
--
ALTER TABLE `coordinadores`
  ADD CONSTRAINT `fk_coordinadores_proyecto1` FOREIGN KEY (`proyecto_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `coordinadores_has_profesor`
--
ALTER TABLE `coordinadores_has_profesor`
  ADD CONSTRAINT `fk_tutoria_has_usuario_usuario10` FOREIGN KEY (`profesor_id_proyecto`) REFERENCES `profesor` (`id_profesor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_coordinadores_has_profesor_coordinadores1` FOREIGN KEY (`coordinadores_id_coordinadores`) REFERENCES `coordinadores` (`id_coordinadores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_coordinadores_has_profesor_profesor1` FOREIGN KEY (`profesor_id_suplente`) REFERENCES `profesor` (`id_profesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `diario`
--
ALTER TABLE `diario`
  ADD CONSTRAINT `fk_diario_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diario_cronograma1` FOREIGN KEY (`periodo_id_periodo`) REFERENCES `periodo` (`id_periodo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
