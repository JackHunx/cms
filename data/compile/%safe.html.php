<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
<script>
location.href='/index.php?user&q=action/login';
</script>
<? endif; ?>

<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


<div class="wrap950 list_li_3">
	<div class="title"><a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html">��ȫ���</a></div>
	<div class="content">
		
		<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
			<tr class="list_content_tr1">
				<td ><strong>��ȫ����</strong>  </td>
				<td ><strong>ʹ ��</strong></td>
				<td ><strong>״ ̬</strong></td>
				<td ><strong>�� ��</strong></td>
			</tr>
			<tr class="list_content_tr1">
				<td>��¼����</td>
				<td> ���ʹ��һ���������ֺ���ĸ,���ҳ���6λ�ַ����ϵ����롣</td>
				<td>������</td>
				<td><a href="/index.php?user&q=code/user/userpwd">�޸�</a></td>
			</tr>
			<tr class="list_content_tr1">  
				<td>��������</td>
				<td> ���ʹ��һ���������ֺ���ĸ�ͷ���,���ҳ���8λ�ַ������롣</td>
				<td><? if (!isset($this->magic_vars['_G']['user_result']['paypassword'])) $this->magic_vars['_G']['user_result']['paypassword']=''; ;if (  $this->magic_vars['_G']['user_result']['paypassword']==""): ?><font color="#FF0000">δ����</font><? else: ?>������<? endif; ?></td>
				<td><a href="/index.php?user&q=code/user/paypwd">�޸�</a></td>
			</tr>
			<tr class="list_content_tr1">
				<td>���뱣������</td>
				<td>������д���׼�ס,������ױ����˻�ȡ�����⼰��, ����Ч�����������밲ȫ��</td>
				<td><? if (!isset($this->magic_vars['_G']['user_result']['answer'])) $this->magic_vars['_G']['user_result']['answer']=''; ;if (  $this->magic_vars['_G']['user_result']['answer']==""): ?><font color="#FF0000">δ����</font><? else: ?>������<? endif; ?></td>
				<td><a href="/index.php?user&q=code/user/protection">�޸�</a></td>
			</tr>
			<tr class="list_content_tr1">
				<td>ʵ����֤����</td>
				<td >��Ϊʵ����֤�û���,��ʹ�����͵���Ϣ�����ϱ����˽ػ�,�������ĸ��� �˻���<br />
�������Ϣ����ȡ,�Կ��Ա�֤�����˻��ʽ�ȫ��</td>
				<td><? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']=="0"): ?><font color="#FF0000">δ����</font><? else: ?>������<? endif; ?></td>
				<td><a href="/index.php?user&q=code/user/realname">�鿴</a></td>
			</tr>
			<tr class="list_content_tr1">
				<td>֤�������ϴ�</td>
				<td>�ϴ�����֤������,�������������á��ϴ������ϱ��뾭�����˵�ͬ��</td>
				<td>���ϴ�</td>
				<td><a href="/index.php?user&q=code/attestation">�޸�</a></td>
			</tr>
		<tr class="list_content_tr1">
				<td>VIP����</td>
				<td>��Ϊ��վ��VIP</td>
				<td><? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']=="1"): ?>VIP��Ա<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['vip_status']=="0"): ?>��ͨ��Ա<? else: ?>VIP�����<? endif; ?></td>
				<td><a href="/vip/index.html">�鿴</a></td>
			</tr>
		</table>
		
		
	</div>
</div>


<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>