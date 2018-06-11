-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: udc_blog
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `intro` text,
  `fechaPublicacion` datetime DEFAULT NULL,
  `publicar` char(1) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `idUsuario` int(10) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `contenido` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (1,'B0001','MI PRIMER BLOG','este es mi primer blog espere que les guste','2018-05-26 04:06:06','S','R',1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas suscipit dignissim nibh, in tristique quam interdum id. Nam elementum metus vitae eros suscipit, at tempus nunc porttitor. Integer eget lectus at mi imperdiet rhoncus ac ac libero. Proin fringilla mollis felis eu scelerisque. Morbi efficitur sed ligula nec vulputate. Nulla vitae consequat purus. Proin commodo quam et ipsum porttitor rutrum. Phasellus finibus mauris finibus magna mattis, sit amet tempus ligula vestibulum. In interdum in dui non vestibulum. In consectetur gravida sodales. Duis venenatis pulvinar iaculis.\r\n\r\nAliquam eros ex, malesuada eget nisi in, tincidunt dignissim neque. Maecenas id eros convallis, tincidunt sapien ut, malesuada erat. Aenean tincidunt quam sed feugiat egestas. Phasellus ac sodales mauris. Donec malesuada, nulla et mollis tristique, felis diam iaculis purus, non rutrum libero lectus a nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sem turpis, fringilla ut porta et, tincidunt id lorem. Nam ut vulputate enim, et placerat lorem. Nunc orci sapien, tempus ut pulvinar quis, ultrices at ligula. Nunc luctus neque et condimentum condimentum. Nullam viverra ultrices ligula ut ullamcorper. Integer at nisi euismod, egestas dolor at, placerat magna. Mauris at venenatis leo. Duis ac massa eget neque lobortis venenatis non nec velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non lorem ut leo mattis rutrum vitae nec lectus.\r\n\r\nEtiam ut nisi ac nisi pellentesque dignissim a id libero. Suspendisse molestie lectus at orci auctor tincidunt. Fusce auctor ex tincidunt massa fermentum, accumsan volutpat velit feugiat. Ut leo ligula, consectetur vitae pretium non, rutrum nec nisl. Mauris ipsum lacus, pellentesque vitae eleifend sed, ullamcorper sit amet lectus. Vivamus leo elit, placerat sit amet mattis sed, semper ut ex. Sed vel nunc rutrum, gravida magna at, ultricies nulla.\r\n\r\nSuspendisse et blandit lectus. Integer rutrum consequat eleifend. Nam lectus felis, sollicitudin a laoreet quis, faucibus eget dolor. Etiam gravida elit vel felis pulvinar lobortis. Aenean fermentum mi massa, at convallis lacus laoreet non. Praesent a aliquam dui. Vestibulum at est accumsan, laoreet nisl vestibulum, tristique odio. Donec euismod urna in ultricies congue. Etiam sodales viverra dictum. Nulla sed turpis mi. In hendrerit tellus ultricies tincidunt ultrices. Cras viverra eleifend neque, non posuere urna pharetra sit amet. Pellentesque non tellus erat. Integer non ex aliquam dolor pharetra consequat. Sed venenatis viverra erat sit amet pulvinar.\r\n\r\nPraesent aliquam nunc vitae arcu semper faucibus. Maecenas vitae magna a magna efficitur pellentesque. Sed ultricies est ultrices sapien cursus porttitor. Ut aliquet a metus id ultricies. Morbi congue turpis eu nisi mattis, id volutpat mauris lobortis. Sed non blandit nisi. Mauris fringilla purus augue, eu rhoncus justo tempor non. Proin nec risus efficitur, dictum sapien sed, bibendum elit. Donec sodales nisi eget orci gravida, in vehicula nibh pretium.\r\n\r\nNullam viverra turpis aliquet ante congue, vitae fermentum enim luctus. Sed sit amet malesuada purus. Mauris consectetur elit velit, sit amet suscipit ipsum interdum nec. Ut sit amet ligula ac leo posuere commodo quis eu ex. Fusce eleifend, erat eget auctor dignissim, libero felis gravida quam, malesuada vehicula nisi metus sed lectus. Integer vestibulum tristique erat malesuada hendrerit. Pellentesque rhoncus purus id lorem facilisis, nec accumsan lacus ullamcorper. Donec dictum tempor felis sed facilisis. Ut finibus massa eu egestas molestie. Aenean in sapien quam. Nullam et lacinia libero. Cras ac pulvinar arcu. Mauris consectetur scelerisque ipsum fringilla eleifend. Vivamus et tincidunt ex.\r\n\r\nAenean eu orci ipsum. Vestibulum dignissim ut orci a placerat. Donec pellentesque dui et tortor gravida feugiat. Duis ac placerat ex. Aenean a sem eget est pulvinar porttitor sit amet quis velit. Duis vehicula, magna porta facilisis mattis, justo tortor suscipit sem, eget bibendum purus diam vitae lacus. Fusce pretium lectus eu augue volutpat consectetur. Suspendisse auctor semper libero, quis posuere nibh pharetra aliquam. Fusce maximus vitae tellus non consectetur. Suspendisse vel odio eget ligula rhoncus dignissim hendrerit aliquam arcu. Sed eget nisi non risus sollicitudin suscipit. Vestibulum commodo ut lacus a iaculis. Vivamus quis lacus libero.\r\n\r\nSuspendisse potenti. Vestibulum porttitor libero sapien, in tincidunt ante pretium sed. Aliquam sed augue eget mauris viverra consectetur. Morbi velit risus, hendrerit eget blandit non, accumsan non magna. Sed ac ipsum vitae mi suscipit placerat. Morbi ultrices luctus urna non tempor. Aenean mollis rhoncus urna, id facilisis leo efficitur nec. Maecenas id fermentum sapien. In sit amet neque semper, sodales risus eget, mollis metus. Proin vitae leo arcu. Phasellus facilisis ipsum est, ut ultricies enim hendrerit a.\r\n\r\nDonec id quam vel lectus tempor commodo. Vivamus pharetra lacus tellus. Aenean convallis accumsan risus. Cras luctus laoreet efficitur. Donec tempus vehicula tortor a vestibulum. Sed pellentesque nunc lorem, id venenatis mi posuere vel. In convallis fermentum ligula, at mattis arcu bibendum quis. Aliquam erat volutpat. Pellentesque congue nunc ipsum, et gravida lectus ornare eget. Proin et velit sapien. Vestibulum tempus, ex at iaculis bibendum, nunc mi pretium nulla, nec finibus dui mi nec dui. Morbi velit eros, dictum ut enim eu, elementum feugiat nibh. Vestibulum hendrerit erat sed risus vehicula, vel aliquet purus ultrices. Nulla sit amet luctus risus. Pellentesque vehicula auctor nunc, eget molestie metus vehicula id. Nulla sed odio nulla.\r\n\r\nCurabitur ultricies, turpis vitae finibus placerat, lectus leo vestibulum velit, hendrerit suscipit felis ante vitae ligula. Integer volutpat turpis tellus, vel pretium sem accumsan non. Aliquam erat volutpat. Fusce molestie ligula eros, et vestibulum elit sollicitudin quis. Proin at sapien non lorem accumsan aliquet. Vivamus ac ante et ipsum porttitor sodales eget tempor massa. Ut ut orci lectus. Donec euismod quam vel gravida convallis. Pellentesque consequat, risus vel convallis viverra, lectus leo pharetra lacus, at facilisis justo augue vel ligula. Curabitur vulputate augue vitae mi viverra, in dignissim mi consectetur. Vestibulum venenatis nisi quis tellus volutpat, quis tincidunt felis finibus.\r\nAliquam eros ex, malesuada eget nisi in, tincidunt dignissim neque. Maecenas id eros convallis, tincidunt sapien ut, malesuada erat. Aenean tincidunt quam sed feugiat egestas. Phasellus ac sodales mauris. Donec malesuada, nulla et mollis tristique, felis diam iaculis purus, non rutrum libero lectus a nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sem turpis, fringilla ut porta et, tincidunt id lorem. Nam ut vulputate enim, et placerat lorem. Nunc orci sapien, tempus ut pulvinar quis, ultrices at ligula. Nunc luctus neque et condimentum condimentum. Nullam viverra ultrices ligula ut ullamcorper. Integer at nisi euismod, egestas dolor at, placerat magna. Mauris at venenatis leo. Duis ac massa eget neque lobortis venenatis non nec velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non lorem ut leo mattis rutrum vitae nec lectus.\r\n\r\nEtiam ut nisi ac nisi pellentesque dignissim a id libero. Suspendisse molestie lectus at orci auctor tincidunt. Fusce auctor ex tincidunt massa fermentum, accumsan volutpat velit feugiat. Ut leo ligula, consectetur vitae pretium non, rutrum nec nisl. Mauris ipsum lacus, pellentesque vitae eleifend sed, ullamcorper sit amet lectus. Vivamus leo elit, placerat sit amet mattis sed, semper ut ex. Sed vel nunc rutrum, gravida magna at, ultricies nulla.\r\n\r\nSuspendisse et blandit lectus. Integer rutrum consequat eleifend. Nam lectus felis, sollicitudin a laoreet quis, faucibus eget dolor. Etiam gravida elit vel felis pulvinar lobortis. Aenean fermentum mi massa, at convallis lacus laoreet non. Praesent a aliquam dui. Vestibulum at est accumsan, laoreet nisl vestibulum, tristique odio. Donec euismod urna in ultricies congue. Etiam sodales viverra dictum. Nulla sed turpis mi. In hendrerit tellus ultricies tincidunt ultrices. Cras viverra eleifend neque, non posuere urna pharetra sit amet. Pellentesque non tellus erat. Integer non ex aliquam dolor pharetra consequat. Sed venenatis viverra erat sit amet pulvinar.\r\n\r\nPraesent aliquam nunc vitae arcu semper faucibus. Maecenas vitae magna a magna efficitur pellentesque. Sed ultricies est ultrices sapien cursus porttitor. Ut aliquet a metus id ultricies. Morbi congue turpis eu nisi mattis, id volutpat mauris lobortis. Sed non blandit nisi. Mauris fringilla purus augue, eu rhoncus justo tempor non. Proin nec risus efficitur, dictum sapien sed, bibendum elit. Donec sodales nisi eget orci gravida, in vehicula nibh pretium.\r\n\r\nNullam viverra turpis aliquet ante congue, vitae fermentum enim luctus. Sed sit amet malesuada purus. Mauris consectetur elit velit, sit amet suscipit ipsum interdum nec. Ut sit amet ligula ac leo posuere commodo quis eu ex. Fusce eleifend, erat eget auctor dignissim, libero felis gravida quam, malesuada vehicula nisi metus sed lectus. Integer vestibulum tristique erat malesuada hendrerit. Pellentesque rhoncus purus id lorem facilisis, nec accumsan lacus ullamcorper. Donec dictum tempor felis sed facilisis. Ut finibus massa eu egestas molestie. Aenean in sapien quam. Nullam et lacinia libero. Cras ac pulvinar arcu. Mauris consectetur scelerisque ipsum fringilla eleifend. Vivamus et tincidunt ex.\r\n\r\nAenean eu orci ipsum. Vestibulum dignissim ut orci a placerat. Donec pellentesque dui et tortor gravida feugiat. Duis ac placerat ex. Aenean a sem eget est pulvinar porttitor sit amet quis velit. Duis vehicula, magna porta facilisis mattis, justo tortor suscipit sem, eget bibendum purus diam vitae lacus. Fusce pretium lectus eu augue volutpat consectetur. Suspendisse auctor semper libero, quis posuere nibh pharetra aliquam. Fusce maximus vitae tellus non consectetur. Suspendisse vel odio eget ligula rhoncus dignissim hendrerit aliquam arcu. Sed eget nisi non risus sollicitudin suscipit. Vestibulum commodo ut lacus a iaculis. Vivamus quis lacus libero.\r\n\r\nSuspendisse potenti. Vestibulum porttitor libero sapien, in tincidunt ante pretium sed. Aliquam sed augue eget mauris viverra consectetur. Morbi velit risus, hendrerit eget blandit non, accumsan non magna. Sed ac ipsum vitae mi suscipit placerat. Morbi ultrices luctus urna non tempor. Aenean mollis rhoncus urna, id facilisis leo efficitur nec. Maecenas id fermentum sapien. In sit amet neque semper, sodales risus eget, mollis metus. Proin vitae leo arcu. Phasellus facilisis ipsum est, ut ultricies enim hendrerit a.\r\n\r\nDonec id quam vel lectus tempor commodo. Vivamus pharetra lacus tellus. Aenean convallis accumsan risus. Cras luctus laoreet efficitur. Donec tempus vehicula tortor a vestibulum. Sed pellentesque nunc lorem, id venenatis mi posuere vel. In convallis fermentum ligula, at mattis arcu bibendum quis. Aliquam erat volutpat. Pellentesque congue nunc ipsum, et gravida lectus ornare eget. Proin et velit sapien. Vestibulum tempus, ex at iaculis bibendum, nunc mi pretium nulla, nec finibus dui mi nec dui. Morbi velit eros, dictum ut enim eu, elementum feugiat nibh. Vestibulum hendrerit erat sed risus vehicula, vel aliquet purus ultrices. Nulla sit amet luctus risus. Pellentesque vehicula auctor nunc, eget molestie metus vehicula id. Nulla sed odio nulla.\r\n\r\nCurabitur ultricies, turpis vitae finibus placerat, lectus leo vestibulum velit, hendrerit suscipit felis ante vitae ligula. Integer volutpat turpis tellus, vel pretium sem accumsan non. Aliquam erat volutpat. Fusce molestie ligula eros, et vestibulum elit sollicitudin quis. Proin at sapien non lorem accumsan aliquet. Vivamus ac ante et ipsum porttitor sodales eget tempor massa. Ut ut orci lectus. Donec euismod quam vel gravida convallis. Pellentesque consequat, risus vel convallis viverra, lectus leo pharetra lacus, at facilisis justo augue vel ligula. Curabitur vulputate augue vitae mi viverra, in dignissim mi consectetur. Vestibulum venenatis nisi quis tellus volutpat, quis tincidunt felis finibus.');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (0000000001,'ALGORITMO','Esta categoria es solo para algoritmo');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `estado` char(1) DEFAULT '1',
  `email` varchar(100) NOT NULL,
  `img_perfil` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Miguel','Maza','MiguelMfz','12345678','1','miguelmazafernandez@gmail.com','img_miguelmfz.jpg');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-10 20:21:16
