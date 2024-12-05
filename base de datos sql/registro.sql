-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2024 a las 05:18:09
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
(9, 'fasdfafaf', '$2y$10$rGvGRifvXMcK9C93UtgP8O.5Z0xX2CM1PJCqC47svhNRh/1SbWa4G', 'sfafaf@hotmial.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
