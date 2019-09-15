-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-09-2019 a las 03:33:16
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id7803858_reyesdelmueble`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_mensaje` int(11) NOT NULL,
  `id_usuario` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `asunto` int(2) NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_mensaje`, `id_usuario`, `nombre_apellido`, `email`, `telefono`, `asunto`, `mensaje`) VALUES
(10, 'PEPE', 'federico_99@live.com.ar asd', 'federico_99@live.com.ar', '2313', 1, 'sad'),
(12, 'PEPE', 'asd asd', 'federico_99@live.com.ar', '123123', 1, 'asd'),
(13, '', 'federico_99@live.com.ar asd', 'federico_99@live.com.ar', '2313', 4, 'sad'),
(14, 'PEPE', 'Federico gutirttrz', 'federico_99@live.com.ar', '123123', 2, 'dsfdd'),
(15, 'Irala', 'elver galarga', 'pepe@anosucio.com', '2211221', 1, 'no funcionan cosas'),
(16, 'Irala', 'elver galarga', 'pepe@anosucio.com', '2211221', 1, 'no funcionan cosas'),
(17, 'Irala', 'elver galarga', 'pepe@anosucio.com', '2211221', 1, 'no funcionan cosas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muebles`
--

CREATE TABLE `muebles` (
  `id_mueble` int(12) NOT NULL,
  `nombre` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `color` text NOT NULL,
  `medida` text NOT NULL,
  `tipos` int(12) NOT NULL,
  `fecha` int(11) NOT NULL,
  `pago` int(11) NOT NULL,
  `descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `muebles`
--

INSERT INTO `muebles` (`id_mueble`, `nombre`, `descripcion`, `precio`, `imagen`, `color`, `medida`, `tipos`, `fecha`, `pago`, `descuento`) VALUES
(2, 'Mesa Comedor', 'Pack 2 Sillones rojos hechos de cuero para 1 persona, patas de acero.', 4534, 'Imagenes/Productos/1540258492-login.jpg', 'Rojo fuerte', '70x50', 11, 20180905, 2, 0),
(4, 'Mesa Comedor', 'Es una mesa familiar hecha de madera de abedul, popularmente, es conocida como una de las mesas mas ', 1600, 'Imagenes/Productos/1543274337-a.jpg', 'Marron  Claro', '134x34', 2, 20180905, 1, 0),
(5, 'Mesa Comedor', 'Es una mesa familiar hecha de madera y acero, popularmente, es conocida como una de las mesas mas comodas del mercado.', 5400, 'Imagenes/Productos/1538528678-mesa7.jpg', 'Marron ', '130x60', 1, 20180905, 16, 0),
(6, 'Mesa Comedor', 'Es una mesa rustica basada en mesas antiguas, popularmente es conocida como una de las mesas mas raras del mercado, data de hace 100 años.', 6000, 'Imagenes/Productos/1538528360-mesar4.jpg', 'Marron Oscuro', '150x50', 2, 20180905, 3, 30),
(7, 'Mesa Comedor', 'Es una mesa rustica basada en mesas antiguas, popularmente, es conocida como una de las mesas mas ra', 5000, 'Imagenes/Productos/1538528516-mesar.jpg', 'Marron Claro', '50x160', 2, 20180905, 0, 0),
(9, 'Mesa Comedor', 'Es una mesa rustica basada en mesas antiguas, popularmente, es conocida como una de las mesas mas ra', 1600, 'Imagenes/Productos/1538528668-mesar5.jpg', 'Marron Oscuro', '90x160', 2, 20180905, 1, 0),
(10, 'Silla', 'Silla hecha de madera, es una de las sillas mas comunes y populares en todo el mundo', 600, 'Imagenes/Productos/1538528706-silla6.jpg', 'Marron Claro', '40x50', 3, 20180905, 1, 0),
(11, 'Silla Moderna', 'Silla moderna excelente para sentarse', 1000, 'Imagenes/Productos/1538539232-dd.jpg', 'Blanco', '30x60', 3, 20190705, 0, 0),
(12, 'Silla Antigua', 'Silla hecha de madera de roble , es una silla basada en el siglo XIV', 1200, 'Imagenes/Productos/1538539056-sila.jpg', 'Marron Oscuro', '30x60', 3, 20180905, 1, 0),
(14, 'Silla Moderna', 'Silla moderna, poco conocida ', 900, 'Imagenes/Productos/1538539469-sila.jpg', 'Gris', '30x60', 3, 20190705, 0, 0),
(16, 'Silla Moderna', 'Silla moderna, popurlamente conocida en todo el mundo, ideal para la familia', 1700, 'Imagenes/Productos/1538539886-aa.jpg', 'Marron Oscuro', '30x60', 3, 20190705, 1, 0),
(17, 'Silla Comoda', 'Silla comoda ideal para descansar', 3600, 'Imagenes/Productos/1543269086-Muebles-Silla-colonial-Fusta-Bora-Bora.jpg', 'Negro', '90x50', 3, 20180905, 1, 0),
(18, 'Conejo', 'Conejo tallado en madera de roble claro, popularmente conocido para decorar la casa', 1300, 'Imagenes/Productos/1538528737-escultura.jpg', 'Marron ', '40x50', 4, 20180905, 3, 5),
(19, 'Caballo', 'Caballo tallado en madera de roble', 900, 'Imagenes/Productos/1538528760-escultura2.jpg', 'Marron', '30x40', 4, 20180905, 0, 0),
(20, 'Tigre', 'Es un tigre tallado en madera abedul, ideal para decorar la casa', 2000, 'Imagenes/Productos/1538528778-escultura3.jpg', 'Marron Claro', '30x40', 4, 20180905, 7, 0),
(21, 'Gallo', 'Gallo tallado en madera de abedul poco comun', 800, 'Imagenes/Productos/1538528804-escultura5.jpg', 'Marron Claro', '30x60', 4, 20180905, 0, 0),
(22, 'Tortuga', 'Es una tortuga tallada de madera de roble, muy rara y poco comun', 5000, 'Imagenes/Productos/1543271227-babh.jpg', 'Marron Claro', '90x120', 4, 20180905, 1, 0),
(23, 'Maceta de barro', 'Maceta moldeada en barro, posteriormente fue horneada', 3000, 'Imagenes/Productos/1538529612-maceta.jpg', 'Marron ', '40x20', 5, 20180905, 1, 0),
(24, 'Maceta Rara', 'Maceta hecha de madera de abedul, poco comun', 2000, 'Imagenes/Productos/1538529653-maceta2.jpg', 'Marron Claro', '60x40', 5, 20180905, 0, 0),
(25, 'Pack cuatro macetas', 'Macetas hechas de madera de abedul, muy poco conocida, perfecta para decorar', 3200, 'Imagenes/Productos/1538529664-maceta3.jpg', 'Blanca', '60x40', 5, 20180905, 5, 10),
(26, 'Pack ocho macetas ', 'Macetas hechas de madera de roble muy oscuro, perfecta para decoraciones', 3500, 'Imagenes/Productos/1538529683-maceta4.jpg', 'Marron Oscuro', '50x50', 5, 20180905, 1, 0),
(27, 'Cajonera ', 'Cajonera normalmente conocida en todo el mundo por su facil uso', 900, 'Imagenes/Productos/1538529703-cajonera.jpg', 'Negra', '140x60', 6, 20180905, 5, 0),
(28, 'Cajonera chica', 'Cajonera normalmente conocida en todo el mundo por su facil uso', 600, 'Imagenes/Productos/1538529714-cajonera2.jpg', 'Marron', '60x80', 6, 20180905, 0, 0),
(29, 'Cajonera Moderna', 'Cajonera moderna, perfecta para chicos', 1500, 'Imagenes/Productos/1538529726-cajonera3.jpg', 'Blanca', '90x60', 6, 20180905, 2, 0),
(30, 'Cama Matrimonial', 'Cama matrimonial moderna con base y patas de madera de roble oscuro, es conocida por no hacer ruido.', 4000, 'Imagenes/Productos/1538529738-cama.jpg', 'Marron Oscuro', '194x148', 7, 20180905, 14, 0),
(31, 'Cama Matrimonial de roble Oscuro', 'Cama individual, muy comoda, hecha con madera de roble oscuro con 4 patas cuadradas.', 6700, 'Imagenes/Productos/1538529753-cama2.jpg', 'Roble oscuro', '180x60', 7, 20180905, 2, 0),
(32, 'Cama Matrimonial', 'Cama, muy grande, esencial para descansar en pareja', 3000, 'Imagenes/Productos/1538529769-cama3.jpg', 'Negra', '160x120', 7, 20180905, 0, 0),
(36, 'Cuadro Chico', 'Cuadro basado de un arbol de roble', 900, 'Imagenes/Productos/1538529873-cuadro.jpg', 'Marron Anaranjado', '40x60', 10, 20180905, 1, 0),
(37, 'Cuadro Ciervo', 'Cuadro de ciervos, ideal para decoracion', 1700, 'Imagenes/Productos/1538529863-cuadro2.jpg', 'Marron Oscuro', '70x130', 10, 20180905, 12, 60),
(38, 'Sillon Moderno', 'Sillon moderno ideal para sentarse/acostarse', 6000, 'Imagenes/Productos/1538529897-sillon.jpg', 'Blanco', '40x90', 11, 20180905, 2, 0),
(39, 'Sillon Cama', 'Sillon ideal para sentarse/acostarse, popularmente conocido en todo el mundo', 10000, 'Imagenes/Productos/1538529918-sillon4.jpg', 'Azul', '60x130', 11, 20180905, 0, 0),
(40, 'Sillon Cama', 'Sillon cama chico, ideal para persona de estatura mediana', 6500, 'Imagenes/Productos/1538529943-sillon3.jpg', 'Blanco', '50x140', 11, 20180929, 0, 30),
(45, 'Sillon Individual', 'Sillon inclinable de un cuerpo moderno, estructura de MDF tapizado en Veluti. Realizamos sillones a ', 1230, 'Imagenes/Productos/1538530036-sillon5.jpg', 'Gris', '90x40', 11, 20180927, 6, 0),
(46, 'Silla Moderna', 'Silla moderna con clase, color Azul marino.', 600, 'Imagenes/Productos/1538530105-silla7.jpg', 'Azul marino', '40x90', 3, 20180927, 0, 0),
(47, 'Cajonera', 'Cajonera blanca. 6 cajones, perfecta para la ropa.', 2100, 'Imagenes/Productos/1538530381-asdaaa.jpg', 'Blanco', '100x80', 6, 20180928, 4, 50),
(48, 'Cajonera de colores', 'Cajonera de 6 hecha de madera con cajones a colores, patas de madera de 7cm, cajones removibles.', 1800, 'Imagenes/Productos/1538530437-kaa.jpg', 'Blanco', '130x40', 6, 20180928, 4, 0),
(49, 'Mesa Rustica de Roble', 'Mesa rustica hecha de madera de roble, adaptable para mas de 4 personas, no incluye los bancos de madera.', 5300, 'Imagenes/Productos/1538530861-laaaaall.jpg', 'Marron Roble', '200x100', 2, 20180928, 14, 0),
(50, 'Mesa de comedor Cora cuadrada', 'Mesa de comedor con tapa laqueada con laca poliuretánica de alta resistencia o revestida en madera d', 19000, 'Imagenes/Productos/1542144291-d005cf45530405bfcaf957e93c83327369b8cbc0.jpg', 'Blanco', '115X115', 1, 20181113, 0, 0),
(51, 'Silla Lora', 'Silla plástica con patas cromadas, apilable hasta 6 sillas.', 4500, 'Imagenes/Productos/1542144426-a.jpg', 'Blanco', '50X78', 3, 20181113, 4, 10),
(52, 'Silla Flora', 'Silla con patas de madera y casco plástico.', 5600, 'Imagenes/Productos/1542144512-1eb0d0d540891e1adf267fb5dccecf29e7938174.jpg', 'Blanco', '58X78', 3, 20181113, 1, 0),
(53, 'Sillon Charlie', 'Sillón de 3 cuerpos, de goma espuma soft, estructura de MDF tapizado tapizado en Veluti. También rea', 22000, 'Imagenes/Productos/1542144667-50e1a20e4292f6fbafc723cb5c4d913251102af5.jpg', 'Blanco', '180X90', 11, 20181113, 2, 0),
(54, 'Mueble de guardado Greta chica Laqueado', 'El mueble bajo de guardado para TV posee tres amplios cajones y un estante abierto que te permitirá ', 15000, 'Imagenes/Productos/1542144812-29dec3f7273dffb8a846a3e6e253dfdafad3bc1e.jpg', 'Blanco', '110X45', 6, 20181113, 0, 0),
(55, 'Cuadro Gota de agua Negro', 'Enamorá tus paredes y armate un alegre rincón con este cuadro.', 720, 'Imagenes/Productos/1542145034-1de1ba928f8d295e1d264a25d3beab55214cff18.jpg', 'Marco de madera', '35X48', 4, 20181113, 1, 0),
(56, 'Cuadro Ciudades', 'Carteles o señales antiguas de ciudades. Vienen enmarcadas con marco y vidrio, listos para colgar.\r\n', 400, 'Imagenes/Productos/1542145074-ab.jpg', 'Negro', '40X10', 4, 20181113, 0, 0),
(57, 'Maceta Burbijas', 'Maceta de cerámica esmaltada con burbujas, que surgen del trabajo cotidiano y la exploración con la ', 732, 'Imagenes/Productos/1542145184-asdas.jpg', 'Rojo fuerte', '15X21', 5, 20181113, 1, 0),
(58, 'Puff Mareado sin patas', 'Muy cómodos y divertidos, los puff mareados te invitan a disfrutar de un ambiente relajado y confort', 3200, 'Imagenes/Productos/1542145401-aaasdsa.jpg', 'Naranja', '47X23', 11, 20181113, 4, 0),
(59, 'Mesa de cristal mas silla', 'Es una mesa hecha de cristal, muy usado en las oficinas', 12000, 'Imagenes/Productos/1542202924-81HbLr8bDqL._SY355_.jpg', 'Cristal', '40x90', 8, 20181114, 1, 15),
(60, 'Escritorio ', 'Es un escritorio hecho para oficina, se puede guardar todo tipo de cosas ahi', 7500, 'Imagenes/Productos/1542203001-casanova-gandia-mesa-despacho-roble-Suspirarte.jpg', 'Marron', '40x120', 8, 20181114, 0, 0),
(61, 'Mesa de cristal individual', 'Es una mesa de cristal muy moderna ', 15000, 'Imagenes/Productos/1542203151-pl_1_4_167.jpg', 'Negro', '50x200', 8, 20181114, 0, 0),
(62, 'Escritorio mas cajonera', 'Escritorio mas cajonera, no puede faltar en ninguna oficina', 17000, 'Imagenes/Productos/1542203217-mesa-oficina-angulo-izquierdo-panel-g.jpg', 'Negro', '90X210', 8, 20181114, 0, 0),
(63, 'Mesa de reunion', 'Mesa hecha solamente para reuniones importantes', 25000, 'Imagenes/Productos/1542204339-Oficina-Crestron.png', 'Negra', '60X300', 8, 20181114, 0, 0),
(64, 'Silla individual ', 'Es una silla individual de oficina muy comoda', 7560, 'Imagenes/Productos/1542204430-silla-de-oficina-stanford-neg-ra.jpg', 'Negra', '40x120', 9, 20181114, 0, 0),
(65, 'Mesa mas cajones', 'Mesa muy util no puede faltar en ninguna oficina ¿Que esperas?', 6000, 'Imagenes/Productos/1542204558-vyrd12_411SIGMA_GOTA_2-MESA-OFICINA.png', 'Blanca', '40x90', 8, 20181114, 0, 0),
(66, 'Cama Individual Madera Maciza', 'Cama de madera resistente y duradera: Madera maciza, Pintura blanca laqueada que proteje la madera. Soportes desmontables para su traslado y colocación.', 3250, 'Imagenes/Productos/1542825956-cama.jpg', 'Blanco', '190x90', 7, 20181121, 0, 0),
(67, 'Cama Individual', 'Cama individual que se hace doble, hecha en madera de roble oscuro, muy comoda para el uso cotidiano.', 4500, 'Imagenes/Productos/1542826108-1462472854.jpg', 'Madera Oscura', '200x60', 7, 20181121, -8, 0),
(68, 'Mesa de Oficina', 'Escritorio de oficina en escuadra i en L con repisero o estante para colocar cualquier enser de oficina y cajon sencillo', 9000, 'Imagenes/Productos/1543268862-a.jpg', 'Madera', '120X120', 8, 20181126, 0, 0),
(69, 'Silla para oficina Foldi', 'Foldi nació para brindar la mejor experiencia de confort al usuario incluso en largas reuniones.\r\nGracias al nuevo mecanismo de plegado Folder, sus espacios se volverán más eficientes.', 5400, 'Imagenes/Productos/1543269439-$_20.JPG', 'Naranja', '40X70', 9, 20181126, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news_registros`
--

CREATE TABLE `news_registros` (
  `id_newregistro` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `mail` text COLLATE utf8_spanish_ci NOT NULL,
  `keyregistro` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro_news` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news_table`
--

CREATE TABLE `news_table` (
  `id_usuarionews` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `mail` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_news` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `news_table`
--

INSERT INTO `news_table` (`id_usuarionews`, `nombre`, `mail`, `fecha_news`) VALUES
(3, 'Juan', 'iralajuan@outlook.es', '2018-11-26');

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

--
-- Volcado de datos para la tabla `prodxventas`
--

INSERT INTO `prodxventas` (`id_productoxventa`, `id_venta`, `id_prod`, `cantidad`, `preciounidad`) VALUES
(1, 1, 5, 9, 3500),
(2, 2, 5, 10, 3500),
(3, 3, 9, 1, 1600),
(4, 4, 48, 1, 1800),
(5, 5, 5, 4, 3500),
(6, 6, 49, 10, 3400),
(7, 7, 6, 1, 3000),
(8, 8, 6, 1, 3000),
(9, 8, 30, 4, 1700),
(10, 8, 27, 1, 900),
(11, 9, 45, 3, 1230),
(12, 10, 10, 1, 600),
(13, 11, 29, 1, 1500),
(14, 11, 47, 1, 2100),
(15, 11, 48, 2, 1800),
(16, 12, 16, 1, 1700),
(17, 12, 31, 1, 1200),
(18, 13, 9, 1, 1600),
(19, 13, 29, 1, 1500),
(20, 14, 45, 1, 1230),
(21, 15, 2, 1, 4534),
(22, 16, 31, 1, 1200),
(23, 17, 30, 1, 4000),
(24, 18, 30, 1, 4000),
(25, 19, 30, 1, 4000),
(26, 20, 51, 1, 4500),
(27, 21, 5, 1, 5400),
(28, 22, 5, 1, 5400),
(29, 23, 4, 1, 1600),
(30, 23, 49, 1, 5300),
(31, 24, 5, 1, 5400),
(32, 24, 30, 1, 4000),
(33, 24, 49, 1, 5300),
(34, 25, 30, 1, 4000),
(35, 26, 30, 1, 4000),
(36, 27, 5, 1, 5400),
(37, 28, 49, 1, 5300),
(38, 29, 30, 1, 4000),
(39, 30, 5, 1, 5400),
(40, 31, 5, 1, 5400),
(41, 32, 30, 1, 4000),
(42, 33, 5, 1, 5400),
(43, 34, 23, 1, 3000),
(44, 35, 5, 1, 5400),
(45, 36, 30, 1, 4000),
(46, 37, 5, 3, 5400),
(47, 38, 5, 1, 5400),
(48, 38, 30, 1, 4000),
(49, 38, 49, 1, 5300),
(50, 39, 26, 1, 3500),
(51, 40, 53, 1, 22000),
(52, 41, 38, 1, 6000),
(53, 41, 20, 1, 2000),
(54, 41, 6, 1, 6000),
(55, 41, 48, 1, 1800),
(56, 41, 45, 1, 1230),
(57, 41, 55, 1, 720),
(58, 41, 52, 1, 5600),
(59, 42, 47, 3, 2100),
(60, 43, 51, 2, 4050),
(61, 44, 37, 1, 1700),
(62, 45, 58, 4, 3200),
(63, 46, 51, 1, 4050),
(64, 46, 8, 2, 3200),
(65, 47, 17, 1, 3600),
(66, 48, 12, 1, 1200),
(67, 48, 57, 1, 732),
(68, 48, 22, 1, 5000),
(69, 49, 49, 1, 5300),
(70, 50, 49, -1, 5300),
(71, 51, 18, 1, 1300),
(72, 52, 18, 1, 1300),
(73, 53, 18, 1, 1300),
(74, 54, 20, 6, 2000),
(75, 55, 36, 1, 900),
(76, 56, 2, 1, 4534),
(77, 56, 45, 1, 1230),
(78, 56, 37, 5, 680),
(79, 57, 27, 4, 900),
(80, 58, 67, -8, 4500),
(81, 59, 38, 1, 6000),
(82, 59, 53, 1, 22000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id_usuario` int(11) NOT NULL,
  `nombre_apellido` varchar(30) NOT NULL,
  `fecha_nac` text NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasenia` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codigo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` text NOT NULL,
  `mail` text NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id_usuario`, `nombre_apellido`, `fecha_nac`, `usuario`, `contrasenia`, `codigo`, `fecha_registro`, `mail`, `news`) VALUES
(1, 's', '1995-03-07', 'df', 'fefefef', '5c68c5716e34f', '2019-02-17', 'df@live', '1');

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
(8, 'Mesas oficina'),
(9, 'Sillas oficina'),
(10, 'Cuadros'),
(11, 'Sillones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_apellido` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` text NOT NULL,
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

INSERT INTO `usuarios` (`id_usuario`, `nombre_apellido`, `fecha_nac`, `usuario`, `contrasenia`, `fecha_sesion`, `news`, `mail`, `sessionid`, `contraseniaid`, `compras`) VALUES
(1, '', '', 'PEPE', 'federico99', 20190621, '0', 'federico_99@lve.com.ar', '5c68c41fe2972', '5d0c23d94381b', 54),
(3, 'Federico Gutierrez ', '1999-07-03', 'Mav3ricK', 'federico99', 20190621, '0', 'federico_99@live.com.ar', '', '', 0),
(4, 'Agussss 99', '1992-06-16', 'Agus99', 'federico99', 20190621, '1', 'elrobacables2@hotmail.com', '5c002ec8e59fc', '', 2),
(5, 'Juan', '1990-03-15', 'Irala', 'federico', 20190621, '1', 'iralajuan099@gmail.com', '5bfc7d4705608', '', 6);

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
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_usuario`, `fecha`, `total`) VALUES
(1, 1, '25-10-2018', 31500),
(2, 1, '25-10-2018', 35000),
(3, 1, '25-10-2018', 1600),
(4, 1, '25-10-2018', 1800),
(5, 1, '25-10-2018', 14000),
(6, 1, '25-10-2018', 34000),
(7, 1, '26-10-2018', 3000),
(8, 1, '31-10-2018', 10700),
(9, 1, '31-10-2018', 3690),
(10, 1, '31-10-2018', 600),
(11, 1, '31-10-2018', 7200),
(12, 1, '04-11-2018', 2900),
(13, 2, '04-11-2018', 3100),
(14, 1, '14-11-2018', 1230),
(15, 1, '21-11-2018', 4534),
(16, 1, '21-11-2018', 1200),
(17, 1, '21-11-2018', 4000),
(18, 1, '21-11-2018', 4000),
(19, 1, '21-11-2018', 4000),
(20, 1, '21-11-2018', 4500),
(21, 1, '21-11-2018', 5400),
(22, 1, '21-11-2018', 5400),
(23, 1, '21-11-2018', 6900),
(24, 1, '21-11-2018', 14700),
(25, 1, '21-11-2018', 4000),
(26, 1, '21-11-2018', 4000),
(27, 1, '21-11-2018', 5400),
(28, 1, '21-11-2018', 5300),
(29, 1, '21-11-2018', 4000),
(30, 1, '21-11-2018', 5400),
(31, 1, '21-11-2018', 5400),
(32, 1, '21-11-2018', 4000),
(33, 1, '21-11-2018', 5400),
(34, 1, '21-11-2018', 3000),
(35, 1, '21-11-2018', 5400),
(36, 1, '21-11-2018', 4000),
(37, 1, '22-11-2018', 16200),
(38, 1, '22-11-2018', 14700),
(39, 1, '23-11-2018', 3500),
(40, 1, '23-11-2018', 22000),
(41, 4, '23-11-2018', 23350),
(42, 1, '23-11-2018', 6300),
(43, 1, '24-11-2018', 8100),
(44, 1, '25-11-2018', 1700),
(45, 1, '25-11-2018', 12800),
(46, 1, '25-11-2018', 10450),
(47, 4, '26-11-2018', 3600),
(48, 5, '26-11-2018', 6932),
(49, 5, '26-11-2018', 5300),
(50, 5, '26-11-2018', -5300),
(51, 5, '26-11-2018', 1300),
(52, 5, '26-11-2018', 1300),
(53, 5, '26-11-2018', 1300),
(54, 1, '28-11-2018', 12000),
(55, 1, '30-11-2018', 900),
(56, 1, '30-11-2018', 9164),
(57, 1, '01-12-2018', 3600),
(58, 1, '17-02-2019', -36000),
(59, 1, '17-02-2019', 28000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `muebles`
--
ALTER TABLE `muebles`
  ADD PRIMARY KEY (`id_mueble`);

--
-- Indices de la tabla `news_registros`
--
ALTER TABLE `news_registros`
  ADD PRIMARY KEY (`id_newregistro`);

--
-- Indices de la tabla `news_table`
--
ALTER TABLE `news_table`
  ADD PRIMARY KEY (`id_usuarionews`);

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
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `muebles`
--
ALTER TABLE `muebles`
  MODIFY `id_mueble` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `news_registros`
--
ALTER TABLE `news_registros`
  MODIFY `id_newregistro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `news_table`
--
ALTER TABLE `news_table`
  MODIFY `id_usuarionews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `prodxventas`
--
ALTER TABLE `prodxventas`
  MODIFY `id_productoxventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
