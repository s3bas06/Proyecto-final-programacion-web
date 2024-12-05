-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2024 a las 02:23:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `poster_url` varchar(255) NOT NULL,
  `duracion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `poster_url`, `duracion`) VALUES
(1, 'Angry Birds', 'assets/angrybirds-poster.jpg', 97),
(2, 'Los asesinos de la Luna', 'assets/asesinosdelaluna-poster.jpg', 206),
(3, 'Barbie', 'assets/barbie-poster.jpg', 114),
(4, 'El Asesino', 'assets/elasesino-poster.jpg', 117),
(5, 'Napoleon', 'assets/napoleon-poster.jpg', 158),
(6, 'Oppenheimer', 'assets/oppenhaimer-poster.jpg', 180),
(7, 'La sociedad de la nieve', 'assets/sociedaddelanieve-poster.jpg', 137),
(8, 'Spider-Man: Cruzando el Multiverso', 'assets/spidermanacrossthespiderverse-poster.jpg', 140),
(9, 'Spiderman 2', 'assets/spiderman-poster.jpg', 128),
(10, 'Priscila', 'assets/priscila-poster.jpg', 113);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `email`) VALUES
(1, 'fgdasgda', '123', 'fafas@fafa.com'),
(3, 's0bas', '$2y$10$QMofRQZ38EukFeaPTbiy8ejKsCZJIzJpi9lgKhhyU.ldvdEjYzsKO', 'sebas@hotmail.com'),
(4, 'dani', '$2y$10$SUqb0pCELDMrQMLtopd2TeSt.f1VdX/pDMhZlcyBoldLsMYdlnPQm', 'daniel@hotmail.com'),
(5, 'elsebas', '$2y$10$e42T6Dd53fWetrwD.xA9uu8mhS8osSB/TlTDBnMr40XdOiZ1LY8aq', 'sebastian@gmail.com'),
(7, '4io21jio4j12', '$2y$10$U97dVZCnEs4ZAIsTZ/hLSeczh35CSs5vUeUtKeRUmpDWHVeTNjBNW', 'seb904u12904us@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
