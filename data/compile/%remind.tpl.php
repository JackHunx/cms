<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_action" method="post">
	<tr >
		<td class="main_td">ID</td>
		<td class="main_td">提醒类型</td>
		<td class="main_td">标示名</td>
		<td class="main_td">排序</td>
		<td class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['remind_list']) || $this->magic_vars['_A']['remind_list']=='') $this->magic_vars['_A']['remind_list'] = array();  $_from = $this->magic_vars['_A']['remind_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td  ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td  ><input type="text" value="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" name="name[]" /></td>
		<td  width="*"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
		<td  ><input type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = '';$_tmp = $this->magic_vars['item']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" name="order[]" size="5" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td  width="130"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">管理</a> / <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a> / <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr >
		<td colspan="8"  class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
		</td>
	</tr>
	<tr >
		<td colspan="8"  class="submit">
			<input type="submit" name="submit" value="修改资料" />
		</td>
	</tr>
	</form>	
</table>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/actions" method="post">
	<tr >
		<td class="main_td">ID</td>
		<td class="main_td">提醒类型</td>
		<td class="main_td">名称</td>
		<td class="main_td">标识名</td>
		<td class="main_td">短消息</td>
		<td class="main_td">邮箱</td>
		<td class="main_td">手机短信</td>
		<td class="main_td">排序</td>
		<td class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['remind_list']['list']) || $this->magic_vars['_A']['remind_list']['list']=='') $this->magic_vars['_A']['remind_list']['list'] = array();  $_from = $this->magic_vars['_A']['remind_list']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td ><? if (!isset($this->magic_vars['_A']['remind_type_result']['name'])) $this->magic_vars['_A']['remind_type_result']['name'] = ''; echo $this->magic_vars['_A']['remind_type_result']['name']; ?></td>
		<td ><input type="text" value="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" name="name[]" size="15" /></td>
		<td ><input type="text" value="<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>" name="nid[]" size="15" /></td>
		<td >
			<select name="message[]">
				<option value="1" <? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;if (  $this->magic_vars['item']['message']==1): ?> selected="selected"<? endif; ?>>必选已选</option>
				<option value="2" <? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;if (  $this->magic_vars['item']['message']==2): ?> selected="selected"<? endif; ?>>必选未选</option>
				<option value="3" <? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;if (  $this->magic_vars['item']['message']==3): ?> selected="selected"<? endif; ?>>可选已选</option>
				<option value="4" <? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;if (  $this->magic_vars['item']['message']==4): ?> selected="selected"<? endif; ?>>可选未选</option>
			</select>
			<? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;if (  $this->magic_vars['item']['message']==1): ?><input type="checkbox" disabled="disabled" checked="checked" /><? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;elseif (  $this->magic_vars['item']['message']==2): ?> <input type="checkbox" disabled="disabled"/><? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;elseif (  $this->magic_vars['item']['message']==3): ?> <input type="checkbox" checked="checked" /><? if (!isset($this->magic_vars['item']['message'])) $this->magic_vars['item']['message']=''; ;elseif (  $this->magic_vars['item']['message']=4): ?> <input type="checkbox" /><? endif; ?>
		</td>
		<td >
			<select name="email[]">
				<option value="1" <? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;if (  $this->magic_vars['item']['email']==1): ?> selected="selected"<? endif; ?>>必选已选</option>
				<option value="2" <? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;if (  $this->magic_vars['item']['email']==2): ?> selected="selected"<? endif; ?>>必选未选</option>
				<option value="3" <? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;if (  $this->magic_vars['item']['email']==3): ?> selected="selected"<? endif; ?>>可选已选</option>
				<option value="4" <? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;if (  $this->magic_vars['item']['email']==4): ?> selected="selected"<? endif; ?>>可选未选</option>
			</select>
			<? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;if (  $this->magic_vars['item']['email']==1): ?><input type="checkbox" disabled="disabled" checked="checked" /><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;elseif (  $this->magic_vars['item']['email']==2): ?> <input type="checkbox" disabled="disabled"/><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;elseif (  $this->magic_vars['item']['email']==3): ?> <input type="checkbox" checked="checked" /><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email']=''; ;elseif (  $this->magic_vars['item']['email']=4): ?> <input type="checkbox" /><? endif; ?>
		</td>
		<td >
			<select name="phone[]">
				<option value="1" <? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;if (  $this->magic_vars['item']['phone']==1): ?> selected="selected"<? endif; ?>>必选已选</option>
				<option value="2" <? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;if (  $this->magic_vars['item']['phone']==2): ?> selected="selected"<? endif; ?>>必选未选</option>
				<option value="3" <? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;if (  $this->magic_vars['item']['phone']==3): ?> selected="selected"<? endif; ?>>可选已选</option>
				<option value="4" <? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;if (  $this->magic_vars['item']['phone']==4): ?> selected="selected"<? endif; ?>>可选未选</option>
			</select>
			<? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;if (  $this->magic_vars['item']['phone']==1): ?><input type="checkbox" disabled="disabled" checked="checked" /><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;elseif (  $this->magic_vars['item']['phone']==2): ?> <input type="checkbox" disabled="disabled"/><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;elseif (  $this->magic_vars['item']['phone']==3): ?> <input type="checkbox" checked="checked" /><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone']=''; ;elseif (  $this->magic_vars['item']['phone']=4): ?> <input type="checkbox" /><? endif; ?>
		</td>
		<td  ><input type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = '';$_tmp = $this->magic_vars['item']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" name="order[]" size="5" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td ><!--<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/subnew&id=<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>&pid=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">管理</a> /--> <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
