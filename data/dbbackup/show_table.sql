DROP TABLE IF EXISTS `dw_account`;
CREATE TABLE `dw_account` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '用户名称',
  `total` decimal(11,2) default '0.00' COMMENT '资金总额',
  `use_money` decimal(11,2) default '0.00',
  `no_use_money` decimal(11,2) default '0.00',
  `collection` decimal(11,2) default '0.00',
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_account_bank`;
CREATE TABLE `dw_account_bank` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '用户ID',
  `account` varchar(100) default NULL COMMENT '账号',
  `bank` varchar(50) default NULL COMMENT '所属银行',
  `branch` varchar(100) default NULL COMMENT '支行',
  `province` int(5) default '0' COMMENT '省份',
  `city` int(5) default '0' COMMENT '城市',
  `area` int(5) default '0' COMMENT '区',
  `addtime` varchar(11) default NULL,
  `addip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk COMMENT='银行帐户';

DROP TABLE IF EXISTS `dw_account_cash`;
CREATE TABLE `dw_account_cash` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '用户ID',
  `status` int(2) default '0' COMMENT '状态',
  `account` varchar(50) default '0' COMMENT '账号',
  `bank` varchar(302) default NULL COMMENT '所属银行',
  `branch` varchar(100) default NULL COMMENT '支行',
  `total` int(20) default '0' COMMENT '总额',
  `credited` varchar(20) default '0' COMMENT '到账总额',
  `fee` varchar(20) default '0' COMMENT '手续费',
  `verify_userid` int(11) default NULL,
  `verify_time` int(11) default NULL,
  `verify_remark` varchar(250) default NULL,
  `addtime` varchar(11) default NULL,
  `addip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idv` (`user_id`,`status`,`verify_userid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=gbk COMMENT='提现记录';

DROP TABLE IF EXISTS `dw_account_log`;
CREATE TABLE `dw_account_log` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '用户ID',
  `type` varchar(100) default NULL COMMENT '类型',
  `total` decimal(11,2) default '0.00',
  `money` decimal(20,2) default NULL COMMENT '金额',
  `use_money` decimal(10,2) default '0.00' COMMENT '可用金额',
  `no_use_money` decimal(10,2) default '0.00' COMMENT '冻结金额',
  `collection` decimal(11,2) default '0.00',
  `to_user` int(11) default NULL COMMENT '交易对方',
  `remark` varchar(250) default '0' COMMENT '备注',
  `addtime` varchar(11) default NULL,
  `addip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1213 DEFAULT CHARSET=gbk COMMENT='资金记录';

DROP TABLE IF EXISTS `dw_account_payment`;
CREATE TABLE `dw_account_payment` (
  `id` mediumint(9) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `nid` varchar(100) default NULL,
  `status` int(2) default '0',
  `style` int(2) default NULL,
  `config` longtext,
  `fee` int(10) default '0',
  `fee_type` int(2) default NULL,
  `max_money` int(10) default NULL,
  `max_fee` int(10) default NULL,
  `description` longtext,
  `order` smallint(3) unsigned default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_account_recharge`;
CREATE TABLE `dw_account_recharge` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `trade_no` varchar(20) default NULL COMMENT '订单号',
  `user_id` int(11) default '0' COMMENT '用户ID',
  `status` int(2) default '0' COMMENT '状态',
  `money` decimal(10,2) default '0.00' COMMENT '金额',
  `payment` varchar(100) default NULL COMMENT '所属银行',
  `return` text,
  `type` varchar(10) default '0' COMMENT '类型',
  `remark` varchar(250) default '0' COMMENT '备注',
  `fee` varchar(10) default NULL,
  `verify_userid` int(11) default '0' COMMENT '审核人',
  `verify_time` varchar(11) default NULL COMMENT '审核时间',
  `verify_remark` varchar(250) default '' COMMENT '审核备注',
  `addtime` varchar(11) default NULL,
  `addip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idp` (`user_id`,`payment`),
  KEY `user_idv` (`user_id`,`payment`,`verify_userid`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=gbk COMMENT='充值记录';

DROP TABLE IF EXISTS `dw_ad`;
CREATE TABLE `dw_ad` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nid` varchar(20) NOT NULL,
  `order` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `litpic` varchar(100) NOT NULL,
  `timelimit` int(2) NOT NULL default '0',
  `firsttime` varchar(20) NOT NULL default '',
  `endtime` varchar(20) NOT NULL default '',
  `content` text NOT NULL,
  `endcontent` text NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dw_area`;
CREATE TABLE `dw_area` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `pid` int(11) default NULL,
  `domain` varchar(100) default NULL,
  `order` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `nid` (`nid`),
  KEY `nidp` (`nid`,`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=3577 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_article`;
CREATE TABLE `dw_article` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0',
  `name` varchar(255) default NULL,
  `littitle` varchar(200) default NULL,
  `status` int(2) default '0',
  `litpic` varchar(255) default NULL,
  `flag` varchar(50) default NULL,
  `source` varchar(50) default NULL,
  `publish` varchar(50) default NULL,
  `is_jump` varchar(1) default NULL,
  `author` varchar(50) default NULL,
  `jumpurl` varchar(255) default NULL,
  `summary` varchar(255) default NULL,
  `province` varchar(20) default NULL COMMENT '省份',
  `city` varchar(20) default NULL COMMENT '城市',
  `area` varchar(20) default NULL COMMENT '区',
  `content` text,
  `order` int(11) default '0',
  `hits` int(11) default '0',
  `comment` int(11) default '0',
  `is_comment` varchar(1) default NULL,
  `user_id` int(11) default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_article_fields`;
CREATE TABLE `dw_article_fields` (
  `aid` int(11) unsigned NOT NULL default '0',
  `files` varchar(255) default NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_attestation`;
CREATE TABLE `dw_attestation` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '用户名称',
  `type_id` int(11) default '0' COMMENT '上传的类型',
  `name` varchar(255) default NULL,
  `status` int(2) default '0' COMMENT '认证的状态',
  `litpic` varchar(255) default NULL COMMENT '认证的图片',
  `content` varchar(255) default NULL COMMENT '认证的简介',
  `jifen` int(20) default '0' COMMENT '认证的积分',
  `pic` text,
  `pic2` varchar(100) default NULL,
  `pic3` varchar(100) default NULL,
  `verify_time` varchar(32) default NULL COMMENT '审核时间',
  `verify_user` int(11) default NULL COMMENT '审核人',
  `verify_remark` varchar(250) default NULL COMMENT '审核备注',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=275 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_attestation_type`;
CREATE TABLE `dw_attestation_type` (
  `type_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL COMMENT '类型名称',
  `order` varchar(10) default NULL,
  `status` int(2) default NULL,
  `jifen` int(20) default '0' COMMENT '积分',
  `summary` varchar(200) default NULL COMMENT '简介',
  `remark` varchar(200) default NULL COMMENT '备注',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_bbs_credits`;
CREATE TABLE `dw_bbs_credits` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `creditscode` varchar(45) default NULL,
  `creditsname` varchar(45) default NULL,
  `postvar` int(11) default '0',
  `replyvar` int(11) default '0',
  `goodvar` int(11) default '0',
  `uploadvar` int(11) default '0',
  `downvar` int(11) default '0',
  `votevar` int(11) default '0',
  `isuse` tinyint(1) unsigned default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk ROW_FORMAT=FIXED;

DROP TABLE IF EXISTS `dw_bbs_dirtywords`;
CREATE TABLE `dw_bbs_dirtywords` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `word` varchar(45) default NULL,
  `replaceto` varchar(45) default NULL,
  `type` tinyint(3) unsigned default '0',
  `doaction` tinyint(1) unsigned default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk ROW_FORMAT=FIXED;

DROP TABLE IF EXISTS `dw_bbs_forums`;
CREATE TABLE `dw_bbs_forums` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned default NULL,
  `name` varchar(45) default NULL,
  `content` varchar(200) default NULL,
  `rules` varchar(1000) default NULL,
  `picurl` varchar(100) default NULL,
  `admins` varchar(255) default NULL,
  `today_num` int(10) unsigned default '0',
  `topics_num` int(10) unsigned default '0',
  `posts_num` int(10) unsigned default '0',
  `last_postname` varchar(45) default NULL,
  `last_postuser` varchar(45) default NULL,
  `last_postusername` varchar(30) default NULL,
  `last_posttime` int(10) unsigned default '0',
  `last_postid` int(10) unsigned default '0',
  `isverify` tinyint(1) unsigned default '0',
  `forumpass` varchar(45) default NULL,
  `forumusers` text,
  `forumgroups` varchar(1000) default NULL,
  `showtype` tinyint(1) unsigned default '0',
  `ishidden` tinyint(1) unsigned default '0',
  `order` int(10) unsigned default NULL,
  `keywords` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk ROW_FORMAT=FIXED;

DROP TABLE IF EXISTS `dw_bbs_posts`;
CREATE TABLE `dw_bbs_posts` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tid` int(10) unsigned default NULL,
  `istopic` tinyint(1) unsigned default '0',
  `fid` int(10) unsigned default '0',
  `user_id` int(10) unsigned default '0',
  `username` varchar(45) default NULL,
  `name` varchar(100) default NULL,
  `content` text,
  `edittime` int(10) unsigned default '0',
  `iscover` tinyint(1) unsigned default '0',
  `isverify` int(1) unsigned default '0',
  `verifydesc` varchar(255) default NULL,
  `addtime` varchar(11) default NULL,
  `addip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk ROW_FORMAT=DYNAMIC;

DROP TABLE IF EXISTS `dw_bbs_reward`;
CREATE TABLE `dw_bbs_reward` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tid` int(10) unsigned default '0',
  `userid` int(10) unsigned default '0',
  `bestid` int(10) unsigned default '0',
  `reward` int(10) unsigned default '0',
  `rewardcredits` varchar(8) default NULL,
  PRIMARY KEY  (`id`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_bbs_settings`;
CREATE TABLE `dw_bbs_settings` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  `nid` varchar(50) default NULL,
  `value` varchar(250) default NULL,
  `type` int(11) default '0',
  `style` int(2) default NULL,
  `status` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_bbs_topics`;
CREATE TABLE `dw_bbs_topics` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `fid` int(10) unsigned default '0',
  `user_id` int(10) unsigned default '0',
  `status` int(11) NOT NULL default '0',
  `username` varchar(45) default NULL,
  `name` varchar(45) default NULL,
  `content` text,
  `posttime` int(10) unsigned default '0',
  `edittime` int(10) unsigned default '0',
  `ordertime` int(10) unsigned default '0',
  `last_replytime` varchar(30) default NULL,
  `last_replyuser` int(11) default NULL,
  `last_replyusername` varchar(30) default NULL,
  `type` tinyint(1) unsigned default '0',
  `posts_num` int(10) unsigned default '0',
  `hits` int(10) unsigned default '0',
  `islock` tinyint(1) unsigned default '0',
  `isgood` tinyint(1) unsigned default '0',
  `istop` tinyint(1) unsigned default '0',
  `isalltop` tinyint(1) unsigned default '0',
  `stamp` tinyint(1) unsigned default '0',
  `isrecycle` tinyint(1) unsigned default '0',
  `credit` int(11) default NULL,
  `verifystate` tinyint(1) unsigned default '0',
  `verifydesc` varchar(255) default NULL,
  `isresolved` tinyint(1) unsigned default '0',
  `attachicon` varchar(45) default NULL,
  `highlight` varchar(20) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `topictype` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk ROW_FORMAT=DYNAMIC;

DROP TABLE IF EXISTS `dw_borrow`;
CREATE TABLE `dw_borrow` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '所属站点',
  `user_id` int(11) default '0' COMMENT '用户名称',
  `name` varchar(255) default NULL COMMENT '标题',
  `status` int(2) default '0' COMMENT '状态',
  `order` int(11) default '0' COMMENT '排序',
  `hits` int(11) default '0' COMMENT '点击次数',
  `litpic` varchar(255) default NULL COMMENT '缩略图',
  `flag` varchar(50) default NULL COMMENT '属性',
  `is_vouch` int(2) NOT NULL,
  `type` varchar(50) NOT NULL,
  `view_type` int(11) NOT NULL,
  `vouch_award` varchar(40) NOT NULL,
  `vouch_user` varchar(100) NOT NULL,
  `vouch_account` varchar(50) NOT NULL,
  `vouch_times` int(11) NOT NULL default '0',
  `source` varchar(50) default NULL COMMENT '来源',
  `publish` varchar(50) default NULL COMMENT '发布时间',
  `customer` varchar(11) default NULL COMMENT '客服',
  `number_id` varchar(50) default NULL,
  `verify_user` varchar(11) default NULL COMMENT '审核人',
  `verify_time` varchar(50) default NULL COMMENT '客服',
  `verify_remark` varchar(255) default NULL,
  `repayment_user` int(11) default '0',
  `forst_account` varchar(50) default '0',
  `repayment_account` varchar(50) default NULL,
  `monthly_repayment` varchar(50) default NULL COMMENT '每月还款额',
  `repayment_yesaccount` varchar(50) default '0',
  `repayment_yesinterest` int(11) NOT NULL,
  `repayment_time` varchar(50) default NULL,
  `repayment_remark` varchar(250) default NULL,
  `success_time` varchar(50) default NULL,
  `end_time` varchar(50) default NULL,
  `payment_account` varchar(50) default NULL,
  `each_time` varchar(50) default NULL,
  `use` varchar(50) default NULL COMMENT '用途',
  `time_limit` varchar(50) default NULL COMMENT '借款期限',
  `style` varchar(50) default NULL COMMENT '还款方式',
  `account` varchar(50) default NULL COMMENT '借贷总金额',
  `account_yes` varchar(10) default '0',
  `tender_times` varchar(11) default '0',
  `apr` decimal(18,2) default NULL COMMENT '年利率',
  `lowest_account` varchar(50) default NULL COMMENT '最低投标金额',
  `most_account` varchar(50) default NULL COMMENT '最多投标总额',
  `valid_time` varchar(50) default NULL COMMENT '有效时间',
  `award` varchar(50) default NULL COMMENT '投标奖励',
  `part_account` varchar(50) default NULL COMMENT '分摊奖励金额',
  `funds` varchar(50) default NULL COMMENT '比例奖励的比例',
  `is_false` varchar(50) default NULL COMMENT '标的失败时也同样奖励 ',
  `open_account` varchar(50) default NULL COMMENT '公开我的帐户资金情况',
  `open_borrow` varchar(50) default NULL COMMENT '公开我的借款资金情况',
  `open_tender` varchar(50) default NULL COMMENT '公开我的投标资金情况',
  `open_credit` varchar(50) default NULL COMMENT '公开我的信用额度情况',
  `content` text COMMENT '详细说明',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idst` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_amount`;
CREATE TABLE `dw_borrow_amount` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `account` int(11) NOT NULL,
  `newaccount` decimal(11,0) default '0',
  `oldaccount` int(11) NOT NULL,
  `status` int(11) default '0',
  `addtime` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `remark` text NOT NULL,
  `verify_remark` varchar(255) default NULL,
  `verify_time` varchar(10) default NULL,
  `verify_user` int(11) default NULL,
  `addip` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_amountlog`;
CREATE TABLE `dw_borrow_amountlog` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount_type` varchar(50) NOT NULL,
  `account` decimal(11,2) NOT NULL,
  `account_total` decimal(11,2) NOT NULL,
  `account_use` decimal(11,2) NOT NULL,
  `account_nouse` decimal(11,2) NOT NULL,
  `remark` varchar(250) character set gbk NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dw_borrow_amountlog1`;
CREATE TABLE `dw_borrow_amountlog1` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount_type` varchar(50) NOT NULL,
  `account` decimal(11,2) NOT NULL,
  `account_total` decimal(11,2) NOT NULL,
  `account_use` decimal(11,2) NOT NULL,
  `account_nouse` decimal(11,2) NOT NULL,
  `remark` varchar(250) character set gbk NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dw_borrow_collection`;
CREATE TABLE `dw_borrow_collection` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '所属站点',
  `status` int(2) default '0',
  `order` int(2) default NULL,
  `tender_id` int(11) default '0' COMMENT '借款id',
  `repay_time` varchar(50) default NULL COMMENT '估计还款时间',
  `repay_yestime` varchar(50) default NULL COMMENT '已经还款时间',
  `repay_account` varchar(50) default '0' COMMENT '预还金额',
  `repay_yesaccount` varchar(50) default '0' COMMENT '实还金额',
  `interest` varchar(50) default '0',
  `capital` varchar(50) default '0',
  `late_days` int(11) NOT NULL default '0',
  `late_interest` varchar(11) NOT NULL default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=355 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_line`;
CREATE TABLE `dw_borrow_line` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '所属站点',
  `user_id` int(11) default '0' COMMENT '用户名称',
  `name` varchar(255) default NULL COMMENT '标题',
  `status` int(2) default '0' COMMENT '状态',
  `order` int(11) default '0' COMMENT '排序',
  `hits` int(11) default '0' COMMENT '点击次数',
  `litpic` varchar(255) default NULL COMMENT '缩略图',
  `flag` varchar(50) default NULL COMMENT '属性',
  `type` int(2) default '0' COMMENT '借款类型',
  `borrow_use` int(10) default '0' COMMENT '贷款用途',
  `borrow_qixian` int(10) default '0' COMMENT '贷款期限',
  `province` int(10) default '0' COMMENT '省份',
  `city` int(10) default '0' COMMENT '城市',
  `area` int(10) default '0' COMMENT '地区',
  `account` varchar(11) default NULL COMMENT '贷款金额',
  `content` text COMMENT '详细说明',
  `pawn` varchar(2) default NULL COMMENT '有无抵押',
  `tel` varchar(15) default NULL COMMENT '电话',
  `sex` varchar(2) default NULL COMMENT '性别',
  `xing` varchar(11) default NULL COMMENT '姓',
  `verify_user` int(11) default NULL COMMENT '审核人',
  `verify_time` varchar(50) default NULL COMMENT '审核时间',
  `verify_remark` varchar(255) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_repayment`;
CREATE TABLE `dw_borrow_repayment` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '所属站点',
  `status` int(2) default '0',
  `webstatus` int(2) NOT NULL default '0' COMMENT '网站代还',
  `order` int(2) default NULL,
  `borrow_id` int(11) default '0' COMMENT '借款id',
  `repayment_time` varchar(50) default NULL COMMENT '估计还款时间',
  `repayment_yestime` varchar(50) default NULL COMMENT '已经还款时间',
  `repayment_account` varchar(50) default '0' COMMENT '预还金额',
  `repayment_yesaccount` varchar(50) default '0' COMMENT '实还金额',
  `late_days` int(11) NOT NULL default '0',
  `late_interest` varchar(11) NOT NULL default '0',
  `interest` varchar(50) default '0',
  `capital` varchar(50) default '0',
  `forfeit` varchar(50) default '0' COMMENT '滞纳金',
  `reminder_fee` varchar(50) default '0' COMMENT '崔收费',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_idb` (`borrow_id`),
  KEY `user_idubs` (`borrow_id`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_tender`;
CREATE TABLE `dw_borrow_tender` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '所属站点',
  `user_id` int(11) default '0' COMMENT '用户名称',
  `status` int(2) default '0' COMMENT '状态',
  `borrow_id` int(11) default '0',
  `money` varchar(50) default NULL,
  `account` varchar(10) default '0',
  `repayment_account` varchar(50) default '0' COMMENT '总额',
  `interest` varchar(11) NOT NULL default '0',
  `repayment_yesaccount` varchar(50) default '0' COMMENT '已还总额',
  `wait_account` varchar(11) default '0' COMMENT '待还总额',
  `wait_interest` varchar(11) default '0' COMMENT '待还利息',
  `repayment_yesinterest` varchar(50) default '0' COMMENT '已还利息',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_idb` (`borrow_id`),
  KEY `user_idub` (`user_id`,`borrow_id`),
  KEY `user_idubs` (`user_id`,`borrow_id`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=218 DEFAULT CHARSET=gbk COMMENT='招标';

DROP TABLE IF EXISTS `dw_borrow_union`;
CREATE TABLE `dw_borrow_union` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '所属站点',
  `user_id` int(11) default '0' COMMENT '用户名称',
  `name` varchar(255) default NULL COMMENT '标题',
  `status` int(2) default '0' COMMENT '状态',
  `order` int(11) default '0' COMMENT '排序',
  `hits` int(11) default '0' COMMENT '点击次数',
  `litpic` varchar(255) default NULL COMMENT '缩略图',
  `range` varchar(255) default NULL COMMENT '经营范围',
  `content` text COMMENT '公司简介',
  `verify_remark` varchar(255) default NULL,
  `verify_time` varchar(10) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_vouch`;
CREATE TABLE `dw_borrow_vouch` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `status` int(2) NOT NULL default '0',
  `account` varchar(20) NOT NULL,
  `vouch_account` decimal(11,2) NOT NULL,
  `content` text character set gbk NOT NULL,
  `award_fund` varchar(10) character set gbk NOT NULL,
  `award_account` decimal(11,2) NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dw_borrow_vouch_collection`;
CREATE TABLE `dw_borrow_vouch_collection` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `status` int(2) default '0',
  `user_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `order` int(2) default NULL,
  `vouch_id` int(11) default '0' COMMENT '借款id',
  `repay_time` varchar(50) default NULL COMMENT '估计还款时间',
  `repay_yestime` varchar(50) default NULL COMMENT '已经还款时间',
  `repay_account` varchar(50) default '0' COMMENT '预还金额',
  `repay_yesaccount` varchar(50) default '0' COMMENT '实还金额',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_vouch_repayment`;
CREATE TABLE `dw_borrow_vouch_repayment` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `status` int(2) default '0',
  `user_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `order` int(2) default NULL,
  `repay_time` varchar(50) default NULL COMMENT '估计还款时间',
  `repay_yestime` varchar(50) default NULL COMMENT '已经还款时间',
  `repay_account` varchar(50) default '0' COMMENT '预还金额',
  `repay_yesaccount` varchar(50) default '0' COMMENT '实还金额',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_cache`;
CREATE TABLE `dw_cache` (
  `id` int(11) NOT NULL auto_increment,
  `date` varchar(20) default NULL,
  `user_num` int(11) default NULL,
  `user_online_num` int(11) default '0',
  `user_online_time` varchar(30) default NULL,
  `last_user` varchar(20) default NULL,
  `bbs_first_visit` int(20) default '0',
  `bbs_topics_num` int(11) default NULL,
  `bbs_posts_num` int(11) default NULL,
  `bbs_today_topics` int(11) default NULL,
  `bbs_today_posts` int(11) default NULL,
  `bbs_yesterday_topics` int(11) default NULL,
  `bbs_yesterday_posts` int(11) default NULL,
  `bbs_most_topics` int(11) default NULL,
  `bbs_most_posts` int(11) default NULL,
  `borrow_account` varchar(11) default '0',
  `borrow_success` varchar(20) default '0',
  `borrow_num` int(10) default '0',
  `borrow_successnum` varchar(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_cms_article`;
CREATE TABLE `dw_cms_article` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0',
  `title` varchar(255) default NULL,
  `littitle` varchar(250) default NULL,
  `status` int(2) default '0',
  `litpic` varchar(255) default NULL,
  `flag` varchar(255) default NULL,
  `source` varchar(50) default NULL,
  `is_jump` int(1) default NULL,
  `author` varchar(255) default NULL,
  `jumpurl` varchar(255) default NULL,
  `summary` varchar(255) default NULL,
  `content` text,
  `order` int(11) default '0',
  `hits` int(11) default '0',
  `comment` int(11) default '0',
  `is_comment` int(1) default NULL,
  `user_id` int(11) default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_cms_article_fields`;
CREATE TABLE `dw_cms_article_fields` (
  `aid` int(11) NOT NULL auto_increment,
  `article_id` int(11) default NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_comment`;
CREATE TABLE `dw_comment` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default '0',
  `user_id` int(11) default NULL,
  `module_code` varchar(50) default NULL,
  `article_id` int(11) default NULL,
  `comment` text,
  `flag` varchar(30) default NULL COMMENT '定义属性',
  `order` varchar(10) default NULL COMMENT '排序',
  `status` int(2) default NULL COMMENT '状态',
  `addtime` varchar(30) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_credit`;
CREATE TABLE `dw_credit` (
  `user_id` int(11) NOT NULL default '0' COMMENT '会员ID',
  `value` int(11) default '0' COMMENT '积分数值',
  `op_user` int(11) default NULL COMMENT '操作者',
  `addtime` int(11) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加IP',
  `updatetime` varchar(11) default NULL COMMENT '最后更新时间',
  `updateip` varchar(30) default NULL COMMENT '最后更新ID',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='会员积分';

DROP TABLE IF EXISTS `dw_credit_log`;
CREATE TABLE `dw_credit_log` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL COMMENT '会员ID',
  `type_id` int(11) default '0' COMMENT '积分类型ID',
  `op` tinyint(1) default '1' COMMENT '变动类型,1:增加,2:减少',
  `value` int(11) default '0' COMMENT '变动积分数值',
  `remark` varchar(256) default NULL COMMENT '备注',
  `op_user` int(11) default NULL COMMENT '操作者',
  `addtime` int(11) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加IP',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=395 DEFAULT CHARSET=gbk COMMENT='会员积分日志';

DROP TABLE IF EXISTS `dw_credit_rank`;
CREATE TABLE `dw_credit_rank` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL COMMENT '等级名称',
  `rank` int(11) default '0' COMMENT '等级',
  `point1` int(11) default '0' COMMENT '开始分值',
  `point2` int(11) default '0' COMMENT '最后分值',
  `pic` varchar(100) default NULL COMMENT '图片',
  `remark` varchar(256) default NULL COMMENT '备注',
  `addtime` int(11) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加IP',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=gbk COMMENT='会员积分日志';

DROP TABLE IF EXISTS `dw_credit_type`;
CREATE TABLE `dw_credit_type` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL COMMENT '积分名称',
  `nid` varchar(50) default NULL COMMENT '积分代码',
  `value` int(11) default '0' COMMENT '积分数值',
  `cycle` tinyint(1) default '2' COMMENT '积分周期，1:一次,2:每天,3:间隔分钟,4:不限',
  `award_times` tinyint(4) default NULL COMMENT '奖励次数,0:不限',
  `interval` int(11) default '1' COMMENT '时间间隔，单位分钟',
  `remark` varchar(256) default NULL COMMENT '备注',
  `op_user` int(11) default NULL COMMENT '操作者',
  `addtime` int(11) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加IP',
  `updatetime` int(11) default NULL COMMENT '最后更新时间',
  `updateip` varchar(30) default NULL COMMENT '最后更新ID',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idx_ct_nid` (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk COMMENT='积分类型';

DROP TABLE IF EXISTS `dw_editor`;
CREATE TABLE `dw_editor` (
  `editor_id` int(11) NOT NULL auto_increment,
  `code` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `description` varchar(255) default NULL,
  `version` varchar(20) default NULL,
  `author` varchar(20) default NULL,
  `date` varchar(20) default NULL,
  `api` text,
  PRIMARY KEY  (`editor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_fee`;
CREATE TABLE `dw_fee` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) default NULL COMMENT '名称',
  `nid` int(11) default NULL COMMENT '栏目ID',
  `value` varchar(30) default NULL COMMENT '值',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_fields`;
CREATE TABLE `dw_fields` (
  `fields_id` int(11) unsigned NOT NULL auto_increment,
  `code` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `type` varchar(50) default NULL,
  `size` varchar(50) default NULL,
  `input` varchar(50) default NULL,
  `description` varchar(255) default NULL,
  `default` varchar(255) default NULL,
  `select` varchar(100) default NULL,
  `order` int(11) default '0',
  PRIMARY KEY  (`fields_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_flag`;
CREATE TABLE `dw_flag` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `order` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_friends`;
CREATE TABLE `dw_friends` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '用户',
  `friends_userid` int(11) default '0' COMMENT '朋友',
  `friends_username` varchar(50) default NULL,
  `status` int(2) default '0' COMMENT '状态',
  `type` int(2) default '0' COMMENT '类型',
  `content` varchar(255) default NULL COMMENT '内容',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk COMMENT='好友';

DROP TABLE IF EXISTS `dw_friends_request`;
CREATE TABLE `dw_friends_request` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '用户',
  `friends_userid` int(11) default '0' COMMENT '朋友',
  `status` int(2) default '0' COMMENT '状态',
  `type` int(2) default '0',
  `content` varchar(250) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk COMMENT='好友记录';

DROP TABLE IF EXISTS `dw_help`;
CREATE TABLE `dw_help` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `type_id` int(11) default '0',
  `name` varchar(255) default NULL,
  `smallname` varchar(200) default NULL,
  `status` int(2) default '0',
  `litpic` varchar(255) default NULL,
  `flag` varchar(50) default NULL,
  `publish` varchar(50) default NULL,
  `is_jump` int(1) default NULL,
  `author` varchar(50) default NULL,
  `source` varchar(50) default NULL,
  `summary` varchar(255) default NULL,
  `province` varchar(20) default NULL COMMENT '省份',
  `city` varchar(20) default NULL COMMENT '城市',
  `area` varchar(20) default NULL COMMENT '区',
  `jumpurl` varchar(255) default NULL,
  `content` text,
  `order` int(11) default '0',
  `hits` int(11) default '0',
  `comment` int(11) default '0',
  `is_comment` int(1) default NULL,
  `user_id` int(11) default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_help_type`;
CREATE TABLE `dw_help_type` (
  `type_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `nid` varchar(50) default NULL,
  `pid` int(2) default '0',
  `order` int(11) default NULL,
  `status` int(11) default NULL,
  `content` text,
  `list_name` varchar(200) default NULL,
  `content_name` varchar(200) default NULL,
  `index_tpl` varchar(250) default NULL,
  `list_tpl` varchar(250) default NULL,
  `content_tpl` varchar(250) default NULL,
  `title` varchar(250) default NULL,
  `keywords` varchar(250) default NULL,
  `description` varchar(250) default NULL,
  `user_id` int(11) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_home`;
CREATE TABLE `dw_home` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '所属站点',
  `user_id` int(11) default '0' COMMENT '用户名称',
  `name` varchar(255) default NULL COMMENT '标题',
  `status` int(2) default '0' COMMENT '状态',
  `order` int(11) default '0' COMMENT '排序',
  `hits` int(11) default '0' COMMENT '点击次数',
  `litpic` varchar(255) default NULL COMMENT '缩略图',
  `flag` varchar(50) default NULL COMMENT '属性',
  `source` varchar(50) default NULL COMMENT '来源',
  `publish` varchar(50) default NULL COMMENT '发布时间',
  `xiaoqu` varchar(50) default NULL COMMENT '小区',
  `shi` varchar(10) default NULL COMMENT '室',
  `ting` varchar(10) default NULL COMMENT '厅',
  `wei` varchar(10) default NULL COMMENT '卫',
  `louceng` varchar(10) default NULL COMMENT '楼层',
  `zonglouceng` varchar(10) default NULL COMMENT '总楼层',
  `loupan` varchar(10) default NULL COMMENT '楼盘',
  `zhucegongsi` varchar(10) default NULL COMMENT '是否注册公司',
  `mianji` varchar(10) default NULL COMMENT '面积',
  `mianji1` varchar(10) default NULL COMMENT '期望面积1',
  `mianji2` varchar(10) default NULL COMMENT '期望面积2',
  `fangshi` varchar(10) default NULL COMMENT '出租方式',
  `leixing` varchar(10) default NULL COMMENT '类型',
  `zhuangxiu` varchar(10) default NULL COMMENT '装修',
  `chaoxiang` varchar(10) default NULL COMMENT '朝向',
  `zujin` varchar(10) default NULL COMMENT '租金',
  `jiage` varchar(10) default NULL COMMENT '售价',
  `jiage1` varchar(10) default NULL COMMENT '期望售价1',
  `jiage2` varchar(10) default NULL COMMENT '期望售价2',
  `jiageleixing` varchar(10) default NULL COMMENT '价格类型',
  `lishijingying` varchar(10) default NULL COMMENT '历史经营',
  `jibenqingkuang` varchar(10) default NULL COMMENT '基本情况',
  `diduan` varchar(10) default NULL COMMENT '地段',
  `diduan1` varchar(10) default NULL COMMENT '地段1',
  `diduan2` varchar(10) default NULL COMMENT '地段2',
  `fukuan` varchar(10) default NULL COMMENT '付款方式',
  `linjin` varchar(10) default NULL COMMENT '临近',
  `peizhi` varchar(50) default NULL COMMENT '配置',
  `tupian` varchar(250) default NULL COMMENT '图片',
  `xianxingbie` varchar(250) default NULL COMMENT '限制性别',
  `chuzufangjian` varchar(250) default NULL COMMENT '出租房间',
  `chuzuleixing` varchar(250) default NULL COMMENT '出租类型',
  `content` varchar(255) default NULL COMMENT '补充说明',
  `lianxiren` varchar(50) default NULL COMMENT '联系人',
  `dianhua` varchar(50) default NULL COMMENT '电话',
  `qq` varchar(50) default NULL COMMENT 'qq',
  `province` varchar(20) default NULL COMMENT '省份',
  `city` varchar(20) default NULL COMMENT '城市',
  `area` varchar(20) default NULL COMMENT '区',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  `updatetime` varchar(50) default NULL,
  `updateip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_integral`;
CREATE TABLE `dw_integral` (
  `id` int(11) NOT NULL auto_increment,
  `site_id` int(11) default NULL,
  `name` varchar(100) default NULL COMMENT '物品名称',
  `need` double default NULL COMMENT '所需积分',
  `number` int(11) default NULL COMMENT '数量',
  `ex_number` int(11) default '0' COMMENT '已兑换数量',
  `province` int(11) default NULL COMMENT '可兑换省份',
  `city` int(11) default NULL COMMENT '可兑换城市',
  `area` int(11) default NULL COMMENT '区',
  `litpic` varchar(100) default NULL COMMENT '图片',
  `content` text COMMENT '详细信息',
  `hits` int(11) default '0' COMMENT '点击次数',
  `top` int(11) default '0' COMMENT '顶次数',
  `flag` varchar(30) default NULL COMMENT '定义属性',
  `order` varchar(10) default NULL COMMENT '排序',
  `status` int(2) default NULL COMMENT '状态',
  `addtime` varchar(30) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_integral_convert`;
CREATE TABLE `dw_integral_convert` (
  `id` int(11) NOT NULL auto_increment,
  `integral_id` int(11) default NULL COMMENT '兑换物品ID',
  `user_id` int(11) default NULL COMMENT '会员ID',
  `number` int(11) default NULL COMMENT '数量',
  `need` int(11) default NULL COMMENT '所需要的积分',
  `integral` int(11) default NULL COMMENT '总积分',
  `status` int(2) default '0' COMMENT '状态',
  `remark` varchar(200) default '' COMMENT '备注',
  `addtime` varchar(30) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_invest`;
CREATE TABLE `dw_invest` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '所属站点',
  `user_id` int(11) default '0' COMMENT '用户名称',
  `name` varchar(255) default NULL COMMENT '标题',
  `status` int(2) default '0' COMMENT '状态',
  `order` int(11) default '0' COMMENT '排序',
  `hits` int(11) default '0' COMMENT '点击次数',
  `litpic` varchar(255) default NULL COMMENT '缩略图',
  `flag` varchar(50) default NULL COMMENT '属性',
  `source` varchar(50) default NULL COMMENT '来源',
  `publish` varchar(50) default NULL COMMENT '发布时间',
  `customer` int(11) default NULL COMMENT '客服',
  `verify_userid` int(11) default NULL COMMENT '审核人',
  `verify_time` varchar(50) default NULL COMMENT '审核时间',
  `use` varchar(50) default NULL COMMENT '用途',
  `time_limit` varchar(50) default NULL COMMENT '借款期限',
  `style` varchar(50) default NULL COMMENT '还款方式',
  `account` varchar(50) default NULL COMMENT '借贷总金额',
  `apr` varchar(50) default NULL COMMENT '年利率',
  `lowest_account` varchar(50) default NULL COMMENT '最低投标金额',
  `most_account` varchar(50) default NULL COMMENT '最多投标总额',
  `valid_time` varchar(50) default NULL COMMENT '有效时间',
  `award` varchar(50) default NULL COMMENT '投标奖励',
  `part_account` varchar(50) default NULL COMMENT '分摊奖励金额',
  `funds` varchar(50) default NULL COMMENT '比例奖励的比例',
  `is_false` varchar(50) default NULL COMMENT '标的失败时也同样奖励 ',
  `open_account` varchar(50) default NULL COMMENT '公开我的帐户资金情况',
  `open_borrow` varchar(50) default NULL COMMENT '公开我的借款资金情况',
  `open_tender` varchar(50) default NULL COMMENT '公开我的投标资金情况',
  `open_credit` varchar(50) default NULL COMMENT '公开我的信用额度情况',
  `content` text COMMENT '详细说明',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_invite`;
CREATE TABLE `dw_invite` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `site_id` smallint(5) unsigned default '0',
  `status` smallint(2) unsigned default '0',
  `order` smallint(6) default '0',
  `flag` char(30) default '0',
  `type_id` smallint(5) unsigned default '0',
  `name` char(250) default NULL,
  `province` char(10) default NULL,
  `city` char(10) default NULL,
  `area` char(10) default NULL,
  `num` char(50) default NULL,
  `description` text,
  `demand` text,
  `hits` int(10) default '0',
  `addtime` int(10) default '0',
  `addip` char(20) default NULL,
  `uptime` int(10) default '0',
  `upip` char(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_invite_type`;
CREATE TABLE `dw_invite_type` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `typename` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_limitapp`;
CREATE TABLE `dw_limitapp` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '用户名称',
  `status` int(2) default '0' COMMENT '状态',
  `order` int(11) default '0' COMMENT '排序',
  `account` varchar(255) default NULL COMMENT '要增加的额度',
  `recommend_userid` varchar(255) default NULL COMMENT '推荐人',
  `content` text COMMENT '详细说明',
  `other_content` text COMMENT '其他地方详细说明',
  `verify_userid` int(11) default NULL COMMENT '审核人',
  `verify_time` varchar(50) default NULL COMMENT '审核时间',
  `verify_remark` varchar(50) default NULL COMMENT '备注',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_linkage`;
CREATE TABLE `dw_linkage` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `status` smallint(2) unsigned default '0' COMMENT '状态',
  `order` smallint(6) default '0' COMMENT '排序',
  `type_id` smallint(5) unsigned default '0' COMMENT '类型',
  `pid` char(30) default NULL COMMENT '所属联动',
  `name` varchar(250) default NULL COMMENT '联动名称',
  `value` varchar(250) default NULL COMMENT '联动的值',
  `addtime` int(10) default '0',
  `addip` char(20) default NULL,
  PRIMARY KEY  (`id`),
  KEY `type_id` (`type_id`),
  KEY `type_ida` (`type_id`,`value`)
) ENGINE=MyISAM AUTO_INCREMENT=488 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_linkage_type`;
CREATE TABLE `dw_linkage_type` (
  `id` int(11) NOT NULL auto_increment,
  `order` smallint(6) default '0',
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `addtime` int(10) default '0',
  `addip` char(20) default NULL,
  PRIMARY KEY  (`id`),
  KEY `nid` (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_links`;
CREATE TABLE `dw_links` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `site_id` smallint(5) unsigned NOT NULL default '0',
  `status` smallint(2) unsigned NOT NULL default '0',
  `order` smallint(6) NOT NULL default '0',
  `flag` smallint(6) default NULL,
  `type_id` smallint(5) unsigned NOT NULL default '0',
  `url` char(60) NOT NULL default '',
  `webname` char(30) NOT NULL default '',
  `summary` char(200) NOT NULL default '',
  `linkman` char(50) NOT NULL default '',
  `email` char(50) NOT NULL default '',
  `logo` char(100) NOT NULL default '',
  `logoimg` char(100) NOT NULL default '',
  `province` char(10) NOT NULL default '',
  `city` char(10) NOT NULL default '',
  `area` char(10) NOT NULL default '',
  `hits` int(10) NOT NULL default '0',
  `addtime` int(10) NOT NULL default '0',
  `addip` char(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_links_type`;
CREATE TABLE `dw_links_type` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `typename` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_liuyan`;
CREATE TABLE `dw_liuyan` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `name` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  `company` varchar(100) default NULL,
  `tel` varchar(100) default NULL,
  `fax` varchar(100) default NULL,
  `address` varchar(100) default NULL,
  `type` varchar(50) default NULL,
  `status` int(2) default '0',
  `litpic` varchar(255) default NULL,
  `content` text,
  `user_id` int(11) default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  `reply` text,
  `reply_id` int(11) default '0',
  `replytime` varchar(50) default NULL,
  `replyip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_liuyan_set`;
CREATE TABLE `dw_liuyan_set` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `nid` varchar(100) default NULL,
  `value` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_message`;
CREATE TABLE `dw_message` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `sent_user` int(11) default '0' COMMENT '发送用户',
  `receive_user` int(11) default '0' COMMENT '接收用户',
  `name` varchar(255) default NULL COMMENT '标题',
  `status` int(2) default '0' COMMENT '状态',
  `type` varchar(50) default '0' COMMENT '类型',
  `sented` varchar(2) default NULL,
  `deltype` int(2) default '0',
  `content` text COMMENT '内容',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=646 DEFAULT CHARSET=gbk COMMENT='短消息';

DROP TABLE IF EXISTS `dw_module`;
CREATE TABLE `dw_module` (
  `module_id` int(11) NOT NULL auto_increment,
  `code` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `description` varchar(255) default NULL,
  `default_field` varchar(200) default NULL,
  `content` text,
  `version` varchar(10) default NULL,
  `author` varchar(50) default NULL,
  `date` varchar(20) default NULL,
  `status` int(1) default NULL,
  `type` varchar(50) default NULL,
  `order` int(11) default NULL,
  `fields` int(2) default NULL,
  `purview` text,
  `remark` text,
  `issent` int(2) default NULL,
  `title_name` varchar(100) default NULL,
  `onlyone` int(2) default NULL,
  `index_tpl` varchar(50) default NULL,
  `list_tpl` varchar(50) default NULL,
  `content_tpl` varchar(50) default NULL,
  `search_tpl` varchar(100) default NULL,
  `article_status` int(2) default NULL,
  `visit_type` int(2) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`module_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_online`;
CREATE TABLE `dw_online` (
  `user_id` int(10) unsigned default '0',
  `username` varchar(45) default NULL,
  `type_id` varchar(10) default NULL,
  `tid` int(10) unsigned default '0',
  `fid` int(10) unsigned default '0',
  `atpage` varchar(30) default NULL,
  `ip` varchar(16) default NULL,
  `activetime` int(10) unsigned default '0',
  KEY `userid` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

DROP TABLE IF EXISTS `dw_payment`;
CREATE TABLE `dw_payment` (
  `id` mediumint(11) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `nid` varchar(100) default NULL,
  `status` smallint(3) unsigned default '0',
  `style` int(2) default NULL,
  `config` longtext,
  `fee_type` int(2) default NULL,
  `max_money` int(10) default NULL,
  `max_fee` int(10) default NULL,
  `description` longtext,
  `order` smallint(3) unsigned default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_payment_type`;
CREATE TABLE `dw_payment_type` (
  `id` mediumint(9) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `nid` varchar(100) default NULL,
  `type` varchar(30) default NULL,
  `description` longtext,
  `order` smallint(3) unsigned default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_remind`;
CREATE TABLE `dw_remind` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `status` smallint(2) unsigned default '0' COMMENT '状态',
  `order` smallint(6) default '0' COMMENT '排序',
  `type_id` smallint(5) unsigned default '0' COMMENT '类型',
  `message` smallint(2) unsigned default '0' COMMENT '短消息',
  `email` smallint(2) unsigned default '0' COMMENT '邮箱',
  `phone` smallint(2) unsigned default '0' COMMENT '手机',
  `addtime` int(10) default '0',
  `addip` char(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_remind_type`;
CREATE TABLE `dw_remind_type` (
  `id` int(11) NOT NULL auto_increment,
  `order` smallint(6) default '0',
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `addtime` int(10) default '0',
  `addip` char(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_remind_user`;
CREATE TABLE `dw_remind_user` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `user_id` smallint(11) unsigned default NULL,
  `remind_id` smallint(5) unsigned default NULL,
  `message` smallint(2) unsigned default '0' COMMENT '短消息',
  `email` smallint(2) unsigned default '0' COMMENT '邮箱',
  `phone` smallint(2) unsigned default '0' COMMENT '手机',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_scrollpic`;
CREATE TABLE `dw_scrollpic` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `site_id` smallint(5) unsigned NOT NULL default '0',
  `status` smallint(2) unsigned NOT NULL default '0',
  `order` smallint(6) NOT NULL default '0',
  `flag` smallint(6) default NULL,
  `type_id` smallint(5) unsigned NOT NULL default '0',
  `url` char(60) NOT NULL default '',
  `name` char(100) NOT NULL default '',
  `pic` char(200) NOT NULL default '',
  `summary` char(250) NOT NULL default '',
  `hits` int(10) NOT NULL default '0',
  `addtime` int(10) NOT NULL default '0',
  `addip` char(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_scrollpic_type`;
CREATE TABLE `dw_scrollpic_type` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `typename` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_site`;
CREATE TABLE `dw_site` (
  `site_id` int(11) unsigned NOT NULL auto_increment,
  `code` varchar(50) default NULL,
  `name` varchar(255) default NULL,
  `nid` varchar(50) default NULL,
  `pid` int(2) default '0',
  `rank` varchar(50) default NULL,
  `url` varchar(255) default NULL,
  `aurl` varchar(255) default NULL,
  `isurl` varchar(2) default NULL,
  `order` int(11) default NULL,
  `status` int(11) default NULL,
  `style` varchar(2) default NULL,
  `litpic` varchar(50) default NULL,
  `content` text,
  `list_name` varchar(200) default NULL,
  `content_name` varchar(200) default NULL,
  `sitedir` varchar(200) default NULL,
  `visit_type` varchar(200) default NULL,
  `index_tpl` varchar(250) default NULL,
  `list_tpl` varchar(250) default NULL,
  `content_tpl` varchar(250) default NULL,
  `title` varchar(250) default NULL,
  `keywords` varchar(250) default NULL,
  `description` varchar(250) default NULL,
  `user_id` varchar(11) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`site_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_system`;
CREATE TABLE `dw_system` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  `nid` varchar(50) default NULL,
  `value` varchar(250) default NULL,
  `type` int(11) default '0',
  `style` int(2) default NULL,
  `status` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_upfiles`;
CREATE TABLE `dw_upfiles` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) default NULL COMMENT '名称',
  `code` varchar(50) default NULL COMMENT '模块',
  `aid` varchar(50) default NULL COMMENT '所属模块id',
  `status` int(2) default '0' COMMENT '状态',
  `user_id` int(11) NOT NULL,
  `filetype` varchar(50) default NULL COMMENT '文件类型',
  `filename` varchar(100) default NULL COMMENT '文件名称',
  `filesize` int(10) default '0' COMMENT '文件大小',
  `fileurl` varchar(200) default NULL COMMENT '文件地址',
  `if_cover` int(2) default '0' COMMENT '是否封面',
  `order` int(10) default '0' COMMENT '排序',
  `hits` int(11) default '0' COMMENT '点击次数',
  `addtime` varchar(30) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加ip',
  `updatetime` varchar(30) default NULL COMMENT '修改时间',
  `updateip` varchar(30) default NULL COMMENT '修改ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=345 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user`;
CREATE TABLE `dw_user` (
  `user_id` int(10) unsigned NOT NULL auto_increment,
  `type_id` int(11) default NULL,
  `order` int(11) default NULL,
  `purview` varchar(100) default NULL,
  `username` varchar(30) default NULL,
  `password` varchar(50) default NULL,
  `paypassword` varchar(50) default NULL,
  `islock` int(2) NOT NULL default '0',
  `invite_userid` varchar(11) default NULL COMMENT '邀请好友',
  `invite_money` varchar(10) default '0' COMMENT '邀请注册提成',
  `real_status` varchar(2) default NULL,
  `card_type` varchar(10) default NULL,
  `card_id` varchar(50) default NULL,
  `card_pic1` varchar(150) default NULL,
  `card_pic2` varchar(150) default NULL,
  `nation` varchar(10) default NULL,
  `realname` varchar(20) default '',
  `integral` varchar(10) default NULL,
  `status` int(2) default '0',
  `avatar_status` int(2) default '0',
  `email_status` varchar(50) default NULL,
  `phone_status` varchar(50) default '0',
  `video_status` int(2) default '0' COMMENT '视频认证',
  `scene_status` int(2) default '0' COMMENT '现场认证',
  `email` varchar(30) default NULL,
  `sex` varchar(10) default NULL,
  `litpic` varchar(250) default NULL,
  `tel` varchar(50) default NULL,
  `phone` varchar(50) default NULL,
  `qq` varchar(50) default NULL,
  `wangwang` varchar(100) default NULL,
  `question` varchar(10) default NULL,
  `answer` varchar(100) default NULL,
  `birthday` varchar(11) default NULL,
  `province` varchar(20) default NULL,
  `city` varchar(20) default NULL,
  `area` varchar(20) default NULL,
  `address` varchar(200) default NULL,
  `remind` text COMMENT '提醒设置',
  `privacy` text COMMENT '隐私设置',
  `logintime` int(11) default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  `uptime` varchar(50) default NULL,
  `upip` varchar(50) default NULL,
  `lasttime` varchar(50) default NULL,
  `lastip` varchar(20) default NULL,
  PRIMARY KEY  (`user_id`),
  FULLTEXT KEY `purview` (`purview`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_amount`;
CREATE TABLE `dw_user_amount` (
  `id` int(11) unsigned NOT NULL auto_increment COMMENT '调整恢复额度',
  `user_id` int(11) NOT NULL,
  `credit` decimal(11,2) NOT NULL default '0.00',
  `credit_use` decimal(11,2) NOT NULL default '0.00',
  `credit_nouse` decimal(11,2) NOT NULL default '0.00',
  `borrow_vouch` decimal(11,2) NOT NULL default '0.00',
  `borrow_vouch_use` decimal(11,2) NOT NULL default '0.00',
  `borrow_vouch_nouse` decimal(11,2) NOT NULL default '0.00',
  `tender_vouch` decimal(11,2) NOT NULL default '0.00',
  `tender_vouch_use` decimal(11,2) NOT NULL default '0.00',
  `tender_vouch_nouse` decimal(11,2) NOT NULL default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_amountapply`;
CREATE TABLE `dw_user_amountapply` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `account` decimal(11,2) NOT NULL default '0.00',
  `account_new` decimal(11,2) default '0.00',
  `account_old` decimal(11,2) NOT NULL default '0.00',
  `status` int(11) default '0',
  `addtime` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `remark` text NOT NULL,
  `verify_remark` varchar(255) default NULL,
  `verify_time` varchar(10) default NULL,
  `verify_user` int(11) default NULL,
  `addip` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_amountlog`;
CREATE TABLE `dw_user_amountlog` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount_type` varchar(50) NOT NULL,
  `account` decimal(11,2) NOT NULL,
  `account_all` decimal(11,2) NOT NULL,
  `account_use` decimal(11,2) NOT NULL,
  `account_nouse` decimal(11,2) NOT NULL,
  `remark` text NOT NULL,
  `addtime` varchar(50) NOT NULL,
  `addip` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_backup`;
CREATE TABLE `dw_user_backup` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '用户名称',
  `user_tel` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_qq` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_nation` varchar(50) NOT NULL,
  `user_realname` varchar(50) NOT NULL,
  `name` varchar(255) default NULL COMMENT '标题',
  `source` varchar(50) default NULL COMMENT '来源',
  `publish` varchar(50) default NULL COMMENT '发布时间',
  `marry` varchar(50) default NULL COMMENT '婚姻',
  `child` varchar(10) default NULL COMMENT '子女',
  `education` varchar(10) default NULL COMMENT '学历',
  `income` varchar(10) default NULL COMMENT '收入',
  `shebao` varchar(10) default NULL COMMENT '社保',
  `shebaoid` varchar(50) default NULL COMMENT '社保号',
  `housing` varchar(10) default NULL COMMENT '住房条件',
  `car` varchar(10) default NULL COMMENT '车',
  `late` varchar(10) default NULL COMMENT '逾期',
  `house_address` varchar(10) default NULL COMMENT '房产地址',
  `house_area` varchar(10) default NULL COMMENT '房产面积',
  `house_year` varchar(10) default NULL COMMENT '建筑年份',
  `house_status` varchar(10) default NULL COMMENT '供款',
  `house_holder1` varchar(10) default NULL COMMENT '房子所有权1',
  `house_holder2` varchar(10) default NULL COMMENT '房子所有权1',
  `house_right1` varchar(10) default NULL COMMENT '房子份额1',
  `house_right2` varchar(10) default NULL COMMENT '房子份额2',
  `house_loanyear` varchar(10) default NULL COMMENT '贷款年限',
  `house_loanprice` varchar(10) default NULL COMMENT '每月供款',
  `house_balance` varchar(10) default NULL COMMENT '贷款余额',
  `house_bank` varchar(10) default NULL COMMENT '银行',
  `company_name` varchar(10) default NULL COMMENT '公司名称',
  `company_type` varchar(10) default NULL COMMENT '公司性质',
  `company_industry` varchar(10) default NULL COMMENT '公司行业',
  `company_office` varchar(10) default NULL COMMENT '工作职位',
  `company_jibie` varchar(10) default NULL COMMENT '工作级别',
  `company_worktime1` varchar(10) default NULL COMMENT '工作时间1',
  `company_worktime2` varchar(10) default NULL COMMENT '工作时间2',
  `company_workyear` varchar(10) default NULL COMMENT '工作年限',
  `company_tel` varchar(50) default NULL COMMENT '公司电话',
  `company_address` varchar(100) default NULL COMMENT '公司地址',
  `company_weburl` varchar(100) default NULL COMMENT '公司网站',
  `company_reamrk` varchar(250) default NULL COMMENT '公司备注',
  `private_type` varchar(10) default NULL COMMENT '类别',
  `private_date` varchar(10) default NULL COMMENT '日期',
  `private_place` varchar(10) default NULL COMMENT '场所',
  `private_rent` varchar(10) default NULL COMMENT '租金',
  `private_term` varchar(10) default NULL COMMENT '租期',
  `private_taxid` varchar(30) default NULL COMMENT '工商税务',
  `private_commerceid` varchar(50) default NULL COMMENT '工商登记号',
  `private_income` varchar(100) default NULL COMMENT '收入',
  `private_employee` varchar(100) default NULL COMMENT '雇员',
  `finance_repayment` varchar(100) default NULL COMMENT '每月无抵押贷款还款额',
  `finance_property` varchar(100) default NULL COMMENT '自有房产',
  `finance_amount` varchar(100) default NULL COMMENT '每月房屋按揭金额',
  `finance_car` varchar(10) default NULL COMMENT '自有汽车',
  `finance_caramount` varchar(100) default NULL COMMENT '每月汽车按揭金额',
  `finance_creditcard` varchar(100) default NULL COMMENT '信用卡金额',
  `mate_name` varchar(100) default NULL COMMENT '配偶名字',
  `mate_salary` varchar(10) default NULL COMMENT '薪资',
  `mate_phone` varchar(100) default NULL COMMENT '手机',
  `mate_tel` varchar(100) default NULL COMMENT '电话',
  `mate_type` varchar(10) default NULL COMMENT '工作类型',
  `mate_office` varchar(10) default NULL COMMENT '工作职位',
  `mate_address` varchar(250) default NULL COMMENT '地址',
  `mate_income` varchar(100) default NULL COMMENT '收入',
  `education_record` varchar(100) default NULL COMMENT '学历',
  `education_school` varchar(200) default NULL COMMENT '学校',
  `education_study` varchar(200) default NULL COMMENT '专业',
  `education_time1` varchar(20) default NULL COMMENT '时间1',
  `education_time2` varchar(20) default NULL COMMENT '时间2',
  `tel` varchar(50) default NULL COMMENT '电话',
  `phone` varchar(50) default NULL COMMENT '手机',
  `post` varchar(50) default NULL COMMENT '邮编',
  `address` varchar(50) default NULL COMMENT '邮编',
  `province` varchar(20) default NULL COMMENT '省份',
  `city` varchar(20) default NULL COMMENT '城市',
  `area` varchar(20) default NULL COMMENT '区',
  `linkman1` varchar(50) default NULL COMMENT '联系人1',
  `relation1` varchar(50) default NULL COMMENT '关系1',
  `tel1` varchar(50) default NULL COMMENT '电话1',
  `phone1` varchar(50) default NULL COMMENT '手机1',
  `linkman2` varchar(50) default NULL COMMENT '联系人2',
  `relation2` varchar(50) default NULL COMMENT '关系2',
  `tel2` varchar(50) default NULL COMMENT '电话2',
  `phone2` varchar(50) default NULL COMMENT '手机2',
  `linkman3` varchar(50) default NULL COMMENT '联系人3',
  `relation3` varchar(50) default NULL COMMENT '关系3',
  `tel3` varchar(50) default NULL COMMENT '电话3',
  `phone3` varchar(50) default NULL COMMENT '手机3',
  `msn` varchar(50) default NULL COMMENT 'MSN',
  `qq` varchar(50) default NULL COMMENT 'QQ',
  `wangwang` varchar(50) default NULL COMMENT 'WANGWANG',
  `ability` varchar(250) default NULL COMMENT '个人能力',
  `interest` varchar(250) default NULL COMMENT '个人爱好',
  `others` varchar(250) default NULL COMMENT '其他说明',
  `experience` text COMMENT '工作经历',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  `updatetime` varchar(50) default NULL,
  `updateip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_cache`;
CREATE TABLE `dw_user_cache` (
  `user_id` int(11) NOT NULL default '0',
  `kefu_userid` int(11) default NULL,
  `kefu_username` int(11) default NULL,
  `kefu_addtime` int(11) default NULL,
  `vip_status` int(2) default '0',
  `vip_remark` varchar(250) default NULL,
  `vip_money` varchar(100) default NULL,
  `vip_verify_remark` varchar(100) default NULL,
  `vip_verify_time` varchar(100) default NULL,
  `bbs_topics_num` int(11) default '0',
  `bbs_posts_num` int(11) default '0',
  `credit` int(11) default '0' COMMENT '积分',
  `account` int(11) default '0' COMMENT '帐户总额',
  `account_use` int(11) default '0' COMMENT '可用金额',
  `account_nouse` int(11) default '0' COMMENT '冻结金额',
  `account_waitin` int(11) default '0' COMMENT '代收总额',
  `account_waitintrest` int(11) default '0' COMMENT '代收利息',
  `account_intrest` int(11) default '0' COMMENT '净赚利息',
  `account_award` int(11) default '0' COMMENT '投标奖励',
  `account_payment` int(11) default '0' COMMENT '待还总额',
  `account_expired` int(11) default '0' COMMENT '逾期总额',
  `account_waitvip` int(11) default '0' COMMENT 'vip会费',
  `borrow_amount` int(11) default '3000' COMMENT '借款额度',
  `vouch_amount` int(11) NOT NULL default '0' COMMENT '担保额度',
  `borrow_loan` int(11) default '0' COMMENT '成功借出',
  `borrow_success` int(11) default '0' COMMENT '成功借款',
  `borrow_wait` int(11) default '0' COMMENT '等待满标',
  `borrow_paymeng` int(11) default '0' COMMENT '待还借款',
  `friends_apply` int(11) default '0',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_log`;
CREATE TABLE `dw_user_log` (
  `log_id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `query` varchar(50) default NULL,
  `url` varchar(200) default NULL,
  `result` varchar(100) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=330 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_sendemail_log`;
CREATE TABLE `dw_user_sendemail_log` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `status` int(2) default NULL,
  `title` varchar(250) default NULL,
  `type` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `user_id` int(11) default NULL,
  `msg` text,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=221 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_trend`;
CREATE TABLE `dw_user_trend` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `username` varchar(30) default NULL,
  `content` text,
  `addtime` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=gbk COMMENT='用户操作记录';

DROP TABLE IF EXISTS `dw_user_type`;
CREATE TABLE `dw_user_type` (
  `type_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `purview` text,
  `order` varchar(10) default NULL,
  `status` int(2) default NULL,
  `type` int(2) default NULL,
  `summary` varchar(200) default NULL,
  `remark` varchar(200) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_typechange`;
CREATE TABLE `dw_user_typechange` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `old_type` varchar(10) NOT NULL,
  `new_type` varchar(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `addtime` varchar(20) NOT NULL,
  `addip` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dw_user_visit`;
CREATE TABLE `dw_user_visit` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `visit_userid` int(11) default NULL,
  `addip` varchar(30) default NULL,
  `addtime` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_userinfo`;
CREATE TABLE `dw_userinfo` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '所属站点',
  `user_id` int(11) default '0' COMMENT '用户名称',
  `name` varchar(255) default NULL COMMENT '标题',
  `status` int(2) default '0' COMMENT '状态',
  `order` int(11) default '0' COMMENT '排序',
  `hits` int(11) default '0' COMMENT '点击次数',
  `litpic` varchar(255) default NULL COMMENT '缩略图',
  `flag` varchar(50) default NULL COMMENT '属性',
  `source` varchar(50) default NULL COMMENT '来源',
  `publish` varchar(50) default NULL COMMENT '发布时间',
  `marry` varchar(50) default NULL COMMENT '婚姻',
  `child` varchar(10) default NULL COMMENT '子女',
  `education` varchar(10) default NULL COMMENT '学历',
  `income` varchar(10) default NULL COMMENT '收入',
  `shebao` varchar(10) default NULL COMMENT '社保',
  `shebaoid` varchar(50) default NULL COMMENT '社保号',
  `housing` varchar(10) default NULL COMMENT '住房条件',
  `car` varchar(10) default NULL COMMENT '车',
  `late` varchar(10) default NULL COMMENT '逾期',
  `house_address` varchar(10) default NULL COMMENT '房产地址',
  `house_area` varchar(10) default NULL COMMENT '房产面积',
  `house_year` varchar(10) default NULL COMMENT '建筑年份',
  `house_status` varchar(10) default NULL COMMENT '供款',
  `house_holder1` varchar(10) default NULL COMMENT '房子所有权1',
  `house_holder2` varchar(10) default NULL COMMENT '房子所有权1',
  `house_right1` varchar(10) default NULL COMMENT '房子份额1',
  `house_right2` varchar(10) default NULL COMMENT '房子份额2',
  `house_loanyear` varchar(10) default NULL COMMENT '贷款年限',
  `house_loanprice` varchar(10) default NULL COMMENT '每月供款',
  `house_balance` varchar(10) default NULL COMMENT '贷款余额',
  `house_bank` varchar(10) default NULL COMMENT '银行',
  `company_name` varchar(10) default NULL COMMENT '公司名称',
  `company_type` varchar(10) default NULL COMMENT '公司性质',
  `company_industry` varchar(10) default NULL COMMENT '公司行业',
  `company_office` varchar(10) default NULL COMMENT '工作职位',
  `company_jibie` varchar(10) default NULL COMMENT '工作级别',
  `company_worktime1` varchar(10) default NULL COMMENT '工作时间1',
  `company_worktime2` varchar(10) default NULL COMMENT '工作时间2',
  `company_workyear` varchar(10) default NULL COMMENT '工作年限',
  `company_tel` varchar(50) default NULL COMMENT '公司电话',
  `company_address` varchar(100) default NULL COMMENT '公司地址',
  `company_weburl` varchar(100) default NULL COMMENT '公司网站',
  `company_reamrk` varchar(250) default NULL COMMENT '公司备注',
  `private_type` varchar(10) default NULL COMMENT '类别',
  `private_date` varchar(10) default NULL COMMENT '日期',
  `private_place` varchar(10) default NULL COMMENT '场所',
  `private_rent` varchar(10) default NULL COMMENT '租金',
  `private_term` varchar(10) default NULL COMMENT '租期',
  `private_taxid` varchar(30) default NULL COMMENT '工商税务',
  `private_commerceid` varchar(50) default NULL COMMENT '工商登记号',
  `private_income` varchar(100) default NULL COMMENT '收入',
  `private_employee` varchar(100) default NULL COMMENT '雇员',
  `finance_repayment` varchar(100) default NULL COMMENT '每月无抵押贷款还款额',
  `finance_property` varchar(100) default NULL COMMENT '自有房产',
  `finance_amount` varchar(100) default NULL COMMENT '每月房屋按揭金额',
  `finance_car` varchar(10) default NULL COMMENT '自有汽车',
  `finance_caramount` varchar(100) default NULL COMMENT '每月汽车按揭金额',
  `finance_creditcard` varchar(100) default NULL COMMENT '信用卡金额',
  `mate_name` varchar(100) default NULL COMMENT '配偶名字',
  `mate_salary` varchar(10) default NULL COMMENT '薪资',
  `mate_phone` varchar(100) default NULL COMMENT '手机',
  `mate_tel` varchar(100) default NULL COMMENT '电话',
  `mate_type` varchar(10) default NULL COMMENT '工作类型',
  `mate_office` varchar(10) default NULL COMMENT '工作职位',
  `mate_address` varchar(250) default NULL COMMENT '地址',
  `mate_income` varchar(100) default NULL COMMENT '收入',
  `education_record` varchar(100) default NULL COMMENT '学历',
  `education_school` varchar(200) default NULL COMMENT '学校',
  `education_study` varchar(200) default NULL COMMENT '专业',
  `education_time1` varchar(20) default NULL COMMENT '时间1',
  `education_time2` varchar(20) default NULL COMMENT '时间2',
  `tel` varchar(50) default NULL COMMENT '电话',
  `phone` varchar(50) default NULL COMMENT '手机',
  `post` varchar(50) default NULL COMMENT '邮编',
  `address` varchar(50) default NULL COMMENT '邮编',
  `province` varchar(20) default NULL COMMENT '省份',
  `city` varchar(20) default NULL COMMENT '城市',
  `area` varchar(20) default NULL COMMENT '区',
  `linkman1` varchar(50) default NULL COMMENT '联系人1',
  `relation1` varchar(50) default NULL COMMENT '关系1',
  `tel1` varchar(50) default NULL COMMENT '电话1',
  `phone1` varchar(50) default NULL COMMENT '手机1',
  `linkman2` varchar(50) default NULL COMMENT '联系人2',
  `relation2` varchar(50) default NULL COMMENT '关系2',
  `tel2` varchar(50) default NULL COMMENT '电话2',
  `phone2` varchar(50) default NULL COMMENT '手机2',
  `linkman3` varchar(50) default NULL COMMENT '联系人3',
  `relation3` varchar(50) default NULL COMMENT '关系3',
  `tel3` varchar(50) default NULL COMMENT '电话3',
  `phone3` varchar(50) default NULL COMMENT '手机3',
  `msn` varchar(50) default NULL COMMENT 'MSN',
  `qq` varchar(50) default NULL COMMENT 'QQ',
  `wangwang` varchar(50) default NULL COMMENT 'WANGWANG',
  `ability` varchar(250) default NULL COMMENT '个人能力',
  `interest` varchar(250) default NULL COMMENT '个人爱好',
  `others` varchar(250) default NULL COMMENT '其他说明',
  `experience` text COMMENT '工作经历',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  `updatetime` varchar(50) default NULL,
  `updateip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_vip_card`;
CREATE TABLE `dw_vip_card` (
  `id` int(11) NOT NULL auto_increment,
  `flag` varchar(30) default NULL COMMENT '定义属性',
  `order` varchar(10) default NULL COMMENT '排序',
  `city` varchar(50) default NULL COMMENT '城市',
  `serial_number` varchar(15) default NULL COMMENT 'VIP卡号',
  `batch` int(11) default NULL COMMENT '生成批次',
  `password` varchar(50) default NULL COMMENT '密码',
  `create_time` int(11) default NULL COMMENT '创建时间',
  `start_date` int(11) default NULL COMMENT '有效期开始日期',
  `end_date` int(11) default NULL COMMENT '有效期结束日期',
  `is_up_end_date` tinyint(1) default '0' COMMENT '是否延期',
  `vct_name` varchar(40) default NULL COMMENT '充值卡类型',
  `month_num` tinyint(4) default NULL COMMENT '有效月数',
  `open_time` int(11) default NULL COMMENT '激活时间',
  `status` tinyint(1) default '0' COMMENT '状态:0:未激活，1正常，2冻结，3停卡, 4封号',
  `freeze_time` int(11) default NULL COMMENT '冻结时间',
  `freeze_day` int(11) default NULL COMMENT '冻结天数',
  `freeze_times` tinyint(4) default '0' COMMENT '冻结次数',
  `stop_time` int(11) default NULL COMMENT '停卡时间',
  `stop_day` int(11) default NULL COMMENT '停卡天数',
  `stop_times` tinyint(4) default '0' COMMENT '停卡次数',
  `create_user` varchar(20) default NULL COMMENT '生成者',
  `remark` text COMMENT '备注',
  `hits` int(11) default NULL COMMENT '点击次数',
  `addtime` varchar(30) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加ip',
  `updatetime` varchar(30) default NULL COMMENT '修改时间',
  `updateip` varchar(30) default NULL COMMENT '修改ip',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idx_vip_sn` (`serial_number`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='VIP卡';

DROP TABLE IF EXISTS `dw_vip_card_type`;
CREATE TABLE `dw_vip_card_type` (
  `id` int(11) NOT NULL auto_increment COMMENT '类型ID',
  `name` varchar(40) default NULL COMMENT '类型名称',
  `month_num` tinyint(4) default NULL COMMENT '月数',
  `addtime` varchar(30) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加ip',
  `updatetime` varchar(30) default NULL COMMENT '修改时间',
  `updateip` varchar(30) default NULL COMMENT '修改ip',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `month_num_UNIQUE` (`month_num`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_vip_user`;
CREATE TABLE `dw_vip_user` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `card_number` varchar(15) default NULL COMMENT 'VIP卡号',
  `flag` varchar(30) default NULL COMMENT '定义属性',
  `order` varchar(10) default NULL COMMENT '排序',
  `hits` int(11) default NULL COMMENT '点击次数',
  `addtime` varchar(30) default NULL COMMENT '添加时间',
  `addip` varchar(30) default NULL COMMENT '添加ip',
  `updatetime` varchar(30) default NULL COMMENT '修改时间',
  `updateip` varchar(30) default NULL COMMENT '修改ip',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idx_vipu_u` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='VIP卡用户';

DROP TABLE IF EXISTS `dw_yginfo`;
CREATE TABLE `dw_yginfo` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '用户ID',
  `status` int(2) default '0' COMMENT '状态',
  `height` varchar(255) default NULL COMMENT '身高',
  `minzu` varchar(255) default NULL COMMENT '民族',
  `jiguan` varchar(255) default NULL COMMENT '籍贯',
  `zhengzhi` varchar(255) default NULL COMMENT '政治面貌',
  `techang` varchar(255) default NULL COMMENT '特长',
  `marray` varchar(255) default NULL COMMENT '婚否',
  `zhuanye` varchar(255) default NULL COMMENT '专业',
  `xueli` varchar(255) default NULL COMMENT '学历',
  `idcard` varchar(255) default NULL COMMENT '身份证号码',
  `zhiye` varchar(255) default NULL COMMENT '职业',
  `school` varchar(255) default NULL COMMENT '学校',
  `danwei` varchar(255) default NULL COMMENT '单位',
  `dizhi` varchar(255) default NULL COMMENT '地址',
  `linkman` varchar(255) default NULL COMMENT '联系人',
  `linktel` varchar(255) default NULL COMMENT '联系电话',
  `fuwu` text,
  `jianli` text,
  `liyou` varchar(255) default NULL COMMENT '申请理由',
  `verify_userid` int(11) default NULL COMMENT '审核人',
  `verify_time` varchar(50) default NULL COMMENT '审核时间',
  `verify_remark` varchar(250) default NULL COMMENT '审核备注',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='义工信息';

DROP TABLE IF EXISTS `dw_zixun_fields`;
CREATE TABLE `dw_zixun_fields` (
  `aid` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

