<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
	<script>alert("你还没有登录，请先登录再查看");location.href='/index.php?user';</script>
<? endif; ?>
<? $data = array('article_id'=>'0','id'=>$this->magic_vars['_G']['article_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetInvest($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>

<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id']=''; ;if (  $this->magic_vars['var']['user']['user_id']==""): ?>
<script>alert("您的操作有误");location.href='/index.php?user';</script>
<? endif; ?>

<? if (!isset($_REQUEST['detail'])) $_REQUEST['detail']=''; ;if (  $_REQUEST['detail']=="true"): ?>
<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id']='';if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['var']['user']['user_id']== $this->magic_vars['_G']['user_id']): ?>
	<script>alert("不能投自己的标");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>

<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']='';if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['vouch_account'])) $this->magic_vars['var']['borrow']['vouch_account']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_vouch']==1 &&  $this->magic_vars['var']['borrow']['account'] !=  $this->magic_vars['var']['borrow']['vouch_account']): ?>
<script>alert("此标为担保标，担保额度还没满");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>
<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']=''; ;elseif (  $this->magic_vars['var']['borrow']['account']<= $this->magic_vars['var']['borrow']['account_yes']): ?>
<script>alert("此标已满标，不能再进行投标");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>
<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']<=0): ?>
<script>alert("此标正在审核中，或申请失败，不能投标");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>
<? endif; ?>
<div class="wrap950">
	<div class="invest_left">
		<div class="list_invest">
			<div class="title"><div class="title_bg"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_4.gif"  /> 确认借款信息</div></div>
			<div class="content">
				<div class="content_left"  >
					<ul>
					<li><img src="<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = '';$_tmp = $this->magic_vars['var']['user']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder"/></li>
					<li>用 户 名：<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?></li>
					<li>真实姓名<img src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['user']['credit_pic'])) $this->magic_vars['var']['user']['credit_pic'] = ''; echo $this->magic_vars['var']['user']['credit_pic']; ?>" title="<? if (!isset($this->magic_vars['var']['user']['credit_jifen'])) $this->magic_vars['var']['user']['credit_jifen'] = ''; echo $this->magic_vars['var']['user']['credit_jifen']; ?>分"  />：<? if (!isset($this->magic_vars['var']['user']['realname'])) $this->magic_vars['var']['user']['realname'] = ''; echo $this->magic_vars['var']['user']['realname']; ?></li>
					<li>信用积分：</li>
					<li>居住城市: <? if (!isset($this->magic_vars['var']['userinfo']['area'])) $this->magic_vars['var']['userinfo']['area'] = '';$_tmp = $this->magic_vars['var']['userinfo']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
					</ul>
			  </div>
				<div class="content_right" >
				<ul>
					<li>借款标题：<strong><a href="a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html"><? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></a></strong></li>
					<li>借款金额：<strong><font color="#FF0000">￥<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?></font></strong></li>
					<li>借款年利率: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</li>
					<li><div class="floatl">已经完成：</div>
						<div class="rate_bg floatl">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div>
						<span >&nbsp;<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = ''; echo $this->magic_vars['var']['borrow']['scale']; ?>%</span>
					</li>
					<li>还需借款: <font color="#FF0000">￥<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?></font></li>
					<li>借款期限: <? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>个月</li>
					<li>还款方式: <? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></li>
					<li>交易类型: 在线交易</li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="invest_right">
		<div class="list_invest">
			<div class="title"><div class="title_bg"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_4.gif"  /> 确认投标金额</div></div>
			<div class="content">
				<form action="/index.php?user&q=code/borrow/tender" name="form1" onsubmit="return check_form(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)" method="post">
				<ul>
					
					<li>您的帐户总额： <? if (!isset($this->magic_vars['var']['user_account']['total'])) $this->magic_vars['var']['user_account']['total'] = '';$_tmp = $this->magic_vars['var']['user_account']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 元 <a href="/index.php?user&q=code/account/recharge_new" target="_blank"><font color="#FF0000">我要充值</font></a> </li>
					<li>您的可用余额： <? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>  元  </li>
					<li><strong><font color="#FF0000">请填写并确认下面投标金额</font></strong></li>
					<li>最多投标总额：<font color="#FF0000"><? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account']=''; ;if (  $this->magic_vars['var']['borrow']['most_account']<=0): ?>不限制<? else: ?><? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = ''; echo $this->magic_vars['var']['borrow']['most_account']; ?>元<? endif; ?></font> 当前年利率: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</li>
					<li>投标金额：<input type="text" name="money" size="11" onkeyup="value=value.replace(/[^0-9.]/g,'')"> 
 元</li>
					<li>支付密码：<? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><a href="/index.php?user&q=code/user/paypwd" target="_blank"><font color="red">请先设一个支付交易密码</font></a><? else: ?><input type="password" name="paypassword" size="11" /><? endif; ?></li>
					<li>验 证 码：<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /> </li>
					<li><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>" /><input type="image" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/button_invest.gif"  align="absmiddle" /> 注意：点击按钮表示您将确认投标金额并同意支付贷款</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	function check_form(lowest,most,use_money){
		 var frm = document.forms['form1'];
		 var account = frm.elements['money'].value;
		 var valicode = frm.elements['valicode'].value;
		 if (account==""){
		 	alert("投标金额不能为空");
			return false;
		 }else if (account>use_money ){
		 	alert("您的可用余额小于您的投标额，要投标请先充值。");
			return false;
		}else if (account>most && most>0){
		 	alert("投标金额不能大于最大限额"+most+"元");
			return false;
		 }else if(account<lowest && lowest>0){
			 alert("投标金额不能低于最小限额"+lowest+"元");
			return false;
		 }
		  if (valicode==""){
		 	alert("验证码不能为空");
			return false;
		 }
		if(confirm('确定要投标'+account+'元，确定了将不能取消')){
			return true;
		}else{
			return false;
		}
		 
	}
</script>




