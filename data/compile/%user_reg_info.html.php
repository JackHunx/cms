<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/js/user.js"></script>
<div class="wrap950 t10">
     <div class="zhuce_bor1">
	      <h1><strong>���ע��</strong></h1>
		  <div style="background:#F7F6F6; margin:5px; padding:10px; text-align:center"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/zc_step.gif" /></div>
		  <div style="margin-top:10px">
		       <div style="width:500px; float:left; border-right:#EFEFEF solid 1px; margin-bottom:20px;  padding-left:20px;">
			   <form action="" method="post" name="formUser" onsubmit="return userReg();">
		       <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="zc_tab">
  <tr>
    <td width="28%" align="center" valign="middle">��&nbsp;&nbsp;&nbsp;&nbsp;�䣺</td>
    <td width="67%" valign="middle"><input  maxLength=32 onblur="checkEmail(this.value);" class="in_text" name=email id=email>
    			 <div  class=user_action_error id=email_notice><font color="#999999">�뾡����ʹ��QQ����(��֤��)</font></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle">�� �� ����</td>
    <td valign="middle"><input maxLength=15 onblur="checkUsername(this.value);" class="in_text" name=username id=username >
				  <div class=user_action_error id=username_notice><font color="#999999">����������վ���û���</font></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle">��&nbsp;&nbsp;&nbsp;&nbsp;�룺</td>
    <td valign="middle"><input class="in_text" onblur="checkPassword(this.value);"  type=password maxLength=16 name=password id=password >
				 <div class=user_action_error id=password_notice><font color="#999999">������6��16λ����</font></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle">ȷ�����룺</td>
    <td valign="middle"><input class="in_text" onblur="checkConformPassword(this.value);" type=password maxLength=16 name=confirm_password id=conform_password>
				 <div class=user_action_error id=conform_password_notice><font color="#999999">���ظ��������������</font></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle">��ʵ������</td>
    <td valign="middle"> <input class="in_text" onblur="checkRealname(this.value);" type=text name="realname" id="realname">
				  <div class=user_action_error id=realname_notice><font color="#999999">����д�����ʵ����</font></div>
				  
  <input name="invite_userid" type="hidden" value="<? if (!isset($_SESSION['reginvite_user_id'])) $_SESSION['reginvite_user_id'] = ''; echo $_SESSION['reginvite_user_id']; ?>" />
  <input name="type_id" type="hidden" value="2" /></td>
  </tr>
  <tr>
    <td colspan="2" align="right" valign="middle">
	    <div class="yinsi">
		<b>*</b> ��������������˽��������д����Ϣ��Ϊ�����ڱ�վ�ķ���
ʹ�ã����ǲ���й¶�����κ���Ϣ���κε�������		</div>	</td>
    </tr>
   <tr>
    <td colspan="2" align="center" valign="middle"><br /><input name="Submit" type="submit" value="" width="170" height="29" name="Submit" id="submit" class="reg_button" style="cursor: pointer" align="absmiddle" disabled="disabled"/></div></td>
    </tr>
</table>
</form>
		  </div>
		  <div  style="float:left; width:260px; margin-left:40px; display:inline; height:auto; overflow:hidden; margin-top:20px">
		        <div style="float:right; width:200px;" >
				<div class="user_action_button"  style=" float:right">
					<ul >
						<div ><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/button_zhuan.gif" /></div>
						<span ><strong><a href="/invest/index.html">��Ҫ���</a></strong><br /></span>
					</ul><br />������ƣ����ż���������ơ����ձ�����Ϣ������10%���ϵ�Ͷ�����档
		
					<ul><br />
								<div ><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/button_jie.gif"  /></div>
						<span ><strong><a href="/borrow/index.html">��Ҫ���</a></strong><br /></span>
					</ul><br />������ƣ���ݡ��ͷ��ʡ�����ȫ������ǰ0���á�ȫ�����������顣
				</div>
		  <div style="clear:both"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/adv_2.gif"  /></div></div>
		  </div>
		  </div>
	 </div>
</div>


<? $this->magic_include(array('file' => "footer.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>