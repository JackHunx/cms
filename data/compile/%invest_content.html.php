<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
	<script>alert("�㻹û�е�¼�����ȵ�¼�ٲ鿴");location.href='/index.php?user';</script>
<? endif; ?>
<? $data = array('article_id'=>'0','id'=>$this->magic_vars['_G']['article_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetInvest($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>

<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id']=''; ;if (  $this->magic_vars['var']['user']['user_id']==""): ?>
<script>alert("���Ĳ�������");location.href='/index.php?user';</script>
<? endif; ?>

<? if (!isset($_REQUEST['detail'])) $_REQUEST['detail']=''; ;if (  $_REQUEST['detail']=="true"): ?>
<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id']='';if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['var']['user']['user_id']== $this->magic_vars['_G']['user_id']): ?>
	<script>alert("����Ͷ�Լ��ı�");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>

<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']='';if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['vouch_account'])) $this->magic_vars['var']['borrow']['vouch_account']=''; ;elseif (  $this->magic_vars['var']['borrow']['is_vouch']==1 &&  $this->magic_vars['var']['borrow']['account'] !=  $this->magic_vars['var']['borrow']['vouch_account']): ?>
<script>alert("�˱�Ϊ�����꣬������Ȼ�û��");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>
<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']=''; ;elseif (  $this->magic_vars['var']['borrow']['account']<= $this->magic_vars['var']['borrow']['account_yes']): ?>
<script>alert("�˱������꣬�����ٽ���Ͷ��");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>
<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']<=0): ?>
<script>alert("�˱���������У�������ʧ�ܣ�����Ͷ��");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>
<? endif; ?>
<div class="wrap950">
	<div class="invest_left">
		<div class="list_invest">
			<div class="title"><div class="title_bg"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_4.gif"  /> ȷ�Ͻ����Ϣ</div></div>
			<div class="content">
				<div class="content_left"  >
					<ul>
					<li><img src="<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = '';$_tmp = $this->magic_vars['var']['user']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder"/></li>
					<li>�� �� ����<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?></li>
					<li>��ʵ����<img src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['user']['credit_pic'])) $this->magic_vars['var']['user']['credit_pic'] = ''; echo $this->magic_vars['var']['user']['credit_pic']; ?>" title="<? if (!isset($this->magic_vars['var']['user']['credit_jifen'])) $this->magic_vars['var']['user']['credit_jifen'] = ''; echo $this->magic_vars['var']['user']['credit_jifen']; ?>��"  />��<? if (!isset($this->magic_vars['var']['user']['realname'])) $this->magic_vars['var']['user']['realname'] = ''; echo $this->magic_vars['var']['user']['realname']; ?></li>
					<li>���û��֣�</li>
					<li>��ס����: <? if (!isset($this->magic_vars['var']['userinfo']['area'])) $this->magic_vars['var']['userinfo']['area'] = '';$_tmp = $this->magic_vars['var']['userinfo']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
					</ul>
			  </div>
				<div class="content_right" >
				<ul>
					<li>�����⣺<strong><a href="a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html"><? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></a></strong></li>
					<li>����<strong><font color="#FF0000">��<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?></font></strong></li>
					<li>���������: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</li>
					<li><div class="floatl">�Ѿ���ɣ�</div>
						<div class="rate_bg floatl">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div>
						<span >&nbsp;<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = ''; echo $this->magic_vars['var']['borrow']['scale']; ?>%</span>
					</li>
					<li>������: <font color="#FF0000">��<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?></font></li>
					<li>�������: <? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>����</li>
					<li>���ʽ: <? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></li>
					<li>��������: ���߽���</li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="invest_right">
		<div class="list_invest">
			<div class="title"><div class="title_bg"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_4.gif"  /> ȷ��Ͷ����</div></div>
			<div class="content">
				<form action="/index.php?user&q=code/borrow/tender" name="form1" onsubmit="return check_form(<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['lowest_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = '';$_tmp = $this->magic_vars['var']['borrow']['most_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)" method="post">
				<ul>
					
					<li>�����ʻ��ܶ <? if (!isset($this->magic_vars['var']['user_account']['total'])) $this->magic_vars['var']['user_account']['total'] = '';$_tmp = $this->magic_vars['var']['user_account']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> Ԫ <a href="/index.php?user&q=code/account/recharge_new" target="_blank"><font color="#FF0000">��Ҫ��ֵ</font></a> </li>
					<li>���Ŀ����� <? if (!isset($this->magic_vars['var']['user_account']['use_money'])) $this->magic_vars['var']['user_account']['use_money'] = '';$_tmp = $this->magic_vars['var']['user_account']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>  Ԫ  </li>
					<li><strong><font color="#FF0000">����д��ȷ������Ͷ����</font></strong></li>
					<li>���Ͷ���ܶ<font color="#FF0000"><? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account']=''; ;if (  $this->magic_vars['var']['borrow']['most_account']<=0): ?>������<? else: ?><? if (!isset($this->magic_vars['var']['borrow']['most_account'])) $this->magic_vars['var']['borrow']['most_account'] = ''; echo $this->magic_vars['var']['borrow']['most_account']; ?>Ԫ<? endif; ?></font> ��ǰ������: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</li>
					<li>Ͷ���<input type="text" name="money" size="11" onkeyup="value=value.replace(/[^0-9.]/g,'')"> 
 Ԫ</li>
					<li>֧�����룺<? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><a href="/index.php?user&q=code/user/paypwd" target="_blank"><font color="red">������һ��֧����������</font></a><? else: ?><input type="password" name="paypassword" size="11" /><? endif; ?></li>
					<li>�� ֤ �룺<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /> </li>
					<li><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>" /><input type="image" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/button_invest.gif"  align="absmiddle" /> ע�⣺�����ť��ʾ����ȷ��Ͷ���ͬ��֧������</li>
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
		 	alert("Ͷ�����Ϊ��");
			return false;
		 }else if (account>use_money ){
		 	alert("���Ŀ������С������Ͷ��ҪͶ�����ȳ�ֵ��");
			return false;
		}else if (account>most && most>0){
		 	alert("Ͷ����ܴ�������޶�"+most+"Ԫ");
			return false;
		 }else if(account<lowest && lowest>0){
			 alert("Ͷ����ܵ�����С�޶�"+lowest+"Ԫ");
			return false;
		 }
		  if (valicode==""){
		 	alert("��֤�벻��Ϊ��");
			return false;
		 }
		if(confirm('ȷ��ҪͶ��'+account+'Ԫ��ȷ���˽�����ȡ��')){
			return true;
		}else{
			return false;
		}
		 
	}
