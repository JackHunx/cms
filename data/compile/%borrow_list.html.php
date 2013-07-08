
<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
<script>
	alert("你还没有登录，请先登录");
	location.href='/index.php?user&q=action/login';
</script>
<? endif; ?>
<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']!=1): ?>
<script>
	alert("你还没通过实名认证，还不能发借款标");
	location.href='/index.php?user&q=code/user/realname';
</script>
<? endif; ?>
<? if (!isset($this->magic_vars['_G']['user_result']['credit'])) $this->magic_vars['_G']['user_result']['credit']=''; ;if (  $this->magic_vars['_G']['user_result']['credit'] < 30): ?>
<script>
alert("您的信用积分还未到30分，请先上传资料认证");
location.href="/index.php?user&q=code/user/realname";
</script>

<? endif; ?>

<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

<? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($_REQUEST['article_id'])) $_REQUEST['article_id']=''; ;if (  $_REQUEST['type']=="" &&  $_REQUEST['article_id']==""): ?>

<div class="wrap950 list_1">
	<div class="borrow_box">
		<div><strong>发布按月借款</strong></div>
		<div>按等额本息法进行计算</div>
		<div align="center"><a href="/publish/index.html?type=month"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/borrow_yue.jpg" align=""/></a></div>
	</div>
	
	<div class="borrow_box">
		<div><strong>发布按季借款</strong></div>
		<div>按等额本息法进行计算</div>
		<div align="center"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/borrow_ji.jpg" align=""/></div>
	</div>
	
	<div class="borrow_box">
		<div><strong>发布担保借款</strong></div>
		<div>按等额本息法进行计算</div>
		<div align="center"><a href="/publish/index.html?type=vouch"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/borrow_danbao.jpg" align=""/></a></div>
	</div>
</div>
<? else: ?>
	<? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="vouch"): ?>
	<!--
	<? if (!isset($this->magic_vars['_G']['user_result']['borrow_vouch'])) $this->magic_vars['_G']['user_result']['borrow_vouch']=''; ;if (  $this->magic_vars['_G']['user_result']['borrow_vouch']==0): ?>
	<script>
		alert("你没有权限发担保标，请跟客服联系");
		location.href='/borrow/index.html';
	</script>
	<? endif; ?>
	-->
	<? endif; ?>
	
