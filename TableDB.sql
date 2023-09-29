CREATE DATABASE IF NOT EXISTS `TableDB`;

use `TableDB`;
SELECT DATABASE();

drop table if exists `Table`;

CREATE TABLE IF NOT EXISTS `Table`(
	`FullName` varchar(70),
    `Email` varchar(80),
    `Passwords` varchar(25)
);

INSERT `Table` (FullName, Email, Passwords) values ('Jerry', 'JerryMouse@cheese.com', '1234567890'); 


