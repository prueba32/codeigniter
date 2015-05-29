-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-05-2015 a las 21:50:13
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `id` varchar(30) NOT NULL,
  `rut` varchar(30) NOT NULL,
  `patente` varchar(30) NOT NULL,
  `fechaarriendo` varchar(30) NOT NULL,
  `fechaentrega` varchar(30) NOT NULL,
  `nboleta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automoviles`
--

CREATE TABLE `automoviles` (
`id` int(5) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `patente` varchar(50) NOT NULL,
  `nchasis` varchar(50) NOT NULL,
  `anio` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nasientos` varchar(50) NOT NULL,
  `capacidadcarga` varchar(50) NOT NULL,
  `tipocombustible` varchar(50) NOT NULL,
  `traccion` varchar(50) NOT NULL,
  `estadofisico` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `automoviles`
--

INSERT INTO `automoviles` (`id`, `marca`, `modelo`, `patente`, `nchasis`, `anio`, `color`, `foto`, `nasientos`, `capacidadcarga`, `tipocombustible`, `traccion`, `estadofisico`, `categoria`, `estado`) VALUES
(4, 'x', 'x', 'x', '0', 'x', 'x', '', '0', '0', '0', 'x', 'x', 'x', 'x'),
(5, 'n', 'n', 'n', 'n', 'n', 'n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n'),
(6, 't', 't', 't', 't', 't', 't', '', 't', 't', 't', 't', 't', 't', 't'),
(7, 'n', 'n', 'n', 'n', 'n', '', 'Captura de pantalla 2015-05-25 a la(s) 12.08.05.pn', 'n', 'n', 'n', 'n', 'n', 'n', 'n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `codigo` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`codigo`, `nombre`) VALUES
(1, 'sedan'),
(2, 'deportivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('4433d3c4da455597ca1cd9130755dcdb', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1432835220, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"1";s:8:"username";s:9:"sebastian";s:6:"status";s:1:"1";}'),
('b531f78cca534c45b823211d29ce190d', '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', 1432838055, 'a:4:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"1";s:8:"username";s:9:"sebastian";s:6:"status";s:1:"1";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clienteautoalquiler`
--

CREATE TABLE `clienteautoalquiler` (
  `id` int(20) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `patente` varchar(20) NOT NULL,
  `boleta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
`id` int(5) unsigned NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `rut` varchar(50) NOT NULL,
  `fechanacimiento` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `tarjetabancaria` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `fecha_arriendo` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `rut`, `fechanacimiento`, `nacionalidad`, `direccion`, `empresa`, `tarjetabancaria`, `telefono`, `estado`, `fecha_arriendo`) VALUES
(1, 'seba', 'andia', '17670182-k', '09/08/1991', 'chile', '1', 'mvc', '990009876678', '89173710', 'si', '2015-05-26'),
(2, 'andia', 'agarcia', '18998009', '88789009', 'chile', '3', 'lalalla', '0909090', '90909090', 'si', '2015-05-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
`id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `idprovincia` int(20) NOT NULL,
  `provincia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`idprovincia`, `provincia`) VALUES
(1, 'talca'),
(2, 'stgo'),
(3, 'linares');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 'sebastian', '$2a$08$dac4v5LkUd.9VZtHXOZA9uTuDxqd.LG2qVs5gLSEti/oU7/qm0V72', 'sebaa2122@gmail.com', 1, 0, NULL, NULL, NULL, NULL, 'ef5dd270f27214d32b0df8f0e91f229f', '::1', '2015-05-28 20:04:50', '2015-04-15 17:24:32', '2015-05-28 18:04:50'),
(2, 'daniel', '$2a$08$cnCJh.zh2uuHiAwwRl5IGu9s81zNzdsT4483/T9BgZfqbPHK0zmHy', 'ahhaha@jajaj.cl', 0, 0, NULL, NULL, NULL, NULL, '76518e9faadcb96daceadab252af0933', '::1', '0000-00-00 00:00:00', '2015-04-27 18:26:16', '2015-04-27 16:26:16'),
(3, 'aaaaa', '$2a$08$8S/KmoIaGOvCUcYkMSdTnOIBNW0agsCtdKhCf2B8qtP0MMPySC9kC', 'aaaaaa@gaka.cl', 0, 0, NULL, NULL, NULL, NULL, '9830a44f2bdbb09d203c7407f39c584d', '::1', '0000-00-00 00:00:00', '2015-04-27 18:31:49', '2015-04-27 16:31:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_profiles`
--

CREATE TABLE `user_profiles` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
 ADD PRIMARY KEY (`id`), ADD KEY `fechaarriendo` (`fechaarriendo`), ADD KEY `fechaentrega` (`fechaentrega`), ADD KEY `nboleta` (`nboleta`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`);

--
-- Indices de la tabla `automoviles`
--
ALTER TABLE `automoviles`
 ADD PRIMARY KEY (`id`), ADD KEY `patente` (`patente`), ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`);

--
-- Indices de la tabla `clienteautoalquiler`
--
ALTER TABLE `clienteautoalquiler`
 ADD KEY `id` (`id`), ADD KEY `rut` (`rut`), ADD KEY `patente` (`patente`), ADD KEY `boleta` (`boleta`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id`), ADD KEY `rut` (`rut`), ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_autologin`
--
ALTER TABLE `user_autologin`
 ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indices de la tabla `user_profiles`
--
ALTER TABLE `user_profiles`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `automoviles`
--
ALTER TABLE `automoviles`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `user_profiles`
--
ALTER TABLE `user_profiles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clienteautoalquiler`
--
ALTER TABLE `clienteautoalquiler`
ADD CONSTRAINT `clienteautoalquiler_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `alquiler` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
