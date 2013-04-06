-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 21. Mrz 2013 um 02:51
-- Server Version: 5.5.16
-- PHP-Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `order`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `business`
--

CREATE TABLE IF NOT EXISTS `business` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商家表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL COMMENT '用户id',
  `order_id` int(8) NOT NULL COMMENT '订单id',
  `bus_id` int(8) NOT NULL COMMENT '商家id',
  `content` text NOT NULL COMMENT '评论内容',
  `insert_time` datetime NOT NULL COMMENT '插入时间',
  `update_time` datetime NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户点评表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact_info`
--

CREATE TABLE IF NOT EXISTS `contact_info` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `tel` int(15) NOT NULL,
  `id_num` varchar(20) DEFAULT '0' COMMENT '身份证号码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='联系人信息表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gym_order_info`
--

CREATE TABLE IF NOT EXISTS `gym_order_info` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='体育馆预订信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `user_id` int(8) NOT NULL COMMENT '登陆者id',
  `name` varchar(40) NOT NULL COMMENT '登录名',
  `mail` varchar(40) NOT NULL COMMENT '登陆邮箱',
  `phone` int(12) NOT NULL,
  `pwd` text NOT NULL COMMENT '登陆密码',
  `user_kind` tinyint(1) NOT NULL COMMENT '登陆者类型：1：用户；2：商家；3：管理员',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='登陆表' AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`id`, `user_id`, `name`, `mail`, `phone`, `pwd`, `user_kind`) VALUES
(2, 52, 'yangjing4', 'adawtad@126.com', 0, 'IjExMTExMSI=', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tmp_order`
--

CREATE TABLE IF NOT EXISTS `tmp_order` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='临时订单表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL COMMENT '登陆名',
  `real_name` varchar(8) NOT NULL COMMENT '真实姓名',
  `pwd` text NOT NULL COMMENT '登陆密码',
  `mail` varchar(40) NOT NULL COMMENT '邮箱',
  `tel` int(15) DEFAULT '0' COMMENT '固定电话',
  `phone` int(12) NOT NULL DEFAULT '0' COMMENT '手机号码',
  `insert_time` datetime NOT NULL COMMENT '插入时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=53 ;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `user_name`, `real_name`, `pwd`, `mail`, `tel`, `phone`, `insert_time`) VALUES
(52, 'yangjing4', '', 'IjExMTExMSI=', 'adawtad@126.com', 0, 0, '2013-03-16 11:08:24');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_order`
--

CREATE TABLE IF NOT EXISTS `user_order` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='正式订单表' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
