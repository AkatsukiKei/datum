/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : html

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-07-08 13:27:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for books_tags_relation
-- ----------------------------
DROP TABLE IF EXISTS `books_tags_relation`;
CREATE TABLE `books_tags_relation` (
  `bookid` int(11) NOT NULL,
  `tagid` int(11) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  PRIMARY KEY (`bookid`,`tagid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of books_tags_relation
-- ----------------------------
