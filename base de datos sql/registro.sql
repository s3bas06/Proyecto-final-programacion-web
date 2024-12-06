-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2024 a las 02:08:34
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
-- Estructura de tabla para la tabla `funciones`
--

CREATE TABLE `funciones` (
  `id_funcion` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `sala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `funciones`
--

INSERT INTO `funciones` (`id_funcion`, `id_pelicula`, `fecha`, `hora`, `sala`) VALUES
(1, 1, '2024-12-06', '10:00:00', 'Sala 1'),
(2, 1, '2024-12-06', '12:30:00', 'Sala 1'),
(3, 1, '2024-12-06', '15:00:00', 'Sala 1'),
(4, 1, '2024-12-06', '17:30:00', 'Sala 1'),
(5, 1, '2024-12-06', '20:00:00', 'Sala 1'),
(6, 1, '2024-12-06', '22:30:00', 'Sala 1'),
(7, 1, '2024-12-06', '00:30:00', 'Sala 1'),
(8, 1, '2024-12-06', '02:30:00', 'Sala 1'),
(9, 1, '2024-12-07', '11:00:00', 'Sala 1'),
(10, 1, '2024-12-07', '12:30:00', 'Sala 1'),
(11, 1, '2024-12-07', '15:00:00', 'Sala 1'),
(12, 1, '2024-12-07', '17:30:00', 'Sala 1'),
(13, 1, '2024-12-07', '20:00:00', 'Sala 1'),
(14, 1, '2024-12-07', '22:30:00', 'Sala 1'),
(15, 1, '2024-12-07', '00:30:00', 'Sala 1'),
(16, 1, '2024-12-07', '02:30:00', 'Sala 1'),
(17, 1, '2024-12-08', '10:00:00', 'Sala 1'),
(18, 1, '2024-12-08', '12:30:00', 'Sala 1'),
(19, 1, '2024-12-08', '15:00:00', 'Sala 1'),
(20, 1, '2024-12-08', '17:30:00', 'Sala 1'),
(21, 1, '2024-12-08', '20:00:00', 'Sala 1'),
(22, 1, '2024-12-08', '22:30:00', 'Sala 1'),
(23, 1, '2024-12-08', '00:30:00', 'Sala 1'),
(24, 1, '2024-12-08', '02:30:00', 'Sala 1'),
(25, 1, '2024-12-09', '10:00:00', 'Sala 1'),
(26, 1, '2024-12-09', '12:30:00', 'Sala 1'),
(27, 1, '2024-12-09', '15:00:00', 'Sala 1'),
(28, 1, '2024-12-09', '17:30:00', 'Sala 1'),
(29, 1, '2024-12-09', '20:00:00', 'Sala 1'),
(30, 1, '2024-12-09', '22:30:00', 'Sala 1'),
(31, 1, '2024-12-09', '00:30:00', 'Sala 1'),
(32, 1, '2024-12-09', '02:30:00', 'Sala 1'),
(33, 2, '2024-12-06', '10:00:00', 'Sala 1'),
(34, 2, '2024-12-06', '12:30:00', 'Sala 1'),
(35, 2, '2024-12-06', '15:00:00', 'Sala 1'),
(36, 2, '2024-12-06', '17:30:00', 'Sala 1'),
(37, 2, '2024-12-06', '20:00:00', 'Sala 1'),
(38, 2, '2024-12-06', '22:30:00', 'Sala 1'),
(39, 2, '2024-12-06', '00:30:00', 'Sala 1'),
(40, 2, '2024-12-06', '02:30:00', 'Sala 1'),
(41, 2, '2024-12-07', '10:00:00', 'Sala 1'),
(42, 2, '2024-12-07', '12:30:00', 'Sala 1'),
(43, 2, '2024-12-07', '15:00:00', 'Sala 1'),
(44, 2, '2024-12-07', '17:30:00', 'Sala 1'),
(45, 2, '2024-12-07', '20:00:00', 'Sala 1'),
(46, 2, '2024-12-07', '22:30:00', 'Sala 1'),
(47, 2, '2024-12-07', '00:30:00', 'Sala 1'),
(48, 2, '2024-12-07', '02:30:00', 'Sala 1'),
(49, 2, '2024-12-08', '10:00:00', 'Sala 1'),
(50, 2, '2024-12-08', '12:30:00', 'Sala 1'),
(51, 2, '2024-12-08', '15:00:00', 'Sala 1'),
(52, 2, '2024-12-08', '17:30:00', 'Sala 1'),
(53, 2, '2024-12-08', '20:00:00', 'Sala 1'),
(54, 2, '2024-12-08', '22:30:00', 'Sala 1'),
(55, 2, '2024-12-08', '00:30:00', 'Sala 1'),
(56, 2, '2024-12-08', '02:30:00', 'Sala 1'),
(57, 2, '2024-12-09', '10:00:00', 'Sala 1'),
(58, 2, '2024-12-09', '12:30:00', 'Sala 1'),
(59, 2, '2024-12-09', '15:00:00', 'Sala 1'),
(60, 2, '2024-12-09', '17:30:00', 'Sala 1'),
(61, 2, '2024-12-09', '20:00:00', 'Sala 1'),
(62, 2, '2024-12-09', '22:30:00', 'Sala 1'),
(63, 2, '2024-12-09', '00:30:00', 'Sala 1'),
(64, 2, '2024-12-09', '02:30:00', 'Sala 1'),
(65, 3, '2024-12-06', '10:00:00', 'Sala 1'),
(66, 3, '2024-12-06', '12:30:00', 'Sala 1'),
(67, 3, '2024-12-06', '15:00:00', 'Sala 1'),
(68, 3, '2024-12-06', '17:30:00', 'Sala 1'),
(69, 3, '2024-12-06', '20:00:00', 'Sala 1'),
(70, 3, '2024-12-06', '22:30:00', 'Sala 1'),
(71, 3, '2024-12-06', '00:30:00', 'Sala 1'),
(72, 3, '2024-12-06', '02:30:00', 'Sala 1'),
(73, 3, '2024-12-07', '10:00:00', 'Sala 1'),
(74, 3, '2024-12-07', '12:30:00', 'Sala 1'),
(75, 3, '2024-12-07', '15:00:00', 'Sala 1'),
(76, 3, '2024-12-07', '17:30:00', 'Sala 1'),
(77, 3, '2024-12-07', '20:00:00', 'Sala 1'),
(78, 3, '2024-12-07', '22:30:00', 'Sala 1'),
(79, 3, '2024-12-07', '00:30:00', 'Sala 1'),
(80, 3, '2024-12-07', '02:30:00', 'Sala 1'),
(81, 3, '2024-12-08', '10:00:00', 'Sala 1'),
(82, 3, '2024-12-08', '12:30:00', 'Sala 1'),
(83, 3, '2024-12-08', '15:00:00', 'Sala 1'),
(84, 3, '2024-12-08', '17:30:00', 'Sala 1'),
(85, 3, '2024-12-08', '20:00:00', 'Sala 1'),
(86, 3, '2024-12-08', '22:30:00', 'Sala 1'),
(87, 3, '2024-12-08', '00:30:00', 'Sala 1'),
(88, 3, '2024-12-08', '02:30:00', 'Sala 1'),
(89, 3, '2024-12-09', '10:00:00', 'Sala 1'),
(90, 3, '2024-12-09', '12:30:00', 'Sala 1'),
(91, 3, '2024-12-09', '15:00:00', 'Sala 1'),
(92, 3, '2024-12-09', '17:30:00', 'Sala 1'),
(93, 3, '2024-12-09', '20:00:00', 'Sala 1'),
(94, 3, '2024-12-09', '22:30:00', 'Sala 1'),
(95, 3, '2024-12-09', '00:30:00', 'Sala 1'),
(96, 3, '2024-12-09', '02:30:00', 'Sala 1'),
(97, 4, '2024-12-06', '10:00:00', 'Sala 1'),
(98, 4, '2024-12-06', '12:30:00', 'Sala 1'),
(99, 4, '2024-12-06', '15:00:00', 'Sala 1'),
(100, 4, '2024-12-06', '17:30:00', 'Sala 1'),
(101, 4, '2024-12-06', '20:00:00', 'Sala 1'),
(102, 4, '2024-12-06', '22:30:00', 'Sala 1'),
(103, 4, '2024-12-06', '00:30:00', 'Sala 1'),
(104, 4, '2024-12-06', '02:30:00', 'Sala 1'),
(105, 4, '2024-12-07', '10:00:00', 'Sala 1'),
(106, 4, '2024-12-07', '12:30:00', 'Sala 1'),
(107, 4, '2024-12-07', '15:00:00', 'Sala 1'),
(108, 4, '2024-12-07', '17:30:00', 'Sala 1'),
(109, 4, '2024-12-07', '20:00:00', 'Sala 1'),
(110, 4, '2024-12-07', '22:30:00', 'Sala 1'),
(111, 4, '2024-12-07', '00:30:00', 'Sala 1'),
(112, 4, '2024-12-07', '02:30:00', 'Sala 1'),
(113, 4, '2024-12-08', '10:00:00', 'Sala 1'),
(114, 4, '2024-12-08', '12:30:00', 'Sala 1'),
(115, 4, '2024-12-08', '15:00:00', 'Sala 1'),
(116, 4, '2024-12-08', '17:30:00', 'Sala 1'),
(117, 4, '2024-12-08', '20:00:00', 'Sala 1'),
(118, 4, '2024-12-08', '22:30:00', 'Sala 1'),
(119, 4, '2024-12-08', '00:30:00', 'Sala 1'),
(120, 4, '2024-12-08', '02:30:00', 'Sala 1'),
(121, 4, '2024-12-09', '10:00:00', 'Sala 1'),
(122, 4, '2024-12-09', '12:30:00', 'Sala 1'),
(123, 4, '2024-12-09', '15:00:00', 'Sala 1'),
(124, 4, '2024-12-09', '17:30:00', 'Sala 1'),
(125, 4, '2024-12-09', '20:00:00', 'Sala 1'),
(126, 4, '2024-12-09', '22:30:00', 'Sala 1'),
(127, 4, '2024-12-09', '00:30:00', 'Sala 1'),
(128, 4, '2024-12-09', '02:30:00', 'Sala 1'),
(129, 5, '2024-12-06', '10:00:00', 'Sala 1'),
(130, 5, '2024-12-06', '12:30:00', 'Sala 1'),
(131, 5, '2024-12-06', '15:00:00', 'Sala 1'),
(132, 5, '2024-12-06', '17:30:00', 'Sala 1'),
(133, 5, '2024-12-06', '20:00:00', 'Sala 1'),
(134, 5, '2024-12-06', '22:30:00', 'Sala 1'),
(135, 5, '2024-12-06', '00:30:00', 'Sala 1'),
(136, 5, '2024-12-06', '02:30:00', 'Sala 1'),
(137, 5, '2024-12-07', '10:00:00', 'Sala 1'),
(138, 5, '2024-12-07', '12:30:00', 'Sala 1'),
(139, 5, '2024-12-07', '15:00:00', 'Sala 1'),
(140, 5, '2024-12-07', '17:30:00', 'Sala 1'),
(141, 5, '2024-12-07', '20:00:00', 'Sala 1'),
(142, 5, '2024-12-07', '22:30:00', 'Sala 1'),
(143, 5, '2024-12-07', '00:30:00', 'Sala 1'),
(144, 5, '2024-12-07', '02:30:00', 'Sala 1'),
(145, 5, '2024-12-08', '10:00:00', 'Sala 1'),
(146, 5, '2024-12-08', '12:30:00', 'Sala 1'),
(147, 5, '2024-12-08', '15:00:00', 'Sala 1'),
(148, 5, '2024-12-08', '17:30:00', 'Sala 1'),
(149, 5, '2024-12-08', '20:00:00', 'Sala 1'),
(150, 5, '2024-12-08', '22:30:00', 'Sala 1'),
(151, 5, '2024-12-08', '00:30:00', 'Sala 1'),
(152, 5, '2024-12-08', '02:30:00', 'Sala 1'),
(153, 5, '2024-12-09', '10:00:00', 'Sala 1'),
(154, 5, '2024-12-09', '12:30:00', 'Sala 1'),
(155, 5, '2024-12-09', '15:00:00', 'Sala 1'),
(156, 5, '2024-12-09', '17:30:00', 'Sala 1'),
(157, 5, '2024-12-09', '20:00:00', 'Sala 1'),
(158, 5, '2024-12-09', '22:30:00', 'Sala 1'),
(159, 5, '2024-12-09', '00:30:00', 'Sala 1'),
(160, 5, '2024-12-09', '02:30:00', 'Sala 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `poster_url` varchar(255) NOT NULL,
  `duracion` int(11) DEFAULT NULL,
  `sinopsis` text NOT NULL,
  `clasificacion` varchar(10) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `poster_url`, `duracion`, `sinopsis`, `clasificacion`, `genero`) VALUES
(1, 'Angry Birds', 'assets/angrybirds-poster.jpg', 97, 'En una isla paradisiaca habitada por aves que no pueden volar, Red, un pájaro con problemas de ira, Chuck, un velocísimo canario, y Bomb, un ave explosiva, deben unirse para enfrentarse a una amenaza inesperada: los cerdos verdes. Cuando estos últimos llegan a la isla con intenciones aparentemente pacíficas pero roban los huevos de las aves, los protagonistas se embarcan en una misión para recuperarlos y salvar a su comunidad.', 'PG', 'Animación, Comedia, Aventura'),
(2, 'Los asesinos de la Luna', 'assets/asesinosdelaluna-poster.jpg', 206, 'Ambientada en la década de 1920 en Oklahoma, esta película cuenta la tragedia real de los asesinatos sistemáticos de los miembros de la rica tribu Osage, quienes habían adquirido grandes fortunas gracias al petróleo encontrado en sus tierras. A medida que el FBI investiga los crímenes, se destapa una conspiración de codicia, traición y racismo que marcó una era en la historia de Estados Unidos.', 'R', 'Drama, Crimen, Histórico'),
(3, 'Barbie', 'assets/barbie-poster.jpg', 114, 'Barbie, una muñeca perfecta que vive en un mundo rosa de fantasía llamado Barbieland, empieza a cuestionar su existencia cuando se enfrenta a preguntas sobre su propósito y el significado de la perfección. Junto a Ken, decide aventurarse al mundo real, donde descubre los desafíos de ser humana, la belleza de la imperfección y el poder de abrazar su propia identidad en un mundo que espera que todo sea ideal.', 'PG-13', 'Comedia, Fantasía'),
(4, 'El Asesino', 'assets/elasesino-poster.jpg', 117, 'Un asesino profesional meticuloso y solitario se enfrenta a una crisis personal y profesional tras un error crítico durante una misión. Mientras intenta mantenerse un paso adelante de aquellos que lo persiguen, reflexiona sobre la moralidad de su trabajo y los principios que alguna vez lo guiaron. En un mundo de traiciones y peligros constantes, el asesino debe decidir qué está dispuesto a sacrificar para sobrevivir.', 'R', 'Suspenso, Acción'),
(5, 'Napoleon', 'assets/napoleon-poster.jpg', 158, 'La épica biografía de Napoleón Bonaparte retrata su meteórico ascenso desde sus humildes orígenes en Córcega hasta convertirse en el emperador más poderoso de Europa. La película explora sus innovadoras tácticas militares, su ambición desmedida y su tumultuosa relación con Joséphine, la mujer que marcó su vida. A través de batallas icónicas y decisiones políticas cruciales, se revela un retrato íntimo de uno de los líderes más complejos de la historia.', 'R', 'Drama, Histórico, Bélico'),
(6, 'Oppenheimer', 'assets/oppenhaimer-poster.jpg', 180, 'Este drama histórico narra la vida de J. Robert Oppenheimer, el brillante físico estadounidense que lideró el Proyecto Manhattan para desarrollar la primera bomba atómica durante la Segunda Guerra Mundial. La película explora sus dilemas éticos, su lucha con el poder destructivo de su creación y el impacto profundo que tuvo en su vida personal, mientras el mundo se enfrenta a las consecuencias de un avance científico devastador.', 'R', 'Drama, Biografía, Histórico'),
(7, 'La sociedad de la nieve', 'assets/sociedaddelanieve-poster.jpg', 137, 'Inspirada en la historia real del accidente aéreo del vuelo 571 de la Fuerza Aérea Uruguaya en los Andes en 1972, esta película sigue a un grupo de sobrevivientes que deben enfrentar condiciones extremas para mantenerse con vida. A medida que pasan los días y las esperanzas de rescate se desvanecen, los sobrevivientes se ven obligados a tomar decisiones inimaginables que desafían su moralidad y revelan la fortaleza del espíritu humano.', 'R', 'Drama, Supervivencia, Histórico'),
(8, 'Spider-Man: Cruzando el Multiverso', 'assets/spidermanacrossthespiderverse-poster.jpg', 140, 'Miles Morales regresa en esta impactante secuela animada, donde descubre un multiverso lleno de versiones alternas de Spider-Man. Al embarcarse en una nueva aventura, Miles debe enfrentar un poderoso enemigo mientras lidia con las complejidades de sus relaciones personales. Con una animación innovadora y un guion profundamente emotivo, la película explora temas de identidad, responsabilidad y el significado de ser un héroe.', 'PG', 'Animación, Acción, Ciencia Ficción'),
(9, 'Spiderman 2', 'assets/spiderman-poster.jpg', 128, 'Peter Parker intenta equilibrar su vida como estudiante universitario, su relación con Mary Jane y su trabajo como Spider-Man. Pero todo se complica cuando enfrenta a un nuevo y poderoso enemigo, el Doctor Octopus, un científico brillante que pierde el control tras un accidente en su laboratorio. La película ahonda en los sacrificios que Peter debe hacer para ser el héroe que la ciudad necesita, mientras lucha con su deseo de una vida normal.', 'PG-13', 'Acción, Aventura, Superhéroes'),
(10, 'Priscila', 'assets/priscila-poster.jpg', 113, 'Este drama biográfico ofrece una mirada íntima a la vida de Priscilla Presley, desde su infancia hasta su turbulenta relación con Elvis Presley. La película detalla cómo Priscilla lidió con la fama, las presiones sociales y los desafíos emocionales de estar casada con una de las mayores estrellas del siglo XX. A través de su viaje, se revela la fortaleza y la lucha de una mujer que buscó su propia identidad mientras vivía a la sombra de un ícono.', 'PG-13', 'Drama, Biografía, Romance');

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
(7, '4io21jio4j12', '$2y$10$U97dVZCnEs4ZAIsTZ/hLSeczh35CSs5vUeUtKeRUmpDWHVeTNjBNW', 'seb904u12904us@hotmail.com'),
(8, 'sebastianorantes', '$2y$10$49bPfQ4rK/MSUqUTibaneuE.EsgZzJ4FfHT37J0BFpQOVZKkhlpci', 'sebastianoa11@hotmail.com'),
(9, 'fasdfafaf', '$2y$10$rGvGRifvXMcK9C93UtgP8O.5Z0xX2CM1PJCqC47svhNRh/1SbWa4G', 'sfafaf@hotmial.com'),
(10, 'rqrqrrqrqrq', '$2y$10$cTPI2VP9wZLOY0Vy4HUaNuxHKAy4Yj5BcVPDatg2R8W9uJBP1bLhq', 'da767676niel@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD PRIMARY KEY (`id_funcion`),
  ADD KEY `id_pelicula` (`id_pelicula`);

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
-- AUTO_INCREMENT de la tabla `funciones`
--
ALTER TABLE `funciones`
  MODIFY `id_funcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD CONSTRAINT `funciones_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
