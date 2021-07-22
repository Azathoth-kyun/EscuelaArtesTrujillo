-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-08-2019 a las 00:28:32
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `esadt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `IdAlumno` int(11) NOT NULL,
  `DNI` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `FecNaci` date DEFAULT NULL,
  `Direccion` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Telefono` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Celular` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Genero` int(11) DEFAULT NULL,
  `status` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`IdAlumno`, `DNI`, `Apellidos`, `Nombres`, `FecNaci`, `Direccion`, `Telefono`, `Celular`, `Email`, `Genero`, `status`) VALUES
(1, NULL, 'ALVA GARCÍA', 'Milagritos Gisell', '1989-10-14', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(2, NULL, 'BARBOSA MUNAYCO', 'Javier Sául', '1993-02-01', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(3, NULL, 'CAMPOS REBAZA', 'Rosa Lidia', '1996-08-30', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(4, NULL, 'CHÁVEZ GARCÍA', 'Dayana Berly', '2001-09-01', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(5, NULL, 'COLLANTES ULLILEN', 'Fresia', '0200-10-21', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(6, NULL, 'AGÜERO LAREDO', 'Mayeli Virginia', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(7, NULL, 'ALVAREZ COTRINA', 'Karina Soledad', '1982-06-06', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(8, NULL, 'BAZAN IZQUIERDO', 'Abel Isaac', '1990-02-13', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(9, NULL, 'CHACÓN IZQUIERDO', 'Juana Carelli Geraldine', '1989-02-16', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(10, NULL, 'NUÑEZ MORI', 'Claudia Stepfany', '1994-07-02', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(11, NULL, 'BAZAN ALIAGA', 'Armando José', '2001-08-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(12, NULL, 'CABRERA BARRUETO', 'Nievez Alexandra', '2001-09-11', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(13, NULL, 'CARBAJAL TAPIA', 'Estefania Sofia', '1996-10-26', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(14, NULL, 'CASTILLO CHAMACHE', 'Gabriela Caroline', '2001-01-23', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(15, NULL, 'GARCÍA CASTILLO', 'Roxana Mabel', '1997-05-21', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(16, NULL, 'BASILIO ROJAS', 'Felix Georgihno Efraín', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(17, NULL, 'CARRIÓN DE LA CRUZ', 'Segundo Roselito', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(18, NULL, 'COLLANTES LLACZA', 'Víctor Alfonso', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(19, NULL, 'FLORES RUBIO', 'Carlos Eduardo', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(20, NULL, 'HUANACCHIRI SANCHO', 'Dennimes Aries', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(21, NULL, 'ALVARADO RUÍZ', 'Sonia Isabel', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(22, NULL, 'LEIVA ROJAS', 'David', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(23, NULL, 'PARRA SOTO', 'Louisiana Carolina', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(24, NULL, 'ROMERO BECERRA', 'Zoraya Mieko', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(25, NULL, 'RUBIO SICHE', 'Gianella', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(26, NULL, 'ALVA GELDRES', 'Miguel Angel', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(27, NULL, 'AZABACHE PÉREZ', 'Fiorella Alexandra', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(28, NULL, 'BALTAZAR CHASNAMOTE', 'Sergio Enrique', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(29, NULL, 'BERTINI JARA', 'Milagros del Rosario', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(30, NULL, 'ALVA RUEDA', 'Erich Roy Manuel', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(31, NULL, 'FLORES LAULATE', 'Herbert James', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(32, NULL, 'LEÓN DÍAZ', 'Erick Yaniel Anderson', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(33, NULL, 'RUIZ ATOCHE', 'Vicente Paul', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(34, NULL, 'TORRES LUNA VICTORIA', 'Jetsy', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(35, NULL, 'ALZAMORA SAGÁSTEGUI', 'Yeremí Segundo ', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(36, NULL, 'CASTRO SERNAQUE', 'Cristhian Antony', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(37, NULL, 'GUEVARA IZQUIERDO', 'Jesús Miguel	', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 1, '00'),
(38, NULL, 'LAZO URBINA', 'Leslie Elizabeth Judith', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(39, NULL, 'MATUTE FLORIAN', 'Grecia Stany', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00'),
(40, '', 'ALVA GELDRES', 'Miguel Angel', '1996-01-16', '-', '-', '-', 'a@gmail.com', 1, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `IdArea` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`IdArea`, `Descripcion`, `id_plan`, `status`) VALUES
(1, 'FORMACION GENERAL', 2, '00'),
(3, 'TALLERES DE ESPECIALIDAD ACTORAL', 3, '00'),
(4, 'CULTURA GENERAL Y TEATRAL', 3, '00'),
(5, 'TALLERES DE TECNOLOGIA', 3, '00'),
(6, 'INVESTIGACION', 3, '00'),
(7, 'DESARROLLO PERSONAL Y VOCACIONAL', 1, '99'),
(8, 'FORMACION GENERAL', 1, '00'),
(9, 'FORMACION PROFESIONAL', 2, '00'),
(10, 'FORMACION ESPECIALIZADA', 2, '00'),
(11, 'FORMACION PROFESIONAL', 1, '00'),
(12, 'FORMACION ESPECIALIZADA', 1, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `IdCiclo` int(11) NOT NULL,
  `Descripcion` char(4) NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciclo`
--

INSERT INTO `ciclo` (`IdCiclo`, `Descripcion`, `status`) VALUES
(1, 'I', '00'),
(2, 'II', '00'),
(3, 'III', '00'),
(4, 'IV', '00'),
(5, 'V', '00'),
(6, 'VI', '00'),
(7, 'VII', '00'),
(8, 'VIII', '00'),
(9, 'IX', '00'),
(10, 'X', '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `IdClas` int(11) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`IdClas`, `Descripcion`, `Categoria`) VALUES
(1, 'HOMBRE', 'GENERO'),
(2, 'MUJER', 'GENERO'),
(3, 'GRATUITO', 'MATRICULA'),
(4, 'PAGANTE', 'MATRICULA'),
(5, 'APROBADO', 'NOTAS'),
(6, 'DESAPROBADO', 'NOTAS'),
(7, 'INHABILITADO', 'NOTAS'),
(8, 'LICENCIA - RESERVA', 'NOTAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_asignatura`
--

CREATE TABLE `docente_asignatura` (
  `IdAsDoc` int(11) NOT NULL,
  `id_asignatura` int(11) DEFAULT NULL,
  `id_profesor` int(11) DEFAULT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `status` char(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente_asignatura`
--

INSERT INTO `docente_asignatura` (`IdAsDoc`, `id_asignatura`, `id_profesor`, `id_periodo`, `status`) VALUES
(1, 72, 1, 1, '00'),
(2, 67, 4, 1, '99'),
(3, 61, 3, 1, '00'),
(4, 31, 4, 1, '00'),
(5, 23, 6, 1, '00'),
(6, 28, 15, 1, '00'),
(7, 62, 8, 1, '00'),
(8, 4, 9, 1, '00'),
(9, 29, 13, 1, '00'),
(10, 1, 2, 1, '00'),
(11, 3, 5, 1, '00'),
(12, 6, 7, 1, '00'),
(13, 58, 10, 1, '00'),
(14, 15, 11, 1, '00'),
(15, 2, 12, 1, '00'),
(16, 8, 14, 1, '00'),
(17, 13, 16, 1, '00'),
(18, 10, 17, 1, '00'),
(19, 16, 18, 1, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `IdEstado` char(2) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IdEstado`, `Descripcion`) VALUES
('00', 'ACTIVO'),
('99', 'DESACTIVADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha_promedios`
--

CREATE TABLE `fecha_promedios` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `f_activa` date DEFAULT NULL,
  `f_desactiva` date DEFAULT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `status` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `fecha_promedios`
--

INSERT INTO `fecha_promedios` (`id`, `descripcion`, `f_activa`, `f_desactiva`, `id_periodo`, `status`) VALUES
(1, 'P1', '2019-08-28', '2019-08-29', 1, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_institucional`
--

CREATE TABLE `info_institucional` (
  `id` int(11) NOT NULL,
  `cod_institucion` varchar(5) DEFAULT NULL,
  `nombre_institucion` varchar(255) DEFAULT NULL,
  `tipo_gestion` varchar(15) DEFAULT NULL,
  `creacion_revalidacion` varchar(100) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `info_institucional`
--

INSERT INTO `info_institucional` (`id`, `cod_institucion`, `nombre_institucion`, `tipo_gestion`, `creacion_revalidacion`, `region`, `direccion`, `provincia`, `distrito`) VALUES
(1, '00817', 'ESCUELA SUPERIOR DE ARTE DRAMÀTICO ', 'Público', 'D. S. Nº 055 - 85 - ED', 'La Libertad', 'Jr. Independencia Nº 572', 'Trujillo', 'Trujillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `IdOrden` int(11) NOT NULL,
  `CodMatricula` varchar(10) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `tipo_matricula` varchar(10) DEFAULT NULL,
  `id_plan` int(11) DEFAULT NULL,
  `id_ciclo` char(2) NOT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `status` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`IdOrden`, `CodMatricula`, `id_alumno`, `tipo_matricula`, `id_plan`, `id_ciclo`, `id_periodo`, `status`) VALUES
(1, '0000396-19', 1, '3', 2, '1', 1, '00'),
(2, '0000397-19', 2, '3', 2, '1', 1, '00'),
(3, '0000398-19', 3, '3', 2, '1', 1, '00'),
(4, '0000399-19', 4, '3', 2, '1', 1, '00'),
(5, '0000400-19', 5, '3', 2, '1', 1, '00'),
(6, '0000381-18', 6, '3', 2, '2', 1, '00'),
(7, '0000383-18', 7, '3', 2, '2', 1, '00'),
(8, '0000384-18', 8, '3', 2, '2', 1, '00'),
(9, '0000026-11', 9, '3', 2, '2', 1, '00'),
(10, '0000387-18', 10, '3', 2, '2', 1, '00'),
(11, '0000441-19', 11, '3', 3, '1', 1, '00'),
(12, '0000442-19', 12, '3', 3, '1', 1, '00'),
(13, '0000443-19', 13, '3', 3, '1', 1, '00'),
(14, '0000444-19', 14, '3', 3, '1', 1, '00'),
(15, '0000445-19', 15, '3', 3, '1', 1, '00'),
(16, '0000343-18', 16, '3', 3, '3', 1, '00'),
(17, '0000344-18', 17, '3', 3, '3', 1, '00'),
(18, '0000016-11', 18, '3', 3, '3', 1, '00'),
(19, '0000346-18', 19, '3', 3, '3', 1, '00'),
(20, '0000348-18', 20, '3', 3, '3', 1, '00'),
(21, '0000321-17', 21, '3', 3, '4', 1, '00'),
(22, '0000324-17', 22, '3', 3, '4', 1, '00'),
(23, '0000258-16', 23, '3', 3, '4', 1, '00'),
(24, '0000126-13', 24, '3', 3, '4', 1, '00'),
(25, '0000329-17', 25, '3', 3, '4', 1, '00'),
(26, '0000311-17', 26, '3', 3, '5', 1, '00'),
(27, '0000312-17', 27, '3', 3, '5', 1, '00'),
(28, '0000300-17', 28, '3', 3, '5', 1, '00'),
(29, '0000313-17', 29, '3', 3, '5', 1, '00'),
(30, '0000250-16', 30, '3', 3, '7', 1, '00'),
(31, '0000121-13', 31, '3', 3, '7', 1, '00'),
(32, '0000256-16', 32, '3', 3, '7', 1, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newalumno`
--

CREATE TABLE `newalumno` (
  `Nombres` varchar(255) DEFAULT NULL,
  `Apellidos` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peracad`
--

CREATE TABLE `peracad` (
  `IdPeriodo` int(11) NOT NULL,
  `Descripcion` varchar(20) NOT NULL,
  `inc_periodo` date DEFAULT NULL,
  `fin_periodo` date DEFAULT NULL,
  `status` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peracad`
--

INSERT INTO `peracad` (`IdPeriodo`, `Descripcion`, `inc_periodo`, `fin_periodo`, `status`) VALUES
(1, '2019-I', '2019-08-28', '2019-08-29', '00'),
(2, '2019-II', NULL, NULL, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permite_extras`
--

CREATE TABLE `permite_extras` (
  `id` char(1) DEFAULT NULL,
  `Descripcion` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permite_extras`
--

INSERT INTO `permite_extras` (`id`, `Descripcion`) VALUES
('0', 'No'),
('1', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `IdPersonal` int(11) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `Apellidos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `FecNaci` date DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Celular` varchar(9) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Idtp` int(11) DEFAULT NULL,
  `status` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`IdPersonal`, `DNI`, `Apellidos`, `Nombres`, `FecNaci`, `Direccion`, `Telefono`, `Celular`, `Email`, `Idtp`, `status`) VALUES
(1, '17874603', 'GARFIAS LLAQUE', 'Violeta', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(2, '18022091', 'HONORIO ARTEAGA', 'Ricardi Alfredo', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(3, '18139212', 'SALINAS CASTRO', 'Ronal Eleiver', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(4, '17937413', 'CASTRO CARRAANZA', 'Pablo Luis', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(5, '17911935', 'RODRIGUEZ LUJAN', 'Sonia Elina', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(6, '17892052', 'JARA GALARRETA', 'CARLOS', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(7, '09637723', 'ROJAS CARRANZA', 'Hugo Francisco', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(8, '19325481', 'DIAZ AHUMADA', 'DAVID', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(9, '18121119', 'REYES BARBARAN', 'MARY', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(10, '17838079', 'VIGO PORTELLA', 'Estanislao', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(11, '45412658', 'TAPIA VASQUEZ', 'David', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(12, '17800572', 'JARA VALVERDE', 'Jorge Luis', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(13, '18837151', 'VEGA VILLOSLADO', 'Juana Mirella', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(14, '17847370', 'LEDESMA GASTAÃ‘ADUI', 'MARCO ANTONIO', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(15, '17914403', 'MENDOZA TORRES', 'Elena Neumesia', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(16, '17812651', 'CALDERON GAMBOA', 'MANUEL', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00'),
(17, '42842671', 'LLAVE NARRO', 'Cinthia Lorena', '1111-11-11', '-', '-', '-', 'n@gmail.com', 1, '00'),
(18, '06708875', 'SACHUN CEDEÃ‘O', 'Antonio', '1111-11-11', '-', '-', '-', 'a@gmail.com', 1, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_estudios`
--

CREATE TABLE `plan_estudios` (
  `IdPlan` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Especialidad` varchar(50) NOT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `status` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan_estudios`
--

INSERT INTO `plan_estudios` (`IdPlan`, `Descripcion`, `Especialidad`, `id_periodo`, `status`) VALUES
(1, 'EDUCACION ARTISTICA', 'DANZA FOLKLORICA', 1, '00'),
(2, 'EDUCACION ARTISTICA', 'TEATRO', 1, '00'),
(3, 'ARTISTA PROFESIONAL', 'ACTUACION TEATRAL', 1, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resumen_asignatura`
--

CREATE TABLE `resumen_asignatura` (
  `idresumen` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_profesor` int(11) DEFAULT NULL,
  `id_subarea` int(11) DEFAULT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `prom1` int(11) DEFAULT '0',
  `prom2` int(11) DEFAULT '0',
  `prom3` int(11) DEFAULT '0',
  `prom4` int(11) DEFAULT '0',
  `promfinal` int(11) DEFAULT '0',
  `aplazado` int(11) DEFAULT '0',
  `promdoc` int(11) DEFAULT '0',
  `promjur` int(11) DEFAULT '0',
  `promdj` int(11) DEFAULT '0',
  `cred` int(11) DEFAULT NULL,
  `ptj` int(11) DEFAULT NULL,
  `id_criterio` int(11) NOT NULL DEFAULT '0',
  `observacion` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resumen_asignatura`
--

INSERT INTO `resumen_asignatura` (`idresumen`, `id_alumno`, `id_profesor`, `id_subarea`, `id_periodo`, `prom1`, `prom2`, `prom3`, `prom4`, `promfinal`, `aplazado`, `promdoc`, `promjur`, `promdj`, `cred`, `ptj`, `id_criterio`, `observacion`) VALUES
(1, 1, 2, 1, 1, 12, 13, 5, 0, 10, 15, 15, 14, 15, 3, 44, 0, NULL),
(2, 1, 12, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(3, 1, 5, 3, 1, 12, 13, 5, 15, 11, NULL, 11, 14, 13, 4, 51, 0, NULL),
(4, 1, NULL, 4, 1, 12, 13, 5, 0, 10, 15, 15, 0, 15, 4, 60, 0, NULL),
(5, 1, NULL, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(6, 1, 7, 6, 1, 12, 13, 5, 0, 10, 15, 15, 14, 15, 4, 58, 0, NULL),
(7, 2, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(8, 2, 12, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(9, 2, 5, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(10, 2, NULL, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(11, 2, NULL, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(12, 2, 7, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(13, 3, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(14, 3, 12, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(15, 3, 5, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(16, 3, NULL, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(17, 3, NULL, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(18, 3, 7, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(19, 4, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(20, 4, 12, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(21, 4, 5, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(22, 4, NULL, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(23, 4, NULL, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(24, 4, 7, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(25, 5, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(26, 5, 12, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(27, 5, 5, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(28, 5, NULL, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(29, 5, NULL, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(30, 5, 7, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(31, 6, NULL, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(32, 6, 14, 8, 1, 12, 13, 5, 0, 10, 15, 15, 15, 15, 3, 45, 0, NULL),
(33, 6, NULL, 9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(34, 6, 17, 10, 1, 12, 13, 5, 0, 10, 15, 15, 14, 15, 3, 44, 0, NULL),
(35, 6, NULL, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, NULL, 0, NULL),
(36, 6, NULL, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(37, 6, 16, 13, 1, 12, 13, 5, 0, 10, 15, 15, 14, 15, 3, 44, 0, NULL),
(38, 7, NULL, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(39, 7, 14, 8, 1, 15, 5, 12, 0, 11, 0, 11, 12, 11, 3, 34, 0, NULL),
(40, 7, NULL, 9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(41, 7, 17, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(42, 7, NULL, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, NULL, 0, NULL),
(43, 7, NULL, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(44, 7, 16, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(45, 8, NULL, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(46, 8, 14, 8, 1, 10, 0, 0, 0, 10, 0, 10, 0, 10, 3, 30, 0, NULL),
(47, 8, NULL, 9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(48, 8, 17, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(49, 8, NULL, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, NULL, 0, NULL),
(50, 8, NULL, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(51, 8, 16, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(52, 9, NULL, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(53, 9, 14, 8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(54, 9, NULL, 9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(55, 9, 17, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(56, 9, NULL, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, NULL, 0, NULL),
(57, 9, NULL, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(58, 9, 16, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(59, 10, NULL, 7, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(60, 10, 14, 8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(61, 10, NULL, 9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(62, 10, 17, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(63, 10, NULL, 11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, NULL, 0, NULL),
(64, 10, NULL, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(65, 10, 16, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(66, 11, 10, 58, 1, 12, 0, 0, 0, 12, 0, 12, 0, 12, 5, 60, 5, NULL),
(67, 11, NULL, 59, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(68, 11, NULL, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(69, 11, 3, 61, 1, 12, 13, 5, 0, 10, 15, 15, 15, 15, 3, 45, 0, NULL),
(70, 11, 8, 62, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 41, 0, NULL),
(71, 11, NULL, 63, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(72, 12, 10, 58, 1, 13, 0, 0, 0, 13, 0, 13, 0, 13, 5, 65, 5, NULL),
(73, 12, NULL, 59, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(74, 12, NULL, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(75, 12, 3, 61, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(76, 12, 8, 62, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 42, 0, NULL),
(77, 12, NULL, 63, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(78, 13, 10, 58, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(79, 13, NULL, 59, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(80, 13, NULL, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(81, 13, 3, 61, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(82, 13, 8, 62, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(83, 13, NULL, 63, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(84, 14, 10, 58, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(85, 14, NULL, 59, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(86, 14, NULL, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(87, 14, 3, 61, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(88, 14, 8, 62, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(89, 14, NULL, 63, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(90, 15, 10, 58, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(91, 15, NULL, 59, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(92, 15, NULL, 60, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(93, 15, 3, 61, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(94, 15, 8, 62, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(95, 15, NULL, 63, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(96, 16, NULL, 70, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, NULL, 0, NULL),
(97, 16, NULL, 71, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(98, 16, 1, 72, 1, 15, 12, 10, 0, 12, 0, 12, 14, 13, 3, 39, 5, ''),
(99, 16, NULL, 73, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(100, 16, NULL, 74, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(101, 16, NULL, 75, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(102, 17, NULL, 70, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, NULL, 0, NULL),
(103, 17, NULL, 71, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(104, 17, 1, 72, 1, 5, 15, 15, 0, 12, 0, 12, 0, 12, 3, 35, 5, NULL),
(105, 17, NULL, 73, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(106, 17, NULL, 74, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(107, 17, NULL, 75, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(108, 18, NULL, 70, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, NULL, 0, NULL),
(109, 18, NULL, 71, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(110, 18, 1, 72, 1, 13, 16, 10, 17, 14, 0, 14, 14, 14, 3, 42, 0, NULL),
(111, 18, NULL, 73, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(112, 18, NULL, 74, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(113, 18, NULL, 75, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(114, 19, NULL, 70, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, NULL, 0, NULL),
(115, 19, NULL, 71, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(116, 19, 1, 72, 1, 14, 15, 5, 0, 11, 0, 11, 0, 11, 3, 34, 0, NULL),
(117, 19, NULL, 73, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(118, 19, NULL, 74, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(119, 19, NULL, 75, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(120, 20, NULL, 70, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, NULL, 0, NULL),
(121, 20, NULL, 71, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(122, 20, 1, 72, 1, 12, 13, 15, 0, 13, 0, 13, 15, 14, 3, 43, 0, NULL),
(123, 20, NULL, 73, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(124, 20, NULL, 74, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(125, 20, NULL, 75, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(126, 21, NULL, 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(127, 21, NULL, 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(128, 21, NULL, 23, 1, 12, 13, 5, 0, 10, 15, 15, 14, 15, 5, 73, 0, NULL),
(129, 21, NULL, 24, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(130, 21, NULL, 25, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(131, 21, NULL, 26, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(132, 21, NULL, 27, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(133, 22, NULL, 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(134, 22, NULL, 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(135, 22, NULL, 23, 1, 15, 14, 12, 0, 14, 0, 14, 0, 14, 5, 68, 0, NULL),
(136, 22, NULL, 24, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(137, 22, NULL, 25, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(138, 22, NULL, 26, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(139, 22, NULL, 27, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(140, 23, NULL, 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(141, 23, NULL, 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(142, 23, NULL, 23, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(143, 23, NULL, 24, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(144, 23, NULL, 25, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(145, 23, NULL, 26, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(146, 23, NULL, 27, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(147, 24, NULL, 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(148, 24, NULL, 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(149, 24, NULL, 23, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(150, 24, NULL, 24, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(151, 24, NULL, 25, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(152, 24, NULL, 26, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(153, 24, NULL, 27, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(154, 25, NULL, 21, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(155, 25, NULL, 22, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(156, 25, NULL, 23, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(157, 25, NULL, 24, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(158, 25, NULL, 25, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(159, 25, NULL, 26, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(160, 25, NULL, 27, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(161, 26, NULL, 28, 1, 12, 13, 5, 0, 10, 15, 15, 14, 15, 3, 44, 0, NULL),
(162, 26, NULL, 29, 1, 15, 14, 0, 0, 15, 0, 15, 0, 15, 3, 44, 0, NULL),
(163, 26, NULL, 30, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(164, 26, NULL, 31, 1, 12, 13, 5, 0, 10, 13, 13, 14, 14, 3, 41, 0, NULL),
(165, 26, NULL, 32, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(166, 26, NULL, 33, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(167, 26, NULL, 34, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(168, 27, NULL, 28, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(169, 27, NULL, 29, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(170, 27, NULL, 30, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(171, 27, NULL, 31, 1, 13, 13, 5, 0, 10, 13, 13, 0, 13, 3, 39, 0, NULL),
(172, 27, NULL, 32, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(173, 27, NULL, 33, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(174, 27, NULL, 34, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(175, 28, NULL, 28, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(176, 28, NULL, 29, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(177, 28, NULL, 30, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(178, 28, NULL, 31, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(179, 28, NULL, 32, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(180, 28, NULL, 33, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(181, 28, NULL, 34, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(182, 29, NULL, 28, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(183, 29, NULL, 29, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(184, 29, NULL, 30, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(185, 29, NULL, 31, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(186, 29, NULL, 32, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(187, 29, NULL, 33, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(188, 29, NULL, 34, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(189, 16, NULL, 14, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(190, 16, 11, 15, 1, 15, 13, 10, 0, 13, 0, 13, 14, 13, 2, 27, 0, NULL),
(191, 16, 18, 16, 1, 15, 14, 0, 0, 15, 0, 15, 14, 14, 3, 43, 0, NULL),
(192, 16, NULL, 17, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(193, 16, NULL, 18, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(194, 16, NULL, 19, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(195, 16, NULL, 20, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(196, 17, NULL, 14, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(197, 17, 11, 15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, NULL, 0, NULL),
(198, 17, 18, 16, 1, 15, 0, 0, 0, 15, 0, 15, 0, 15, 3, 45, 0, NULL),
(199, 17, NULL, 17, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(200, 17, NULL, 18, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(201, 17, NULL, 19, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(202, 17, NULL, 20, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(203, 18, NULL, 14, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(204, 18, 11, 15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, NULL, 0, NULL),
(205, 18, 18, 16, 1, 17, 0, 0, 0, 17, 0, 17, 0, 17, 3, 51, 0, NULL),
(206, 18, NULL, 17, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(207, 18, NULL, 18, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(208, 18, NULL, 19, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(209, 18, NULL, 20, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(210, 19, NULL, 14, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(211, 19, 11, 15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, NULL, 0, NULL),
(212, 19, 18, 16, 1, 9, 0, 0, 0, 9, 0, 9, 0, 9, 3, 27, 0, NULL),
(213, 19, NULL, 17, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(214, 19, NULL, 18, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(215, 19, NULL, 19, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(216, 19, NULL, 20, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(217, 20, NULL, 14, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, NULL, 0, NULL),
(218, 20, 11, 15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, NULL, 0, NULL),
(219, 20, 18, 16, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(220, 20, NULL, 17, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, NULL, 0, NULL),
(221, 20, NULL, 18, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(222, 20, NULL, 19, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL),
(223, 20, NULL, 20, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(2) NOT NULL,
  `fevicon` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `login_image` varchar(100) NOT NULL,
  `footer` varchar(300) NOT NULL,
  `currency` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `fevicon`, `logo`, `title`, `login_image`, `footer`, `currency`) VALUES
(1, 'fevicon-179.png', 'logo-597.png', 'Sistema de Gestión y Control de Notas', 'login_image-324.png', 'CEINTEC.RN', 'S/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subareas`
--

CREATE TABLE `subareas` (
  `IdSubArea` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `id_area` int(11) NOT NULL,
  `horas` char(2) DEFAULT NULL,
  `creditos` char(2) DEFAULT NULL,
  `id_ciclo` int(11) NOT NULL,
  `prioridad` char(1) NOT NULL DEFAULT '0',
  `permite_aplazado` char(1) DEFAULT '0',
  `permite_jurado` int(11) DEFAULT '0',
  `status` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subareas`
--

INSERT INTO `subareas` (`IdSubArea`, `Descripcion`, `id_area`, `horas`, `creditos`, `id_ciclo`, `prioridad`, `permite_aplazado`, `permite_jurado`, `status`) VALUES
(1, 'CULTURA AMBIENTAL', 1, '4', '3', 1, '0', '1', 0, '00'),
(2, 'DESARROLLO PERSONAL Y VOCACIONAL', 1, '3', '3', 1, '0', '0', 0, '00'),
(3, 'HISTORIA DEL ARTE', 1, '5', '4', 1, '0', '0', 0, '00'),
(4, 'PENSAMIENTO Y LENGUAJE TEATRAL I', 1, '5', '4', 1, '0', '0', 0, '00'),
(5, 'EXPRESION ACTORAL I', 10, '8', '5', 1, '0', '0', 0, '00'),
(6, 'ANATOMIA Y FISIOLOGIA APLICADA AL TEATRO', 10, '5', '4', 1, '0', '0', 0, '00'),
(7, 'PENSAMIENTO Y LENGUAJE TEATRAL II', 1, '5', '4', 2, '0', '0', 0, '00'),
(8, 'INTRODUCCIIN A LA MUSICA', 1, '4', '3', 2, '0', '0', 0, '00'),
(9, 'PENSAMIENTO LOGICO MATEMATICO', 1, '3', '3', 2, '0', '0', 0, '00'),
(10, 'NEUROCIENCIA APLICADA AL TEATRO', 9, '3', '3', 2, '0', '0', 0, '00'),
(11, 'DIVERSIDAD Y EDUCACION INCLUSIVA', 9, '2', '2', 2, '0', '0', 0, '00'),
(12, 'EXPRESION ACTORAL II', 10, '8', '5', 2, '0', '0', 0, '00'),
(13, 'DIDACTICA DE LA EXPRESION CORPORAL I', 10, '4', '3', 2, '0', '0', 0, '00'),
(14, 'LITERATURA PERUANA', 1, '5', '4', 3, '0', '0', 0, '00'),
(15, 'ESTADISTICA GENERAL', 1, '3', '2', 3, '0', '0', 0, '00'),
(16, 'SEMIOTICA Y ESTADISTICA TEATRAL', 1, '3', '3', 3, '0', '0', 0, '00'),
(17, 'EXPRESION ACTORAL III', 10, '8', '5', 3, '0', '0', 0, '00'),
(18, 'DIDACTICA DE LA EXPRESION CORPORAL II', 10, '4', '3', 3, '0', '0', 0, '00'),
(19, 'TEATRO DE TITERES I', 10, '3', '3', 3, '0', '0', 0, '00'),
(20, 'DIDACTICA DE LA EXPRESION ORAL I', 10, '4', '3', 3, '0', '0', 0, '00'),
(21, 'PSICOLOGÍA DEL DESARROLLO', 9, '4', '3', 4, '0', '0', 0, '00'),
(22, 'ESTADÍSTICA APLICADA A LA EDUCACIÓN', 9, '5', '4', 4, '0', '0', 0, '00'),
(23, 'EXPRESIÓN ACTORAL', 10, '8', '5', 4, '0', '0', 0, '00'),
(24, 'TEATRO DE TÍTERES', 10, '3', '3', 4, '0', '0', 0, '00'),
(25, 'DIDÁCTICA DE LA EXPRESIÓN ORAL', 10, '4', '3', 4, '0', '0', 0, '00'),
(26, 'DRAMATURGIA', 10, '3', '3', 4, '0', '0', 0, '00'),
(27, 'HISTORIA UNIVERSAL DEL TEATRO', 10, '3', '3', 4, '0', '0', 0, '00'),
(28, 'METODOLOGÍA DE LA INVESTIGACIÓN CIENTÍFICA', 1, '4', '3', 5, '0', '0', 0, '00'),
(29, 'PSICOLOGÍA DEL APRENDIZAJE', 9, '4', '3', 5, '0', '0', 0, '00'),
(30, 'TEORÍA DE LA EDUCACIÓN', 9, '4', '3', 5, '0', '0', 0, '00'),
(31, 'CURRÍCULO', 9, '4', '3', 5, '0', '0', 0, '00'),
(32, 'EXPRESIÓN ACTORAL', 9, '8', '5', 5, '0', '0', 0, '00'),
(33, 'HISTORIA UNIVERSAL DEL TEATRO', 10, '3', '3', 5, '0', '0', 0, '00'),
(34, 'DIDÁCTICA DE LAS ARTES PLÁSTICAS', 10, '3', '3', 5, '0', '0', 0, '00'),
(35, 'DIDÁCTICA DEL TEATRO Y EL ARTE', 9, '4', '3', 6, '0', '0', 0, '00'),
(36, 'PROGRAMACIÓN CURRICULAR', 9, '4', '3', 6, '0', '0', 0, '00'),
(37, 'PRÁCTICA PRE PROFESIONAL', 9, '3', '3', 6, '0', '0', 0, '00'),
(38, 'EXPRESIÓN ACTORAL', 10, '8', '5', 6, '0', '0', 0, '00'),
(39, 'HISTORIA DEL TEATRO PERUANO', 10, '4', '3', 6, '0', '0', 0, '00'),
(40, 'MAQUILLAJE', 10, '4', '3', 6, '0', '0', 0, '00'),
(41, 'DIDÁCTICA DE LA DANZA', 10, '3', '3', 6, '0', '0', 0, '00'),
(42, 'PROGRAMACIÓN CURRICULAR', 9, '5', '4', 7, '0', '0', 0, '00'),
(43, 'PRÁCTICA PRE PROFESIONAL', 9, '5', '4', 7, '0', '0', 0, '00'),
(44, 'INVESTIGACIÓN', 9, '5', '4', 7, '0', '0', 0, '00'),
(45, 'ÉTICA Y DEONTOLOGÍA DOCENTE', 9, '4', '3', 7, '0', '0', 0, '00'),
(46, 'EXPRESIÓN ACTORAL', 10, '8', '5', 7, '0', '0', 0, '00'),
(47, 'DIRECCIÓN TEATRAL', 10, '3', '3', 7, '0', '0', 0, '00'),
(48, 'PRÁCTICA PRE PROFESIONAL', 9, '8', '6', 8, '0', '0', 0, '00'),
(49, 'INVESTIGACIÓN', 9, '8', '5', 8, '0', '0', 0, '00'),
(50, 'EXPRESIÓN ACTORAL', 10, '8', '5', 8, '0', '0', 0, '00'),
(51, 'DIRECCIÓN TEATRAL', 10, '3', '3', 8, '0', '0', 0, '00'),
(52, 'PRODUCCIÓN Y GESTIÓN CULTURAL', 10, '3', '3', 8, '0', '0', 0, '00'),
(53, 'PRÁCTICA PRE PROFESIONAL', 9, '18', '10', 9, '0', '0', 0, '00'),
(54, 'INVESTIGACIÓN', 9, '8', '5', 9, '0', '0', 0, '00'),
(55, 'ADMINISTRACIÓN Y LEGISLACIÓN EDUCATIVA', 9, '4', '3', 9, '0', '0', 0, '00'),
(56, 'PRÁCTICA PRE PROFESIONAL', 9, '20', '10', 10, '0', '0', 0, '00'),
(57, 'INVESTIGACIÓN', 9, '10', '8', 10, '0', '0', 0, '00'),
(58, 'ACTUACIï¿½N', 3, '8', '5', 1, '0', '0', 0, '00'),
(59, 'METODOLOGÍA Y ENTRENAMIENTO DE LA VOZ', 3, '4', '3', 1, '0', '0', 0, '00'),
(60, 'METODOLOGÍA Y ENTRENAMIENTO DEL CUERPO', 3, '4', '3', 1, '0', '0', 0, '00'),
(61, 'LECTURA Y ANï¿½LISIS DE TEXTO', 4, '4', '3', 1, '0', '1', 0, '00'),
(62, 'HISTORIA DEL ARTE Y EL TEATRO UNIVERSAL', 4, '4', '3', 1, '0', '0', 0, '00'),
(63, 'TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN', 4, '6', '4', 1, '0', '0', 0, '00'),
(64, 'ACTUACIÓN', 3, '8', '5', 2, '0', '0', 0, '00'),
(65, 'METODOLOGÍA Y ENTRENAMIENTO DE LA VOZ', 3, '4', '3', 2, '0', '0', 0, '00'),
(66, 'METODOLOGÍA Y ENTRENAMIENTO DEL CUERPO', 3, '4', '3', 2, '0', '0', 0, '00'),
(67, 'LECTURA Y ANï¿½LISIS DE TEXTO', 4, '4', '3', 2, '0', '1', 0, '00'),
(68, 'HISTORIA DEL ARTE Y EL TEATRO UNIVERSAL', 4, '4', '3', 2, '0', '0', 0, '00'),
(69, 'TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN', 4, '6', '4', 2, '0', '0', 0, '00'),
(70, 'ACTUACIÓN', 3, '10', '7', 3, '0', '0', 0, '00'),
(71, 'METODOLOGÍA Y ENTRENAMIENTO DE LA VOZ', 3, '4', '3', 3, '0', '0', 0, '00'),
(72, 'METODOLOGï¿½A Y ENTRENAMIENTO DEL CUERPO', 3, '4', '3', 3, '0', '0', 1, '00'),
(73, 'MÚSICA Y CANTO', 4, '4', '3', 3, '0', '0', 0, '00'),
(74, 'PSICOLOGÍA DEL ACTOR', 4, '4', '3', 3, '0', '0', 0, '00'),
(75, 'HISTORIA DEL TEATRO PERUANO', 4, '4', '3', 3, '0', '0', 0, '00'),
(76, 'PEPE', 1, '4', '4', 1, '0', '0', 0, '00'),
(77, 'PEPE', 1, '2', '2', 1, '1', '0', 0, '00'),
(78, 'ee', 1, '2', '2', 1, '0', '0', 0, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_personal`
--

CREATE TABLE `tipo_personal` (
  `IdTipo` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_personal`
--

INSERT INTO `tipo_personal` (`IdTipo`, `Descripcion`) VALUES
(1, 'DOCENTE CONTRATADO'),
(2, 'DOCENTE NOMBRADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `status` char(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `Descripcion`, `status`) VALUES
(1, 'ADMINISTRADOR', '00'),
(2, 'DOCENTE', '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tplan_estudios`
--

CREATE TABLE `tplan_estudios` (
  `IdPlan` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Especialidad` varchar(50) NOT NULL,
  `id_periodo` int(11) DEFAULT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pw`, `id_personal`, `id_rol`, `avatar`, `status`) VALUES
(1, 'admin', '$2y$10$okLrKuskcpLdeyZ5VhiZ9.N3rxOXwZfvAwAIz0VH8rI3jywcPiu3S', 0, 1, '43229.png', '99'),
(2, 'vgarfias', '$2y$10$sBKvEmi44r..NZ57EkwbQeBp7XA89FS/Mu7iIvzjiXd7hR2emD2iy', 1, 2, NULL, '00'),
(3, 'rhonorio', '$2y$10$SASoKHKf.OZgwm36E74WP.HHd3Y8lHPNSBRV/2bPLrr9YpG3ZKHsy', 2, 2, NULL, '00'),
(4, 'rsalinas', '$2y$10$d3LFZeMvV5ApLoDGJvdawOyxsX4PqXOPbKsTQgZvHlciax69pj.CW', 3, 2, '53780.png', '00'),
(5, 'pcastro', '$2y$10$OumQucbMW23F0LMPiRcIoOHvkU37u6nR.ReEGIrSqZzrM2Uy0Jr72', 4, 2, NULL, '00'),
(6, 'srodriguez', '$2y$10$RZey.r/ugD2DQEaF7UlNMuasdrFw4CN3qD2.qqlYa3UNk4yeTFIc6', 5, 2, NULL, '00'),
(7, 'cjara', '$2y$10$qACJpDSjGowwviAFXNWKIusJETouOVRbA1azaoHuVZGODzZL2XNL.', 6, 2, NULL, '00'),
(8, 'hrojas', '$2y$10$53D3.25F/xO74ZvGtQE6QufvofiQRGvy6toJ3zlPNz3ElXhNAfRNK', 7, 2, NULL, '00'),
(9, 'ddiaz', '$2y$10$A/D93QNiwLk5bHKS1HE9JuMVSgFtSfSK4ZKFr5fs3N3k9QgIoL0Wu', 8, 2, NULL, '00'),
(10, 'mreyes', '$2y$10$rZMoj53ua1dNCCbrE.nB1.aij5IKnw1bWPd/BNvqT7tEFphrU/LSG', 9, 2, NULL, '00'),
(11, 'evigo', '$2y$10$qNelEH0gBv9fHGNwvc2syeTlwk/c7C4aO.vWWQztUC4VIpreSzD9a', 10, 2, NULL, '00'),
(12, 'dtapia', '$2y$10$KMpZdn6Xv37d63wwloChx.x6gHlD246BsQdYAm1hAZqM4SV9IJiim', 11, 2, NULL, '00'),
(13, 'jjara', '$2y$10$tXGapl8Kv7/cU5WD6MPktuu7jxCxTAoy2ojlnhNdaHhDQSYrkGJ.C', 12, 2, NULL, '00'),
(14, 'jvega', '$2y$10$kRml3RUay/LoAPLNi9sqseZVh36PkpmcBwPAwHYVkuoYYzQ5sIUG2', 13, 2, NULL, '00'),
(15, 'mledesma', '$2y$10$lipgjekaiylKOt4UTiepW.T7BeM.Un8Wef64./6LD36CTzc5pQav2', 14, 2, NULL, '00'),
(16, 'emendoza', '$2y$10$w14pz5cdhbmgBxnJ9juS/Ouew4JK4qe8NFpsrDdpG2UI0mPB2AnXy', 15, 2, NULL, '00'),
(17, 'mcalderon', '$2y$10$hvLLnA/yktXbqTft7l28XucIfk8eHQq5ZinqoCK4EZFAYq3d7sERK', 16, 2, NULL, '00'),
(18, 'cllave', '$2y$10$ddfiiG4Lu.39ohyzfGnc0eqP9GstmVNsg.PGvki4leKP9TVIcGD0S', 17, 2, NULL, '00'),
(19, 'asachun', '$2y$10$DrE9hvUSy0rxNLLVP1p8Kuq1b7hNg/V7dp128JzBjLHVOttiVq8EO', 18, 2, NULL, '00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`IdAlumno`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`IdArea`);

--
-- Indices de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  ADD PRIMARY KEY (`IdCiclo`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`IdClas`);

--
-- Indices de la tabla `docente_asignatura`
--
ALTER TABLE `docente_asignatura`
  ADD PRIMARY KEY (`IdAsDoc`);

--
-- Indices de la tabla `fecha_promedios`
--
ALTER TABLE `fecha_promedios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `info_institucional`
--
ALTER TABLE `info_institucional`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`IdOrden`);

--
-- Indices de la tabla `peracad`
--
ALTER TABLE `peracad`
  ADD PRIMARY KEY (`IdPeriodo`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`IdPersonal`);

--
-- Indices de la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  ADD PRIMARY KEY (`IdPlan`);

--
-- Indices de la tabla `resumen_asignatura`
--
ALTER TABLE `resumen_asignatura`
  ADD PRIMARY KEY (`idresumen`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subareas`
--
ALTER TABLE `subareas`
  ADD PRIMARY KEY (`IdSubArea`);

--
-- Indices de la tabla `tipo_personal`
--
ALTER TABLE `tipo_personal`
  ADD PRIMARY KEY (`IdTipo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `IdAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `IdArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  MODIFY `IdCiclo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `IdClas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `docente_asignatura`
--
ALTER TABLE `docente_asignatura`
  MODIFY `IdAsDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `fecha_promedios`
--
ALTER TABLE `fecha_promedios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `IdOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `peracad`
--
ALTER TABLE `peracad`
  MODIFY `IdPeriodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `IdPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  MODIFY `IdPlan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `resumen_asignatura`
--
ALTER TABLE `resumen_asignatura`
  MODIFY `idresumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT de la tabla `subareas`
--
ALTER TABLE `subareas`
  MODIFY `IdSubArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `tipo_personal`
--
ALTER TABLE `tipo_personal`
  MODIFY `IdTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
