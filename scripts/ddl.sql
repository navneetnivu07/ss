DROP DATABASE IF EXISTS `solar_pcu`;

CREATE DATABASE `solar_pcu`;

USE `solar_pcu`;

CREATE TABLE `solar_pcu`.`office_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(30) NOT NULL,
  `solv` float NOT NULL,
  `soli` float NOT NULL,
  `batv` float NOT NULL,
  `bati` float NOT NULL,
  `temp` int(11) NOT NULL,
  `trip` int(11) NOT NULL,
  `loadp` int(11) NOT NULL,
  `solp` int(11) NOT NULL,
  `solu` float NOT NULL,
  `solst` int(11) NOT NULL,
  `gridst` int(11) NOT NULL,
  `invst` int(11) NOT NULL,
  `batst` int(11) NOT NULL,
  `invv` int(11) NOT NULL,
  `opv` int(11) NOT NULL,
  `gridv` int(11) NOT NULL,
  `ipf` int(11) NOT NULL,
  `opf` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
