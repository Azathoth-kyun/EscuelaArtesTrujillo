-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-08-2019 a las 13:51:32
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
  `DNI` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `FecNaci` date DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Celular` varchar(9) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Genero` int(11) DEFAULT NULL,
  `status` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(39, NULL, 'MATUTE FLORIAN', 'Grecia Stany', '1998-10-07', '-', '-', '-', 'n/a@gmail.com', 2, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `IdArea` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`IdArea`, `Descripcion`, `id_plan`, `status`) VALUES
(1, 'FORMACIÓN GENERAL', 2, '00'),
(3, 'TALLERES DE ESPECIALIDAD ACTORAL', 3, '00'),
(4, 'CULTURA GENERAL Y TEATRAL', 3, '00'),
(5, 'TALLERES DE TECNOLOGÍA', 3, '00'),
(6, 'INVESTIGACIÓN', 3, '00'),
(7, 'DESARROLLO PERSONAL Y VOCACIONAL', 1, '99'),
(8, 'FORMACIÓN GENERAL', 1, '00'),
(9, 'FORMACIÓN PROFESIONAL', 2, '00'),
(10, 'FORMACIÓN ESPECIALIZADA', 2, '00'),
(11, 'FORMACIÓN PROFESIONAL', 1, '00'),
(12, 'FORMACIÓN ESPECIALIZADA', 1, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `IdCiclo` int(11) NOT NULL,
  `Descripcion` char(4) NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `IdEstado` char(2) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IdEstado`, `Descripcion`) VALUES
('00', 'ACTIVO'),
('99', 'DESACTIVADO');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Estructura de tabla para la tabla `peracad`
--

CREATE TABLE `peracad` (
  `IdPeriodo` int(11) NOT NULL,
  `Descripcion` varchar(20) NOT NULL,
  `inc_periodo` date NOT NULL,
  `fin_periodo` date NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peracad`
--

INSERT INTO `peracad` (`IdPeriodo`, `Descripcion`, `inc_periodo`, `fin_periodo`, `status`) VALUES
(1, '2019-I', '0000-00-00', '0000-00-00', '00'),
(2, '2019-II', '0000-00-00', '0000-00-00', '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `IdPersonal` int(11) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `FecNaci` date DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Celular` varchar(9) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Idtp` int(11) DEFAULT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plan_estudios`
--

INSERT INTO `plan_estudios` (`IdPlan`, `Descripcion`, `Especialidad`, `id_periodo`, `status`) VALUES
(1, 'EDUCACIÓN ARTÍSTICA', 'DANZA FOLKLÓRICA', NULL, '00'),
(2, 'EDUCACIÓN ARTÍSTICA', 'TEATRO', NULL, '00'),
(3, 'ARTISTA PROFESIONAL', 'ACTUACIÓN TEATRAL', NULL, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resumen_asignatura`
--

CREATE TABLE `resumen_asignatura` (
  `IdResumen` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_profesor` int(11) DEFAULT NULL,
  `id_subarea` int(11) DEFAULT NULL,
  `prom1` int(11) DEFAULT NULL,
  `prom2` int(11) DEFAULT NULL,
  `prom3` int(11) DEFAULT NULL,
  `prom4` int(11) DEFAULT NULL,
  `promfinal` int(11) DEFAULT NULL,
  `aplazado` double DEFAULT NULL,
  `promdoc` int(11) DEFAULT NULL,
  `promjur` double DEFAULT NULL,
  `promdj` double DEFAULT NULL,
  `cred` int(11) DEFAULT NULL,
  `ptj` int(11) DEFAULT NULL,
  `observacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `resumen_asignatura`
--

INSERT INTO `resumen_asignatura` (`IdResumen`, `id_alumno`, `id_profesor`, `id_subarea`, `prom1`, `prom2`, `prom3`, `prom4`, `promfinal`, `aplazado`, `promdoc`, `promjur`, `promdj`, `cred`, `ptj`, `observacion`) VALUES
(1, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(2, 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(3, 1, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(4, 1, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(5, 1, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(6, 1, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(7, 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(8, 2, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(9, 2, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(10, 2, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(11, 2, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(12, 2, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(13, 3, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(14, 3, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(15, 3, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(16, 3, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(17, 3, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(18, 3, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(19, 4, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(20, 4, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(21, 4, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(22, 4, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(23, 4, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(24, 4, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(25, 5, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(26, 5, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(27, 5, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(28, 5, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(29, 5, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(30, 5, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(31, 6, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(32, 6, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(33, 6, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(34, 6, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(35, 6, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(36, 6, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(37, 6, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(38, 7, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(39, 7, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(40, 7, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(41, 7, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(42, 7, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(43, 7, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(44, 7, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(45, 8, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(46, 8, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(47, 8, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(48, 8, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(49, 8, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(50, 8, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(51, 8, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(52, 9, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(53, 9, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(54, 9, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(55, 9, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(56, 9, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(57, 9, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(58, 9, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(59, 10, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(60, 10, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(61, 10, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(62, 10, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(63, 10, NULL, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(64, 10, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(65, 10, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(66, 11, NULL, 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(67, 11, NULL, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(68, 11, NULL, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(69, 11, NULL, 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(70, 11, NULL, 62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(71, 11, NULL, 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(72, 12, NULL, 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(73, 12, NULL, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(74, 12, NULL, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(75, 12, NULL, 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(76, 12, NULL, 62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(77, 12, NULL, 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(78, 13, NULL, 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(79, 13, NULL, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(80, 13, NULL, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(81, 13, NULL, 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(82, 13, NULL, 62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(83, 13, NULL, 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(84, 14, NULL, 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(85, 14, NULL, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(86, 14, NULL, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(87, 14, NULL, 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(88, 14, NULL, 62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(89, 14, NULL, 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(90, 15, NULL, 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL),
(91, 15, NULL, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(92, 15, NULL, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(93, 15, NULL, 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(94, 15, NULL, 62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(95, 15, NULL, 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL),
(96, 16, NULL, 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL),
(97, 16, NULL, 71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(98, 16, NULL, 72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(99, 16, NULL, 73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(100, 16, NULL, 74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(101, 16, NULL, 75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(102, 17, NULL, 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL),
(103, 17, NULL, 71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(104, 17, NULL, 72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(105, 17, NULL, 73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(106, 17, NULL, 74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(107, 17, NULL, 75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(108, 18, NULL, 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL),
(109, 18, NULL, 71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(110, 18, NULL, 72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(111, 18, NULL, 73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(112, 18, NULL, 74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(113, 18, NULL, 75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(114, 19, NULL, 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL),
(115, 19, NULL, 71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(116, 19, NULL, 72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(117, 19, NULL, 73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(118, 19, NULL, 74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(119, 19, NULL, 75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(120, 20, NULL, 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL),
(121, 20, NULL, 71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(122, 20, NULL, 72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(123, 20, NULL, 73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(124, 20, NULL, 74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(125, 20, NULL, 75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `prioridad` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subareas`
--

INSERT INTO `subareas` (`IdSubArea`, `Descripcion`, `id_area`, `horas`, `creditos`, `id_ciclo`, `prioridad`, `status`) VALUES
(1, 'CULTURA AMBIENTAL', 1, '4', '3', 1, '1', '00'),
(2, 'DESARROLLO PERSONAL Y VOCACIONAL', 1, '3', '3', 1, '1', '00'),
(3, 'HISTORIA DEL ARTE', 1, '5', '4', 1, '1', '00'),
(4, 'PENSAMIENTO Y LENGUAJE TEATRAL', 1, '5', '4', 1, '1', '00'),
(5, 'EXPRESIÓN ACTORAL', 10, '8', '5', 1, '1', '00'),
(6, 'ANATOMIA Y FISIOLOGÍA APLICADA AL TEATRO', 10, '5', '4', 1, '1', '00'),
(7, 'PENSAMIENTO Y LENGUAJE TEATRAL', 1, '5', '4', 2, '1', '00'),
(8, 'INTRODUCCIÓN A LA MÚSICA', 1, '4', '3', 2, '1', '00'),
(9, 'PENSAMIENTO LÓGICO MATEMÁTICO', 1, '3', '3', 2, '1', '00'),
(10, 'NEUROCIENCIA APLICADA AL TEATRO', 9, '3', '3', 2, '1', '00'),
(11, 'DIVERSIDAD Y EDUCACIÓN INCLUSIVA', 9, '2', '2', 2, '1', '00'),
(12, 'EXPRESIÓN ACTORAL', 10, '8', '5', 2, '1', '00'),
(13, 'DIDÁCTICA DE LA EXPRESIÓN CORPORAL', 10, '4', '3', 2, '1', '00'),
(14, 'LITERATURA PERUANA', 1, '5', '4', 3, '1', '00'),
(15, 'ESTADISTICA GENERAL', 1, '3', '2', 3, '9', '00'),
(16, 'SEMIOTICA Y ESTADÍSTICA TEATRAL', 1, '3', '3', 3, '1', '00'),
(17, 'EXPRESIÓN ACTORAL', 10, '8', '5', 3, '1', '00'),
(18, 'DIDÁCTICA DE LA EXPRESIÓN CORPORAL', 10, '4', '3', 3, '1', '00'),
(19, 'TEATRO DE TÍTERES', 10, '3', '3', 3, '1', '00'),
(20, 'DIDÁCTICA DE LA EXPRESIÓN ORAL', 10, '4', '3', 3, '1', '00'),
(21, 'PSICOLOGÍA DEL DESARROLLO', 9, '4', '3', 4, '1', '00'),
(22, 'ESTADÍSTICA APLICADA A LA EDUCACIÓN', 9, '5', '4', 4, '1', '00'),
(23, 'EXPRESIÓN ACTORAL', 10, '8', '5', 4, '1', '00'),
(24, 'TEATRO DE TÍTERES', 10, '3', '3', 4, '1', '00'),
(25, 'DIDÁCTICA DE LA EXPRESIÓN ORAL', 10, '4', '3', 4, '1', '00'),
(26, 'DRAMATURGIA', 10, '3', '3', 4, '1', '00'),
(27, 'HISTORIA UNIVERSAL DEL TEATRO', 10, '3', '3', 4, '1', '00'),
(28, 'METODOLOGÍA DE LA INVESTIGACIÓN CIENTÍFICA', 1, '4', '3', 5, '1', '00'),
(29, 'PSICOLOGÍA DEL APRENDIZAJE', 9, '4', '3', 5, '1', '00'),
(30, 'TEORÍA DE LA EDUCACIÓN', 9, '4', '3', 5, '1', '00'),
(31, 'CURRÍCULO', 9, '4', '3', 5, '1', '00'),
(32, 'EXPRESIÓN ACTORAL', 9, '8', '5', 5, '1', '00'),
(33, 'HISTORIA UNIVERSAL DEL TEATRO', 10, '3', '3', 5, '1', '00'),
(34, 'DIDÁCTICA DE LAS ARTES PLÁSTICAS', 10, '3', '3', 5, '1', '00'),
(35, 'DIDÁCTICA DEL TEATRO Y EL ARTE', 9, '4', '3', 6, '1', '00'),
(36, 'PROGRAMACIÓN CURRICULAR', 9, '4', '3', 6, '1', '00'),
(37, 'PRÁCTICA PRE PROFESIONAL', 9, '3', '3', 6, '1', '00'),
(38, 'EXPRESIÓN ACTORAL', 10, '8', '5', 6, '1', '00'),
(39, 'HISTORIA DEL TEATRO PERUANO', 10, '4', '3', 6, '1', '00'),
(40, 'MAQUILLAJE', 10, '4', '3', 6, '1', '00'),
(41, 'DIDÁCTICA DE LA DANZA', 10, '3', '3', 6, '1', '00'),
(42, 'PROGRAMACIÓN CURRICULAR', 9, '5', '4', 7, '0', '00'),
(43, 'PRÁCTICA PRE PROFESIONAL', 9, '5', '4', 7, '0', '00'),
(44, 'INVESTIGACIÓN', 9, '5', '4', 7, '0', '00'),
(45, 'ÉTICA Y DEONTOLOGÍA DOCENTE', 9, '4', '3', 7, '0', '00'),
(46, 'EXPRESIÓN ACTORAL', 10, '8', '5', 7, '0', '00'),
(47, 'DIRECCIÓN TEATRAL', 10, '3', '3', 7, '0', '00'),
(48, 'PRÁCTICA PRE PROFESIONAL', 9, '8', '6', 8, '0', '00'),
(49, 'INVESTIGACIÓN', 9, '8', '5', 8, '0', '00'),
(50, 'EXPRESIÓN ACTORAL', 10, '8', '5', 8, '0', '00'),
(51, 'DIRECCIÓN TEATRAL', 10, '3', '3', 8, '0', '00'),
(52, 'PRODUCCIÓN Y GESTIÓN CULTURAL', 10, '3', '3', 8, '0', '00'),
(53, 'PRÁCTICA PRE PROFESIONAL', 9, '18', '10', 9, '0', '00'),
(54, 'INVESTIGACIÓN', 9, '8', '5', 9, '0', '00'),
(55, 'ADMINISTRACIÓN Y LEGISLACIÓN EDUCATIVA', 9, '4', '3', 9, '0', '00'),
(56, 'PRÁCTICA PRE PROFESIONAL', 9, '20', '10', 10, '0', '00'),
(57, 'INVESTIGACIÓN', 9, '10', '8', 10, '0', '00'),
(58, 'ACTUACIÓN', 3, '8', '5', 1, '0', '00'),
(59, 'METODOLOGÍA Y ENTRENAMIENTO DE LA VOZ', 3, '4', '3', 1, '0', '00'),
(60, 'METODOLOGÍA Y ENTRENAMIENTO DEL CUERPO', 3, '4', '3', 1, '0', '00'),
(61, 'LECTURA Y ANÁLISIS DE TEXTO', 4, '4', '3', 1, '0', '00'),
(62, 'HISTORIA DEL ARTE Y EL TEATRO UNIVERSAL', 4, '4', '3', 1, '0', '00'),
(63, 'TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN', 4, '6', '4', 1, '0', '00'),
(64, 'ACTUACIÓN', 3, '8', '5', 2, '0', '00'),
(65, 'METODOLOGÍA Y ENTRENAMIENTO DE LA VOZ', 3, '4', '3', 2, '0', '00'),
(66, 'METODOLOGÍA Y ENTRENAMIENTO DEL CUERPO', 3, '4', '3', 2, '0', '00'),
(67, 'LECTURA Y ANÁLISIS DE TEXTO', 4, '4', '3', 2, '0', '00'),
(68, 'HISTORIA DEL ARTE Y EL TEATRO UNIVERSAL', 4, '4', '3', 2, '0', '00'),
(69, 'TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN', 4, '6', '4', 2, '0', '00'),
(70, 'ACTUACIÓN', 3, '10', '7', 3, '0', '00'),
(71, 'METODOLOGÍA Y ENTRENAMIENTO DE LA VOZ', 3, '4', '3', 3, '0', '00'),
(72, 'METODOLOGÍA Y ENTRENAMIENTO DEL CUERPO', 3, '4', '3', 3, '0', '00'),
(73, 'MÚSICA Y CANTO', 4, '4', '3', 3, '0', '00'),
(74, 'PSICOLOGÍA DEL ACTOR', 4, '4', '3', 3, '0', '00'),
(75, 'HISTORIA DEL TEATRO PERUANO', 4, '4', '3', 3, '0', '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbfactura`
--

CREATE TABLE `tbfactura` (
  `id_factura` int(11) NOT NULL,
  `Cliente` int(11) NOT NULL,
  `RNC` int(11) NOT NULL,
  `Fecha` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tbfactura`
--

INSERT INTO `tbfactura` (`id_factura`, `Cliente`, `RNC`, `Fecha`, `producto`, `precio`, `total`) VALUES
(1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_personal`
--

CREATE TABLE `tipo_personal` (
  `IdTipo` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `Descripcion`, `status`) VALUES
(1, 'ADMINISTRADOR', '00'),
(2, 'DOCENTE', '00');

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
(1, 'admin', '$2y$10$okLrKuskcpLdeyZ5VhiZ9.N3rxOXwZfvAwAIz0VH8rI3jywcPiu3S', 0, 1, '43229.png', '99');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`IdAlumno`);

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
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IdEstado`);

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
  ADD PRIMARY KEY (`IdResumen`);

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
  MODIFY `IdAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `IdAsDoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `info_institucional`
--
ALTER TABLE `info_institucional`
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
  MODIFY `IdPersonal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  MODIFY `IdPlan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `resumen_asignatura`
--
ALTER TABLE `resumen_asignatura`
  MODIFY `IdResumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subareas`
--
ALTER TABLE `subareas`
  MODIFY `IdSubArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
