-- MySQL dump 10.13  Distrib 5.5.47, for Win32 (x86)
--
-- Host: localhost    Database: db_normal
-- ------------------------------------------------------
-- Server version	5.5.47

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
-- Table structure for table `db_role`
--

DROP TABLE IF EXISTS `db_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_role` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) NOT NULL DEFAULT '' COMMENT '角色名称',
  `role_desc` varchar(200) NOT NULL DEFAULT '' COMMENT '角色描述',
  `role_permission` text COMMENT '角色具有的权限',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='角色表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `db_role`
--

LOCK TABLES `db_role` WRITE;
/*!40000 ALTER TABLE `db_role` DISABLE KEYS */;
INSERT INTO `db_role` VALUES (1,'站长','具有全部权限','a:4:{i:1;a:9:{i:0;s:1:\"9\";i:1;s:2:\"10\";i:2;s:2:\"11\";i:3;s:2:\"12\";i:4;s:2:\"13\";i:5;s:1:\"7\";i:6;s:2:\"14\";i:7;s:1:\"8\";i:8;s:2:\"15\";}i:2;a:2:{i:0;s:2:\"16\";i:1;s:2:\"17\";}i:3;a:5:{i:0;s:2:\"18\";i:1;s:2:\"21\";i:2;s:2:\"22\";i:3;s:2:\"23\";i:4;s:2:\"24\";}i:4;a:3:{i:0;s:2:\"25\";i:1;s:2:\"26\";i:2;s:2:\"27\";}}'),(2,'超级管理员','辅助站长','a:4:{i:1;a:4:{i:0;s:2:\"11\";i:1;s:2:\"12\";i:2;s:2:\"13\";i:3;s:1:\"7\";}i:2;a:2:{i:0;s:2:\"16\";i:1;s:2:\"17\";}i:3;a:5:{i:0;s:2:\"18\";i:1;s:2:\"21\";i:2;s:2:\"22\";i:3;s:2:\"23\";i:4;s:2:\"24\";}i:4;a:3:{i:0;s:2:\"25\";i:1;s:2:\"26\";i:2;s:2:\"27\";}}'),(3,'内容编辑','编辑内容的管理员','a:1:{i:4;a:3:{i:0;s:2:\"25\";i:1;s:2:\"26\";i:2;s:2:\"27\";}}');
/*!40000 ALTER TABLE `db_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-12  8:58:30
