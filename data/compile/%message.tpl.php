<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<div class="module_add">
	
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['list_title'])) $this->magic_vars['_A']['list_title'] = ''; echo $this->magic_vars['_A']['list_title']; ?></strong></div>
	
	<form name="form1" method="post" action=""  enctype="multipart/form-data" onsubmit="return check_form();" >
	
	<div class="module_border">
		<div class="l">发送人：</div>
		<div class="c">
			<input type="text" name="send_userid" id="zz" value="<? if (!isset($_SESSION['username'])) $_SESSION['username'] = ''; echo $_SESSION['username']; ?>"  /> <span  class="label"  onclick='tipsWindown("选择用户","url:get?plugins/index.php?q=user&name=send_username&id=zz&type=input",500,300,"false","","true","text")'>请选择</span> <span>填写用户名</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">接收人：</div>
		<div class="c">
			<input type="text" name="receive_userid" id="suser"  /> <span  class="label"  onclick='tipsWindown("选择用户","url:get?plugins/index.php?q=user&name=receive_username&id=suser&type=input",500,300,"false","","true","text")'>请选择</span> <span>填写用户名</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">类型：</div>
		<div class="c">
			<script src="/plugins/index.php?q=linkage&name=type&nid=message_type&value=<? if (!isset($this->magic_vars['_A']['message_result']['type'])) $this->magic_vars['_A']['message_result']['type'] = ''; echo $this->magic_vars['_A']['message_result']['type']; ?>"></script> 
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">内容：</div>
		<div class="c">
				<textarea name="content" rows="5" cols="50" ><? if (!isset($this->magic_vars['_A']['message_result']['type'])) $this->magic_vars['_A']['message_result']['type'] = ''; echo $this->magic_vars['_A']['message_result']['type']; ?></textarea>
		</div>
	</div>
	
	
		
	<div class="module_submit" >
		<input type="submit"  name="submit" value="确认提交" />
		<input type="reset"  name="reset" value="重置表单" />
	</div>
	</form>
	
</div>

<script>


function check_form(){
	 var frm = document.forms['form1'];
	 var name = frm.elements['name'].value;
	 var award = frm.elements['award'].value;
	 var part_account = frm.elements['part_account'].value;
	 var errorMsg = '';
	  if (name.length == 0 ) {
		errorMsg += '标题必须填写' + '\n';
	  }
	   if (award ==1 && part_account<5) {
		errorMsg += '奖励金额不能小于5元' + '\n';
	  }
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="*" class="main_td">ID</td>
			<td width="*" class="main_td">发送人</td>
			<td width="" class="main_td">发送时间</td>
			<td width="" class="main_td">类型</td>
			<td width="" class="main_td">内容</td>
			<td width="" class="main_td">时间</td>
			<td width="" class="main_td">状态</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['message_list']) || $this->magic_vars['_A']['message_list']=='') $this->magic_vars['_A']['message_list'] = array();  $_from = $this->magic_vars['_A']['message_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['send_username'])) $this->magic_vars['item']['send_username'] = ''; echo $this->magic_vars['item']['send_username']; ?></td>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['receive_username'])) $this->magic_vars['item']['receive_username'] = ''; echo $this->magic_vars['item']['receive_username']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>已看<? else: ?>未看<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td> <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del<? if (!isset($this->magic_vars['site_url'])) $this->magic_vars['site_url'] = ''; echo $this->magic_vars['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">删除</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> 状态<select id="status" ><option value="">全部</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>已通过</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>未通过</option></select> <input type="button" value="搜索" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<script>
var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>';

function sousuo(){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var status = $("#status").val();
	if (status!=""){
		sou += "&status="+status;
	}
	if (sou!=""){
	location.href=url+sou;
	}
}
</script>



<? endif; ?>