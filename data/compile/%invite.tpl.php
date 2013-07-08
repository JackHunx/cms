<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<div class="module_add">
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?>招聘</strong></div>
	
	<div class="module_border">
		<div class="l">招聘名称：</div>
		<div class="c">
			<input type="text" name="name"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['invite_result']['name'])) $this->magic_vars['_A']['invite_result']['name'] = ''; echo $this->magic_vars['_A']['invite_result']['name']; ?>" size="30" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">类别：</div>
		<div class="c">
			<select name="type_id">
			<?  if(!isset($this->magic_vars['_A']['invite_type_list']) || $this->magic_vars['_A']['invite_type_list']=='') $this->magic_vars['_A']['invite_type_list'] = array();  $_from = $this->magic_vars['_A']['invite_type_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<option  value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" <? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id']='';if (!isset($this->magic_vars['_A']['invite_result']['type_id'])) $this->magic_vars['_A']['invite_result']['type_id']=''; ;if (  $this->magic_vars['item']['id']== $this->magic_vars['_A']['invite_result']['type_id']): ?> selected="selected"<? endif; ?> /><? if (!isset($this->magic_vars['item']['typename'])) $this->magic_vars['item']['typename'] = ''; echo $this->magic_vars['item']['typename']; ?></option>
			<? endforeach; endif; unset($_from); ?>
			</select>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">属性：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['invite_result']['flag'])) $this->magic_vars['_A']['invite_result']['flag'] = '';$_tmp = $this->magic_vars['_A']['invite_result']['flag'];$_tmp = $this->magic_modifier("flag",$_tmp,"input");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			<input type="radio" name="status" value="0"  <? if (!isset($this->magic_vars['_A']['invite_result']['status'])) $this->magic_vars['_A']['invite_result']['status']=''; ;if (  $this->magic_vars['_A']['invite_result']['status'] == 0): ?>checked="checked"<? endif; ?>/>隐藏 <input type="radio" name="status" value="1"  <? if (!isset($this->magic_vars['_A']['invite_result']['status'])) $this->magic_vars['_A']['invite_result']['status']='';if (!isset($this->magic_vars['_A']['invite_result']['status'])) $this->magic_vars['_A']['invite_result']['status']=''; ;if (  $this->magic_vars['_A']['invite_result']['status'] ==1 || $this->magic_vars['_A']['invite_result']['status'] ==""): ?>checked="checked"<? endif; ?>/>显示 
		</div>
	</div>

	<div class="module_border">
		<div class="l">排序：</div>
		<div class="c">
			<input type="text" name="order"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['invite_result']['order'])) $this->magic_vars['_A']['invite_result']['order'] = '';$_tmp = $this->magic_vars['_A']['invite_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="10" />
		</div>
	</div>


	<div class="module_border">
		<div class="l">招聘人数：</div>
		<div class="c">
			<input type="text" name="num"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['invite_result']['num'])) $this->magic_vars['_A']['invite_result']['num'] = ''; echo $this->magic_vars['_A']['invite_result']['num']; ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">工作地点：</div>
		<div class="c">
			<script src="/plugins/index.php?q=area&area=<? if (!isset($this->magic_vars['_A']['invite_result']['area'])) $this->magic_vars['_A']['invite_result']['area'] = ''; echo $this->magic_vars['_A']['invite_result']['area']; ?>"></script>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">工作描述：</div>
		<div class="c">
			<textarea name="description" cols="40" rows="5"><? if (!isset($this->magic_vars['_A']['invite_result']['description'])) $this->magic_vars['_A']['invite_result']['description'] = '';$_tmp = $this->magic_vars['_A']['invite_result']['description'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
		</div>
	</div>

	<div class="module_border">
		<div class="l">工作要求：</div>
		<div class="c">
			<textarea name="demand" cols="40" rows="5"><? if (!isset($this->magic_vars['_A']['invite_result']['demand'])) $this->magic_vars['_A']['invite_result']['demand'] = '';$_tmp = $this->magic_vars['_A']['invite_result']['demand'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
		</div>
	</div>
	
	<div class="module_submit border_b" >
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['invite_result']['id'])) $this->magic_vars['_A']['invite_result']['id'] = ''; echo $this->magic_vars['_A']['invite_result']['id']; ?>" /><? endif; ?>
		<input type="submit"  name="submit" value="确认提交" />
		<input type="reset"  name="reset" value="重置表单" />
	</div>
	</form>
</div>

<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var webname = frm.elements['webname'].value;
	 var type = frm.elements['type'].value;
	 var errorMsg = '';
	  if (webname.length == 0 ) {
		errorMsg += '招聘名称必须填写' + '\n';
	  }
	  if (type.length == 0 ) {
		errorMsg += '招聘类型必须选择' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type"): ?>
<form name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type" >
<table width="100%" border="0"  cellspacing="1" bgcolor="#CCCCCC">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">名称</td>
		<td width="" class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['invite_list']) || $this->magic_vars['_A']['invite_list']=='') $this->magic_vars['_A']['invite_list'] = array();  $_from = $this->magic_vars['_A']['invite_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="left">&nbsp;&nbsp;&nbsp;<input type="text" value="<? if (!isset($this->magic_vars['item']['typename'])) $this->magic_vars['item']['typename'] = ''; echo $this->magic_vars['item']['typename']; ?>" name="typename[]" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td class="main_td1" align="center" width="160"><a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type&del_id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a> </td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr >
		<td width="" class="action" colspan="3">新增一个招聘部门：<input type="text" name="typename1" /></td>
	</tr>
	<tr>
		<td  class="page" colspan="3"  >
		<input type="submit"  name="submit" value="确认提交" />
		</td>
	</tr>
</table>
</form>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "view"): ?>

<? else: ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
  <form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/action" method="post">
	<tr >
		<td class="main_td"><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/></td>
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">招聘名称</td>
		<td width="" class="main_td">招聘部门</td>
		<td width="" class="main_td">状态</td>
		<td width="" class="main_td">排序</td>
		<td width="" class="main_td">添加时间</td>
		<td width="" class="main_td">招聘人数</td>
		<td width="" class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['invite_list']) || $this->magic_vars['_A']['invite_list']=='') $this->magic_vars['_A']['invite_list'] = array();  $_from = $this->magic_vars['_A']['invite_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?> >
		<td class="main_td1" align="center" ><input type="checkbox" name="aid[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"/></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['typename'])) $this->magic_vars['item']['typename'] = ''; echo $this->magic_vars['item']['typename']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>显示<? else: ?>隐藏<? endif; ?></td>
		<td class="main_td1" align="center"><input type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = '';$_tmp = $this->magic_vars['item']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" name="order[]" size="5" /><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['num'])) $this->magic_vars['item']['num'] = ''; echo $this->magic_vars['item']['num']; ?></td>
		<td class="main_td1" align="center" ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">修改</a> / <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>'">删除</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
	<td colspan="9" class="action">
		<div class="floatl"> 
		<select name="type">
		<option value="0">排序</option>
		<option value="1">显示</option>
		<option value="2">隐藏</option>
		<option value="3">推荐</option>
		<option value="4">头条</option>
		<option value="5">幻灯片</option>
		<option value="6">删除</option>&nbsp;&nbsp;&nbsp;
		</select> <input type="submit" value="确认操作" /> 排序不用全选
		</div>
		<div class="floatr">
		招聘名称：<input type="text" name="keywords" id="keywords" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"/>
		<input type="button" value="搜索" onclick="sousuo()" />
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
	var keywords = $("#keywords").val();
	location.href=url+"&keywords="+keywords;
}
</script>

<? endif; ?>