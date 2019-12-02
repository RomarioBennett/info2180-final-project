GRANT ALL PRIVILEGES ON schem.* TO 'user'@'localhost' IDENTIFIED BY 'password123';
DROP DATABASE IF EXISTS schem;/*CREATES DATABASE*/
CREATE DATABASE schem;
USE schem;

DROP TABLE IF EXISTS `Users`;/*CREATES USER TABLE*/
CREATE TABLE `Users` (
`ID` INT(7) NOT NULL auto_increment, 
`firstname` VARCHAR(32) NOT NULL DEFAULT '',
`lastname` VARCHAR(32) NOT NULL DEFAULT '',
`password` VARCHAR(32) NOT NULL DEFAULT '',
`email` VARCHAR(32) NOT NULL DEFAULT '',
`date_joined` DATE NOT NULL DEFAULT '',
PRIMARY KEY ('ID')
)  ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

INSERT INTO `Users`(`firstname`,`lastname`,`password`,`email`,`date_joined`) VALUES
('John', 'Brown', md5('password123'), 'admin@bugme.com', '2018-10-20');


DROP TABLE IF EXISTS `Issues`;/*CREATES ISSUES TABLE*/
CREATE TABLE `Issues`
(
  `ID` INT(7) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(250) NOT NULL DEFAULT '',
  `description` VARCHAR(250) NOT NULL DEFAULT '',
  `type` VARCHAR(250) NOT NULL DEFAULT '' ,
  `priority` VARCHAR(250) NOT NULL DEFAULT '',
  `status` VARCHAR(250)NOT NULL DEFAULT '',
  `assigned_to` int(11) NOT NULL DEFAULT '',
  `created_by` int(11) NOT NULL DEFAULT '',
  `create` DATE NOT NULL DEFAULT '',
  `updated` DATE NOT NULL default '',
   PRIMARY KEY ('ID')
  ) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;