<? $data = array('article_id'=>isset($_REQUEST['article_id'])?$_REQUEST['article_id']:'','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id'],'id'=>isset($_REQUEST['article_id'])?$_REQUEST['article_id']:'');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetOnes($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
<!--子栏目 开始-->
<div class="wrap950 header_site_sub">
	<? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $_REQUEST['type']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?>
	<a><font color="#FF0000">您正在借的是担保标，担保标将先由有担保额度的用户进行担保，等担保额度满了自动会进行投标</font></a>
	<? else: ?>
	<? endif; ?>
</div>
<!--子栏目 结束-->
<form name="form1" method="post" action="/index.php?user&q=code/borrow/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id']=''; ;if (  $this->magic_vars['var']['user_id']==""): ?>add<? else: ?>update<? endif; ?>"  enctype="multipart/form-data" onsubmit="return check_form();" >
<!--借款信息 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> 借款信息：</div>
	<div class="content">
		<div class="module_border">
			<div class="w">借款信息：</div>
			<div class="c">
				<? $result = $this->magic_vars['_G']['_linkage']['borrow_use']; echo "<select name='use' id=use >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['use']==$val['id'] ) { echo "<option value='{$val['id']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['id']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
			</div>
			<div class="sco" >说明借款成功后的具体用途。</div>
		</div>
		
		<div class="module_border">
			<div class="w">借款期限：</div>
			<div class="c">
			<? $result = $this->magic_vars['_G']['_linkage']['borrow_time_limit']; echo "<select name='time_limit' id=time_limit >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['time_limit']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
				
			</div>
			<div class="sco" >借款成功后,打算以几个月的时间来还清贷款。</div>
		</div>
		
		<div class="module_border">
			<div class="w">还款方式：</div>
			<div class="c">
				<? $result = $this->magic_vars['_G']['_linkage']['borrow_style']; echo "<select name='style' id=style >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['style']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
			</div>
			<div class="sco" >按月分期还款是指贷款者借款成功后，每月还本息。</div>
		</div>
		
		<div class="module_border">
			<div class="w">借贷总金额：</div>
			<div class="c">
					<input type="text" name="account"  id="account" value="<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>" onkeyup="value=value.replace(/[^0-9]/g,'')" /> 
			</div>
			<div class="sco" >借款金额应在500元至50,000元之间。交易币种均为人民币。借款成功后, 借款2个月 ,收取当前借款金额<? if (!isset($this->magic_vars['_G']['system']['con_borrow_fee'])) $this->magic_vars['_G']['system']['con_borrow_fee'] = ''; echo $this->magic_vars['_G']['system']['con_borrow_fee']*100; ?>%的管理费,借款三个月以上的每月增加0.2%管理费,冻结10%作为保证金,正常还款完后,网站解冻10%的保证金。</div>
		</div>
		
		<div class="module_border">
			<div class="w">年利率：</div>
			<div class="c">
				<input type="text" name="apr" value="<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>" onkeyup="value=value.replace(/[^0-9.]/g,'')" /> % 
			</div>
			<div class="sco" >1～6个月，借款标利率上限邮现行22.4%调整至23.24%，超过6个月～12个月借款标利率上限由现行24.24%调至25.24%
</div>
		</div>
		
		<div class="module_border">
			<div class="w">最低投标金额：</div>
			<div class="c">
				
					<? $result = $this->magic_vars['_G']['_linkage']['borrow_lowest_account']; echo "<select name='lowest_account' id=lowest_account >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['lowest_account']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
			</div>
			<div class="sco" >允许投资者对一个借款标的投标总额的限制</div>
		</div>
		
		<div class="module_border">
			<div class="w">最多投标总额：</div>
			<div class="c">
			<? $result = $this->magic_vars['_G']['_linkage']['borrow_most_account']; echo "<select name='most_account' id=most_account >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['most_account']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
			</div>
			<div class="sco" >允许投资者对一个借款标的投标总额的限制</div>
		</div>
		
		<div class="module_border">
			<div class="w">有效时间：</div>
			<div class="c">
			<? $result = $this->magic_vars['_G']['_linkage']['borrow_valid_time']; echo "<select name='valid_time' id=valid_time >"; if ($result!=''): foreach ($result as $key => $val): if ($this->magic_vars['var']['valid_time']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>
			</div>
			<div class="sco" >设置此次借款融资的天数。融资进度达到100%后直接进行网站的复审</div>
		</div>
		
	</div>
	<div class="foot"></div>
</div>
<!--借款信息 结束-->


<!--投标奖励 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> 投标奖励：</div>
	<div class="content">
		<div class="module_border">
			<div class="w"><input type="radio" name="award" id="award" value="0" <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']='';if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==0 ||  $this->magic_vars['var']['award']==""): ?> checked="checked"<? endif; ?> onclick="change_j(0)">不设置奖励</div>
			<div class="c">
			</div>
			<div class="sco" >如果您设置了奖励金额，将会冻结您帐户中相应的账户余额。如果要设置奖励，请确保您的帐户有足够 的账户余额。 </div>
		</div>
		
		<div class="module_border">
			<div class="w"><input type="radio" name="award" id="award" value="1" <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1): ?> checked="checked"<? endif; ?> onclick="change_j(1)"/>按固定金额分摊奖励：</div>
			<div class="c">
				<input type="text" name="part_account" value="<? if (!isset($this->magic_vars['var']['part_account'])) $this->magic_vars['var']['part_account'] = ''; echo $this->magic_vars['var']['part_account']; ?>" size="5" <? if (!isset($this->magic_vars['var']['part_account'])) $this->magic_vars['var']['part_account']=''; ;if (  $this->magic_vars['var']['part_account']==""): ?>disabled="disabled"<? endif; ?>/>元
			</div>
			<div class="sco" >不能低于5元,不能高于总标的金额的2%，且请保留到“元”为单位。这里设置本次标的要奖励给所有投标用户的总金额。 </div>
		</div>
		
		<div class="module_border">
			<div class="w"><input type="radio" name="award" id="award" value="2" <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==2): ?> checked="checked"<? endif; ?> onclick="change_j(2)"/>按投标金额比例奖励：</div>
			<div class="c">
				<input type="text" name="funds" value="<? if (!isset($this->magic_vars['var']['funds'])) $this->magic_vars['var']['funds'] = ''; echo $this->magic_vars['var']['funds']; ?>" size="5" <? if (!isset($this->magic_vars['var']['funds'])) $this->magic_vars['var']['funds']=''; ;if (  $this->magic_vars['var']['funds']==""): ?>disabled="disabled"<? endif; ?>/>%  
			</div>
			<div class="sco" >范围：0.1%~6% ，这里设置本次标的要奖励给所有投标用户的奖励比例。</div>
		</div>
		
		<div class="module_border">
			<div class="w"><input type="checkbox" name="is_false" value="1" <? if (!isset($this->magic_vars['var']['is_false'])) $this->magic_vars['var']['is_false']=''; ;if (  $this->magic_vars['var']['is_false']==1): ?> checked="checked"<? endif; ?>  <? if (!isset($this->magic_vars['var']['is_false'])) $this->magic_vars['var']['is_false']=''; ;if (  $this->magic_vars['var']['is_false']!=1): ?>disabled="disabled"<? endif; ?>/>标的失败时也同样奖励：</div>
			<div class="c">
				  
			</div>
			<div class="sco" >如果您勾选了此选项，到期未满标或复审失败时同样会奖励给投标用户。如果没有勾选，标的失败时会把奖励金额解冻回账户余额。 </div>
		</div>
	
	</div>
	<div class="foot"></div>
