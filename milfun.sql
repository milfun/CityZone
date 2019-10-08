/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : milfun

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2019-10-08 15:23:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mf_company
-- ----------------------------
DROP TABLE IF EXISTS `mf_company`;
CREATE TABLE `mf_company` (
  `id` int(10) NOT NULL,
  `cid` varchar(50) NOT NULL,
  `uid` int(10) NOT NULL,
  `companyname` varchar(60) NOT NULL,
  `shortname` varchar(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  `district` varchar(100) NOT NULL,
  `street` varchar(50) NOT NULL,
  `scale` tinyint(5) NOT NULL,
  `scale_cn` varchar(30) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `contact_show` tinyint(1) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `vip` tinyint(4) NOT NULL,
  `audit` tinyint(4) NOT NULL,
  `click` int(10) NOT NULL,
  `addtime` int(10) NOT NULL,
  `refreshtime` int(10) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `type` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mf_company
-- ----------------------------
INSERT INTO `mf_company` VALUES ('1', 'vascxzccasddfsdfs12', '10001', '福清市米饭联盟有限公司', '米饭联盟', 'logo.jpg', '米饭联盟，新零售业务的引领者，一家从福清拔地而起的未来独角兽企业；创业仅几个月，融资5轮达数轮亿人民币；\r\n公司不仅核心管理团队出自BAT高管，公司骨干成员中有不少来自阿里巴巴、腾讯、美团、京东、平安、小米等知名企业。', '福清市', '玉屏街道', '3', '10人以下', '陈先生', '1', '18558704247', '2', '1', '300', '1369152000', '1369152000', '互联网', '0');
INSERT INTO `mf_company` VALUES ('2', 'dsasd51415ca32dfd', '10002', '中国米饭科技集团', '米饭科技', 'monster.png', '2000年在美国NASDAQ股票交易所挂牌上市，是中国领先的互联网技术公司，在开发互联网应用、服务等方面始终保持中国业界领先地位。本着对中国互联网发展强烈的使命感，缔造美好生活的愿景，网易利用最先进的互联网技术，加强人与人之间信息的交流和共享，为海量用户提供优质的产品和服务，始终秉持着\"以匠心、致创新\"的理念，通过科技创新改变生活。', '福清市', '音西街道', '2', '999人以上', '陈女士', '1', '15030008888', '1', '1', '203', '1569352000', '1569352000', '媒体', '0');

-- ----------------------------
-- Table structure for mf_item
-- ----------------------------
DROP TABLE IF EXISTS `mf_item`;
CREATE TABLE `mf_item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` varchar(32) NOT NULL,
  `iid` varchar(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imgurl` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `emergency` int(10) NOT NULL,
  `stick` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `star` int(10) NOT NULL,
  `click` int(20) NOT NULL,
  `total` int(10) NOT NULL,
  `saled` int(10) NOT NULL,
  `star_time` int(20) NOT NULL,
  `end_time` int(20) NOT NULL,
  `display` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mf_item
-- ----------------------------
INSERT INTO `mf_item` VALUES ('1', 'vascxzccasddfsdfs12', 'a6d3c2e5229b5da', '黑椒米饭', 'logo.jpg', '108.00', '好吃|不腻|价格低', '啊是大富大贵v发的搞定撒个放大噶士发疯的不打算vvsddfdhg f发广告 放大发', '0', '1', '1', '5', '103', '100', '38', '1456233280', '1456277968', '1');

-- ----------------------------
-- Table structure for mf_item_comment
-- ----------------------------
DROP TABLE IF EXISTS `mf_item_comment`;
CREATE TABLE `mf_item_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iid` varchar(32) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `mid` varchar(100) NOT NULL,
  `addtime` int(20) NOT NULL,
  `imgurl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mf_item_comment
-- ----------------------------
INSERT INTO `mf_item_comment` VALUES ('1', 'a6d3c2e5229b5da', '真好吃！', '65gdfcfghj3223', '1562052399', 'logo.jpg');

-- ----------------------------
-- Table structure for mf_member
-- ----------------------------
DROP TABLE IF EXISTS `mf_member`;
CREATE TABLE `mf_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` varchar(32) NOT NULL,
  `name` varchar(20) NOT NULL,
  `headimg` varchar(255) NOT NULL,
  `type` int(10) NOT NULL,
  `money` int(10) NOT NULL,
  `vip` int(10) NOT NULL,
  `star_time` int(20) NOT NULL,
  `end_time` int(20) NOT NULL,
  `invite` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `addtime` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mf_member
-- ----------------------------
INSERT INTO `mf_member` VALUES ('1', '65gdfcfghj3223', 'MilFun', 'logo.jpg', '1', '999', '6', '1562052365', '1562052399', '52', '福清市', '1562052399');