<? if (!isset($_REQUEST['detail'])) $_REQUEST['detail']=''; ;elseif (  $_REQUEST['detail']=="vouch"): ?>
<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id']='';if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['var']['user']['user_id']== $this->magic_vars['_G']['user_id']): ?>
	<script>alert("不能担保自己的标");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>

<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']=''; ;elseif (  $this->magic_vars['var']['borrow']['account']<= $this->magic_vars['var']['borrow']['account_yes']): ?>
<script>alert("此标已满标，不能再进行投标");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>
<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']<=0): ?>
<script>alert("此标正在审核中，或申请失败，不能投标");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>
<? endif; ?>
<div class="wrap950">
	<div class="invest_left">
		<div class="list_invest">
			<div class="title"><div class="title_bg"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_4.gif"  /> 确认所要担保的借款信息</div></div>
			<div class="content">
				<div class="content_left"  >
					<ul>
					<li><img src="<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = '';$_tmp = $this->magic_vars['var']['user']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder"/></li>
					<li>用 户 名：<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?></li>
					<li>真实姓名：<? if (!isset($this->magic_vars['var']['user']['realname'])) $this->magic_vars['var']['user']['realname'] = ''; echo $this->magic_vars['var']['user']['realname']; ?></li>
					<li>信用积分：<img src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['user']['credit_pic'])) $this->magic_vars['var']['user']['credit_pic'] = ''; echo $this->magic_vars['var']['user']['credit_pic']; ?>" title="<? if (!isset($this->magic_vars['var']['user']['credit_jifen'])) $this->magic_vars['var']['user']['credit_jifen'] = ''; echo $this->magic_vars['var']['user']['credit_jifen']; ?>分"  /></li>
					<li>居住城市: <? if (!isset($this->magic_vars['var']['userinfo']['area'])) $this->magic_vars['var']['userinfo']['area'] = '';$_tmp = $this->magic_vars['var']['userinfo']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
					</ul>
				</div>
				<div class="content_right" >
				<ul>
					<li>借款标题：<strong><a href="a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html"><? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></a></strong></li>
					<li>借款担保金额：<strong><font color="#FF0000">￥<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?></font></strong></li>
					<li>借款年利率: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</li>
					<li> <div class="floatl">担保完成：</div>
						<div class="rate_bg floatl">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['var']['borrow']['vouchscale_width'])) $this->magic_vars['var']['borrow']['vouchscale_width'] = '';$_tmp = $this->magic_vars['var']['borrow']['vouchscale_width'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>px"></div>
						</div>
						<span >&nbsp;<? if (!isset($this->magic_vars['var']['borrow']['vouch_scale'])) $this->magic_vars['var']['borrow']['vouch_scale'] = ''; echo $this->magic_vars['var']['borrow']['vouch_scale']; ?>%</span>
					</li>
					<li>还需担保: <font color="#FF0000">￥<? if (!isset($this->magic_vars['var']['borrow']['vouch_other'])) $this->magic_vars['var']['borrow']['vouch_other'] = ''; echo $this->magic_vars['var']['borrow']['vouch_other']; ?></font></li>
					<li>借款期限: <? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>个月</li>
					<li>还款方式: <? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></li>
					<li>担保奖励类型: <font color="#FF0000">担保金额<? if (!isset($this->magic_vars['var']['borrow']['vouch_award'])) $this->magic_vars['var']['borrow']['vouch_award'] = ''; echo $this->magic_vars['var']['borrow']['vouch_award']; ?>%比例奖励</font></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="invest_right">
		<div class="list_invest">
			<div class="title"><div class="title_bg"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_4.gif"  /> 确认所要担保的额度</div></div>
			<div class="content">
				<form action="/index.php?user&q=code/borrow/vouch" name="form1" onsubmit="return check_form(500,<? if (!isset($this->magic_vars['var']['amount']['tender_vouch'])) $this->magic_vars['var']['amount']['tender_vouch'] = '';$_tmp = $this->magic_vars['var']['amount']['tender_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['amount']['tender_vouch_use'])) $this->magic_vars['var']['amount']['tender_vouch_use'] = '';$_tmp = $this->magic_vars['var']['amount']['tender_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)" method="post">
				<ul>
					
					<li>您的担保总额： <? if (!isset($this->magic_vars['var']['amount']['tender_vouch'])) $this->magic_vars['var']['amount']['tender_vouch'] = '';$_tmp = $this->magic_vars['var']['amount']['tender_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 元 <a href="/index.php?user&q=code/borrow/limitapp&type=tender_vouch" target="_blank"><font color="#FF0000">我要申请</font></a> </li>
					<li>您的可用担保余额： <? if (!isset($this->magic_vars['var']['amount']['tender_vouch_use'])) $this->magic_vars['var']['amount']['tender_vouch_use'] = '';$_tmp = $this->magic_vars['var']['amount']['tender_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>  元  </li>
					<li><strong><font color="#FF0000">请填写并确认下面担保金额</font></strong></li>
					<li>担保额度：<input type="text" name="money" size="11" onkeyup="value=value.replace(/[^0-9]/g,'')" /> 元</li>
					<li>支付密码：<? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><a href="/index.php?user&q=code/user/paypwd" target="_blank"><font color="red">请先设一个支付交易密码</font></a><? else: ?><input type="password" name="paypassword" size="11" /><? endif; ?></li>
					<li>验 证 码：<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /> </li>
					<li>担保说明：<input type="text" name="content" size="36" /> </li>
					<li><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>" /><input type="image" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/button_vouch.gif"  align="absmiddle" /> 注意：点击按钮表示您奖确认担保金额，并同意担保</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	function check_form(lowest,most,use_money){
		 var frm = document.forms['form1'];
		 var account = frm.elements['money'].value;
		 var valicode = frm.elements['valicode'].value;
		 if (account==""){
		 	alert("担保金额不能为空");
			return false;
		 }else if (account>use_money ){
		 	alert("您的可用担保余额小于您的担保额，请先申请。");
			return false;
		 }else if (account>most && most>0){
		 	alert("投标担保金额不能大于最大限额"+most+"元");
			return false;
		 }else if(account<lowest && lowest>0){
			 alert("投标担保金额不能低于最小限额"+lowest+"元");
			return false;
		 }
		 if (valicode==""){
		 	alert("验证码不能为空");
			return false;
		 }
		if(confirm('确定要投标'+account+'元，确定了将不能取消')){
			return true;
		}else{
			return false;
		}
		 
	}
</script>

<? else: ?>

<!--借款内容页 开始-->
<div class="wrap950 invest_content ">
	<div class="title">
		<ul>
			<li class="user"><!--借款内容页 <? if (!isset($this->magic_vars['var']['user']['realname'])) $this->magic_vars['var']['user']['realname'] = ''; echo $this->magic_vars['var']['user']['realname']; ?>开始-->&nbsp;</li>
			<li class="tit" style="width:500px;"><? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?> <? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif"  /><? endif; ?></li>
		</ul>
	</div>
	<div class="content">
		<div class="info">
			<div >
				<a href="/u/<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = ''; echo $this->magic_vars['var']['user']['user_id']; ?>" ><img src="<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = '';$_tmp = $this->magic_vars['var']['user']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder"/></a>
			</div>
			<div class="info_a">
				<ul>
					<li>信用积分:<img src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['user']['credit_pic'])) $this->magic_vars['var']['user']['credit_pic'] = ''; echo $this->magic_vars['var']['user']['credit_pic']; ?>" title="<? if (!isset($this->magic_vars['var']['user']['credit_jifen'])) $this->magic_vars['var']['user']['credit_jifen'] = ''; echo $this->magic_vars['var']['user']['credit_jifen']; ?>"  /> <? if (!isset($this->magic_vars['var']['user']['credit_jifen'])) $this->magic_vars['var']['user']['credit_jifen'] = ''; echo $this->magic_vars['var']['user']['credit_jifen']; ?>分</li>
					<li>用 户 名: <a href="/u/<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = ''; echo $this->magic_vars['var']['user']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?></a></li>
					<li>籍&nbsp;&nbsp; &nbsp;贯:
 <? if (!isset($this->magic_vars['var']['user']['area'])) $this->magic_vars['var']['user']['area'] = '';$_tmp = $this->magic_vars['var']['user']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></li>
					<li>居住城市: <? if (!isset($this->magic_vars['var']['userinfo']['area'])) $this->magic_vars['var']['userinfo']['area'] = '';$_tmp = $this->magic_vars['var']['userinfo']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></li>
					<li>注册时间: <? if (!isset($this->magic_vars['var']['user']['addtime'])) $this->magic_vars['var']['user']['addtime'] = '';$_tmp = $this->magic_vars['var']['user']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></li>
					<!--
					<li>借出信用: 100 </li>
					<li>借入信用: 323</li-->
					<li>认证消息: <div class="credit_pic_card_<? if (!isset($this->magic_vars['var']['user']['real_status'])) $this->magic_vars['var']['user']['real_status'] = '';$_tmp = $this->magic_vars['var']['user']['real_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['real_status'])) $this->magic_vars['var']['user']['real_status']=''; ;if (  $this->magic_vars['var']['user']['real_status']==1): ?>实名已认证<? else: ?>未实名认证<? endif; ?>"></div>
							<div class="credit_pic_phone_<? if (!isset($this->magic_vars['var']['user']['phone_status'])) $this->magic_vars['var']['user']['phone_status']=''; ;if (  $this->magic_vars['var']['user']['phone_status']>=1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user']['phone_status'])) $this->magic_vars['var']['user']['phone_status']=''; ;if (  $this->magic_vars['var']['user']['phone_status']==1): ?>手机已认证<? else: ?>手机未认证<? endif; ?>"></div><div class="credit_pic_email_<? if (!isset($this->magic_vars['var']['user']['email_status'])) $this->magic_vars['var']['user']['email_status'] = '';$_tmp = $this->magic_vars['var']['user']['email_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['email_status'])) $this->magic_vars['var']['user']['email_status']=''; ;if (  $this->magic_vars['var']['user']['email_status']==1): ?>邮箱已认证<? else: ?>邮箱未认证<? endif; ?>"></div>
							 <div class="credit_pic_video_<? if (!isset($this->magic_vars['var']['user']['video_status'])) $this->magic_vars['var']['user']['video_status'] = '';$_tmp = $this->magic_vars['var']['user']['video_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['video_status'])) $this->magic_vars['var']['user']['video_status']=''; ;if (  $this->magic_vars['var']['user']['video_status']==1): ?>视频已认证<? else: ?>视频未认证<? endif; ?>"></div>
							  <div class="credit_pic_vip_<? if (!isset($this->magic_vars['var']['user_cache']['vip_status'])) $this->magic_vars['var']['user_cache']['vip_status']=''; ;if (  $this->magic_vars['var']['user_cache']['vip_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user_cache']['vip_status'])) $this->magic_vars['var']['user_cache']['vip_status']=''; ;if (  $this->magic_vars['var']['user_cache']['vip_status']==1): ?>VIP<? else: ?>普通会员<? endif; ?>"></div>
							  <div class="credit_pic_scene_<? if (!isset($this->magic_vars['var']['user']['scene_status'])) $this->magic_vars['var']['user']['scene_status']=''; ;if (  $this->magic_vars['var']['user']['scene_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user']['scene_status'])) $this->magic_vars['var']['user']['scene_status']=''; ;if (  $this->magic_vars['var']['user']['scene_status']==1): ?>已通过现场认证<? else: ?>未通过现场认证<? endif; ?>"></div>
							  
							  </li>
				</ul>
			</div>
		</div>
		
		<div class="con">
			<div class="con_1">
				<ul>
				<li>借款金额：<font color="#FF0000" size="+2" face="黑体">￥<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?></font> <? if (!isset($this->magic_vars['var']['borrow']['flag'])) $this->magic_vars['var']['borrow']['flag']=''; ;if (  $this->magic_vars['var']['borrow']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif" align="absmiddle" /><? if (!isset($this->magic_vars['var']['borrow']['flag'])) $this->magic_vars['var']['borrow']['flag']=''; ;elseif (   $this->magic_vars['var']['borrow']['flag']==2): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" align="absmiddle"/><? if (!isset($this->magic_vars['var']['borrow']['flag'])) $this->magic_vars['var']['borrow']['flag']=''; ;elseif (   $this->magic_vars['var']['borrow']['flag']==3): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/diya.gif" align="absmiddle"/><? endif; ?> </li>
				<li><span>年 利 率：<? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %</span> <span>借款期限：<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>个月</span></li>
				<li><span>还款方式：<? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></span> <span>交易类型：在线交易</span></li>
				</ul>
			</div>
			<div class="con_2">
			<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']='';if (!isset($this->magic_vars['var']['borrow']['vouch_account'])) $this->magic_vars['var']['borrow']['vouch_account']='';if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1 &&  $this->magic_vars['var']['borrow']['vouch_account']!= $this->magic_vars['var']['borrow']['account']): ?> 
			<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/tender.gif" /> 
			<a href="?detail=vouch"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/onvouch.gif" /></a>
			<? else: ?>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?>
					<? if (!isset($this->magic_vars['var']['borrow']['repayment_account'])) $this->magic_vars['var']['borrow']['repayment_account']='';if (!isset($this->magic_vars['var']['borrow']['repayment_yesaccount'])) $this->magic_vars['var']['borrow']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['borrow']['repayment_account'] ==  $this->magic_vars['var']['borrow']['repayment_yesaccount']): ?>
					<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/tender_achieve.jpg" />
					<? else: ?>
					<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/loan_repayment.jpg" />
					<? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==5): ?>
				用户取消
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']==4): ?>
				<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']=''; ;elseif (  $this->magic_vars['var']['borrow']['account']> $this->magic_vars['var']['borrow']['account_yes']): ?>
				<a href="?detail=true">
				<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/tender.gif" /></a>
				<? else: ?><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/tender_wait.jpg" />
				<? endif; ?>
				<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
					<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/vouchfinish.gif" />
				<? endif; ?>
			<? endif; ?><br /><br />
			
			<font color="#FF0000">投标100元,年利率<? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %，期限￥<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>个月,可获得利息收益￥<? if (!isset($this->magic_vars['var']['borrow']['interest'])) $this->magic_vars['var']['borrow']['interest'] = '';$_tmp = $this->magic_vars['var']['borrow']['interest'];$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?>元</font>

			</div>
			<div class="con_1">
				<ul>
				<li style="overflow:hidden"><div class="floatl">已经完成：</div>
						<div class="rate_bg floatl" style="margin-top:8px;">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div>
						<span >&nbsp;<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = ''; echo $this->magic_vars['var']['borrow']['scale']; ?>%&nbsp;&nbsp;&nbsp; <? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?> <a href="/protocol/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>借款协议书</b></font></a><? else: ?>&nbsp;&nbsp;&nbsp;还差：￥<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?><? endif; ?></span></li>
			<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
			<li style="overflow:hidden"><div class="floatl">担保完成：</div>
						<div class="rate_bg floatl" style="margin-top:8px;">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['var']['borrow']['vouchscale_width'])) $this->magic_vars['var']['borrow']['vouchscale_width'] = '';$_tmp = $this->magic_vars['var']['borrow']['vouchscale_width'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>px"></div>
						</div>
						<span >&nbsp;<? if (!isset($this->magic_vars['var']['borrow']['vouch_scale'])) $this->magic_vars['var']['borrow']['vouch_scale'] = ''; echo $this->magic_vars['var']['borrow']['vouch_scale']; ?>%&nbsp;&nbsp;&nbsp; <? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['vouch_account'])) $this->magic_vars['var']['borrow']['vouch_account']=''; ;if (  $this->magic_vars['var']['borrow']['account']== $this->magic_vars['var']['borrow']['vouch_account']): ?><a href="#vouch_user">查看担保人</a><? else: ?>&nbsp;&nbsp;&nbsp;还差：￥<? if (!isset($this->magic_vars['var']['borrow']['vouch_other'])) $this->magic_vars['var']['borrow']['vouch_other'] = ''; echo $this->magic_vars['var']['borrow']['vouch_other']; ?><? endif; ?></span></li>
			<? else: ?>
			投标的额度是有限的
			<? endif; ?>
				<li >最小投标额：￥<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = ''; echo $this->magic_vars['var']['borrow']['lowest_account']; ?></li>
				<li>总投标数：<? if (!isset($this->magic_vars['var']['borrow']['tender_times'])) $this->magic_vars['var']['borrow']['tender_times'] = ''; echo $this->magic_vars['var']['borrow']['tender_times']; ?>次</li>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?>
					<li><div class="floatl">距离还款时间：</div><span id="endtime"><? if (!isset($this->magic_vars['var']['borrow']['rep_time'])) $this->magic_vars['var']['borrow']['rep_time'] = ''; echo $this->magic_vars['var']['borrow']['rep_time']; ?> </span></li>
				<? else: ?>
				<li><div class="floatl">剩余时间：</div><span id="endtime"><? if (!isset($this->magic_vars['var']['borrow']['lave_time'])) $this->magic_vars['var']['borrow']['lave_time'] = ''; echo $this->magic_vars['var']['borrow']['lave_time']; ?> </span></li>
				<? endif; ?>
				</ul>
			</div>
			<div class="con_3">
			
			</div>
		</div>
		
		<div class="lian">
			<ul> 	
				<li>QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['var']['user']['qq'])) $this->magic_vars['var']['user']['qq'] = ''; echo $this->magic_vars['var']['user']['qq']; ?>&Site=揭阳市金兰芬投资有限公司&Menu=yes" ><img border="0" src="http://wpa.qq.com/pa?p=2:<? if (!isset($this->magic_vars['var']['user']['qq'])) $this->magic_vars['var']['user']['qq'] = ''; echo $this->magic_vars['var']['user']['qq']; ?>:44" alt="点击这里给我发消息" title="点击这里给我发消息" /></a></li>			
				<li>旺旺：<a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<? if (!isset($this->magic_vars['var']['user']['wangwang'])) $this->magic_vars['var']['user']['wangwang'] = ''; echo $this->magic_vars['var']['user']['wangwang']; ?>&site=cnalichn&s=4" ><img border="0" src="http://amos.im.alisoft.com/online.aw?v=2&uid=<? if (!isset($this->magic_vars['var']['user']['wangwang'])) $this->magic_vars['var']['user']['wangwang'] = ''; echo $this->magic_vars['var']['user']['wangwang']; ?>&site=cnalichn&s=4" alt="旺旺联系我" /></a></li>
				<li>邮箱：<a target="_blank" href="mailto:<? if (!isset($this->magic_vars['var']['user']['email'])) $this->magic_vars['var']['user']['email'] = ''; echo $this->magic_vars['var']['user']['email']; ?>"><? if (!isset($this->magic_vars['var']['user']['email'])) $this->magic_vars['var']['user']['email'] = ''; echo $this->magic_vars['var']['user']['email']; ?></a></li>
				<li class="line">客服：<a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['var']['user_cache']['kefu_username'])) $this->magic_vars['var']['user_cache']['kefu_username'] = ''; echo $this->magic_vars['var']['user_cache']['kefu_username']; ?>" target="_blank"><? if (!isset($this->magic_vars['var']['user_cache']['kefu_username'])) $this->magic_vars['var']['user_cache']['kefu_username'] = ''; echo $this->magic_vars['var']['user_cache']['kefu_username']; ?></a></li>
		
				<li style="padding-top:8px;"><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_xin.gif" align="absmiddle" /></a></li>
				<li><a href="javascript:void(0)" onclick='tipsWindown("加为好友","url:get?/index.php?user&q=code/user/addfriend&username=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>",400,230,"true","","true","text");'><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_you.gif" align="absmiddle"  /></a></li>
				<li><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/inBack.gif" align="absmiddle" width="18" height="18" style="margin-top:-2px"  /><a href="/index.php?user&amp;q=code/user/blackfriend&amp;username=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>" style="color:#666666">设为黑名单</a></li>
			</ul>
