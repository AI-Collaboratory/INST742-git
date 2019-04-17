-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: example
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1-log

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
-- Table structure for table `body`
--

DROP TABLE IF EXISTS `body`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `body` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_id` int(11) NOT NULL,
  `host_type` char(1) NOT NULL,
  `revision` int(11) NOT NULL,
  `body_text` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `body`
--

LOCK TABLES `body` WRITE;
/*!40000 ALTER TABLE `body` DISABLE KEYS */;
INSERT INTO `body` VALUES (1,1,'P',1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum vestibulum commodo. Sed at urna bibendum, porttitor felis euismod, feugiat orci. Duis nec nibh sodales, imperdiet enim vitae, dignissim sapien. Duis tristique efficitur ligula aliquam porttitor. Duis malesuada commodo elit sed tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur euismod, sapien nec feugiat aliquet, neque neque cursus mi, nec dapibus turpis lectus finibus purus. Fusce non nunc tortor. Praesent ornare magna ac erat laoreet, eu aliquam nibh sollicitudin. Fusce et egestas velit, egestas facilisis orci. Etiam aliquet id sapien id mattis. Donec pharetra eros nec orci porttitor, quis consectetur augue molestie. Donec ligula felis, congue eget sem in, varius viverra elit.'),(2,1,'P',2,'Duis tristique efficitur ligula aliquam porttitor. Fusce non nunc tortor. Praesent ornare magna ac erat laoreet, eu aliquam nibh sollicitudin. Fusce et egestas velit, egestas facilisis orci. Etiam aliquet id sapien id mattis. Donec pharetra eros nec orci porttitor, quis consectetur augue molestie. Donec ligula felis, congue eget sem in, varius viverra elit.'),(3,1,'P',3,'Vestibulum volutpat diam eros, ut vehicula velit semper scelerisque. Nam nec lectus efficitur, fringilla massa a, fermentum lorem. Duis a tristique nulla, hendrerit convallis mauris. Donec non efficitur sem. Donec eleifend tellus eget eros tempus, in ultricies diam mattis. Donec risus lectus, auctor in enim et, venenatis elementum sem. Integer vel vehicula lorem. Sed dapibus justo nec ligula bibendum tempus. Quisque laoreet hendrerit lorem ac sodales. Quisque non urna nec metus egestas rhoncus. Cras blandit tortor et tincidunt pulvinar.'),(4,2,'P',1,'Nunc scelerisque, ante a egestas gravida, purus libero dapibus dolor, sit amet blandit diam dui ut nulla. Morbi ut velit sed ligula euismod tristique. Duis fermentum, neque id eleifend cursus, enim dolor elementum enim, ac faucibus nisl nulla vel mauris. Cras libero urna, euismod quis fermentum sit amet, varius lobortis lectus. Donec at risus ac urna convallis egestas. Nunc egestas ullamcorper lobortis. Donec commodo quam ac risus pulvinar fringilla. Proin leo purus, semper ut venenatis vel, pulvinar eu risus. Fusce at mauris purus. Aliquam porta arcu at lectus faucibus, ut viverra magna tristique. Etiam convallis purus at facilisis convallis. Sed ante magna, laoreet vel massa eu, pulvinar laoreet odio. Nunc nec cursus orci, vel euismod tellus. Sed blandit dapibus urna vestibulum varius. Curabitur eget erat sed nunc volutpat vehicula.'),(5,2,'P',2,'Aliquam porta arcu at lectus faucibus, ut viverra magna tristique. Etiam convallis purus at facilisis convallis. Sed ante magna, laoreet vel massa eu, pulvinar laoreet odio. Nunc nec cursus orci, vel euismod tellus. Sed blandit dapibus urna vestibulum varius. Curabitur eget erat sed nunc volutpat vehicula. Nunc scelerisque, ante a egestas gravida, purus libero dapibus dolor, sit amet blandit diam dui ut nulla. Morbi ut velit sed ligula euismod tristique. Duis fermentum, neque id eleifend cursus, enim dolor elementum enim, ac faucibus nisl nulla vel mauris. Cras libero urna, euismod quis fermentum sit amet, varius lobortis lectus. Donec at risus ac urna convallis egestas. Nunc egestas ullamcorper lobortis. Donec commodo quam ac risus pulvinar fringilla. Proin leo purus, semper ut venenatis vel, pulvinar eu risus. Fusce at mauris purus. '),(6,1,'C',1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sollicitudin metus. In vestibulum eleifend orci, vitae dapibus metus pulvinar quis. Etiam et tellus quis diam tincidunt sagittis et ut mauris. Integer a mi nec augue ultrices tempor. Ut feugiat mi eu tortor ornare eleifend. Morbi pharetra consectetur sapien non placerat. Fusce tincidunt, mi vel pulvinar varius, est libero vulputate enim, ac pulvinar odio lorem eget nulla. Vestibulum nec ipsum mauris. Etiam sit amet interdum sapien, vel pharetra lorem. Duis ac auctor magna. Nunc eu finibus diam, non malesuada nisl. Nullam pharetra nec sapien id hendrerit. Curabitur fermentum dui sed diam elementum aliquam. Aliquam eu placerat odio, quis mollis nisi.\r\n\r\nInteger maximus, ex eget rhoncus tristique, urna eros sodales leo, et accumsan libero justo in risus. Nullam vulputate dui ut dui dignissim, sit amet pulvinar orci pretium. Etiam a diam ligula. Aliquam venenatis tellus non ante iaculis pellentesque. Aliquam venenatis enim id pharetra hendrerit. Aenean ut faucibus eros, sed porta dolor. Vivamus faucibus dictum sapien, at tristique est auctor non. Sed condimentum nisl at vulputate elementum. Suspendisse eu massa eget massa ultricies tincidunt. Suspendisse semper, felis eget fermentum tristique, augue arcu pretium neque, in faucibus eros felis nec sem. Praesent ut sem ut sem dapibus condimentum lacinia ut felis. Praesent venenatis tortor at libero pharetra viverra. Nulla faucibus magna et scelerisque tincidunt. Morbi sollicitudin pretium erat.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam rhoncus ultricies magna id rhoncus. Sed sit amet purus vel lorem elementum condimentum. Maecenas ornare ipsum massa, ac ultricies est vulputate nec. Morbi euismod libero sed posuere placerat. Nulla facilisi. Mauris vitae odio ut ante aliquam vehicula. Fusce in aliquet lacus. Curabitur auctor finibus quam, ut convallis orci ultricies vitae. Phasellus convallis metus id feugiat auctor. Aenean non sem feugiat, faucibus mi in, viverra sem. Sed auctor pharetra velit, vitae efficitur quam vulputate eget. Aliquam laoreet orci tortor, ac interdum ligula elementum quis.'),(7,1,'C',2,'Aliquam venenatis enim id pharetra hendrerit. Aenean ut faucibus eros, sed porta dolor. Vivamus faucibus dictum sapien, at tristique est auctor non. Sed condimentum nisl at vulputate elementum. Suspendisse eu massa eget massa ultricies tincidunt. Suspendisse semper, felis eget fermentum tristique, augue arcu pretium neque, in faucibus eros felis nec sem. Praesent ut sem ut sem dapibus condimentum lacinia ut felis. Praesent venenatis tortor at libero pharetra viverra. Nulla faucibus magna et scelerisque tincidunt. Morbi sollicitudin pretium erat.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam rhoncus ultricies magna id rhoncus. Sed sit amet purus vel lorem elementum condimentum. Maecenas ornare ipsum massa, ac ultricies est vulputate nec. Morbi euismod libero sed posuere placerat. Nulla facilisi. Mauris vitae odio ut ante aliquam vehicula. Fusce in aliquet lacus. Curabitur auctor finibus quam, ut convallis orci ultricies vitae. Phasellus convallis metus id feugiat auctor. Aenean non sem feugiat, faucibus mi in, viverra sem. Sed auctor pharetra velit, vitae efficitur quam vulputate eget. Aliquam laoreet orci tortor, ac interdum ligula elementum quis.'),(8,2,'C',1,'Fusce in aliquet lacus. Curabitur auctor finibus quam, ut convallis orci ultricies vitae. Phasellus convallis metus id feugiat auctor. Aenean non sem feugiat, faucibus mi in, viverra sem. Sed auctor pharetra velit, vitae efficitur quam vulputate eget. Aliquam laoreet orci tortor, ac interdum ligula elementum quis.'),(9,3,'C',1,'Integer maximus, ex eget rhoncus tristique, urna eros sodales leo, et accumsan libero justo in risus. Nullam vulputate dui ut dui dignissim, sit amet pulvinar orci pretium. Etiam a diam ligula. Aliquam venenatis tellus non ante iaculis pellentesque. Aliquam venenatis enim id pharetra hendrerit. Aenean ut faucibus eros, sed porta dolor. Vivamus faucibus dictum sapien, at tristique est auctor non. Sed condimentum nisl at vulputate elementum. Suspendisse eu massa eget massa ultricies tincidunt. Suspendisse semper, felis eget fermentum tristique, augue arcu pretium neque, in faucibus eros felis nec sem. Praesent ut sem ut sem dapibus condimentum lacinia ut felis. Praesent venenatis tortor at libero pharetra viverra. Nulla faucibus magna et scelerisque tincidunt. Morbi sollicitudin pretium erat.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ula. Fusce in aliquet lacus. Curabitur auctor finibus quam, ut convallis orci ultricies vitae. Phasellus convallis metus id feugiat auctor. Aenean non sem feugiat, faucibus mi in, viverra sem. Sed auctor pharetra velit, vitae efficitur quam vulputate eget. Aliquam laoreet orci tortor, ac interdum ligula elementum quis.'),(10,4,'C',1,'Suspendisse eu massa eget massa ultricies tincidunt. Suspendisse semper, felis eget fermentum tristique, augue arcu pretium neque, in faucibus eros felis nec sem. Praesent ut sem ut sem dapibus condimentum lacinia ut felis. Praesent venenatis tortor at libero pharetra viverra. Nulla faucibus magna et scelerisque tincidunt. Morbi sollicitudin pretium erat.\r\n'),(11,5,'C',1,'Vivamus faucibus dictum sapien, at tristique est auctor non. Sed condimentum nisl at vulputate elementum. Suspendisse eu massa eget massa ultricies tincidunt. Suspendisse semper, felis eget fermentum tristique, augue arcu pretium neque, in faucibus eros felis nec sem. Praesent ut sem ut sem dapibus condimentum lacinia ut felis. Praesent venenatis tortor at libero pharetra viverra. Nulla faucibus magna et scelerisque tincidunt. Morbi sollicitudin pretium erat.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ');
/*!40000 ALTER TABLE `body` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` varchar(45) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(128) NOT NULL DEFAULT 'anonymous',
  `title` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,'1','2017-12-03 19:22:40','j.doe@gmail.com','Phasellus ullamcorper sed tellus'),(2,'1','2017-12-03 19:24:15','b.blair@gmail.com','Quisque vitae lorem metus'),(3,'2','2017-12-03 19:24:55','ggg123@aol.com','Nunc scelerisque, ante a egestas gravida'),(4,'2','2017-12-03 19:25:24','o.prime@cybertron.com','Nullam risus enim, fringilla in urna eu'),(5,'2','2017-12-03 19:25:42','jlpicard@starfleet.org','Curabitur a aliquam urna');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(128) DEFAULT 'anonymous',
  `title` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'2017-12-03 18:53:32','sdcoates@umd.edu','Lorem Ipsum'),(2,'2017-12-03 19:16:56','d.who@bbc.co.uk','Another Lorem Ipsum');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `page1_view`
