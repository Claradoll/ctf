/*
 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 5.7
 Source Host           : localhost:3306
 Source Schema         : ctftraining

DATE:2022.3.19

*/
use ctftraining;

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`(
    `username` varchar(20) PRIMARY KEY,
    `password` varchar(32) not null
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` VALUES ('admin','ee0f6964b58c9dbf58c01a88e2d36852');

SET FOREIGN_KEY_CHECKS = 1;

