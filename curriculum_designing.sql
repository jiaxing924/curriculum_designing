/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : curriculum_designing

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-01-12 15:36:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `CName` varchar(255) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', '大学物理');
INSERT INTO `course` VALUES ('2', '线性代数');
INSERT INTO `course` VALUES ('3', '概率统计');
INSERT INTO `course` VALUES ('4', '程序设计基础');
INSERT INTO `course` VALUES ('5', '数据结构');
INSERT INTO `course` VALUES ('6', '电工电子学');
INSERT INTO `course` VALUES ('7', '数字逻辑');
INSERT INTO `course` VALUES ('8', '计算机导论');
INSERT INTO `course` VALUES ('9', '离散数学');
INSERT INTO `course` VALUES ('10', '计算机组成原理');
INSERT INTO `course` VALUES ('11', '计算机网络');
INSERT INTO `course` VALUES ('12', '高等数学');
INSERT INTO `course` VALUES ('13', '软件工程');
INSERT INTO `course` VALUES ('14', '面向对象程序设计');
INSERT INTO `course` VALUES ('15', '算法分析与设计');
INSERT INTO `course` VALUES ('16', '算法设计与分析');
INSERT INTO `course` VALUES ('17', '专业方向设计');
INSERT INTO `course` VALUES ('18', '操作系统');
INSERT INTO `course` VALUES ('19', '面向对象程序设计课程设计');
INSERT INTO `course` VALUES ('20', '数据结构课程设计');
INSERT INTO `course` VALUES ('21', '数字逻辑课程设计');
INSERT INTO `course` VALUES ('22', '操作系统课设');
INSERT INTO `course` VALUES ('23', '数据库系统原理课程设计');
INSERT INTO `course` VALUES ('24', '编译技术课程设计');
INSERT INTO `course` VALUES ('25', '单片机应用课程设计');
INSERT INTO `course` VALUES ('26', '计算机组成原理课程设计');
INSERT INTO `course` VALUES ('27', '微机接口课程设计');
INSERT INTO `course` VALUES ('28', '人文类选修课');
INSERT INTO `course` VALUES ('29', '专业课程设计或生产实习');
INSERT INTO `course` VALUES ('30', '毕业设计');
INSERT INTO `course` VALUES ('31', '专业认知实践');
INSERT INTO `course` VALUES ('32', '必须听一次相关报告');
INSERT INTO `course` VALUES ('33', '入学教育');
INSERT INTO `course` VALUES ('34', '专业方向课程设计（或生产实习）');
INSERT INTO `course` VALUES ('35', '网络自学课程');
INSERT INTO `course` VALUES ('36', '数理统计');
INSERT INTO `course` VALUES ('37', '电工电子学实验A');
INSERT INTO `course` VALUES ('38', '面向对象课程设计');
INSERT INTO `course` VALUES ('39', '单片机原理课程设计');
INSERT INTO `course` VALUES ('40', '大学物理实验B');
INSERT INTO `course` VALUES ('41', '电工电子学实验B');
INSERT INTO `course` VALUES ('42', '数字逻辑A实验');
INSERT INTO `course` VALUES ('43', '计算机组成原理A实验');
INSERT INTO `course` VALUES ('44', '必须听两次相关报告');
INSERT INTO `course` VALUES ('45', '认知实践');
INSERT INTO `course` VALUES ('46', '单片机原理及应用');
INSERT INTO `course` VALUES ('47', '面向对象编程课程设计');
INSERT INTO `course` VALUES ('48', '数据库课程设计');
INSERT INTO `course` VALUES ('49', '操作系统课程设计');
INSERT INTO `course` VALUES ('50', '单片机课程设计');
INSERT INTO `course` VALUES ('51', '专业课程设计');
INSERT INTO `course` VALUES ('52', '专业方向课程设计');
INSERT INTO `course` VALUES ('53', '每个学生4年内必须出席一次相关内容的讲座并提交报告');
INSERT INTO `course` VALUES ('54', '思想道德修养与法律基础');
INSERT INTO `course` VALUES ('55', '形势政策');
INSERT INTO `course` VALUES ('56', '专业限选模块');
INSERT INTO `course` VALUES ('57', '专业任选模块');
INSERT INTO `course` VALUES ('58', '网络自学模块');
INSERT INTO `course` VALUES ('59', '专业必修课');
INSERT INTO `course` VALUES ('60', '马克思主义基本原理');
INSERT INTO `course` VALUES ('61', '经济管理类人文类选修课');
INSERT INTO `course` VALUES ('62', '马克思主义哲学原理');
INSERT INTO `course` VALUES ('63', '中国近代史纲要');
INSERT INTO `course` VALUES ('64', '形势与政策');
INSERT INTO `course` VALUES ('65', '体育');
INSERT INTO `course` VALUES ('66', '毛泽东思想和中国特色社会主义理论体系概论');
INSERT INTO `course` VALUES ('67', '学业规划概论');
INSERT INTO `course` VALUES ('68', '学术报告');
INSERT INTO `course` VALUES ('69', '大学体育(基础)');
INSERT INTO `course` VALUES ('70', '入学教育、军事技能训练');
INSERT INTO `course` VALUES ('71', '专业课课程设计(团队项目)');
INSERT INTO `course` VALUES ('72', '军事理论');
INSERT INTO `course` VALUES ('73', '大学体育(选项)');
INSERT INTO `course` VALUES ('74', '大学英语(基础)');
INSERT INTO `course` VALUES ('75', '大学英语(提高)/（拓展）');
INSERT INTO `course` VALUES ('76', '双语课程');
INSERT INTO `course` VALUES ('77', '全英语课程');
INSERT INTO `course` VALUES ('78', '大学物理实验');
INSERT INTO `course` VALUES ('79', '电工电子学实验');
INSERT INTO `course` VALUES ('80', '课程设计提交书面报告及现场验收');
INSERT INTO `course` VALUES ('81', '硬件实验报告');
INSERT INTO `course` VALUES ('82', '毕业设计答辩');
INSERT INTO `course` VALUES ('83', '网络自学课程2个学分');
INSERT INTO `course` VALUES ('84', '各门课程设计');