<tr >
	<td colspan="6"  class="submit">
		<input type="submit" name="submit" value="修改" />
	</td>
</tr>
</form>	
</table>

<div class="module_add">
<form name="form1" method="post" action="" onsubmit="return check_form()" >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?> (<? if (!isset($this->magic_vars['_A']['remind_type_result']['name'])) $this->magic_vars['_A']['remind_type_result']['name'] = ''; echo $this->magic_vars['_A']['remind_type_result']['name']; ?>) 分类下的提醒</strong></div>
	
	<div class="module_border">
		<div class="l">所属类别：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['remind_type_result']['name'])) $this->magic_vars['_A']['remind_type_result']['name'] = ''; echo $this->magic_vars['_A']['remind_type_result']['name']; ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">名称：</div>
		<div class="c">
			<input type="text" name="name"  value="<? if (!isset($this->magic_vars['_A']['remind_result']['name'])) $this->magic_vars['_A']['remind_result']['name'] = ''; echo $this->magic_vars['_A']['remind_result']['name']; ?>"/> *
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">标识名：</div>
		<div class="c">
			<input type="text" name="nid"  value="<? if (!isset($this->magic_vars['_A']['remind_result']['nid'])) $this->magic_vars['_A']['remind_result']['nid'] = ''; echo $this->magic_vars['_A']['remind_result']['nid']; ?>" /> *
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">排序：</div>
		<div class="c">
			<input type="text" name="order"  value="<? if (!isset($this->magic_vars['_A']['remind_result']['order'])) $this->magic_vars['_A']['remind_result']['order'] = '';$_tmp = $this->magic_vars['_A']['remind_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" onkeyup="value=value.replace(/[^0-9]/g,'')"/>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">短信：</div>
		<div class="c">
			<select name="message">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
			(附：状态类型如下，<input type="checkbox" disabled="disabled" checked="checked" />必选已选 <input type="checkbox" disabled="disabled"/>必选未选 <input type="checkbox" checked="checked" />可选已选 <input type="checkbox" />可选未选）
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">邮箱：</div>
		<div class="c">
			<select name="email">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</div>
	</div>
	
	
	
	<div class="module_border">
		<div class="l">手机：</div>
		<div class="c">
			<select name="phone">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</div>
	</div>
	
	<div class="module_submit" >
		<input type="hidden" name="type_id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />
		<input type="submit"  name="submit" value="确认提交" />
		<input type="reset"  name="reset" value="重置表单" />
	</div>
</form>
</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/actions" method="post">
	<tr >
		<td class="main_td" colspan="6" align="left">&nbsp;批量添加</td>
	</tr>
	<tr  class="tr2">
		<td >名称</td>
		<td >标识名</td>
		<td>短消息</td>
		<td >邮箱</td>
		<td >手机短信</td>
		<td >排序</td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td>
			<select name="message[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td>
			<select name="email[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td>
			<select name="phone[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td>
			<select name="message[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td>
			<select name="email[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td>
			<select name="phone[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td>
			<select name="message[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td>
			<select name="email[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td>
			<select name="phone[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td>
			<select name="message[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td>
			<select name="email[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td>
			<select name="phone[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td>
			<select name="message[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td>
			<select name="email[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td>
			<select name="phone[]">
				<option value="1">必选已选</option>
				<option value="2">必选未选</option>
				<option value="3">可选已选</option>
				<option value="4">可选未选</option>
			</select>
		</td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	
	<input type="hidden" name="type_id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />
<tr >
	<td colspan="6"  class="submit">
		<input type="submit" name="submit" value="确认添加" />
	</td>
</tr>
</form>	
</table>

<script>
function check_form(){
	
	var frm = document.forms['form1'];
	var title = frm.elements['name'].value;
	
	 var errorMsg = '';
	  if (title == "") {
		errorMsg += '提醒的名称必须填写' + '\n';
	  }
	 
	  
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "subnew" ||  $this->magic_vars['_A']['query_type'] == "subedit"): ?>

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	 <form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/order" method="post">
	<tr >
		<td class="main_td">名称</td>
		<td class="main_td">类型</td>
		<td class="main_td">所属分类</td>
		<td class="main_td">排序</td>
		<td class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['result']) || $this->magic_vars['result']=='') $this->magic_vars['result'] = array();  $_from = $this->magic_vars['result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td  width="250"><input type="text" value="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" name="name[]" /></td>
		<td  width="150"><? if (!isset($this->magic_vars['liandong_type']['typename'])) $this->magic_vars['liandong_type']['typename'] = ''; echo $this->magic_vars['liandong_type']['typename']; ?></td>
		<td  width="150"><? if (!isset($this->magic_vars['liandong_sub']['name'])) $this->magic_vars['liandong_sub']['name'] = ''; echo $this->magic_vars['liandong_sub']['name']; ?></td>
		<td  ><input type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = '';$_tmp = $this->magic_vars['item']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" name="order[]" size="5" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td  width="130"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/subnew&id=<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>&pid=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">管理</a> / <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a> / <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
<tr >
	<td colspan="6"  class="submit">
		<input type="submit" name="submit" value="修改排序" />
	</td>
</tr>
</form>	

<form action="" method="post">
	<tr >
		<td colspan="6" class="action">
			<strong>所属提醒类型：</strong><? if (!isset($this->magic_vars['liandong_type']['typename'])) $this->magic_vars['liandong_type']['typename'] = ''; echo $this->magic_vars['liandong_type']['typename']; ?> -> <input type="text" name="name" /> <input type="submit" name="submit" value="添加" /> <input type="hidden" name="pid" value="<? if (!isset($_REQUEST['pid'])) $_REQUEST['pid'] = '';$_tmp = $_REQUEST['pid'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" /><input type="hidden" name="type_id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />
		</td>
	</tr>
	</form>	
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type_new" ||  $this->magic_vars['_A']['query_type'] == "type_edit"): ?>
<div class="module_add">

	<form name="form1" method="post" action="" >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "type_edit"): ?>编辑<? else: ?>添加<? endif; ?>提醒类型</strong></div>
	
	<div class="module_border">
		<div class="l">提醒类型名称：</div>
		<div class="c">
			<input type="text" name="name" value="<? if (!isset($this->magic_vars['_A']['remind_type_result']['name'])) $this->magic_vars['_A']['remind_type_result']['name'] = ''; echo $this->magic_vars['_A']['remind_type_result']['name']; ?>" />
		</div>
	</div>

	<div class="module_border">
		<div class="l">提醒的标识名：</div>
		<div class="c">
			<input type="text" name="nid"  value="<? if (!isset($this->magic_vars['_A']['remind_type_result']['nid'])) $this->magic_vars['_A']['remind_type_result']['nid'] = ''; echo $this->magic_vars['_A']['remind_type_result']['nid']; ?>" onkeyup="value=value.replace(/[^a-z_]/g,'')"/>
		</div>
	</div>

	<div class="module_border">
		<div class="l">排序：</div>
		<div class="c">
			<input type="text" name="order"  value="<? if (!isset($this->magic_vars['_A']['remind_type_result']['order'])) $this->magic_vars['_A']['remind_type_result']['order'] = '';$_tmp = $this->magic_vars['_A']['remind_type_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>"  onkeyup="value=value.replace(/[^0-9]/g,'')"/>
		</div>
	</div>
	
	<div class="module_submit" >
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="type_edit"): ?><input type="hidden" name="id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" /><? endif; ?>
		<input type="submit"  name="submit" value="确认提交" />
		<input type="reset"  name="reset" value="重置表单" />
	</div>
	</form>
</div>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "type_new"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_action" method="post">
	<tr >
		<td class="main_td" colspan="6" align="left">&nbsp;批量添加</td>
	</tr>
	<tr  class="tr2">
		<td >提醒类型名称</td>
		<td >提醒的标识名</td>
		<td  >排序</td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td  ><input type="text" name="order[]"  value="10"size="5" /></td>
	</tr>
	<tr >
		<td ><input type="text"  name="name[]" /></td>
		<td ><input type="text" name="nid[]" /></td>
		<td  ><input type="text" name="order[]" value="10" size="5" /></td>
	</tr>
	
<tr >
	<td colspan="6"  class="submit">
		<input type="hidden" name="type" value="add" />
		<input type="submit" name="submit" value="确认添加" />
	</td>
</tr>
</form>	
</table>
<? endif; ?>
<? endif; ?>