<br/>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--借款内容页 结束-->

<script type="text/javascript">
var CID = "endtime";
if(window.CID != null){
    var iTime = document.getElementById(CID).innerHTML;
    var Account;
    RemainTime();
}
function RemainTime(){
var iDay,iHour,iMinute,iSecond;
var sDay="",sTime="";
    if (iTime >= 0){
        iDay = parseInt(iTime/24/3600);
        iHour = parseInt((iTime/3600)%24);
        iMinute = parseInt((iTime/60)%60);
        iSecond = parseInt(iTime%60);
  
   if (iDay > 0){ 
    sDay = iDay + "天"; 
   }
   sTime =sDay + iHour + "小时" + iMinute + "分钟" + iSecond + "秒";
  
        if(iTime==0){
           clearTimeout(Account);
           sTime="<span style='color:green'>时间到了！</span>";
        }else{
           Account = setTimeout("RemainTime()",1000);
        }
        iTime=iTime-1;
    }else{
        sTime="<span style='color:red'>此标已过期！</span>";
    }
document.getElementById(CID).innerHTML = sTime;
}
</script>

<!--还款信用 开始-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 还款信用</div>
	<div class="content">
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td width="30%"><? if (!isset($this->magic_vars['var']['borrow_all']['success'])) $this->magic_vars['var']['borrow_all']['success'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 次成功</td>
			  <td width="30%"><? if (!isset($this->magic_vars['var']['borrow_all']['false'])) $this->magic_vars['var']['borrow_all']['false'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['false'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 次流标 </td>
			  <td width="30%"><? if (!isset($this->magic_vars['var']['borrow_all']['wait'])) $this->magic_vars['var']['borrow_all']['wait'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔待还款</td>
			</tr>
			<tr  >
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_advance'])) $this->magic_vars['var']['borrow_all']['pay_advance'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_advance'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔提前还款</td>
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_success'])) $this->magic_vars['var']['borrow_all']['pay_success'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔准时还款  </td>
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expiredyes'])) $this->magic_vars['var']['borrow_all']['pay_expiredyes'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expiredyes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔迟还款 </td>
			</tr>
			<tr  >
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expired30in'])) $this->magic_vars['var']['borrow_all']['pay_expired30in'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expired30in'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔30天之内的逾期还款 </td>
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expired30'])) $this->magic_vars['var']['borrow_all']['pay_expired30'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expired30'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔超过30天的逾期还款</td>
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expiredno'])) $this->magic_vars['var']['borrow_all']['pay_expiredno'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expiredno'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 笔逾期未还款</td>
			</tr>
		</table>
	</div>
</div>
<!--还款信用 结束-->


<!--个人资料 开始-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 个人资料</div>
	<div class="content">
<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td width="30%">性 别：<? if (!isset($this->magic_vars['var']['user']['sex'])) $this->magic_vars['var']['user']['sex']=''; ;if (  $this->magic_vars['var']['user']['sex']==1): ?>男<? else: ?>女<? endif; ?></td>
			  <td width="30%">年 龄：<? if (!isset($this->magic_vars['var']['user']['birthday'])) $this->magic_vars['var']['user']['birthday'] = '';$_tmp = $this->magic_vars['var']['user']['birthday'];$_tmp = $this->magic_modifier("age_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>岁</td>
			  <td width="30%">婚姻状况：<? if (!isset($this->magic_vars['var']['userinfo']['marry'])) $this->magic_vars['var']['userinfo']['marry'] = '';$_tmp = $this->magic_vars['var']['userinfo']['marry'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr  >
			  <td >文化程度：<? if (!isset($this->magic_vars['var']['userinfo']['education'])) $this->magic_vars['var']['userinfo']['education'] = '';$_tmp = $this->magic_vars['var']['userinfo']['education'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?> </td>
			  <td >每月收入： <? if (!isset($this->magic_vars['var']['userinfo']['income'])) $this->magic_vars['var']['userinfo']['income'] = '';$_tmp = $this->magic_vars['var']['userinfo']['income'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>元 </td>
			  <td > 社 保：<? if (!isset($this->magic_vars['var']['userinfo']['shebao'])) $this->magic_vars['var']['userinfo']['shebao'] = '';$_tmp = $this->magic_vars['var']['userinfo']['shebao'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>  </td>
			</tr>
			<tr  >
			  <td >住房条件：<? if (!isset($this->magic_vars['var']['userinfo']['housing'])) $this->magic_vars['var']['userinfo']['housing'] = '';$_tmp = $this->magic_vars['var']['userinfo']['housing'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			  <td >是否购车：<? if (!isset($this->magic_vars['var']['userinfo']['car'])) $this->magic_vars['var']['userinfo']['car'] = '';$_tmp = $this->magic_vars['var']['userinfo']['car'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?> </td>
			  <td >是否逾期：<? if (!isset($this->magic_vars['var']['userinfo']['late'])) $this->magic_vars['var']['userinfo']['late'] = '';$_tmp = $this->magic_vars['var']['userinfo']['late'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			</tr>
		</table>
	</div>
</div>
<!--个人资料 结束-->

<!--个人资料 开始-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 借款详情</div>
	<div class="content">
<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td ><? if (!isset($this->magic_vars['var']['borrow']['content'])) $this->magic_vars['var']['borrow']['content'] = ''; echo $this->magic_vars['var']['borrow']['content']; ?></td>
			  
			</tr>
			
		</table>
	</div>
</div>
<!--个人资料 结束-->
<!--投标奖励 开始-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 投标奖励</div>
	<div class="content">
	<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;if (  $this->magic_vars['var']['borrow']['award']==0): ?>
		<font color="#FF0000" size="3">没有奖励</font>
	<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==1): ?>
	<table  border="0"  cellspacing="0"  width="100%" class="tab1">
		<tr  >
		  <td width="30%">奖励方式：按金额奖励</td>
		  <td width="30%">奖励金额：<? if (!isset($this->magic_vars['var']['borrow']['part_account'])) $this->magic_vars['var']['borrow']['part_account'] = ''; echo $this->magic_vars['var']['borrow']['part_account']; ?>元</td>
		  <td width="30%">奖励条件：<? if (!isset($this->magic_vars['var']['borrow']['is_false'])) $this->magic_vars['var']['borrow']['is_false']=''; ;if (  $this->magic_vars['var']['borrow']['is_false']==1): ?>投标失败也奖励<? else: ?>投标且成功复审通过后才有奖励<? endif; ?></td>
		</tr>
	</table>
	<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==2): ?>
	<table  border="0"  cellspacing="0"  width="100%" class="tab1">
		<tr  >
		  <td width="30%">奖励方式：按比例奖励</td>
		  <td width="30%">奖励比例：<? if (!isset($this->magic_vars['var']['borrow']['funds'])) $this->magic_vars['var']['borrow']['funds'] = ''; echo $this->magic_vars['var']['borrow']['funds']; ?>%</td>
		  <td width="30%">奖励条件：<? if (!isset($this->magic_vars['var']['borrow']['is_false'])) $this->magic_vars['var']['borrow']['is_false']=''; ;if (  $this->magic_vars['var']['borrow']['is_false']==1): ?>投标失败也奖励<? else: ?>投标且成功复审通过后才有奖励<? endif; ?></td>
		</tr>
	</table>
	<? endif; ?>
	</div>
</div>
<!--投标奖励 结束-->

<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
<!--担保奖励 开始-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 担保奖励</div>
	<div class="content">
	<? if (!isset($this->magic_vars['var']['borrow']['vouch_award'])) $this->magic_vars['var']['borrow']['vouch_award']=''; ;if (  $this->magic_vars['var']['borrow']['vouch_award']==""): ?>
		<font color="#FF0000" size="3">没有奖励</font>
		<? else: ?>
	<table  border="0"  cellspacing="0"  width="100%" class="tab1">
		<tr  >
		  <td width="30%">奖励方式：按比例奖励</td>
		  <td width="30%">奖励比例：<? if (!isset($this->magic_vars['var']['borrow']['vouch_award'])) $this->magic_vars['var']['borrow']['vouch_award'] = ''; echo $this->magic_vars['var']['borrow']['vouch_award']; ?>%</td>
		  <td width="30%">指定担保人：<? if (!isset($this->magic_vars['var']['borrow']['vouch_user'])) $this->magic_vars['var']['borrow']['vouch_user'] = ''; echo $this->magic_vars['var']['borrow']['vouch_user']; ?></td>
		</tr>
	</table>
	<? endif; ?>
	</div>
</div>
<!--担保奖励 结束-->


<!--担保记录 开始-->
<a name="vouch_user" ></a>
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 担保记录</div>
	<div class="content">
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr align="center">
			  <td ><strong>担保人</strong> </td>
			  <td ><strong>担保金额</strong></td>
			  <td ><strong>有效金额</strong></td>
			  <td ><strong>担保时间</strong></td>
			  <td ><strong>状态 </strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetVouchList';$data = array('limit'=>'all','var'=>'vat','borrow_id'=>$this->magic_vars['var']['borrow']['id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetVouchList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['vat']):
?>
			<tr  >
			  <td align="center"><a href="/u/<? if (!isset($this->magic_vars['vat']['user_id'])) $this->magic_vars['vat']['user_id'] = ''; echo $this->magic_vars['vat']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['vat']['username'])) $this->magic_vars['vat']['username'] = ''; echo $this->magic_vars['vat']['username']; ?></a></td>
			  <td align="center" ><? if (!isset($this->magic_vars['vat']['vouch_account'])) $this->magic_vars['vat']['vouch_account'] = ''; echo $this->magic_vars['vat']['vouch_account']; ?>元</td>
			  <td align="center" ><? if (!isset($this->magic_vars['vat']['account'])) $this->magic_vars['vat']['account'] = '';$_tmp = $this->magic_vars['vat']['account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元</td>
			  <td align="center"><? if (!isset($this->magic_vars['vat']['addtime'])) $this->magic_vars['vat']['addtime'] = '';$_tmp = $this->magic_vars['vat']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
			  <td align="center"><? if (!isset($this->magic_vars['vat']['vouch_account'])) $this->magic_vars['vat']['vouch_account']='';if (!isset($this->magic_vars['vat']['account'])) $this->magic_vars['vat']['account']=''; ;if (  $this->magic_vars['vat']['vouch_account']== $this->magic_vars['vat']['account']): ?>全部通过<? else: ?>部分通过<? endif; ?></td>
			</tr>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
</div>
<!--担保记录 结束-->
<? endif; ?>


<!--账户详情 开始-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 账户详情</div>
	<div class="content">
	<? $data = array('user_id'=>$this->magic_vars['var']['user']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td >
账户总额： ￥<? if (!isset($this->magic_vars['var']['account']['total'])) $this->magic_vars['var']['account']['total'] = ''; echo $this->magic_vars['var']['account']['total']; ?>
   
</td>
			  <td >待还总额： ￥<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>   </td>
			  <td >负债情况：<? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num']='';if (!isset($this->magic_vars['acc']['success_account'])) $this->magic_vars['acc']['success_account']=''; ;if (  $this->magic_vars['acc']['borrow_num']< $this->magic_vars['acc']['success_account']): ?>借出大于借入<? else: ?>借出小于借入<? endif; ?>  </td>
			</tr>
			<tr  >
			  <td > 借款总额：￥<? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num'] = '';$_tmp = $this->magic_vars['acc']['borrow_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			  <td >已还总额： ￥<? if (!isset($this->magic_vars['acc']['borrow_num1'])) $this->magic_vars['acc']['borrow_num1'] = '';$_tmp = $this->magic_vars['acc']['borrow_num1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> </td>
			  <td >网站垫付未还： ￥<? if (!isset($this->magic_vars['acc']['borrow_num2'])) $this->magic_vars['acc']['borrow_num2'] = '';$_tmp = $this->magic_vars['acc']['borrow_num2'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> </td>
			</tr>
			<tr  >
			  <td > 借出总额：￥<? if (!isset($this->magic_vars['acc']['success_account'])) $this->magic_vars['acc']['success_account'] = '';$_tmp = $this->magic_vars['acc']['success_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			  <td >已收总额： ￥<? if (!isset($this->magic_vars['acc']['collection_yes'])) $this->magic_vars['acc']['collection_yes'] = '';$_tmp = $this->magic_vars['acc']['collection_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			  <td >待收总额： ￥<? if (!isset($this->magic_vars['acc']['collection_wait'])) $this->magic_vars['acc']['collection_wait'] = '';$_tmp = $this->magic_vars['acc']['collection_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>   </td>
			</tr>
			<tr  >
			  <td colspan="1" >借款信用额度： ￥<? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = ''; echo $this->magic_vars['acc']['credit']; ?></td>
			  <td colspan="2" >可用信用额度： ￥<? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = ''; echo $this->magic_vars['acc']['credit_use']; ?></td>
			</tr>
			<tr  >
			  <td colspan="1" >借款担保总额： ￥<? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = ''; echo $this->magic_vars['acc']['borrow_vouch']; ?></td>
			  <td colspan="2" >可用借款担保额度： ￥<? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = ''; echo $this->magic_vars['acc']['borrow_vouch_use']; ?></td>
			</tr>
			<tr  >
			  <td colspan="1" >投资担保总额： ￥<? if (!isset($this->magic_vars['acc']['tender_vouch'])) $this->magic_vars['acc']['tender_vouch'] = ''; echo $this->magic_vars['acc']['tender_vouch']; ?></td>
			  <td colspan="2" >可用投资担保额度： ￥<? if (!isset($this->magic_vars['acc']['tender_vouch_use'])) $this->magic_vars['acc']['tender_vouch_use'] = ''; echo $this->magic_vars['acc']['tender_vouch_use']; ?></td>
			</tr>
		</table>
		<? unset($_magic_vars);unset($data); ?>
	</div>
</div>
<!--账户详情 结束-->


<!--资料审核 开始-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 资料审核</div>
	<div class="content">
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td ><strong>资料类型</strong> </td>
			  <td ><strong>积分</strong></td>
			  <td ><strong>上传时间</strong></td>
			  <td ><strong>审核时间</strong></td>
			  <td ><strong>审核说明</strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'arr_var','limit'=>'all','status'=>'1','user_id'=>$this->magic_vars['var']['user']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/attestation/attestation.class.php');$this->magic_vars['magic_result'] = attestationClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['arr_var']):
?>
			<? if (!isset($this->magic_vars['arr_var']['jifen'])) $this->magic_vars['arr_var']['jifen']=''; ;if (  $this->magic_vars['arr_var']['jifen']>0): ?>
			<tr  > 
			  <td ><? if (!isset($this->magic_vars['arr_var']['type_name'])) $this->magic_vars['arr_var']['type_name'] = ''; echo $this->magic_vars['arr_var']['type_name']; ?></td>
			  <td  ><? if (!isset($this->magic_vars['arr_var']['jifen'])) $this->magic_vars['arr_var']['jifen'] = ''; echo $this->magic_vars['arr_var']['jifen']; ?> 分</td>
			  <td ><? if (!isset($this->magic_vars['arr_var']['addtime'])) $this->magic_vars['arr_var']['addtime'] = '';$_tmp = $this->magic_vars['arr_var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			  <td ><? if (!isset($this->magic_vars['arr_var']['verify_time'])) $this->magic_vars['arr_var']['verify_time'] = '';$_tmp = $this->magic_vars['arr_var']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			  <td ><? if (!isset($this->magic_vars['arr_var']['verify_remark'])) $this->magic_vars['arr_var']['verify_remark'] = '';$_tmp = $this->magic_vars['arr_var']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endif; ?>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
</div>
<!--资料审核 结束-->



<!--还款记录 开始-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 待还款记录(只显示最近待还款的10条记录) >> 更详细的还款明细账单</div>
	<div class="content">
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td ><strong>借款标题</strong> </td>
			  <td ><strong>期数</strong></td>
			  <td ><strong>还款本息</strong></td>
			  <td ><strong>实际到期日期</strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetRepaymentList';$data = array('status'=>'0,2','limit'=>'10','var'=>'vat','order'=>'repayment_time','user_id'=>$this->magic_vars['var']['user']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRepaymentList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['vat']):
?>
			<tr  >
			  <td ><a href="/invest/a<? if (!isset($this->magic_vars['vat']['borrow_id'])) $this->magic_vars['vat']['borrow_id'] = ''; echo $this->magic_vars['vat']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['vat']['borrow_name'])) $this->magic_vars['vat']['borrow_name'] = ''; echo $this->magic_vars['vat']['borrow_name']; ?></a></td> 
			  <td ><? if (!isset($this->magic_vars['vat']['order'])) $this->magic_vars['vat']['order'] = ''; echo $this->magic_vars['vat']['order']+1; ?>/<? if (!isset($this->magic_vars['vat']['time_limit'])) $this->magic_vars['vat']['time_limit'] = ''; echo $this->magic_vars['vat']['time_limit']; ?></td>
			  <td >￥<? if (!isset($this->magic_vars['vat']['repayment_account'])) $this->magic_vars['vat']['repayment_account'] = ''; echo $this->magic_vars['vat']['repayment_account']; ?></td>
			  <td ><? if (!isset($this->magic_vars['vat']['repayment_time'])) $this->magic_vars['vat']['repayment_time'] = '';$_tmp = $this->magic_vars['vat']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
</div>
<!--还款记录 结束-->


<!--投标记录 开始-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 投标记录</div>
	<div class="content">
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr align="center">
			  <td ><strong>投标人/关系</strong> </td>
			  <td ><strong>当前年利率</strong></td>
			  <td ><strong>投标金额</strong></td>
			  <td ><strong>有效金额</strong></td>
			  <td ><strong>投标时间</strong></td>
			  <td ><strong>状态 </strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetTenderList';$data = array('limit'=>'all','var'=>'vat','borrow_id'=>$this->magic_vars['var']['borrow']['id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['vat']):
?>
			<tr  >
			  <td align="center"><a href="/u/<? if (!isset($this->magic_vars['vat']['user_id'])) $this->magic_vars['vat']['user_id'] = ''; echo $this->magic_vars['vat']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['vat']['username'])) $this->magic_vars['vat']['username'] = ''; echo $this->magic_vars['vat']['username']; ?></a></td>
			  <td align="center" ><? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</td>
			  <td align="center" ><? if (!isset($this->magic_vars['vat']['money'])) $this->magic_vars['vat']['money'] = ''; echo $this->magic_vars['vat']['money']; ?>元</td>
			  <td align="center" ><? if (!isset($this->magic_vars['vat']['tender_account'])) $this->magic_vars['vat']['tender_account'] = '';$_tmp = $this->magic_vars['vat']['tender_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元</td>
			  <td align="center"><? if (!isset($this->magic_vars['vat']['addtime'])) $this->magic_vars['vat']['addtime'] = '';$_tmp = $this->magic_vars['vat']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
			  <td align="center"><? if (!isset($this->magic_vars['vat']['tender_account'])) $this->magic_vars['vat']['tender_account']='';if (!isset($this->magic_vars['vat']['money'])) $this->magic_vars['vat']['money']=''; ;if (  $this->magic_vars['vat']['tender_account']== $this->magic_vars['vat']['money']): ?>全部通过<? else: ?>部分通过<? endif; ?></td>
			</tr>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
</div>
<!--投标记录 结束-->
<br />

<div class="wrap950">
<!--评论开始-->
				<script src="/index.php?comment&type=list&code=<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1&epage=3"></script>
			<div class="content_title mar10">
				<span class="floatr">总评论数：<font color="#FF0000"><script>document.write(result['total'])</script></font> 个 <a href="/index.php?comment&type=lists&code=borrow&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1" target="_blank">查看所有评论</a></span><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pinglun.gif" align="absmiddle"/>&nbsp; 评论
			</div>
			<div class="article_content " align="left">
				<ul class="pinglun_co" >
				
				<script>
					var list = result['list'];
					var display = "";
					for (i=0;i<list.length;i++){
						display += '<li><div class="pinglun_co_left"><div class="pinglun_co_pic"><img src="'+list[i]['litpic']+'" width="73" height="73" /></div><a href="/u/'+list[i]['user_id']+'" target=_blank>'+list[i]['username']+'</a></div><div class="floatr"><div class="pinglun_co_content">'+list[i]['comment']+'<br><font style=" font-size:12px; float:right">'+list[i]['time']+'</font></div>	</div></li>';
					}
					document.write(display);
				</script>
				
				</ul>
				<div class="comment_page"></div>
				<div class="content_pinglun" align="left" style="width:95%">
					<div><strong>评论一下</strong></div>
				  	<div ><textarea  rows="6" id="comment_content" name="comment" style="width:890px;"></textarea></div>
					<div><span class="floatr"><input type="image" id="pinglun" onclick="pinglun('<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>','<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>')" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pinglun_content.gif" /></span>验证码：<input type="text" id="valicode" size="10" /> <img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /></div>
					
				</div>
			</div>
			<script type="text/javascript">
			function nl2br(value) 
{ 
  return value.replace("\n","<br />"); 
}
				function pinglun(code,id) {
						var comment =nl2br($("#comment_content").val());
						var valicode = $("#valicode").val();
						if (comment==""){
							alert("评论不能为空");
						}else{
						tipsWindown("评论","url:get?/index.php?comment&type=add&code="+code+"&id="+id+"&comment="+comment+"&valicode="+valicode,300,130,"false","","false","text")
						}
					};
				function comment_close() {
					$("#windownbg").remove();
					$("#windown-box").fadeOut("slow",function(){$(this).remove();});
				};
			 	
		 </script>
			
			
			<!--评论结束-->
</div>


<? endif; ?>

<? unset($_magic_vars);unset($data); ?>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>