-- ----------------------------
-- Table structure for gr
-- ----------------------------
DROP TABLE IF EXISTS `gr`;
CREATE TABLE `gr` (
  `GRID` int(11) NOT NULL AUTO_INCREMENT,
  `GRName` varchar(255) NOT NULL,
  `GRDetail` varchar(255) NOT NULL,
  PRIMARY KEY (`GRID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gr
-- ----------------------------
INSERT INTO `gr` VALUES ('1', '工程知识', '具有能够将数学、自然科学、工程基础和专业知识用于解决计算机科学与技术领域的复杂工程问题的能力。');
INSERT INTO `gr` VALUES ('2', '问题分析', '具有能够应用数学、自然科学和工程科学的基本原理，识别、表达、并通过文献研究分析计算机科学与技术领域复杂工程问题，以获得有效结论的能力。');
INSERT INTO `gr` VALUES ('3', '设计/开发解决方案', '能够设计针对计算机科学与技术领域复杂工程问题的解决方案，设计满足特定需求的系统、单元（部件）或流程，并能够在设计环节中体现创新意识，设计过程中能够综合考虑各种制约因素。');
INSERT INTO `gr` VALUES ('4', '研究', '了解计算机科学与技术前沿发展现状和趋势，能够基于科学原理并采用科学方法对计算机科学与技术领域复杂工程问题进行研究，包括设计实验、分析与解释数据、并通过信息综合得到合理有效的结论。');
INSERT INTO `gr` VALUES ('5', '使用现代工具', '使用现代工具：能够针对计算机科学与技术领域复杂工程问题，开发、选择与使用恰当的技术、资源、先进的软硬件工具，包括对复杂工程问题的预测与模拟，并能够理解其局限性。');
INSERT INTO `gr` VALUES ('6', '工程与社会', '能够基于工程相关背景知识进行合理分析，评价计算机科学与技术领域相关工程实践和复杂工程问题解决方案，对社会、健康、安全、法律以及文化的影响，并理解应承担的责任。');
INSERT INTO `gr` VALUES ('7', '.环境和可持续发展', '能够理解和评价针对复杂工程问题的工程实践对环境、社会可持续发展的影响。');
INSERT INTO `gr` VALUES ('8', '职业规范', '具有人文社会科学素养、社会责任感，能够在工程实践中理解并遵守职业道德和规范，履行责任。');
INSERT INTO `gr` VALUES ('9', '个人和团队', '能够在多学科背景下的团队中承担个体、团队成员以及负责人的角色。');
INSERT INTO `gr` VALUES ('10', '沟通', '掌握一门外语，具有一定的国际化视野，能够在跨文化背景下进行沟通和交流。能够就计算机科学与技术工程问题与同行及社会公众进行有效沟通和交流，包括撰写报告和设计文稿、陈述发言、清晰表达或回应指令。');
INSERT INTO `gr` VALUES ('11', '	项目管理', '理解并掌握工程管理原理与经济决策方法，并能在多学科环境中应用。');
INSERT INTO `gr` VALUES ('12', '终身学习', '具有自主学习和终身学习的意识，有不断学习和适应发展的能力。');

-- ----------------------------
-- Table structure for ip
-- ----------------------------
DROP TABLE IF EXISTS `ip`;
CREATE TABLE `ip` (
  `IPID` int(11) NOT NULL AUTO_INCREMENT,
  `GRID` int(11) NOT NULL,
  `IPDetail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IPID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ip
-- ----------------------------
INSERT INTO `ip` VALUES ('1', '1', '具有解决计算机科学与技术问题所需的数学与自然科学知识及其应用能力');
INSERT INTO `ip` VALUES ('2', '1', '具有解决计算机科学与技术问题所需的专业基础知识及其应用能力。');
INSERT INTO `ip` VALUES ('3', '1', '能够运用数学、自然科学、工程基础和专业知识解决计算机科学与技术领域复杂工程问题。');
INSERT INTO `ip` VALUES ('4', '2', '能够将数学与自然科学的基本概念运用到工程问题的适当表述之中。');
INSERT INTO `ip` VALUES ('5', '2', '能够针对一个计算机系统或者计算过程选择一种数学模型，并达到适当的正确性或可用性要求。');
INSERT INTO `ip` VALUES ('6', '2', '能够对于模型的正确性进行严谨的推理，并能够给出解。');
INSERT INTO `ip` VALUES ('7', '2', '能从数学与自然科学的角度对解决途径进行分析，以获得有效结论的能力。');
INSERT INTO `ip` VALUES ('8', '3', '能针对计算机相关系统设计解决方案。');
INSERT INTO `ip` VALUES ('9', '3', '能够有效地实施单体设计。');
INSERT INTO `ip` VALUES ('10', '3', '能够有效的实施系统设计。');
INSERT INTO `ip` VALUES ('11', '3', '能够有效地实施工程设计，并体现创新意识，包括考虑经济、环境、法律、安全、健康、伦理等各种非技术因素。');
INSERT INTO `ip` VALUES ('12', '4', '了解计算机科学与技术前沿发展现状和趋势。');
INSERT INTO `ip` VALUES ('13', '4', '理解工程活动中获取相关信息的必要性与基本方法,了解本专业重要资料来源及获取方法。');
INSERT INTO `ip` VALUES ('14', '4', '理解离散结构、概率模型在计算机问题求解中的意义与基本运用。');
INSERT INTO `ip` VALUES ('15', '4', ' 能够基于计算机科学与技术原理并采用科学方法对软硬件系统制定实验方案。');
INSERT INTO `ip` VALUES ('16', '4', '能够对实验结果或者项目进行分析并撰写报告。');
INSERT INTO `ip` VALUES ('17', '5', '对计算机科学与技术领域及其相关行业的国际状况有基本了解。');
INSERT INTO `ip` VALUES ('18', '5', '能够利用主流的开发工具对实施项目进行描述、调试、验证。');
INSERT INTO `ip` VALUES ('19', '5', '能够针对计算机系统设计问题，选择与使用恰当的技术、资源和先进的软硬件工具，并能够了解其局限性。');
INSERT INTO `ip` VALUES ('20', '6', '了解与计算机产业、软件产业、信息服务业相关的方针、政策与法律法规。');
INSERT INTO `ip` VALUES ('21', '6', '了解计算机技术发展历史上重大突破的背景与影响。');
INSERT INTO `ip` VALUES ('22', '6', '能正确评价计算机相关系统与工程对客观世界和社会的影响，并理解应承担的责任。');
INSERT INTO `ip` VALUES ('23', '7', '了解国家的环境可持续发展战略及相关的政策和法津、法规。');
INSERT INTO `ip` VALUES ('24', '7', '能了解计算机产业与环境保护的关系，理解与评价计算机系统与工程对于环境、社会可持续发展的影响。');
INSERT INTO `ip` VALUES ('25', '8', '了解我国的基本国情、热爱祖国。理解世界观、人生观的基本意义及其影响。');
INSERT INTO `ip` VALUES ('26', '8', '具有健康的体魄，具有较高的思想觉悟和道德水平，树立正确的人生观和世界观。');
INSERT INTO `ip` VALUES ('27', '8', '在计算机科学与技术领域工程实践中，具有人文社会科学素养、社会责任感，能理解并遵守职业道德和规范，履行责任。具有自主学习和终身学习的意识。');
INSERT INTO `ip` VALUES ('28', '9', '具备基本的人际交往能力，能与团队成员有效沟通。');
INSERT INTO `ip` VALUES ('29', '9', '能够理解个人在团队中所处的角色、所应发挥的作用、所应担当的责任，以及个体对团队及团队其他成员的影响。');
INSERT INTO `ip` VALUES ('30', '9', '具有团队合作和在多学科背景环境中发挥作用的能力，能够承担个体、团队成员以及负责人的角色。');
INSERT INTO `ip` VALUES ('31', '10', '至少掌握一门外语，具有应用该外语的能力。');
INSERT INTO `ip` VALUES ('32', '10', '掌握技术文件写作方法，理解和撰写效果良好的报告和设计文件。');
INSERT INTO `ip` VALUES ('33', '10', '能够通过口头及书面方式清晰表达计算机相关系统设计原理，并能回答提问。');
INSERT INTO `ip` VALUES ('34', '11', '理解计算机科学与技术工程活动中涉及的重要经济与管理因素。');
INSERT INTO `ip` VALUES ('35', '11', '具有在多学科环境中应用工程管理和经济决策方法的能力。');
INSERT INTO `ip` VALUES ('36', '12', '具有自主学习和终身学习的意识。');
INSERT INTO `ip` VALUES ('37', '12', '具有采用合适的方法进行不断学习和适应发展的能力。');
INSERT INTO `ip` VALUES ('38', '12', '能表现出自我学习和探索的成效。');

-- ----------------------------
-- Table structure for relevance
-- ----------------------------
DROP TABLE IF EXISTS `relevance`;
CREATE TABLE `relevance` (
  `RID` int(11) NOT NULL AUTO_INCREMENT,
  `GRID` int(11) NOT NULL,
  `IPID` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `RPercent` float(10,0) NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of relevance
-- ----------------------------
INSERT INTO `relevance` VALUES ('1', '1', '1', '1', '22');
INSERT INTO `relevance` VALUES ('2', '1', '1', '2', '30');
INSERT INTO `relevance` VALUES ('3', '1', '1', '3', '20');
INSERT INTO `relevance` VALUES ('4', '1', '1', '4', '20');
INSERT INTO `relevance` VALUES ('5', '1', '2', '5', '30');
INSERT INTO `relevance` VALUES ('6', '1', '2', '6', '30');
INSERT INTO `relevance` VALUES ('7', '1', '2', '7', '20');
INSERT INTO `relevance` VALUES ('8', '1', '2', '8', '20');
INSERT INTO `relevance` VALUES ('9', '1', '3', '9', '30');
INSERT INTO `relevance` VALUES ('10', '1', '3', '10', '30');
INSERT INTO `relevance` VALUES ('11', '1', '3', '11', '20');
INSERT INTO `relevance` VALUES ('12', '1', '3', '12', '20');
INSERT INTO `relevance` VALUES ('13', '2', '4', '13', '25');
INSERT INTO `relevance` VALUES ('14', '2', '4', '3', '25');
INSERT INTO `relevance` VALUES ('15', '2', '4', '10', '25');
INSERT INTO `relevance` VALUES ('16', '2', '4', '2', '25');
INSERT INTO `relevance` VALUES ('17', '2', '5', '3', '30');
INSERT INTO `relevance` VALUES ('18', '2', '5', '10', '30');
INSERT INTO `relevance` VALUES ('19', '2', '5', '8', '20');
INSERT INTO `relevance` VALUES ('20', '2', '5', '14', '20');
INSERT INTO `relevance` VALUES ('21', '2', '6', '13', '30');
INSERT INTO `relevance` VALUES ('22', '2', '6', '15', '10');
INSERT INTO `relevance` VALUES ('23', '2', '6', '5', '20');
INSERT INTO `relevance` VALUES ('24', '2', '6', '16', '20');
INSERT INTO `relevance` VALUES ('25', '2', '6', '14', '20');
INSERT INTO `relevance` VALUES ('26', '2', '7', '4', '40');
INSERT INTO `relevance` VALUES ('27', '2', '7', '17', '20');
INSERT INTO `relevance` VALUES ('28', '2', '7', '18', '30');
INSERT INTO `relevance` VALUES ('29', '3', '8', '10', '20');
INSERT INTO `relevance` VALUES ('30', '3', '8', '4', '20');
INSERT INTO `relevance` VALUES ('31', '3', '8', '2', '10');
INSERT INTO `relevance` VALUES ('32', '3', '8', '19', '30');
INSERT INTO `relevance` VALUES ('33', '3', '8', '17', '20');
INSERT INTO `relevance` VALUES ('34', '3', '9', '20', '25');
INSERT INTO `relevance` VALUES ('35', '3', '9', '21', '25');
INSERT INTO `relevance` VALUES ('36', '3', '9', '22', '25');
INSERT INTO `relevance` VALUES ('37', '3', '9', '23', '25');
INSERT INTO `relevance` VALUES ('38', '3', '10', '24', '20');
INSERT INTO `relevance` VALUES ('39', '3', '10', '25', '20');
INSERT INTO `relevance` VALUES ('40', '3', '10', '26', '20');
INSERT INTO `relevance` VALUES ('41', '3', '10', '27', '20');
INSERT INTO `relevance` VALUES ('42', '3', '10', '28', '20');
INSERT INTO `relevance` VALUES ('43', '3', '11', '14', '25');
INSERT INTO `relevance` VALUES ('44', '3', '11', '29', '25');
INSERT INTO `relevance` VALUES ('45', '3', '11', '30', '25');
INSERT INTO `relevance` VALUES ('46', '3', '11', '31', '25');
INSERT INTO `relevance` VALUES ('47', '4', '12', '9', '25');
INSERT INTO `relevance` VALUES ('48', '4', '12', '32', '25');
INSERT INTO `relevance` VALUES ('49', '4', '12', '14', '25');
INSERT INTO `relevance` VALUES ('50', '4', '12', '33', '25');
INSERT INTO `relevance` VALUES ('51', '4', '13', '34', '30');
INSERT INTO `relevance` VALUES ('52', '4', '13', '35', '20');
INSERT INTO `relevance` VALUES ('53', '4', '13', '36', '20');
INSERT INTO `relevance` VALUES ('54', '4', '13', '31', '30');
INSERT INTO `relevance` VALUES ('55', '4', '14', '37', '20');
INSERT INTO `relevance` VALUES ('56', '4', '14', '10', '20');
INSERT INTO `relevance` VALUES ('57', '4', '14', '19', '20');
INSERT INTO `relevance` VALUES ('58', '4', '14', '11', '10');
INSERT INTO `relevance` VALUES ('59', '4', '14', '12', '10');
INSERT INTO `relevance` VALUES ('60', '4', '14', '8', '20');
INSERT INTO `relevance` VALUES ('61', '4', '15', '38', '20');
INSERT INTO `relevance` VALUES ('62', '4', '15', '39', '15');
INSERT INTO `relevance` VALUES ('63', '4', '15', '21', '15');
INSERT INTO `relevance` VALUES ('64', '4', '15', '22', '25');
INSERT INTO `relevance` VALUES ('65', '4', '15', '40', '25');
INSERT INTO `relevance` VALUES ('66', '4', '16', '41', '25');
INSERT INTO `relevance` VALUES ('67', '4', '16', '42', '25');
INSERT INTO `relevance` VALUES ('68', '4', '16', '43', '25');
INSERT INTO `relevance` VALUES ('69', '4', '16', '44', '25');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `UName` varchar(255) NOT NULL,
  `UPassword` varchar(255) NOT NULL,
  `UType` int(1) NOT NULL COMMENT '1.普通用户;2.管理员',
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'xiaoming', '11223344', '1');
INSERT INTO `user` VALUES ('2', 'pyq', '11223344', '2');
INSERT INTO `user` VALUES ('3', 'admin', '11223344', '2');
