 <? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


<!--������ ��ʼ-->
<div class="wrap950 list_1">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> ����vip��Ϣ��</div>
	<div class="content">
		<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==0): ?>
		
			<form action="/index.php?user&q=code/user/applyvip" method="post">
			<ul class="ul_li_1">
				<li>����״̬�ǣ�<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==0): ?>��ͨ��Ա<? else: ?><font color="#FF0000">VIP��Ա,��Чʱ�䣺</font><? endif; ?></li>
				<li>�û�����<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?></li>
				<li>�� �� ��<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?></li>
				<li>�� �� ��<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?></li>
				<li>ѡ��ͷ� ��<select name="kefu_userid">
				<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'all','type_id'=>'3,7');$default = '';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<option value="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>"><? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?>(<? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?>)</option>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</select></li>
				<li>�� ע ��<textarea rows="5" cols="50" name="vip_remark"></textarea></li>
				<li>��֤�룺<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /></li>
				<li><input type="submit" value="��Ҫ����" /></li>
			</ul>
			</form>
		<? else: ?>
		<ul class="ul_li_1">
			<li>����״̬�ǣ�<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==0): ?>��ͨ��Ա<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['vip_status']==2): ?>VIP������<? if (!isset($this->magic_vars['_G']['user_result']['isvip'])) $this->magic_vars['_G']['user_result']['isvip']=''; ;elseif (  $this->magic_vars['_G']['user_result']['isvip']=="-1"): ?>VIP������,�����ĵȴ�<? else: ?><font color="#FF0000">VIP��Ա</font><? endif; ?></li>
			<? if (!isset($this->magic_vars['_G']['user_result']['isvip'])) $this->magic_vars['_G']['user_result']['isvip']=''; ;if (  $this->magic_vars['_G']['user_result']['isvip']==1): ?><li>��Чʱ�䣺<? if (!isset($this->magic_vars['_G']['user_result']['vip_time'])) $this->magic_vars['_G']['user_result']['vip_time'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?> �� <? if (!isset($this->magic_vars['_G']['user_result']['vip_time'])) $this->magic_vars['_G']['user_result']['vip_time'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_time']+60*60*24*365;$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></li><? endif; ?>
			<li>�û�����<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?></li>
			<li>�� �� ��<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?></li>
			<li>�� �� ��<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?></li>
			<li>�� �� ��<? if (!isset($this->magic_vars['_G']['user_cache']['kefu_realname'])) $this->magic_vars['_G']['user_cache']['kefu_realname'] = ''; echo $this->magic_vars['_G']['user_cache']['kefu_realname']; ?>(<? if (!isset($this->magic_vars['_G']['user_cache']['kefu_username'])) $this->magic_vars['_G']['user_cache']['kefu_username'] = ''; echo $this->magic_vars['_G']['user_cache']['kefu_username']; ?>)
			<li>�� ע ��<? if (!isset($this->magic_vars['_G']['user_result']['vip_remark'])) $this->magic_vars['_G']['user_result']['vip_remark'] = ''; echo $this->magic_vars['_G']['user_result']['vip_remark']; ?></li>
			
		</ul>
		<? endif; ?>
	</div>
	<div class="foot"></div>
	<div>
	
	</div>
</div>
<!--������ ����-->

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>