--

DROP TABLE IF EXISTS `page1_view`;
/*!50001 DROP VIEW IF EXISTS `page1_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `page1_view` AS SELECT 
 1 AS `created`,
 1 AS `author`,
 1 AS `revision`,
 1 AS `type`,
 1 AS `title`,
 1 AS `body_text`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `page1_view`
--

/*!50001 DROP VIEW IF EXISTS `page1_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `page1_view` AS select `my_derived_table`.`created` AS `created`,`my_derived_table`.`author` AS `author`,`my_derived_table`.`revision` AS `revision`,`my_derived_table`.`type` AS `type`,`my_derived_table`.`title` AS `title`,`my_derived_table`.`body_text` AS `body_text` from (select `pg`.`created` AS `created`,`pg`.`author` AS `author`,`bd`.`revision` AS `revision`,`bd`.`host_type` AS `type`,`pg`.`title` AS `title`,`bd`.`body_text` AS `body_text` from (`example`.`page` `pg` join `example`.`body` `bd` on((`pg`.`id` = `bd`.`host_id`))) where ((`pg`.`id` = 1) and (`bd`.`host_type` = 'P')) union select `co`.`created` AS `created`,`co`.`author` AS `author`,`bd`.`revision` AS `revision`,`bd`.`host_type` AS `type`,`co`.`title` AS `title`,`bd`.`body_text` AS `body_text` from (`example`.`comment` `co` join `example`.`body` `bd` on((`co`.`id` = `bd`.`host_id`))) where ((`co`.`page_id` = 1) and (`bd`.`host_type` = 'C'))) `my_derived_table` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-04 17:27:49
