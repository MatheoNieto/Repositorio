-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 07:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repositorio`
--

-- --------------------------------------------------------

--
-- Table structure for table `anexos`
--

CREATE TABLE `anexos` (
  `id` int(20) NOT NULL,
  `anexo` varchar(255) NOT NULL,
  `descripcionanexo` varchar(150) NOT NULL,
  `fecha_anexo` datetime NOT NULL,
  `id_documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `anexos2`
--

CREATE TABLE `anexos2` (
  `id` int(20) NOT NULL,
  `anexo` varchar(255) NOT NULL,
  `descripcionanexo` varchar(150) NOT NULL,
  `fecha_anexo` datetime NOT NULL,
  `id_documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `avance`
--

CREATE TABLE `avance` (
  `descripcionproblema` int(5) NOT NULL DEFAULT 0,
  `objetivos` int(5) NOT NULL DEFAULT 0,
  `justificacion` int(5) NOT NULL DEFAULT 0,
  `Antecedentes` int(5) NOT NULL DEFAULT 0,
  `marcoc` int(5) NOT NULL DEFAULT 0,
  `marcot` int(5) NOT NULL DEFAULT 0,
  `alcance` int(5) NOT NULL DEFAULT 0,
  `cronograma` int(5) NOT NULL DEFAULT 0,
  `presupuesto` int(5) NOT NULL DEFAULT 0,
  `bibliografia` int(5) NOT NULL DEFAULT 0,
  `iddocumento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `avance2`
--

CREATE TABLE `avance2` (
  `resumen` int(5) NOT NULL DEFAULT 0,
  `introduccion` int(5) NOT NULL DEFAULT 0,
  `marco_teorico` int(5) NOT NULL DEFAULT 0,
  `metodologia` int(5) NOT NULL DEFAULT 0,
  `resultados` int(5) NOT NULL DEFAULT 0,
  `concluciones` int(5) NOT NULL DEFAULT 0,
  `anexos` int(5) NOT NULL DEFAULT 0,
  `bibliografia` int(5) NOT NULL DEFAULT 0,
  `id_documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(20) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `fechacomentario` datetime NOT NULL,
  `cod_comento` int(20) NOT NULL,
  `id_adjunto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comentarios2`
--

CREATE TABLE `comentarios2` (
  `id` int(20) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `fechacomentario` datetime NOT NULL,
  `cod_comento` int(20) NOT NULL,
  `id_adjunto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dificultades`
--

CREATE TABLE `dificultades` (
  `id` int(20) NOT NULL,
  `nombreyapellidos` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fechasolicitud` datetime NOT NULL,
  `estado` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `documento`
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
  `vistop` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `documento`
--
DELIMITER $$
CREATE TRIGGER `avancedocumento` AFTER INSERT ON `documento` FOR EACH ROW INSERT INTO `avance` (`descripcionproblema`, `objetivos`, `justificacion`, `Antecedentes`, `marcoc`, `marcot`, `alcance`, `cronograma`, `presupuesto`, `bibliografia`, `iddocumento`) VALUES ('0', '0', '0', '0', '0', '0', '0', '0', '0', '0',new.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `documento2`
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
  `vistop` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `documento2`
--
DELIMITER $$
CREATE TRIGGER `avacendocumento2` AFTER INSERT ON `documento2` FOR EACH ROW INSERT INTO `avance2` (`resumen`, `introduccion`, `marco_teorico`, `metodologia`, `resultados`, `concluciones`, `id_documento`) VALUES ('0', '0', '0', '0', '0', '0', new.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `documentos_adjuntados`
--

CREATE TABLE `documentos_adjuntados` (
  `id` int(20) NOT NULL,
  `adjunto` varchar(255) DEFAULT NULL,
  `fecha_adjunto` datetime DEFAULT NULL,
  `id_documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `documentos_adjuntados2`
--

CREATE TABLE `documentos_adjuntados2` (
  `id` int(20) NOT NULL,
  `adjunto` varchar(255) NOT NULL,
  `fecha_adjunto` datetime NOT NULL,
  `id_documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`) VALUES
(1, 'Alumno'),
(2, 'Docente'),
(3, 'Administrador'),
(4, 'Invitado');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
  `tema` int(5) NOT NULL DEFAULT 0,
  `tipou` int(5) NOT NULL,
  `ingresa` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nombre1`, `nombre2`, `apellidos`, `codigo`, `password`, `email`, `tel`, `imgperfil`, `imgfondo`, `tema`, `tipou`, `ingresa`) VALUES
('Monkey', 'D', 'Luffy', 12345, '3c80b2e1ef2d80dd6f0d495ec635ea13', 'asdfads@gmail.com', '34141234', 'avatar.png', '10.jpg', 0, 2, 0),
('Ted', NULL, 'Mosby Sierra', 123456, '1a8c97212084a1a62a8f6e97f70eaa8f', 'ted@gmail.com', '45678921', 'avatar.png', '1.jpg', 0, 2, 0),
('Jerónimo', 'Emmanue', 'Lopez Martinez', 6576590, 'b8cd914b0a908319dbecbe642189a4b0', 'emmanuel23@ucp.edu.co', '321878657', 'avatar.png', '12.jpg', 0, 1, 0),
('Maximiliano', '', 'Sanchez Diaz', 8093280, '1e37780ccb6e7dfc79dd7442dff7133a', 'sanchez.diaz@ucp.edu.co', '3117685904', 'avatar.png', '1.jpg', 0, 1, 0),
('Ana', NULL, 'Herrera Valenci', 48949834, 'dfcf83500f5766bec6e61b6feafe22c0', 'valencia@ucp.edu.co', '316987654', 'avatar.png', '10.jpg', 0, 2, 0),
('Alvaro', 'Juan Pablo', 'Aguirre Sierra', 75757575, '793a12d64b5fac4e24919d0c6dc94a9d', 'alvaro@ucp.edu.co', '45678455', 'avatar.png', '10.jpg', 0, 1, 0),
('Miguel ', NULL, 'Vargas Moreno ', 76859403, '951786e9fed37f5de8723d7d77e1e0eb', 'miguel.vargas@ucp.edu.co', '313589095', 'avatar.png', '3.jpg', 0, 2, 0),
('Luciana', '', 'Rodriguez Gomez', 89698676, '306ed77e6327e0018ab356160f431b74', 'luniana.rodriguez@ucp.edu.co', '321457890', 'avatar.png', '4.jpg', 0, 1, 0),
('Gabriela', '', 'Hoyos Garcia', 97608060, '5703b4816dbc25f7407150883ed1852f', 'gabriela.garcia@ucp.edu.co', '32209876567', 'avatar.png', '9.jpg', 0, 1, 0),
('Salome', '', 'Lopez Gonzales', 98765123, '36e8b37f4dc957469ece0692a6e66e11', 'salome.lopez@ucp.edu.co', '322567898', 'avatar.png', '12.jpg', 0, 1, 0),
('Juan', NULL, 'Ruiz Suares', 100456672, '4778123bf98d44bb66d02add14bd6f58', 'david.suares@ucp.edu.co', '3140065234', 'avatar.png', '6.jpg', 0, 2, 0),
('Juan', NULL, 'Ortiz Romero', 120056434, 'c01099ff8684591660d5e43fac352ee5', 'juan.romero@ucp.edu.co', '31588292', 'avatar.png', '5.jpg', 0, 2, 0),
('Invitado', NULL, '.', 123456789, '*******************', '***********@ucp.edu.co', '**********', 'avatar.png', '1.jpg', 0, 4, 0),
('Ana', 'Maria', 'Osorio Hoyos', 342567890, '73de2ae3f2b60d0dbcad1071bf2df5f6', 'ana.osorio@ucp.edu.co', '3114560987', 'avatar.png', '3.jpg', 0, 1, 0),
('Isabella', '', 'Mosquera Hoyos', 675483912, '0d6b534c77372866d172199061f38b6f', 'isabella@ucp.edu.co', '31245698777', 'avatar.png', '8.jpg', 0, 1, 0),
('Juan', ' ', 'Jimenez Castro', 758493012, '41b394758330c83757856aa482c79977', 'sebastia.castro@ucp.edu.co', '312098769', 'avatar.png', '2.jpg', 0, 2, 0),
('Sebastian', '', 'Perez Giraldo', 830495882, '8c54712f16c2683058b8c45e7f8da0b2', 'sebastian12@ucp.edu.co', '321123456', 'avatar.png', '6.jpg', 0, 1, 0),
('Ana', NULL, 'Morales Giraldo', 987987281, 'd6677fedc6bf969533f842f72a4a6791', 'morales.giraldo@ucp.edu.co', '318345678', 'avatar.png', '10.jpg', 0, 2, 0),
('Mateo ', '', 'Nieto Hoyos', 1088342892, '853da5367f3e9565b5dab46eac9254c9', 'mateo.nieto@ucp.edu.co', '3222368431', 'avatar.png', '6.jpg', 0, 1, 0),
('Karen', 'Sofia', 'Nieto Hoyos', 1089936622, 'faa7387fd6ea6bbec9fd5c2cbc8c65d9', 'payomatheo@gmail.com', '234567890', 'avatar.png', '10.jpg', 0, 1, 0),
('Administrador', '.', '.', 1421535676, '848eab1fc78db4867cb3bf65b7eb623d', 'repositorio39@gmail.com', '65793825', 'avatar.png', '8.jpg', 0, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indexes for table `anexos2`
--
ALTER TABLE `anexos2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indexes for table `avance`
--
ALTER TABLE `avance`
  ADD KEY `iddocumento` (`iddocumento`);

--
-- Indexes for table `avance2`
--
ALTER TABLE `avance2`
  ADD KEY `id_documento` (`id_documento`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod-comento` (`cod_comento`,`id_adjunto`),
  ADD KEY `id_adjunto` (`id_adjunto`);

--
-- Indexes for table `comentarios2`
--
ALTER TABLE `comentarios2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod-comento` (`cod_comento`,`id_adjunto`),
  ADD KEY `id_adjunto` (`id_adjunto`);

--
-- Indexes for table `dificultades`
--
ALTER TABLE `dificultades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigouser` (`codigouser`),
  ADD KEY `codigouser2` (`codigouser2`),
  ADD KEY `codigouser2_2` (`codigouser2`);

--
-- Indexes for table `documento2`
--
ALTER TABLE `documento2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigouser` (`codigouser`,`codigouser2`),
  ADD KEY `codigouser2` (`codigouser2`);

--
-- Indexes for table `documentos_adjuntados`
--
ALTER TABLE `documentos_adjuntados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indexes for table `documentos_adjuntados2`
--
ALTER TABLE `documentos_adjuntados2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `tipou` (`tipou`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anexos`
--
ALTER TABLE `anexos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anexos2`
--
ALTER TABLE `anexos2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comentarios2`
--
ALTER TABLE `comentarios2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dificultades`
--
ALTER TABLE `dificultades`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documento`
--
ALTER TABLE `documento`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documento2`
--
ALTER TABLE `documento2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documentos_adjuntados`
--
ALTER TABLE `documentos_adjuntados`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documentos_adjuntados2`
--
ALTER TABLE `documentos_adjuntados2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anexos`
--
ALTER TABLE `anexos`
  ADD CONSTRAINT `anexos_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `anexos2`
--
ALTER TABLE `anexos2`
  ADD CONSTRAINT `anexos2_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento2` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `avance`
--
ALTER TABLE `avance`
  ADD CONSTRAINT `avance_ibfk_1` FOREIGN KEY (`iddocumento`) REFERENCES `documento` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `avance2`
--
ALTER TABLE `avance2`
  ADD CONSTRAINT `avance2_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento2` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`cod_comento`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_3` FOREIGN KEY (`id_adjunto`) REFERENCES `documentos_adjuntados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comentarios2`
--
ALTER TABLE `comentarios2`
  ADD CONSTRAINT `comentarios2_ibfk_2` FOREIGN KEY (`cod_comento`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios2_ibfk_3` FOREIGN KEY (`id_adjunto`) REFERENCES `documentos_adjuntados2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`codigouser`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documento_ibfk_2` FOREIGN KEY (`codigouser2`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `documento2`
--
ALTER TABLE `documento2`
  ADD CONSTRAINT `documento2_ibfk_1` FOREIGN KEY (`codigouser`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documento2_ibfk_2` FOREIGN KEY (`codigouser2`) REFERENCES `usuarios` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `documentos_adjuntados`
--
ALTER TABLE `documentos_adjuntados`
  ADD CONSTRAINT `documentos_adjuntados_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `documentos_adjuntados2`
--
ALTER TABLE `documentos_adjuntados2`
  ADD CONSTRAINT `documentos_adjuntados2_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documento2` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipou`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
