<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2008
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dw_account_payment`;");
E_C("CREATE TABLE `dw_account_payment` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `style` int(2) DEFAULT NULL,
  `config` longtext,
  `fee` int(10) DEFAULT '0',
  `fee_type` int(2) DEFAULT NULL,
  `max_money` int(10) DEFAULT NULL,
  `max_fee` int(10) DEFAULT NULL,
  `description` longtext,
  `order` smallint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

@include("../../inc/footer.php");
?>