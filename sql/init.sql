-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `ukulelearn` /*!40100 DEFAULT CHARACTER SET utf16 COLLATE utf16_czech_ci */;
USE `ukulelearn`;

DROP TABLE IF EXISTS `chords`;
CREATE TABLE `chords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf16_czech_ci NOT NULL,
  `notation` text COLLATE utf16_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_czech_ci;

INSERT INTO `chords` (`id`, `name`, `notation`) VALUES
(0,	'C','0-0-0-3'),
(1,'G','0-2-3-2'),
(2,'Am','2-0-0-0'),
(3,'F','2-0-1-0');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf16_czech_ci NOT NULL,
  `registered` datetime NOT NULL,
  `is_admin` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_czech_ci;

INSERT INTO `users` (`id`, `username`, `registered`, `is_admin`) VALUES
(0,	'admin',	'0000-00-00 00:00:00',	1),
(1,	'user',	'0000-00-00 00:00:00',	0);

DROP TABLE IF EXISTS `artists`;
CREATE TABLE `artists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf16_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_czech_ci;

INSERT INTO `artists` (`id`, `name`) VALUES
(0,	'Jason Mraz'),
(1,'Imagine Dragons');

DROP TABLE IF EXISTS `songs`;
CREATE TABLE `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf16_czech_ci NOT NULL,
  `text` text COLLATE utf16_czech_ci NOT NULL,
  `artist_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `artist_id` (`artist_id`),
  CONSTRAINT `song_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_czech_ci;

INSERT INTO `songs` (`id`, `title`, `text`, `artist_id`) VALUES
(0,	'Radioactive',	'I''m waking up to ash and dust',1);