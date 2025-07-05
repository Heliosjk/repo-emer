-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2025 a las 23:22:46
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `presentacion_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_presentacion` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `texto_comentario` text NOT NULL,
  `fecha_comentario` datetime DEFAULT current_timestamp(),
  `seccion_afectada` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(100) NOT NULL,
  `fecha_creacion` datetime DEFAULT current_timestamp(),
  `id_jefe_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembro_grupo`
--

CREATE TABLE `miembro_grupo` (
  `id_miembro_grupo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `fecha_union` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion_trabajo`
--

CREATE TABLE `presentacion_trabajo` (
  `id_presentacion` int(11) NOT NULL,
  `id_trabajo` int(11) NOT NULL,
  `id_jefe_grupo` int(11) NOT NULL,
  `fecha_presentacion` datetime DEFAULT current_timestamp(),
  `estado` enum('presentado','devuelto','aprobado','calificado') DEFAULT 'presentado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `id_trabajo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_asignacion` datetime DEFAULT current_timestamp(),
  `fecha_entrega_limite` datetime NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_docente_asignado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `rol` enum('colaborador','lider_grupo','docente') NOT NULL,
  `fecha_registro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `version_trabajo`
--

CREATE TABLE `version_trabajo` (
  `id_version` int(11) NOT NULL,
  `id_trabajo` int(11) NOT NULL,
  `numero_version` int(11) NOT NULL,
  `contenido_texto` text DEFAULT NULL,
  `ruta_imagen` varchar(255) DEFAULT NULL,
  `ruta_documento` varchar(255) DEFAULT NULL,
  `fecha_subida` datetime DEFAULT current_timestamp(),
  `subido_por_usuario` int(11) NOT NULL,
  `es_version_presentada` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_presentacion` (`id_presentacion`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `id_jefe_grupo` (`id_jefe_grupo`);

--
-- Indices de la tabla `miembro_grupo`
--
ALTER TABLE `miembro_grupo`
  ADD PRIMARY KEY (`id_miembro_grupo`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`,`id_grupo`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `presentacion_trabajo`
--
ALTER TABLE `presentacion_trabajo`
  ADD PRIMARY KEY (`id_presentacion`),
  ADD UNIQUE KEY `id_trabajo` (`id_trabajo`),
  ADD KEY `id_jefe_grupo` (`id_jefe_grupo`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`id_trabajo`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_docente_asignado` (`id_docente_asignado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `version_trabajo`
--
ALTER TABLE `version_trabajo`
  ADD PRIMARY KEY (`id_version`),
  ADD UNIQUE KEY `id_trabajo` (`id_trabajo`,`numero_version`),
  ADD KEY `subido_por_usuario` (`subido_por_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `miembro_grupo`
--
ALTER TABLE `miembro_grupo`
  MODIFY `id_miembro_grupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `presentacion_trabajo`
--
ALTER TABLE `presentacion_trabajo`
  MODIFY `id_presentacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `version_trabajo`
--
ALTER TABLE `version_trabajo`
  MODIFY `id_version` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_presentacion`) REFERENCES `presentacion_trabajo` (`id_presentacion`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`id_jefe_grupo`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `miembro_grupo`
--
ALTER TABLE `miembro_grupo`
  ADD CONSTRAINT `miembro_grupo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `miembro_grupo_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`);

--
-- Filtros para la tabla `presentacion_trabajo`
--
ALTER TABLE `presentacion_trabajo`
  ADD CONSTRAINT `presentacion_trabajo_ibfk_1` FOREIGN KEY (`id_trabajo`) REFERENCES `trabajo` (`id_trabajo`),
  ADD CONSTRAINT `presentacion_trabajo_ibfk_2` FOREIGN KEY (`id_jefe_grupo`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `trabajo_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`),
  ADD CONSTRAINT `trabajo_ibfk_2` FOREIGN KEY (`id_docente_asignado`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `version_trabajo`
--
ALTER TABLE `version_trabajo`
  ADD CONSTRAINT `version_trabajo_ibfk_1` FOREIGN KEY (`id_trabajo`) REFERENCES `trabajo` (`id_trabajo`),
  ADD CONSTRAINT `version_trabajo_ibfk_2` FOREIGN KEY (`subido_por_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
