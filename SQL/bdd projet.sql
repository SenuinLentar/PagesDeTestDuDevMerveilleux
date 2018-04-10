-- --------------------------------------------------------
-- Hôte :                        178.62.4.64
-- Version du serveur:           5.5.59-0+deb7u1 - (Debian)
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la table BDDWeb. Comments
CREATE TABLE IF NOT EXISTS `Comments` (
  `IDComment` int(11) NOT NULL AUTO_INCREMENT,
  `CommentContent` varchar(255) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `IDPhoto` int(11) NOT NULL,
  PRIMARY KEY (`IDComment`),
  KEY `FK_Comments_IDUser` (`IDUser`),
  KEY `FK_Comments_IDPhoto` (`IDPhoto`),
  CONSTRAINT `FK_Comments_IDPhoto` FOREIGN KEY (`IDPhoto`) REFERENCES `Photo` (`IDPhoto`),
  CONSTRAINT `FK_Comments_IDUser` FOREIGN KEY (`IDUser`) REFERENCES `Users` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.Comments : ~0 rows (environ)
DELETE FROM `Comments`;
/*!40000 ALTER TABLE `Comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `Comments` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. EventCategory
CREATE TABLE IF NOT EXISTS `EventCategory` (
  `NameEventCategory` varchar(255) NOT NULL,
  PRIMARY KEY (`NameEventCategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.EventCategory : ~0 rows (environ)
DELETE FROM `EventCategory`;
/*!40000 ALTER TABLE `EventCategory` DISABLE KEYS */;
/*!40000 ALTER TABLE `EventCategory` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. Goodies
CREATE TABLE IF NOT EXISTS `Goodies` (
  `NameGoodies` varchar(25) NOT NULL,
  `Price` int(11) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `NameGoodiesCategory` varchar(255) NOT NULL,
  PRIMARY KEY (`NameGoodies`),
  KEY `FK_Goodies_NameGoodiesCategory` (`NameGoodiesCategory`),
  CONSTRAINT `FK_Goodies_NameGoodiesCategory` FOREIGN KEY (`NameGoodiesCategory`) REFERENCES `GoodiesCategory` (`NameGoodiesCategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.Goodies : ~0 rows (environ)
DELETE FROM `Goodies`;
/*!40000 ALTER TABLE `Goodies` DISABLE KEYS */;
/*!40000 ALTER TABLE `Goodies` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. GoodiesCategory
CREATE TABLE IF NOT EXISTS `GoodiesCategory` (
  `NameGoodiesCategory` varchar(255) NOT NULL,
  PRIMARY KEY (`NameGoodiesCategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.GoodiesCategory : ~0 rows (environ)
DELETE FROM `GoodiesCategory`;
/*!40000 ALTER TABLE `GoodiesCategory` DISABLE KEYS */;
/*!40000 ALTER TABLE `GoodiesCategory` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. Happenings
CREATE TABLE IF NOT EXISTS `Happenings` (
  `IDEvent` int(11) NOT NULL AUTO_INCREMENT,
  `NameEvent` varchar(255) NOT NULL,
  `EventDate` date DEFAULT NULL,
  `Free` tinyint(1) DEFAULT NULL,
  `Recurrent` tinyint(1) DEFAULT NULL,
  `Validate` tinyint(1) DEFAULT NULL,
  `Description` varchar(3000) DEFAULT NULL,
  `IDUser` int(11) NOT NULL,
  `NameEventCategory` varchar(255) NOT NULL,
  PRIMARY KEY (`IDEvent`),
  KEY `FK_Happenings_IDUser` (`IDUser`),
  KEY `FK_Happenings_NameEventCategory` (`NameEventCategory`),
  CONSTRAINT `FK_Happenings_NameEventCategory` FOREIGN KEY (`NameEventCategory`) REFERENCES `EventCategory` (`NameEventCategory`),
  CONSTRAINT `FK_Happenings_IDUser` FOREIGN KEY (`IDUser`) REFERENCES `Users` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.Happenings : ~0 rows (environ)
DELETE FROM `Happenings`;
/*!40000 ALTER TABLE `Happenings` DISABLE KEYS */;
/*!40000 ALTER TABLE `Happenings` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. Interest
CREATE TABLE IF NOT EXISTS `Interest` (
  `Participate` tinyint(1) DEFAULT NULL,
  `Vote` tinyint(1) DEFAULT NULL,
  `IDUser` int(11) NOT NULL,
  `IDEvent` int(11) NOT NULL,
  PRIMARY KEY (`IDUser`,`IDEvent`),
  KEY `FK_Interest_IDEvent` (`IDEvent`),
  CONSTRAINT `FK_Interest_IDEvent` FOREIGN KEY (`IDEvent`) REFERENCES `Happenings` (`IDEvent`),
  CONSTRAINT `FK_Interest_IDUser` FOREIGN KEY (`IDUser`) REFERENCES `Users` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.Interest : ~0 rows (environ)
DELETE FROM `Interest`;
/*!40000 ALTER TABLE `Interest` DISABLE KEYS */;
/*!40000 ALTER TABLE `Interest` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. Likes
CREATE TABLE IF NOT EXISTS `Likes` (
  `LikeOrNot` tinyint(1) DEFAULT NULL,
  `IDUser` int(11) NOT NULL,
  `IDPhoto` int(11) NOT NULL,
  PRIMARY KEY (`IDUser`,`IDPhoto`),
  KEY `FK_Likes_IDPhoto` (`IDPhoto`),
  CONSTRAINT `FK_Likes_IDPhoto` FOREIGN KEY (`IDPhoto`) REFERENCES `Photo` (`IDPhoto`),
  CONSTRAINT `FK_Likes_IDUser` FOREIGN KEY (`IDUser`) REFERENCES `Users` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.Likes : ~0 rows (environ)
DELETE FROM `Likes`;
/*!40000 ALTER TABLE `Likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `Likes` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. Orders
CREATE TABLE IF NOT EXISTS `Orders` (
  `IDOrder` int(11) NOT NULL AUTO_INCREMENT,
  `IDUser` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `NameGoodies` varchar(25) NOT NULL,
  PRIMARY KEY (`IDOrder`),
  KEY `FK_Orders_IDUser` (`IDUser`),
  KEY `FK_Orders_NameGoodies` (`NameGoodies`),
  CONSTRAINT `FK_Orders_NameGoodies` FOREIGN KEY (`NameGoodies`) REFERENCES `Goodies` (`NameGoodies`),
  CONSTRAINT `FK_Orders_IDUser` FOREIGN KEY (`IDUser`) REFERENCES `Users` (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.Orders : ~0 rows (environ)
DELETE FROM `Orders`;
/*!40000 ALTER TABLE `Orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `Orders` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. PartOf
CREATE TABLE IF NOT EXISTS `PartOf` (
  `Role` varchar(255) NOT NULL,
  `IDUser` int(11) NOT NULL,
  PRIMARY KEY (`Role`,`IDUser`),
  KEY `FK_PartOf_IDUser` (`IDUser`),
  CONSTRAINT `FK_PartOf_IDUser` FOREIGN KEY (`IDUser`) REFERENCES `Users` (`IDUser`),
  CONSTRAINT `FK_PartOf_Role` FOREIGN KEY (`Role`) REFERENCES `UserRole` (`Role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.PartOf : ~0 rows (environ)
DELETE FROM `PartOf`;
/*!40000 ALTER TABLE `PartOf` DISABLE KEYS */;
/*!40000 ALTER TABLE `PartOf` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. Photo
CREATE TABLE IF NOT EXISTS `Photo` (
  `IDPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `Url` varchar(255) DEFAULT NULL,
  `IDEvent` int(11) NOT NULL,
  PRIMARY KEY (`IDPhoto`),
  KEY `FK_Photo_IDEvent` (`IDEvent`),
  CONSTRAINT `FK_Photo_IDEvent` FOREIGN KEY (`IDEvent`) REFERENCES `Happenings` (`IDEvent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.Photo : ~0 rows (environ)
DELETE FROM `Photo`;
/*!40000 ALTER TABLE `Photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `Photo` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. UserRole
CREATE TABLE IF NOT EXISTS `UserRole` (
  `Role` varchar(255) NOT NULL,
  PRIMARY KEY (`Role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.UserRole : ~0 rows (environ)
DELETE FROM `UserRole`;
/*!40000 ALTER TABLE `UserRole` DISABLE KEYS */;
/*!40000 ALTER TABLE `UserRole` ENABLE KEYS */;

-- Export de la structure de la table BDDWeb. Users
CREATE TABLE IF NOT EXISTS `Users` (
  `IDUser` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(255) NOT NULL,
  `UserPassword` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Role` varchar(25) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `salt` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IDUser`),
  UNIQUE KEY `Login` (`Login`,`Mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table BDDWeb.Users : ~0 rows (environ)
DELETE FROM `Users`;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