</div>
<!--投标奖励 结束-->

<? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $_REQUEST['type']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?>

<!--担保奖励 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> 担保奖励：</div>
	<div class="content">
		<div class="module_border">
			<div class="w">担保比例：</div>
			<div class="c">
			<input name="vouch_award" type="text" value="<? if (!isset($this->magic_vars['var']['vouch_award'])) $this->magic_vars['var']['vouch_award'] = ''; echo $this->magic_vars['var']['vouch_award']; ?>" size="6" />%
			</div>
			<div class="sco" >担保奖励按照所要借款的百分比给担保人，比如借100，奖励是3%，担保人借出50，则奖励50*3%=1.5</div>
		</div>
		<div class="module_border">
			<div class="w">指定担保人：</div>
			<div class="c">
			<input name="vouch_user" type="text" value="<? if (!isset($this->magic_vars['var']['vouch_user'])) $this->magic_vars['var']['vouch_user'] = ''; echo $this->magic_vars['var']['vouch_user']; ?>" /><input name="is_vouch" type="hidden" value="1" />
			</div>
			<div class="sco" >指定多个担保人请用|隔开，为空表示所有人都可以担保</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--担保奖励 结束-->
<? endif; ?>

<!--帐户信息公开设置 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> 帐户信息公开设置：</div>
	<div class="content">
		<div class="module_border">
			<div class="w">公开我的帐户资金情况<input type="checkbox" name="open_account" value="1" checked="checked" disabled="disabled"/> </div>
			<div class="sco" >如果您勾上此选项，将会实时公开您帐户的：账户总额、可用余额、冻结总额。 </div>
		</div>
		
		<div class="module_border">
			<div class="w">公开我的借款资金情况<input type="checkbox" name="open_borrow" value="1" checked="checked" disabled="disabled"/></div>
			<div class="sco" >如果您勾上此选项，将会实时公开您帐户的：借款总额、已还款总额、未还款总额、迟还总额、逾期总额。</div>
		</div>
		
		<div class="module_border">
			<div class="w">公开我的投标资金情况<input type="checkbox" name="open_tender" value="1" <? if (!isset($this->magic_vars['var']['open_tender'])) $this->magic_vars['var']['open_tender']=''; ;if (  $this->magic_vars['var']['open_tender']==1): ?> checked="checked"<? endif; ?>/></div>
			<div class="sco" >如果您勾上此选项，将会实时公开您帐户的：投标总额、已收回总额、待收回总额。</div>
		</div>
		
		<div class="module_border">
			<div class="w">
				公开我的信用额度情况 <input type="checkbox" name="open_credit" value="1" checked="checked" disabled="disabled"/></div>
			
			<div class="sco" >如果您勾上此选项，将会实时公开您帐户的：最低信用额度、最高信用额度。 </div>
		</div>
	
	</div>
	<div class="foot"></div>
