-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2023 a las 15:49:21
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs_sistema_partidas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iglesias`
--

CREATE TABLE `iglesias` (
  `id_iglesia` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `id_municipio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `iglesias`
--

INSERT INTO `iglesias` (`id_iglesia`, `nombre`, `direccion`, `id_municipio`) VALUES
(1, 'Santa Cruz de currulao', 'Crr 50 #50/23-3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `nombre`) VALUES
(1, 'Currulao'),
(2, 'Apartado'),
(3, 'Turbo'),
(4, 'Carepa'),
(5, 'Chigorodo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id_padre` int(11) NOT NULL,
  `nombre_completo` varchar(255) DEFAULT NULL,
  `id_iglesia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar_usuarios`
--

CREATE TABLE `registrar_usuarios` (
  `id_usuariosR` int(11) NOT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `apellido` varchar(300) DEFAULT NULL,
  `usuario` varchar(300) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL,
  `iglesia` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registrar_usuarios`
--

INSERT INTO `registrar_usuarios` (`id_usuariosR`, `nombre`, `apellido`, `usuario`, `clave`, `iglesia`) VALUES
(1, NULL, NULL, NULL, '$2y$10$66ungegaMdoHB', NULL),
(2, NULL, NULL, NULL, '$2y$10$wew74RbgYAcJP', NULL),
(3, NULL, NULL, NULL, '$2y$10$BN5Uk2sQeexHy', NULL),
(4, NULL, NULL, NULL, '$2y$10$1Dg.TI.65rj7L', NULL),
(5, NULL, NULL, NULL, '$2y$10$xk629A.4HXiHI', NULL),
(6, NULL, NULL, NULL, '$2y$10$wTpga2uKiK9/Y', NULL),
(7, NULL, NULL, NULL, '$2y$10$.VvUex1s61kPw', NULL),
(8, NULL, NULL, NULL, '$2y$10$2o22ZRDDels20', NULL),
(9, NULL, NULL, NULL, '$2y$10$VdkABDcGCQO84', NULL),
(10, NULL, NULL, NULL, '$2y$10$ez/olkZtTtjnR', NULL),
(11, NULL, NULL, NULL, '$2y$10$vb6s7bcHMSv93', NULL),
(12, NULL, NULL, NULL, '$2y$10$um9ANJbAyBDST', NULL),
(13, NULL, NULL, NULL, '$2y$10$rceGgDl/29A2N', NULL),
(14, NULL, NULL, NULL, '$2y$10$arT8zC9P0f2ve', NULL),
(15, NULL, NULL, NULL, '$2y$10$muFhGw9rUILGV', NULL),
(16, NULL, NULL, NULL, '$2y$10$yBbfAJ9I5Xauy', NULL),
(17, NULL, NULL, NULL, '$2y$10$wExJVfnggIo03', NULL),
(18, NULL, NULL, NULL, '$2y$10$vRXLmbuXed.Ir', NULL),
(19, NULL, NULL, NULL, '$2y$10$NcOtbDNjCzmxe', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_bautismo`
--

CREATE TABLE `registro_bautismo` (
  `id_bautismo` int(11) NOT NULL,
  `fecha_bautismo` date DEFAULT NULL,
  `nombre_completo` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `lugar_nacimiento` varchar(255) DEFAULT NULL,
  `hijo_de` varchar(255) DEFAULT NULL,
  `abuelos_paternos` varchar(255) DEFAULT NULL,
  `abuelos_maternos` varchar(255) DEFAULT NULL,
  `padrinos` varchar(255) DEFAULT NULL,
  `id_padre_ministro` int(11) DEFAULT NULL,
  `id_padre_da_fe` int(11) DEFAULT NULL,
  `libro` varchar(255) DEFAULT NULL,
  `folio` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_comunion`
--

CREATE TABLE `registro_comunion` (
  `id_comunion` int(11) NOT NULL,
  `fecha_comunion` date DEFAULT NULL,
  `nombre_completo` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `edad` varchar(225) DEFAULT NULL,
  `hijo_de` varchar(225) DEFAULT NULL,
  `bautizado_en` varchar(255) DEFAULT NULL,
  `id_padre_da_fe` int(11) DEFAULT NULL,
  `id_padre_ministro` int(11) DEFAULT NULL,
  `libro` varchar(255) DEFAULT NULL,
  `folio` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_confirmacion`
--

CREATE TABLE `registro_confirmacion` (
  `id_confirmacion` int(11) NOT NULL,
  `confirmado_a` varchar(255) DEFAULT NULL,
  `nombre_completo` varchar(255) DEFAULT NULL,
  `edad` varchar(255) DEFAULT NULL,
  `hijo_de` varchar(255) DEFAULT NULL,
  `confirmado_por` varchar(255) DEFAULT NULL,
  `padrino` varchar(255) DEFAULT NULL,
  `bautizado_en` varchar(255) DEFAULT NULL,
  `id_padre_da_fe` int(11) DEFAULT NULL,
  `libro` varchar(255) DEFAULT NULL,
  `folio` varchar(255) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_defuncion`
--

CREATE TABLE `registro_defuncion` (
  `id_defuncion` int(11) NOT NULL,
  `nombre_completo` varchar(255) DEFAULT NULL,
  `lugar_nacimiento` varchar(255) DEFAULT NULL,
  `hija_de` varchar(255) DEFAULT NULL,
  `estado_civil` varchar(255) DEFAULT NULL,
  `de` varchar(255) DEFAULT NULL,
  `causa_muerte` varchar(255) DEFAULT NULL,
  `fecha_muerte` date DEFAULT NULL,
  `edad` varchar(255) DEFAULT NULL,
  `sepultada_en` varchar(255) DEFAULT NULL,
  `fecha_sepultura` date DEFAULT NULL,
  `id_padre_da_fe` int(11) DEFAULT NULL,
  `libro` varchar(255) DEFAULT NULL,
  `folio` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_matrimonio`
--

CREATE TABLE `registro_matrimonio` (
  `id_matrimonio` int(11) NOT NULL,
  `a` varchar(255) DEFAULT NULL,
  `id_presbitero` int(11) DEFAULT NULL,
  `contrajo` varchar(255) DEFAULT NULL,
  `estadoCivil` varchar(255) DEFAULT NULL,
  `hijo_de` varchar(255) DEFAULT NULL,
  `bautizadoEn` varchar(255) DEFAULT NULL,
  `fechaBautismo` date DEFAULT NULL,
  `con` varchar(255) DEFAULT NULL,
  `estado_civil` varchar(255) DEFAULT NULL,
  `hija_de` varchar(255) DEFAULT NULL,
  `bautizada_en` varchar(255) DEFAULT NULL,
  `fecha_bautismo` date DEFAULT NULL,
  `testigos` varchar(255) DEFAULT NULL,
  `parroquia` int(11) DEFAULT NULL,
  `id_padre_da_fe` int(11) DEFAULT NULL,
  `libro` varchar(255) DEFAULT NULL,
  `folio` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sacramentos`
--

CREATE TABLE `sacramentos` (
  `id_sacramento` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `sacramento` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `lugar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `cargo`) VALUES
(1, 'auxiliar', '12345', 'auxiliar'),
(2, 'administrador', '12345', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `iglesias`
--
ALTER TABLE `iglesias`
  ADD PRIMARY KEY (`id_iglesia`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id_padre`),
  ADD KEY `id_iglesia` (`id_iglesia`);

--
-- Indices de la tabla `registrar_usuarios`
--
ALTER TABLE `registrar_usuarios`
  ADD PRIMARY KEY (`id_usuariosR`);

--
-- Indices de la tabla `registro_bautismo`
--
ALTER TABLE `registro_bautismo`
  ADD PRIMARY KEY (`id_bautismo`),
  ADD KEY `id_padre_ministro` (`id_padre_ministro`),
  ADD KEY `id_padre_da_fe` (`id_padre_da_fe`);

--
-- Indices de la tabla `registro_comunion`
--
ALTER TABLE `registro_comunion`
  ADD PRIMARY KEY (`id_comunion`),
  ADD KEY `id_padre_ministro` (`id_padre_ministro`),
  ADD KEY `id_padre_da_fe` (`id_padre_da_fe`);

--
-- Indices de la tabla `registro_confirmacion`
--
ALTER TABLE `registro_confirmacion`
  ADD PRIMARY KEY (`id_confirmacion`),
  ADD KEY `id_padre_da_fe` (`id_padre_da_fe`);

--
-- Indices de la tabla `registro_defuncion`
--
ALTER TABLE `registro_defuncion`
  ADD PRIMARY KEY (`id_defuncion`),
  ADD KEY `id_padre_da_fe` (`id_padre_da_fe`);

--
-- Indices de la tabla `registro_matrimonio`
--
ALTER TABLE `registro_matrimonio`
  ADD PRIMARY KEY (`id_matrimonio`),
  ADD KEY `id_presbitero` (`id_presbitero`),
  ADD KEY `parroquia` (`parroquia`),
  ADD KEY `id_padre_da_fe` (`id_padre_da_fe`);

--
-- Indices de la tabla `sacramentos`
--
ALTER TABLE `sacramentos`
  ADD PRIMARY KEY (`id_sacramento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `iglesias`
--
ALTER TABLE `iglesias`
  MODIFY `id_iglesia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id_padre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registrar_usuarios`
--
ALTER TABLE `registrar_usuarios`
  MODIFY `id_usuariosR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `registro_bautismo`
--
ALTER TABLE `registro_bautismo`
  MODIFY `id_bautismo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_comunion`
--
ALTER TABLE `registro_comunion`
  MODIFY `id_comunion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_confirmacion`
--
ALTER TABLE `registro_confirmacion`
  MODIFY `id_confirmacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_defuncion`
--
ALTER TABLE `registro_defuncion`
  MODIFY `id_defuncion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_matrimonio`
--
ALTER TABLE `registro_matrimonio`
  MODIFY `id_matrimonio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sacramentos`
--
ALTER TABLE `sacramentos`
  MODIFY `id_sacramento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `padres_ibfk_1` FOREIGN KEY (`id_iglesia`) REFERENCES `iglesias` (`id_iglesia`);

--
-- Filtros para la tabla `registro_bautismo`
--
ALTER TABLE `registro_bautismo`
  ADD CONSTRAINT `registro_bautismo_ibfk_1` FOREIGN KEY (`id_padre_ministro`) REFERENCES `padres` (`id_padre`),
  ADD CONSTRAINT `registro_bautismo_ibfk_2` FOREIGN KEY (`id_padre_da_fe`) REFERENCES `padres` (`id_padre`);

--
-- Filtros para la tabla `registro_comunion`
--
ALTER TABLE `registro_comunion`
  ADD CONSTRAINT `registro_comunion_ibfk_1` FOREIGN KEY (`id_padre_ministro`) REFERENCES `padres` (`id_padre`),
  ADD CONSTRAINT `registro_comunion_ibfk_2` FOREIGN KEY (`id_padre_da_fe`) REFERENCES `padres` (`id_padre`);

--
-- Filtros para la tabla `registro_confirmacion`
--
ALTER TABLE `registro_confirmacion`
  ADD CONSTRAINT `registro_confirmacion_ibfk_1` FOREIGN KEY (`id_padre_da_fe`) REFERENCES `padres` (`id_padre`);

--
-- Filtros para la tabla `registro_defuncion`
--
ALTER TABLE `registro_defuncion`
  ADD CONSTRAINT `registro_defuncion_ibfk_1` FOREIGN KEY (`id_padre_da_fe`) REFERENCES `padres` (`id_padre`);

--
-- Filtros para la tabla `registro_matrimonio`
--
ALTER TABLE `registro_matrimonio`
  ADD CONSTRAINT `registro_matrimonio_ibfk_1` FOREIGN KEY (`id_presbitero`) REFERENCES `padres` (`id_padre`),
  ADD CONSTRAINT `registro_matrimonio_ibfk_2` FOREIGN KEY (`parroquia`) REFERENCES `iglesias` (`id_iglesia`),
  ADD CONSTRAINT `registro_matrimonio_ibfk_3` FOREIGN KEY (`id_padre_da_fe`) REFERENCES `padres` (`id_padre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
