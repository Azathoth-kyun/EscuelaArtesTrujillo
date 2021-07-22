-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-08-2019 a las 00:45:06
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
  `DNI` varchar(8) NOT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `FecNaci` date DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Celular` varchar(9) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Genero` char(1) DEFAULT NULL,
  `status` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`IdAlumno`, `DNI`, `Apellidos`, `Nombres`, `FecNaci`, `Direccion`, `Telefono`, `Celular`, `Email`, `Genero`, `status`) VALUES
(2, '78286043', 'RUIZ', 'PEPE', '1996-12-04', 'CALLE LOS GIRASOLES', '044211415', '945632114', 'A@GMAIL.COM', 'H', '99'),
(3, '12345678', 'BAZAN ALIAGA', 'Armando José', '2001-08-07', '-', '-', '-', 'n/a@gmail.com', 'H', '00'),
(4, '14785212', 'AGREDA CHÁVEZ', 'Gabriela', '1993-09-26', '-', '-', '-', '-@gmail.com', 'M', '00'),
(5, '78945614', 'CABRERA BARRUETO', 'Nievez Alexandra', '2001-09-11', '-', '-', '-', 'n/a@gmail.com', 'M', '00'),
(6, '32165478', 'CARBAJAL TAPIA', 'Estefania Sofia', '1996-10-26', '-', '-', '-', 'n/a@gmail.com', 'M', '00'),
(7, '98741256', 'CASTILLO CHAMACHE', 'Gabriela Caroline', '2001-01-23', '-', '-', '-', 'null@gmail.com', 'M', '00'),
(8, '36521476', 'GARCÍA CASTILLO', 'Roxana Mabel', '1997-05-21', '-', '-', '-', 'null@gmail.com', 'M', '00'),
(9, '41008669', 'VASQUEZ ROGGERO', 'MARCO ANTONIO', '1997-10-04', 'CALLE JOSE GALVEZ', '-', '-', 'ASDASD@GMAIL.COM', 'H', '00'),
(10, '11111111', 'ALVA GARCÍA', 'Milagritos Gisell', '1989-10-14', '*', '*', '*', 'n/a@gmail.com', 'M', '00');

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
(2, '441-19', 3, '3', 3, '1', 2, '00'),
(3, '407-19', 4, '3', 1, '1', 2, '00'),
(4, '442-19', 5, '3', 3, '1', 2, '00'),
(5, '443-19', 6, '3', 3, '1', 2, '00'),
(6, '444-19', 7, '3', 3, '1', 2, '00'),
(7, '445-19', 8, '3', 3, '1', 2, '00'),
(8, '396-19', 10, '3', 2, '1', 2, '00'),
(9, '414-19', 10, '3', 2, '2', 1, '00');

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
(1, '2019-II', '2019-08-26', '2019-12-13', '00'),
(2, '2019-I', '0000-00-00', '0000-00-00', '00');

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

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`IdPersonal`, `DNI`, `Apellidos`, `Nombres`, `FecNaci`, `Direccion`, `Telefono`, `Celular`, `Email`, `Idtp`, `status`) VALUES
(2, '17914403', 'MENDOZA TORRES', 'ELENA NEUMESIA', '2019-07-01', '-', '-', '996263993', 'Elenamendoza8@hotmail.com', 1, '00'),
(3, '1800572', 'JARA VALVERDE', 'JORGE LUIS', '1960-10-10', '-', '-', '949188154', 'jolljarval@hotmail.com', 1, '00'),
(4, '41884995', 'DIAZ BALLONA', 'YUSEPI CONRADO', '1945-10-10', '-', '-', '990418308', 'n/a@hotmail.com', 2, '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_estudios`
--

CREATE TABLE `plan_estudios` (
  `IdPlan` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Especialidad` varchar(50) NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plan_estudios`
--

INSERT INTO `plan_estudios` (`IdPlan`, `Descripcion`, `Especialidad`, `status`) VALUES
(1, 'EDUCACIÓN ARTÍSTICA', 'DANZA FOLKLÓRICA', '00'),
(2, 'EDUCACIÓN ARTÍSTICA', 'TEATRO', '00'),
(3, 'ARTISTA PROFESIONAL', 'ACTUACIÓN TEATRAL', '00');

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
  `promfinal` double DEFAULT NULL,
  `aplazado` double DEFAULT NULL,
  `promdoc` double DEFAULT NULL,
  `promjur` double DEFAULT NULL,
  `promdj` double DEFAULT NULL,
  `cred` int(11) DEFAULT NULL,
  `ptj` int(11) DEFAULT NULL,
  `observacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subareas`
--

INSERT INTO `subareas` (`IdSubArea`, `Descripcion`, `id_area`, `horas`, `creditos`, `id_ciclo`, `status`) VALUES
(1, 'CULTURA AMBIENTAL', 1, '4', '3', 1, '00'),
(2, 'DESARROLLO PERSONAL Y VOCACIONAL', 1, '3', '3', 1, '00'),
(3, 'HISTORIA DEL ARTE', 1, '5', '4', 1, '00'),
(4, 'PENSAMIENTO Y LENGUAJE TEATRAL', 1, '5', '4', 1, '00'),
(5, 'EXPRESIÓN ACTORAL', 10, '8', '5', 1, '00'),
(6, 'ANATOMIA Y FISIOLOGÍA APLICADA AL TEATRO', 10, '5', '4', 1, '00'),
(7, 'PENSAMIENTO Y LENGUAJE TEATRAL', 1, '5', '4', 2, '00'),
(8, 'INTRODUCCIÓN A LA MÚSICA', 1, '4', '3', 2, '00'),
(9, 'PENSAMIENTO LÓGICO MATEMÁTICO', 1, '3', '3', 2, '00'),
(10, 'NEUROCIENCIA APLICADA AL TEATRO', 9, '3', '3', 2, '00'),
(11, 'DIVERSIDAD Y EDUCACIÓN INCLUSIVA', 9, '2', '2', 2, '00'),
(12, 'EXPRESIÓN ACTORAL', 10, '8', '5', 2, '00'),
(13, 'DIDÁCTICA DE LA EXPRESIÓN CORPORAL', 10, '4', '3', 2, '00'),
(14, 'LITERATURA PERUANA', 1, '5', '4', 3, '00'),
(15, 'ESTADISTICA GENERAL', 1, '3', '2', 3, '00'),
(16, 'SEMIOTICA Y ESTADÍSTICA TEATRAL', 1, '3', '3', 3, '00'),
(17, 'EXPRESIÓN ACTORAL', 10, '8', '5', 3, '00'),
(18, 'DIDÁCTICA DE LA EXPRESIÓN CORPORAL', 10, '4', '3', 3, '00'),
(19, 'TEATRO DE TÍTERES', 10, '3', '3', 3, '00'),
(20, 'DIDÁCTICA DE LA EXPRESIÓN ORAL', 10, '4', '3', 3, '00'),
(21, 'PSICOLOGÍA DEL DESARROLLO', 9, '4', '3', 4, '00'),
(22, 'ESTADÍSTICA APLICADA A LA EDUCACIÓN', 9, '5', '4', 4, '00'),
(23, 'EXPRESIÓN ACTORAL', 10, '8', '5', 4, '00'),
(24, 'TEATRO DE TÍTERES', 10, '3', '3', 4, '00'),
(25, 'DIDÁCTICA DE LA EXPRESIÓN ORAL', 10, '4', '3', 4, '00'),
(26, 'DRAMATURGIA', 10, '3', '3', 4, '00'),
(27, 'HISTORIA UNIVERSAL DEL TEATRO', 10, '3', '3', 4, '00'),
(28, 'METODOLOGÍA DE LA INVESTIGACIÓN CIENTÍFICA', 1, '4', '3', 5, '00'),
(29, 'PSICOLOGÍA DEL APRENDIZAJE', 9, '4', '3', 5, '00'),
(30, 'TEORÍA DE LA EDUCACIÓN', 9, '4', '3', 5, '00'),
(31, 'CURRÍCULO', 9, '4', '3', 5, '00'),
(32, 'EXPRESIÓN ACTORAL', 9, '8', '5', 5, '00'),
(33, 'HISTORIA UNIVERSAL DEL TEATRO', 10, '3', '3', 5, '00'),
(34, 'DIDÁCTICA DE LAS ARTES PLÁSTICAS', 10, '3', '3', 5, '00'),
(35, 'DIDÁCTICA DEL TEATRO Y EL ARTE', 9, '4', '3', 6, '00'),
(36, 'PROGRAMACIÓN CURRICULAR', 9, '4', '3', 6, '00'),
(37, 'PRÁCTICA PRE PROFESIONAL', 9, '3', '3', 6, '00'),
(38, 'EXPRESIÓN ACTORAL', 10, '8', '5', 6, '00'),
(39, 'HISTORIA DEL TEATRO PERUANO', 10, '4', '3', 6, '00'),
(40, 'MAQUILLAJE', 10, '4', '3', 6, '00'),
(41, 'DIDÁCTICA DE LA DANZA', 10, '3', '3', 6, '00');

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
  `id` int(100) NOT NULL,
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
(7, 'ydiazballona', '$2y$10$ghZdkeHu32UNjuFxNNh3G.ag.znTUx8r9TqsPEJSi5EKD3a3tlCAC', 4, 2, '56084.png', '00'),
(1, 'admin', '$2y$10$okLrKuskcpLdeyZ5VhiZ9.N3rxOXwZfvAwAIz0VH8rI3jywcPiu3S', 0, 1, '43229.png', '00'),
(6, 'emendozatorres', '$2y$10$YrpVSE/FiFJ.Qx8ZlGUg/.7vhmxkAoVyx4pdye93W/PROkPGpUFSO', 2, 2, '81964.png', '00');

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
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IdEstado`);

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
  ADD PRIMARY KEY (`IdPersonal`),
  ADD UNIQUE KEY `DNI` (`DNI`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `IdAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `IdOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `peracad`
--
ALTER TABLE `peracad`
  MODIFY `IdPeriodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `IdPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `plan_estudios`
--
ALTER TABLE `plan_estudios`
  MODIFY `IdPlan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `resumen_asignatura`
--
ALTER TABLE `resumen_asignatura`
  MODIFY `IdResumen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subareas`
--
ALTER TABLE `subareas`
  MODIFY `IdSubArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