</div>
<!--帐户信息公开设置 结束-->

<!--帐户信息公开设置 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> 投标的详细说明：</div>
	<div class="content">
		<div class="module_border">
			<div class="w">标题：</div>
			<div>
				<input type="text" name="name" value="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" size="50" /> 
			</div>
			<div class="sco" >填写借款的标题，写好一点能借的几率也大一点</div>
		</div>
		
		<div class="module_border">
			<div class="w">信息：</div>
			<div >
				<textarea name="content" id="content" style="display:none;"><? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content']=''; ;if (  $this->magic_vars['var']['content']!=""): ?><? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?><? else: ?><P>借款详情： </P>
<P>&nbsp;</P>
<P></P>
<P>我的每月收入明细：</P>
<P>　　　　每月收入：<FONT color=#ff6600>￥0</FONT><BR>　　　　配偶收入：<FONT color=#ff6600>￥0</FONT><BR>　　　　其它收入：<FONT color=#ff6600>￥0</FONT></P>
<P><FONT color=#ff6600></FONT><BR>&nbsp;</P>
<P>我的每月支出明细</P>
<P>　　　　房屋,住宿：<FONT color=#ff6600>￥0</FONT><BR>　　　　保险,汽车：<FONT color=#ff6600>￥0</FONT><BR>　　　　食品：<FONT color=#ff6600>￥0</FONT><BR>　　　　电话、手机、网络：<FONT color=#ff6600>￥0</FONT><BR>　　　　其他开销：<FONT color=#ff6600>￥0</FONT></P>
<P><FONT color=#ff6600></FONT><BR>&nbsp;</P>
<P>其它地方借款：</P>
<P>　　　　借款机构：<FONT color=#ff6600>银行贷款</FONT><BR>　　　　借款总额：<FONT color=#ff6600>￥0</FONT>(已还款总额:<FONT color=#ff6600>￥0</FONT>待还款总额:<FONT color=#ff6600>￥0</FONT>)<BR>　　　　是否有过逾期还款：<FONT color=#ff6600>无</FONT>(逾期次数:<FONT color=#ff6600>0</FONT>次)</P>
<P><BR>&nbsp;</P>
<P>站内关联用户名：</P>
<P>还款保障：</P><? endif; ?></textarea>
				<iframe src="/plugins/editor/sinaeditor/editor.htm?id=content&ReadCookie=0" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" width="640" height="460"></iframe>
			</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--帐户信息公开设置 结束-->
<!--帐户信息公开设置 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> 提交：</div>
	<div class="content">
		<input type="hidden" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" name="id" />
		<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		<input type="submit" value="确认提交" name="submit" /> <input type="submit" value="保存草稿"  name="submit" />
	</div>
	<div class="foot"></div>
