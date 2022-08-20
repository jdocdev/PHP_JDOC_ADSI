-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2022 a las 06:33:11
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_jdoc_adsi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `descripcion`, `fecha`) VALUES
(100, 'Encofrados horizontales', 'Sistemas provisionales en el vaciado de concreto para losas en edificaciones  y puentes', '2022-08-10 00:55:33'),
(200, 'Encofrados verticales', 'Sistemas provisionales en el vaciado de concreto para muros, pilas y columnas', '2022-08-10 00:55:47'),
(300, 'Soluciones especiales', 'Encofrados fabricados a la medida de acuerdo a los diseños requeridos por la obra, estos se producen para ser compatibles con los sistemas estándar IC', '2022-08-10 00:55:40'),
(400, 'MADE Línea de maderas', 'Tableros y vigas de madera para encofrar que mejoran la productividad de su obra', '2022-08-10 00:55:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `direccion` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `fecha`) VALUES
(1, 'Juan Ortiz', 1754124685, 'juan@example.com', '(300) 548-3127', 'Calle 47 #75-13', '1994-02-05', 0, '2022-08-20 04:32:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `producto` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `producto`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(1, 100, '101', 'Supraflex FT', 'Encofrado para losa ', 'vistas/img/productos/101/187.png', 20, 200, 280, 0, '2022-08-12 01:17:38'),
(2, 100, '102', 'Supraflex MB120', 'Encofrado para losa infraestructura', 'vistas/img/productos/102/353.png', 2, 2501, 2701, 0, '2022-08-12 01:18:21'),
(3, 100, '103', 'Supraflex S20', 'Encofrado para losa con vigas de madera', 'vistas/img/productos/103/392.png', 22, 2502, 2702, 0, '2022-08-12 01:18:55'),
(4, 100, '104', 'Cimbra IE80 ', 'Andamio multidireccional', 'vistas/img/productos/104/669.png', 23, 2503, 2703, 0, '2022-08-12 01:19:31'),
(5, 100, '105', 'Cimbra IE40', 'Andamio de fachada', 'vistas/img/productos/105/352.png', 6, 2504, 2704, 0, '2022-08-12 01:20:18'),
(6, 100, '106', 'Torre de carga MR40', 'Andamio de carga tipo marco', 'vistas/img/productos/106/924.png', 25, 2505, 2705, 0, '2022-08-12 01:20:52'),
(7, 100, '107', 'Puntales IE', 'Puntales galvanizados', 'vistas/img/productos/107/212.png', 26, 2506, 2706, 0, '2022-08-12 01:21:54'),
(8, 200, '201', 'Formax Plus', 'Encofrado para muro ', 'vistas/img/productos/201/478.png', 27, 2507, 2707, 0, '2022-08-12 01:22:25'),
(9, 300, '301', 'Sistemas de túneles', 'Para minas y obras maritimas', 'vistas/img/productos/301/624.png', 28, 2508, 2708, 0, '2022-08-12 01:23:04'),
(10, 400, '401', 'Tablero fenolico Birch', 'Tablero de madera', 'vistas/img/productos/401/819.png', 29, 2509, 2709, 0, '2022-08-12 01:23:34'),
(11, 200, '202', 'Formax Nuvo', 'Encofrado ligero para muro', 'vistas/img/productos/202/373.png', 50, 500, 700, 0, '2022-08-12 01:24:03'),
(12, 200, '203', 'Formax Pilar Plus', 'Encofrado para columna', 'vistas/img/productos/203/290.png', 120, 400, 560, 0, '2022-08-12 01:24:56'),
(13, 200, '204', 'Formax Circular', 'Encofrado muro circular', 'vistas/img/productos/204/906.png', 54, 50, 70, 0, '2022-08-12 01:15:36'),
(14, 200, '205', 'Formax PM', 'Encofrados para columnas circulares', 'vistas/img/productos/205/730.png', 87, 98.99, 138.586, 0, '2022-08-11 02:51:28'),
(18, 200, '206', 'Peak', 'Consolas trepantes', 'vistas/img/productos/206/295.png', 12, 231, 323.4, 0, '2022-08-13 01:22:40'),
(19, 200, '207', 'Panel liviano', 'Paneles portables y accesorios de rápido ensamble', 'vistas/img/productos/207/191.png', 123, 1231, 1723.4, 0, '2022-08-13 01:24:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Juan David', 'jdoc', '$2a$07$usesomesillystringforeKOuYMWUWeSJOrbntG03s1r0uZaWFQ6a', 'Calidad', 'vistas/img/usuarios/jdoc/740.png', 1, '2022-08-03 20:21:45', '2022-08-15 01:40:37'),
(11, 'Sandra', 'smat', '$2a$07$usesomesillystringforeAsrcUvSHfvjeXZVab95KMzVFTKHMno6', 'Comunicaciones', 'vistas/img/usuarios/smat/541.png', 1, '2022-07-28 20:21:36', '2022-07-29 01:29:19'),
(13, 'Administrador', 'admin', '$2a$07$usesomesillystringforegFOeQOp8RK/V8Yn0LZIZwSlh5IkndD.', 'Administrador', 'vistas/img/usuarios/admin/907.png', 1, '2022-08-13 22:13:57', '2022-08-14 03:13:57'),
(14, 'Felixa', 'felixa', '$2a$07$usesomesillystringfore/8DuLOJO10KZhYu1Ds3c.Ho3cJFcipW', 'Comercial', 'vistas/img/usuarios/felixa/273.png', 1, '2022-08-14 20:29:10', '2022-08-15 01:29:10'),
(15, 'Brisa', 'brisa', '$2a$07$usesomesillystringforeYOH51VS4Rx8j79miMvxvbu18Go.NFDa', 'Auditoria', 'vistas/img/usuarios/brisa/515.png', 1, '2022-07-28 20:30:38', '2022-07-29 01:30:38'),
(16, 'Ramona', 'ramona', '$2a$07$usesomesillystringforewe7qzEJtMmo4B8NSrsfm2fbWNHa5DjG', 'Auditoria', 'vistas/img/usuarios/ramona/196.png', 1, '0000-00-00 00:00:00', '2022-08-15 01:40:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
