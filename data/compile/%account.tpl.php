<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">用户名</td>
			<td width="" class="main_td">真实姓名</td>
			<td width="" class="main_td">总余额</td>
			<td width="" class="main_td">可用余额</td>
			<td width="" class="main_td">冻结金额</td>
			<td width="" class="main_td">待收金额</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_list']) || $this->magic_vars['_A']['account_list']=='') $this->magic_vars['_A']['account_list'] = array();  $_from = $this->magic_vars['_A']['account_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("用户详细信息查看","url:get?index.php?admin&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元</td>
			<td ><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = '';$_tmp = $this->magic_vars['item']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元</td>
			<td ><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元</td>
			<td ><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> <input type="button" value="搜索" / onclick="sousuo()">
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

<!--提现记录列表 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="cash"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">用户名称</td>
			<td width="*" class="main_td">真实姓名</td>
			<td width="" class="main_td">提现账号</td>
			<td width="" class="main_td">提现银行</td>
			<td width="" class="main_td">支行</td>
			<td width="" class="main_td">提现总额</td>
			<td width="" class="main_td">到账金额</td>
			<td width="" class="main_td">手续费</td>
			<td width="" class="main_td">提现时间</td>
			<td width="" class="main_td">状态</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_cash_list']) || $this->magic_vars['_A']['account_cash_list']=='') $this->magic_vars['_A']['account_cash_list'] = array();  $_from = $this->magic_vars['_A']['account_cash_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['bank_name'])) $this->magic_vars['item']['bank_name'] = ''; echo $this->magic_vars['item']['bank_name']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['branch'])) $this->magic_vars['item']['branch'] = ''; echo $this->magic_vars['item']['branch']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['credited'])) $this->magic_vars['item']['credited'] = ''; echo $this->magic_vars['item']['credited']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = ''; echo $this->magic_vars['item']['fee']; ?></td>	
			<td ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>审核中<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> 已通过 <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>被拒绝<? endif; ?></td>
			<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">审核/查看</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		<input type="button" onclick="javascript:location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash&status=<? if (!isset($_REQUEST['status'])) $_REQUEST['status'] = ''; echo $_REQUEST['status']; ?>&type=excel'" value="导出列表" />
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> 状态<select id="status" ><option value="">全部</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>已通过</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>未通过</option></select> <input type="button" value="搜索" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!--提现记录列表 结束-->


