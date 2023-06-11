-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: database:3306
-- Tiempo de generación: 11-06-2023 a las 15:24:27
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
  `wikipedia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `publicado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cientificos`
--

INSERT INTO `cientificos` (`id`, `nombre`, `lugar`, `fecha`, `path_foto1`, `pie_foto1`, `path_foto2`, `pie_foto2`, `descripcion1`, `descripcion2`, `wikipedia`, `publicado`) VALUES
(0, 'Alan Turing', 'Londres', '23/06/1912 - 07/06/1954', 'images/Alan_Turing_1.jpg', 'Alan Turing a los 40 años', 'images/Alan_Turing_2.jpg', 'Alan Turing a los 16 años', 'Alan Mathison Turing (Paddington, Londres; 23 de junio de 1912-Wilmslow, Cheshire; 7 de junio de 1954) fue un matemático, lógico, informático teórico, criptógrafo, filósofo y biólogo teórico británico.\r\n\r\n\r\nEs considerado como uno de los padres de la ciencia de la computación y precursor de la informática moderna. Proporcionó una influyente formalización de los conceptos de algoritmo y computación: la máquina de Turing. Formuló su propia versión que hoy es ampliamente aceptada como la tesis de Church-Turing (1936).\r\n\r\n\r\nDurante la segunda guerra mundial, trabajó en descifrar los códigos nazis, particularmente los de la máquina Enigma, y durante un tiempo fue el director de la sección Naval Enigma de Bletchley Park. Se ha estimado que su trabajo acortó la duración de esa guerra entre dos y cuatro años. Tras la guerra, diseñó uno de los primeros computadores electrónicos programables digitales en el Laboratorio Nacional de Física del Reino Unido y poco tiempo después construyó otra de las primeras máquinas en la Universidad de Mánchester.', 'En el campo de la inteligencia artificial, es conocido sobre todo por la concepción de la prueba de Turing (1950), un criterio según el cual puede juzgarse la inteligencia de una máquina si sus respuestas en la prueba son indistinguibles de las de un ser humano.\r\n\r\n\r\nLa carrera de Turing terminó súbitamente tras ser procesado por homosexualidad en 1952. Dos años después de su condena, murió —según la versión oficial por suicidio; sin embargo, su muerte ha dado lugar a otras hipótesis, incluida la del envenenamiento accidental —. Después de una campaña pública en 2009, el primer ministro británico, Gordon Brown, se disculpó públicamente en nombre del gobierno británico por «la forma espantosa en que Turing había sido tratado». La reina Isabel II le otorgó un indulto póstumo en 2013. El término «ley Alan Turing» ahora se usa de manera informal para referirse a una ley de 2017 en el Reino Unido que perdona retroactivamente a hombres amonestados o condenados en virtud de la legislación que prohibía los actos homosexuales.  \r\n', 'https://es.wikipedia.org/wiki/Alan_Turing', 1),
(1, 'Albert Einstein', 'Ulm (Alemania)', '14/03/1879 - 18/04/1955', 'images/Albert_Einstein_1.jpg', 'Albert Einstein a los 68 años', 'images/Albert_Einstein_2.jpg', 'Albert Einstein a los 25 años', 'Albert Einstein (Ulm, Imperio alemán; 14 de marzo de 1879-Princeton, Estados Unidos; 18 de abril de 1955) fue un físico alemán de origen judío, nacionalizado después suizo, austriaco y estadounidense. Se le considera el científico más importante, conocido y popular del siglo xx.\r\n\r\nEn 1905, cuando era un joven físico desconocido, empleado en la Oficina de Patentes de Berna, publicó su teoría de la relatividad especial. En ella incorporó, en un marco teórico simple fundamentado en postulados físicos sencillos, conceptos y fenómenos estudiados antes por Henri Poincaré y Hendrik Lorentz. Como una consecuencia lógica de esta teoría, dedujo la ecuación de la física más conocida a nivel popular: la equivalencia masa-energía, E=mc². Ese año, publicó otros trabajos que sentarían algunas de las bases de la física estadística y de la mecánica cuántica.', 'En 1915, presentó la teoría de la relatividad general, en la que reformuló por completo el concepto de la gravedad.​ Una de las consecuencias fue el surgimiento del estudio científico del origen y la evolución del universo por la rama de la física denominada cosmología. En 1919, cuando las observaciones británicas de un eclipse solar confirmaron sus predicciones acerca de la curvatura de la luz, fue idolatrado por la prensa.\r\nEinstein se convirtió en un icono popular de la ciencia mundialmente famoso, un privilegio al alcance de muy pocos científicos.', 'https://es.wikipedia.org/wiki/Albert_Einstein', 0),
(2, 'Marie Curie', 'Varsovia', '07/11/1867 - 04/07/1934', 'images/Marie_Curie_1.jpg', 'Marie Curie a los 33 años', 'images/Marie_Curie_2.jpg', 'Marie Curie a los 24 años', 'Marie Curie (Varsovia, 7 de noviembre de 1867-Passy, 4 de julio de 1934), fue una física y química polaca nacionalizada francesa. Pionera en el campo de la radiactividad, es la primera y única persona en recibir dos premios Nobel en distintas especialidades científicas: Física y Química.​ También fue la primera mujer en ocupar el puesto de profesora en la Universidad de París y la primera en recibir sepultura con honores en el Panteón de París por méritos propios en 1995.\r\n\r\nNació en Varsovia, en lo que entonces era el Zarato de Polonia (territorio administrado por el Imperio ruso). Estudió clandestinamente en la «universidad flotante» de Varsovia y comenzó su formación científica en dicha ciudad. En 1891, a los 24 años, siguió a su hermana mayor Bronisława Dłuska a París, donde culminó sus estudios y llevó a cabo sus trabajos científicos más sobresalientes.', 'Compartió el premio Nobel de Física de 1903 con su marido Pierre Curie y el físico Henri Becquerel. Años después, ganó en solitario el premio Nobel de Química de 1911. Aunque recibió la ciudadanía francesa y apoyó a su nueva patria, nunca perdió su identidad polaca: enseñó a sus hijas su lengua materna y las llevaba a sus visitas a Polonia.​ Nombró el primer elemento químico que descubrió, el polonio, como su país de origen.\r\n\r\nSus logros incluyen los primeros estudios sobre el fenómeno de la radiactividad (término que ella misma acuñó),10​11​12​ técnicas para el aislamiento de isótopos radiactivos y el descubrimiento de dos elementos —el polonio y el radio—. Bajo su dirección, se llevaron a cabo los primeros estudios en el tratamiento de neoplasias con isótopos radiactivos. Fundó el Instituto Curie en París y en Varsovia, que se mantienen entre los principales centros de investigación médica en la actualidad. Durante la Primera Guerra Mundial creó los primeros centros radiológicos para uso militar. ', 'https://es.wikipedia.org/wiki/Marie_Curie', 1),
(3, 'Charles Babbage', 'Londres', '26/12/1791 - 18/10/1871', 'images/CharlesBabbage1.jpg', 'Chalre5', 'images/Babbage.jpg', 'Chalres2', 'Charles Babbage fue un matemático y científico de la computación británico.1​ Diseñó y desarrolló una calculadora mecánica capaz de calcular tablas de funciones numéricas por el método de diferencias. También diseñó, (pero nunca construyó), la analítica para ejecutar programas de tabulación o computación; por estos inventos se le considera como una de las primeras personas en concebir la idea de lo que hoy llamaríamos una computadora, por lo que se le considera como \"El padre de los ordenadores\". ', ' En el Museo de Ciencias de Londres se exhiben partes de sus mecanismos inconclusos. Parte de su cerebro conservado en formol se exhibe en el Royal College of Surgeons of England. Sitio en Londres.\r\n', 'https://es.wikipedia.org/wiki/Charles_Babbage', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentario` int NOT NULL,
  `idCientifico` int NOT NULL,
  `nick` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentario`, `idCientifico`, `nick`, `fecha`, `comentario`) VALUES
(2, 0, 'Manolo Garcia', '2023-05-30 10:10:27', 'A tope con el bueno de Turing!'),
(3, 1, 'Joaquin Sabina', '2023-05-30 10:11:36', 'Einstein es de lo bueno lo mejor, de lo mejor lo superior'),
(4, 2, 'Juan Luis Guerra', '2023-05-30 10:15:35', 'Dos nobeles, y pocos son!'),
(9, 0, 'Pepe', '2023-05-30 17:27:35', 'Turing mola un huevo*Mensaje editado por un Moderador*');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nick` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nick`, `email`, `pass`, `tipo`) VALUES
('Pepe', 'pepe@pepe.es', '$2y$10$GXB6P0TQ6bXjmDJ..zwBJ.SvLRXnXG4Mx/h.JRmh2d8KkwffSzF02', 'Superusuario'),
('us1', 'us1', '$2y$10$prnjhxg.uN4GV9fwVH9wFeFFmhymHay45WWmfuvr55PTrJV8vM7b.', 'Registrado'),
('us2', 'us2@us2', '$2y$10$BbtI2Dwzt/tnXGsHYotl1eH.3Prt.JWKG2Wg4m7q5gPMe18lL84nS', 'Moderador'),
('us3', 'us3', '$2y$10$FJQhxdDaEyUecxYpMKME1eLYCnpXb3VCqyZFMh49S0fwNfvQpK4.S', 'Gestor');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
