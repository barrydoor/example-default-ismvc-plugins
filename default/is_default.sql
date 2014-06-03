CREATE TABLE IF NOT EXISTS `is_default` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

INSERT INTO `is_default` (`id`, `item`) VALUES
(1, 'item 1'),
(2, 'item 2'),
(3, 'Item 3');