</script>




<? if (!isset($_REQUEST['detail'])) $_REQUEST['detail']=''; ;elseif (  $_REQUEST['detail']=="vouch"): ?>
<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id']='';if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['var']['user']['user_id']== $this->magic_vars['_G']['user_id']): ?>
	<script>alert("���ܵ����Լ��ı�");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>

<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['account_yes'])) $this->magic_vars['var']['borrow']['account_yes']=''; ;elseif (  $this->magic_vars['var']['borrow']['account']<= $this->magic_vars['var']['borrow']['account_yes']): ?>
<script>alert("�˱������꣬�����ٽ���Ͷ��");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>
<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;elseif (  $this->magic_vars['var']['borrow']['status']<=0): ?>
<script>alert("�˱���������У�������ʧ�ܣ�����Ͷ��");location.href='/invest/a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html';</script>
<? endif; ?>
<div class="wrap950">
	<div class="invest_left">
		<div class="list_invest">
			<div class="title"><div class="title_bg"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_4.gif"  /> ȷ����Ҫ�����Ľ����Ϣ</div></div>
			<div class="content">
				<div class="content_left"  >
					<ul>
					<li><img src="<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = '';$_tmp = $this->magic_vars['var']['user']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder"/></li>
					<li>�� �� ����<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?></li>
					<li>��ʵ������<? if (!isset($this->magic_vars['var']['user']['realname'])) $this->magic_vars['var']['user']['realname'] = ''; echo $this->magic_vars['var']['user']['realname']; ?></li>
					<li>���û��֣�<img src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['user']['credit_pic'])) $this->magic_vars['var']['user']['credit_pic'] = ''; echo $this->magic_vars['var']['user']['credit_pic']; ?>" title="<? if (!isset($this->magic_vars['var']['user']['credit_jifen'])) $this->magic_vars['var']['user']['credit_jifen'] = ''; echo $this->magic_vars['var']['user']['credit_jifen']; ?>��"  /></li>
					<li>��ס����: <? if (!isset($this->magic_vars['var']['userinfo']['area'])) $this->magic_vars['var']['userinfo']['area'] = '';$_tmp = $this->magic_vars['var']['userinfo']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
					</ul>
				</div>
				<div class="content_right" >
				<ul>
					<li>�����⣺<strong><a href="a<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>.html"><? if (!isset($this->magic_vars['var']['borrow']['name'])) $this->magic_vars['var']['borrow']['name'] = ''; echo $this->magic_vars['var']['borrow']['name']; ?></a></strong></li>
					<li>������<strong><font color="#FF0000">��<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?></font></strong></li>
					<li>���������: <? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</li>
					<li> <div class="floatl">������ɣ�</div>
						<div class="rate_bg floatl">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['var']['borrow']['vouchscale_width'])) $this->magic_vars['var']['borrow']['vouchscale_width'] = '';$_tmp = $this->magic_vars['var']['borrow']['vouchscale_width'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>px"></div>
						</div>
						<span >&nbsp;<? if (!isset($this->magic_vars['var']['borrow']['vouch_scale'])) $this->magic_vars['var']['borrow']['vouch_scale'] = ''; echo $this->magic_vars['var']['borrow']['vouch_scale']; ?>%</span>
					</li>
					<li>���赣��: <font color="#FF0000">��<? if (!isset($this->magic_vars['var']['borrow']['vouch_other'])) $this->magic_vars['var']['borrow']['vouch_other'] = ''; echo $this->magic_vars['var']['borrow']['vouch_other']; ?></font></li>
					<li>�������: <? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>����</li>
					<li>���ʽ: <? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></li>
					<li>������������: <font color="#FF0000">�������<? if (!isset($this->magic_vars['var']['borrow']['vouch_award'])) $this->magic_vars['var']['borrow']['vouch_award'] = ''; echo $this->magic_vars['var']['borrow']['vouch_award']; ?>%��������</font></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="invest_right">
		<div class="list_invest">
			<div class="title"><div class="title_bg"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_4.gif"  /> ȷ����Ҫ�����Ķ��</div></div>
			<div class="content">
				<form action="/index.php?user&q=code/borrow/vouch" name="form1" onsubmit="return check_form(500,<? if (!isset($this->magic_vars['var']['amount']['tender_vouch'])) $this->magic_vars['var']['amount']['tender_vouch'] = '';$_tmp = $this->magic_vars['var']['amount']['tender_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,<? if (!isset($this->magic_vars['var']['amount']['tender_vouch_use'])) $this->magic_vars['var']['amount']['tender_vouch_use'] = '';$_tmp = $this->magic_vars['var']['amount']['tender_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)" method="post">
				<ul>
					
					<li>���ĵ����ܶ <? if (!isset($this->magic_vars['var']['amount']['tender_vouch'])) $this->magic_vars['var']['amount']['tender_vouch'] = '';$_tmp = $this->magic_vars['var']['amount']['tender_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> Ԫ <a href="/index.php?user&q=code/borrow/limitapp&type=tender_vouch" target="_blank"><font color="#FF0000">��Ҫ����</font></a> </li>
					<li>���Ŀ��õ����� <? if (!isset($this->magic_vars['var']['amount']['tender_vouch_use'])) $this->magic_vars['var']['amount']['tender_vouch_use'] = '';$_tmp = $this->magic_vars['var']['amount']['tender_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>  Ԫ  </li>
					<li><strong><font color="#FF0000">����д��ȷ�����浣�����</font></strong></li>
					<li>������ȣ�<input type="text" name="money" size="11" onkeyup="value=value.replace(/[^0-9]/g,'')" /> Ԫ</li>
					<li>֧�����룺<? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><a href="/index.php?user&q=code/user/paypwd" target="_blank"><font color="red">������һ��֧����������</font></a><? else: ?><input type="password" name="paypassword" size="11" /><? endif; ?></li>
					<li>�� ֤ �룺<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /> </li>
					<li>����˵����<input type="text" name="content" size="36" /> </li>
					<li><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>" /><input type="image" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/button_vouch.gif"  align="absmiddle" /> ע�⣺�����ť��ʾ����ȷ�ϵ�������ͬ�ⵣ��</li>
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
		 	alert("��������Ϊ��");
			return false;
		 }else if (account>use_money ){
		 	alert("���Ŀ��õ������С�����ĵ�����������롣");
			return false;
		 }else if (account>most && most>0){
		 	alert("Ͷ�굣�����ܴ�������޶�"+most+"Ԫ");
			return false;
		 }else if(account<lowest && lowest>0){
			 alert("Ͷ�굣�����ܵ�����С�޶�"+lowest+"Ԫ");
			return false;
		 }
		 if (valicode==""){
		 	alert("��֤�벻��Ϊ��");
			return false;
		 }
		if(confirm('ȷ��ҪͶ��'+account+'Ԫ��ȷ���˽�����ȡ��')){
			return true;
		}else{
			return false;
		}
		 
	}
</script>

<? else: ?>

<!--�������ҳ ��ʼ-->
<div class="wrap950 invest_content ">
	<div class="title">
		<ul>
			<li class="user"><!--�������ҳ <? if (!isset($this->magic_vars['var']['user']['realname'])) $this->magic_vars['var']['user']['realname'] = ''; echo $this->magic_vars['var']['user']['realname']; ?>��ʼ-->&nbsp;</li>
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
					<li>���û���:<img src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['user']['credit_pic'])) $this->magic_vars['var']['user']['credit_pic'] = ''; echo $this->magic_vars['var']['user']['credit_pic']; ?>" title="<? if (!isset($this->magic_vars['var']['user']['credit_jifen'])) $this->magic_vars['var']['user']['credit_jifen'] = ''; echo $this->magic_vars['var']['user']['credit_jifen']; ?>"  /> <? if (!isset($this->magic_vars['var']['user']['credit_jifen'])) $this->magic_vars['var']['user']['credit_jifen'] = ''; echo $this->magic_vars['var']['user']['credit_jifen']; ?>��</li>
					<li>�� �� ��: <a href="/u/<? if (!isset($this->magic_vars['var']['user']['user_id'])) $this->magic_vars['var']['user']['user_id'] = ''; echo $this->magic_vars['var']['user']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?></a></li>
					<li>��&nbsp;&nbsp; &nbsp;��:
 <? if (!isset($this->magic_vars['var']['user']['area'])) $this->magic_vars['var']['user']['area'] = '';$_tmp = $this->magic_vars['var']['user']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></li>
					<li>��ס����: <? if (!isset($this->magic_vars['var']['userinfo']['area'])) $this->magic_vars['var']['userinfo']['area'] = '';$_tmp = $this->magic_vars['var']['userinfo']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></li>
					<li>ע��ʱ��: <? if (!isset($this->magic_vars['var']['user']['addtime'])) $this->magic_vars['var']['user']['addtime'] = '';$_tmp = $this->magic_vars['var']['user']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></li>
					<!--
					<li>�������: 100 </li>
					<li>��������: 323</li-->
					<li>��֤��Ϣ: <div class="credit_pic_card_<? if (!isset($this->magic_vars['var']['user']['real_status'])) $this->magic_vars['var']['user']['real_status'] = '';$_tmp = $this->magic_vars['var']['user']['real_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['real_status'])) $this->magic_vars['var']['user']['real_status']=''; ;if (  $this->magic_vars['var']['user']['real_status']==1): ?>ʵ������֤<? else: ?>δʵ����֤<? endif; ?>"></div>
							<div class="credit_pic_phone_<? if (!isset($this->magic_vars['var']['user']['phone_status'])) $this->magic_vars['var']['user']['phone_status']=''; ;if (  $this->magic_vars['var']['user']['phone_status']>=1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user']['phone_status'])) $this->magic_vars['var']['user']['phone_status']=''; ;if (  $this->magic_vars['var']['user']['phone_status']==1): ?>�ֻ�����֤<? else: ?>�ֻ�δ��֤<? endif; ?>"></div><div class="credit_pic_email_<? if (!isset($this->magic_vars['var']['user']['email_status'])) $this->magic_vars['var']['user']['email_status'] = '';$_tmp = $this->magic_vars['var']['user']['email_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['email_status'])) $this->magic_vars['var']['user']['email_status']=''; ;if (  $this->magic_vars['var']['user']['email_status']==1): ?>��������֤<? else: ?>����δ��֤<? endif; ?>"></div>
							 <div class="credit_pic_video_<? if (!isset($this->magic_vars['var']['user']['video_status'])) $this->magic_vars['var']['user']['video_status'] = '';$_tmp = $this->magic_vars['var']['user']['video_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['user']['video_status'])) $this->magic_vars['var']['user']['video_status']=''; ;if (  $this->magic_vars['var']['user']['video_status']==1): ?>��Ƶ����֤<? else: ?>��Ƶδ��֤<? endif; ?>"></div>
							  <div class="credit_pic_vip_<? if (!isset($this->magic_vars['var']['user_cache']['vip_status'])) $this->magic_vars['var']['user_cache']['vip_status']=''; ;if (  $this->magic_vars['var']['user_cache']['vip_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user_cache']['vip_status'])) $this->magic_vars['var']['user_cache']['vip_status']=''; ;if (  $this->magic_vars['var']['user_cache']['vip_status']==1): ?>VIP<? else: ?>��ͨ��Ա<? endif; ?>"></div>
							  <div class="credit_pic_scene_<? if (!isset($this->magic_vars['var']['user']['scene_status'])) $this->magic_vars['var']['user']['scene_status']=''; ;if (  $this->magic_vars['var']['user']['scene_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['var']['user']['scene_status'])) $this->magic_vars['var']['user']['scene_status']=''; ;if (  $this->magic_vars['var']['user']['scene_status']==1): ?>��ͨ���ֳ���֤<? else: ?>δͨ���ֳ���֤<? endif; ?>"></div>
							  
							  </li>
				</ul>
			</div>
		</div>
		
		<div class="con">
			<div class="con_1">
				<ul>
				<li>����<font color="#FF0000" size="+2" face="����">��<? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account'] = ''; echo $this->magic_vars['var']['borrow']['account']; ?></font> <? if (!isset($this->magic_vars['var']['borrow']['flag'])) $this->magic_vars['var']['borrow']['flag']=''; ;if (  $this->magic_vars['var']['borrow']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif" align="absmiddle" /><? if (!isset($this->magic_vars['var']['borrow']['flag'])) $this->magic_vars['var']['borrow']['flag']=''; ;elseif (   $this->magic_vars['var']['borrow']['flag']==2): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" align="absmiddle"/><? if (!isset($this->magic_vars['var']['borrow']['flag'])) $this->magic_vars['var']['borrow']['flag']=''; ;elseif (   $this->magic_vars['var']['borrow']['flag']==3): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/diya.gif" align="absmiddle"/><? endif; ?> </li>
				<li><span>�� �� �ʣ�<? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %</span> <span>������ޣ�<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>����</span></li>
				<li><span>���ʽ��<? if (!isset($this->magic_vars['var']['borrow']['style'])) $this->magic_vars['var']['borrow']['style'] = '';$_tmp = $this->magic_vars['var']['borrow']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></span> <span>�������ͣ����߽���</span></li>
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
				�û�ȡ��
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
			
			<font color="#FF0000">Ͷ��100Ԫ,������<? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?> %�����ޣ�<? if (!isset($this->magic_vars['var']['borrow']['time_limit'])) $this->magic_vars['var']['borrow']['time_limit'] = ''; echo $this->magic_vars['var']['borrow']['time_limit']; ?>����,�ɻ����Ϣ���棤<? if (!isset($this->magic_vars['var']['borrow']['interest'])) $this->magic_vars['var']['borrow']['interest'] = '';$_tmp = $this->magic_vars['var']['borrow']['interest'];$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?>Ԫ</font>

			</div>
			<div class="con_1">
				<ul>
				<li style="overflow:hidden"><div class="floatl">�Ѿ���ɣ�</div>
						<div class="rate_bg floatl" style="margin-top:8px;">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = '';$_tmp = $this->magic_vars['var']['borrow']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div>
						<span >&nbsp;<? if (!isset($this->magic_vars['var']['borrow']['scale'])) $this->magic_vars['var']['borrow']['scale'] = ''; echo $this->magic_vars['var']['borrow']['scale']; ?>%&nbsp;&nbsp;&nbsp; <? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?> <a href="/protocol/index.html?borrow_id=<? if (!isset($this->magic_vars['var']['borrow']['id'])) $this->magic_vars['var']['borrow']['id'] = ''; echo $this->magic_vars['var']['borrow']['id']; ?>" target="_blank"><font color="#fb1515" size="3"><b>���Э����</b></font></a><? else: ?>&nbsp;&nbsp;&nbsp;�����<? if (!isset($this->magic_vars['var']['borrow']['other'])) $this->magic_vars['var']['borrow']['other'] = ''; echo $this->magic_vars['var']['borrow']['other']; ?><? endif; ?></span></li>
			<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
			<li style="overflow:hidden"><div class="floatl">������ɣ�</div>
						<div class="rate_bg floatl" style="margin-top:8px;">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['var']['borrow']['vouchscale_width'])) $this->magic_vars['var']['borrow']['vouchscale_width'] = '';$_tmp = $this->magic_vars['var']['borrow']['vouchscale_width'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>px"></div>
						</div>
						<span >&nbsp;<? if (!isset($this->magic_vars['var']['borrow']['vouch_scale'])) $this->magic_vars['var']['borrow']['vouch_scale'] = ''; echo $this->magic_vars['var']['borrow']['vouch_scale']; ?>%&nbsp;&nbsp;&nbsp; <? if (!isset($this->magic_vars['var']['borrow']['account'])) $this->magic_vars['var']['borrow']['account']='';if (!isset($this->magic_vars['var']['borrow']['vouch_account'])) $this->magic_vars['var']['borrow']['vouch_account']=''; ;if (  $this->magic_vars['var']['borrow']['account']== $this->magic_vars['var']['borrow']['vouch_account']): ?><a href="#vouch_user">�鿴������</a><? else: ?>&nbsp;&nbsp;&nbsp;�����<? if (!isset($this->magic_vars['var']['borrow']['vouch_other'])) $this->magic_vars['var']['borrow']['vouch_other'] = ''; echo $this->magic_vars['var']['borrow']['vouch_other']; ?><? endif; ?></span></li>
			<? else: ?>
			Ͷ��Ķ�������޵�
			<? endif; ?>
				<li >��СͶ����<? if (!isset($this->magic_vars['var']['borrow']['lowest_account'])) $this->magic_vars['var']['borrow']['lowest_account'] = ''; echo $this->magic_vars['var']['borrow']['lowest_account']; ?></li>
				<li>��Ͷ������<? if (!isset($this->magic_vars['var']['borrow']['tender_times'])) $this->magic_vars['var']['borrow']['tender_times'] = ''; echo $this->magic_vars['var']['borrow']['tender_times']; ?>��</li>
				<? if (!isset($this->magic_vars['var']['borrow']['status'])) $this->magic_vars['var']['borrow']['status']=''; ;if (  $this->magic_vars['var']['borrow']['status']==3): ?>
					<li><div class="floatl">���뻹��ʱ�䣺</div><span id="endtime"><? if (!isset($this->magic_vars['var']['borrow']['rep_time'])) $this->magic_vars['var']['borrow']['rep_time'] = ''; echo $this->magic_vars['var']['borrow']['rep_time']; ?> </span></li>
				<? else: ?>
				<li><div class="floatl">ʣ��ʱ�䣺</div><span id="endtime"><? if (!isset($this->magic_vars['var']['borrow']['lave_time'])) $this->magic_vars['var']['borrow']['lave_time'] = ''; echo $this->magic_vars['var']['borrow']['lave_time']; ?> </span></li>
				<? endif; ?>
				</ul>
			</div>
			<div class="con_3">
			
			</div>
		</div>
		
		<div class="lian">
			<ul> 	
				<li>QQ��<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['var']['user']['qq'])) $this->magic_vars['var']['user']['qq'] = ''; echo $this->magic_vars['var']['user']['qq']; ?>&Site=�����н�����Ͷ�����޹�˾&Menu=yes" ><img border="0" src="http://wpa.qq.com/pa?p=2:<? if (!isset($this->magic_vars['var']['user']['qq'])) $this->magic_vars['var']['user']['qq'] = ''; echo $this->magic_vars['var']['user']['qq']; ?>:44" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ" /></a></li>			
				<li>������<a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<? if (!isset($this->magic_vars['var']['user']['wangwang'])) $this->magic_vars['var']['user']['wangwang'] = ''; echo $this->magic_vars['var']['user']['wangwang']; ?>&site=cnalichn&s=4" ><img border="0" src="http://amos.im.alisoft.com/online.aw?v=2&uid=<? if (!isset($this->magic_vars['var']['user']['wangwang'])) $this->magic_vars['var']['user']['wangwang'] = ''; echo $this->magic_vars['var']['user']['wangwang']; ?>&site=cnalichn&s=4" alt="������ϵ��" /></a></li>
				<li>���䣺<a target="_blank" href="mailto:<? if (!isset($this->magic_vars['var']['user']['email'])) $this->magic_vars['var']['user']['email'] = ''; echo $this->magic_vars['var']['user']['email']; ?>"><? if (!isset($this->magic_vars['var']['user']['email'])) $this->magic_vars['var']['user']['email'] = ''; echo $this->magic_vars['var']['user']['email']; ?></a></li>
				<li class="line">�ͷ���<a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['var']['user_cache']['kefu_username'])) $this->magic_vars['var']['user_cache']['kefu_username'] = ''; echo $this->magic_vars['var']['user_cache']['kefu_username']; ?>" target="_blank"><? if (!isset($this->magic_vars['var']['user_cache']['kefu_username'])) $this->magic_vars['var']['user_cache']['kefu_username'] = ''; echo $this->magic_vars['var']['user_cache']['kefu_username']; ?></a></li>
		
				<li style="padding-top:8px;"><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>" target="_blank"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_xin.gif" align="absmiddle" /></a></li>
				<li><a href="javascript:void(0)" onclick='tipsWindown("��Ϊ����","url:get?/index.php?user&q=code/user/addfriend&username=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>",400,230,"true","","true","text");'><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_you.gif" align="absmiddle"  /></a></li>
				<li><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/inBack.gif" align="absmiddle" width="18" height="18" style="margin-top:-2px"  /><a href="/index.php?user&amp;q=code/user/blackfriend&amp;username=<? if (!isset($this->magic_vars['var']['user']['username'])) $this->magic_vars['var']['user']['username'] = ''; echo $this->magic_vars['var']['user']['username']; ?>" style="color:#666666">��Ϊ������</a></li>
			</ul>
