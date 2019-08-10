/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : lizi

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-08-11 00:02:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bear_admin_groups
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_groups`;
CREATE TABLE `bear_admin_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '角色名称',
  `description` varchar(200) DEFAULT '' COMMENT '角色描述',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '默认为1启用，2冻结',
  `rules` varchar(2000) NOT NULL DEFAULT '' COMMENT '权限id集合',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='角色表';

-- ----------------------------
-- Records of bear_admin_groups
-- ----------------------------
INSERT INTO `bear_admin_groups` VALUES ('1', '管理员', '管理员角色', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,26,27,28,29,30,31,32,33,34,21,22,23,25,24,35,36,44,37,38,39,40,41,43,42,45,46,47,48,49,50,51,52,53,54');

-- ----------------------------
-- Table structure for bear_admin_group_access
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_group_access`;
CREATE TABLE `bear_admin_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='角色用户关联表';

-- ----------------------------
-- Records of bear_admin_group_access
-- ----------------------------
INSERT INTO `bear_admin_group_access` VALUES ('1', '1');

-- ----------------------------
-- Table structure for bear_admin_logs
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_logs`;
CREATE TABLE `bear_admin_logs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL COMMENT '用户id',
  `resource_id` int(11) NOT NULL DEFAULT '0' COMMENT '资源id，如果是0证明是添加？，此字段不设置为无符号',
  `title` varchar(255) NOT NULL COMMENT '日志标题',
  `log_type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1get，2post，3put，4deldet',
  `log_url` varchar(255) NOT NULL COMMENT '访问url',
  `log_ip` bigint(15) NOT NULL COMMENT '操作ip',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态，保留字段',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COMMENT='后台用户操作日志表';

-- ----------------------------
-- Records of bear_admin_logs
-- ----------------------------
INSERT INTO `bear_admin_logs` VALUES ('1', '1', '0', '登录', '2', 'admin/auth/login.html', '2130706433', '1', '1565440730');
INSERT INTO `bear_admin_logs` VALUES ('2', '1', '0', '退出', '2', 'admin/auth/logout.html', '2130706433', '1', '1565440806');
INSERT INTO `bear_admin_logs` VALUES ('3', '1', '0', '登录', '2', 'admin/auth/login.html', '2130706433', '1', '1565440814');
INSERT INTO `bear_admin_logs` VALUES ('4', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565441114');
INSERT INTO `bear_admin_logs` VALUES ('5', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565441155');
INSERT INTO `bear_admin_logs` VALUES ('6', '1', '45', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565441181');
INSERT INTO `bear_admin_logs` VALUES ('7', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565441204');
INSERT INTO `bear_admin_logs` VALUES ('8', '1', '16', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565441267');
INSERT INTO `bear_admin_logs` VALUES ('9', '1', '-1', '个人资料', '2', 'admin/admin_user/profile.html', '2130706433', '1', '1565441302');
INSERT INTO `bear_admin_logs` VALUES ('10', '1', '-1', '个人资料', '2', 'admin/admin_user/profile.html', '2130706433', '1', '1565441309');
INSERT INTO `bear_admin_logs` VALUES ('11', '1', '-1', '个人资料', '2', 'admin/admin_user/profile.html', '2130706433', '1', '1565441350');
INSERT INTO `bear_admin_logs` VALUES ('12', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565441397');
INSERT INTO `bear_admin_logs` VALUES ('13', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565441433');
INSERT INTO `bear_admin_logs` VALUES ('14', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565441495');
INSERT INTO `bear_admin_logs` VALUES ('15', '1', '59', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565441558');
INSERT INTO `bear_admin_logs` VALUES ('16', '1', '59', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565441735');
INSERT INTO `bear_admin_logs` VALUES ('17', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565441760');
INSERT INTO `bear_admin_logs` VALUES ('18', '1', '60', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565441771');
INSERT INTO `bear_admin_logs` VALUES ('19', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565442655');
INSERT INTO `bear_admin_logs` VALUES ('20', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565442713');
INSERT INTO `bear_admin_logs` VALUES ('21', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565443018');
INSERT INTO `bear_admin_logs` VALUES ('22', '1', '58', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565445410');
INSERT INTO `bear_admin_logs` VALUES ('23', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565445452');
INSERT INTO `bear_admin_logs` VALUES ('24', '1', '58', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565445567');
INSERT INTO `bear_admin_logs` VALUES ('25', '1', '64', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565445579');
INSERT INTO `bear_admin_logs` VALUES ('26', '1', '55', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565447914');
INSERT INTO `bear_admin_logs` VALUES ('27', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565447973');
INSERT INTO `bear_admin_logs` VALUES ('28', '1', '56', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565450449');
INSERT INTO `bear_admin_logs` VALUES ('29', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565450475');
INSERT INTO `bear_admin_logs` VALUES ('30', '1', '57', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565450963');
INSERT INTO `bear_admin_logs` VALUES ('31', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565450986');
INSERT INTO `bear_admin_logs` VALUES ('32', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565451010');
INSERT INTO `bear_admin_logs` VALUES ('33', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1565451136');
INSERT INTO `bear_admin_logs` VALUES ('34', '1', '69', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1565451170');

-- ----------------------------
-- Table structure for bear_admin_log_datas
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_log_datas`;
CREATE TABLE `bear_admin_log_datas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '日志id',
  `data` longtext NOT NULL COMMENT '日志内容',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态，保留字段',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0',
  `delete_time` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COMMENT='后台用户操作日志数据表';

-- ----------------------------
-- Records of bear_admin_log_datas
-- ----------------------------
INSERT INTO `bear_admin_log_datas` VALUES ('1', '1', 'f1c1cf0dlt+bhAFoj6NFNSl+DiyRQKSIFyupWCU/uhdzDHcqYMF9TIxMwkAi0tvd3BL25OdcTwM1VJwafNyb3g6/r11+hH36QKlrP+mOR4paLuNNsufsGE6XmQSct2/KdCp3frINdB0ufYVSL+6FcTx9Oknzg7u+MjGhWr9EAQoPi0sY54NVn+h7vGNdtvy5uNaIZTrTOVA7CqQSSwFRS1ai48Yl7HVY2txzRxI91bTo+ASYXCDDJUOJ7c206ie+eXwq/vi/hXHlPeqMHN2pd9RHQe5VQupRCrrR75gjB+GQW2BIHB0DkfNqlCM37zOkrl45afp5g/h7jE2dyrWel9NYp1Gp2Fmk+8/UG1/QpR36WJcP9OSRiAm0RU75cyX9coZfbOg4ggpfUUhMgZKdeIs3m/EccDDuVTZC8tGuAKfo80egvMC8KCfxPvIOGYRXtgbMEVD1yUZP', '1', '1565440730', '1565440730', null);
INSERT INTO `bear_admin_log_datas` VALUES ('2', '2', '0abd1fe0+0tMbBJJOyZideqcZ88VsbH+NVP/UFUFTkv+B/SSt1w', '1', '1565440806', '1565440806', null);
INSERT INTO `bear_admin_log_datas` VALUES ('3', '3', '45261195p13amZSZL+iHPlSfy8lthHtLPy5AI04OLNovqi2RGRb28dPgDJ1i3WYj0vW6+9KrXk7s6OVAeoeVE1MzY/d63UXsKMH3fHzV2OD03A96xc1rHkkKEgnUKQl0ioZer0gTCe/Y3187NSJ3eWvSeEe0wmQZ5YKaK5bzQ3jO0LYmUaSTd8ZwpfCtTmuoSLcVXd2MJSGnITHNfqEOZHi2GBdAD6OHdwJCXLHVAc7oBXLA8MtT4SbAWD0pVhPghQRvcxNVxcv8Jy3RkBb8pQqS3cQKWCElpZv5ZB8yMYjOq3IpSpWFs7KupfSDyWCnZDQJDxls4XDkRpUYWjdYG/SDjbClyMSRFLLQYOYiMCeRhG6+JqTxSLZU/SCDJYh3tOB72DLEtSliozvP2BsASFFcGv2R3lsCFXe8O8T0CFNbTCXoalUPsEm7l4jW8GVlXe/5RGwudXAE', '1', '1565440814', '1565440814', null);
INSERT INTO `bear_admin_log_datas` VALUES ('4', '4', '635d1256aJXHK51Vycxg+vwFaA94/8OH2jvg8zXkAmcXf3K9zVMBfP8aA/yG9+vn6y5VCL38SG4kSms1x6jpL7WHenxw5A+rrbkGpBGKRQqNTlR1AeeTofDaZe3WaroFeT6bEzgfFNZNMDIgQZoGfPh1if/+WzfUAgr6glxYmw13GGkYNff82oYiZ0B9FJsPmJWa0G/4ZFA/VEXOpdLXv7pGqfb9dKbn7/iK2LxCDIdYBz824UJZPorSgbvmnBL9PAdoxVgfsOqmIxZScgF5LlZsF5rHfGXud5wPABVcWcGXnOVYSui8yolsfYOJAP4exQIX7TPu6kXlVOTjSPftUCYn70JE0g', '1', '1565441114', '1565441114', null);
INSERT INTO `bear_admin_log_datas` VALUES ('5', '5', 'e0e9bdebmP7KN4HAzCx3mUxjlR+JZ1VMsz8MjKRhg96PzM7FBJ83hRthFjaop3cWZWE22T/C8Frt4CYSGSr2mVtlOke5LVzHAXBaeiU2YgdfZ81SYo8CKM//EuYVUZLL5hkWr55t0E98/fd96gG4nauBHzS2Lqcs4/W2SsDQ0x3X4SundiAPefj7/HhQTlVbpCfHHrLDpIYuziNd+1FYfqTLb2gLFvhwAiC1IkkvqVBmoU8lSZ8u39c2ZXKH98GoKB9bZhPKTYjXCDrCInK1fjRqEom0qt5ltyYvdOmll1LAealMwEuc7BpPG8ik8YeBkSaKSVVax9q5MuHTUE9QNAcDhqKEo4sJcjDPA2axMGZAZcS2UhzCAzA', '1', '1565441155', '1565441155', null);
INSERT INTO `bear_admin_log_datas` VALUES ('6', '6', '293133e0FuTsVGupuGIVyIJY5wJFTp4x51k5I4g0Or+BLZtetooV040DhBjQO5dN4R2DvI0+QhwY4cAYnkQEXx+pj8YimrXPg2Szkj8c7Afm8jCQVzrIkXu9qXTQir2oqNlqwUWDdgRqO1oI4pD9yQK+PmmvQn6xwPigO6dKfyuqRvP6DBu4fRfooFRSPs9ejGbpCzUzb0n3mBWd9ExpIxQh37kFaF4jr5keOl9+APFCecpHMbazxwTbqN6O3HDGdZwdTzbVXLmdvmCi2pHhTeTHVWrTypRMWU+WxFYpTKMYEFYFa6GMWerFkPCqaMkC7FujLf4sufVDPLMt28fYRVLJo/siLJMz0AHcOJI1xpPw29hQco4ZSt7EWOrTHr5rNuz7+lS6rfHA0g', '1', '1565441181', '1565441181', null);
INSERT INTO `bear_admin_log_datas` VALUES ('7', '7', '29ac01b6s3lk4Du9LJEUqoaXa6KzHbifcQKWbYDzwN4Ufu9jBtYihkdmj7HqrPRy2f6YYRBYe73HasoN6joXImyvsqBt+mR56o3w9SYNl/bPAfI5kCw+dmZn0Dwg8BOy/yLRA45jVFWSyfL/h1DtXiUx+3w268cCvICAyHD/0gltpURNdBrfVo0KVhMyz8mv0kRnzqUYpm4M2TI5WaBbug7eWBWKNwjrWfmKACfe14v9zIlF1wNzIN3R6W6i0HpoElBJ4MxK0DXubzulSzaMz+PlX8uaHJ10ilwsNs+gpkmcq25PO6ZNAg7s+x/uG2rp59wAO5G+qsJLzHv2FxTaCMEDsxBRZX+wm3AtDdx2gaxjx7DUhppxIQ', '1', '1565441205', '1565441205', null);
INSERT INTO `bear_admin_log_datas` VALUES ('8', '8', 'ecdb8086Xs8pWEErMy3Vr49DFSwdC81Ww+976WRZ8dPZPBvjj066O3Kvi3UdC3PlEudVVGuBYx1AY7s0jRiUiWQbFfZrj0+moDEXrr5XPdMZYqQHsRVFptBLT+QCstFSnnId61vqb48pKdHCOWcrGVtyOceQWZ62TRROqey5uMgOoPydjFCvRzYHEzKs5Rnu2JWv1LTJXAxmZNuKofYi3yvUoZbO1t6ySo19Ge1WCs0/Sj9NR1uGcldG0KGcGMH/uqOjJ3oAmUJqalBPWDf9p/BZBoCUyZVSsUlopjqWdyJyAHdpbHLuZBzlyvwYgBTiWgRJ7UTcAT3d6o0843Cv68tdtbb8FlpXD03P5J4bWByMO4XMU8IEMpXNoEQvz+rpYCVUkCMafwJpkrMPUA', '1', '1565441267', '1565441267', null);
INSERT INTO `bear_admin_log_datas` VALUES ('9', '9', '3fbab3fdmMM0c+CTRuCsIofdUPRBkcY/le1S0M5UyTdqdpL1RA+1iQdllBQVB5jGapIpNFAfBeqyIq2TAVkymaTWtIZOJnex1H8gGbdHPSO1InpYitr8N0nQw6vBkGKND+hOb1EDm/C+BXp0iXWWdLW/anQgEewc4Og5Vbt8WswLQrbK0qF4VdO6p5AeEYXB8cNrDFXhOOMxuo9z1FkBYZLUcnTmI+qD1/h7Ey7DSh7PoMvwmVemTnMo2Z3pfCotX6g0I3RQl8qqSczETnzQGFMcMkFaGSIcPrBtFRfoN3K0TY2SSQ', '1', '1565441302', '1565441302', null);
INSERT INTO `bear_admin_log_datas` VALUES ('10', '10', 'ac9eeeadRcqaQBOwHldNBGAWHTXpqDdKOAuDI2l2UdrvAdavKpmNPXBbAHQ1r/2JHWvvxBw2ukg/q0K/XTxFL3opYiaJ2Gs8pJtLTUN6sGwravXkkA2KvmZsaPAvEyB8omIw0vFS5nedIKcAV5sMGtpdYB6CjMAjcKG2+2RfzQSstUwv3gdRONY3Sktgu+HDdFXP204kmmNY2BDWyFjZW38rQtOzBQvmAAncsqgEButuQhN2pNn6oRhKyIFaGo00WvEiKR1Y1Rg4M3ns6cBcoEWzawztqSmA9Wy+Ms78LL9V8w', '1', '1565441309', '1565441309', null);
INSERT INTO `bear_admin_log_datas` VALUES ('11', '11', '96f3bc74vgxs9jr/cnQDRoi/pJMyCWsgoWzLLhxy990nFMdwLyO7m4m0+SXBLd0nOKOm0GZUOBDY85xP3yy2rD62Fc9EdOOMNMCuSY/49pYdEdzjAURfUxkmYYH9bK403Torb4ewa9bdqiw76w+wnRrZsGbaXAsxIsEmbkbC', '1', '1565441350', '1565441350', null);
INSERT INTO `bear_admin_log_datas` VALUES ('12', '12', 'def82600mNnY0rUQO2eBGQkUo+d46F7wRnLfTdZPWz9jbP1tOgNYmOrmzY/HhebZMdH6rCnYPjT15pUVnLsddjSEEik1I1kDeCIqkj7y6SOrUUPIUHSsucvwjha01x/vQKAGSdL0mp7EmolFDHcoi+bCADDL6GFbT0uHSJbZg86Mnc6sO0YPZbnoqk9WdgRSU3JHzj459eJOMnqHsVFiR7RwYvDKT+l5xg5J1aLm8kwAgfYt+tiBsGdh+/c2Fc7lR9WK118ZiYt9rabLWWQucgmEOX3u0RlDxiKDx2ORJ1XIeSsfZ2RCv2XjJ/vX9iEssst8BekJ+8v0R7yb5nNugifKU2ywEbsMk/Yx2S+6DXWvWU2+CTRJN0I1NS8', '1', '1565441397', '1565441397', null);
INSERT INTO `bear_admin_log_datas` VALUES ('13', '13', '2401e889ZdhVJv9WZvZF5A5eCZQs5anwH7GNn3SsCYr8fJG0IkhNNqyIAYcy2uHeYy7m8dzDM5qZIE8OzsaW3VR+/hb4puPoxBkhgLu+Tb5VoyYrneegp/WEzd6+WrqnXR0dJZxYtn5vYV3uuRKubdPHky1EhGf8KjShvccqqV+SqqO/obxyMYR3zOYllyxYE3Rsj9LZLcUeMzL1Osa19MnUCNyl6FDrAqfJuhVXN3430rjMW2ez14ZxQg6I4Gbht2u54mJvIanM1Xx1rpGsiR5AmSawf5vdC9DCHetYA8wFlHk8LIzD+S8drDso5dmwIQPYPA/08L6XBhKs40X2ZRXDSIf5yz/lA63dAwccKbbQtM3Wc9O4/A', '1', '1565441433', '1565441433', null);
INSERT INTO `bear_admin_log_datas` VALUES ('14', '14', '5c8f2a22dekdqiaf/1HSJX6g64cvDeZgWOroWLO5fnVIniTQrUgw00tqY8TL58Bu4mb9EzZD8vmT3VzV7i5LiYimk30GC8VhxrZ2PfqXD/RPZxIiiI3GJ8GTjylWqzsIO7Lc2WA78p7QyHDVHu78Bu8Mb2fTdXrHG0zrICegvlt4sPcavsLyhN/JcnrjaXCCsx34aaYEJf/OsZBYjOKrAzLJbIVvrtuUm4+E0lUmnChHo6r+3vCotTfGW2G3bieZl+kDfiRON7foyMVnzEUHsY+q+D/d8PvVM1OSlOVrxFLq6Ln8U28WmRhwdJv1XhbrD4yJCz8kRHnvW5FMwxy+qQtqux0spdFia0K0js6EkFeveQhHW2mkGjDA', '1', '1565441495', '1565441495', null);
INSERT INTO `bear_admin_log_datas` VALUES ('15', '15', '7df28df9h/2uI4zL/h82gRVq50nl8440NhNnMwVj355Tn3I1LLNDvjjlR18ytBWzG1zBVChHg4+GzRslD2sCwiMlS/rNIFi2Ch6xKmkO7hYv0XVijT/HCJ0S+M8Utku+NXlA9Dm0IzZdLQ5UaUyedTFQw0xoXOzuQTeu9Hd1ZSIfjIbtszx4iBZ/d7p4CU0MydxZtN6a04lBF6yO4WNcBQSaZuy/ZkfzqsA9535iY4nCFS85am2TkYhXdJK2cL17Cu5HYZNQCwqiQo1dWOgMl55RSsWwg54r0Nc6pD4wXMLaXlNbyqcSkqbAbE17cC4DeabV9cwmRp0znVStFEDpoUb+z0hfWfHhw+q0l0M864TBoPilRxspFwVGPAs5CMLFT3anFbDDOj2jyc8d', '1', '1565441559', '1565441559', null);
INSERT INTO `bear_admin_log_datas` VALUES ('16', '16', 'e30507b0No3u9aovTNQwAIHLcme6TEWcaLWdUXgc6SAm/EgaL//R8jbi8nbQZSAPvPuHT1ACdPgjoPt2phMIuwnLfzP+8ZFAR2KLOy/ii8n7EApATsLIp6arVi4iPqNyI3+wLXNRZt4BXUbf49P/FvHxSBNmvEzh/eCEcBE8H6+ESyfVXQdLhs88Rx06dk2X5kNrw79k03s3/bCx1HIqNsECHw6S7KoDcJFQyIzgo0zM36M0r7ZS8BHZvpUJwYV41oIxUVhDZOelH4TE3vpQ4EyPMrTpZhH0uhtz1a9UAQppzEWE5B93TJoC6G/BUvr3p7Nnb8/Jk0byCAtW9mbzi4DcX/F/Ph34Xeo8ESRgMwRftGTNK2KNl+9t6Umk37WeU9GIi0hX', '1', '1565441736', '1565441736', null);
INSERT INTO `bear_admin_log_datas` VALUES ('17', '17', '274b909coTcnymLHMp+AxzIQexFwa1miTSOGQQbRZbpwa2NHmV6FOKc3kykjl8VqrOrTtQXVvFCb1THfx3MT7u+wOlWhztU00kuB/hLJQZUk4pssL0KqYpKRe4mZRBgu0rP5uD+azFBYQ8VEbigRNlqpQaBTR9AOHLvL5XW8cfyW3yvpfysqVbXBE/prwZQq6TxQrY1wZzzGvLc/XVGql/kxPqmFW0TpXoinUCnjm8afzEkmJt/6nz1TXKPKVwPNQeavikmTbOSLJMjmJNy6qsUMkc6+bKsd/Y678HoskfEa7GYbP4vb5p2kQEmiwkV4/ktB0SyBOAKqd5wxPNZyS3+8KLLNCHQ2h5/tB3cr', '1', '1565441761', '1565441761', null);
INSERT INTO `bear_admin_log_datas` VALUES ('18', '18', '0c10821aBLT2HyzayWHklXI+LYdEDQNw/sP3jhBoj3lVIU18OEO3PVBwKOC8CKjvxjlmjcw/k4rLfvPF06XxaGnwmZMOV3fU6mGtOVzODloK47iBcBGz9E85XhPww61/w38qKGAGlyDuYgYNQ2CIViiq4v++mwyiykkChROxeAnpOmPXoScjRRHQ0vCAtZ1ScFDtOcOgEB8IuSfbIIh+EUjn45fSpbM5V04Z5JXGPoHUWvhRpIeIoYCCJdE6nyt200ewjXc9ebqprCLsJmuP5Pbfmxsn29z/wTWJOzoH9WseltjNzkrnQt7B5S94vC5AvotRxL18UcKiTlZe+et99qs/rmjZoXp2viV/jgo+NZ5RXvHUGzqdbWi2veSuvXx7eACnD7VL+57S5nJenA', '1', '1565441771', '1565441771', null);
INSERT INTO `bear_admin_log_datas` VALUES ('19', '19', '33cc7029/N/iFah3vPEK0CpTamrju106xvpwdO+6szezjuFeUK2e/kUERmdl8Izdnj2jondVJKer8QrhAVoxX6mH4Tp8Rp3Fsf6kupHcTPgDMiX/yw5dlFMK4aOGzEKpbwZEApE+z0BKiv+QIbXrOrd22kbJyoUUuj+xfe7qXzdRsomNgCqDBuh7cLYkT99miBYCFN8BSEHaT4SLWAkPvjJ5HvhJ6w8rNB9T/CrxNsHm0A+pofrXx2CaigmaYqk+hPopmHUoPMtz5aIaif8riSuLGYGxlZhv1cnUBn1MmQNm9u3EZuDc7thbvwO92HfvWjo/UYVETdFDx6LQ3p/L+fEX8ctfY1j0ApFrQr7heSHQg4jU92JI0yy6ewat', '1', '1565442655', '1565442655', null);
INSERT INTO `bear_admin_log_datas` VALUES ('20', '20', '1ce8e97dYqvpUQ5vMTB6kchyzh8PfoHp3NOB2jIfgIPJuLpbK1t05hPR9eN+qBUv2iL/otuM2EsUZO7R4TN7/13/UeB/lUuaqzubqmpxw1AA6+rDpTf6elSgWXA+PF9jEc0CHesOEkFZZMgroL5Hpcz+2azYVbkpZCF5FRM7j+XAxsk2ebbdabPJiT1uCL7qhc3zTnwtqt8+PSnjSXLgu45opePstAhiDBHCQxIRbq1UQCYXHRCUFAvuSS1CszPE8aQRXBZGWC+y7Up/kiBrIVjs2OdS1bhkhJCOcW+J5K39u0Yx5oabGRoOG8TZ4++Qx3LlDyOHuHebTfyF9y3OF2LOkAQIuRLFRYmHDTAcvGbkhl78RnfzW6RUTGfE', '1', '1565442713', '1565442713', null);
INSERT INTO `bear_admin_log_datas` VALUES ('21', '21', '06c8ff19mCsJ7D+LmZp9+CFaXEitlPH+kI9wB3vOG04dm/ATVf/jXJqL7zPRV17c8TUI/KfQuO9gZalsB0W8TqYCZpb900QbFghvF/suaz3MQMxBhcSj1CWNzCuvmJ91XTAG+Hk+jadCjUgyOxn0oJfLRsluq93i8B0UbwkA6vKCt5yhayc1Xzv0hUcmdBbcCI+Plm8ui9o+bo5xfDSKNbrnh6PBGllYlYZMoMmy7CIesMOCNTqzgtqDSqaoIDsPEgBd74ieAaGYb2AqppevlI8CiLwxtS2hPy/rKm9ImU99uYuoHUecuhlUjv+2M7nWqPYXVT8IGZdJK7t9VYf/iO4dWXiLkF5oDI5ghCnBBS8yP8VRuGCIhy6A9g', '1', '1565443018', '1565443018', null);
INSERT INTO `bear_admin_log_datas` VALUES ('22', '22', '01c3244fZiiul106C6LDn0BFGhO/IAQLExbgRnO4REliZ22iLFt4P7h+hYqqrzc09HOjtn0W0xx348Tj7ONNnXq36YoQvZwEwIdREwyRDboB/K3epyzBdsxnKAMIeuulnrqTNJOBcjmpAup4u6+P6mj+wob6mjOxcWj93S9LFrYPXDq+qhL3qlreNmcGU1fgSCT+s614ixrtLe/dMNU8hhvHRvNeXPDV+r6JHFLz06c3meESRDJykA3CGP3NgwKpzoM/KKBtSjd6/Bf8iy4jzvKoWVg257dq/flY3Y0oYOISiGHz2OdP7954hz0KNN7orCPIdH24cnbaFXQmRuNBuu4E8uC0WcBoR1m5skW2h4bt5a1cwETHyUeUNFjEeA2PYtODcA', '1', '1565445411', '1565445411', null);
INSERT INTO `bear_admin_log_datas` VALUES ('23', '23', 'f6d2ccc9/58uDbljq7LgR+yI7mjaf8JmB06IY/e50mgai1/7M5cGpl5hIXO6/SpdDG7cK6HLtpNP+ETkK2DHiS5weavJ1j0kQ7lnGEEuE7l/2bk8NUnIeOrXHvYBUvKHgTDCXAIJuj1A0j1Czsg5eZR9LkjFxNASSDZogu0nMOpQ1oy3+HJg4W4cgvl0mldiKTrHjYyK9K6hTmy0C7pJN5AEPS00T9ufPCzSDJ9fIQJVc3nL3VaPkvkcdTCa8u6eUVG470VZBk4H40n8Ac0nCKb0TY5GsbBvejGLYksBb/lfrnLKP58V/EzPkGUOng/teBX9EZcjuEFUTCXvzsTXM6U17vl54LS2EvQVQYWn326VJ8eWVkAn4YcO', '1', '1565445452', '1565445452', null);
INSERT INTO `bear_admin_log_datas` VALUES ('24', '24', '03e4f7cd/Y6yLy0G3ycmXEr0AqLrr86yJh1h57+MZZoVMxK04D/7lFj28oIEdRivo9iI8JAnt3kKmU5PzWPN70m1B4EY7KBmZdyxl+YVmdSpj1OvsESnxYmJDLjre5ESuBHLqH1huNKdyGVm/A9FoNAdGABbM2+b+Jy+g2pZZ7EUamn+68JOiwqDvbShetwLT0TywQLEte5HseN4PDUVgWxEkkhipD1UdhF+3j9MmyF1r/4GBBNimykeGDbP82YhzzM+/6KjVMMnqHEhElSwBNANzFL4ZRUDS/Mn50yShbBzgxl2Ek8JZ1zPQ+qW83zGknYXuaYHyBGzM/lw9nAESKCdOGK04WWJu7M2fFb4B2E1E5jKCIsIfUX2UYfgOXmx0SzBHA', '1', '1565445568', '1565445568', null);
INSERT INTO `bear_admin_log_datas` VALUES ('25', '25', 'c1a2fd24pr1aRnoEFywepcQ4SgeyVOVWRxUCEHlXdH/J1msAOC1EWPsnou43OMAUc0gCKvftotqH0xEWTKrFQ319yUvJ4yWwg+Vq7A+/rt9qEPnpuB6QgSDi3ZMkX0IoaSK8C8GpNkLo9e9v0NpoGaOCYR01rBLEKSGJqcrPzsduI8n/qwj8IPeKAT5YCttoPe0bwffMF+VwBEyp6ZjQAnW0ouz/3myUjuMFpQzvfY6aGL9j1xByIwVyR+kGIbCqoGgYpRgIQKuvRCd0/Vb+xP1hZsWtO9DkKpnmyduoV26FEQf7/UUdNwQicL1sPeyeUmAclc8g22+8IAWnrfpU5O2Oem2zICGE2jzO6oJvsiLhpJwcqnDf5Z2uuXSuT4uzwypYH/j89JexEEu/', '1', '1565445579', '1565445579', null);
INSERT INTO `bear_admin_log_datas` VALUES ('26', '26', '44d193639Y1bJVISaR6WAtw7Xx2DKtSeuZo5TDquXJEekXIYrrXlZ01eKT4/mHRJevx4fRhsKIVVeW2W6+YGgw2s2SVZHhEv9V2jGWXklG2Q7bapmSi0H3HqtZRHY8RUDNtZVlRxVlLpxEZ1fTRCKiroW5dE0B7AxfjiQB7Zo+1wup0N6Qn8HgX36wyksEwCMc2xl2Smy0ES1Zbn+1SUBs6P1V9xfMpQj2w4hUmYSC9ihDoUqqKF7scqM/CvzN3CzD+6vD0Frh/fnrvRNRXLMQx3QQH5uGzGmegQeIxXll2/WvAekGCYz8ekxAIfr+iWvxTydLIRNiBLz7/8up7uoljIPfcKjvGZ+RBhhcnL0azcMiGWfB78/xDZEpoKsFftJS5QSnE', '1', '1565447914', '1565447914', null);
INSERT INTO `bear_admin_log_datas` VALUES ('27', '27', '5ef39af6KxdUIsZruPNoOXPvdgS1I8xey4p+ATdS4ogVTTxjcTvnOwgwTVZGmHkgqlL34Muh6wZPOuOBUe1IjIv113x0fYtMFhyY4oCdSqNzxI1W7sXP/w1mA6v4tIJk6X4c0nF8q1u96dfF9e/CvbJGJN8yvfFPKdvqfEA+1l1BoqaBbW8eCmqiW9IpBn+wgd3fyPgbj9dvOVmMOoaspWWhQVZ/Inwi4iZ16yKoY+9LItCJT/LmWPp88zgM4vJ/yI1SGei0vFlJn/2+9q7C9+NTGgsRgKmu+P7XLeMRIzPgMquYNIBF/hxoZjHfpmua6RkzkiQx8nMvmsVERW9GSVoJurJjTJwwNqz3vET7pcmLoaxdKBlQNsKL', '1', '1565447973', '1565447973', null);
INSERT INTO `bear_admin_log_datas` VALUES ('28', '28', 'ef2e5cfbyBay+l6ENXeggp3LtzZFoQy3zGih9M/wu14yBBp6mujm1R98uMTqTcS0+cuxGtuDabbHKu6abo0SpbIy0SQBVLYC3Q4idQB7ZudyzPNvlcpeg5j4m1w3QR5OmzvLgf42LtYO5McmG3yt4KFxPMeq7M7xoUjILo74tepwcTlpYOorWUGwA9cxp9P2DIRuK8OSAPAFBNI472FXYu68Jw7aDu73EV+OUIGtC1WQo2/D5qWAZRlK8nxvLKRSz6D4F4bWicey6b/A7GQN5B0JFcffYdbV4cflTCX048mvVipmyxFCRhKNrnvnVIlzaWVxIhdugUfUITzOu7scdNsWeCdRQAtW1DAuyP/TNoPMAX6o2kSmJRMnnj1IwcIQsKh9Gw', '1', '1565450449', '1565450449', null);
INSERT INTO `bear_admin_log_datas` VALUES ('29', '29', '3b2f13femwElsaajbzCSXRSJT2JUWDlj6jcCSLFELF2knzO1gOBeFJDwpLyfeIVAOqyLmvUgOouqTJbF6GM+lnqvAz7beFoPQKWUZowbMH7omVtlIAOB+t4h9NmI2GJmbkwmZbj/LGoPXRSOm9U26EcysROto6VY+3F8ypDPESCZ4XyQYzohMgTTUMzRdlxxw6olIaxQZgjY0SXKIPJ4L8n/XZGPjgaNFO741FndpUlndhZ2LOrKeVOvpE7Pe/zg0TV7VkDBBDMKdHqWmORIpVeO4iF8tKBNJIjcOnNuEJKEA/tZrDf7UirZ50SOEeucu3HC2uEbGDsvpfe85fGDu1isdoNu0s2Mz6aAyGH6yP7NT5Ch5Q3GmUQ', '1', '1565450475', '1565450475', null);
INSERT INTO `bear_admin_log_datas` VALUES ('30', '30', 'b79d969aauzYc5oW0JLfG+m7BfCOMAI6RbxNm+tutHHx08PXvo699TopgHmm3dRcNMC0lBmViq89rxMPYENiDTFCWAxH5xGc2ivfgJgt+D9P0+EhIwtN1oW6+nKpIo/vCfv6wM9LLzfZCoQvDNRElXgjddAeh/NL8pZm1lsDNMdppbDd432pzR+i62le2DtjOGcO0Q54oU9zmSPVWKVlPAOoPgxSylbGcmlYxq1oP7NITiUq4PsXEpkljt37tspRZYXx22HUGDq3Ks3Z66JZGc8mDf4IO7p16BhoX5BCuuguSmqTzIFiBgHVqs/ZcrfAT3/NIuhVZFnU1i6mRKslsKEQ1HpSChWwUzfD8soWxCoL47cZU2TemFQU/Nr0bZi4uUQyW6CG1+Q', '1', '1565450964', '1565450964', null);
INSERT INTO `bear_admin_log_datas` VALUES ('31', '31', '65282a6cZLqJ5vHY8oVaNO32DIMT+yQnzweqGpAKE8JF1oOIGgBJ6Le6re2EuDlrE2kPQdYGX03LcRdpEi3fHxpWxQq5Eco8G/fmQ8ALo4nC1MB3ur1ggzKfEiXW2ATBAZ5Z9dTd7fKpsWxaq0xrdEDvnq6SetXMXKamup0hfFhZpZOTbW+GZ86J/dciPpWAxMYZ832cwWphVR9exhU+9R8czdMr1CwBYNR5lACbxXf6nrgi92cp16YhND1lHuoxVC84OGExnZPK82hFY3dd9v0N/3rhYNYRgH+hEmUFr3bOTTZBqWAm42p9xS9ljQjX2a/Tec3nb9avaW0bzce3Ku65cVpjFVTUBDIpzZYt/rjKImzN/+K+gSA', '1', '1565450986', '1565450986', null);
INSERT INTO `bear_admin_log_datas` VALUES ('32', '32', 'de7876bc2adFX/DYw3Rc2+aZ04g8PMVdIVDbYEEOdAaYFCsEZ6DoqODlSTf3KmVYQQqxCpONkgvC2sK6V5NV50riLiGfhIbGphAV3EySxEj45zCkbEIhwYsnbHoH4JAfMGRxpCy02TvHr/7E2XC24aQjEyks7ndlhi6NSW8ska0LQWUmksXFffLfeOjH9/qTwwpjnN1TCu35yL/QKaVcAlglulxTFbBsEtCtD9+DQHUP7oDk0h8k+Qf+J+WQIGMfeI/9pDolP/8rPqBENI1HiB6inyrGj4BQoSpOz6aVjxvqrHG00ur4zJJuBNFFteiLb4lSiDDendlWa2h2mcqF63YPgmfw5Q4zF8zOf9TO31jXxcMrul1tt9g', '1', '1565451010', '1565451010', null);
INSERT INTO `bear_admin_log_datas` VALUES ('33', '33', 'f78daa98CXwIkZUZSgF+SH8+VIfqmRBa+faYVlEzP06z2Gm6o71ObXjHutpekfQwWXaxd16e+sWlY54eK98uykXZaZKaAyqctTeV8fIMsdar90zlfMoekt8Eg5GPSFrf/JzZfZlisEzBD29f4cZs+5g8BAdHQH8DqFXah3Gkphk+gKvA2XrlEz/maBFAJpSR9cMCRBQ5KfYBuBx0ZMHQQobOfBHCiywMQYh7yrjQzYJ1+jiOlTAiyULtcZKAzlbVuKcpW6x77bBtFKUg4+BkZhxQrH/CV9NibDEECWJWKtgedHGzyMU2FfGE1Bhze/4DZvk/pwBVaNrSxp+UhK7sPnB5bvJtjQx51+toAiLc1KMlc8CzM8l1mGo', '1', '1565451136', '1565451136', null);
INSERT INTO `bear_admin_log_datas` VALUES ('34', '34', 'ddaa70bbMjC80vol34yuNLsfVw1WGw5CvEDgy5RJDSPA7GLikECxbmeE+CN4HLPq4VbWHgNKI0G1K2jfs0636k889eMMmYLaaFxlbVe3w60drNVo/Kua+GUpwBrTvgydCPdoM4LAZkMZylg3AOTqWL0+cpKnDXGTDCX/Wm1nQCXQQVZik00SBihCxhymZ/lypR9DVEYzvbbKQKQuCtZAm7MWXXx6Uta30na3rkYckGcmEFGAnYhT54ydFuWodgNeCvUQBHzjAmpItY8hyYNwdDLapSln01EAviezW27DLeOpaqo8jDZ4NhQemq2dkP/YyZJtquczjZopBJoB9nEW/+bdWpleKNb0kLpPa+E1sxuT/+nGnsHlSBiyfybd4yK/pVSANzVKDveS7w', '1', '1565451170', '1565451170', null);

-- ----------------------------
-- Table structure for bear_admin_menus
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_menus`;
CREATE TABLE `bear_admin_menus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '菜单id',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `title` varchar(50) NOT NULL COMMENT '菜单名称',
  `url` varchar(100) NOT NULL COMMENT '模块/控制器/方法',
  `icon` varchar(50) NOT NULL DEFAULT 'fa-circle-o' COMMENT '菜单图标',
  `condition` varchar(255) DEFAULT '',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `sort_id` smallint(5) unsigned NOT NULL DEFAULT '1000' COMMENT '排序id',
  `log_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0不记录日志，1get，2post，3put，4delete，先这些啦',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '认证方式，1为实时认证，2为登录认证',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态：1默认正常，2禁用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COMMENT='后台菜单表';

-- ----------------------------
-- Records of bear_admin_menus
-- ----------------------------
INSERT INTO `bear_admin_menus` VALUES ('1', '0', '后台首页', 'admin/index/index', 'fa-home', '', '1', '99', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('2', '0', '系统管理', 'admin/sys', 'fa-desktop', '', '1', '1099', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('3', '2', '用户管理', 'admin/admin_user/index', 'fa-user', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('4', '3', '添加用户', 'admin/admin_user/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('5', '3', '修改用户', 'admin/admin_user/edit', 'fa-edit', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('6', '3', '删除用户', 'admin/admin_user/del', 'fa-close', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('7', '2', '角色管理', 'admin/admin_group/index', 'fa-group', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('8', '7', '添加角色', 'admin/admin_group/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('9', '7', '修改角色', 'admin/admin_group/edit', 'fa-edit', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('10', '7', '删除角色', 'admin/admin_group/del', 'fa-close', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('11', '7', '角色授权', 'admin/admin_group/access', 'fa-key', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('12', '2', '菜单管理', 'admin/admin_menu/index', 'fa-align-justify', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('13', '12', '添加菜单', 'admin/admin_menu/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('14', '12', '修改菜单', 'admin/admin_menu/edit', 'fa-edit', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('15', '12', '删除菜单', 'admin/admin_menu/del', 'fa-close', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('16', '2', '系统设置', 'admin/sysconfig/index', 'fa-cog', '', '0', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('17', '16', '添加设置', 'admin/sysconfig/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('18', '16', '修改设置', 'admin/sysconfig/edit', 'fa-edit', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('19', '16', '删除设置', 'admin/sysconfig/del', 'fa-close', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('20', '2', '文件管理', 'admin/admin_file/manager', 'fa-file-text', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('21', '20', '文件列表', 'admin/admin_file/index', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('22', '21', '上传文件', 'admin/admin_file/upload', 'fa-upload', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('23', '21', '下载文件', 'admin/admin_file/download', 'fa-download', '', '0', '1000', '1', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('24', '21', '修改文件', 'admin/admin_file/edit', 'fa-edit', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('25', '21', '删除文件', 'admin/admin_file/del', 'fa-crash', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('26', '20', '回收站文件', 'admin/admin_file/recycle', 'fa-recycle', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('27', '26', '还原文件', 'admin/admin_file/reduction', 'fa-reply', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('28', '26', '永久删除文件', 'admin/admin_file/delete', 'fa-trash', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('29', '2', '日志管理', 'admin/admin_log', 'fa-info-circle', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('30', '29', '操作日志', 'admin/admin_log/index', 'fa-keyboard-o', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('31', '30', '查看操作日志详情', 'admin/admin_log/view', 'fa-search-plus', '', '0', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('32', '29', '系统日志', 'admin/syslog/index', 'fa-exclamation-circle', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('33', '32', '查看系统日志Trace', 'admin/syslog/view', 'fa-info-circle', '', '0', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('34', '2', '数据维护', 'admin/data', 'fa-database', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('35', '34', '数据库备份', 'admin/databack/index', 'fa-database', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('36', '35', '添加备份', 'admin/databack/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('37', '35', '删除备份', 'admin/databack/del', 'fa-trash', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('38', '35', '还原备份', 'admin/databack/reduction', 'fa-circle-o', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('39', '35', '下载备份', 'admin/databack/download', 'fa-download', '', '0', '1000', '1', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('40', '34', '数据表管理', 'admin/database/index', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('41', '40', '优化表', 'admin/database/optimize', 'fa-refresh', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('42', '40', '修复表', 'admin/database/repair', 'fa-circle-o-notch', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('43', '40', '查看表详情', 'admin/database/view', 'fa-info-circle', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('44', '2', '个人资料', 'admin/admin_user/profile', 'fa-smile-o', '', '1', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('45', '0', '用户管理', 'admin/user/manage', 'fa-user', '', '0', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('46', '45', '用户列表', 'admin/user/index', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('47', '46', '添加用户', 'admin/user/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('48', '46', '修改用户', 'admin/user/edit', 'fa-pencil', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('49', '46', '删除用户', 'admin/user/del', 'fa-trash', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('50', '46', '用户禁用(启用)', 'admin/user/disable', 'fa-ban', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('51', '45', '用户等级', 'admin/user_level/index', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('52', '51', '添加用户等级', 'admin/user_level/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('53', '51', '修改用户等级', 'admin/user_level/edit', 'fa-pencil', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('54', '51', '删除用户等级', 'admin/user_level/del', 'fa-trash', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('55', '0', '会员管理', 'admin/member', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('56', '0', '订单管理', 'admin/order', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('57', '0', '商品管理', 'admin/goods', 'fa-android', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('58', '0', '模板管理', 'admin/motels', 'fa-adn', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('59', '0', '网站说明', 'admin/wconfig', 'fa-bank', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('60', '59', '首页公告', 'admin/wconfig/index', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('61', '59', '兑换地址', 'admin/wconfig/duihuan', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('62', '59', '关于我们', 'admin/wconfig/contact', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('63', '59', '帮助中心', 'admin/wconfig/about', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('64', '58', '发货模板', 'admin/motels/index', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('65', '55', '会员列表', 'admin/member/index', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('66', '56', '订单列表', 'admin/order/index', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('67', '57', '商品列表', 'admin/goods/glist', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('68', '57', '卡密列表', 'admin/goods/klist', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('69', '57', '商品类型', 'admin/goods/cates', 'fa-list', '', '1', '998', '0', '1', '1');

-- ----------------------------
-- Table structure for bear_admin_users
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_users`;
CREATE TABLE `bear_admin_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `name` varchar(50) NOT NULL COMMENT '用户名（登录帐号）',
  `password` char(32) NOT NULL COMMENT '密码',
  `nickname` varchar(30) DEFAULT NULL COMMENT '用户昵称或中文用户名',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `mobile` char(11) DEFAULT NULL COMMENT '手机号',
  `avatar` varchar(255) DEFAULT '/static/admin/images/avatar.png' COMMENT '用户头像',
  `qq_openid` varchar(64) DEFAULT NULL,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `delete_time` int(10) unsigned DEFAULT NULL COMMENT '删除时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '用户状态1正常，0冻结',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='后台用户表';

-- ----------------------------
-- Records of bear_admin_users
-- ----------------------------
INSERT INTO `bear_admin_users` VALUES ('1', 'admin', '0192023a7bbd73250516f069df18b500', '超级管理员', '', '18888888888', '/uploads/attachment/20190810/58026fcd18361eb107a77a6638935fb5.ico', null, '1488189586', '1565441351', null, '1');

-- ----------------------------
-- Table structure for bear_attachments
-- ----------------------------
DROP TABLE IF EXISTS `bear_attachments`;
CREATE TABLE `bear_attachments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上传用户id',
  `original_name` varchar(255) NOT NULL,
  `save_name` varchar(255) NOT NULL,
  `save_path` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `size` int(11) unsigned NOT NULL DEFAULT '0',
  `md5` char(32) NOT NULL,
  `sha1` char(40) NOT NULL,
  `url` varchar(255) NOT NULL,
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否公开，默认为0不公开只能自己看，1为公开',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL,
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='附件表';

-- ----------------------------
-- Records of bear_attachments
-- ----------------------------
INSERT INTO `bear_attachments` VALUES ('1', '0', 'fx.png', 'dd9be964dc8cec705ef2626be6a94648.png', 'D:/php/website/BearAdmin/public/uploads/attachment/20180808/dd9be964dc8cec705ef2626be6a94648.png', 'png', 'image/png', '3228', '82d5b8eb764adb141250a8613b0f883a', 'be9492d8fa95873377e3e8008b15b1d41368925b', '/uploads/attachment/20180808/dd9be964dc8cec705ef2626be6a94648.png', '0', '1533695403', '1533695403', null);
INSERT INTO `bear_attachments` VALUES ('2', '0', 'r3.png', '7e2a8ed1e5e301608e8851e8df8d0bbe.png', 'D:/php/website/BearAdmin/public/uploads/attachment/20180808/7e2a8ed1e5e301608e8851e8df8d0bbe.png', 'png', 'image/png', '1933', 'b7a14b939643579b40273a10a29da008', 'b9db5f2d43c2b988ea65612a414403e8f9f78c63', '/uploads/attachment/20180808/7e2a8ed1e5e301608e8851e8df8d0bbe.png', '0', '1533695438', '1533695438', null);
INSERT INTO `bear_attachments` VALUES ('3', '0', 'r3_1.png', '1c6bcdb692cc11df6b393e90d30af5e2.png', 'D:/php/website/BearAdmin/public/uploads/attachment/20180808/1c6bcdb692cc11df6b393e90d30af5e2.png', 'png', 'image/png', '1836', '9f870914e24115562c869538daa4820d', 'e83af3fcc03e7b9db52ad485f6b4e142eaadda7c', '/uploads/attachment/20180808/1c6bcdb692cc11df6b393e90d30af5e2.png', '0', '1533695461', '1533695461', null);
INSERT INTO `bear_attachments` VALUES ('4', '0', '1559220254.ico', '58026fcd18361eb107a77a6638935fb5.ico', 'C:/Users/Administrator/Desktop/Admin/public/uploads/attachment/20190810/58026fcd18361eb107a77a6638935fb5.ico', 'ico', 'image/x-icon', '84598', '92cc2e3605173ce9ba3a955f3fb6aa9c', 'b0076d56456e418d12329e877049dccc6aacc253', '/uploads/attachment/20190810/58026fcd18361eb107a77a6638935fb5.ico', '0', '1565441351', '1565441351', null);

-- ----------------------------
-- Table structure for bear_sysconfigs
-- ----------------------------
DROP TABLE IF EXISTS `bear_sysconfigs`;
CREATE TABLE `bear_sysconfigs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '分组默认1，系统设置',
  `name` varchar(255) NOT NULL COMMENT '名称',
  `code` varchar(255) NOT NULL COMMENT '代码',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否启用，1启用，0禁用',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='系统参数表';

-- ----------------------------
-- Records of bear_sysconfigs
-- ----------------------------
INSERT INTO `bear_sysconfigs` VALUES ('1', '1', '后台名称', 'backend_name', 'Test', '网站后台名称，title和登录界面显示', '1', '1502187289', '0', null);

-- ----------------------------
-- Table structure for bear_syslogs
-- ----------------------------
DROP TABLE IF EXISTS `bear_syslogs`;
CREATE TABLE `bear_syslogs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `level` int(8) unsigned NOT NULL DEFAULT '0' COMMENT '错误等级',
  `message` varchar(255) NOT NULL COMMENT '错误信息',
  `file` varchar(255) NOT NULL COMMENT '文件',
  `line` int(10) unsigned NOT NULL COMMENT '所在行数',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COMMENT='系统错误日志表';

-- ----------------------------
-- Records of bear_syslogs
-- ----------------------------
INSERT INTO `bear_syslogs` VALUES ('1', '0', 'module not exists:static', 'C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php', '535', '1565441967');
INSERT INTO `bear_syslogs` VALUES ('2', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565441967');
INSERT INTO `bear_syslogs` VALUES ('3', '0', 'module not exists:static', 'C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php', '535', '1565441971');
INSERT INTO `bear_syslogs` VALUES ('4', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565441972');
INSERT INTO `bear_syslogs` VALUES ('5', '0', 'template not exists:C:\\Users\\Administrator\\Desktop\\Admin\\public/../application/admin\\view\\motels\\index.html', 'C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php', '82', '1565445614');
INSERT INTO `bear_syslogs` VALUES ('6', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445614');
INSERT INTO `bear_syslogs` VALUES ('7', '0', 'Undefined variable: item', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '197', '1565445721');
INSERT INTO `bear_syslogs` VALUES ('8', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445722');
INSERT INTO `bear_syslogs` VALUES ('9', '0', 'Undefined variable: item', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '197', '1565445729');
INSERT INTO `bear_syslogs` VALUES ('10', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445729');
INSERT INTO `bear_syslogs` VALUES ('11', '0', 'Undefined variable: item', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '197', '1565445800');
INSERT INTO `bear_syslogs` VALUES ('12', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445800');
INSERT INTO `bear_syslogs` VALUES ('13', '0', 'Undefined variable: item', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '197', '1565445815');
INSERT INTO `bear_syslogs` VALUES ('14', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445816');
INSERT INTO `bear_syslogs` VALUES ('15', '0', 'Undefined variable: item', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '197', '1565445846');
INSERT INTO `bear_syslogs` VALUES ('16', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445846');
INSERT INTO `bear_syslogs` VALUES ('17', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '210', '1565445879');
INSERT INTO `bear_syslogs` VALUES ('18', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445879');
INSERT INTO `bear_syslogs` VALUES ('19', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '210', '1565445880');
INSERT INTO `bear_syslogs` VALUES ('20', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445880');
INSERT INTO `bear_syslogs` VALUES ('21', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '210', '1565445881');
INSERT INTO `bear_syslogs` VALUES ('22', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445881');
INSERT INTO `bear_syslogs` VALUES ('23', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '210', '1565445882');
INSERT INTO `bear_syslogs` VALUES ('24', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445882');
INSERT INTO `bear_syslogs` VALUES ('25', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '210', '1565445882');
INSERT INTO `bear_syslogs` VALUES ('26', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445882');
INSERT INTO `bear_syslogs` VALUES ('27', '0', 'Undefined variable: userLevel', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '158', '1565445926');
INSERT INTO `bear_syslogs` VALUES ('28', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565445926');
INSERT INTO `bear_syslogs` VALUES ('29', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '219', '1565446013');
INSERT INTO `bear_syslogs` VALUES ('30', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565446013');
INSERT INTO `bear_syslogs` VALUES ('31', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '193', '1565446117');
INSERT INTO `bear_syslogs` VALUES ('32', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565446117');
INSERT INTO `bear_syslogs` VALUES ('33', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '201', '1565446407');
INSERT INTO `bear_syslogs` VALUES ('34', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565446407');
INSERT INTO `bear_syslogs` VALUES ('35', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '201', '1565446423');
INSERT INTO `bear_syslogs` VALUES ('36', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565446423');
INSERT INTO `bear_syslogs` VALUES ('37', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '200', '1565446516');
INSERT INTO `bear_syslogs` VALUES ('38', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565446517');
INSERT INTO `bear_syslogs` VALUES ('39', '0', 'Undefined variable: page', 'C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php', '219', '1565446727');
INSERT INTO `bear_syslogs` VALUES ('40', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565446727');
INSERT INTO `bear_syslogs` VALUES ('41', '0', 'variable type error： boolean', 'C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Response.php', '316', '1565452314');
INSERT INTO `bear_syslogs` VALUES ('42', '0', 'Uncaught exception \'InvalidArgumentException\' with message \'A stream must either be a resource or a string.\' in C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php:50\nStack trace:\n#0 C:\\Users\\Administrator\\Des', 'C:\\Users\\Administrator\\Desktop\\Admin\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php', '50', '1565452315');

-- ----------------------------
-- Table structure for bear_syslog_trace
-- ----------------------------
DROP TABLE IF EXISTS `bear_syslog_trace`;
CREATE TABLE `bear_syslog_trace` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_id` int(11) unsigned NOT NULL COMMENT '日志id',
  `trace` longtext COMMENT '日志trace',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COMMENT='系统日志trace表';

-- ----------------------------
-- Records of bear_syslog_trace
-- ----------------------------
INSERT INTO `bear_syslog_trace` VALUES ('1', '1', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#4 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('2', '2', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('3', '3', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#4 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('4', '4', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('5', '5', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#4 [internal function]: app\\admin\\controller\\Motels->index()\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#8 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#11 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('6', '6', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('7', '7', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(197): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 197, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('8', '8', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('9', '9', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(197): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 197, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('10', '10', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('11', '11', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(197): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 197, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('12', '12', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('13', '13', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(197): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 197, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('14', '14', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('15', '15', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(197): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 197, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('16', '16', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('17', '17', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(210): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 210, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('18', '18', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('19', '19', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(210): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 210, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('20', '20', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('21', '21', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(210): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 210, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('22', '22', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('23', '23', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(210): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 210, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('24', '24', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('25', '25', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(210): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 210, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('26', '26', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('27', '27', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(158): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 158, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('28', '28', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('29', '29', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(219): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 219, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('30', '30', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('31', '31', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(193): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 193, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('32', '32', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('33', '33', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(201): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 201, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('34', '34', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('35', '35', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(201): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 201, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('36', '36', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('37', '37', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(200): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 200, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('38', '38', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('39', '39', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\runtime\\temp\\a2fba2e797cb1a4a921d43b0af612149.php(219): think\\Error::appError(8, \'Undefined varia...\', \'C:\\\\Users\\\\Admini...\', 219, Array)\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\template\\driver\\File.php(53): include(\'C:\\\\Users\\\\Admini...\')\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Template.php(188): think\\template\\driver\\File->read(\'C:\\\\Users\\\\Admini...\', Array)\n#3 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\view\\driver\\Think.php(86): think\\Template->fetch(\'C:\\\\Users\\\\Admini...\', Array, Array)\n#4 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\View.php(163): think\\view\\driver\\Think->fetch(\'\', Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Controller.php(120): think\\View->fetch(\'\', Array, Array, Array)\n#6 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Base.php(338): think\\Controller->fetch(\'\', Array, Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\Admin\\application\\admin\\controller\\Motels.php(20): app\\admin\\controller\\Base->fetch()\n#8 [internal function]: app\\admin\\controller\\Motels->index()\n#9 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Motels), Array)\n#10 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#11 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#12 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#13 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\App::run()\n#14 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#15 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('40', '40', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('41', '41', '#0 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\library\\think\\Response.php(94): think\\Response->getContent()\n#1 C:\\Users\\Administrator\\Desktop\\Admin\\thinkphp\\start.php(19): think\\Response->send()\n#2 C:\\Users\\Administrator\\Desktop\\Admin\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#3 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('42', '42', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');

-- ----------------------------
-- Table structure for bear_users
-- ----------------------------
DROP TABLE IF EXISTS `bear_users`;
CREATE TABLE `bear_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `level_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户等级id',
  `name` varchar(50) NOT NULL COMMENT '用户账号',
  `password` char(32) NOT NULL COMMENT '密码',
  `nickname` varchar(50) NOT NULL COMMENT '昵称',
  `headimg` varchar(255) NOT NULL COMMENT '头像',
  `mobile` char(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '余额',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态，1启用，2禁用',
  `reg_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='前台用户表';

-- ----------------------------
-- Records of bear_users
-- ----------------------------
INSERT INTO `bear_users` VALUES ('1', '1', 'test001', '14e1b600b1fd579f47433b88e8d85291', 'test001', '/uploads/attachment/20180808/dd9be964dc8cec705ef2626be6a94648.png', '13000000001', '', '0.00', '1', '0', '0', '1533695403', '1533695403', null);
INSERT INTO `bear_users` VALUES ('2', '2', 'test002', '14e1b600b1fd579f47433b88e8d85291', 'test002', '/uploads/attachment/20180808/7e2a8ed1e5e301608e8851e8df8d0bbe.png', '13000000002', '', '0.00', '1', '0', '0', '1533695438', '1533695438', null);
INSERT INTO `bear_users` VALUES ('3', '3', 'test003', '14e1b600b1fd579f47433b88e8d85291', 'test003', '/uploads/attachment/20180808/1c6bcdb692cc11df6b393e90d30af5e2.png', '13000000003', '', '0.00', '1', '0', '0', '1533695461', '1533695461', null);

-- ----------------------------
-- Table structure for bear_user_levels
-- ----------------------------
DROP TABLE IF EXISTS `bear_user_levels`;
CREATE TABLE `bear_user_levels` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '等级名称',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='前台用户等级表';

-- ----------------------------
-- Records of bear_user_levels
-- ----------------------------
INSERT INTO `bear_user_levels` VALUES ('1', '普通会员', '1533695231', '1533695231', null);
INSERT INTO `bear_user_levels` VALUES ('2', '中级会员', '1533695240', '1533695240', null);
INSERT INTO `bear_user_levels` VALUES ('3', '高级会员', '1533695246', '1533695246', null);
