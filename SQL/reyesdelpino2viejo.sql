-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2018 a las 21:27:57
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reyesdelpino2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muebles`
--

CREATE TABLE `muebles` (
  `id_mueble` int(12) NOT NULL,
  `nombre` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `color` text NOT NULL,
  `medida` text NOT NULL,
  `tipos` int(12) NOT NULL,
  `fecha` int(11) NOT NULL,
  `pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `muebles`
--

INSERT INTO `muebles` (`id_mueble`, `nombre`, `descripcion`, `precio`, `imagen`, `color`, `medida`, `tipos`, `fecha`, `pago`) VALUES
(2, 'Mesa Comedor', 'Es una mesa familiar hecha de madera de roble, popularmente, es conocida como una de las mesas mas', 4534, 'Imagenes/Productos/1540258492-login.jpg', 'Marron', '30x20', 3, 20180905, 0),
(4, 'Mesa Comedor', 'Es una mesa familiar hecha de madera de abedul, popularmente, es conocida como una de las mesas mas ', 1600, 'Imagenes/Productos/1538528001-mesa.jpg', 'Marron  Claro', '60x100', 1, 20180905, 0),
(5, 'Mesa Comedor', 'Es una mesa familiar hecha de madera y acero, popularmente, es conocida como una de las mesas mas co', 3500, 'Imagenes/Productos/1538528678-mesa7.jpg', 'Marron ', '50x170', 1, 20180905, 0),
(6, 'Mesa Comedor', 'Es una mesa rustica basada en mesas antiguas, popularmente, es conocida como una de las mesas mas ra', 3000, 'Imagenes/Productos/1538528360-mesar4.jpg', 'Marron Oscuro', '50x150', 2, 20180905, 0),
(7, 'Mesa Comedor', 'Es una mesa rustica basada en mesas antiguas, popularmente, es conocida como una de las mesas mas ra', 5000, 'Imagenes/Productos/1538528516-mesar.jpg', 'Marron Claro', '50x160', 2, 20180905, 0),
(8, 'Mesa Comedor', 'Es una mesa rustica basada en mesas antiguas, popularmente, es conocida como una de las mesas mas ra', 4000, 'Imagenes/Productos/1538528648-mesar4.jpg', 'Marron Claro', '60x160', 2, 20180905, 0),
(9, 'Mesa Comedor', 'Es una mesa rustica basada en mesas antiguas, popularmente, es conocida como una de las mesas mas ra', 1600, 'Imagenes/Productos/1538528668-mesar5.jpg', 'Marron Oscuro', '90x160', 2, 20180905, 0),
(10, 'Silla', 'Silla hecha de madera, es una de las sillas mas comunes y populares en todo el mundo', 600, 'Imagenes/Productos/1538528706-silla6.jpg', 'Marron Claro', '40x50', 3, 20180905, 0),
(11, 'Silla Moderna', 'Silla moderna excelente para sentarse', 1000, 'Imagenes/Productos/1538539232-dd.jpg', 'Blanco', '30x60', 3, 20180905, 0),
(12, 'Silla Antigua', 'Silla hecha de madera de roble , es una silla basada en el siglo XIV', 1200, 'Imagenes/Productos/1538539056-sila.jpg', 'Marron Oscuro', '30x60', 3, 20180905, 0),
(14, 'Silla Moderna', 'Silla moderna, poco conocida ', 900, 'Imagenes/Productos/1538539469-sila.jpg', 'Gris', '30x60', 3, 20180905, 0),
(16, 'Silla Moderna', 'Silla moderna, popurlamente conocida en todo el mundo, ideal para la familia', 1700, 'Imagenes/Productos/1538539886-aa.jpg', 'Marron Oscuro', '30x60', 3, 20180905, 0),
(17, 'Silla Comoda', 'Silla comoda ideal para descansar', 1600, 'Imagenes/Productos/1540066351-aa.jpg', 'Negro', '213x12', 3, 20180905, 0),
(18, 'Conejo', 'Conejo tallado en madera de roble claro, popularmente conocido para decorar la casa', 1300, 'Imagenes/Productos/1538528737-escultura.jpg', 'Marron ', '40x50', 4, 20180905, 0),
(19, 'Caballo', 'Caballo tallado en madera de roble', 900, 'Imagenes/Productos/1538528760-escultura2.jpg', 'Marron', '30x40', 4, 20180905, 0),
(20, 'Tigre', 'Es un tigre tallado en madera abedul, ideal para decorar la casa', 2000, 'Imagenes/Productos/1538528778-escultura3.jpg', 'Marron Claro', '30x40', 4, 20180905, 0),
(21, 'Gallo', 'Gallo tallado en madera de abedul poco comun', 800, 'Imagenes/Productos/1538528804-escultura5.jpg', 'Marron Claro', '30x60', 4, 20180905, 0),
(22, 'Tortuga', 'Es una tortuga tallada de madera de roble, muy rara y poco comun', 500, '../Imagenes/Productos/1536165793-escultura4.jpg', 'Marron Claro', '70X40', 4, 20180905, 0),
(23, 'Maceta de barro', 'Maceta moldeada en barro, posteriormente fue horneada', 3000, 'Imagenes/Productos/1538529612-maceta.jpg', 'Marron ', '40x20', 5, 20180905, 0),
(24, 'Maceta Rara', 'Maceta hecha de madera de abedul, poco comun', 2000, 'Imagenes/Productos/1538529653-maceta2.jpg', 'Marron Claro', '60x40', 5, 20180905, 0),
(25, 'Pack cuatro macetas', 'Macetas hechas de madera de abedul, muy poco conocida, perfecta para decorar', 3200, 'Imagenes/Productos/1538529664-maceta3.jpg', 'Blanca', '60x40', 5, 20180905, 0),
(26, 'Pack ocho macetas ', 'Macetas hechas de madera de roble muy oscuro, perfecta para decoraciones', 3500, 'Imagenes/Productos/1538529683-maceta4.jpg', 'Marron Oscuro', '50x50', 5, 20180905, 0),
(27, 'Cajonera ', 'Cajonera normalmente conocida en todo el mundo por su facil uso', 900, 'Imagenes/Productos/1538529703-cajonera.jpg', 'Negra', '140x60', 6, 20180905, 0),
(28, 'Cajonera chica', 'Cajonera normalmente conocida en todo el mundo por su facil uso', 600, 'Imagenes/Productos/1538529714-cajonera2.jpg', 'Marron', '60x80', 6, 20180905, 0),
(29, 'Cajonera Moderna', 'Cajonera moderna, perfecta para chicos', 1500, 'Imagenes/Productos/1538529726-cajonera3.jpg', 'Blanca', '90x60', 6, 20180905, 0),
(30, 'Cama Matrimonial', 'Cama comoda para habitaciones', 1700, 'Imagenes/Productos/1538529738-cama.jpg', 'Marron Oscuro', '40x100', 7, 20180905, 0),
(31, 'Cama', 'Cama individual, muy comoda', 1200, 'Imagenes/Productos/1538529753-cama2.jpg', 'Marron Oscuro', '120x60', 7, 20180905, 0),
(32, 'Cama Matrimonial', 'Cama, muy grande, esencial para descansar en pareja', 3000, 'Imagenes/Productos/1538529769-cama3.jpg', 'Negra', '160x120', 7, 20180905, 0),
(33, 'Piramide', 'Es una piramide basada para jugar y escalar, se encuentra  en el exterior', 30000, 'Imagenes/Productos/1538529785-exterior.jpg', 'Marron claro', '210x100', 9, 20180905, 0),
(34, 'Casita', 'Es una casita basada para jugar y escalar, se encuentra  en el exterior', 60000, 'Imagenes/Productos/1538529806-exterior3.jpg', 'Marron Oscuro', '230x200', 9, 20180905, 0),
(35, 'Casita Completa', 'Casita, mas dos columpios basada para jugar y escalar, se encuentra  en el exterior', 90000, 'Imagenes/Productos/1538529818-exterior2.jpg', 'Marron Claro', '230x260', 9, 20180905, 0),
(36, 'Cuadro Chico', 'Cuadro basado de un arbol de roble', 900, 'Imagenes/Productos/1538529873-cuadro.jpg', 'Marron Anaranjado', '40x60', 10, 20180905, 0),
(37, 'Cuadro Ciervo', 'Cuadro de ciervos, ideal para decoracion', 1700, 'Imagenes/Productos/1538529863-cuadro2.jpg', 'Marron Oscuro', '70x130', 10, 20180905, 0),
(38, 'Sillon Moderno', 'Sillon moderno ideal para sentarse/acostarse', 6000, 'Imagenes/Productos/1538529897-sillon.jpg', 'Blanco', '40x90', 11, 20180905, 0),
(39, 'Sillon Cama', 'Sillon ideal para sentarse/acostarse, popularmente conocido en todo el mundo', 10000, 'Imagenes/Productos/1538529918-sillon4.jpg', 'Azul', '60x130', 11, 20180905, 0),
(40, 'Sillon Cama', 'Sillon cama chico, ideal para persona de estatura mediana', 6500, 'Imagenes/Productos/1538529943-sillon3.jpg', 'Blanco', '50x140', 11, 20180905, 0),
(45, 'Sillon Individual', 'Sillon individual moderno, es inclinable, altamente recomendado para siestas', 1230, 'Imagenes/Productos/1538530036-sillon5.jpg', 'Gris', '90x40', 11, 20180927, 0),
(46, 'Silla Moderna', 'Silla moderna con clase, color Azul marino.', 600, 'Imagenes/Productos/1538530105-silla7.jpg', 'Azul marino', '40x90', 3, 20180927, 0),
(47, 'Cajonera', 'Cajonera blanca. 6 cajones, perfecta para la ropa.', 2100, 'Imagenes/Productos/1538530381-asdaaa.jpg', 'Blanco', '100x80', 6, 20180928, 0),
(48, 'Cajonera de colores', 'Cajonera 6 cajones, ideal para niÃ±os', 1800, 'Imagenes/Productos/1538530437-kaa.jpg', 'Blanco', '130x40', 6, 20180928, 0),
(49, 'Mesa Rustica de madera de Roble', 'Mesa rustica hecha de madera de roble, adaptable para mas de 4 personas', 3400, 'Imagenes/Productos/1538530861-laaaaall.jpg', 'Marron Roble', '200x60', 2, 20180928, 0),
(50, 'Cajonera Grande', 'Cajonera grande, 4 cajones grandes, 4 medianos. Recomendada para 2 personas.', 3100, 'Imagenes/Productos/1538530548-lll.jpg', 'Blanco', '130x40', 6, 20180928, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prodxventas`
--

CREATE TABLE `prodxventas` (
  `id_productoxventa` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `preciounidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasenia` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codigo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` text NOT NULL,
  `mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id_usuario`, `usuario`, `contrasenia`, `codigo`, `fecha_registro`, `mail`) VALUES
