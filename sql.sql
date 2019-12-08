CREATE DATABASE `igloo` /*!40100 DEFAULT CHARACTER SET utf8 */;


CREATE TABLE `albums` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(45) DEFAULT NULL,
  `a_desc` varchar(120) DEFAULT NULL,
  `a_thumb` varchar(145) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

CREATE TABLE `images` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_name` varchar(45) DEFAULT NULL,
  `i_caption` varchar(45) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL,
  `i_title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;


INSERT INTO `igloo`.`images` (`i_name`, `i_caption`, `a_id`, `i_title`) VALUES ('thumb1.jpg', 'Lorem ipsum dolor sit amet,   elit. ', '1', 'Hi There');
INSERT INTO `igloo`.`images` (`i_name`, `i_caption`, `a_id`, `i_title`) VALUES ('thumb2.jpg', 'Lorem ipsum dolor sit amet,   elit. ', '1', 'Happy');
INSERT INTO `igloo`.`images` (`i_name`, `i_caption`, `a_id`, `i_title`) VALUES ('thumb3.jpg', 'Lorem ipsum dolor sit amet,   elit. ', '1', 'Family');
INSERT INTO `igloo`.`images` (`i_name`, `i_caption`, `a_id`, `i_title`) VALUES ('thumb4.jpg', 'Lorem ipsum dolor sit amet,   elit. ', '1', 'Friends');
INSERT INTO `igloo`.`images` (`i_name`, `i_caption`, `a_id`, `i_title`) VALUES ('thumb5.jpg', 'Lorem ipsum dolor sit amet,   elit. ', '1', 'Love Me');
INSERT INTO `igloo`.`images` (`i_name`, `i_caption`, `a_id`, `i_title`) VALUES ('thumb6.jpg', 'Lorem ipsum dolor sit amet,   elit. ', '1', 'Pretty');
INSERT INTO `igloo`.`images` (`i_name`, `i_caption`, `a_id`, `i_title`) VALUES ('thumb7.jpg', 'Lorem ipsum dolor sit amet,   elit. ', '1', 'Cute');
INSERT INTO `igloo`.`images` (`i_name`, `i_caption`, `a_id`, `i_title`) VALUES ('thumb8.jpg', 'Lorem ipsum dolor sit amet,   elit. ', '1', 'Random');
INSERT INTO `igloo`.`images` (`i_name`, `i_caption`, `a_id`, `i_title`) VALUES ('thumb9.jpg', 'Lorem ipsum dolor sit amet,   elit. ', '1', 'Okay');

INSERT INTO `igloo`.`albums` (`a_name`, `a_desc`, `a_thumb`) VALUES ('First', 'sdcsdcs', 'thumb1.jpg');
INSERT INTO `igloo`.`albums` (`a_name`, `a_desc`, `a_thumb`) VALUES ('Second', 'sdcsdcs', 'thumb2.jpg');
INSERT INTO `igloo`.`albums` (`a_name`, `a_desc`, `a_thumb`) VALUES ('Third', 'sdcsdcs', 'thumb3.jpg');
