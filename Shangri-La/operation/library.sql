# Host: localhost  (Version: 5.7.26)
# Date: 2020-11-21 10:02:37
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "lib"
#

DROP TABLE IF EXISTS `lib`;
CREATE TABLE `lib` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `birth` varchar(255) DEFAULT NULL,
  `entry` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "lib"
#

/*!40000 ALTER TABLE `lib` DISABLE KEYS */;
INSERT INTO `lib` VALUES (1,'张三','市场部','2008-04-03 13：33：00','2014-09-22 17：53：00'),(2,'李四','开发部','2008-04-03 13：33：00','2013-10-25 17：53：00'),(3,'王五','媒体部','2008-04-03 13：33：00','2015-04-21 13：33：00'),(4,'赵六','销售部','2008-04-03 13：33：00','2015-03-20 17：54：00');
/*!40000 ALTER TABLE `lib` ENABLE KEYS */;