<!--提现审核 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "cash_view"): ?>
<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>提现审核/查看</strong></div>

	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['username'])) $this->magic_vars['_A']['account_cash_result']['username'] = ''; echo $this->magic_vars['_A']['account_cash_result']['username']; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">提现银行：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['bank_name'])) $this->magic_vars['_A']['account_cash_result']['bank_name'] = ''; echo $this->magic_vars['_A']['account_cash_result']['bank_name']; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">提现支行：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['branch'])) $this->magic_vars['_A']['account_cash_result']['branch'] = ''; echo $this->magic_vars['_A']['account_cash_result']['branch']; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">提现账号：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['account'])) $this->magic_vars['_A']['account_cash_result']['account'] = ''; echo $this->magic_vars['_A']['account_cash_result']['account']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">提现总额：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['total'])) $this->magic_vars['_A']['account_cash_result']['total'] = ''; echo $this->magic_vars['_A']['account_cash_result']['total']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">到账金额：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['credited'])) $this->magic_vars['_A']['account_cash_result']['credited'] = ''; echo $this->magic_vars['_A']['account_cash_result']['credited']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">费率：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['fee'])) $this->magic_vars['_A']['account_cash_result']['fee'] = ''; echo $this->magic_vars['_A']['account_cash_result']['fee']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
		<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>提现审核中<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> 提现已通过 <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>提现被拒绝<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">添加时间/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['addtime'])) $this->magic_vars['_A']['account_cash_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['account_cash_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['account_cash_result']['addip'])) $this->magic_vars['_A']['account_cash_result']['addip'] = ''; echo $this->magic_vars['_A']['account_cash_result']['addip']; ?></div>
	</div>
	
	<? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==0): ?>
	<div class="module_title"><strong>审核此提现信息</strong></div>
	
	<div class="module_border">
		<div class="l">状态:</div>
		<div class="c">
		<input type="radio" name="status" value="0" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==0): ?> checked="checked"<? endif; ?> />等待审核  <input type="radio" name="status" value="1" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==1): ?> checked="checked"<? endif; ?>/>审核通过 <input type="radio" name="status" value="2" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==2): ?> checked="checked"<? endif; ?>/>审核不通过 </div>
	</div>
	
	<div class="module_border" >
		<div class="l">到账金额:</div>
		<div class="c">
			<input type="text" name="credited" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['credited'])) $this->magic_vars['_A']['account_cash_result']['credited'] = ''; echo $this->magic_vars['_A']['account_cash_result']['credited']; ?>" size="10">（一旦审核通过将不可再进行修改）
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">费率:</div>
		<div class="c">
			<input type="text" name="fee" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['fee'])) $this->magic_vars['_A']['account_cash_result']['fee'] = ''; echo $this->magic_vars['_A']['account_cash_result']['fee']; ?>" size="5">
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['account_result']['verify_remark'])) $this->magic_vars['_A']['account_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_result']['verify_remark']; ?></textarea>
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['id'])) $this->magic_vars['_A']['account_cash_result']['id'] = ''; echo $this->magic_vars['_A']['account_cash_result']['id']; ?>" />
		<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['user_id'])) $this->magic_vars['_A']['account_cash_result']['user_id'] = ''; echo $this->magic_vars['_A']['account_cash_result']['user_id']; ?>" />
		<input type="submit"  name="reset" value="审核此提现信息" />
	</div>
	<? else: ?>
	<div class="module_border">
		<div class="l">审核信息：</div>
		<div class="c">
			审核人：<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_username'])) $this->magic_vars['_A']['account_cash_result']['verify_username'] = ''; echo $this->magic_vars['_A']['account_cash_result']['verify_username']; ?>,审核时间：<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_time'])) $this->magic_vars['_A']['account_cash_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['account_cash_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>,审核备注：<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_remark'])) $this->magic_vars['_A']['account_cash_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_cash_result']['verify_remark']; ?>
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



<!--充值记录列表 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="recharge"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">用户名称</td>
			<td width="" class="main_td">类型</td>
			<td width="" class="main_td">所属银行</td>
			<td width="" class="main_td">充值金额</td>
			<td width="" class="main_td">费用</td>
			<td width="" class="main_td">到账金额</td>
			<td width="" class="main_td">充值时间</td>
			<td width="" class="main_td">状态</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_recharge_list']) || $this->magic_vars['_A']['account_recharge_list']=='') $this->magic_vars['_A']['account_recharge_list'] = array();  $_from = $this->magic_vars['_A']['account_recharge_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/recharge&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==1): ?>网上充值<? else: ?>线下充值<? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['payment'])) $this->magic_vars['item']['payment']=''; ;if (  $this->magic_vars['item']['payment']==0): ?>手动充值<? else: ?><? if (!isset($this->magic_vars['item']['payment_name'])) $this->magic_vars['item']['payment_name'] = ''; echo $this->magic_vars['item']['payment_name']; ?><? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?>元</td>
			<td ><? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = ''; echo $this->magic_vars['item']['fee']; ?>元</td>
			<td ><font color="#FF0000"><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?>元</font></td>
			<td ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><font color="#6699CC">审核</font><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> 成功 <? else: ?><font color="#FF0000">失败</font><? endif; ?></td>
			<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/recharge_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">审核/查看</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		 <A href="?<? if (!isset($this->magic_vars['_A']['query_string'])) $this->magic_vars['_A']['query_string'] = ''; echo $this->magic_vars['_A']['query_string']; ?>&type=excel">导出当前报表</A>
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> 状态<select id="status" ><option value="">全部</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>已通过</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>未通过</option></select> <input type="button" value="搜索" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!--充值记录列表 结束-->
<!--提现审核 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "recharge_view"): ?>
<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>充值查看</strong></div>

	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("用户详细信息查看","url:get?index.php?admin&q=module/user/view&user_id=<? if (!isset($this->magic_vars['_A']['account_recharge_result']['user_id'])) $this->magic_vars['_A']['account_recharge_result']['user_id'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['_A']['account_recharge_result']['username'])) $this->magic_vars['_A']['account_recharge_result']['username'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['username']; ?></a>
		</div>
	</div>

	<div class="module_border">
		<div class="l">充值类型：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['type'])) $this->magic_vars['_A']['account_recharge_result']['type']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['type']==1): ?>网上充值<? else: ?>线下充值<? endif; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">支付方式：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['payment_name'])) $this->magic_vars['_A']['account_recharge_result']['payment_name'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['payment_name']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">充值总额：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['money'])) $this->magic_vars['_A']['account_recharge_result']['money'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['money']; ?>元
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">费用：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['fee'])) $this->magic_vars['_A']['account_recharge_result']['fee'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['fee']; ?>元
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">实际到账：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['total'])) $this->magic_vars['_A']['account_recharge_result']['total'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['total']; ?>元
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">用户备注：</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['remark'])) $this->magic_vars['_A']['account_recharge_result']['remark'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['remark']; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">流水号：</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['remark'])) $this->magic_vars['_A']['account_recharge_result']['remark'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['remark']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['status']==0): ?>等待审核<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;elseif (   $this->magic_vars['_A']['account_recharge_result']['status']==1): ?> 充值成功 <? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;elseif (  $this->magic_vars['_A']['account_recharge_result']['status']==2): ?>充值失败<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">添加时间/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['addtime'])) $this->magic_vars['_A']['account_recharge_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['account_recharge_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['account_recharge_result']['addip'])) $this->magic_vars['_A']['account_recharge_result']['addip'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['addip']; ?></div>
	</div>
	
	<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['status']==0): ?>
	<div class="module_title"><strong>审核此充值信息</strong></div>
	
	<div class="module_border">
		<div class="l">状态:</div>
		<div class="c">
	<input type="radio" name="status" value="1"/>充值成功   <input type="radio" name="status" value="2"  checked="checked"/>充值失败 </div>
	</div>
	
	<div class="module_border" >
		<div class="l">到账金额:</div>
		<div class="c">
			<input type="text" name="total" value="<? if (!isset($this->magic_vars['_A']['account_recharge_result']['total'])) $this->magic_vars['_A']['account_recharge_result']['total'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['total']; ?>" size="15" readonly="">（一旦审核通过将不可再进行修改）
		</div>
	</div>
	
	<div class="module_border" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['account_recharge_result']['verify_remark'])) $this->magic_vars['_A']['account_recharge_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['verify_remark']; ?></textarea>
		</div>
	</div>

	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['account_recharge_result']['id'])) $this->magic_vars['_A']['account_recharge_result']['id'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['id']; ?>" />
		
		<input type="submit"  name="reset" value="审核此充值信息" />
	</div>
	<? else: ?>
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['type'])) $this->magic_vars['_A']['account_recharge_result']['type']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['type']==2): ?>
	<div class="module_border">
		<div class="l">审核信息：</div>
		<div class="c">
			审核人：<? if (!isset($this->magic_vars['_A']['account_result']['verify_username'])) $this->magic_vars['_A']['account_result']['verify_username'] = ''; echo $this->magic_vars['_A']['account_result']['verify_username']; ?>,审核时间：<? if (!isset($this->magic_vars['_A']['account_result']['verify_time'])) $this->magic_vars['_A']['account_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['account_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>,审核备注：<? if (!isset($this->magic_vars['_A']['account_result']['verify_remark'])) $this->magic_vars['_A']['account_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_result']['verify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
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




<!--添加充值记录 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "recharge_new"): ?>

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>添加充值</strong></div>

	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">类型：</div>
		<div class="c">
			线下充值<input type="hidden" name="type" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">金额：</div>
		<div class="c">
			<input type="text" name="money" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">备注：</div>
		<div class="c">
			<input type="text" name="remark" />
		</div>
	</div>
	
	<div class="module_submit" >
		
		<input type="submit"  name="reset" value="确认充值" />
	</div>
</form>
</div>

<!--添加充值记录 结束-->




<!--添加充值记录 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "deduct"): ?>

