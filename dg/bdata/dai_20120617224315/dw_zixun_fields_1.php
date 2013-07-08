<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2008
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dw_zixun_fields`;");
E_C("CREATE TABLE `dw_zixun_fields` (
  `aid` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

@include("../../inc/footer.php");
?>