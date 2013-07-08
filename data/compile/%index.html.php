<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?><SCRIPT src="images/qq/ServiceQQ.htm"></SCRIPT><LINK href="images/qq/qq.css" type=text/css rel=stylesheet>
<div class="wrap950 index_log" style="padding-top:10px;"><!--广告位--></div>
<div class="wrap950 index_log">
		<? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(22); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
		<div class="list_content_main_4" >
		<div class="title">
			<div class="titles">
				<span><a href="<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" target="_blank">更多..</a></span><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> 网站公告
			</div>
		</div>		
		<div class="content">
			<ul style="_padding-top:5px; padding-bottom:3px; _padding-bottom:5px;">
			<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'7','site_var'=>'var','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
			<li style="_height:23px; _line-height:23px;"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/arror_1.gif" /> <a href="<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"15");echo $_tmp;unset($_tmp); ?></a></li>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</ul>
		</div>
		<? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>
	</div>
		
		
	<div class="list_content_main_5 floatl">
	 <script type=text/javascript>
		var pic_width=425; //图片宽度
		var pic_height=200; //图片高度
		var button_pos=4; //按扭位置 1左 2右 3上 4下
		var stop_time=6000; //图片停留时间(1000为1秒钟)
		var show_text=0; //是否显示文字标签 1显示 0不显示
		var txtcolor="000000"; //文字色
		var bgcolor=""; //背景色
		var imag=new Array();
		var link=new Array();
		var text=new Array();
		<? $this->magic_vars['query_type']='GetList';$data = array('type_id'=>'1','limit'=>'6');$default = '';  include_once(ROOT_PATH.'modules/scrollpic/scrollpic.class.php');$this->magic_vars['magic_result'] = scrollpicClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
		imag[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?>]="<? if (!isset($this->magic_vars['var']['pic'])) $this->magic_vars['var']['pic'] = ''; echo $this->magic_vars['var']['pic']; ?>";
		link[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?>]="<? if (!isset($this->magic_vars['var']['pic'])) $this->magic_vars['var']['pic'] = ''; echo $this->magic_vars['var']['pic']; ?>";
		text[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?>]="<? if (!isset($this->magic_vars['var']['title'])) $this->magic_vars['var']['title'] = ''; echo $this->magic_vars['var']['title']; ?>";
		<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		
		//可编辑内容结束
		var swf_height=show_text==1?pic_height+20:pic_height;
		var pics="", links="", texts="";
		for(var i=1; i<imag.length; i++){
		pics=pics+("|"+imag[i]);
		links=links+("|"+link[i]);
		texts=texts+("|"+text[i]);
		}
		
		pics=pics.substring(1);
		links=links.substring(1);
		texts=texts.substring(1);
		document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cabversion=6,0,0,0" width="'+ pic_width +'" height="'+ swf_height +'">');
		document.write('<param name="movie" value="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/focus.swf">');
		document.write('<param name="quality" value="high"><param name="wmode" value="opaque">');
		document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'">');
		document.write('<embed src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/focus.swf" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'" quality="high" width="'+ pic_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
		document.write('</object>');
		</script>
			
	</div>
	
		
	<div class="index_log_bg">
		<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
		<ul class="index_log_ul">
		<form name="login" method="post" action="/index.php?user&q=action/login"  >
		<li style="height:10px;"></li>
		<li><span>账 号 ：</span>
		<input class="user_aciton_input" type="text" id="keywords" name="keywords" maxlength="64" value="用户名/邮箱进行登录" onFocus="if(value==defaultValue){value='';this.style.color='#000'}" onBlur="if(!value){value=defaultValue;this.style.color='#999'}" style="color:#999999; padding-top:4px; height:16px; width:170px;"></li>
		<li><span>密 码 ：</span> <input class="user_aciton_input" type="password" name="password" id="password" maxlength="16" style="; padding-top:4px; height:16px; width:170px;"/></li>
		<li><span>验证码：</span> 
		<input  class="user_aciton_input"  name="valicode" type="text" size="8" maxlength="4" style=" padding-top:4px; height:16px; width:70px;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /></li>
		<li><span>COOKIE：</span><select name="cookietime"  class="user_aciton_input" ><option value="15">保存15分钟</option>
		<option value="30" selected="selected">保存30分钟</option>
		<option value="60">保存1小时</option>
		<option value="180">保存3小时</option>
		<option value="360">保存6小时</option>
		<option value="1440">保存1天</option>
		<option value="4320">保存3天</option>
		<option value="7200">保存5天</option>
		</select> 
		<a href="/index.php?user&q=action/getpwd" target="_blank">找回密码</a></li>
		<li style="padding-left:50px;"><input type="image" src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/log_button.gif"  /> 
		<a href="/index.php?user&q=action/reg" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/index_reg.gif" /></a></li>
		</form>
		</ul>
		<? else: ?>
		<ul class="index_log_ul1">
			<li style="text-align:center; padding-top:30px;">
				
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="120"><img src="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = '';$_tmp = $this->magic_vars['_G']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" width="80" height="80" class="picborder" /></td>
                    <td align="left"><span style="font-family:'微软雅黑';">欢迎你：<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?></span><br /><a href="/index.php?user"><font color="#0000FF">[用户中心]</font></a><a href="/index.php?user&q=action/logout"><font color="#FF0000">[退出]</font></a></td>
                  </tr>
                </table>

			</li>

			<li class="index_log_li1" style="line-height:15px">
				<a href="/index.php?user&q=code/account/log">资金记录</a>&nbsp;&nbsp;&nbsp;
				<a href="/index.php?user&q=code/account">帐户详情</a>&nbsp;&nbsp;&nbsp;
				<a href="/index.php?user&q=code/borrow/succes">我要收款</a><br />
				<a href="/index.php?user&q=code/account/account/recharge_new">我要充值</a>&nbsp;&nbsp;&nbsp;
				<a href="/index.php?user&q=code/account/cash_new">我要提现</a>&nbsp;&nbsp;&nbsp;
				<a href="/index.php?user&q=code/borrow/repayment">我要还款</a>
			</li>
		</ul>
		<? endif; ?>
	</div>
	
</div>



<!--<借款流程 开始-->
<div class="wrap950 list_1">
<div class="con_box t10">
<img border="0" usemap="#Map" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/liucheng.jpg">
<map id="Map" name="Map"><area alt="注册" href="/?user&amp;q=action/reg" coords="129,13,175,42" shape="rect">
<area alt="填写个人详细资料" href="/?user&amp;q=code/userinfo" coords="218,13,319,44" shape="rect">
<area alt="上传资料" href="/?user&amp;q=code/attestation" coords="365,13,466,42" shape="rect">
<area alt="发布借款标需求" href="/publish/index.html?type=month" coords="509,13,641,41" shape="rect">
<area alt="标满，审核" href="/?user&amp;q=code/borrow/publish" coords="683,12,815,41" shape="rect">
<area alt="成功借款" href="/?user&amp;q=code/borrow/repayment" coords="859,13,911,42" shape="rect">
</map>
</div></div>
<!--借款流程 结束>-->

<div class="wrap950 mar10">
	<div class="index_main_left">
		<div class="list_2">
                <? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(10); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
			<div class="title">				
				<div class="titles"><span><a href="<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" target="_blank">更多..</a></span><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> <? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></div>				
			</div>
			<div class="content">
				<ul style="_padding-top:5px;">			
				<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'10','site_var'=>'var','var'=>'item','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>				
				<li style="line-height:25px; _height:25px; _line-height:25px;"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/arror_2.gif" />&nbsp;<a href="<? if (!isset($this->magic_vars['item']['site_nid'])) $this->magic_vars['item']['site_nid'] = ''; echo $this->magic_vars['item']['site_nid']; ?>/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"14");echo $_tmp;unset($_tmp); ?></a>
				</li>				
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?></ul>			
			</div>
                <? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>	
		</div>		
		
		<div class="list_2">
			<div class="title"><span><a href="/invest/index.html?type=success">更多..</a></span><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> 成功贷款项目
                        </div>
			<div class="content">
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'var','limit'=>'3','status'=>'3');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<div class="index_list1">
					<div class="pic">
					<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank">
					<img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" width="60" height="65px" class="picborder" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" /></a>
					</div>
					<div class="text">
						<ul>
							<li><strong><a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></strong></li>
							<li>借款金额：￥<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?></li>
							<li>借款期限：<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = '';$_tmp = $this->magic_vars['var']['time_limit'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_time_limit");echo $_tmp;unset($_tmp); ?></li>
						</ul>
					</div>
				</div>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</div>
		</div>
		
		
		<div class="list_2">
			<div class="title"><span><a href="/invest/index.html?type=late">更多..</a></span><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> 逾期贷款
                        </div>
			<div class="content">
				<? $this->magic_vars['query_type']='GetLateList';$data = array('var'=>'var','limit'=>'3','late_day'=>'15','order'=>'addtime');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetLateList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<div class="index_list1">
					<div class="pic"><a href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" width="60" height="62px" class="picborder" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" /></a></div>
					<div class="text">
						<ul>
							<li><strong><a href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" target="_blank" title="<? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?>"><? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?></a></strong></li>
							<li>逾期金额：￥<? if (!isset($this->magic_vars['var']['late_account'])) $this->magic_vars['var']['late_account'] = ''; echo $this->magic_vars['var']['late_account']; ?></li>
							<li>手机：<? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone'] = ''; echo $this->magic_vars['var']['phone']; ?></li>
						</ul>
					</div>
				</div>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</div>
		</div>
	</div>
	
	<div class="index_main_right">
	<!--按钮开始-->
		<div class="index_button">
		<? $data = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetAll($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
			<div class="yes"><div class="l"></div><div class="r"><span><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> <a href="/invest/index.html">正在招标的借款</a></span></div></div>
			<div style=" padding-top:10px; font-size:12px; color:#333;">申请贷款总额：<font color="#900;">￥<strong><? if (!isset($this->magic_vars['var']['borrow_all'])) $this->magic_vars['var']['borrow_all'] = ''; echo $this->magic_vars['var']['borrow_all']; ?></strong></font> 贷款总笔数：<font color="#900;"><strong><? if (!isset($this->magic_vars['var']['borrow_times'])) $this->magic_vars['var']['borrow_times'] = ''; echo $this->magic_vars['var']['borrow_times']; ?></strong></font>笔  已放款总额：<font color="#900;">￥<strong><? if (!isset($this->magic_vars['var']['borrow_yesall'])) $this->magic_vars['var']['borrow_yesall'] = ''; echo $this->magic_vars['var']['borrow_yesall']; ?></strong></font> 已放款数：<font color="#900;"><strong><? if (!isset($this->magic_vars['var']['borrow_yestimes'])) $this->magic_vars['var']['borrow_yestimes'] = ''; echo $this->magic_vars['var']['borrow_yestimes']; ?></strong></font>笔 </div>
		<? unset($_magic_vars);unset($data); ?>
		</div>
		<!--按钮结束-->
	
		<div class="index_main_content">
			<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'var','limit'=>'10','status'=>'1','order'=>'flag');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<div class="index_list" >
					<div class="pic" style="width:85px; height:90px; margin-top:13px">
					<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");$_tmp = $this->magic_modifier("litpic",$_tmp,"85,90");echo $_tmp;unset($_tmp); ?>" width="85px" height="90px" /></a>
					</div>
					<div class="text">
						<ul>
							<li style="height:20px; width:150px; overflow:hidden">
							<? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']==1): ?><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif"  /><? endif; ?><? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;if (  $this->magic_vars['var']['flag']==1): ?> 
							<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif" align="absmiddle" /><? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;elseif (   $this->magic_vars['var']['flag']==2): ?> 
							<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" /><? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;elseif (   $this->magic_vars['var']['flag']==3): ?> 
							<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/diya.gif" /><? endif; ?><? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (   $this->magic_vars['var']['award']==1): ?> 
							<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif" /><? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;elseif (   $this->magic_vars['var']['award']==2): ?> 
							<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif" /><? endif; ?> 
							<strong><a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>">
							<font color="#026CCF" ><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"20");echo $_tmp;unset($_tmp); ?></font></a></strong></li>
							<li><font color="#333333">借款金额:<strong>￥<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?></strong></font> </li>
							<li>年利率:<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>% 期限:<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?>个月</li>
							<li><div class="rate_bg" title="已完成<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = ''; echo $this->magic_vars['var']['scale']; ?>%"><div class="rate_tiao" style="width:<? if (!isset($this->magic_vars['var']['scale_width'])) $this->magic_vars['var']['scale_width'] = '';$_tmp = $this->magic_vars['var']['scale_width'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>px"></div></div>
							</li>	
							<li>已完成:<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = ''; echo $this->magic_vars['var']['scale']; ?>% <? if (!isset($this->magic_vars['var']['tender_times'])) $this->magic_vars['var']['tender_times'] = ''; echo $this->magic_vars['var']['tender_times']; ?>笔投标</li>											
						</ul>
					</div>
				</div>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</div>
		<div class="mar10"><?  $this->magic_vars['sqlfunc'] = $this->magic_sqlfunc("ad",array("nid"=>"index_ad1","litpic"=>"yes"));
