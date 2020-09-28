-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2020 a las 17:45:56
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phplogin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actualizacion`
--

CREATE TABLE `actualizacion` (
  `Id_titulo` int(10) NOT NULL,
  `Titulo` varchar(64) NOT NULL,
  `Fecha_Egreso` int(4) NOT NULL,
  `Promedio` double NOT NULL,
  `Act_Rama` int(10) NOT NULL,
  `Act_Cargo` int(10) DEFAULT NULL,
  `Calificaciones` double DEFAULT NULL,
  `Curso` double DEFAULT NULL,
  `Punto` int(10) DEFAULT NULL,
  `Puntaje` double DEFAULT NULL,
  `Id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actualizacion`
--

INSERT INTO `actualizacion` (`Id_titulo`, `Titulo`, `Fecha_Egreso`, `Promedio`, `Act_Rama`, `Act_Cargo`, `Calificaciones`, `Curso`, `Punto`, `Puntaje`, `Id`) VALUES
(1, 'JJJJ', 2010, 8.5, 3, 3, 2, 2, 2, 20.5, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(64) DEFAULT NULL,
  `apellido` varchar(64) NOT NULL,
  `dni` varchar(64) NOT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `Password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `Name`, `apellido`, `dni`, `Email`, `Password`) VALUES
(11, 'guido', 'rauber', '18447820', 'guidomrauber@gmail.com', '$2y$10$L.WdINZrVlfg8ZZK6CJAJe.kkiLojOnLUPV4BaLE7VK0o1rRZTH32'),
(12, 'jose', '2020-09-16', '8', '1', '$2y$10$JKYMIE3VLc9/2WQcAwV56.Ckx9GbWtne2y6K6R8wPfy7AQUv4/03i'),
(13, 'guido', 'rauber', '18447820', 'guidorauber@iesmb.edu.ar', '$2y$10$OzsPoJfha93OsoVpB8HpjeqsR5aJKkRd061Eq2z2gnKThB8fuWPQi'),
(14, 'pepe', 'onguito', '21222111', 'jose.giunta@yahoo.com', '$2y$10$sUC8s/7/SzEU/prcvWIdeu7ANqgcoi2qrUMQtv/T/7uf.2sslmoPO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actualizacion`
--
ALTER TABLE `actualizacion`
  ADD PRIMARY KEY (`Id_titulo`),
  ADD KEY `Id` (`Id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `dni` (`dni`),
  ADD KEY `dni_2` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actualizacion`
--
ALTER TABLE `actualizacion`
  ADD CONSTRAINT `actualizacion_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `users` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
