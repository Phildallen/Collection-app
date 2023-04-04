# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.11.2-MariaDB-1:10.11.2+maria~ubu2204)
# Database: gamecollection
# Generation Time: 2023-04-04 09:55:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table developer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `developer`;

CREATE TABLE `developer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `developer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `developer` WRITE;
/*!40000 ALTER TABLE `developer` DISABLE KEYS */;

INSERT INTO `developer` (`id`, `developer`)
VALUES
	(1,'Nintendo'),
	(2,'Capcom'),
	(3,'Rare'),
	(4,'Psygnosis'),
	(5,'Probe Software'),
	(6,'Team17'),
	(7,'Konami'),
	(8,'Sunsoft'),
	(9,'Bullfrog');

/*!40000 ALTER TABLE `developer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table games
# ------------------------------------------------------------

DROP TABLE IF EXISTS `games`;

CREATE TABLE `games` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `developer` int(11) unsigned DEFAULT NULL,
  `genre` int(11) unsigned DEFAULT NULL,
  `maxplayers` int(11) unsigned DEFAULT NULL,
  `imglink` varchar(510) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `publisher` (`developer`),
  KEY `Test` (`genre`),
  CONSTRAINT `genre` FOREIGN KEY (`genre`) REFERENCES `genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `publisher` FOREIGN KEY (`developer`) REFERENCES `developer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;

INSERT INTO `games` (`id`, `name`, `developer`, `genre`, `maxplayers`, `imglink`)
VALUES
	(1,'Super Mario All Stars',1,1,2,'images/IMG_supermarallstrs.png'),
	(2,'Starwing',1,6,1,'images/IMG_starwing.png'),
	(3,'Street Figher 2',2,2,2,'images/IMG_streetfighter2.png'),
	(4,'Lemmings 2 Tribes',4,3,1,'images/IMG_lemmings2.png'),
	(5,'Alien 3',5,6,1,'images/IMG_alien3.png'),
	(6,'F-Zero ',1,4,2,'images/IMG_fzero.png'),
	(7,'Donkey Kong Country',3,1,2,'images/IMG_donkeykong.png'),
	(8,'Killer Instinct',3,2,2,'images/IMG_killerinstinct.png'),
	(9,'Worms',6,7,4,'images/IMG_worms.png'),
	(10,'Super Probotector: Alien Rebels',7,6,2,'images/IMG_probotector.png'),
	(11,'Hebereke\'s Popoon',8,3,2,'images/IMG_heberekespopoon.png'),
	(12,'Super Mario World',1,1,2,'images/IMG_supermarwrld.png'),
	(13,'Syndicate',9,6,1,'images/IMG_syndicate.png'),
	(14,'Mario Is Missing',1,3,1,'images/IMG_marioismissing.png'),
	(15,'The Legend of Zelda: A Link to the Past',1,5,1,'images/IMG_ledgezelda.png');

/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table genre
# ------------------------------------------------------------

DROP TABLE IF EXISTS `genre`;

CREATE TABLE `genre` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `genre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;

INSERT INTO `genre` (`id`, `genre`)
VALUES
	(1,'Platformer'),
	(2,'Fighting'),
	(3,'Puzzle'),
	(4,'Racing'),
	(5,'RPG'),
	(6,'Shooter'),
	(7,'Strategy'),
	(8,'Sunsoft');

/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
