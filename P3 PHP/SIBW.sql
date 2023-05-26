-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: database:3306
-- Tiempo de generación: 02-05-2023 a las 10:33:22
-- Versión del servidor: 8.0.33
-- Versión de PHP: 8.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SIBW`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baneadas`
--

CREATE TABLE `baneadas` (
  `id` int NOT NULL,
  `palabra` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `baneadas`
--

INSERT INTO `baneadas` (`id`, `palabra`) VALUES
(1, 'baneada'),
(2, 'puta'),
(3, 'mierda'),
(4, 'caca'),
(5, 'corcholis'),
(6, 'palabrota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cientificos`
--

CREATE TABLE `cientificos` (
  `id` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `lugar` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fecha` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `path_foto1` varchar(30) NOT NULL,
  `pie_foto1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `path_foto2` varchar(30) NOT NULL,
  `pie_foto2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripcion1` varchar(1200) NOT NULL,
  `descripcion2` varchar(1200) NOT NULL,
  `wikipedia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cientificos`
--

INSERT INTO `cientificos` (`id`, `nombre`, `lugar`, `fecha`, `path_foto1`, `pie_foto1`, `path_foto2`, `pie_foto2`, `descripcion1`, `descripcion2`, `wikipedia`) VALUES
(0, 'Alan Turing', 'Londres', '23/06/1912 - 07/06/1954', 'images/Alan_Turing_1.jpg', 'Alan Turing a los 40 años', 'images/Alan_Turing_2.jpg', 'Alan Turing a los 16 años', 'Alan Mathison Turing (Paddington, Londres; 23 de junio de 1912-Wilmslow, Cheshire; 7 de junio de 1954) fue un matemático, lógico, informático teórico, criptógrafo, filósofo y biólogo teórico británico.\r\n\r\n\r\nEs considerado como uno de los padres de la ciencia de la computación y precursor de la informática moderna. Proporcionó una influyente formalización de los conceptos de algoritmo y computación: la máquina de Turing. Formuló su propia versión que hoy es ampliamente aceptada como la tesis de Church-Turing (1936).\r\n\r\n\r\nDurante la segunda guerra mundial, trabajó en descifrar los códigos nazis, particularmente los de la máquina Enigma, y durante un tiempo fue el director de la sección Naval Enigma de Bletchley Park. Se ha estimado que su trabajo acortó la duración de esa guerra entre dos y cuatro años. Tras la guerra, diseñó uno de los primeros computadores electrónicos programables digitales en el Laboratorio Nacional de Física del Reino Unido y poco tiempo después construyó otra de las primeras máquinas en la Universidad de Mánchester.', 'En el campo de la inteligencia artificial, es conocido sobre todo por la concepción de la prueba de Turing (1950), un criterio según el cual puede juzgarse la inteligencia de una máquina si sus respuestas en la prueba son indistinguibles de las de un ser humano.\r\n\r\n\r\nLa carrera de Turing terminó súbitamente tras ser procesado por homosexualidad en 1952. Dos años después de su condena, murió —según la versión oficial por suicidio; sin embargo, su muerte ha dado lugar a otras hipótesis, incluida la del envenenamiento accidental —. Después de una campaña pública en 2009, el primer ministro británico, Gordon Brown, se disculpó públicamente en nombre del gobierno británico por «la forma espantosa en que Turing había sido tratado». La reina Isabel II le otorgó un indulto póstumo en 2013. El término «ley Alan Turing» ahora se usa de manera informal para referirse a una ley de 2017 en el Reino Unido que perdona retroactivamente a hombres amonestados o condenados en virtud de la legislación que prohibía los actos homosexuales.  \r\n', 'https://es.wikipedia.org/wiki/Alan_Turing'),
(1, 'Albert Einstein', 'Ulm (Alemania)', '14/03/1879 - 18/04/1955', 'images/Albert_Einstein_1.jpg', '', '', '', '', '', ''),
(2, 'Marie Curie', 'Varsovia', '07/11/1867 - 04/07/1934', 'images/Marie_Curie_1.jpg', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idCientifico` int NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `fecha` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idCientifico`, `nombre`, `email`, `fecha`, `comentario`) VALUES
(1, 'Joaquin Sabina', 'joaquin@sabina.es', '4 de abril de 2023, 13:12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam erat metus, pellentesque non libero ac, aliquam auctor odio. Pellentesque eu efficitur est. Donec facilisis tellus ac tellus fermentum, tempor tempor nulla posuere. Duis a arcu non orci suscipit eleifend. Maecenas malesuada sem et leo iaculis dapibus. Duis arcu erat, tempor vitae fermentum ac, convallis vel mauris.'),
(1, 'Manolo Garcia', 'manolo@garcia.es', '28 de marzo de 2023, 15:25', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam erat metus, pellentesque non libero ac, aliquam auctor odio. Pellentesque eu efficitur est. Donec facilisis tellus ac tellus fermentum, tempor tempor nulla posuere. Duis a arcu non orci suscipit eleifend. Maecenas malesuada sem et leo iaculis dapibus. Duis arcu erat, tempor vitae fermentum ac, convallis vel mauris.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `baneadas`
--
ALTER TABLE `baneadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cientificos`
--
ALTER TABLE `cientificos`
  ADD PRIMARY KEY (`nombre`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD UNIQUE KEY `nombre` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
