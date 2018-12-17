-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2016 a las 21:57:17
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_credito`
--

CREATE TABLE `pagos_credito` (
  `id_pago` int(11) NOT NULL,
  `tipo_tarjeta` varchar(45) NOT NULL,
  `numero_tarjeta` varchar(45) NOT NULL,
  `total_pago` float NOT NULL,
  `pedidos_id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_debito`
--

CREATE TABLE `pagos_debito` (
  `id_pago` int(11) NOT NULL,
  `tipo_tarjeta` varchar(45) NOT NULL,
  `numero_tarjeta` varchar(45) NOT NULL,
  `total_pago` float NOT NULL,
  `pedidos_id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_paypal`
--

CREATE TABLE `pago_paypal` (
  `id_pago` int(11) NOT NULL,
  `institucion` varchar(45) NOT NULL,
  `num_trans` varchar(45) NOT NULL,
  `num_cuenta` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `total_pago` varchar(45) NOT NULL,
  `pedidos_id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `total` double DEFAULT NULL,
  `usuarios_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `total`, `usuarios_id_usuario`) VALUES
(5, 7574, 1),
(6, 1178, 1),
(7, 5735, 1),
(8, 5196, 1),
(9, 5196, 1),
(10, 5196, 1),
(11, 5196, 1),
(12, 5196, 1),
(13, 5196, 1),
(14, 5196, 1),
(15, 5196, 1),
(16, 5196, 1),
(17, 5196, 1),
(18, 5196, 1),
(19, 5196, 1),
(20, 3539, 1),
(21, 4348, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `categoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `titulo`, `descripcion`, `marca`, `stock`, `precio`, `imagen`, `categoria`) VALUES
(1, 'Impresora Hp Laserjet Pro M201DW Tinta Continua HD', 'Refuerce la seguridad con muchísimos recursos incorporados y opcionales, gane productividad con impresión a doble cara automática y confiable y con altas velocidades de impresión, e imprima desde teléfonos inteligentes, tablets o laptops con opciones de impresión móvil', 'HP', 10, 3539, 'impresora.jpg', 'impresion'),
(2, 'Teclado Gamer Cooler Master Devastator Led Azul', 'Diseño membrana Devastator MB24Custom - retroalimentación táctil más duradera y una mejor\r\n*Diseño de perfil ultra bajo ergonómico\r\n*Laser duradera Ultra grabado y teclas de agarre recubierto\r\n*Almohadillas de goma antideslizantes en el lado inferior', 'Cooler Master', 24, 809, 'teclado.png', 'teclado'),
(3, 'Teclado Logitech 920-000924 Mac Edition Bluetooth', 'El teclado diNovo Edge Mac Edition inalámbrico Bluetooth de Logitech está especialmente diseñado para su uso con el Bluetooth activado ordenador Mac. Funciones de las teclas específicas de Mac que te dan acceso toque único a Safari, iTunes y correo, entre otros programas.', 'Logitech', 0, 2989, 'teclado2.png', 'teclado'),
(4, 'Mouse Lenovo 31p7410 Thinkplus Travel Optical Usb', 'El portátil, ambidiestro ThinkPad Travel Mouse es perfecto para cualquier persona que busca un ratón compacto para el uso diario o mientras están en movimiento.', 'Lenovo', 43, 309, 'mouse.png', 'mouse'),
(5, 'Mouse Optico Microsoft 7jq-00735 Compacto 500 Usb Negro', 'Este ratón asequible, compacto con tecnología óptica de Microsoft es un compañero ideal para on-the-go cuadernos donde el espacio de trabajo es un bien escaso. Se ofrece un control preciso del cursor en una amplia variedad de superficies, y se siente cómodo en cualquier mano.', 'Microsoft', 54, 539, 'mouse2.png', 'mouse'),
(6, 'Bocinas Multimedia 2.1 Pc/mp3 Creative Gigaworks T20', 'Bocinas Creative T20\r\n1x Cable de audio estéreo de 2 metros\r\n1x Cable RCA de estéreo a dual', 'Creative', 2, 1209, 'bocina.png', 'bocina'),
(7, 'Audífonos Bluetooth 2.1 Cargador Usb Creative Wp-300', 'Los audífonos WP-300 te permitirán disfrutar de una reproducción estéreo excepcional con calidad de CD y de una conexión inalámbrica sin cortes con dispositivos Bluetooth.', 'Creative', 65, 639, 'diadema.png', 'diadema'),
(8, 'Bocinas Multimedia 5.1 50w Subwoofer Creative T6160', 'El sistema Creative IFP (Image Focusing Plate) mejora la direccionalidad acústica y el procesamiento de imágenes, al mismo tiempo que preserva la precisión tonal y da más protagonismo a la música en los juegos y bandas sonoras de películas\r\nEl motor satélite presenta una Creative Phase Cap que ofrece una mejor dispersión de la alta frecuencia, ideal para películas y juegos en digital surround', 'Creative', 5, 1599, 'bocina2.png', 'bocina'),
(9, 'Tarjeta Madre Gigabyte Ga-g1.sniper A88x Socket Fm2', 'Las placas base G1-Killer de la serie 8 de GIGABYTE están equipadas con absolutamente todo lo necesario para construir un PC de alto rendimiento para jugar. Cargadas con tecnologías avanzadas de audio, el mejor soporte para tarjetas múltiples, un avanzado sistema de refrigeración y un diseño de alta calidad para el disipador, las placas base G1-Killer de GIGABYTE son la elección definitiva para cualquier jugador serio de PC.', 'Gigabyte', 0, 2519, 'mother.png', 'mother'),
(10, 'Tarjeta Madre Gigabyte Ga-h81m-hd2 Micro-atx Socket 1150', 'Soporta procesadores cuarta generación Intel Core \r\nGIGABYTE Durable 4 Plus Tecnología Ultra\r\nGIGABYTE DualBIOS UEFI\r\nPuertos USB 3.0 con alimentación USB de GIGABYTE 3X\r\nGIGABYTE On / Off Charge para dispositivos USB\r\nLAN con alta Protección ESD\r\nHDMI, DVI-D, el puerto D-SUB en el panel posterior\r\nTodo el diseño de capacitores sólidos', 'Gigabyte', 123, 1469, 'mother2.png', 'mother'),
(11, 'Memoria 8gb Kingston Hx316c10fb/8 Hyper X Fury Pc3-12800', 'La memoria Fury de HyperX ofrece overclocking automítico y cuenta con un disipador de calor que incrementa la experiencia de los usuarios que demandan alto desempeño.\r\nHyperX Fury es completamente Plug and Play (PnP)* por lo que realiza overclock de manera automítica dentro de la velocidad permitida por el sistema y sin necesidad de modificar el BIOS manualmente.', 'Kingston', 26, 1399, 'RAM.png', 'RAM'),
(12, 'Memoria Ram Ddr3 8gb 1600mhz Corsair Vengeance Azul ', 'Gran apariencia, Gran Memoria Overclocking al mejor precio. La DRAM Vengeance está diseñada para establidad y la mejor velocidad para juegos.', 'Corsair', 154, 949, 'RAM2.png', 'RAM'),
(13, 'Memoria Kingston Hx316c10fr/8 Hyper X Fury 8gb Pc3-12800', 'Métete de lleno en el juego con HyperX FURY. Sea cual sea tu nivel podrás estar a la altura, ya que FURY reconoce de forma automática la plataforma anfitriona y realiza automáticamente un overclock a la frecuencia más alta publicada (hasta 1866 MHz)', 'Kingston', 0, 1399, 'RAM3.png', 'RAM'),
(14, 'Memoria Ram Ddr3 16gb Corsair Cmy16gx3m2a1866c9', 'Kit de memoria RAM DDR3 de 16GB Corsair Vengeance PRO de 1866MHz para computadora gamer, edición de video, modelado y rendering.** Kit de 16GB Dual Channel de 1866MHz para el máximo rendimiento en aplicaciones y juegos* Excelente compatibilidad con las mejores motherboards gracias al perfil Intel X.M.P. 1.3 * Ideales para los procesesadores AMD FX e Intel Core de 3a y 4a Generación', 'Corsair', 234, 2099, 'RAM4.png', 'RAM'),
(15, 'Procesador Intel Core I5-6500 Skylake 3.20ghz', 'Experiencias visuales sensacionales\r\nCon los gráficos Ultra HDde la 6a. generación de procesadores Intel Core su pantalla cobra vida. Disfrute de un modo completamente nuevo con pantallas de 4k. Las pantallas inalámbricas le permiten crear y jugar desde cualquier lugar.', 'Intel', 4, 5899, 'procesador.png', 'procesador'),
(16, 'Procesador Am1 Amd Athlon 5350 De 2.05 Ghz 2 Mb De Cache', 'Plataforma actualizable\r\nDiseñada para crecer a medida que lo hacen tus necesidades.\r\n- Utiliza la plataforma flexible AM1 y selecciona la APU AMD Athlon o AMD Sempron adecuada para ti\r\n- Añade más rendimiento a tu equipo de trabajo a medida que la plataforma AM1 se mejora y actualiza', 'AMD', 1, 1309, 'procesador2.png', 'procesador'),
(17, 'Procesador Celeron Intel G470 2.0ghz con HD Graphics', 'El nuevo procesador Intel Celeron ofrece un nivel equilibrado de tecnología probada y valor excepcional para PCs de escritorio. Sobre la base de una nueva microarquitectura de alta eficiencia energética, este procesador Celeron permite a las PC de escritorio más pequeños, más silenciosos y más capaces.', 'Intel', 124, 499, 'procesador3.png', 'procesador'),
(18, 'Monitor Led 16 Pulgadas Aoc E1670swn', 'El monitor de 16? USB e1670swu es un monitor perfecto para los usuarios de laptop o PC que necesiten trabajar en varias aplicaciones a la vez. Equipado con puerto USB para máxima flexibilidad, el monitor es ideal para utilizar como pantalla extendida y perfecto para quienes buscan portabilidad.', 'AOC', 23, 1479, 'monitor.png', 'monitor'),
(19, 'Monitor Led 27 Pulgadas Benq Gl2760h Hdmi 9hlc8larbl', 'Retroiluminación LED ofrece ventajas significativas sobre la tecnología CCFL utilizados en viejos monitores LED . Estas ventajas abarcan no sólo las métricas de rendimiento, como el contraste dinámico más alto, no hay fugas de luz y sin parpadeos, sino también los factores ambientales, como un proceso de fabricación y eliminación de elementos contaminantes.', 'BENQ', 19, 4639, 'monitor2.png', 'monitor'),
(20, 'Monitor Led 20 Pulgadas Aoc E2070swn', 'El monitor de 20 Pulgadas e2070Swn viene con tecnología LED. El monitor no sólo representa un ahorro significativo de energía por su uso de la tecnología de panel retro alimentado LED, sino que también garantiza un desempeño ambiental. El e2070Swn es libre de Mercurio (Hg) y posee certificación Energy Star. Además, el monitor también está equipado con el software e-Saver mediante el cual se puede escoger la configura', 'AOC', 10, 2009, 'monitor3.png', 'monitor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_has_pedidos`
--

CREATE TABLE `productos_has_pedidos` (
  `productos_id_producto` int(11) NOT NULL,
  `pedidos_id_pedido` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_has_pedidos`
--

INSERT INTO `productos_has_pedidos` (`productos_id_producto`, `pedidos_id_pedido`, `cantidad`) VALUES
(1, 8, 1),
(1, 9, 1),
(1, 10, 1),
(1, 11, 1),
(1, 12, 1),
(1, 13, 1),
(1, 14, 1),
(1, 15, 1),
(1, 16, 1),
(1, 17, 1),
(1, 18, 1),
(1, 19, 1),
(1, 20, 1),
(1, 21, 1),
(2, 5, 1),
(2, 8, 1),
(2, 9, 1),
(2, 10, 1),
(2, 11, 1),
(2, 12, 1),
(2, 13, 1),
(2, 14, 1),
(2, 15, 1),
(2, 16, 1),
(2, 17, 1),
(2, 18, 1),
(2, 19, 1),
(2, 21, 1),
(4, 8, 1),
(4, 9, 1),
(4, 10, 1),
(4, 11, 1),
(4, 12, 1),
(4, 13, 1),
(4, 14, 1),
(4, 15, 1),
(4, 16, 1),
(4, 17, 1),
(4, 18, 1),
(4, 19, 1),
(5, 6, 1),
(5, 7, 1),
(5, 8, 1),
(5, 9, 1),
(5, 10, 1),
(5, 11, 1),
(5, 12, 1),
(5, 13, 1),
(5, 14, 1),
(5, 15, 1),
(5, 16, 1),
(5, 17, 1),
(5, 18, 1),
(5, 19, 1),
(6, 7, 1),
(7, 6, 1),
(8, 5, 3),
(10, 5, 1),
(17, 5, 1),
(17, 7, 1),
(18, 7, 1),
(20, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `cp` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `edad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `usuario`, `contrasena`, `correo`, `municipio`, `estado`, `pais`, `cp`, `telefono`, `edad`) VALUES
(1, 'Jaime Alejadro', 'root', 'root', 'duke_supremo@gmail.com', 'Guadalajara', 'Jalisco', 'Mexico', '45525', '33338645', '23'),
(3, 'Oscar', 'Chonwein', 'oscar123', 'Chon_wein@hotmail.com', NULL, NULL, NULL, NULL, NULL, '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagos_credito`
--
ALTER TABLE `pagos_credito`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `fk_pagos_credito_pedidos1_idx` (`pedidos_id_pedido`);

--
-- Indices de la tabla `pagos_debito`
--
ALTER TABLE `pagos_debito`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `fk_pagos_debito_pedidos1_idx` (`pedidos_id_pedido`);

--
-- Indices de la tabla `pago_paypal`
--
ALTER TABLE `pago_paypal`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `fk_pago_paypal_pedidos1_idx` (`pedidos_id_pedido`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_pedidos_usuarios1_idx` (`usuarios_id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos_has_pedidos`
--
ALTER TABLE `productos_has_pedidos`
  ADD PRIMARY KEY (`productos_id_producto`,`pedidos_id_pedido`),
  ADD KEY `fk_productos_has_pedidos_pedidos1_idx` (`pedidos_id_pedido`),
  ADD KEY `fk_productos_has_pedidos_productos1_idx` (`productos_id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagos_credito`
--
ALTER TABLE `pagos_credito`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pagos_debito`
--
ALTER TABLE `pagos_debito`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagos_credito`
--
ALTER TABLE `pagos_credito`
  ADD CONSTRAINT `fk_pagos_credito_pedidos1` FOREIGN KEY (`pedidos_id_pedido`) REFERENCES `pedidos` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pagos_debito`
--
ALTER TABLE `pagos_debito`
  ADD CONSTRAINT `fk_pagos_debito_pedidos1` FOREIGN KEY (`pedidos_id_pedido`) REFERENCES `pedidos` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pago_paypal`
--
ALTER TABLE `pago_paypal`
  ADD CONSTRAINT `fk_pago_paypal_pedidos1` FOREIGN KEY (`pedidos_id_pedido`) REFERENCES `pedidos` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedidos_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_has_pedidos`
--
ALTER TABLE `productos_has_pedidos`
  ADD CONSTRAINT `fk_productos_has_pedidos_pedidos1` FOREIGN KEY (`pedidos_id_pedido`) REFERENCES `pedidos` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_has_pedidos_productos1` FOREIGN KEY (`productos_id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
