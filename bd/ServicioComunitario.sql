-- phpMyAdmin SQL Dump

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
  `nombre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_actividad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `actividad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE IF NOT EXISTS `cronograma` (
  `idcronograma` int(11) NOT NULL AUTO_INCREMENT,
  `estudiante_id_estudiante` int(11) DEFAULT NULL,
  `semana` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `comentario` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `horas` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `calificacion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacion` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personas` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idcronograma`),
  KEY `fk_cronograma_estudiante1_idx` (`estudiante_id_estudiante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cronograma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma_has_actividad`
--

CREATE TABLE IF NOT EXISTS `cronograma_has_actividad` (
  `cronograma_idcronograma` int(11) NOT NULL,
  `actividad_id_actividad` int(11) NOT NULL,
  PRIMARY KEY (`cronograma_idcronograma`,`actividad_id_actividad`),
  KEY `fk_cronograma_has_actividad_actividad1_idx` (`actividad_id_actividad`),
  KEY `fk_cronograma_has_actividad_cronograma1_idx` (`cronograma_idcronograma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cronograma_has_actividad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario`
--

CREATE TABLE IF NOT EXISTS `diario` (
  `id_diario` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `estudiante_id_estudiante` int(11) DEFAULT NULL,
  `personal` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `fortalezas` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `debilidades` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `conclusion` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `proyecto_id_proyecto` int(11) DEFAULT NULL,
  `hora_inicio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `personas` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hora_fin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `calificacion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacion` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `cronograma_idcronograma` int(11) DEFAULT NULL,
  `horas` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `niños` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adultos` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tercera_edad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discapacidad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_diario`),
  KEY `fk_diario_estudiante1_idx` (`estudiante_id_estudiante`),
  KEY `fk_diario_proyecto1_idx` (`proyecto_id_proyecto`),
  KEY `fk_diario_cronograma1_idx` (`cronograma_idcronograma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `diario`
--

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

--
-- Volcado de datos para la tabla `diario_has_actividad`
--

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
  `usuario_id_usuario` int(11) DEFAULT NULL,
  `genero` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `departamento` varchar(50) COLLATE utf8_unicode_ci  NOT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `proyecto_id_proyecto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`),
  KEY `fk_estudiante_usuario1_idx` (`usuario_id_usuario`),
  KEY `fk_estudiante_proyecto1_idx` (`proyecto_id_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `estudiante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase`
--

CREATE TABLE IF NOT EXISTS `fase` (
  `id_fase` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_fase`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `fase`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe`
--

CREATE TABLE IF NOT EXISTS `informe` (
  `id_informe` int(11) NOT NULL AUTO_INCREMENT,
  `calificacion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `observacion` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_informe`),
  KEY `id_estudiante_foreign_idx_informe` (`id_estudiante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `informe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_adicional`
--

CREATE TABLE IF NOT EXISTS `info_adicional` (
  `id_info_adicional` int(11) NOT NULL AUTO_INCREMENT,
  `resumen` text COLLATE utf8_unicode_ci NOT NULL,
  `problema` text COLLATE utf8_unicode_ci NOT NULL,
  `justificacion` text COLLATE utf8_unicode_ci NOT NULL,
  `objetivo_g` text COLLATE utf8_unicode_ci NOT NULL,
  `resultados` text COLLATE utf8_unicode_ci NOT NULL,
  `conclusion` text COLLATE utf8_unicode_ci NOT NULL,
  `objetivo_e` text COLLATE utf8_unicode_ci NOT NULL,
  `calificacion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacion` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estudiante_id_estudiante` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_info_adicional`),
  KEY `fk_info_adicional_estudiante1_idx` (`estudiante_id_estudiante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `info_adicional`
--

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
  `instituto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instituto_propone` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `justificacion` text COLLATE utf8_unicode_ci,
  `departamento` varchar(50) COLLATE utf8_unicode_ci  NOT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `coordinador` int(11) DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci,
  `fecha_desco` date NOT NULL,
  `coord_suplente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_proyecto`),
  KEY `coordinador_usuario_idx` (`coordinador`),
  KEY `fk_proyecto_usuario1_idx` (`coord_suplente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `proyecto`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE IF NOT EXISTS `resultados` (
  `id_resultados` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `diario_id_diario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_resultados`),
  KEY `fk_resultados_diario1_idx` (`diario_id_diario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `resultados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE IF NOT EXISTS `tutoria` (
  `id_tutores` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto_id_proyecto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tutores`),
  KEY `fk_gestiona_proyecto1_idx` (`proyecto_id_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tutoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria_has_usuario`
--

CREATE TABLE IF NOT EXISTS `tutoria_has_usuario` (
  `tutoria_id_tutores` int(11) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`tutoria_id_tutores`,`usuario_id_usuario`),
  KEY `fk_tutoria_has_usuario_usuario1_idx` (`usuario_id_usuario`),
  KEY `fk_tutoria_has_usuario_tutoria1_idx` (`tutoria_id_tutores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tutoria_has_usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genero` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `departamento` varchar(50) COLLATE utf8_unicode_ci  NOT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `cedula`, `clave`, `correo`, `telefono`, `genero`, `rol`,`departamento`, `periodo`) VALUES
(1, 'coordinador_nombre', 'FACYT', '10.123.456', 'facyt2015', 'coordinadorsc@gmail.com', NULL, 'male', 'coordinador de servicio comunitario', 'Computación', '2015-1');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD CONSTRAINT `fk_cronograma_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cronograma_has_actividad`
--
ALTER TABLE `cronograma_has_actividad`
  ADD CONSTRAINT `fk_cronograma_has_actividad_actividad1` FOREIGN KEY (`actividad_id_actividad`) REFERENCES `actividad` (`id_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cronograma_has_actividad_cronograma1` FOREIGN KEY (`cronograma_idcronograma`) REFERENCES `cronograma` (`idcronograma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `diario`
--
ALTER TABLE `diario`
  ADD CONSTRAINT `fk_diario_cronograma1` FOREIGN KEY (`cronograma_idcronograma`) REFERENCES `cronograma` (`idcronograma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diario_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diario_proyecto1` FOREIGN KEY (`proyecto_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `diario_has_actividad`
--
ALTER TABLE `diario_has_actividad`
  ADD CONSTRAINT `fk_diario_has_actividad_actividad1` FOREIGN KEY (`actividad_id_actividad`) REFERENCES `actividad` (`id_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diario_has_actividad_diario1` FOREIGN KEY (`diario_id_diario`) REFERENCES `diario` (`id_diario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_estudiante_proyecto1` FOREIGN KEY (`proyecto_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fase_has_actividad`
--
ALTER TABLE `fase_has_actividad`
  ADD CONSTRAINT `fk_fase_has_actividad_actividad1` FOREIGN KEY (`actividad_id_actividad`) REFERENCES `actividad` (`id_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fase_has_actividad_fase1` FOREIGN KEY (`fase_id_fase`) REFERENCES `fase` (`id_fase`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `informe`
--
ALTER TABLE `informe`
  ADD CONSTRAINT `id_estudiante_foreign_informe` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `info_adicional`
--
ALTER TABLE `info_adicional`
  ADD CONSTRAINT `fk_info_adicional_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `coordinador_usuario` FOREIGN KEY (`coordinador`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyecto_usuario1` FOREIGN KEY (`coord_suplente`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto_has_fase`
--
ALTER TABLE `proyecto_has_fase`
  ADD CONSTRAINT `fk_proyecto_has_fase_fase1` FOREIGN KEY (`fase_id_fase`) REFERENCES `fase` (`id_fase`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyecto_has_fase_proyecto1` FOREIGN KEY (`proyecto_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `fk_resultados_diario1` FOREIGN KEY (`diario_id_diario`) REFERENCES `diario` (`id_diario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD CONSTRAINT `fk_gestiona_proyecto1` FOREIGN KEY (`proyecto_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tutoria_has_usuario`
--
ALTER TABLE `tutoria_has_usuario`
  ADD CONSTRAINT `fk_tutoria_has_usuario_tutoria1` FOREIGN KEY (`tutoria_id_tutores`) REFERENCES `tutoria` (`id_tutores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tutoria_has_usuario_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;


