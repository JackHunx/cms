<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/css/login_new.css" rel="stylesheet" type="text/css" />
  <form name="login" method="post" action=""  >
<div class="con_box t10">
     <div style="float:left; margin-top:40px"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/lopic.jpg" border="0" usemap="#Map" />
<map name="Map" id="Map"><area shape="rect" coords="333,148,428,179" href="/?user&q=action/reg" /></map></div>
	 <div class="login_bor">
	      <div style="padding:65px 12px 0 8px">
		  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tab_log">
  <tr>
    <td width="23%" height="40" align="right">�˺ţ�</td>

    <td width="77%" align="left">
			 <input class="lo_text" type="text" id="keywords" name="keywords" maxlength="64" value="�û���/������е�¼" onFocus="if(value==defaultValue){value='';this.style.color='#000'}" onBlur="if(!value){value=defaultValue;this.style.color='#999'}" style="color:#999" ></td>
  </tr>
  <tr>
    <td height="40" align="right">��  �룺</td>
    <td align="left"><input class="lo_text" type="password" name="password" id="password" maxlength="16" /><span>  <a href="/?user&q=action/getpwd" style="color:#026CCF">�������룿</a></span></td>
  </tr>

  <tr>
    <td height="40" align="right">��֤�룺</td>
    <td align="left"> <input  class="lo_text"  name="valicode" type="text" size="8" maxlength="4" style=" padding-top:4px; height:16px; width:70px;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /></td>
  </tr>
</table>
<div style="border-top:#32C0FD solid 1px; margin-top:30px; padding-top:20px; padding-left:20px">

           <select name="cookietime"><option value="15">����15����</option>
		<option value="30">����30����</option>

		<option value="60" selected="selected">����1Сʱ</option>
		<option value="180">����3Сʱ</option>
		<option value="360">����6Сʱ</option>
		<option value="1440">����1��</option>
		<option value="4320">����3��</option>
		<option value="7200">����5��</option>

		</select>&nbsp;
		<input type="image" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/denglu.gif" width="79" height="29" align="absmiddle" /></div>
		  </div>
	 </div>
	 <div style="clear:both"></div>
</div>
</form>


<? $this->magic_include(array('file' => "footer.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>