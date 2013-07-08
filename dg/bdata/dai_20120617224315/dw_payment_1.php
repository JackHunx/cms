<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2008
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dw_payment`;");
E_C("CREATE TABLE `dw_payment` (
  `id` mediumint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `status` smallint(3) unsigned DEFAULT '0',
  `style` int(2) DEFAULT NULL,
  `config` longtext,
  `fee_type` int(2) DEFAULT NULL,
  `max_money` varchar(10) DEFAULT NULL,
  `max_fee` varchar(10) DEFAULT NULL,
  `description` longtext,
  `order` smallint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=gbk");
E_D("replace into `dw_payment` values('1','支付宝','alipay','1','0','a:4:{s:9:\"alipay_id\";s:16:\"2088002506667295\";s:10:\"alipay_key\";s:32:\"jd4tmmwnuzavag933i0n1qyblgkjs3jc\";s:12:\"alipay_email\";s:15:\"lotaies@163.com\";s:11:\"alipay_type\";s:1:\"2\";}','0','','','支付宝即时到帐，是国内先进的网上支付方式。','1');");
E_D("replace into `dw_payment` values('9','腾讯财付通[即时到账]','tenpay','1','0','a:3:{s:9:\"member_id\";s:10:\"1212153501\";s:10:\"PrivateKey\";s:32:\"324bb56c466d30a2a40a6e1593967139\";s:8:\"authtype\";s:1:\"1\";}','1','0','0','腾讯财付通即时到账','10');");
E_D("replace into `dw_payment` values('10','环讯IPS网上支付3.0','ips','0',NULL,'a:2:{s:9:\"member_id\";s:6:\"015312\";s:10:\"PrivateKey\";s:128:\"yXkD9pT4wfsBm08D9Ua3JPA05tXkNTmtz5ajV2T7QZyNbFkwxxH6w2Z8wJiqsJG2TYmH0yHga3DK0NyQiAM0mFXW51NmuCphsWTd33WZFA6SPpi8uriHXpqnaplYB5Mx\";}','0','0','0','<FONT face=宋体>支持30家银行在线支付</FONT>','10');");
E_D("replace into `dw_payment` values('32','线下支付','offline','1',NULL,'s:0:\"\";','1','','','<P><FONT face=宋体>线下支付</FONT></P>','10');");

@include("../../inc/footer.php");
?>