/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50130
Source Host           : localhost:3306
Source Database       : orderworld

Target Server Type    : MYSQL
Target Server Version : 50130
File Encoding         : 65001

Date: 2013-04-17 01:14:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `business`
-- ----------------------------
DROP TABLE IF EXISTS `business`;
CREATE TABLE `business` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL COMMENT '商家名称',
  `pwd` text NOT NULL COMMENT '登陆密码',
  `mail` varchar(40) NOT NULL COMMENT '邮箱',
  `kind` tinyint(1) NOT NULL DEFAULT '1' COMMENT '商家类型：1：体育馆',
  `hours` varchar(50) NOT NULL COMMENT '营业时间',
  `addr` varchar(200) NOT NULL COMMENT '商家地点',
  `tel` int(15) NOT NULL COMMENT '电话',
  `phone` int(12) DEFAULT '0' COMMENT '手机',
  `feature` text COMMENT '特色',
  `traffic` text COMMENT '交通',
  `pre_price` smallint(5) NOT NULL COMMENT '人均价',
  `det_price` text COMMENT '具体价格',
  `environment` text COMMENT '环境',
  `serve` text COMMENT '服务',
  `introduce` text COMMENT '商家简介',
  `insert_time` datetime NOT NULL COMMENT '插入时间',
  `updtae_time` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商家表,废弃';

-- ----------------------------
-- Records of business
-- ----------------------------

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL COMMENT '用户id',
  `order_id` int(8) NOT NULL COMMENT '订单id',
  `bus_id` int(8) NOT NULL COMMENT '商家id',
  `content` text NOT NULL COMMENT '评论内容',
  `insert_time` datetime NOT NULL COMMENT '插入时间',
  `update_time` datetime NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户点评表';

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for `contact_info`
-- ----------------------------
DROP TABLE IF EXISTS `contact_info`;
CREATE TABLE `contact_info` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `tel` int(15) NOT NULL,
  `id_num` varchar(20) DEFAULT '0' COMMENT '身份证号码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='联系人信息表';

-- ----------------------------
-- Records of contact_info
-- ----------------------------

-- ----------------------------
-- Table structure for `gym_order_info`
-- ----------------------------
DROP TABLE IF EXISTS `gym_order_info`;
CREATE TABLE `gym_order_info` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `gym_id` int(8) NOT NULL COMMENT '体育馆id',
  `court_name` varchar(20) NOT NULL COMMENT '场地名称',
  `date` date NOT NULL COMMENT '预订日期',
  `hour` tinyint(2) NOT NULL COMMENT '预订时间(24小时制)',
  `money` smallint(4) NOT NULL COMMENT '当日价格',
  `charge_standard` tinyint(1) NOT NULL DEFAULT '0' COMMENT '收费标准：0：按场地；1：按人数',
  `max_people` tinyint(3) DEFAULT NULL COMMENT '最大容纳人数',
  `if_book` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否已预订：1：已有预订；2：预订成功；0：未预订',
  `queue_num` tinyint(3) DEFAULT '0' COMMENT '队排人数',
  `insert_time` datetime NOT NULL COMMENT '插入时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='体育馆预订信息';

-- ----------------------------
-- Records of gym_order_info
-- ----------------------------

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '角色名称',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `del` tinyint(1) NOT NULL COMMENT '删除状态,1删除,0未删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', '管理员', '1', '0');
INSERT INTO `roles` VALUES ('2', '商家', '1', '0');
INSERT INTO `roles` VALUES ('3', '注册用户', '1', '0');

