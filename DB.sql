-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para anadic
CREATE DATABASE IF NOT EXISTS `anadic` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `anadic`;

-- Volcando estructura para tabla anadic.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Categorias` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla anadic.categorias: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`Id`, `Categorias`) VALUES
	(1, 'Arte'),
	(2, 'Cultura'),
	(3, 'Entretenimiento'),
	(4, 'Ciencia y tecnologia'),
	(5, 'Clima'),
	(6, 'Deportes'),
	(7, 'Desastres y accidentes'),
	(8, 'Ecologia'),
	(9, 'Economia y negocios'),
	(10, 'Judicial'),
	(11, 'Otros'),
	(12, 'Politica'),
	(13, 'Salud'),
	(14, 'Sociedad'),
	(15, 'Moda');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla anadic.contenido
CREATE TABLE IF NOT EXISTS `contenido` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Cabecera` varchar(1000) NOT NULL,
  `Categoria` int(11) DEFAULT '1',
  `Texto` varchar(1000) NOT NULL,
  `Fecha` varchar(50) DEFAULT NULL,
  `Url` varchar(100) NOT NULL,
  `Etiquetas` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla anadic.contenido: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `contenido` DISABLE KEYS */;
INSERT INTO `contenido` (`Id`, `Cabecera`, `Categoria`, `Texto`, `Fecha`, `Url`, `Etiquetas`) VALUES
	(1, 'Alemania investiga a su industria del automóvil.', 4, '<div id="articulo_contenedor" class="articulo__contenedor">\n<div id="cuerpo_noticia" class="articulo-cuerpo">El escandalo de las emisiones de gas, que estall&oacute; en Alemania y Estados Unidos en septiembre de 2015 y que afect&oacute; al Grupo Volkswagen, puede alcanzar una nueva dimensi&oacute;n.<br /><br />Un documento enviado por Volkswagen a la Autoridad de Defensa de la Competencia alemana revela que las cinco marcas m&aacute;s prestigiosas de la industria automotriz alemana, VW, Audi, Porsche, BMW y Daimler, mantuvieron reuniones secretas desde la d&eacute;cada de los noventa para burlar las leyes de la competencia en asuntos tan sensibles como la tecnolog&iacute;a, costes, suministros e, incluso, en la purificaci&oacute;n de los gases contaminantes de coches di&eacute;sel. <br /><br />El documento, una especie de autodenuncia del grupo que tiene su sede en Wolfsburg.</div>\n</div>', '11/08/2017', 'js/images/13551082017.jpg', 'bmw,chevrolet,marcas,carros ,tecnologias'),
	(3, 'Sony asegura que PlayStation 5 no llegará pronto', 3, '<p>Ante el anuncio de Xbox one x, la nueva consola de Microsoft, se cre&oacute; gran expectativa respecto a un posible nuevo sistema de Sony. En abril del a&ntilde;o pasado, Shuhei Yoshida, presidente de Sony Computer Entertainment, asegur&oacute; que Play Station 5 es una posibilidad; sin embargo, tambi&eacute;n declar&oacute; que Sony no estaba seguro acerca de desarrollar dicha consola.</p>\n<p>Por otro lado, Damian Thong, analista de Macquarie Capital Securities, coment&oacute; que un nuevo PlayStation podr&iacute;a debutar a mediados de 2018.</p>', '11/08/2017', 'js/images/13531082017.png', 'play,debut,5'),
	(4, 'Apple niega tener la culpa en explosión de audífonos en un vuelo', 4, '<p >Unos aud&iacute;fonos Beats, marca propiedad de Apple, le explotaron a una mujer australiana mientras viajaba el pasado 19 de febrero en un vuelo entre Beijing (China) y Melborune (Australia), afectando su rostro, cabello y manos, de acuerdo con un reporte de la Oficina Australiana de Seguridad en el Transporte (ATSB, por sus siglas en ingl&eacute;s).</p>\n<p>Apple dice que la compa&ntilde;&iacute;a no tiene culpa alguna en el incidente y la atribuye a las bater&iacute;as AAA usadas por la mujer.</p>', '10/08/2017', 'js/images/13521082017.png', 'apple,beats ,explosion '),
	(5, 'Aviones de la NASA perseguirán el eclipse del día 21 para estudiar el sol', 4, '<div class="row">\n<div class="col-xs-12 col-print-12">\n<p class="element element-paragraph">Volando a 15.000 metros de altura, los dos aviones observar&aacute;n el&nbsp; eclipse completo durante alrededor de tres veces m&aacute;s tiempo que alguien que lo observe desde la Tierra, que podr&aacute; ver el fen&oacute;meno astron&oacute;mico durante menos de dos minutos y medio.</p>\n</div>\n</div>\n<div class="row">\n<div class="col-xs-12 col-print-12">\n<p class="element element-paragraph">En declaraciones a los medios oficiales de la NASA, Dan Seaton, coinvestigador del proyecto y cient&iacute;fico de la Universidad de Colorado, asegur&oacute; que esta podr&iacute;a resultar ser <strong>"la mejor observaci&oacute;n"</strong> de fen&oacute;menos de alta frecuencia en la corona solar.</p>\n</div>\n</div>', '11/08/2017', 'js/images/13591082017.png', 'nasa,eclipse ,aviones ,caza '),
	(6, 'Adidas revela la colección Z.N.E. Pulse.', 15, '<p><strong>Londres, 10&nbsp;de agosto de 2017:</strong> &iquest;Qu&eacute; tiene Gareth Bale en la cabeza antes de un partido? &iquest;C&oacute;mo mantiene Tori Bowie la concentraci&oacute;n antes de cada carrera? &iquest;Qu&eacute; hace un deportista para controlar los nervios en los momentos previos a la competici&oacute;n? Esa misma pregunta es la que se hicieron los dise&ntilde;adores de <strong>adidas Athletics</strong> para dise&ntilde;ar la <strong>nueva colecci&oacute;n de Z.N.E., Pulse</strong>, la primera que se inspira en la aceleraci&oacute;n del pulso de los deportistas justo antes de competir y que pretende ayudar a los atletas a mantener la concentraci&oacute;n en uno de los momentos m&aacute;s cr&iacute;ticos.</p>', '11/08/2017', 'js/images/13531082017.jpg', 'adidas ,nuevo,modelo');
/*!40000 ALTER TABLE `contenido` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
