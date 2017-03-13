/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : html

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-07-08 13:27:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `posttime` date DEFAULT NULL,
  `welcome` int(11) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '这是一条新闻', 'test content', '2016-06-16', '1', '鲁晓佳');
INSERT INTO `news` VALUES ('2', '这是第二条新闻', '依然test', '2016-06-16', '1', '鲁晓佳');
INSERT INTO `news` VALUES ('3', 'balabala', 'HTML内容', '2016-06-20', '1', '111');
INSERT INTO `news` VALUES ('4', '修改成功了。。', 'HTML内容。7月1日习近平总书记在庆祝中国共产党成立95周年大会上发表的重要讲话，鼓舞人心，催人奋进。石家庄市广大党员怀着激动的心情，认真收听收看习近平总书记的重要讲话。大家纷纷表示，习近平总书记“七一”重要讲话，是指引中国共产党更好担负使命的行动指南，当前我们要把思想和行动统一到讲话精神上来，不忘初心，继续前进，立足自身工作岗位，以更加扎实的作风、更加有力的举措，认真工作，不断进步，为推动全市转型升级、跨越赶超做出更大贡献。', '2016-07-03', '3', 'hei');
INSERT INTO `news` VALUES ('6', '删除测试', 'HTML内容。7月1日习近平总书记在庆祝中国共产党成立95周年大会上发表的重要讲话，鼓舞人心，催人奋进。石家庄市广大党员怀着激动的心情，认真收听收看习近平总书记的重要讲话。大家纷纷表示，习近平总书记“七一”重要讲话，是指引中国共产党更好担负使命的行动指南，当前我们要把思想和行动统一到讲话精神上来，不忘初心，继续前进，立足自身工作岗位，以更加扎实的作风、更加有力的举措，认真工作，不断进步，为推动全市转型升级、跨越赶超做出更大贡献。', '2016-07-03', '6', 'lxj');
INSERT INTO `news` VALUES ('7', '石家庄党员干部学习贯彻习近平“七一”讲话精神', '7月1日习近平总书记在庆祝中国共产党成立95周年大会上发表的重要讲话，鼓舞人心，催人奋进。石家庄市广大党员怀着激动的心情，认真收听收看习近平总书记的重要讲话。大家纷纷表示，习近平总书记“七一”重要讲话，是指引中国共产党更好担负使命的行动指南，当前我们要把思想和行动统一到讲话精神上来，不忘初心，继续前进，立足自身工作岗位，以更加扎实的作风、更加有力的举措，认真工作，不断进步，为推动全市转型升级、跨越赶超做出更大贡献。', '2016-07-06', '16', '张淑梅');
INSERT INTO `news` VALUES ('8', '石家庄党员干部学习贯彻习近平“七一”讲话精神', '7月1日习近平总书记在庆祝中国共产党成立95周年大会上发表的重要讲话，鼓舞人心，催人奋进。石家庄市广大党员怀着激动的心情，认真收听收看习近平总书记的重要讲话。大家纷纷表示，习近平总书记“七一”重要讲话，是指引中国共产党更好担负使命的行动指南，当前我们要把思想和行动统一到讲话精神上来，不忘初心，继续前进，立足自身工作岗位，以更加扎实的作风、更加有力的举措，认真工作，不断进步，为推动全市转型升级、跨越赶超做出更大贡献。', '2016-07-06', '13', '张淑梅');
