CREATE TABLE IF NOT EXISTS `is_example` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

 
INSERT INTO `is_example` (`id`, `naam`, `achternaam`) VALUES
(1, 'Jos ', 'Jansen'),
(2, 'Doris', 'Cussel'),
(3, 'Rens', 'Ventura'),
(4, 'Remco ', 'Janson'),
(5, 'Ivan', 'Stoyanov'),
(6, 'Lionel ', 'Messi');
