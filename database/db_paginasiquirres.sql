-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2025 a las 22:40:03
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
-- Base de datos: `db_paginasiquirres`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE `administrativos` (
  `id_administrativo` int(10) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `puesto` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `administrativos`
--

INSERT INTO `administrativos` (`id_administrativo`, `nombre`, `puesto`, `descripcion`, `imagen`) VALUES
(4, 'Brendan', 'Estudiante', 'Estudiantes realiza el mejor proyecto universitarios', 'assets/img/1.jpg'),
(5, 'Brendan', 'Estudiante', 'El mas crack', 'assets/img/fondo 1.jfif'),
(6, 'Brendan', 'Estudiante', 'as', 'assets/img/fondo2.jfif'),
(7, 'Brendan', 'Estudiante', 'mmxkxk', 'assets/img/Nueva.jpeg'),
(8, 'Brendan', 'dfdf', 'kkk', 'assets/img/fondo4.jfif'),
(11, 'Brendan', 'jsjd', 'ndsn', 'assets/img/R.jpeg'),
(12, 'Brendan', 'jsjd', 'nn', 'assets/img/R (1).jpeg'),
(13, 'm', 'csd', 'dsd', 'assets/img/1.jpg'),
(14, 'm', 'csd', 'mm', NULL),
(15, 'm', 'csd', 'bb', NULL),
(16, 'm', 'csd', 'bbb', NULL),
(17, 'm', 'csd', 'bgbg', NULL),
(25, 'ldwsld', 'ds.d.s', ',c,ds', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `id_config` int(11) NOT NULL,
  `id_pagina` int(11) DEFAULT NULL,
  `imagen` varchar(300) DEFAULT NULL,
  `titulo1` varchar(70) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`id_config`, `id_pagina`, `imagen`, `titulo1`, `descripcion`, `url`) VALUES
(1, 2, 'assets/img/Becas.PNG', 'Página de Becas', 'En esta página puedes conocer todo con respecto a las becas que ofrece la UCR, descargar los documentos para realizar la solicitud, hacer consultas, entre otro tipo de servicios.', 'https://becas.ucr.ac.cr/'),
(2, 2, 'assets/img/Vicer.PNG', 'Vicerrectoría Estudiantil:', 'La Universidad de Costa Rica creó una instancia con estatus de Vicerrectoría, dedicada a atender integralmente a la población estudiantil y a contribuir con el bienestar de toda la comunidad universitaria.', 'https://www.ucr.ac.cr/organizacion/vicerrectorias/vida-estudiantil/'),
(3, 2, 'assets/img/Registro.PNG', 'Oficina de Registro:', 'Es la que se encarga de todo el proceso de admisión de la universidad, publicaciones de matrículas y guías de horarios de todas las sedes y recintos de la universidad y maneja toda la información de los estudiantes.', 'https://ori.ucr.ac.cr/'),
(4, 2, 'assets/img/Finanzas.PNG', 'Administración financiera:', 'La OAF se encarga de toda la gestión económica de la universidad de Costa Rica. Asigna los presupuestos, lleva la ejecución de los cobros y se encarga de los depósitos de los becarios, profesores y administrativos.', 'https://oaf.ucr.ac.cr/'),
(5, 2, 'assets/img/Radio.PNG', 'Radio UCR:', 'En este espacio en algunas horas del día la universidad de Costa Rica brinda información en su gran mayoría de las diversas actividades que se realiza en la sede central (Facio)y de los temas actuales de mayor interés en el país.', 'https://radios.ucr.ac.cr/'),
(6, 2, 'assets/img/Canal.PNG', 'Canal 15 UCR:', 'En es el canal de televisión oficial que tiene la universidad de Costa Rica donde brinda información relacionada a su entorno. \n Además, brinda programas televisivos a cargo de las carreras relacionadas con comunicación', 'http://www.quince.ucr.ac.cr/'),
(8, 7, 'assets/img/Canal.PNG', 'Feria Vocacional', 'La Feria Vocacional es una actividad que apoya a los y las jóvenes en su proceso de elección de carrera y se constituye como un efectivo mecanismo de proyección de la Universidad de Costa Rica a la comunidad nacional. Tiene como objetivo esencial informar a los y las estudiantes acerca de las opciones de estudio que ofrece la Universidad de Costa Rica, en temas como: habilidades y características personales, perfil profesional, mercado laboral, proyección de la carrera, posgrados y plan de estudio entre otros.', 'https://feriavocacional.ucr.ac.cr/'),
(9, 7, 'assets/img/Registro.PNG', 'Semana de Bienvenida', 'La Universidad de Costa Rica en todas sus Sedes y Recintos, siempre se lleva a cabo la semana de bienvenida, lo que implica un periodo para actividades de reconocimiento de los espacios universitarios, conocimiento entre las diferentes generaciones de estudiantes e involucrar a la nueva población estudiantil en la vida normal del campus.', NULL),
(10, 7, 'assets/img/Canal.PNG', 'Semana Universitaria', 'Esta particular celebración se ha mantenido a lo largo de seis décadas, y fue convirtiéndose con el paso de los años, en una de las tradiciones más \n significativas de la comunidad universitaria. Pero más allá de ser sólo una celebración llena de música, arte y alegría, la “Semana U” como muchos la llaman encierra en su razón de ser la remembranza de las luchas históricas que ha emprendido el Movimiento Estudiantil. Aunque algunos estudiantes consideran que la tradición surgió, luego de la lucha estudiantil en contra la concesión dada a la Aluminum Company of America (ALCOA) en los años 70`s, en realidad el origen de\n la Semana Universitaria se dio a causa de la Guerra Civil de 1948.', NULL),
(11, 8, 'assets/img/educCon2.png', 'Educación Continua', 'Ofrece capacitación a la comunidad por medio de cursos de aprovechamiento. Cuya finalidad es adquirir mayores conocimientos para mejorar el desempeño ante sociedad cambiante. Descripción: \"Son cursos libres para todo público mayor de 15 años.\" \"Algunos se dividen en módulos.\" Enfocados en el mercado actual. \nAl finalizar el curso exitosamente, se obtendrá un certificado de la UCR con su nota y sus horas establecidas.', '...'),
(12, 8, 'assets/img/programacion1.png', 'Programación', 'Los estudiantes realizan multiples proyectos programados para los cursos, no solo para pasar los cursos, sino para demostrar los conocimientos que se va \n adquiriendo en cada uno de los cursos, demostrando que poco a poco van aprendiendo y creado proyectos que antes eran poco imaginados.', '...'),
(13, 8, 'assets/img/realidadAumentada.png', 'Realidad Aumentada', 'La realidad aumentada es el término que se usa para definir la visión de un entorno físico del mundo real, a través de un dispositivo tecnológico.\n Este dispositivo o conjunto de dispositivos añaden información virtual a la información física ya existente; es decir, una parte sintética virtual a la real.\n De esta manera; los elementos físicos tangibles se combinan con elementos virtuales, creando así una realidad aumentada en tiempo real.', '...'),
(14, 8, 'assets/img/robotica.png', 'Robótica', 'La Robótica es una ciencia o rama de la tecnología, que estudia el diseño y construcción de máquinas capaces de desempeñar tareas que el ser humano\r\n requiere que haga, esto gracias al uso de del uso de inteligencia. Las ciencias y tecnologías de las que deriva podrían ser: el álgebra, la mecánica y la informática.', '...'),
(15, 3, NULL, 'Estudiantes', '1000', 'bi bi-people'),
(16, 3, NULL, 'Porcentaje de Becados', '95', 'bi bi-percent'),
(17, 3, NULL, 'Horas TCU realizadas', '25900', 'bi bi-clock'),
(18, 3, NULL, 'Graduados', '27', 'bi bi-mortarboard'),
(19, 4, '1745521567.jpg', 'Brendan Crack', '<p>Las mejores cuentas de gamer y streaming</p>', NULL),
(23, 2, 'assets/img/solo.jpg', 'Keyla', 'ds', 'keyla.com'),
(24, 2, 'assets/img/solo-leveling-vx.jpg', 'TCU 2025', 'Lorem ipsun', 'onepiece.com'),
(32, 7, 'assets/img/Fondo2.jpeg', 'cd', 'ds', 'ds'),
(33, 2, 'assets/img/Fondo2.jpeg', 'Brendan', 'msm', 'keyla.com'),
(74, 3, NULL, 'Juegosos', '2025', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `titulo` varchar(60) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `numero` varchar(150) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `tipo`, `nombre`, `titulo`, `correo`, `numero`, `url`) VALUES
(1, 'telefono', 'Walter Felipe Jenkins Cruz', 'Coordinador del Recinto', 'walter.jenkins@ucr.ac.cr', '2511-7397 2511-7399', ''),
(2, 'telefono', 'Jhendry Chaves Campos', 'Asistente de coordinación', 'jhendry.chavescampos@ucr.ac.cr', '2511-7399', ''),
(3, 'telefono', 'Liliana Jirón Guitiérrez', 'Oficina de Cursos Cortos', 'cursoscortos.sedecaribe@ucr.ac.cr', '2511-7330', ''),
(4, 'telefono', 'Marisol Coto Molina', 'Gestión de Proyectos TCU', 'tcu518.ucr@gmail.com', '2511-7398', ''),
(5, 'telefono', 'AERSI', 'Asociación del Recinto de Siquirres', 'aersiucr@ugmail.com', '2511-7320', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `id_estadisticas` int(10) NOT NULL,
  `cantidadEstudiantes` int(10) DEFAULT NULL,
  `becados` int(10) DEFAULT NULL,
  `horasTCU` int(20) DEFAULT NULL,
  `año` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL,
  `id_pagina` int(11) DEFAULT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `id_pagina`, `titulo`, `descripcion`, `url`) VALUES
(1, 6, '', '', 'assets/img/carrera1.jpeg'),
(2, 6, '', '', 'assets/img/carrera2.jpeg'),
(3, 6, '', '', 'assets/img/carrera3.jpeg'),
(4, 6, '', '', 'assets/img/carrera4.jpeg'),
(5, 7, 'Semana Universitaria', '', 'assets/img/semanaU1.jpeg'),
(6, 7, 'Semana Universitaria', '', 'assets/img/semanaU2.jpeg'),
(7, 7, 'Semana Universitaria', '', 'assets/img/semanaU3.jpeg'),
(8, 7, 'Semana de Bienvenida', '', 'assets/img/semanaU4.jpeg'),
(9, 7, 'Semana de Bienvenida', '', 'assets/img/semanaU5.jpeg'),
(10, 7, 'semanaU', '', 'assets/img/semanaU6.jpeg'),
(11, 7, 'semanaU', '', 'assets/img/semanaU7.jpeg'),
(12, 7, 'semanaU', '', 'assets/img/semanaU8.jpeg'),
(13, 7, 'semanaU', '', 'assets/img/semanaU9.jpeg'),
(14, 7, 'semanaU', '', 'assets/img/semanaU10.jpeg'),
(15, 7, 'semanaU', '', 'assets/img/semanaU11.jpeg'),
(16, 8, 'Educación Continua', '', 'assets/img/educCon1.png'),
(17, 8, 'Educación Continua', '', 'assets/img/educCon2.png'),
(18, 8, 'Programación', '', 'assets/img/programacion1.png'),
(19, 8, 'Programación', '', 'assets/img/programacion2.png'),
(20, 8, 'Programación', '', 'assets/img/programacion3.png'),
(21, 8, 'Programación', '', 'assets/img/programacion4.png'),
(22, 8, 'Realidad Aumentada', '', 'assets/img/realidadAumen1.png'),
(23, 8, 'Realidad Aumentada', '', 'assets/img/realidadAumen2.png'),
(24, 8, 'Robótica', '', 'assets/img/robotica1.png'),
(25, 8, 'Robótica', '', 'assets/img/robotica2.png'),
(26, 8, 'Robótica', '', 'assets/img/robotica3.png'),
(27, 8, 'Robótica', '', 'assets/img/robotica4.png'),
(28, 8, 'robotica', '', 'assets/img/robotica5.png'),
(29, 8, 'robotica', '', 'assets/img/robotica6.png'),
(30, 8, 'robotica', '', 'assets/img/robotica7.png'),
(31, 9, 'Generación 2017', 'Coordinador de la Carrera de Informática Empresarial del Recinto de Siquirres y algunos profesores con los graduados.', 'assets/img/0gen2016.png'),
(42, 9, 'Generación 2017', 'Coordinador de la Carrera de Informática Empresarial del Recinto de Siquirres con los graduados.', 'assets/img/0gen2017.png'),
(46, 9, 'Generación 2018', 'Estudiantes de la generación 2018 orgullosos con su título.', 'assets/img/0gen2018.png'),
(51, NULL, 'identificador', NULL, 'assets/img/logoUCR.png'),
(52, NULL, 'identificador', NULL, 'assets/img/logoUCRSiquirres.png'),
(53, 9, 'Generación 2017', '<p>Pamela Briones Salas<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/1gen2016.png'),
(54, 9, 'Generación 2017', '<p>Oscar Mario Burgos Gonzalez<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/8gen2016.png'),
(55, 9, 'Generación 2017', '<p>Daniel Alberto Cespesdes Gomez<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/2gen2016.png'),
(56, 9, 'Generación 2017', '<p>Manuel Javier Chavarria Saenz<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/7gen2016.png'),
(57, 9, 'Generación 2017', '<p>Eli Gabriel Cordero Fonseca<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/10gen2016.png'),
(58, 9, 'Generación 2017', '<p>Jorge Eduardo Lopez Espino<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/5gen2016.png'),
(59, 9, 'Generación 2017', '<p>Neifren Edier Murillo Quesada<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/4gen2016.png'),
(60, 9, 'Generación 2017', '<p>Greivin Miguel Sandi Miranda<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/6gen2016.png'),
(61, 9, 'Generación 2017', '<p>Liliana Raquel Toruño Cordero<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(62, 9, 'Generación 2017', '<p>Giancarlos Zuñiga Garcia<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/9gen2016.png'),
(63, 9, 'Generación 2018', '<p>Gerson Andres Araya Navarro<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(64, 9, 'Generación 2018', '<p>Anyerlin Yuleidi Chavarria Blackwood<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/2gen2017.png'),
(65, 9, 'Generación 2018', '<p>Alexandra Priscila Granados Salas<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/3gen2017.png'),
(66, 9, 'Generación 2019', '<p>Cesar Antonio Martinez Nash<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(67, 9, 'Generación 2019', '<p>Luis Diego Martinez Rojas<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/4gen2018.png'),
(68, 9, 'Generación 2019', '<p>Joel Esnider Moya Marin<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(69, 9, 'Generación 2019', '<p>David Jose Salazar Villalobos<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(70, 9, 'Generación 2020', '<p>Karol Chacon Vargas<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(71, 9, 'Generación 2020', '<p>Marcela Gonzalez Zuñiga<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(72, 9, 'Generación 2020', '<p>Jeremy Armando Jimenez Padilla<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(73, 9, 'Generación 2020', '<p>Yerlin Maria Leon Umaña<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(74, 9, 'Generación 2020', '<p>Alexandra Maria Matarrita Fallas<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(75, 9, 'Generación 2020', '<p>Anyelka Paniagua Moya<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(76, 9, 'Generación 2020', '<p>Kevin Andres Piñar Brenes<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(77, 9, 'Generación 2020', '<p>Cristopher Eliecer Quiros Lopez<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(78, 9, 'Generación 2020', '<p>Jose Andrey Seas Potoy<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(79, 9, 'Generación 2020', '<p>Walter Fernando Segura Mata<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(80, 9, 'Generación 2020', '<p>Johan David Soto Rojas<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(81, 9, 'Generación 2020', '<p>Stephannie Maria Villalobos Oviedo<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(82, 9, 'Generación 2020', '<p>Stephannie Zuñiga Quiros<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(83, 9, 'Generación 2021', '<p>Yurguen Araya Gonzalez<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(84, 9, 'Generación 2021', '<p>Genderson Wainer Barboza Granados<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(85, 9, 'Generación 2021', '<p>Kevin Alberto Castro Madrigal<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(86, 9, 'Generación 2021', '<p>Miguel Alejandro Gonzalez Solano<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(87, 9, 'Generación 2021', '<p>Kendrick Alberto Jenkins Bond<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(88, 9, 'Generación 2021', '<p>Reymer Yariel Mendez Pennycott<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(89, 9, 'Generación 2021', '<p>Jennifer Tatiana Mendeoza Rodriguez<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(90, 9, 'Generación 2021', '<p>Pedro Santiago Zuñiga Guzman<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(91, 9, 'Generación 2021', '<p>Andrea Alfaro Cedeño<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(92, 9, 'Generación 2021', '<p>Melanie Pamela Sojo Umaña<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(93, 9, 'Generación 2021', '<p>Richard Alexander Layne Brown<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(94, 9, 'Generación 2022', '<p>Keneth Eduardo Aguilar Najera<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(95, 9, 'Generación 2022', '<p>Lester Barahona Aguirre<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(96, 9, 'Generación 2022', '<p>Justin Eliecer Calderon Villegas<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(97, 9, 'Generación 2022', '<p>Carolay Dayana Esquivel Gonzalez<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(98, 9, 'Generación 2022', '<p>Jesus Alberto Fonseca Pereira<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(99, 9, 'Generación 2022', '<p>Jansey Garita Amador<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(100, 9, 'Generación 2022', '<p>Ingrid Mayela Marenco Hernandez<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(101, 9, 'Generación 2022', '<p>Keilor Steven Rodriguez Artavia<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(102, 9, 'Generación 2022', '<p>Yazlin Sojo Umaña<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(103, 9, 'Generación 2022', '<p>Jesus Manuel Villalobos Oviedo<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(104, 9, 'Generación 2022', '<p>Isaac Villalta Olivas<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(105, 9, 'Generación 2023', '<p>Daniel Rolando Ballestero Ureña<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(106, 9, 'Generación 2023', '<p>Antony Gener Barboza Pereira<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(107, 9, 'Generación 2023', '<p>Lissette Fabiana Contreras Mora<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(108, 9, 'Generación 2023', '<p>Kevin Jesus Diaz Vargas<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(109, 9, 'Generación 2023', '<p>Armando Josue Madriz Sibaja<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(110, 9, 'Generación 2023', '<p>Wendy Sofia Matinez Madrigal<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(111, 9, 'Generación 2023', '<p>Deykel Gabriel Mendez Solis<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(112, 9, 'Generación 2023', '<p>Sergio Andrey Morales Vargas<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(113, 9, 'Generación 2023', '<p>Leonardo Martin Navarro Obando<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(114, 9, 'Generación 2023', '<p>Angie Rossini Quiros Sarmiento<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(115, 9, 'Generación 2023', '<p>Gerald Francisco Ramirez Palacios<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(116, 9, 'Generación 2023', '<p>Jessy Yirov Roblero Obando<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(117, 9, 'Generación 2023', '<p>Yansineth Vargas Bustos<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(118, 9, 'Generación 2024', '<p>Yansineth Vargas Bustos<br>Inform&aacute;tica Empresarial.&nbsp;</p>', 'assets/img/Titulo.jpg'),
(119, 4, 'Brendan Crack', '1745521567_fondo 1.jfif', NULL),
(120, 4, 'Brendan Crack', '1745521567_fondo2.jfif', NULL),
(126, 9, 'Generación 2025', 'sa', 'assets/img/1.jpg'),
(128, 9, 'Generación 2018', 'ds', 'assets/img/fondo 1.jfif'),
(130, 9, 'Generación 2019', 'ew', 'assets/img/Fondo2.jpeg'),
(131, 9, 'Generación 2022', 'rdtxd', 'assets/img/Nueva.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE `paginas` (
  `id_pagina` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `feacture` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`id_pagina`, `titulo`, `feacture`, `descripcion`, `id_padre`) VALUES
(1, 'Inicio', '', 'Pagina Inicial', 0),
(2, 'Páginas Importantes', '', 'Somos el Recinto de Siquirres de la Universidad de Costa Rica ubicados en Siquirres, a un costado del mercado y a un lado de la plaza Sikiares.\r\nAquí podrás encontrar información relacionada con cursos, actividades, noticias, además de opciones de ir \r\na los órganos más importantes por el cual está conformada la universidad como los siguientes:', 1),
(3, 'Nosotros', '', 'Información del Recinto', 0),
(4, 'Brendan', 'assets/img/UCR.PNG', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat consectetur tincidunt. Donec nulla felis, varius ac accumsan at, sollicitudin eu libero. Curabitur sed ligula nec odio porta euismod. Pellentesque arcu sapien, iaculis at ultrices vitae, porttitor eget neque. Phasellus lobortis imperdiet lorem sed vulputate. Duis elementum fermentum neque sed ornare.', 3),
(5, 'Asociación de Estudiantes del Recinto de Siquirres (AERSI)', 'assets/img/Aso.PNG', 'La AERSI es la instancia estudiantil que comprende a los estudiantes del Recinto de Siquirres, la cual tiene como fin representar al estudiante sin distingo de sexo, etnia, religión o clase social para impulsar el bienestar integral y social de la comunidad estudiantil.\r\nAsí mismo, contribuimos en el desarrollo de la cultura y deporte e impulsamos el estudio de las carreras del Recinto propugnando que sea un instrumento activo en el cambio social.', 3),
(6, 'Carrera: Informática Empresarial', 'assets/img/Carrera.png', '<p>La carrera de Inform&aacute;tica Empresarial forma profesionales con capacidades para el desarrollo y la administraci&oacute;n de proyectos inform&aacute;ticos pendientes a organizar sistemas, recursos y finanzas de la empresa, optimizando el acceso, la sistematizaci&oacute;n y la organizaci&oacute;n de la informaci&oacute;n.</p>\r\n<p>HABILIDADES Y CARACTERESTICAS DESEABLES<br>&bull; Facilidad para el trabajo con material cuantitativo, en especial para el razonamiento l&oacute;gico matem&aacute;tico.<br>&bull; Inter&eacute;s por los continuos cambios en las tecnolog&iacute;as de la informaci&oacute;n.<br>&bull; Facilidad para comunicar a otra informaci&oacute;n t&eacute;cnica.<br>&bull; Seguro de s&iacute; mismo, con iniciativa y dispuesto a tomar decisiones ante los retos que se le presenten.<br>&bull; Disposici&oacute;n para el trabajo en grupo y cualidades de liderazgo que permitan crear un ambiente adecuado para el logro de las metas propuestas.<br>&bull; Inter&eacute;s por comprender las diversas labores que se realizan en las empresas: direcci&oacute;n, producci&oacute;n, finanzas, mercadeo, etc.<br>&bull; Sensibilidad social y facilidad para la comunicaci&oacute;n oral y escrita.</p>\r\n<p>TAREAS TIPICAS DEL ESTUDIANTE DURANTE LA CARRERA<br>&bull; Adquisici&oacute;n de conocimientos para el an&aacute;lisis cuantitativo en &aacute;reas como: c&aacute;lculo, &aacute;lgebra, estructuras discretas, an&aacute;lisis num&eacute;rico, investigaci&oacute;n de operaciones, probabilidad, estad&iacute;stica, econom&iacute;a y finanzas.<br>&bull; Desarrollo de sistemas de informaci&oacute;n, trabajando en todas las etapas del proceso: planificaci&oacute;n, dise&ntilde;o, programaci&oacute;n y pruebas.<br>&bull; An&aacute;lisis de modelos inform&aacute;ticos aplicables a las actividades de las empresas.<br>&bull; Pr&aacute;cticas de administraci&oacute;n de los recursos inform&aacute;ticos: sistemas operativos, redes, bases de datos, usuarios, desarrolladores, otros.<br>&bull; Participaci&oacute;n en trabajos de investigaci&oacute;n, pr&aacute;cticas en empresas y trabajo comunal universitario.</p>\r\n<p>MERCADO LABORAL<br>Los graduados de esta carrera desempe&ntilde;an funciones en:<br>&bull; Instituciones aut&oacute;nomas.<br>&bull; Gobierno Central.<br>&bull; Industrias.<br>&bull; Empresas privadas.<br>&bull; Educaci&oacute;n superior estatal y privada.<br>&bull; Centros de investigaci&oacute;n.<br>&bull; Oficinas dedicadas a la Consultor&iacute;a y Servicios Computacionales.</p>\r\n<p>PERFIL PROFESIONAL<br>La formaci&oacute;n del inform&aacute;tico empresarial se construye a partir de tres &aacute;reas del conocimiento: la computaci&oacute;n, la inform&aacute;tica y la administraci&oacute;n, con el apoyo de la matem&aacute;tica, la estad&iacute;stica y la l&oacute;gica y teniendo como ejes conductores la &eacute;tica y el humanismo. Este profesional est&aacute; capacitado para analizar, dise&ntilde;ar y programar sistemas, utilizando tecnolog&iacute;a de punta, as&iacute; como para la planificaci&oacute;n, control y direcci&oacute;n de la gesti&oacute;n inform&aacute;tica en la empresa o instituci&oacute;n Este profesional est&aacute; capacitado para tomar parte activa en trabajos complejos y para dirigir investigaciones multidisciplinarias aplicadas. Los conocimientos en el &aacute;rea de administraci&oacute;n de los recursos inform&aacute;ticos le permitir&aacute;n mantener un mejor acercamiento a la organizaci&oacute;n e identificar la manera &oacute;ptima de aplicar la inform&aacute;tica para apoyar su funcionamiento. Estar&aacute; as&iacute;, en capacidad de utilizar las herramientas computacionales que le permitan modelar los procesos empresariales y ayudar en la toma de decisiones.</p>\r\n<p>Los siguientes recursos te pueden ayudar a identificar mejor la informaci&oacute;n, dando clic en Plan de carrera podr&aacute;s visualizar todos los cursos contenidos en el programa del Bachillerato y en dando clic en Radiograf&iacute;a Laboral podr&aacute;s observar un recurso donde El Observatorio Laboral de Profesiones (OLaP) del Consejo Nacional de Rectores (CONARE), recolecta informaci&oacute;n confiable, sobre el mercado de trabajo de las personas graduadas de la educaci&oacute;n superior universitaria costarricense.</p>', 3),
(7, 'Actividades', 'assets/img/actividades.jpg', 'La UCR crea profesionales pero no todo es estudio, se le brindan espacios de aventura y actividades a los estudiantes con el fin de que puedan liberar un poco del estrés de U y que logren convivir con sus compañeros.', 0),
(8, 'Proyectos', '....', 'La Universidad de Costa Rica siempre ha tenido como estandarte primordial el estar siempre en pro de la sociedad, eliminando esas barreras de formar sólo\r\n estudiantes, sino en ir más allá educando y velando por una sociedad más culta e inclusiva a la educación, también mostrará algunos de los proyectos estudiantiles más destacados del Recinto de Siquirres, en el cual son presentados en diversas ferias vocacionales que se realizan en la zona, en los simposios de informática que se realizan una vez al año en cada sede de la universidad y en otras actividades estudiantiles.', 0),
(9, 'Anuario', 'assets/img/u.PNG', 'El Recinto se Siquirres dio sus inicios desde el 2012 cuando entro la primera generación de estudiantes y desde ese momento hasta el día de hoy nos hemos dado en honor que contar con varios estudiantes graduados, listos para salir al mundo laboral.\r\nEn esta página se encuentra una galería con una foto y nombre de cada estudiante que se a graduado del Recinto de Siquirres y la generación a la que pertenece según el año de graduación.', 0),
(10, 'Contáctanos', 'assets/img/u.PNG', 'En esta sección podrás encontrar la información necesaria para que puedas contactarnos en el área que desees.<br>\r\nRecuerda que nuestro horario de atención es de lunes a viernes de 9:00 a 12:00 hrs, también puedes escribirnos al correo:\r\n<strong>recintosiquirres.sedecaribe@ucr.ac.cr</strong> o llamarnos al <strong> 2511-7399</strong>', 0),
(13, 'Brendan', 'assets/img/R.jpeg', 'llllñkl', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('berni@gmail.com', '$2y$10$EH33s9BAEzx9FXZ5/C0Byexpd.MZkaFcm/Y0YnocRuCX7j2ops1a6', '2024-06-01 08:32:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id_slader` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `boton` varchar(50) DEFAULT NULL,
  `subtitulo` varchar(300) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id_slader`, `img`, `titulo`, `boton`, `subtitulo`, `url`) VALUES
(2, 'assets/img/robotica7.png', 'Proyectos', 'Conocer los proyectos', 'Los estudiantes de la UCR Siquirres realizan proyectos muy elaborados, en este apartado se muestran algunos proyectos realizados.', 'proyectos'),
(3, 'assets/img/semanaU6.jpeg', 'Actividades.', 'Conocer más.', 'Se realizan actividades recreativas para ayudar a que los estudiantes salgan un poco de la rutina universitaria. ', 'actividades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE `testimonios` (
  `id_testimonio` int(11) NOT NULL,
  `autor` varchar(150) DEFAULT NULL,
  `comentario` text DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` varchar(255) NOT NULL DEFAULT 'Usuario',
  `estado` varchar(255) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `rol`, `estado`) VALUES
(2, 'Alvaro Martinez Rojas', 'gabrielperezsanchez772@gmail.com', '2024-05-22 05:15:51', '$2y$10$CJ7GclEAmuG1wFyLhAgCiOsUvNR.wvBFA35wb19V49EjF9ZOJloFu', 'OyahMtxoMSaZDpRSgcIgbnm9FEtNcNAdAWKu67NZDGyjTxMbpnjV1wV7Dnev', '2024-05-10 05:54:16', '2025-05-16 10:11:22', 'Admin', 'Activo'),
(16, 'Berni Martinez', 'berni@gmail.com', '2024-06-01 15:38:36', '$2y$10$ln7LwH5BSNQhHeYkv25udeSOk0MzMWzfh5bdstEdcygmODpZtLJ56', NULL, '2024-06-05 03:12:33', '2024-06-05 03:12:33', 'Admin', 'Activo'),
(30, 'Pricila loiza', 'priscila@gmail.com', '2024-06-02 09:44:40', '$2y$10$orsM9rFdeWydm3ELd33aKOWP5eO3BoowUFm3qzAim78mtbVm2jnde', 'kgQceqE2VbM0pGEtqYlaslnP6f38cFY7SSJ38WpJCe4VsyB2rQLjK84GsVkA', '2024-06-02 09:42:52', '2024-06-23 16:11:07', 'Usuario', 'Activo'),
(32, 'Angelina', 'angelina@gmail.com', '2024-06-02 10:10:17', '$2y$10$.8k//SQJ6Ly/4FF2lzDgLO5/mtRGDoD9C9jCwm/F9WR7mEbGQ.e52', NULL, '2024-06-02 10:08:14', '2024-06-02 10:35:57', 'Usuario', 'Activo'),
(37, 'Cristel A', 'cristel@gmail.com', '2024-06-05 05:19:26', '$2y$10$N/ycbBqKUPbXRiNu.cau6O2LAirUdD74Z2bI31RjIknhRf4uXDg/W', 'MKF9smNoXS4P45zXEK9pZ9KWLcxT7ElIwlJHhasxYBN7Md4T7eAUvZt5dsAL', '2024-06-02 11:07:32', '2024-06-23 16:22:08', 'Usuario', 'Activo'),
(38, 'Jordanie', 'jordanie@gmail.com', NULL, '$2y$10$Hn44MRGkUXrt6smp.bQ03OIcnIt7XrQZwEv/qOuLPJ62ZGsHusznm', NULL, '2024-06-02 11:08:56', '2024-06-02 11:10:34', 'Usuario', 'Activo'),
(39, 'Sofia', 'sofia@gmail.com', NULL, '$2y$10$c4RpG4i0w6ibdKO8zfl1Tex7EbhZfDlhAhChMnNTwgfMUtdsugV.i', NULL, '2024-06-02 11:09:52', '2024-06-02 11:10:50', 'Usuario', 'Activo'),
(41, 'Brendan Gabriel Pérez Sánchez', 'brendanperezsanchez339@gmail.com', '2025-04-25 04:37:31', '$2y$10$nqbyWyMvraq6qT4KgR6nlu4T6/DKcMMyNssdLSDwzme5HiUuDpdVS', 'V8pLIGDxRagF9fWf5LQjCfOwQbiB31I6SV0bpAJchmdEScdTl2UG8cytoWmp', '2025-04-25 04:10:25', '2025-04-25 04:37:31', 'Admin', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`id_administrativo`);

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id_config`),
  ADD KEY `id_pagina` (`id_pagina`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`id_estadisticas`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_pagina` (`id_pagina`);

--
-- Indices de la tabla `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id_pagina`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slader`);

--
-- Indices de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id_testimonio`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  MODIFY `id_administrativo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `config`
--
ALTER TABLE `config`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id_estadisticas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de la tabla `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id_testimonio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `config`
--
ALTER TABLE `config`
  ADD CONSTRAINT `config_ibfk_1` FOREIGN KEY (`id_pagina`) REFERENCES `paginas` (`id_pagina`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_pagina`) REFERENCES `paginas` (`id_pagina`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
