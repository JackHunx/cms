<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<div class="module_add">
	<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id']=''; ;if (  $_REQUEST['user_id']==""): ?>
	<form name="form1" method="post" action="" enctype="multipart/form-data" >
	<div class="module_title"><strong>请输入此信息的用户名或ID</strong></div>
	

	<div class="module_border">
		<div class="l">用户ID：</div>
		<div class="c">
			<input type="text" name="user_id"  class="input_border"  size="20" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<input type="text" name="username"  class="input_border"  size="20" />
		</div>
	</div>
	
	<div class="module_submit" >
		<input type="submit"  name="submit" value="确认提交" />
		<input type="reset"  name="reset" value="重置表单" />
	</div>
	</form>
	<? else: ?>
	<div class="module_title"><strong>添加用户信息</strong></div>
	
	<form name="form1" method="post" action=""  enctype="multipart/form-data" onsubmit="return check_form();" >
	
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = '';$_tmp = $this->magic_vars['_A']['user_result']['username']; if (!isset($this->magic_vars['_A']['limitapp_result']['username'])) $this->magic_vars['_A']['limitapp_result']['username'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['_A']['limitapp_result']['username']);echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">金额：</div>
		<div class="c">
			<input type="text" name="account" value="<? if (!isset($this->magic_vars['_A']['limitapp_result']['account'])) $this->magic_vars['_A']['limitapp_result']['account'] = ''; echo $this->magic_vars['_A']['limitapp_result']['account']; ?>" /> <span >所要增加的额度。</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">推荐人：</div>
		<div class="c">
			<input type="text" name="recommend_userid" value="<? if (!isset($this->magic_vars['_A']['limitapp_result']['recommend_userid'])) $this->magic_vars['_A']['limitapp_result']['recommend_userid'] = ''; echo $this->magic_vars['_A']['limitapp_result']['recommend_userid']; ?>" /> <span >推荐人，多个用“|”隔开。 </span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">还款方式：</div>
		<div class="c">
			<textarea name="content" rows="5" cols="50"><? if (!isset($this->magic_vars['_A']['limitapp_result']['content'])) $this->magic_vars['_A']['limitapp_result']['content'] = ''; echo $this->magic_vars['_A']['limitapp_result']['content']; ?></textarea> <span >按季度分期还款是指贷款者借款成功后,每月还息，按季还本。</span>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">其他地方详细说明：</div>
		<div class="c">
				<textarea name="other_content" rows="5" cols="50"><? if (!isset($this->magic_vars['_A']['limitapp_result']['other_content'])) $this->magic_vars['_A']['limitapp_result']['other_content'] = ''; echo $this->magic_vars['_A']['limitapp_result']['other_content']; ?></textarea> <span >其他地方详细说明 </span>
		</div>
	</div>
	
		
	<div class="module_submit" >
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><input type="hidden"  name="id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" /><? endif; ?>
		<input type="hidden"  name="user_id" value="<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" />
		<input type="submit"  name="submit" value="确认提交" />
		<input type="reset"  name="reset" value="重置表单" />
	</div>
	</form>
	
	
	<? endif; ?>
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

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "view"): ?>
<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>申请额度查看</strong></div>


	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = '';$_tmp = $this->magic_vars['_A']['user_result']['username']; if (!isset($this->magic_vars['_A']['limitapp_result']['username'])) $this->magic_vars['_A']['limitapp_result']['username'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['_A']['limitapp_result']['username']);echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">增加额度：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['limitapp_result']['account'])) $this->magic_vars['_A']['limitapp_result']['account'] = ''; echo $this->magic_vars['_A']['limitapp_result']['account']; ?> 元
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">详细说明：</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['limitapp_result']['content'])) $this->magic_vars['_A']['limitapp_result']['content'] = ''; echo $this->magic_vars['_A']['limitapp_result']['content']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">其他地方说明：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['limitapp_result']['other_content'])) $this->magic_vars['_A']['limitapp_result']['other_content'] = ''; echo $this->magic_vars['_A']['limitapp_result']['other_content']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">添加时间/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['limitapp_result']['addtime'])) $this->magic_vars['_A']['limitapp_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['limitapp_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['limitapp_result']['addip'])) $this->magic_vars['_A']['limitapp_result']['addip'] = ''; echo $this->magic_vars['_A']['limitapp_result']['addip']; ?></div>
	</div>
	
	<? if (!isset($this->magic_vars['_A']['limitapp_result']['status'])) $this->magic_vars['_A']['limitapp_result']['status']=''; ;if (  $this->magic_vars['_A']['limitapp_result']['status']!=1): ?>
	<div class="module_title"><strong>审核此借款</strong></div>
	
	<div class="module_border">
		<div class="l">状态:</div>
		<div class="c">
		<input type="radio" name="status" value="0" <? if (!isset($this->magic_vars['_A']['limitapp_result']['status'])) $this->magic_vars['_A']['limitapp_result']['status']=''; ;if (  $this->magic_vars['_A']['limitapp_result']['status']==0): ?> checked="checked"<? endif; ?> />等待审核  <input type="radio" name="status" value="1" <? if (!isset($this->magic_vars['_A']['limitapp_result']['status'])) $this->magic_vars['_A']['limitapp_result']['status']=''; ;if (  $this->magic_vars['_A']['limitapp_result']['status']==1): ?> checked="checked"<? endif; ?>/>审核通过 <input type="radio" name="status" value="2" <? if (!isset($this->magic_vars['_A']['limitapp_result']['status'])) $this->magic_vars['_A']['limitapp_result']['status']=''; ;if (  $this->magic_vars['_A']['limitapp_result']['status']==2): ?> checked="checked"<? endif; ?>/>审核不通过 </div>
	</div>
	
	
	<div class="module_border" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['limitapp_result']['verify_remark'])) $this->magic_vars['_A']['limitapp_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['limitapp_result']['verify_remark']; ?></textarea>
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['limitapp_result']['id'])) $this->magic_vars['_A']['limitapp_result']['id'] = ''; echo $this->magic_vars['_A']['limitapp_result']['id']; ?>" />
		<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['limitapp_result']['user_id'])) $this->magic_vars['_A']['limitapp_result']['user_id'] = ''; echo $this->magic_vars['_A']['limitapp_result']['user_id']; ?>" />
		<input type="submit"  name="reset" value="审核此申请" />
	</div>
	<? else: ?>
	<div class="module_border">
		<div class="l">状态:</div>
		<div class="c">
	<? if (!isset($this->magic_vars['_A']['limitapp_result']['status'])) $this->magic_vars['_A']['limitapp_result']['status']=''; ;if (  $this->magic_vars['_A']['limitapp_result']['status']==1): ?> 审核通过 <? if (!isset($this->magic_vars['_A']['limitapp_result']['status'])) $this->magic_vars['_A']['limitapp_result']['status']=''; ;elseif (  $this->magic_vars['_A']['limitapp_result']['status']==2): ?> 审核不通过<? if (!isset($this->magic_vars['_A']['limitapp_result']['status'])) $this->magic_vars['_A']['limitapp_result']['status']=''; ;elseif (  $this->magic_vars['_A']['limitapp_result']['status']==3): ?> 用户取消<? endif; ?> </div>
	</div>
	<div class="module_border">
		<div class="l">审核时间:</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['limitapp_result']['verify_time'])) $this->magic_vars['_A']['limitapp_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['limitapp_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>
		 </div>
	</div>
	<div class="module_border" >
		<div class="l">审核备注:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['limitapp_result']['verify_remark'])) $this->magic_vars['_A']['limitapp_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['limitapp_result']['verify_remark']; ?>
		</div>
	</div>
	
	<? endif; ?>
	</form>
</div>

<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var verify_remark = frm.elements['verify_remark'].value;
	 var errorMsg = '';
	  if (verify_remark.length == 0 ) {
		errorMsg += '备注必须填写' + '\n';
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
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">用户名称</td>
			<td width="*" class="main_td">申请人</td>
			<td width="" class="main_td">申请时间</td>
			<td width="" class="main_td">增加金额</td>
			<td width="" class="main_td">状态</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['limitapp_list']) || $this->magic_vars['_A']['limitapp_list']=='') $this->magic_vars['_A']['limitapp_list'] = array();  $_from = $this->magic_vars['_A']['limitapp_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>审核通过<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status'] ==0): ?>等待审核<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status'] ==3): ?>用户取消<? else: ?>审核未通过<? endif; ?></td>
			<td class="main_td1" align="center" ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view<? if (!isset($this->magic_vars['site_url'])) $this->magic_vars['site_url'] = ''; echo $this->magic_vars['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">审核</a> <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit<? if (!isset($this->magic_vars['site_url'])) $this->magic_vars['site_url'] = ''; echo $this->magic_vars['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a></td>
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