</div>
</form>
<? unset($_magic_vars);unset($data); ?>
<script>
<? $data = array('user_id'=>'0','var'=>'acc','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
	<? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $_REQUEST['type']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?>
	alert("你的借款担保额度为<? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = ''; echo $this->magic_vars['acc']['borrow_vouch']; ?>元,你还能借<? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = ''; echo $this->magic_vars['acc']['borrow_vouch_use']; ?>元");
	var max_account = <? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = ''; echo $this->magic_vars['acc']['borrow_vouch_use']; ?>;
	<? else: ?>
	alert("你的借款信用额度为<? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = ''; echo $this->magic_vars['acc']['credit']; ?>元,你还能借<? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = ''; echo $this->magic_vars['acc']['credit_use']; ?>元");
	var max_account = <? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = ''; echo $this->magic_vars['acc']['credit_use']; ?>;
	<? endif; ?>
<? unset($_magic_vars);unset($data); ?>
var max_fax =<? if (!isset($this->magic_vars['_G']['system']['con_max_fee'])) $this->magic_vars['_G']['system']['con_max_fee'] = '';$_tmp = $this->magic_vars['_G']['system']['con_max_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"20");echo $_tmp;unset($_tmp); ?>;
var max_apr =<? if (!isset($this->magic_vars['_G']['system']['con_borrow_apr'])) $this->magic_vars['_G']['system']['con_borrow_apr'] = '';$_tmp = $this->magic_vars['_G']['system']['con_borrow_apr'];$_tmp = $this->magic_modifier("default",$_tmp,"22.18");echo $_tmp;unset($_tmp); ?>;



function check_form(){
	var frm = document.forms['form1'];
	 var account = frm.elements['account'].value;
	 var title = frm.elements['name'].value;
	 var style = frm.elements['style'].value;
	 var content = frm.elements['content'].value;
	 var time_limit = frm.elements['time_limit'].value;
	 var award = get_award_value();
	 var part_account = frm.elements['part_account'].value;
	 var funds = frm.elements['funds'].value;
	 var apr = frm.elements['apr'].value;
	 var valicode = frm.elements['valicode'].value;
	 var most_account = frm.elements['most_account'].value;
	 var use = frm.elements['most_account'].value;
	 var lowest_account = frm.elements['lowest_account'].value;
	
	 var errorMsg = '';
	  if (account.length == 0 ) {
		errorMsg += '- 总金额不能为空' + '\n';
	  }
	  if (account<500 || account>50000) {
		errorMsg += '- 借款金额不能小于500且不能大于50000' + '\n';
	  }
	  
	  if (account>max_account) {
		errorMsg += '- 你申请的额度为'+account+',你的可用额度为'+max_account+',请不要超过此可用额度\n';
	  }
	  if (apr.length == 0 ) {
		errorMsg += '- 利率不能为空' + '\n';
	  }
	  
	  if (time_limit >=1 && time_limit<=6 && apr>23.24) {
		errorMsg += '- 1至6个月的年利率不能超过23.24%' + '\n';
	  }else if (time_limit >6  && apr>25.24) {
		errorMsg += '- 6至12个月的年利率不能超过'+max_fax+'%' + '\n';
	  }
	  
	  if (apr<0 ||apr>max_apr) {
		errorMsg += '- 利率不能大于'+max_apr+'%' + '\n';
	  }
	  
	  if (award==1 && (part_account=="" || part_account<5 || part_account>account*0.02)) {
		errorMsg += '- 固定金额分摊奖励不能低于5元,不能高于总标的金额的2%' + '\n';
	  }
	  if (award==2 && (funds =="" || funds<0.1 || funds>6)) {
		errorMsg += '- 投标金额比例奖励0.1%~6% ' + '\n';
	  }
	  if (most_account!=0 && parseInt(most_account)<parseInt(lowest_account)){
		  errorMsg += '- 投标最大金额不能小于最小金额' + '\n';
	  }
	  if (title.length == 0 ) {
		errorMsg += '- 标题不能为空' + '\n';
	  }
	  if (content.length == 0 ) {
		errorMsg += '- 内容不能为空' + '\n';
	  }
	  if (valicode.length == 0 ) {
		errorMsg += '- 验证码不能为空' + '\n';
	  }
	
	var awa = "";
			for(var i=0;i<form1.award.length;i++){   
			   if(form1.award[i].checked){
				 awa =  form1.award[i].value;
				}
			} 
	if(awa==1){
		if (part_account==""){
			errorMsg += '- 固定分摊比例奖励不能为空 ' + '\n';
		}
	}
	if(awa==2){
		if (funds==""){
			errorMsg += '- 投标金额比例奖励不能为空 ' + '\n';
		}
	}
	
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }

}
function get_award_value()
{
    var form1 = document.forms['form1'];
    
    for (i=0; i<form1.award.length; i++)    {
        if (form1.award[i].checked)
        {
           return form1.award[i].value;
        }
    }
}
function change_j(type){
	var frm = document.forms['form1'];
	if (type==0){
		frm.elements['part_account'].disabled = "disabled";
		frm.elements['funds'].disabled = "disabled";
		frm.elements['is_false'].disabled = "disabled";
	}else if (type==1){
		frm.elements['part_account'].disabled = "";
		frm.elements['funds'].disabled = "disabled";
		frm.elements['is_false'].disabled = "";
	}else if (type==2){
		frm.elements['part_account'].disabled = "disabled";
		frm.elements['funds'].disabled = "";
		frm.elements['is_false'].disabled = "";
	}
}	
</script>


<? endif; ?>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>