(21, 'ioj', 'fosdij', '5bb247ec25695', '2018-10-01', 'oifsdj'),
(22, 'ioj', 'fosdij', '5bb247ef70e8f', '2018-10-01', 'oifsdj'),
(23, 'ioj', 'fosdij', '5bb247f0f1430', '2018-10-01', 'oifsdj'),
(24, 'federico_99@live.com', 'federico_99@live.com', '5bbd5c5515b37', '2018-10-09', 'federico_99@live.com.ar'),
(25, 'federico_99@live.com', 'federico_99@live.com', '5bbd5e8e8d697', '2018-10-09', 'federico_99@live.com.ar'),
(26, 'federico_99@live.com', 'federico_99@live.com', '5bbd5f73b5b4f', '2018-10-09', 'federico_99@live.com.ar'),
(27, 'federico_99@live.com', 'federico_99@live.com', '5bbd603ab1d15', '2018-10-09', 'federico_99@live.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`) VALUES
(1, 'Mesa Cotidiana'),
(2, 'Mesa Rustica'),
(3, 'Silla'),
(4, 'Esculturas'),
(5, 'Macetas'),
(6, 'Cajoneras'),
(7, 'Camas'),
(8, 'Juegos'),
(9, 'Juegos del exterior'),
(10, 'Cuadros'),
(11, 'Sillones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `contrasenia` text NOT NULL,
  `fecha_sesion` int(11) NOT NULL,
  `news` text NOT NULL,
  `mail` text NOT NULL,
  `sessionid` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contraseniaid` text NOT NULL,
  `compras` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contrasenia`, `fecha_sesion`, `news`, `mail`, `sessionid`, `contraseniaid`, `compras`) VALUES
(1, 'PEPE', 'federico99', 0, '', 'federico_99@live.com.ar', '5bcf5ec461ce8', '', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` text COLLATE utf8_spanish_ci NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `muebles`
--
ALTER TABLE `muebles`
  ADD PRIMARY KEY (`id_mueble`);

--
-- Indices de la tabla `prodxventas`
--
ALTER TABLE `prodxventas`
  ADD PRIMARY KEY (`id_productoxventa`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `muebles`
--
ALTER TABLE `muebles`
  MODIFY `id_mueble` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `prodxventas`
--
ALTER TABLE `prodxventas`
  MODIFY `id_productoxventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
