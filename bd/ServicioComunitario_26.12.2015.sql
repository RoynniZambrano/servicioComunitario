-- phpMyAdmin SQL Dump

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




-- -----------------------------------------------------
-- Table `profesor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `profesor` (
  `id_profesor` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(50) NOT NULL ,
  `apellido` VARCHAR(50) NOT NULL ,
  `cedula` VARCHAR(50) NOT NULL ,
  `clave` VARCHAR(50) NOT NULL ,
  `correo` VARCHAR(50) NOT NULL ,
  `telefono` VARCHAR(50) NULL ,
  `perfil` VARCHAR(50) NOT NULL ,
  `genero` VARCHAR(50) NULL ,
  `name_login` VARCHAR(50) NOT NULL ,
  `departamento` VARCHAR(50) NOT NULL ,
  `periodo` VARCHAR(50) NOT NULL ,
  `estatus` ENUM('activo','inactivo') NOT NULL ,
  PRIMARY KEY (`id_profesor`) )
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `estudiante`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `estudiante` (
  `id_estudiante` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(50) NOT NULL ,
  `apellido` VARCHAR(50) NOT NULL ,
  `cedula` VARCHAR(50) NOT NULL ,
  `clave` VARCHAR(50) NOT NULL ,
  `correo` VARCHAR(50) NOT NULL ,
  `telefono` VARCHAR(50) NULL ,
  `SC` ENUM('iniciado','culminado') NOT NULL ,
  `genero` VARCHAR(50) NULL ,
  `perfil` VARCHAR(50) NOT NULL ,
  `name_login` VARCHAR(50) NOT NULL ,
  `departamento` VARCHAR(50) NOT NULL ,
  `semestre` VARCHAR(50) NULL ,
  `periodo` VARCHAR(50) NOT NULL ,
  `estatus` ENUM('activo','inactivo') NOT NULL ,
  PRIMARY KEY (`id_estudiante`) )
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `proyecto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(1000) NOT NULL ,
  `fecha_inicio` DATE NOT NULL ,
  `fecha_fin` DATE NOT NULL ,
  `locacion` VARCHAR(1000) NOT NULL ,
  `instituto` VARCHAR(1000) NOT NULL ,
  `instituto_propone` VARCHAR(1000) NULL ,
  `justificacion` TEXT NULL ,
  `periodo` VARCHAR(50) NOT NULL ,
  `departamento` VARCHAR(50) NOT NULL ,
  `fecha_desco` DATE NULL ,
  `descripcion` VARCHAR(1000) NULL ,
  `estatus` ENUM('activo','inactivo') NOT NULL ,
  PRIMARY KEY (`id_proyecto`) )
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `actividad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `actividad` (
  `id_actividad` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(200) NOT NULL ,
  `comentario` VARCHAR(600) NULL ,
  `fase_id_fase` INT NOT NULL ,
  PRIMARY KEY (`id_actividad`) )
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `fase`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fase` (
  `id_fase` INT NOT NULL ,
  `nombre` VARCHAR(200) NULL ,
  `comentario` VARCHAR(600) NULL ,
  `proyecto_id_proyecto` INT NOT NULL ,
  PRIMARY KEY (`id_fase`) )
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `info_adicional`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `info_adicional` (
  `id_info_adicional` INT NOT NULL AUTO_INCREMENT ,
  `resumen` VARCHAR(2000) NULL ,
  `problema` VARCHAR(2000) NULL ,
  `justificacion` VARCHAR(2000) NULL ,
  `objetivo` VARCHAR(2000) NULL ,
  `resultados` VARCHAR(2000) NULL ,
  `conclusion` VARCHAR(2000) NULL ,
  `estudiante_id_estudiante` INT NOT NULL ,
  PRIMARY KEY (`id_info_adicional`) ,
  INDEX `fk_info_adicional_estudiante1_idx` (`estudiante_id_estudiante` ASC) ,
  CONSTRAINT `fk_info_adicional_estudiante1`
    FOREIGN KEY (`estudiante_id_estudiante` )
    REFERENCES `estudiante` (`id_estudiante` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `informe_final`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `informe_final` (
  `id_informe_final` INT NOT NULL AUTO_INCREMENT ,
  `informe` BLOB NULL ,
  `id_estudiante` INT NOT NULL ,
  PRIMARY KEY (`id_informe_final`) ,
  CONSTRAINT `id_estudiante_foreign`
    FOREIGN KEY (`id_estudiante` )
    REFERENCES `estudiante` (`id_estudiante` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `periodo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `periodo` (
  `id_periodo` INT(11) NOT NULL AUTO_INCREMENT ,
  `estudiante_id_estudiante` INT(11) NULL DEFAULT NULL ,
  `nombre` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  `fecha_inicio` DATE NOT NULL ,
  `fecha_fin` DATE NOT NULL ,
  `comentario` VARCHAR(2000) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  `calificacion` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL ,
  `observacion` VARCHAR(3000) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL ,
  PRIMARY KEY (`id_periodo`) ,
  INDEX `fk_cronograma_estudiante1_idx` (`estudiante_id_estudiante` ASC) ,
  CONSTRAINT `fk_cronograma_estudiante1`
    FOREIGN KEY (`estudiante_id_estudiante` )
    REFERENCES `estudiante` (`id_estudiante` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `diario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diario` (
  `id_diario` INT NOT NULL AUTO_INCREMENT ,
  `fecha` DATE NOT NULL ,
  `estudiante_id_estudiante` INT NOT NULL ,
  `personal` VARCHAR(3000) NOT NULL ,
  `fortalezas` VARCHAR(3000) NOT NULL ,
  `debilidades` VARCHAR(3000) NOT NULL ,
  `conclusion` VARCHAR(3000) NOT NULL ,
  `periodo_id_periodo` INT(11) NOT NULL ,
  `hora_inicio` VARCHAR(100) NULL ,
  `hora_fin` VARCHAR(100) NULL ,
  `persona` VARCHAR(100) NULL ,
  `calificacion` VARCHAR(100) NULL ,
  `observacion` VARCHAR(3000) NULL ,
  `horas` VARCHAR(100) NULL ,
  `ninos` VARCHAR(100) NULL ,
  `adultos` VARCHAR(100) NULL ,
  `tercera_edad` VARCHAR(100) NULL ,
  `discapacidad` VARCHAR(100) NULL ,
  `comunidad` TEXT NULL ,
  `descripcion` VARCHAR(3000) NULL ,
  PRIMARY KEY (`id_diario`, `periodo_id_periodo`) ,
  INDEX `fk_diario_estudiante1_idx` (`estudiante_id_estudiante` ASC) ,
  INDEX `fk_diario_cronograma1_idx` (`periodo_id_periodo` ASC) ,
  CONSTRAINT `fk_diario_estudiante1`
    FOREIGN KEY (`estudiante_id_estudiante` )
    REFERENCES `estudiante` (`id_estudiante` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_diario_cronograma1`
    FOREIGN KEY (`periodo_id_periodo` )
    REFERENCES `periodo` (`id_periodo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `diario_has_actividad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diario_has_actividad` (
  `diario_id_diario` INT(11) NOT NULL ,
  `actividad_id_actividad` INT(11) NOT NULL ,
  PRIMARY KEY (`diario_id_diario`, `actividad_id_actividad`) ,
  INDEX `fk_diario_has_actividad_diario1_idx` (`diario_id_diario` ASC) ,
  INDEX `fk_diario_has_actividad_actividad1_idx` (`actividad_id_actividad` ASC) ,
  CONSTRAINT `fk_diario_has_actividad_actividad1`
    FOREIGN KEY (`actividad_id_actividad` )
    REFERENCES `actividad` (`id_actividad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_diario_has_actividad_diario1`
    FOREIGN KEY (`diario_id_diario` )
    REFERENCES `diario` (`id_diario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `fase_has_actividad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fase_has_actividad` (
  `fase_id_fase` INT(11) NOT NULL ,
  `actividad_id_actividad` INT(11) NOT NULL ,
  PRIMARY KEY (`fase_id_fase`, `actividad_id_actividad`) ,
  INDEX `fk_fase_has_actividad_actividad1_idx` (`actividad_id_actividad` ASC) ,
  INDEX `fk_fase_has_actividad_fase1_idx` (`fase_id_fase` ASC) ,
  CONSTRAINT `fk_fase_has_actividad_actividad1`
    FOREIGN KEY (`actividad_id_actividad` )
    REFERENCES `actividad` (`id_actividad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_fase_has_actividad_fase1`
    FOREIGN KEY (`fase_id_fase` )
    REFERENCES `fase` (`id_fase` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `proyecto_has_fase`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `proyecto_has_fase` (
  `proyecto_id_proyecto` INT(11) NOT NULL ,
  `fase_id_fase` INT(11) NOT NULL ,
  PRIMARY KEY (`proyecto_id_proyecto`, `fase_id_fase`) ,
  INDEX `fk_proyecto_has_fase_fase1_idx` (`fase_id_fase` ASC) ,
  INDEX `fk_proyecto_has_fase_proyecto1_idx` (`proyecto_id_proyecto` ASC) ,
  CONSTRAINT `fk_proyecto_has_fase_fase1`
    FOREIGN KEY (`fase_id_fase` )
    REFERENCES `fase` (`id_fase` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_has_fase_proyecto1`
    FOREIGN KEY (`proyecto_id_proyecto` )
    REFERENCES `proyecto` (`id_proyecto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `adicionales`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `adicionales` (
  `id_adicionales` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(500) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  `cantidad` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  `comentario` VARCHAR(2000) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL ,
  `diario_id_diario` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_adicionales`) ,
  INDEX `fk_resultados_diario1_idx` (`diario_id_diario` ASC) ,
  CONSTRAINT `fk_resultados_diario1`
    FOREIGN KEY (`diario_id_diario` )
    REFERENCES `diario` (`id_diario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `tutores`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `tutores` (
  `id_tutores` INT(11) NOT NULL AUTO_INCREMENT ,
  `proyecto_id_proyecto` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tutores`) ,
  INDEX `fk_gestiona_proyecto1_idx` (`proyecto_id_proyecto` ASC) ,
  CONSTRAINT `fk_gestiona_proyecto1`
    FOREIGN KEY (`proyecto_id_proyecto` )
    REFERENCES `proyecto` (`id_proyecto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `tutores_has_profesor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `tutores_has_profesor` (
  `tutores_id_tutores` INT(11) NOT NULL ,
  `profesor_id_profesor` INT(11) NOT NULL ,
  PRIMARY KEY (`tutores_id_tutores`, `profesor_id_profesor`) ,
  INDEX `fk_tutoria_has_usuario_usuario1_idx` (`profesor_id_profesor` ASC) ,
  INDEX `fk_tutoria_has_usuario_tutoria1_idx` (`tutores_id_tutores` ASC) ,
  CONSTRAINT `fk_tutoria_has_usuario_tutoria1`
    FOREIGN KEY (`tutores_id_tutores` )
    REFERENCES `tutores` (`id_tutores` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tutoria_has_usuario_usuario1`
    FOREIGN KEY (`profesor_id_profesor` )
    REFERENCES `profesor` (`id_profesor` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `coordinadores`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `coordinadores` (
  `id_coordinadores` INT NOT NULL AUTO_INCREMENT ,
  `proyecto_id_proyecto` INT NULL ,
  PRIMARY KEY (`id_coordinadores`) ,
  INDEX `fk_coordinadores_proyecto1_idx` (`proyecto_id_proyecto` ASC) ,
  CONSTRAINT `fk_coordinadores_proyecto1`
    FOREIGN KEY (`proyecto_id_proyecto` )
    REFERENCES `proyecto` (`id_proyecto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `coordinadores_has_profesor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `coordinadores_has_profesor` (
  `profesor_id_proyecto` INT(11) NOT NULL ,
  `coordinadores_id_coordinadores` INT NOT NULL ,
  `profesor_id_suplente` INT NOT NULL ,
  PRIMARY KEY (`profesor_id_proyecto`, `coordinadores_id_coordinadores`, `profesor_id_suplente`) ,
  INDEX `fk_tutoria_has_usuario_usuario1_idx` (`profesor_id_proyecto` ASC) ,
  INDEX `fk_coordinadores_has_profesor_coordinadores1_idx` (`coordinadores_id_coordinadores` ASC) ,
  INDEX `fk_coordinadores_has_profesor_profesor1_idx` (`profesor_id_suplente` ASC) ,
  CONSTRAINT `fk_tutoria_has_usuario_usuario10`
    FOREIGN KEY (`profesor_id_proyecto` )
    REFERENCES `profesor` (`id_profesor` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_coordinadores_has_profesor_coordinadores1`
    FOREIGN KEY (`coordinadores_id_coordinadores` )
    REFERENCES `coordinadores` (`id_coordinadores` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_coordinadores_has_profesor_profesor1`
    FOREIGN KEY (`profesor_id_suplente` )
    REFERENCES `profesor` (`id_profesor` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `laborsc`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `laborsc` (
  `id_laborsc` INT NOT NULL ,
  `proyecto_id_proyecto` INT NULL ,
  PRIMARY KEY (`id_laborsc`) ,
  INDEX `fk_laborsc_proyecto1_idx` (`proyecto_id_proyecto` ASC) ,
  CONSTRAINT `fk_laborsc_proyecto1`
    FOREIGN KEY (`proyecto_id_proyecto` )
    REFERENCES `proyecto` (`id_proyecto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `laborsc_has_estudiante`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `laborsc_has_estudiante` (
  `estudiante_id_estudiante` INT NOT NULL ,
  `laborsc_id_laborsc` INT NOT NULL ,
  PRIMARY KEY (`estudiante_id_estudiante`, `laborsc_id_laborsc`) ,
  INDEX `fk_laborsc_has_estudiante_estudiante1_idx` (`estudiante_id_estudiante` ASC) ,
  INDEX `fk_laborsc_has_estudiante_laborsc1_idx` (`laborsc_id_laborsc` ASC) ,
  CONSTRAINT `fk_laborsc_has_estudiante_estudiante1`
    FOREIGN KEY (`estudiante_id_estudiante` )
    REFERENCES `estudiante` (`id_estudiante` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_laborsc_has_estudiante_laborsc1`
    FOREIGN KEY (`laborsc_id_laborsc` )
    REFERENCES `laborsc` (`id_laborsc` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `tutoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `tutoria` (
  `id_tutoria` INT NOT NULL ,
  `profesor_id_profesor` INT NULL ,
  PRIMARY KEY (`id_tutoria`) ,
  INDEX `fk_tutoria_profesor1_idx` (`profesor_id_profesor` ASC) ,
  CONSTRAINT `fk_tutoria_profesor1`
    FOREIGN KEY (`profesor_id_profesor` )
    REFERENCES `profesor` (`id_profesor` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `tutoria_has_estudiante`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `tutoria_has_estudiante` (
  `tutoria_id_tutoria` INT NOT NULL ,
  `estudiante_id_estudiante` INT NOT NULL ,
  PRIMARY KEY (`tutoria_id_tutoria`, `estudiante_id_estudiante`) ,
  INDEX `fk_tutoria_has_estudiante_tutoria1_idx` (`tutoria_id_tutoria` ASC) ,
  INDEX `fk_tutoria_has_estudiante_estudiante1_idx` (`estudiante_id_estudiante` ASC) ,
  CONSTRAINT `fk_tutoria_has_estudiante_tutoria1`
    FOREIGN KEY (`tutoria_id_tutoria` )
    REFERENCES `tutoria` (`id_tutoria` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tutoria_has_estudiante_estudiante1`
    FOREIGN KEY (`estudiante_id_estudiante` )
    REFERENCES `estudiante` (`id_estudiante` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `fecha_periodo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fecha_periodo` (
  `id_fecha_periodo` INT NOT NULL AUTO_INCREMENT ,
  `actual` TINYINT(1) NULL ,
  `anterior` TINYINT(1) NULL ,
  `proximo` TINYINT(1) NULL ,
  `periodo` VARCHAR(50) NULL ,
  PRIMARY KEY (`id_fecha_periodo`) )
ENGINE = InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `periodo_has_actividad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `periodo_has_actividad` (
  `periodo_id_periodo` INT(11) NOT NULL ,
  `actividad_id_actividad` INT NOT NULL ,
  PRIMARY KEY (`periodo_id_periodo`, `actividad_id_actividad`) ,
  INDEX `fk_periodo_has_actividad_actividad1_idx` (`actividad_id_actividad` ASC) ,
  INDEX `fk_periodo_has_actividad_periodo1_idx` (`periodo_id_periodo` ASC) ,
  CONSTRAINT `fk_periodo_has_actividad_periodo1`
    FOREIGN KEY (`periodo_id_periodo` )
    REFERENCES `periodo` (`id_periodo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_periodo_has_actividad_actividad1`
    FOREIGN KEY (`actividad_id_actividad` )
    REFERENCES `actividad` (`id_actividad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

-- USE `mydb` ;


-- SET SQL_MODE=@OLD_SQL_MODE;
-- SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
-- SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
