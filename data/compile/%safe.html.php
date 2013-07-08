<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
<script>
location.href='/index.php?user&q=action/login';
</script>
<? endif; ?>

<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


<div class="wrap950 list_li_3">
	<div class="title"><a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html">安全检查</a></div>
	<div class="content">
		
		<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
			<tr class="list_content_tr1">
				<td ><strong>安全设置</strong>  </td>
				<td ><strong>使 用</strong></td>
				<td ><strong>状 态</strong></td>
				<td ><strong>操 作</strong></td>
			</tr>
			<tr class="list_content_tr1">
				<td>登录密码</td>
				<td> 最好使用一个包含数字和字母,并且超过6位字符以上的密码。</td>
				<td>已设置</td>
				<td><a href="/index.php?user&q=code/user/userpwd">修改</a></td>
			</tr>
			<tr class="list_content_tr1">  
				<td>交易密码</td>
				<td> 最好使用一个包含数字和字母和符号,并且超过8位字符的密码。</td>
				<td><? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><font color="#FF0000">未设置</font><? else: ?>已设置<? endif; ?></td>
				<td><a href="/index.php?user&q=code/user/paypwd">修改</a></td>
			</tr>
			<tr class="list_content_tr1">
				<td>密码保护功能</td>
				<td>建议填写容易记住,且最不容易被他人获取的问题及答案, 更有效保障您的密码安全。</td>
				<td><? if (!isset($this->magic_vars['_G']['user_result']['answer'])) $this->magic_vars['_G']['user_result']['answer']=''; ;if (  $this->magic_vars['_G']['user_result']['answer']==""): ?><font color="#FF0000">未设置</font><? else: ?>已设置<? endif; ?></td>
				<td><a href="/index.php?user&q=code/user/protection">修改</a></td>
			</tr>
			<tr class="list_content_tr1">
				<td>实名认证功能</td>
				<td >成为实名认证用户后,即使您发送的信息在网上被他人截获,甚至您的个人 账户、<br />
密码等信息被盗取,仍可以保证您的账户资金安全。</td>
				<td><? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']=="0"): ?><font color="#FF0000">未设置</font><? else: ?>已设置<? endif; ?></td>
				<td><a href="/index.php?user&q=code/user/realname">查看</a></td>
			</tr>
			<tr class="list_content_tr1">
				<td>证明资料上传</td>
				<td>上传您的证明资料,以增加您的信用。上传的资料必须经过家人的同意</td>
				<td>请上传</td>
				<td><a href="/index.php?user&q=code/attestation">修改</a></td>
			</tr>
		<tr class="list_content_tr1">
				<td>VIP管理</td>
				<td>成为网站的VIP</td>
				<td><? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']=="1"): ?>VIP会员<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['vip_status']=="0"): ?>普通会员<? else: ?>VIP审核中<? endif; ?></td>
				<td><a href="/vip/index.html">查看</a></td>
			</tr>
		</table>
		
		
	</div>
</div>


<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>