echo $this->magic_vars['sqlfunc'];?></div>
		
			<div class="list_content_main_3 mar10">
				<div class="title"><span><a href="/bbs/index.html?fid=1" style="color:#900;">新手指南>></a></span>
				<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> 论坛精华</div>
				<div class="content">
					<ul style="margin-bottom:5px">
					<? $this->magic_vars['query_type']='GetTopicsList';$data = array('var'=>'var','limit'=>'14','status'=>'1');$default = '';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::GetTopicsList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<li><span><? if (!isset($this->magic_vars['var']['addtime'])) $this->magic_vars['var']['addtime'] = '';$_tmp = $this->magic_vars['var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></span>
					<a href="/bbs/index/html?q=view&tid=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" target="_blank">&nbsp;<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"12");echo $_tmp;unset($_tmp); ?></a>
					</li>
					<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>					
					</ul>
				</div>
			</div>
		
	</div>
</div>

<div class="wrap950 mar10">
	<div class="link_top">
	
	</div>

<div class="link_content">
	<ul>
	<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'10','logo'=>'true');$default = '';  include_once(ROOT_PATH.'modules/links/links.class.php');$this->magic_vars['magic_result'] = linksClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
	<li><a href="<? if (!isset($this->magic_vars['var']['url'])) $this->magic_vars['var']['url'] = ''; echo $this->magic_vars['var']['url']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['var']['logoimg'])) $this->magic_vars['var']['logoimg'] = ''; echo $this->magic_vars['var']['logoimg']; ?>" title="<? if (!isset($this->magic_vars['var']['webname'])) $this->magic_vars['var']['webname'] = ''; echo $this->magic_vars['var']['webname']; ?>" width="100" height="30" /></a>
	</li>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
        </ul>
	</div>
	<div class="link_content">
	<ul>
	<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'30','logo'=>'false');$default = '';  include_once(ROOT_PATH.'modules/links/links.class.php');$this->magic_vars['magic_result'] = linksClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
	<li>
	<a href="<? if (!isset($this->magic_vars['var']['url'])) $this->magic_vars['var']['url'] = ''; echo $this->magic_vars['var']['url']; ?>" target="_blank"><? if (!isset($this->magic_vars['var']['webname'])) $this->magic_vars['var']['webname'] = ''; echo $this->magic_vars['var']['webname']; ?></a>
	</li>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>  
	</ul>
	</div>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>