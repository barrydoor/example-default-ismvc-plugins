CREATE TABLE IF NOT EXISTS `is_bloeddruk` (
  `id_rel` int(11) NOT NULL AUTO_INCREMENT,
  `hoog` int(11) NOT NULL,
  `laag` int(11) NOT NULL,
  `puls` int(11) NOT NULL,
  `tijd` varchar(20) NOT NULL,
  PRIMARY KEY (`id_rel`),
  KEY `id_rel` (`id_rel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;
 
INSERT INTO `is_bloeddruk` (`id_rel`, `hoog`, `laag`, `puls`, `tijd`) VALUES
(35, 122, 77, 56, '26-03-2014 / 23:15'),
(45, 123, 321, 122, '11-04-2014 / 23:22');
