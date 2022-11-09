-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 14:05:19
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `Id_Alumno` int(10) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Apellido` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Correo` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Telefono` int(20) DEFAULT NULL,
  `Programa` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Id_Alumno`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `Programa`) VALUES
(4, 'María del Pilar ', 'Amórtegui', 'correo@correo.com', 2222222, 'ADSI'),
(6, 'Brayan Stiven', 'Cardona', 'correo@correo.com', 1234556, 'ADSO'),
(8, 'Jhonatan', 'Camacho Medina', 'correo@correo.com', 1234556, 'ADSI'),
(9, 'Diana Alejandra', 'Cruz Cortes', 'correo@correo.com', 1234563223, 'ADSO'),
(12, 'David Alejandro', 'Rodriguez Martinez', 'correo@correo.com', 1234556, 'ADSO'),
(13, 'Valentina', 'Martinez Mazzo', 'correo@correo.com', 1234563223, 'ADSO'),
(14, 'Juan Camilo ', 'Cruz Paipilla', 'correo@correo.com', 1234556, 'ADSO'),
(15, 'Andres Felipe', 'Martinez Rozo', 'correo@correo.com', 1234563223, 'ADSO'),
(16, 'Victor Alejandro', 'Rodríguez Zapata ', 'correo@correo.com', 1234556, 'ADSO'),
(17, 'Andres David', 'Silva ', 'correo@correo.com', 1234563223, 'ADSO'),
(18, 'Juan Carlos', 'Gil Montoya', 'correo@correo.com', 1234556, 'ADSO'),
(19, 'Deivy David', ' Sarmiento Pérez ', 'correo@correo.com', 1234563223, 'ADSO'),
(20, 'Paula Andrea', 'Olaya Diaz ', 'correo@correo.com', 1234556, 'ADSO'),
(26, 'Hansel David', 'Jiménez Diaz', 'correo@correo', 32453747, 'ADSO'),
(27, 'José Yohanny', 'Henao Torres', 'correo@correo', 22222, 'ADSO'),
(28, 'Juan Sebastian', 'López Aguilar', 'correo@correo', 322245764, 'ADSO'),
(29, 'Jhonatan ', 'Camacho Medina', 'correo@correo', 32452883, 'ADSO'),
(31, 'Yaneth Patricia', 'Corredor Velasco', 'correo@correo.com', 321345, 'ADSO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `Id_Coordinador` int(10) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Lugar` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`Id_Coordinador`, `Nombre`, `Lugar`, `Descripcion`) VALUES
(1, 'Jorge Alexander Fernández Camargo', 'SENA (CBA Mosquera)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et orci vitae lacus dignissim fermen'),
(3, 'Juan Carlos López Martínez', 'SENA (CBA Mosquera)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis, enim eget tempor rhoncu'),
(4, 'Carlos Martínez Gil', 'SENA (Madrid)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis, enim eget tempor rhoncu'),
(11, 'Vicente Garzón Cortes', 'SENA (Facatativa)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in venenatis mi. Aliquam suscipit cong');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `Id_Novedad` int(3) NOT NULL,
  `Rol` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Nombre_Apellido` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Programa` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Tipo_Novedad` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`Id_Novedad`, `Rol`, `Nombre_Apellido`, `Programa`, `Tipo_Novedad`, `Descripcion`) VALUES
(1, 'Aprendiz', 'Juan Andres Catama Ramirez', 'ADSI', 'Retiro Voluntario', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et orci vitae lacus dignissim fermen'),
(2, 'Aprendiz', 'Juan Felipe Solano Gaspar', 'ADSO', 'Traslado cede', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis, enim eget tempor rhoncu'),
(5, 'Aprendiz', 'Gabriel Cruz', 'ADSO', 'Traslado cede', 'Cuestiones personales y dificulta de transportarse '),
(6, 'Aprendiz', 'Felipe Garzón ', 'ADSI', 'Retiro Voluntario', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in venenatis mi. Aliquam suscipit cong'),
(7, 'Aprendiz', 'Veronica Lopez', 'ADSI', 'Traslado de cede', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in venenatis mi. Aliquam suscipit cong');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`Id_Alumno`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`Id_Coordinador`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`Id_Novedad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `Id_Alumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `Id_Coordinador` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `Id_Novedad` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
