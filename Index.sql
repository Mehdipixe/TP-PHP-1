CREATE DATABASE IF NOT EXISTS `TP1`;
USE `TP1`;

CREATE TABLE IF NOT EXISTS `User` (
    `id` INT(11)  NOT NULL AUTO_INCREMENT ,        
    `username` VARCHAR(255) NOT NULL, 
    `password` VARCHAR(255) NOT NULL,           
    `âge` int(255) NOT NULL,               
    PRIMARY KEY(`id`)
)
