-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2024 a las 01:40:20
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cotiza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotiza`
--

CREATE TABLE `cotiza` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre de la Empresa',
  `Proyecto` varchar(50) NOT NULL COMMENT 'Nro Proyecto',
  `fechas` date NOT NULL COMMENT 'Fecha que se realiza la Cotizacion',
  `dias` int(5) NOT NULL COMMENT 'Dias previstos ',
  `dias_planta` int(5) NOT NULL COMMENT 'Cantidad de dias a estar en Planta',
  `valor_dia` float NOT NULL COMMENT 'Valor del dia de trabajo',
  `Cant_km` int(11) NOT NULL COMMENT 'Kilometros entre Casa y Cliente',
  `obs` text NOT NULL COMMENT 'Observaciones'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotiza`
--

INSERT INTO `cotiza` (`id`, `Nombre`, `Proyecto`, `fechas`, `dias`, `dias_planta`, `valor_dia`, `Cant_km`, `obs`) VALUES
(38, 'Acis Corp', 'P28 Alvano', '2024-06-28', 67, 5, 57000, 45, 'ooooooooooooooooooooooo sdffffffffffffffffffffff'),
(39, 'Este estaba Oculto', 'No se Veia', '2024-05-02', 25, 6, 78500, 123, ''),
(53, 'Romina', 'casa', '2024-05-19', 5, 3, 85000, 19, 'mudanza frustrante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valores`
--

CREATE TABLE `valores` (
  `id_p` int(11) NOT NULL,
  `id` int(11) NOT NULL COMMENT 'ID de tabla cotiza',
  `Cot_Dolar` float NOT NULL COMMENT 'Cotizacion Actual del Dolar',
  `valor_combus` float NOT NULL COMMENT 'Valor del Combustible',
  `valor_seguro` float NOT NULL COMMENT 'Valor del seguro por dia de asis. en planta',
  `valor_peaje` float NOT NULL COMMENT 'Valor de los peajes',
  `valor_cotizar` float NOT NULL COMMENT 'Valor del dia de cotizacion',
  `Cant_dias_cot` int(3) NOT NULL COMMENT 'Cantidad de dias que se requirio para cotizar',
  `ruedas` float NOT NULL COMMENT 'Valor a calcular para el desgaste de ruedas por km',
  `porcentaje` float NOT NULL DEFAULT 3.5 COMMENT 'Porcentaje a sumar para algunos casos',
  `ganancias` float NOT NULL DEFAULT 0.5 COMMENT 'Porcentaje a sumar por retencion de ganancias'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `valores`
--

INSERT INTO `valores` (`id_p`, `id`, `Cot_Dolar`, `valor_combus`, `valor_seguro`, `valor_peaje`, `valor_cotizar`, `Cant_dias_cot`, `ruedas`, `porcentaje`, `ganancias`) VALUES
(11, 38, 923.58, 2700, 260, 1200, 35000, 2, 350, 2.5, 3.5),
(26, 53, 930, 3000, 250, 990, 35000, 2, 3000, 5, 4.5),
(27, 39, 1758, 3500, 350, 700, 43500, 1, 1200, 11.5, 8.5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cotiza`
--
ALTER TABLE `cotiza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valores`
--
ALTER TABLE `valores`
  ADD PRIMARY KEY (`id_p`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cotiza`
--
ALTER TABLE `cotiza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `valores`
--
ALTER TABLE `valores`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
