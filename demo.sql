# Host: localhost  (Version: 5.7.26)
# Date: 2020-12-17 19:11:15
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "login"
#

CREATE TABLE `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "login"
#


#
# Structure for table "pagecontent"
#

CREATE TABLE `pagecontent` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "pagecontent"
#

INSERT INTO `pagecontent` VALUES (1,'赚取.png','入住酒店赚取奖励积分','您以合资格房价入住香格里拉集团旗下酒店或在酒店进行消费均可赚取贵宾金环会奖励积分。'),(2,'赚取2.png','非入住酒店赚取奖励积分','在酒店的餐饮及香格里拉Chi水疗合资格消费，均可赚取奖励积分。'),(3,'赚取3.png','入住酒店赚取飞行里程','入住酒店，您可选择赚取贵宾金环会奖励积分或您钟意的合作航空公司提供的飞行里程。'),(4,'优惠1.png','悠游杭州尊享礼遇','在2020年11月10日至2021年6月30日期间入住，贵宾金环会会员可享优享价优惠，最高可达八五折。'),(5,'优惠2.png','长滩岛假期，优享更多回馈','下榻香格里拉长滩岛度假酒店，享受15%餐饮消费额'),(6,'优惠1.png','悠游杭州尊享礼遇','在2020年11月10日至2021年6月30日期间入住，贵宾金环会会员可享优享价优惠，最高可达八五折。');

#
# Structure for table "registered"
#

CREATE TABLE `registered` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `DD` varchar(255) DEFAULT NULL,
  `MM` varchar(255) DEFAULT NULL,
  `YY` varchar(255) DEFAULT NULL,
  `nation` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Data for table "registered"
#

INSERT INTO `registered` VALUES (5,'张','三','2000','12','17','中国','wangc2692@gmail.com','1356899522','123456'),(6,'孙','小小','2000','12','17','中国','wangc2692@gmail.com','1234567','123456'),(8,'王','琛','2000','12','17','中国','wangc2692@gmail.com','1670920','123456'),(14,'李','四','2000','12','17','中国','wangc2692@gmail.com','123456','123456'),(15,'','','','','','','','',''),(16,'','','','','','','','','');

#
# Structure for table "reservation"
#

CREATE TABLE `reservation` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `nation` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `house` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "reservation"
#

INSERT INTO `reservation` VALUES (1,'','','','','',NULL),(2,'','','','','',''),(3,'','','','','',''),(4,'','','','','',''),(5,'','','','','',''),(6,'','','','','',''),(7,'','','','','',''),(8,'zhi','毕','中国','2373983905@qq.com','16605245378','豪华大床房'),(9,'','毕','中国','2373983905@qq.com','16605245378','豪华大床房'),(10,'','毕','中国','2373983905@qq.com','16605245378','豪华大床房');

#
# Structure for table "scene"
#

CREATE TABLE `scene` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `scename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "scene"
#

INSERT INTO `scene` VALUES (1,'包头香格里拉大酒店'),(2,'北海香格里拉大酒店'),(3,'北京中国大饭店'),(7,'包头香格里拉大酒店'),(8,'北海香格里拉大酒店'),(9,'北京中国大饭店'),(10,'包头香格里拉大酒店'),(11,'包头香格里拉大酒店'),(12,'包头香格里拉大酒店'),(13,'包头香格里拉大酒店'),(14,'包头香格里拉大酒店'),(15,'包头香格里拉大酒店'),(16,'包头香格里拉大酒店'),(17,'北京中国大饭店');

#
# Structure for table "wineshop"
#

CREATE TABLE `wineshop` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "wineshop"
#

INSERT INTO `wineshop` VALUES (1,'香港.png','港岛香格里拉大酒店','屡获殊荣的港岛香格里拉大酒店位于香港中心地带，拥有宽敞的奢华客房和套房。'),(2,'合肥.png','九龙香格里拉大酒店','九龙香格里拉大酒店\r\n俯瞰全球闻名的维多利亚港湾，坐落于尖沙咀东部购物和娱乐中心，非常便利。'),(3,'格纳.png','香港嘉里酒店','香港嘉里酒店拥有美妙绝伦的室内和室外空间，维多利亚港及香港岛天际线的美景尽收眼底，堪称繁华都市中的世外桃源。');
