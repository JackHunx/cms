<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><? if (!isset($this->magic_vars['_G']['article']['name'])) $this->magic_vars['_G']['article']['name']=''; ;if (  $this->magic_vars['_G']['article']['name']!=""): ?><? if (!isset($this->magic_vars['_G']['article']['name'])) $this->magic_vars['_G']['article']['name'] = ''; echo $this->magic_vars['_G']['article']['name']; ?> - <? endif; ?><? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name']=''; ;if (  $this->magic_vars['_G']['site_result']['name']): ?> <? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?> -  <? endif; ?><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?></title>
<meta name="description" content="<? if (!isset($this->magic_vars['_G']['system']['con_description'])) $this->magic_vars['_G']['system']['con_description'] = ''; echo $this->magic_vars['_G']['system']['con_description']; ?>" />
<meta name="keywords" content="<? if (!isset($this->magic_vars['_G']['system']['con_keywords'])) $this->magic_vars['_G']['system']['con_keywords'] = ''; echo $this->magic_vars['_G']['system']['con_keywords']; ?>" />
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/css/css.css" rel="stylesheet" type="text/css" />

<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/css/index.css" rel="stylesheet" type="text/css" />
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/css/main.css" rel="stylesheet" type="text/css" />
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/css/user.css" rel="stylesheet" type="text/css" />
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/css/tipswindown.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/base.js"></script>

<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/tipswindown.js"></script>
<script src="/plugins/timepicker/WdatePicker.js" type="text/javascript"></script>
</head>

<body>
<div class="top_bor">
     <div class="con_box">
          <div class="logo"><a href="/"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/logo.gif" alt="瑞龙借贷" /></a></div>
		  <div style="float:left; margin-left:60px; margin-top:10px"></div>
	      <div class="top_right">
	           <div style="text-align:right"><a href="/index.php?user&q=action/reg" target="_blank" style="color:#900;">免费注册</a> | 
	<a href="/lianxi/index.html">联系我们</a> |  
	<span style="CURSOR: hand" onClick="window.external.addFavorite('http://www.dailixin.com','瑞龙借贷-个人信用贷款 小额贷款 投资理财 企业融资 ')" title="瑞龙借贷-个人信用贷款 小额贷款 投资理财 企业融资 ">
	<a >收藏本站</a></span> |  
<!-- JiaThis Button BEGIN -->

<a href="http://www.jiathis.com/share/" class="jiathis" target="_blank"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/share.gif" border="0" align="absmiddle" />
	   </a>
<script type="text/javascript" src="http://v1.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
<!-- JiaThis Button END --></div>
		 <div style="margin-top:5px; padding-left:100px;"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/phone.gif" /></div>
	      </div>
	 </div>
</div>

<div class="menu_bor">
     <div class="con_box">

	      <div class="menu1">
		        <ul>
				    <li>  <a href="/" title="首页" <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="" ||  $this->magic_vars['_G']['site_presult']['nid']=="index"): ?> class="now"<? endif; ?>>首页</a></li>
				<? $this->magic_vars['varlgnore'] = array(1,24,28,46);$this->magic_vars['varsite_id'] = array(); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && $this->magic_vars['var']['pid']==0 && !in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varlgnore']) && $this->magic_vars['var']['status'] == 1 ): $this->magic_vars['key'] =$i?>
				<li class="line"></li>
				<li   ><a href="<? if (!isset($this->magic_vars['var']['siteurl'])) $this->magic_vars['var']['siteurl'] = ''; echo $this->magic_vars['var']['siteurl']; ?>" <? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['var']['nid']=="bbs"): ?> target="_blank"<? endif; ?>  <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']== $this->magic_vars['var']['nid'] ||  $this->magic_vars['_G']['site_presult']['nid']== $this->magic_vars['var']['nid']): ?> class="now"<? endif; ?>><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></li>
				<? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>
		     
				</ul>

				<div style="clear:both"></div>
		  </div>
		  <div class="menu2">
		       
			   <? if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']=''; ;if (   $this->magic_vars['_G']['site_presult']['nid']=="kefu" ||  $this->magic_vars['_G']['site_presult']['nid']=="tools" ||  $this->magic_vars['_G']['site_presult']['nid']=="borrow"  ||  $this->magic_vars['_G']['site_presult']['nid']=="tender" ||  $this->magic_vars['_G']['site_presult']['nid']=="safe" ||  $this->magic_vars['_G']['site_presult']['nid']=="vouch" ||  $this->magic_vars['_G']['site_presult']['nid']=="help"): ?>
