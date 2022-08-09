-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2022 a las 04:05:56
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
(1, 'Encofrados horizontales', 'Sistemas provisionales en el vaciado de concreto para losas en edificaciones  y puentes', '2022-07-17 23:21:42'),
(2, 'Encofrados verticales', 'Sistemas provisionales en el vaciado de concreto para muros, pilas y columnas', '2022-08-02 03:00:49'),
(3, 'Soluciones especiales', 'Encofrados fabricados a la medida de acuerdo a los diseños requeridos por la obra, estos se producen para ser compatibles con los sistemas estándar IC', '2022-08-02 03:00:56'),
(4, 'MADE Línea de maderas', 'Tableros y vigas de madera para encofrar que mejoran la productividad de su obra', '2022-08-02 03:01:03');

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
(1, 1, '1', 'Supraflex FT', 'Encofrado para losa ', '', 20, 2500, 2700, 0, '2022-08-02 03:22:35'),
(2, 1, '2', 'Supraflex MB120', 'Encofrado para losa infraestructura', '', 21, 2501, 2701, 0, '2022-08-02 03:22:35'),
(3, 1, '3', 'Supraflex S20', 'Encofrado para losa con vigas de madera', '', 22, 2502, 2702, 0, '2022-08-02 03:22:35'),
(4, 1, '4', 'Cimbra IE80 ', 'Andamio multidireccional', '', 23, 2503, 2703, 0, '2022-08-02 03:22:35'),
(5, 1, '5', 'Cimbra IE40', 'Andamio de fachada', '', 24, 2504, 2704, 0, '2022-08-02 03:22:35'),
(6, 1, '6', 'Torre de carga MR40', 'Andamio de carga tipo marco', '', 25, 2505, 2705, 0, '2022-08-02 03:22:35'),
(7, 1, '7', 'Puntales IE', 'Puntales galvanizados', '', 26, 2506, 2706, 0, '2022-08-02 03:22:35'),
(8, 2, '8', 'Formax Plus', 'Encofrado para muro ', '', 27, 2507, 2707, 0, '2022-08-02 03:22:35'),
(9, 3, '9', 'Sistemas de túneles', 'Para minas y obras maritimas', '', 28, 2508, 2708, 0, '2022-08-02 03:47:37'),
(10, 4, '10', 'Tablero fenolico Birch', 'Tablero de madera', '', 29, 2509, 2709, 0, '2022-08-02 03:47:50');

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
(1, 'Juan Ortiz', 'jdoc', '$2a$07$usesomesillystringforeKOuYMWUWeSJOrbntG03s1r0uZaWFQ6a', 'Calidad', 'vistas/img/usuarios/jdoc/740.png', 1, '2022-08-03 20:21:45', '2022-08-04 01:21:45'),
(11, 'Sandra', 'smat', '$2a$07$usesomesillystringforeAsrcUvSHfvjeXZVab95KMzVFTKHMno6', 'Comunicaciones', 'vistas/img/usuarios/smat/541.png', 1, '2022-07-28 20:21:36', '2022-07-29 01:29:19'),
(13, 'Administrador', 'admin', '$2a$07$usesomesillystringforegFOeQOp8RK/V8Yn0LZIZwSlh5IkndD.', 'Administrador', 'vistas/img/usuarios/admin/907.png', 1, '2022-08-08 21:02:49', '2022-08-09 02:02:49'),
(14, 'Felixa', 'felixa', '$2a$07$usesomesillystringfore/8DuLOJO10KZhYu1Ds3c.Ho3cJFcipW', 'Comercial', 'vistas/img/usuarios/felixa/273.png', 1, '2022-07-28 20:30:17', '2022-07-29 01:30:17'),
(15, 'Brisa', 'brisa', '$2a$07$usesomesillystringforeYOH51VS4Rx8j79miMvxvbu18Go.NFDa', 'Auditoria', 'vistas/img/usuarios/brisa/515.png', 1, '2022-07-28 20:30:38', '2022-07-29 01:30:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