<br/>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--�������ҳ ����-->

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
    sDay = iDay + "��"; 
   }
   sTime =sDay + iHour + "Сʱ" + iMinute + "����" + iSecond + "��";
  
        if(iTime==0){
           clearTimeout(Account);
           sTime="<span style='color:green'>ʱ�䵽�ˣ�</span>";
        }else{
           Account = setTimeout("RemainTime()",1000);
        }
        iTime=iTime-1;
    }else{
        sTime="<span style='color:red'>�˱��ѹ��ڣ�</span>";
    }
document.getElementById(CID).innerHTML = sTime;
}
</script>

<!--�������� ��ʼ-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> ��������</div>
	<div class="content">
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td width="30%"><? if (!isset($this->magic_vars['var']['borrow_all']['success'])) $this->magic_vars['var']['borrow_all']['success'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> �γɹ�</td>
			  <td width="30%"><? if (!isset($this->magic_vars['var']['borrow_all']['false'])) $this->magic_vars['var']['borrow_all']['false'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['false'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ������ </td>
			  <td width="30%"><? if (!isset($this->magic_vars['var']['borrow_all']['wait'])) $this->magic_vars['var']['borrow_all']['wait'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> �ʴ�����</td>
			</tr>
			<tr  >
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_advance'])) $this->magic_vars['var']['borrow_all']['pay_advance'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_advance'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ����ǰ����</td>
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_success'])) $this->magic_vars['var']['borrow_all']['pay_success'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ��׼ʱ����  </td>
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expiredyes'])) $this->magic_vars['var']['borrow_all']['pay_expiredyes'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expiredyes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> �ʳٻ��� </td>
			</tr>
			<tr  >
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expired30in'])) $this->magic_vars['var']['borrow_all']['pay_expired30in'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expired30in'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ��30��֮�ڵ����ڻ��� </td>
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expired30'])) $this->magic_vars['var']['borrow_all']['pay_expired30'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expired30'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> �ʳ���30������ڻ���</td>
			  <td ><? if (!isset($this->magic_vars['var']['borrow_all']['pay_expiredno'])) $this->magic_vars['var']['borrow_all']['pay_expiredno'] = '';$_tmp = $this->magic_vars['var']['borrow_all']['pay_expiredno'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> ������δ����</td>
			</tr>
		</table>
	</div>
</div>
<!--�������� ����-->


<!--�������� ��ʼ-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> ��������</div>
	<div class="content">
<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td width="30%">�� ��<? if (!isset($this->magic_vars['var']['user']['sex'])) $this->magic_vars['var']['user']['sex']=''; ;if (  $this->magic_vars['var']['user']['sex']==1): ?>��<? else: ?>Ů<? endif; ?></td>
			  <td width="30%">�� �䣺<? if (!isset($this->magic_vars['var']['user']['birthday'])) $this->magic_vars['var']['user']['birthday'] = '';$_tmp = $this->magic_vars['var']['user']['birthday'];$_tmp = $this->magic_modifier("age_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>��</td>
			  <td width="30%">����״����<? if (!isset($this->magic_vars['var']['userinfo']['marry'])) $this->magic_vars['var']['userinfo']['marry'] = '';$_tmp = $this->magic_vars['var']['userinfo']['marry'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr  >
			  <td >�Ļ��̶ȣ�<? if (!isset($this->magic_vars['var']['userinfo']['education'])) $this->magic_vars['var']['userinfo']['education'] = '';$_tmp = $this->magic_vars['var']['userinfo']['education'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?> </td>
			  <td >ÿ�����룺 <? if (!isset($this->magic_vars['var']['userinfo']['income'])) $this->magic_vars['var']['userinfo']['income'] = '';$_tmp = $this->magic_vars['var']['userinfo']['income'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>Ԫ </td>
			  <td > �� ����<? if (!isset($this->magic_vars['var']['userinfo']['shebao'])) $this->magic_vars['var']['userinfo']['shebao'] = '';$_tmp = $this->magic_vars['var']['userinfo']['shebao'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>  </td>
			</tr>
			<tr  >
			  <td >ס��������<? if (!isset($this->magic_vars['var']['userinfo']['housing'])) $this->magic_vars['var']['userinfo']['housing'] = '';$_tmp = $this->magic_vars['var']['userinfo']['housing'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			  <td >�Ƿ񹺳���<? if (!isset($this->magic_vars['var']['userinfo']['car'])) $this->magic_vars['var']['userinfo']['car'] = '';$_tmp = $this->magic_vars['var']['userinfo']['car'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?> </td>
			  <td >�Ƿ����ڣ�<? if (!isset($this->magic_vars['var']['userinfo']['late'])) $this->magic_vars['var']['userinfo']['late'] = '';$_tmp = $this->magic_vars['var']['userinfo']['late'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			</tr>
		</table>
	</div>
</div>
<!--�������� ����-->

<!--�������� ��ʼ-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> �������</div>
	<div class="content">
<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td ><? if (!isset($this->magic_vars['var']['borrow']['content'])) $this->magic_vars['var']['borrow']['content'] = ''; echo $this->magic_vars['var']['borrow']['content']; ?></td>
			  
			</tr>
			
		</table>
	</div>
</div>
<!--�������� ����-->
<!--Ͷ�꽱�� ��ʼ-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> Ͷ�꽱��</div>
	<div class="content">
	<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;if (  $this->magic_vars['var']['borrow']['award']==0): ?>
		<font color="#FF0000" size="3">û�н���</font>
	<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==1): ?>
	<table  border="0"  cellspacing="0"  width="100%" class="tab1">
		<tr  >
		  <td width="30%">������ʽ��������</td>
		  <td width="30%">������<? if (!isset($this->magic_vars['var']['borrow']['part_account'])) $this->magic_vars['var']['borrow']['part_account'] = ''; echo $this->magic_vars['var']['borrow']['part_account']; ?>Ԫ</td>
		  <td width="30%">����������<? if (!isset($this->magic_vars['var']['borrow']['is_false'])) $this->magic_vars['var']['borrow']['is_false']=''; ;if (  $this->magic_vars['var']['borrow']['is_false']==1): ?>Ͷ��ʧ��Ҳ����<? else: ?>Ͷ���ҳɹ�����ͨ������н���<? endif; ?></td>
		</tr>
	</table>
	<? if (!isset($this->magic_vars['var']['borrow']['award'])) $this->magic_vars['var']['borrow']['award']=''; ;elseif (   $this->magic_vars['var']['borrow']['award']==2): ?>
	<table  border="0"  cellspacing="0"  width="100%" class="tab1">
		<tr  >
		  <td width="30%">������ʽ������������</td>
		  <td width="30%">����������<? if (!isset($this->magic_vars['var']['borrow']['funds'])) $this->magic_vars['var']['borrow']['funds'] = ''; echo $this->magic_vars['var']['borrow']['funds']; ?>%</td>
		  <td width="30%">����������<? if (!isset($this->magic_vars['var']['borrow']['is_false'])) $this->magic_vars['var']['borrow']['is_false']=''; ;if (  $this->magic_vars['var']['borrow']['is_false']==1): ?>Ͷ��ʧ��Ҳ����<? else: ?>Ͷ���ҳɹ�����ͨ������н���<? endif; ?></td>
		</tr>
	</table>
	<? endif; ?>
	</div>
</div>
<!--Ͷ�꽱�� ����-->

<? if (!isset($this->magic_vars['var']['borrow']['is_vouch'])) $this->magic_vars['var']['borrow']['is_vouch']=''; ;if (  $this->magic_vars['var']['borrow']['is_vouch']==1): ?>
<!--�������� ��ʼ-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> ��������</div>
	<div class="content">
	<? if (!isset($this->magic_vars['var']['borrow']['vouch_award'])) $this->magic_vars['var']['borrow']['vouch_award']=''; ;if (  $this->magic_vars['var']['borrow']['vouch_award']==""): ?>
		<font color="#FF0000" size="3">û�н���</font>
		<? else: ?>
	<table  border="0"  cellspacing="0"  width="100%" class="tab1">
		<tr  >
		  <td width="30%">������ʽ������������</td>
		  <td width="30%">����������<? if (!isset($this->magic_vars['var']['borrow']['vouch_award'])) $this->magic_vars['var']['borrow']['vouch_award'] = ''; echo $this->magic_vars['var']['borrow']['vouch_award']; ?>%</td>
		  <td width="30%">ָ�������ˣ�<? if (!isset($this->magic_vars['var']['borrow']['vouch_user'])) $this->magic_vars['var']['borrow']['vouch_user'] = ''; echo $this->magic_vars['var']['borrow']['vouch_user']; ?></td>
		</tr>
	</table>
	<? endif; ?>
	</div>
</div>
<!--�������� ����-->


<!--������¼ ��ʼ-->
<a name="vouch_user" ></a>
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> ������¼</div>
	<div class="content">
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr align="center">
			  <td ><strong>������</strong> </td>
			  <td ><strong>�������</strong></td>
			  <td ><strong>��Ч���</strong></td>
			  <td ><strong>����ʱ��</strong></td>
			  <td ><strong>״̬ </strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetVouchList';$data = array('limit'=>'all','var'=>'vat','borrow_id'=>$this->magic_vars['var']['borrow']['id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetVouchList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['vat']):
?>
			<tr  >
			  <td align="center"><a href="/u/<? if (!isset($this->magic_vars['vat']['user_id'])) $this->magic_vars['vat']['user_id'] = ''; echo $this->magic_vars['vat']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['vat']['username'])) $this->magic_vars['vat']['username'] = ''; echo $this->magic_vars['vat']['username']; ?></a></td>
			  <td align="center" ><? if (!isset($this->magic_vars['vat']['vouch_account'])) $this->magic_vars['vat']['vouch_account'] = ''; echo $this->magic_vars['vat']['vouch_account']; ?>Ԫ</td>
			  <td align="center" ><? if (!isset($this->magic_vars['vat']['account'])) $this->magic_vars['vat']['account'] = '';$_tmp = $this->magic_vars['vat']['account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ</td>
			  <td align="center"><? if (!isset($this->magic_vars['vat']['addtime'])) $this->magic_vars['vat']['addtime'] = '';$_tmp = $this->magic_vars['vat']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
			  <td align="center"><? if (!isset($this->magic_vars['vat']['vouch_account'])) $this->magic_vars['vat']['vouch_account']='';if (!isset($this->magic_vars['vat']['account'])) $this->magic_vars['vat']['account']=''; ;if (  $this->magic_vars['vat']['vouch_account']== $this->magic_vars['vat']['account']): ?>ȫ��ͨ��<? else: ?>����ͨ��<? endif; ?></td>
			</tr>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
</div>
<!--������¼ ����-->
<? endif; ?>


<!--�˻����� ��ʼ-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> �˻�����</div>
	<div class="content">
	<? $data = array('user_id'=>$this->magic_vars['var']['user']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td >
�˻��ܶ ��<? if (!isset($this->magic_vars['var']['account']['total'])) $this->magic_vars['var']['account']['total'] = ''; echo $this->magic_vars['var']['account']['total']; ?>
   
</td>
			  <td >�����ܶ ��<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>   </td>
			  <td >��ծ�����<? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num']='';if (!isset($this->magic_vars['acc']['success_account'])) $this->magic_vars['acc']['success_account']=''; ;if (  $this->magic_vars['acc']['borrow_num']< $this->magic_vars['acc']['success_account']): ?>������ڽ���<? else: ?>���С�ڽ���<? endif; ?>  </td>
			</tr>
			<tr  >
			  <td > ����ܶ��<? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num'] = '';$_tmp = $this->magic_vars['acc']['borrow_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			  <td >�ѻ��ܶ ��<? if (!isset($this->magic_vars['acc']['borrow_num1'])) $this->magic_vars['acc']['borrow_num1'] = '';$_tmp = $this->magic_vars['acc']['borrow_num1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> </td>
			  <td >��վ�渶δ���� ��<? if (!isset($this->magic_vars['acc']['borrow_num2'])) $this->magic_vars['acc']['borrow_num2'] = '';$_tmp = $this->magic_vars['acc']['borrow_num2'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> </td>
			</tr>
			<tr  >
			  <td > ����ܶ��<? if (!isset($this->magic_vars['acc']['success_account'])) $this->magic_vars['acc']['success_account'] = '';$_tmp = $this->magic_vars['acc']['success_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			  <td >�����ܶ ��<? if (!isset($this->magic_vars['acc']['collection_yes'])) $this->magic_vars['acc']['collection_yes'] = '';$_tmp = $this->magic_vars['acc']['collection_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			  <td >�����ܶ ��<? if (!isset($this->magic_vars['acc']['collection_wait'])) $this->magic_vars['acc']['collection_wait'] = '';$_tmp = $this->magic_vars['acc']['collection_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>   </td>
			</tr>
			<tr  >
			  <td colspan="1" >������ö�ȣ� ��<? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = ''; echo $this->magic_vars['acc']['credit']; ?></td>
			  <td colspan="2" >�������ö�ȣ� ��<? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = ''; echo $this->magic_vars['acc']['credit_use']; ?></td>
			</tr>
			<tr  >
			  <td colspan="1" >�����ܶ ��<? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = ''; echo $this->magic_vars['acc']['borrow_vouch']; ?></td>
			  <td colspan="2" >���ý�����ȣ� ��<? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = ''; echo $this->magic_vars['acc']['borrow_vouch_use']; ?></td>
			</tr>
			<tr  >
			  <td colspan="1" >Ͷ�ʵ����ܶ ��<? if (!isset($this->magic_vars['acc']['tender_vouch'])) $this->magic_vars['acc']['tender_vouch'] = ''; echo $this->magic_vars['acc']['tender_vouch']; ?></td>
			  <td colspan="2" >����Ͷ�ʵ�����ȣ� ��<? if (!isset($this->magic_vars['acc']['tender_vouch_use'])) $this->magic_vars['acc']['tender_vouch_use'] = ''; echo $this->magic_vars['acc']['tender_vouch_use']; ?></td>
			</tr>
		</table>
		<? unset($_magic_vars);unset($data); ?>
	</div>
</div>
<!--�˻����� ����-->


<!--������� ��ʼ-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> �������</div>
	<div class="content">
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td ><strong>��������</strong> </td>
			  <td ><strong>����</strong></td>
			  <td ><strong>�ϴ�ʱ��</strong></td>
			  <td ><strong>���ʱ��</strong></td>
			  <td ><strong>���˵��</strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'arr_var','limit'=>'all','status'=>'1','user_id'=>$this->magic_vars['var']['user']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/attestation/attestation.class.php');$this->magic_vars['magic_result'] = attestationClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['arr_var']):
?>
			<? if (!isset($this->magic_vars['arr_var']['jifen'])) $this->magic_vars['arr_var']['jifen']=''; ;if (  $this->magic_vars['arr_var']['jifen']>0): ?>
			<tr  > 
			  <td ><? if (!isset($this->magic_vars['arr_var']['type_name'])) $this->magic_vars['arr_var']['type_name'] = ''; echo $this->magic_vars['arr_var']['type_name']; ?></td>
			  <td  ><? if (!isset($this->magic_vars['arr_var']['jifen'])) $this->magic_vars['arr_var']['jifen'] = ''; echo $this->magic_vars['arr_var']['jifen']; ?> ��</td>
			  <td ><? if (!isset($this->magic_vars['arr_var']['addtime'])) $this->magic_vars['arr_var']['addtime'] = '';$_tmp = $this->magic_vars['arr_var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			  <td ><? if (!isset($this->magic_vars['arr_var']['verify_time'])) $this->magic_vars['arr_var']['verify_time'] = '';$_tmp = $this->magic_vars['arr_var']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			  <td ><? if (!isset($this->magic_vars['arr_var']['verify_remark'])) $this->magic_vars['arr_var']['verify_remark'] = '';$_tmp = $this->magic_vars['arr_var']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endif; ?>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
</div>
<!--������� ����-->



<!--�����¼ ��ʼ-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> �������¼(ֻ��ʾ����������10����¼) >> ����ϸ�Ļ�����ϸ�˵�</div>
	<div class="content">
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr  >
			  <td ><strong>������</strong> </td>
			  <td ><strong>����</strong></td>
			  <td ><strong>���Ϣ</strong></td>
			  <td ><strong>ʵ�ʵ�������</strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetRepaymentList';$data = array('status'=>'0,2','limit'=>'10','var'=>'vat','order'=>'repayment_time','user_id'=>$this->magic_vars['var']['user']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRepaymentList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['vat']):
?>
			<tr  >
			  <td ><a href="/invest/a<? if (!isset($this->magic_vars['vat']['borrow_id'])) $this->magic_vars['vat']['borrow_id'] = ''; echo $this->magic_vars['vat']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['vat']['borrow_name'])) $this->magic_vars['vat']['borrow_name'] = ''; echo $this->magic_vars['vat']['borrow_name']; ?></a></td> 
			  <td ><? if (!isset($this->magic_vars['vat']['order'])) $this->magic_vars['vat']['order'] = ''; echo $this->magic_vars['vat']['order']+1; ?>/<? if (!isset($this->magic_vars['vat']['time_limit'])) $this->magic_vars['vat']['time_limit'] = ''; echo $this->magic_vars['vat']['time_limit']; ?></td>
			  <td >��<? if (!isset($this->magic_vars['vat']['repayment_account'])) $this->magic_vars['vat']['repayment_account'] = ''; echo $this->magic_vars['vat']['repayment_account']; ?></td>
			  <td ><? if (!isset($this->magic_vars['vat']['repayment_time'])) $this->magic_vars['vat']['repayment_time'] = '';$_tmp = $this->magic_vars['vat']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
</div>
<!--�����¼ ����-->


<!--Ͷ���¼ ��ʼ-->
<div class="wrap950 list_li_3 ">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> Ͷ���¼</div>
	<div class="content">
		<table  border="0"  cellspacing="0"  width="100%" class="tab1">
			<tr align="center">
			  <td ><strong>Ͷ����/��ϵ</strong> </td>
			  <td ><strong>��ǰ������</strong></td>
			  <td ><strong>Ͷ����</strong></td>
			  <td ><strong>��Ч���</strong></td>
			  <td ><strong>Ͷ��ʱ��</strong></td>
			  <td ><strong>״̬ </strong></td>
			</tr>
			<? $this->magic_vars['query_type']='GetTenderList';$data = array('limit'=>'all','var'=>'vat','borrow_id'=>$this->magic_vars['var']['borrow']['id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['vat']):
?>
			<tr  >
			  <td align="center"><a href="/u/<? if (!isset($this->magic_vars['vat']['user_id'])) $this->magic_vars['vat']['user_id'] = ''; echo $this->magic_vars['vat']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['vat']['username'])) $this->magic_vars['vat']['username'] = ''; echo $this->magic_vars['vat']['username']; ?></a></td>
			  <td align="center" ><? if (!isset($this->magic_vars['var']['borrow']['apr'])) $this->magic_vars['var']['borrow']['apr'] = ''; echo $this->magic_vars['var']['borrow']['apr']; ?>%</td>
			  <td align="center" ><? if (!isset($this->magic_vars['vat']['money'])) $this->magic_vars['vat']['money'] = ''; echo $this->magic_vars['vat']['money']; ?>Ԫ</td>
			  <td align="center" ><? if (!isset($this->magic_vars['vat']['tender_account'])) $this->magic_vars['vat']['tender_account'] = '';$_tmp = $this->magic_vars['vat']['tender_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>Ԫ</td>
			  <td align="center"><? if (!isset($this->magic_vars['vat']['addtime'])) $this->magic_vars['vat']['addtime'] = '';$_tmp = $this->magic_vars['vat']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
			  <td align="center"><? if (!isset($this->magic_vars['vat']['tender_account'])) $this->magic_vars['vat']['tender_account']='';if (!isset($this->magic_vars['vat']['money'])) $this->magic_vars['vat']['money']=''; ;if (  $this->magic_vars['vat']['tender_account']== $this->magic_vars['vat']['money']): ?>ȫ��ͨ��<? else: ?>����ͨ��<? endif; ?></td>
			</tr>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>
	</div>
</div>
<!--Ͷ���¼ ����-->
<br />

<div class="wrap950">
<!--���ۿ�ʼ-->
				<script src="/index.php?comment&type=list&code=<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1&epage=3"></script>
			<div class="content_title mar10">
				<span class="floatr">����������<font color="#FF0000"><script>document.write(result['total'])</script></font> �� <a href="/index.php?comment&type=lists&code=borrow&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1" target="_blank">�鿴��������</a></span><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pinglun.gif" align="absmiddle"/>&nbsp; ����
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
					<div><strong>����һ��</strong></div>
				  	<div ><textarea  rows="6" id="comment_content" name="comment" style="width:890px;"></textarea></div>
					<div><span class="floatr"><input type="image" id="pinglun" onclick="pinglun('<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>','<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>')" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pinglun_content.gif" /></span>��֤�룺<input type="text" id="valicode" size="10" /> <img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /></div>
					
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
							alert("���۲���Ϊ��");
						}else{
						tipsWindown("����","url:get?/index.php?comment&type=add&code="+code+"&id="+id+"&comment="+comment+"&valicode="+valicode,300,130,"false","","false","text")
						}
					};
				function comment_close() {
					$("#windownbg").remove();
					$("#windown-box").fadeOut("slow",function(){$(this).remove();});
				};
			 	
		 </script>
			
			
			<!--���۽���-->
</div>


<? endif; ?>

<? unset($_magic_vars);unset($data); ?>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>