<?  if(!isset($this->magic_vars['_G']['site_brother_list']) || $this->magic_vars['_G']['site_brother_list']=='') $this->magic_vars['_G']['site_brother_list'] = array();  $_from = $this->magic_vars['_G']['site_brother_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
	<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['var']['nid']== $this->magic_vars['_G']['site_result']['nid']): ?>
	<a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html"><font color="#FF0000"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></font></a> | 
	<? else: ?>
	<a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a> | 
	<? endif; ?>
	<? endforeach; endif; unset($_from); ?>
	<? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;elseif (   $this->magic_vars['_G']['site_result']['nid']=="kefu" ||  $this->magic_vars['_G']['site_result']['nid']=="tools" ||  $this->magic_vars['_G']['site_result']['nid']=="borrow"  ||  $this->magic_vars['_G']['site_result']['nid']=="tender"   ||  $this->magic_vars['_G']['site_result']['nid']=="safe"   ||  $this->magic_vars['_G']['site_result']['nid']=="vouch"): ?>
<?  if(!isset($this->magic_vars['_G']['site_sub_list']) || $this->magic_vars['_G']['site_sub_list']=='') $this->magic_vars['_G']['site_sub_list'] = array();  $_from = $this->magic_vars['_G']['site_sub_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
	<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['var']['nid']== $this->magic_vars['_G']['site_result']['nid']): ?>
	<a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html"><font color="#FF0000"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></font></a> | 
	<? else: ?>
	<a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a> | 
	<? endif; ?>
	<? endforeach; endif; unset($_from); ?>
	<? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']=''; ;elseif (   $this->magic_vars['_G']['site_result']['nid']=="" ||  $this->magic_vars['_G']['site_presult']['nid']=="index"): ?>
	<? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && $this->magic_vars['var']['pid']==1 && $this->magic_vars['var']['status'] == 1 ): $this->magic_vars['key'] =$i?>
	<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['var']['nid']== $this->magic_vars['_G']['site_result']['nid']): ?>
	<a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html"><font color="#FF0000"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></font></a> | 
	<? else: ?>
	<a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a> | 
	<? endif; ?>
	<? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>
	<? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;elseif (   $this->magic_vars['_G']['site_result']['nid']=="safe"): ?>
	<? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;elseif (   $this->magic_vars['_G']['site_result']['nid']=="user"): ?>
	<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']>0): ?><a >欢迎你，<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?>。</a> <a href="/?user&q=action/logout">[退出]</a><? else: ?>欢迎来到<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?><? endif; ?>
	 <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;elseif (    $this->magic_vars['_G']['site_result']['nid']=="invest"): ?>
	 <a href="index.html" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']==""): ?> class="strong"<? endif; ?>>正在投标中的借款</a> | 
	 <a href="?type=vouch" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="vouch"): ?> class="strong"<? endif; ?>>正在担保的借款 </a>  | 
	 <a href="?type=reviews" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="reviews"): ?> class="strong"<? endif; ?>>等待复审的借款 </a> |  
	 <a href="?type=success" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="success"): ?> class="strong"<? endif; ?>>成功的借款 </a> |  
	 <a href="?type=late" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="late"): ?> class="strong"<? endif; ?>>逾期的借款 </a> 
	<? else: ?>
	
	 <? endif; ?>
			   
			    </div>

	 </div>
</div>



<? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (   $this->magic_vars['_G']['site_result']['nid']!="" &&   $this->magic_vars['_G']['site_result']['nid']!="user"): ?>
<div class="con_box t10">
     <div class="view_bor">
            <div class="left"><strong>您的位置：</strong><a href="/"><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?></a> <? if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['site_id'])) $this->magic_vars['_G']['site_result']['site_id']=''; ;if (  $this->magic_vars['_G']['site_presult']['nid']!="" &&   $this->magic_vars['_G']['site_presult']['nid']!="index" &&  $this->magic_vars['_G']['site_result']['site_id'] != "63"): ?> -> <a href="/<? if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid'] = ''; echo $this->magic_vars['_G']['site_presult']['nid']; ?>/index.html"><? if (!isset($this->magic_vars['_G']['site_presult']['name'])) $this->magic_vars['_G']['site_presult']['name'] = ''; echo $this->magic_vars['_G']['site_presult']['name']; ?></a><? endif; ?> -> <a href="/<? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid'] = ''; echo $this->magic_vars['_G']['site_result']['nid']; ?>/index.html"><? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?></a> </div>

           
     </div>
</div>


<? endif; ?>