-- ----------------------------
-- Table structure for `sports`
-- ----------------------------
DROP TABLE IF EXISTS `sports`;
CREATE TABLE `sports` (
  `sid` char(12) NOT NULL COMMENT '体育馆id',
  `uid` int(8) NOT NULL COMMENT '所属用户id',
  `email` varchar(1024) DEFAULT NULL COMMENT '邮箱',
  `name` varchar(510) NOT NULL COMMENT '场馆名称',
  `address` varchar(1024) NOT NULL COMMENT '场馆详细地址',
  `contact` varchar(1024) NOT NULL COMMENT '联系信息',
  `hours` varchar(255) NOT NULL COMMENT '营业时间',
  `introduce` text COMMENT '商家简介',
  `bulletin` text COMMENT '体育馆公告',
  `services` varchar(1024) DEFAULT NULL COMMENT '提供的服务',
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '商家类型：1：体育馆',
  `recommend_count` int(11) NOT NULL DEFAULT '0' COMMENT '推荐数',
  `comment_count` int(11) NOT NULL DEFAULT '0' COMMENT '点评数',
  `ratings` int(3) NOT NULL DEFAULT '80' COMMENT '评分',
  `add_time` datetime NOT NULL COMMENT '添加时间',
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `id` (`sid`) USING BTREE,
  KEY `name` (`name`(333)) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='体育馆信息表';

-- ----------------------------
-- Records of sports
-- ----------------------------
INSERT INTO `sports` VALUES ('130406587994', '54', null, '虹桥临空SOHO羽毛球馆', '长宁区	协和路1551号(临虹路口)', '021-33603196', '\r\n07:00-22:00', '激荡羽毛球银都馆是激荡体育的一个提升力作，由激荡体育直营管理。球馆坐落于莘庄工业区银都路与申南一路的交接，周边公司林立，小区繁多。在提升用户的打球感受方面，球馆做到层高10米，共8片塑胶场地，并且配有完备的配套设施（如洗浴、休息区等），为球友提供优质的打球场地是公司服务的宗旨！ ', '场馆假期暂停预定', '0', '1', '0', '0', '80', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `sports` VALUES ('130406698302', '0', null, '东易羽毛球馆-南京中医药大学体育馆', '鼓楼区汉中路282号（南京中医药大学体育馆四楼）', '025-86556397', '08:00-22:00', '东易体育（DoEasy Sporting）南京中医药大学体育馆，位于南京中医药大学体育馆4楼，该羽毛球馆环境优雅，位于南京中医药大学体育馆内，周边多路公交车直达，地铁二号线直达。该场馆积极推行会员卡消费模式，拥有该馆会员卡的消费者将享受超值的优惠待遇。会员卡先充值后消费的模式，馆内所有消费项目和', null, '0', '1', '0', '0', '80', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `sports` VALUES ('130406748166', '0', null, '玄武区体育中心', '玄武区玄武区月苑南路8号', '025-66615055', '10:00-22:00 ', '南京玄武区体育中心，服务设施周到齐全，价格合理，环境优雅干净。', null, '0', '1', '0', '0', '80', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `sport_images`
-- ----------------------------
DROP TABLE IF EXISTS `sport_images`;
CREATE TABLE `sport_images` (
  `id` char(12) NOT NULL,
  `sid` char(12) NOT NULL COMMENT '对应场馆id',
  `path` varchar(255) NOT NULL COMMENT '图片路径',
  `postfix` varchar(4) NOT NULL COMMENT '后缀',
  `is_default` tinyint(1) NOT NULL COMMENT '是否默认图片',
  `is_valid` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否经过验证',
  `del_flag` tinyint(1) NOT NULL,
  `add_time` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='场馆图片';

-- ----------------------------
-- Records of sport_images
-- ----------------------------
INSERT INTO `sport_images` VALUES ('1', '130406587994', '/upload/aotilogo.jpg', 'jpg', '1', '1', '0', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `sport_items`
-- ----------------------------
DROP TABLE IF EXISTS `sport_items`;
CREATE TABLE `sport_items` (
  `siid` char(12) NOT NULL,
  `sid` char(12) NOT NULL COMMENT '所属的体育馆',
  `name` varchar(255) NOT NULL COMMENT '子场馆名称',
  `info` text COMMENT '场馆附属信息',
  `add_time` varchar(0) NOT NULL,
  PRIMARY KEY (`siid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='场馆表，一个体育馆下的羽毛球，篮球馆等';

-- ----------------------------
-- Records of sport_items
-- ----------------------------
INSERT INTO `sport_items` VALUES ('130410065149', '130406587994', '羽毛球', 'a:3:{s:12:\"场地位置\";s:6:\"室内\";s:12:\"场地材质\";s:12:\"专业塑胶\";s:12:\"场地数量\";s:4:\"8片\";}', '');
INSERT INTO `sport_items` VALUES ('130410610076', '130406587994', '篮球', 'a:3:{s:12:\"场地位置\";s:6:\"室内\";s:12:\"场地材质\";s:12:\"专业塑胶\";s:12:\"场地数量\";s:4:\"6片\";}', '');

-- ----------------------------
-- Table structure for `sport_item_plans`
-- ----------------------------
DROP TABLE IF EXISTS `sport_item_plans`;
CREATE TABLE `sport_item_plans` (
  `sipid` char(12) NOT NULL,
  `siid` char(12) NOT NULL COMMENT '场馆id',
  `charge_type` tinyint(1) NOT NULL COMMENT '收费标准：0：按场地；1：按人数,按场地关联场地表,按人数关联',
  `date` datetime NOT NULL COMMENT '日期',
  `price` varchar(8) DEFAULT NULL COMMENT '一般价格',
  PRIMARY KEY (`sipid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='场馆可供预定信息';

-- ----------------------------
-- Records of sport_item_plans
-- ----------------------------
INSERT INTO `sport_item_plans` VALUES ('130416187971', '130410065149', '0', '2013-04-16 23:45:26', null);
INSERT INTO `sport_item_plans` VALUES ('130416791376', '130410065149', '0', '2013-04-17 22:56:34', null);
INSERT INTO `sport_item_plans` VALUES ('130416050544', '130410065149', '0', '2013-04-19 22:56:53', null);
INSERT INTO `sport_item_plans` VALUES ('130416229537', '130410065149', '0', '2013-04-20 22:57:15', null);
INSERT INTO `sport_item_plans` VALUES ('130416619727', '130410065149', '0', '2013-04-21 22:57:50', null);
INSERT INTO `sport_item_plans` VALUES ('130416466066', '130410065149', '0', '2013-04-18 23:45:59', null);

-- ----------------------------
-- Table structure for `sport_plan_fields`
-- ----------------------------
DROP TABLE IF EXISTS `sport_plan_fields`;
CREATE TABLE `sport_plan_fields` (
  `spfid` char(12) NOT NULL,
  `sipid` char(12) NOT NULL COMMENT '对应的预定信息id',
  `name` varchar(255) NOT NULL DEFAULT '未标号场地' COMMENT '场地名称',
  `is_show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '这个场地是否显示',
  `add_time` datetime NOT NULL,
  PRIMARY KEY (`spfid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='场馆场地表，与场馆是多对一的关系';

-- ----------------------------
-- Records of sport_plan_fields
-- ----------------------------
INSERT INTO `sport_plan_fields` VALUES ('130417542036', '130416466066', '1号场地', '1', '0000-00-00 00:00:00');
INSERT INTO `sport_plan_fields` VALUES ('130417727190', '130416466066', '2号场地', '1', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `sport_plan_person`
-- ----------------------------
DROP TABLE IF EXISTS `sport_plan_person`;
CREATE TABLE `sport_plan_person` (
  `sppid` char(12) NOT NULL,
  `sipid` char(12) NOT NULL COMMENT '对应的场馆预定信息id',
  `start_time` datetime NOT NULL COMMENT '开始时间，按小时',
  `end_time` datetime NOT NULL COMMENT '结束时间，按小时',
  `price` decimal(8,2) NOT NULL COMMENT '价格',
  `add_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='场馆场地预订信息，按人数时间的预定';

-- ----------------------------
-- Records of sport_plan_person
-- ----------------------------

-- ----------------------------
-- Table structure for `tmp_order`
-- ----------------------------
DROP TABLE IF EXISTS `tmp_order`;
CREATE TABLE `tmp_order` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL COMMENT '用户id',
  `bus_id` int(8) NOT NULL COMMENT '商家id',
  `join_num` tinyint(3) NOT NULL COMMENT '参与人数',
  `order_info_id` int(8) NOT NULL COMMENT '预订时间段id',
  `money` smallint(5) NOT NULL COMMENT '订单价格',
  `contact_id` int(8) NOT NULL COMMENT '联系人id',
  `kind` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单类型：0：预订订单；1：排队订单',
  `insert_time` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='临时订单表';

-- ----------------------------
-- Records of tmp_order
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `user_name` varchar(20) NOT NULL COMMENT '登陆名',
  `real_name` varchar(8) NOT NULL COMMENT '真实姓名',
  `pwd` varchar(32) NOT NULL COMMENT '登陆密码',
  `mail` varchar(50) NOT NULL COMMENT '邮箱',
  `tel` int(15) DEFAULT '0' COMMENT '固定电话',
  `phone` int(12) NOT NULL DEFAULT '0' COMMENT '手机号码',
  `insert_time` datetime NOT NULL COMMENT '插入时间',
  `role_id` tinyint(2) NOT NULL DEFAULT '3' COMMENT '角色id',
  `status` tinyint(1) NOT NULL COMMENT '状态，1激活，0未激活',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('52', 'yangjing4', '', '96e79218965eb72c92a549dd5a330112', 'adawtad@126.com', '0', '0', '2013-03-16 11:08:24', '3', '0');
INSERT INTO `user` VALUES ('54', 'ehovel', '', '96e79218965eb72c92a549dd5a330112', '1@1.com', '0', '0', '2013-04-05 22:38:56', '2', '0');
INSERT INTO `user` VALUES ('1304702044', 'ehovel1', '', '96e79218965eb72c92a549dd5a330112', '1@2.com', '0', '0', '2013-04-06 17:17:49', '3', '0');

-- ----------------------------
-- Table structure for `user_order`
-- ----------------------------
DROP TABLE IF EXISTS `user_order`;
CREATE TABLE `user_order` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL COMMENT '用户id',
  `bus_id` int(8) NOT NULL COMMENT '商家id',
  `temp_id` int(8) NOT NULL COMMENT '临时订单id',
  `contact_id` int(8) NOT NULL COMMENT '联系人id',
  `money` smallint(5) NOT NULL COMMENT '总费用',
  `if_comment` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否已经评论：0：未评论；1：已经评论',
  `content` text NOT NULL COMMENT '订单内容',
  `insert_time` datetime NOT NULL COMMENT '插入时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='正式订单表';

-- ----------------------------
-- Records of user_order
-- ----------------------------