<div class="module_add">
	
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data" >
	<div class="module_title"><strong>费用扣除</strong></div>

	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">类型：</div>
		<div class="c">
			<select name="type">
				<option value="scene_account">现场认证费用</option>
				<option value="vouch_advanced">担保垫付扣费</option>
				<option value="borrow_kouhui">借款人罚金扣回</option>
				<option value="account_other">其他</option>
			</select>
		</div>
	</div>
	<div class="module_border">
		<div class="l">金额：</div>
		<div class="c">
			<input type="text" name="money" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">备注：</div>
		<div class="c">
			<input type="text" name="remark" />比如，现场费用扣除200元
		</div>
	</div>
	<div class="module_border">
		<div class="l">验证码：</div>
		<div class="c"><input  class="user_aciton_input"  name="valicode" type="text" size="8" maxlength="4" style=" padding-top:4px; height:16px; width:70px;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		
		<input type="submit"  name="reset" value="确定扣除" />
	</div>
</form>
</div>

<!--添加充值记录 结束-->

<!--资金使用记录列表 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="log"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">用户名称</td>
			<td width="" class="main_td">类型</td>
			<td width="" class="main_td">总金额</td>
			<td width="" class="main_td">操作金额</td>
			<td width="" class="main_td">可用金额</td>
			<td width="" class="main_td">冻结金额</td>
			<td width="" class="main_td">待收金额</td>
			<td width="" class="main_td">交易对方</td>
			<td width="" class="main_td">记录时间</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_log_list']) || $this->magic_vars['_A']['account_log_list']=='') $this->magic_vars['_A']['account_log_list'] = array();  $_from = $this->magic_vars['_A']['account_log_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/recharge&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"account_type");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username'] = '';$_tmp = $this->magic_vars['item']['to_username'];$_tmp = $this->magic_modifier("default",$_tmp,"admin");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">审核/查看</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		
		</div>
		<div class="floatr">
			时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		<? $result = $this->magic_vars['_G']['_linkage']['account_type']; echo "<select name='type' id=type >"; echo "<option value=''>全部</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['type']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?> 用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> 状态<select id="status" ><option value="">全部</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>已通过</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>未通过</option></select> <input type="button" value="搜索" / onclick="sousuo()">
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!--资金使用记录列表 结束-->


<? endif; ?>
<script>
var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type'] = ''; echo $this->magic_vars['_A']['query_type']; ?>';

function sousuo(){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var status = $("#status").val();
	if (status!="" && status!=null){
		sou += "&status="+status;
	}
	var dotime1 = $("#dotime1").val();
	var keywords = $("#keywords").val();
	var username = $("#username").val();
	var dotime2 = $("#dotime2").val();
	var type = $("#type").val();
	if (username!=null){
		 sou += "&username="+username;
	}
	if (keywords!=null){
		 sou += "&keywords="+keywords;
	}
	if (dotime1!=null){
		 sou += "&dotime1="+dotime1;
	}
	if (dotime2!=null){
		 sou += "&dotime2="+dotime2;
	}
	if (type!=null){
		 sou += "&type="+type;
	}
	
	if (sou!=""){
	location.href=url+sou;
	}
}

</script>
