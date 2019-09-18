-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2018 a las 19:10:18
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `repositorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexos`
--

CREATE TABLE `anexos` (
  `id` int(20) NOT NULL,
  `anexo` varchar(255) NOT NULL,
  `descripcionanexo` varchar(150) NOT NULL,
  `fecha_anexo` datetime NOT NULL,
  `id_documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anexos`
--

INSERT INTO `anexos` (`id`, `anexo`, `descripcionanexo`, `fecha_anexo`, `id_documento`) VALUES
(1, 'Tienda.zip', 'En informática, RAR (cuyas siglas significan Roshal ARchive en inglés) es un formato de archivo propietario, con un algoritmo de compresión sin pérdid', '2018-05-23 20:58:11', 2),
(2, 'abarrotes.sql', 'SQL es un lenguaje específico del dominio que da acceso a un sistema de gestión de bases de datos relacionales que permite especificar diversos tipos ', '2018-05-23 20:59:21', 2),
(3, '32952156_1080056895465840_1141096136791031808_n.jpg', 'Manual Kaspersky Internet Security · Driver Cleaner: Evita conflictos con controladores antiguos · Crear una copia de Windows Update para grabarlas en', '2018-05-23 21:06:39', 2),
(4, 'depositphotos_146455163-stock-photo-slices-fresh-fruits.jpg', 'Diagrama P.A.D. (del latín, diagramma; y este del griego διάγραμμα, «diseño») es un dibujo geométrico, muy utilizado en ciencia, en educación y en ...', '2018-05-23 21:07:26', 2),
(5, 'depositphotos_146455163-stock-photo-slices-fresh-fruits1.jpg', 'La robótica como hoy en día la conocemos, tiene sus orígenes hace miles de años. Nos basaremos en hechos registrados a través de la historia, ...', '2018-05-23 21:08:59', 2),
(6, 'depositphotos_146455163-stock-photo-slices-fresh-fruits2.jpg', 'La Organización Internacional de Normalización (originalmente en inglés: International Organization for Standardization, conocida por la abreviación I', '2018-05-23 21:10:03', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexos2`
--

CREATE TABLE `anexos2` (
  `id` int(20) NOT NULL,
  `anexo` varchar(255) NOT NULL,
  `descripcionanexo` varchar(150) NOT NULL,
  `fecha_anexo` datetime NOT NULL,
  `id_documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anexos2`
--

INSERT INTO `anexos2` (`id`, `anexo`, `descripcionanexo`, `fecha_anexo`, `id_documento`) VALUES
(1, '07-Beautiful-Fruit-Wallpapers-862x539.jpg', 'El FPS de Electronic Arts y desarrollado por DICE es oficial, y contrario a la moda de los battle royale que están saliendo por todos lados, el caso d', '2018-05-23 22:12:58', 3),
(2, '6a00d8341c82b753ef01bb09f67bba970d-800wi.jpg', 'Twitter es la plataforma favorita del presidente Donald Trump, quien ha optado por no usar la cuenta oficial (@POTUS) y en su lugar seguir usando su p', '2018-05-23 22:13:37', 3),
(3, '31914070_852360034949298_8717362822813581312_n.png', 'Se han cumplido dos meses desde que uno de los coches autónomos de Uber atropellara y matara a una mujer de 49 años en Tempe, Arizona, convirtiéndose ', '2018-05-23 22:14:01', 3),
(4, '31914070_852360034949298_8717362822813581312_n1.png', 'pruebas en este estado.\r\n\r\nTras saber que el coche de Uber sí habría detectado al peatón, parece que la compañía no piensa esperar los resultados de l', '2018-05-23 22:14:19', 3),
(5, 'pbl-1024x725.jpg', 'ún piensan seguir operando en San Francisco y Pittsburgh\r\nUber inició sus pruebas con coches autónomos en Arizona en 2016. Después del accidente, el g', '2018-05-23 22:14:45', 3),
(6, 'powerpoint-templates-b450.jpg', 'Uber se ha mostrado optimista a pesar de que los pronósticos no están a su favor. Después de la que la compañía logró llegar a un arreglo con la famil', '2018-05-23 22:15:07', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avance`
--

CREATE TABLE `avance` (
  `descripcionproblema` int(5) NOT NULL DEFAULT '0',
  `objetivos` int(5) NOT NULL DEFAULT '0',
  `justificacion` int(5) NOT NULL DEFAULT '0',
  `Antecedentes` int(5) NOT NULL DEFAULT '0',
  `marcoc` int(5) NOT NULL DEFAULT '0',
  `marcot` int(5) NOT NULL DEFAULT '0',
  `alcance` int(5) NOT NULL DEFAULT '0',
  `cronograma` int(5) NOT NULL DEFAULT '0',
  `presupuesto` int(5) NOT NULL DEFAULT '0',
  `bibliografia` int(5) NOT NULL DEFAULT '0',
  `iddocumento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `avance`
--

INSERT INTO `avance` (`descripcionproblema`, `objetivos`, `justificacion`, `Antecedentes`, `marcoc`, `marcot`, `alcance`, `cronograma`, `presupuesto`, `bibliografia`, `iddocumento`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avance2`
--

CREATE TABLE `avance2` (
  `resumen` int(5) NOT NULL DEFAULT '0',
  `introduccion` int(5) NOT NULL DEFAULT '0',
  `marco_teorico` int(5) NOT NULL DEFAULT '0',
  `metodologia` int(5) NOT NULL DEFAULT '0',
  `resultados` int(5) NOT NULL DEFAULT '0',
  `concluciones` int(5) NOT NULL DEFAULT '0',
  `anexos` int(5) NOT NULL DEFAULT '0',
  `bibliografia` int(5) NOT NULL DEFAULT '0',
  `id_documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `avance2`
--

INSERT INTO `avance2` (`resumen`, `introduccion`, `marco_teorico`, `metodologia`, `resultados`, `concluciones`, `anexos`, `bibliografia`, `id_documento`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 1),
(0, 0, 0, 0, 0, 0, 0, 0, 2),
(0, 0, 0, 0, 0, 0, 0, 0, 3),
(0, 0, 0, 0, 0, 0, 0, 0, 4),
(0, 0, 0, 0, 0, 0, 0, 0, 5),
(0, 0, 0, 0, 0, 0, 0, 0, 6),
(0, 0, 0, 0, 0, 0, 0, 0, 7),
(0, 0, 0, 0, 0, 0, 0, 0, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(20) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `fechacomentario` datetime NOT NULL,
  `cod_comento` int(20) NOT NULL,
  `id_adjunto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `fechacomentario`, `cod_comento`, `id_adjunto`) VALUES
(1, 'buenas noches profesor por favor puede revisar los requerimientos es lo que falta para terminar el proyecto \r\n\r\nBUENAS NOCHES!!!', '2018-05-23 20:05:00', 1089936622, 4),
(2, 'asdfasdf', '2018-05-23 20:05:05', 1089936622, 4),
(3, 'muchas gracias ', '2018-05-23 20:29:03', 1089936622, 4),
(4, 'feliz dia', '2018-05-23 20:29:36', 1089936622, 4),
(5, 'feliz vacaciones', '2018-05-23 20:30:26', 1089936622, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios2`
--

CREATE TABLE `comentarios2` (
  `id` int(20) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `fechacomentario` datetime NOT NULL,
  `cod_comento` int(20) NOT NULL,
  `id_adjunto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios2`
--

INSERT INTO `comentarios2` (`id`, `comentario`, `fechacomentario`, `cod_comento`, `id_adjunto`) VALUES
(1, 'listo ya se subio el ultmo documento del informe final', '2018-05-23 22:00:08', 830495882, 2),
(2, 'aaa recorde que tuve unos errores lo siento ', '2018-05-23 22:00:31', 830495882, 2),
(3, 'muchas gracisas', '2018-05-23 22:00:57', 830495882, 2),
(4, 'Ya voy a subir la nueva version del documento ', '2018-05-23 22:01:19', 830495882, 2),
(5, 'listo ya la subi  profe muchas gracias feliz noche', '2018-05-23 22:01:38', 830495882, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dificultades`
--

CREATE TABLE `dificultades` (
  `id` int(20) NOT NULL,
  `nombreyapellidos` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fechasolicitud` datetime NOT NULL,
  `estado` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dificultades`
--

INSERT INTO `dificultades` (`id`, `nombreyapellidos`, `email`, `telefono`, `asunto`, `descripcion`, `fechasolicitud`, `estado`) VALUES
(1, 'Sebastian  Perez Giraldo', 'sebastian12@ucp.edu.co', '321123456', 'problemas', 'no sube el adjunto', '2018-05-23 22:34:15', 0),
(2, 'Alvaro Juan Pablo Aguirre sierra', 'alvaro.agirre@ucp.edu.co', '321546465', 'ayudaaa!', 'no me quiere hacer los comentarios', '2018-05-23 22:35:41', 0),
(3, 'Alvaro Juan Pablo Aguirre sierra', 'alvaro.agirre@ucp.edu.co', '321546465', 'ayudaaa!', 'los anexos no quieren descargar', '2018-05-23 22:36:16', 0),
(4, 'Mateo   Nieto Hoyos', 'mateo.nieto@ucp.edu.co', '3222368431', 'Problemas', 'no quiere subir los anexos\r\n', '2018-05-23 22:37:40', 0),
(5, 'Mateo   Nieto Hoyos', 'mateo.nieto@ucp.edu.co', '3222368431', 'Problemas', 'aaaaa no quieres visualizar el documento \r\n', '2018-05-23 22:38:02', 0),
(6, 'Mateo   Nieto Hoyos', 'mateo.nieto@ucp.edu.co', '3222368431', 'Problemas', 'Se sube duplicados los adjuntos\r\n', '2018-05-23 22:38:27', 0),
(7, 'Karen sofia ', 'mateo.nieto@ucp.edu.co', '3222368431', 'Problemas', 'Se sube duplicados los adjuntos\r\n', '2018-05-23 22:38:59', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id` int(20) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `autor1` varchar(50) NOT NULL,
  `autor2` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `codigouser` int(20) NOT NULL,
  `codigouser2` int(20) DEFAULT NULL,
  `Estado` varchar(20) NOT NULL,
  `vistop` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id`, `titulo`, `autor1`, `autor2`, `descripcion`, `fecha_creacion`, `codigouser`, `codigouser2`, `Estado`, `vistop`) VALUES
(1, 'Inteligencia Artificial', 'Lopez Martinez Jerónimo Emmanue', '', 'El término AI fue acuñado por John McCarthy, un informático estadounidense, en 1956 durante la Conferencia de Dartmouth, donde nació la disciplina. Hoy en día, es un término general que abarca todo, desde la automatización de procesos robóticos', '2018-05-19 20:46:52', 6576590, NULL, 'Proceso', 0),
(2, 'Big Data en el mercado', 'Nieto Hoyos Karen Sofia', '', 'Cuando hablamos de Big Data nos referimos a conjuntos de datos o combinaciones de conjuntos de datos cuyo tamaño (volumen), complejidad (variabilidad) y velocidad de crecimiento (velocidad) dificultan su captura, gestión, procesamiento', '2018-05-19 20:48:52', 1089936622, NULL, 'Proceso', 0),
(3, 'Cyborgs humanos robots', 'Perez Giraldo Sebastian ', '', 'Se trata de personas con capacidades mejoradas gracias a dispositivos cibernéticos que forman parte de su cuerpo. Los más destacados de una comunidad que pretende ser respetada y reconocida como una nueva categoría de ciudadanos del mundo', '2018-05-19 20:51:06', 830495882, NULL, 'Terminado', 1),
(4, 'Sistemas Operativos', 'Sanchez Diaz Maximiliano ', '', 'En el mundo de la informática se denomina sistema operativo al programa, o conjunto de ellos, que gestiona los recursos físicos de un sistema informático (memoria, capacidad de procesamiento, espacio en disco duro, acceso a la red, etc.)', '2018-05-19 20:52:49', 8093280, NULL, 'Proceso', 0),
(5, 'Distribuciones de linux', 'Rodriguez Gomez Luciana ', '', 'Es muy posible que muchos de vosotros hayáis oído hablar de GNU/Linux pero no os hayáis decidido a probarlo por no saber qué distribución escoger. Incluso puede que aun siendo ya usuarios de Linux, aun no estéis del todo satisfecho con él y queráis b', '2018-05-19 20:54:47', 89698676, NULL, 'Proceso', 0),
(6, 'Rendimiento de las paginas web', 'Hoyos Garcia Gabriela ', '', 'Si quieres analizar tu web y evaluar cada uno de los aspectos de tu página web, ponemos a tu disposición 1&1 Análisis Web, una herramienta gratuita que analizará tu web y te proporcionará recomendaciones concretas con las que mejorarla.', '2018-05-19 20:56:25', 97608060, NULL, 'Proceso', 0),
(7, 'lenguajes de programacion', 'Lopez Gonzales Salome ', '', 'La sintaxis de la mayoría de los lenguajes de programación puede ser especificada utilizando una gramática Tipo-2, es decir, son gramáticas libres de contexto. Algunos lenguajes, incluyendo a Perl y a Lisp, contienen construcciones que permiten ', '2018-05-19 20:57:45', 98765123, NULL, 'Proceso', 0),
(8, 'Seguridad en las redes', 'Mosquera Hoyos Isabella ', '', 'La Seguridad en redes tiene el objetivo de mantener el intercambio de información libre de riesgo y proteger los recursos informáticos de los usuarios y las Organizaciones. Generalmente, se encuentra amenazada por riesgos que van de la mano ', '2018-05-19 21:00:47', 675483912, NULL, 'Proceso', 0);

--
-- Disparadores `documento`
--
DELIMITER $$
CREATE TRIGGER `avancedocumento` AFTER INSERT ON `documento` FOR EACH ROW INSERT INTO `avance` (`descripcionproblema`, `objetivos`, `justificacion`, `Antecedentes`, `marcoc`, `marcot`, `alcance`, `cronograma`, `presupuesto`, `bibliografia`, `iddocumento`) VALUES ('0', '0', '0', '0', '0', '0', '0', '0', '0', '0',new.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento2`
--

CREATE TABLE `documento2` (
  `id` int(20) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `autor1` varchar(50) NOT NULL,
  `autor2` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `codigouser` int(20) NOT NULL,
  `codigouser2` int(20) DEFAULT NULL,
  `Estado` varchar(20) NOT NULL,
  `vistop` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `documento2`
--

INSERT INTO `documento2` (`id`, `titulo`, `autor1`, `autor2`, `descripcion`, `fecha_creacion`, `codigouser`, `codigouser2`, `Estado`, `vistop`) VALUES
(1, 'Inteligencia Artificial', 'Lopez Martinez Jerónimo Emmanue', '', 'El término AI fue acuñado por John McCarthy, un informático estadounidense, en 1956 durante la Conferencia de Dartmouth, donde nació la disciplina. Hoy en día, es un término general que abarca todo, desde la automatización de procesos robóticos', '2018-05-19 20:46:52', 6576590, NULL, 'Sin iniciar', 0),
(2, 'Big Data en el mercado', 'Nieto Hoyos Karen Sofia', '', 'Cuando hablamos de Big Data nos referimos a conjuntos de datos o combinaciones de conjuntos de datos cuyo tamaño (volumen), complejidad (variabilidad) y velocidad de crecimiento (velocidad) dificultan su captura, gestión, procesamiento', '2018-05-19 20:48:52', 1089936622, NULL, 'Sin iniciar', 0),
(3, 'Cyborgs humanos robots', 'Perez Giraldo Sebastian ', '', 'Se trata de personas con capacidades mejoradas gracias a dispositivos cibernéticos que forman parte de su cuerpo. Los más destacados de una comunidad que pretende ser respetada y reconocida como una nueva categoría de ciudadanos del mundo', '2018-05-19 20:51:06', 830495882, NULL, 'Proceso', 0),
(4, 'Sistemas Operativos', 'Sanchez Diaz Maximiliano ', '', 'En el mundo de la informática se denomina sistema operativo al programa, o conjunto de ellos, que gestiona los recursos físicos de un sistema informático (memoria, capacidad de procesamiento, espacio en disco duro, acceso a la red, etc.)', '2018-05-19 20:52:49', 8093280, NULL, 'Sin iniciar', 0),
(5, 'Distribuciones de linux', 'Rodriguez Gomez Luciana ', '', 'Es muy posible que muchos de vosotros hayáis oído hablar de GNU/Linux pero no os hayáis decidido a probarlo por no saber qué distribución escoger. Incluso puede que aun siendo ya usuarios de Linux, aun no estéis del todo satisfecho con él y queráis b', '2018-05-19 20:54:47', 89698676, NULL, 'Sin iniciar', 0),
(6, 'Rendimiento de las paginas web', 'Hoyos Garcia Gabriela ', '', 'Si quieres analizar tu web y evaluar cada uno de los aspectos de tu página web, ponemos a tu disposición 1&1 Análisis Web, una herramienta gratuita que analizará tu web y te proporcionará recomendaciones concretas con las que mejorarla.', '2018-05-19 20:56:25', 97608060, NULL, 'Sin iniciar', 0),
(7, 'lenguajes de programacion', 'Lopez Gonzales Salome ', '', 'La sintaxis de la mayoría de los lenguajes de programación puede ser especificada utilizando una gramática Tipo-2, es decir, son gramáticas libres de contexto. Algunos lenguajes, incluyendo a Perl y a Lisp, contienen construcciones que permiten ', '2018-05-19 20:57:45', 98765123, NULL, 'Sin iniciar', 0),
(8, 'Seguridad en las redes', 'Mosquera Hoyos Isabella ', '', 'La Seguridad en redes tiene el objetivo de mantener el intercambio de información libre de riesgo y proteger los recursos informáticos de los usuarios y las Organizaciones. Generalmente, se encuentra amenazada por riesgos que van de la mano ', '2018-05-19 21:00:47', 675483912, NULL, 'Sin iniciar', 0);

--
-- Disparadores `documento2`
--
DELIMITER $$
CREATE TRIGGER `avacendocumento2` AFTER INSERT ON `documento2` FOR EACH ROW INSERT INTO `avance2` (`resumen`, `introduccion`, `marco_teorico`, `metodologia`, `resultados`, `concluciones`, `id_documento`) VALUES ('0', '0', '0', '0', '0', '0', new.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_adjuntados`
--

CREATE TABLE `documentos_adjuntados` (
  `id` int(20) NOT NULL,
  `adjunto` varchar(255) DEFAULT NULL,
  `fecha_adjunto` datetime DEFAULT NULL,
  `id_documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `documentos_adjuntados`
--

INSERT INTO `documentos_adjuntados` (`id`, `adjunto`, `fecha_adjunto`, `id_documento`) VALUES
(1, 'Cyborgs_humanos_robots-2018-05-19.pdf', '2018-05-19 21:18:19', 3),
(2, 'Cyborgs_humanos_robots-2018-05-18.pdf', '2018-05-19 21:19:22', 3),
(3, 'Cyborgs_humanos_robots-2018-05-17.pdf', '2018-05-19 21:19:39', 3),
(4, 'Bigdataenelmercado-2018-05-23.pdf', '2018-05-23 19:59:19', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_adjuntados2`
--

CREATE TABLE `documentos_adjuntados2` (
  `id` int(20) NOT NULL,
  `adjunto` varchar(255) NOT NULL,
  `fecha_adjunto` datetime NOT NULL,
  `id_documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `documentos_adjuntados2`
--

INSERT INTO `documentos_adjuntados2` (`id`, `adjunto`, `fecha_adjunto`, `id_documento`) VALUES
(1, 'Cyborgs_humanos_robots-2018-05-19.pdf', '2018-05-23 19:49:59', 3),
(2, 'Cyborgs_humanos_robots-2018-05-23.pdf', '2018-05-23 20:34:24', 3),
(3, 'Cyborgs_humanos_robots-2018-05-24.pdf', '2018-05-23 20:35:19', 3),
(4, 'Cyborgs_humanos_robots-2018-05-25.pdf', '2018-05-23 20:37:25', 3),
(5, 'Cyborgs_humanos_robots-2018-05-26.pdf', '2018-05-23 20:41:31', 3),
(6, 'Cyborgs_humanos_robots-2018-05-27.pdf', '2018-05-23 20:42:13', 3),
(7, 'Cyborgs_humanos_robots-2018-05-271.pdf', '2018-05-23 20:42:26', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`) VALUES
(1, 'Alumno'),
(2, 'Docente'),
(3, 'Administrador'),
(4, 'Invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre1` varchar(20) NOT NULL,
  `nombre2` varchar(20) DEFAULT NULL,
  `apellidos` varchar(20) NOT NULL,
  `codigo` int(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `imgperfil` varchar(50) NOT NULL DEFAULT 'avatar.png',
  `imgfondo` varchar(50) NOT NULL DEFAULT '1.jpg',
  `tema` int(5) NOT NULL DEFAULT '0',
  `tipou` int(5) NOT NULL,
  `ingresa` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre1`, `nombre2`, `apellidos`, `codigo`, `password`, `email`, `tel`, `imgperfil`, `imgfondo`, `tema`, `tipou`, `ingresa`) VALUES
('Monkey', 'D', 'Luffy', 12345, '3c80b2e1ef2d80dd6f0d495ec635ea13', 'asdfads@gmail.com', '34141234', 'avatar.png', '10.jpg', 0, 2, 0),
('Ted', NULL, 'Mosby Sierra', 123456, '1a8c97212084a1a62a8f6e97f70eaa8f', 'ted@gmail.com', '45678921', 'avatar.png', '1.jpg', 0, 2, 0),
('Jerónimo', 'Emmanue', 'Lopez Martinez', 6576590, 'b8cd914b0a908319dbecbe642189a4b0', 'emmanuel23@ucp.edu.co', '321878657', 'avatar.png', '12.jpg', 0, 1, 1),
('Maximiliano', '', 'Sanchez Diaz', 8093280, '1e37780ccb6e7dfc79dd7442dff7133a', 'sanchez.diaz@ucp.edu.co', '3117685904', 'avatar.png', '1.jpg', 0, 1, 1),
('Ana', NULL, 'Herrera Valenci', 48949834, 'dfcf83500f5766bec6e61b6feafe22c0', 'valencia@ucp.edu.co', '316987654', 'avatar.png', '10.jpg', 0, 2, 0),
('Alvaro', 'Juan Pablo', 'Aguirre Sierra', 75757575, '793a12d64b5fac4e24919d0c6dc94a9d', 'alvaro@ucp.edu.co', '45678455', 'avatar.png', '10.jpg', 0, 1, 0),
('Miguel ', NULL, 'Vargas Moreno ', 76859403, '951786e9fed37f5de8723d7d77e1e0eb', 'miguel.vargas@ucp.edu.co', '313589095', 'avatar.png', '3.jpg', 0, 2, 0),
('Luciana', '', 'Rodriguez Gomez', 89698676, '306ed77e6327e0018ab356160f431b74', 'luniana.rodriguez@ucp.edu.co', '321457890', 'avatar.png', '4.jpg', 0, 1, 1),
('Gabriela', '', 'Hoyos Garcia', 97608060, '5703b4816dbc25f7407150883ed1852f', 'gabriela.garcia@ucp.edu.co', '32209876567', 'avatar.png', '9.jpg', 0, 1, 1),
('Salome', '', 'Lopez Gonzales', 98765123, '36e8b37f4dc957469ece0692a6e66e11', 'salome.lopez@ucp.edu.co', '322567898', 'avatar.png', '12.jpg', 0, 1, 1),
('Juan', NULL, 'Ruiz Suares', 100456672, '4778123bf98d44bb66d02add14bd6f58', 'david.suares@ucp.edu.co', '3140065234', 'avatar.png', '6.jpg', 0, 2, 0),
('Juan', NULL, 'Ortiz Romero', 120056434, 'c01099ff8684591660d5e43fac352ee5', 'juan.romero@ucp.edu.co', '31588292', 'avatar.png', '5.jpg', 0, 2, 0),
('Invitado', NULL, '.', 123456789, '*******************', '***********@ucp.edu.co', '**********', 'avatar.png', '1.jpg', 0, 4, 0),
('Ana', 'Maria', 'Osorio Hoyos', 342567890, '73de2ae3f2b60d0dbcad1071bf2df5f6', 'ana.osorio@ucp.edu.co', '3114560987', 'avatar.png', '3.jpg', 0, 1, 0),
('Isabella', '', 'Mosquera Hoyos', 675483912, '0d6b534c77372866d172199061f38b6f', 'isabella@ucp.edu.co', '31245698777', 'avatar.png', '8.jpg', 0, 1, 1),
('Juan', ' ', 'Jimenez Castro', 758493012, '41b394758330c83757856aa482c79977', 'sebastia.castro@ucp.edu.co', '312098769', 'avatar.png', '2.jpg', 0, 2, 0),
('Sebastian', '', 'Perez Giraldo', 830495882, '8c54712f16c2683058b8c45e7f8da0b2', 'sebastian12@ucp.edu.co', '321123456', 'avatar.png', '6.jpg', 0, 1, 1),
('Ana', NULL, 'Morales Giraldo', 987987281, 'd6677fedc6bf969533f842f72a4a6791', 'morales.giraldo@ucp.edu.co', '318345678', 'avatar.png', '10.jpg', 0, 2, 0),
('Mateo ', '', 'Nieto Hoyos', 1088342892, '853da5367f3e9565b5dab46eac9254c9', 'mateo.nieto@ucp.edu.co', '3222368431', 'avatar.png', '6.jpg', 0, 1, 0),
('Karen', 'Sofia', 'Nieto Hoyos', 1089936622, 'faa7387fd6ea6bbec9fd5c2cbc8c65d9', 'payomatheo@gmail.com', '234567890', 'avatar.png', '10.jpg', 0, 1, 1),
('Administrador', '.', '.', 1421535676, '848eab1fc78db4867cb3bf65b7eb623d', 'repositorio39@gmail.com', '65793825', 'avatar.png', '8.jpg', 0, 3, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indices de la tabla `anexos2`
--
ALTER TABLE `anexos2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indices de la tabla `avance`
--
ALTER TABLE `avance`
  ADD KEY `iddocumento` (`iddocumento`);

--
-- Indices de la tabla `avance2`
--
ALTER TABLE `avance2`
  ADD KEY `id_documento` (`id_documento`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod-comento` (`cod_comento`,`id_adjunto`),
  ADD KEY `id_adjunto` (`id_adjunto`);

--
-- Indices de la tabla `comentarios2`
--
ALTER TABLE `comentarios2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod-comento` (`cod_comento`,`id_adjunto`),
  ADD KEY `id_adjunto` (`id_adjunto`);

--
-- Indices de la tabla `dificultades`
--
ALTER TABLE `dificultades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigouser` (`codigouser`),
  ADD KEY `codigouser2` (`codigouser2`),
  ADD KEY `codigouser2_2` (`codigouser2`);

--
-- Indices de la tabla `documento2`
--
ALTER TABLE `documento2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigouser` (`codigouser`,`codigouser2`),
  ADD KEY `codigouser2` (`codigouser2`);

--
-- Indices de la tabla `documentos_adjuntados`
--
ALTER TABLE `documentos_adjuntados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indices de la tabla `documentos_adjuntados2`
--
ALTER TABLE `documentos_adjuntados2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `tipou` (`tipou`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anexos`
--
ALTER TABLE `anexos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `anexos2`
--
ALTER TABLE `anexos2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `comentarios2`
--
ALTER TABLE `comentarios2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `dificultades`
--
ALTER TABLE `dificultades`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `documento2`
--
ALTER TABLE `documento2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `documentos_adjuntados`
--
ALTER TABLE `documentos_adjuntados`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `documentos_adjuntados2`
--
ALTER TABLE `documentos_adjuntados2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anexos`
--
ALTER TABLE `anexos`
  ADD CONSTRAINT `anexos_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `anexos2`
--
ALTER TABLE `anexos2`
  ADD CONSTRAINT `anexos2_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento2` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `avance`
--
ALTER TABLE `avance`
  ADD CONSTRAINT `avance_ibfk_1` FOREIGN KEY (`iddocumento`) REFERENCES `documento` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `avance2`
--
ALTER TABLE `avance2`
  ADD CONSTRAINT `avance2_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento2` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`cod_comento`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_3` FOREIGN KEY (`id_adjunto`) REFERENCES `documentos_adjuntados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios2`
--
ALTER TABLE `comentarios2`
  ADD CONSTRAINT `comentarios2_ibfk_2` FOREIGN KEY (`cod_comento`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios2_ibfk_3` FOREIGN KEY (`id_adjunto`) REFERENCES `documentos_adjuntados2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`codigouser`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documento_ibfk_2` FOREIGN KEY (`codigouser2`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documento2`
--
ALTER TABLE `documento2`
  ADD CONSTRAINT `documento2_ibfk_1` FOREIGN KEY (`codigouser`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documento2_ibfk_2` FOREIGN KEY (`codigouser2`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documentos_adjuntados`
--
ALTER TABLE `documentos_adjuntados`
  ADD CONSTRAINT `documentos_adjuntados_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `documentos_adjuntados2`
--
ALTER TABLE `documentos_adjuntados2`
  ADD CONSTRAINT `documentos_adjuntados2_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento2` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipou`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
