CREATE DATABASE IF NOT EXISTS `FormDB`;

use `FormDB`;
SELECT DATABASE();

drop table if exists `SignUp`;

CREATE TABLE IF NOT EXISTS `SignUp`(
	`FullName` varchar(70),
    `Email` varchar(80),
    `Passwords` varchar(25)
);

drop table if exists `Form`;

CREATE TABLE IF NOT EXISTS `Form`(
	`Name` varchar(70),
    `Write` varchar(1000)
);

INSERT `SignUp` (FullName, Email, Passwords) values ('Jerry', 'JerryMouse@cheese.com', '1234567890'); 

INSERT `Form` (`Name`,`Write`) values ('Beth','AEWSDH');
