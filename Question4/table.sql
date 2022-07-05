DROP TABLE IF EXISTS `myTable`;

CREATE TABLE `myTable` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `phone` varchar(100) default NULL,
  `email` varchar(255) default NULL,
  `country` varchar(100) default NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `myTable` (`name`,`phone`,`email`,`country`)
VALUES
  ("Nyssa Payne","(560) 181-7831","sed.eu@aol.edu","Brazil"),
  ("Barbara Myers","1-747-895-3525","amet.luctus@hotmail.couk","India"),
  ("Virginia Carver","1-220-737-6722","ac.mattis.semper@outlook.org","Poland"),
  ("Alea Paul","1-473-481-0560","vel.nisl@google.edu","Ireland"),
  ("Beatrice Blanchard","(864) 450-2131","congue.a.aliquet@yahoo.ca","Brazil");