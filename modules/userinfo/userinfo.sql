CREATE TABLE IF NOT EXISTS `{userinfo}` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL DEFAULT '0' COMMENT '所属站点',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户名称',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `hits` int(11) NOT NULL DEFAULT '0' COMMENT '点击次数',
  `litpic` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `flag` varchar(50) NOT NULL COMMENT '属性',
  `source` varchar(50) NOT NULL COMMENT '来源',
  `publish` varchar(50) NOT NULL  COMMENT '发布时间',

  `marry` varchar(50) NOT NULL DEFAULT '' COMMENT '婚姻',
  `child` varchar(10) NOT NULL DEFAULT '' COMMENT '子女',
  `education` varchar(10) NOT NULL DEFAULT '' COMMENT '学历',
  `income` varchar(10) NOT NULL DEFAULT '' COMMENT '收入',
  `shebao` varchar(10) NOT NULL DEFAULT '' COMMENT '社保',
  `shebaoid` varchar(50) NOT NULL DEFAULT '' COMMENT '社保号',
  `housing` varchar(10) NOT NULL DEFAULT '' COMMENT '住房条件',
  `car` varchar(10) NOT NULL DEFAULT '' COMMENT '车',
  `late` varchar(10) NOT NULL DEFAULT '' COMMENT '逾期',

  `house_address` varchar(10) NOT NULL DEFAULT '' COMMENT '房产地址',
  `house_area` varchar(10) NOT NULL DEFAULT '' COMMENT '房产面积',
  `house_year` varchar(10) NOT NULL DEFAULT '' COMMENT '建筑年份',
  `house_status` varchar(10) NOT NULL DEFAULT '' COMMENT '供款',
  `house_holder1` varchar(10) NOT NULL DEFAULT '' COMMENT '房子所有权1',
  `house_holder2` varchar(10) NOT NULL DEFAULT '' COMMENT '房子所有权1',
  `house_right1` varchar(10) NOT NULL DEFAULT '' COMMENT '房子份额1',
  `house_right2` varchar(10) NOT NULL DEFAULT '' COMMENT '房子份额2',
  `house_loanyear` varchar(10) NOT NULL DEFAULT '' COMMENT '贷款年限',
  `house_loanprice` varchar(10) NOT NULL DEFAULT '' COMMENT '每月供款',
  `house_balance` varchar(10) NOT NULL DEFAULT '' COMMENT '贷款余额',
  `house_bank` varchar(10) NOT NULL DEFAULT '' COMMENT '银行',

  `company_name` varchar(10) NOT NULL DEFAULT '' COMMENT '公司名称',
  `company_type` varchar(10) NOT NULL DEFAULT '' COMMENT '公司性质',
  `company_industry` varchar(10) NOT NULL DEFAULT '' COMMENT '公司行业',
  `company_office` varchar(10) NOT NULL DEFAULT '' COMMENT '工作职位',
  `company_jibie` varchar(10) NOT NULL DEFAULT '' COMMENT '工作级别',
  `company_worktime1` varchar(10) NOT NULL DEFAULT '' COMMENT '工作时间1',
  `company_worktime2` varchar(10) NOT NULL DEFAULT '' COMMENT '工作时间2',
  `company_workyear` varchar(10) NOT NULL DEFAULT '' COMMENT '工作年限',
  `company_tel` varchar(50) NOT NULL DEFAULT '' COMMENT '公司电话',
  `company_address` varchar(100) NOT NULL DEFAULT '' COMMENT '公司地址',
  `company_weburl` varchar(100) NOT NULL DEFAULT '' COMMENT '公司网站',
  `company_reamrk` varchar(250) NOT NULL DEFAULT '' COMMENT '公司备注',


  `private_type` varchar(10) NOT NULL DEFAULT '' COMMENT '类别',
  `private_date` varchar(10) NOT NULL DEFAULT '' COMMENT '日期',
  `private_place` varchar(10) NOT NULL DEFAULT '' COMMENT '场所',
  `private_rent` varchar(10) NOT NULL DEFAULT '' COMMENT '租金',
  `private_term` varchar(10) NOT NULL DEFAULT '' COMMENT '租期',
  `private_taxid` varchar(10) NOT NULL DEFAULT '' COMMENT '工商税务',
  `private_commerceid` varchar(50) NOT NULL DEFAULT '' COMMENT '工商登记号',
  `private_income` varchar(100) NOT NULL DEFAULT '' COMMENT '收入',
  `private_employee` varchar(100) NOT NULL DEFAULT '' COMMENT '雇员',

  `finance_repayment` varchar(100) NOT NULL DEFAULT '' COMMENT '每月无抵押贷款还款额',
  `finance_property` varchar(100) NOT NULL DEFAULT '' COMMENT '自有房产',
  `finance_amount` varchar(100) NOT NULL DEFAULT '' COMMENT '每月房屋按揭金额',
  `finance_car` varchar(10) NOT NULL DEFAULT '' COMMENT '自有汽车',
  `finance_caramount` varchar(100) NOT NULL DEFAULT '' COMMENT '每月汽车按揭金额',
  `finance_creditcard` varchar(100) NOT NULL DEFAULT '' COMMENT '信用卡金额',

  `mate_name` varchar(100) NOT NULL DEFAULT '' COMMENT '配偶名字',
  `mate_salary` varchar(10) NOT NULL DEFAULT '' COMMENT '薪资',
  `mate_phone` varchar(100) NOT NULL DEFAULT '' COMMENT '手机',
  `mate_tel` varchar(100) NOT NULL DEFAULT '' COMMENT '电话',
  `mate_type` varchar(10) NOT NULL DEFAULT '' COMMENT '工作类型',
  `mate_office` varchar(10) NOT NULL DEFAULT '' COMMENT '工作职位',
  `mate_address` varchar(250) NOT NULL DEFAULT '' COMMENT '地址',
  `mate_income` varchar(100) NOT NULL DEFAULT '' COMMENT '收入',
 
  `education_record` varchar(100) NOT NULL DEFAULT '' COMMENT '学历',
  `education_school` varchar(200) NOT NULL DEFAULT '' COMMENT '学校',
  `education_study` varchar(200) NOT NULL DEFAULT '' COMMENT '专业',
  `education_time1` varchar(20) NOT NULL DEFAULT '' COMMENT '时间1',
  `education_time2` varchar(20) NOT NULL DEFAULT '' COMMENT '时间2',
 
  `tel` varchar(50) NOT NULL DEFAULT ''  COMMENT '电话',
  `phone` varchar(50) NOT NULL DEFAULT '' COMMENT '手机',
  `post` varchar(50) NOT NULL DEFAULT '' COMMENT '邮编',
  `address` varchar(50) NOT NULL DEFAULT '' COMMENT '邮编',
  `province` varchar(20) default NULL COMMENT '省份',
  `city` varchar(20) default NULL COMMENT '城市',
  `area` varchar(20) default NULL COMMENT '区',

  `linkman1` varchar(50) NOT NULL DEFAULT '' COMMENT '联系人1',
  `relation1` varchar(50) NOT NULL DEFAULT '' COMMENT '关系1',
  `tel1` varchar(50) NOT NULL DEFAULT '' COMMENT '电话1',
  `phone1` varchar(50) NOT NULL DEFAULT '' COMMENT '手机1',
  `linkman2` varchar(50) NOT NULL DEFAULT '' COMMENT '联系人2',
  `relation2` varchar(50) NOT NULL DEFAULT '' COMMENT '关系2',
  `tel2` varchar(50) NOT NULL DEFAULT '' COMMENT '电话2',
  `phone2` varchar(50) NOT NULL DEFAULT '' COMMENT '手机2',
  `linkman3` varchar(50) NOT NULL DEFAULT '' COMMENT '联系人3',
  `relation3` varchar(50) NOT NULL DEFAULT '' COMMENT '关系3',
  `tel3` varchar(50) NOT NULL DEFAULT '' COMMENT '电话3',
  `phone3` varchar(50) NOT NULL DEFAULT '' COMMENT '手机3',
  `msn` varchar(50) NOT NULL DEFAULT '' COMMENT 'MSN',
  `qq` varchar(50) NOT NULL DEFAULT '' COMMENT 'QQ',
  `wangwang` varchar(50) NOT NULL DEFAULT '' COMMENT 'WANGWANG',

  `ability` varchar(250) default NULL COMMENT '个人能力',
  `interest` varchar(250) default NULL COMMENT '个人爱好',
  `others` varchar(250) default NULL COMMENT '其他说明',
  `experience` text default NULL COMMENT '工作经历',
  
  `addtime` varchar(50) NOT NULL DEFAULT '',
  `addip` varchar(50) NOT NULL DEFAULT '',
  `updatetime` varchar(50) NOT NULL DEFAULT '',
  `updateip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;
