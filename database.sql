create database school;

use school;

CREATE TABLE `list` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY  (`id`)
);
