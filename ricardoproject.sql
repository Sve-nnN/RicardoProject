-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 03:52:06
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ricardoproject`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `id_nombre` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `distribuidor` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `costo` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `idconsulta` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `marca`, `modelo`, `id_nombre`, `nombre`, `stock`, `distribuidor`, `fecha`, `tipo`, `costo`, `descripcion`, `idconsulta`) VALUES
(7, 'Samsung', '32 pulgadas', 'Pan-12', 'Pantalla 32', '12', 'samsung', '2021-12-09', 'Periferico Salida', '120', 'Pantalla Grande', 0),
(8, 'Samsung', 'frf', '13', 'juan', '4', '42', '2023-02-28', 'Periferico Almacenamiento', '422', '24', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `contrato` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `nombre`, `tipo`, `contrato`, `cedula`) VALUES
(1, 'admin', '18237', 'Luis', '2', 'snd-18182', '18237258'),
(2, 'tecnico', '24245', 'Luiseida', '1', 'snd-78789', '24186480'),
(3, 'juancho', '123456789', 'Juancho Defensa', '', '138418347', '34234223'),
(4, 'juancho', '123456789', 'Juancho Defensa', '', '138418347', '34234223'),
(5, 'tu madre', 'tu padre', 'tu mama y papa', '1', '12837182', '696969'),
(6, 'Juan', 'qwerqwerwqerq', 'asdfasd', '1', '232323', '324341'),
(7, 'Juan', 'qwerqwerwqerq', 'asdfasd', '1', '232323', '324341');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(255) NOT NULL,
  `marca` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id_nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(255) NOT NULL,
  `distribuidor` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `costo` int(255) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idconsulta` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `marca`, `modelo`, `id_nombre`, `nombre`, `stock`, `distribuidor`, `fecha`, `tipo`, `costo`, `descripcion`, `idconsulta`) VALUES
(1, 'Samsung', 'frf', '13', 'juan', 4, '42', '2023-03-15', 'Periferico Salida', 422, '24', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
