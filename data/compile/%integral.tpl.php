<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<div class="module_add">
	<form name="form1" method="post" action="" onsubmit="return check_form();" enctype="multipart/form-data">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?>积分</strong></div>
	
	<div class="module_border">
		<div class="l">礼品名称：</div>
		<div class="c">
			<input type="text" name="name"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['integral_result']['name'])) $this->magic_vars['_A']['integral_result']['name'] = ''; echo $this->magic_vars['_A']['integral_result']['name']; ?>" size="30" />
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">属性：</div>
		<div class="c">
			<?  if(!isset($this->magic_vars['_A']['flag_list']) || $this->magic_vars['_A']['flag_list']=='') $this->magic_vars['_A']['flag_list'] = array();  $_from = $this->magic_vars['_A']['flag_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?><input type="checkbox" name="flag[]" value="<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>" <? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = '';$_tmp = $this->magic_vars['var']['nid']; if (!isset($this->magic_vars['_A']['integral_result']['flag'])) $this->magic_vars['_A']['integral_result']['flag'] = '';
$_tmp = $this->magic_modifier("checked",$_tmp,$this->magic_vars['_A']['integral_result']['flag']);echo $_tmp;unset($_tmp); ?>/><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?> <? endforeach; endif; unset($_from); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			<input type="radio" name="status" value="0"  <? if (!isset($this->magic_vars['_A']['integral_result']['status'])) $this->magic_vars['_A']['integral_result']['status']=''; ;if (  $this->magic_vars['_A']['integral_result']['status'] == 0): ?>checked="checked"<? endif; ?>/>隐藏 <input type="radio" name="status" value="1"  <? if (!isset($this->magic_vars['_A']['integral_result']['status'])) $this->magic_vars['_A']['integral_result']['status']='';if (!isset($this->magic_vars['_A']['integral_result']['status'])) $this->magic_vars['_A']['integral_result']['status']=''; ;if (  $this->magic_vars['_A']['integral_result']['status'] ==1 || $this->magic_vars['_A']['integral_result']['status'] ==""): ?>checked="checked"<? endif; ?>/>显示 
		</div>
	</div>

	<div class="module_border">
		<div class="l">排序：</div>
		<div class="c">
			<input type="text" name="order"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['integral_result']['order'])) $this->magic_vars['_A']['integral_result']['order'] = '';$_tmp = $this->magic_vars['_A']['integral_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="10" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">缩略图：</div>
		<div class="c">
			<input type="file" name="litpic" size="30" class="input_border"/><? if (!isset($this->magic_vars['_A']['integral_result']['litpic'])) $this->magic_vars['_A']['integral_result']['litpic']=''; ;if (  $this->magic_vars['_A']['integral_result']['litpic']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['integral_result']['litpic'])) $this->magic_vars['_A']['integral_result']['litpic'] = ''; echo $this->magic_vars['_A']['integral_result']['litpic']; ?>" target="_blank" title="有图片"><img src="<? if (!isset($this->magic_vars['_A']['tpldir'])) $this->magic_vars['_A']['tpldir'] = ''; echo $this->magic_vars['_A']['tpldir']; ?>/images/ico_1.jpg" border="0"  /></a><input type="checkbox" name="clearlitpic" value="1" />去掉缩略图<? endif; ?>
		</div>
	</div>


	<div class="module_border">
		<div class="l">所需积分：</div>
		<div class="c">
			<input type="text" name="need"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['integral_result']['need'])) $this->magic_vars['_A']['integral_result']['need'] = ''; echo $this->magic_vars['_A']['integral_result']['need']; ?>" onkeyup="value=value.replace(/[^0-9]/g,'')" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">数量：</div>
		<div class="c">
			<input type="text" name="number"  class="input_border" onkeyup="value=value.replace(/[^0-9]/g,'')" value="<? if (!isset($this->magic_vars['_A']['integral_result']['number'])) $this->magic_vars['_A']['integral_result']['number'] = ''; echo $this->magic_vars['_A']['integral_result']['number']; ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">兑换城市：</div>
		<div class="c">
			<script src="./plugins/index.php?&q=area&area=<? if (!isset($this->magic_vars['_A']['integral_result']['area'])) $this->magic_vars['_A']['integral_result']['area'] = ''; echo $this->magic_vars['_A']['integral_result']['area']; ?>" type='text/javascript' language="javascript"></script>
		</div>
	</div>

	<div class="module_border">
		<div class="l">活动积分：</div>
		<div class="c">
			<?  if (!isset($this->magic_vars['_A']['integral_result']['content'])) $this->magic_vars['_A']['integral_result']['content']=''; ; $name = "content" ; $value = $this->magic_vars['_A']['integral_result']['content'];require_once(ROOT_PATH ."/plugins/editor/sinaeditor/Editor.class.php");
$editor=new sinaEditor($name);
	$editor->Value= "$value";

	$editor->AutoSave=false;
	echo $editor->Create(); ?>
		</div>
	</div>
	
	<div class="module_submit border_b" >
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['integral_result']['id'])) $this->magic_vars['_A']['integral_result']['id'] = ''; echo $this->magic_vars['_A']['integral_result']['id']; ?>" /><? endif; ?>
		<input type="submit"  name="submit" value="确认提交" />
		<input type="reset"  name="reset" value="重置表单" />
	</div>
	</form>
</div>

<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var title = frm.elements['name'].value;
	 var content = frm.elements['content'].value;
	 var errorMsg = '';
	  if (title.length == 0 ) {
		errorMsg += '标题必须填写' + '\n';
	  }
	  if ($("#site_center").val()==""){
		errorMsg += '请选择栏目' + '\n';
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
	<div class="module_title"><strong>查看</strong></div>
	
	<div class="module_border">
		<div class="l">物品名称：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_result']['name'])) $this->magic_vars['_A']['integral_result']['name'] = ''; echo $this->magic_vars['_A']['integral_result']['name']; ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">属性：</div>
		<div class="c">
			 <? if (!isset($this->magic_vars['_A']['integral_result']['flag'])) $this->magic_vars['_A']['integral_result']['flag'] = '';$_tmp = $this->magic_vars['_A']['integral_result']['flag'];$_tmp = $this->magic_modifier("flag",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_result']['status'])) $this->magic_vars['_A']['integral_result']['status']=''; ;if (  $this->magic_vars['_A']['integral_result']['status'] == 0): ?>隐藏<? else: ?>显示<? endif; ?> 
		</div>
	</div>

	<div class="module_border">
		<div class="l">排序：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_result']['order'])) $this->magic_vars['_A']['integral_result']['order'] = ''; echo $this->magic_vars['_A']['integral_result']['order']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">缩略图：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_result']['litpic'])) $this->magic_vars['_A']['integral_result']['litpic']=''; ;if (  $this->magic_vars['_A']['integral_result']['litpic']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['integral_result']['litpic'])) $this->magic_vars['_A']['integral_result']['litpic'] = ''; echo $this->magic_vars['_A']['integral_result']['litpic']; ?>" target="_blank" title="有图片"><img src="<? if (!isset($this->magic_vars['_A']['tpldir'])) $this->magic_vars['_A']['tpldir'] = ''; echo $this->magic_vars['_A']['tpldir']; ?>/images/ico_1.jpg" border="0"  /></a><? endif; ?>
		</div>
	</div>


	<div class="module_border">
		<div class="l">所需积分：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_result']['need'])) $this->magic_vars['_A']['integral_result']['need'] = ''; echo $this->magic_vars['_A']['integral_result']['need']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">数量：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_result']['number'])) $this->magic_vars['_A']['integral_result']['number'] = ''; echo $this->magic_vars['_A']['integral_result']['number']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">兑换城市：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_result']['area'])) $this->magic_vars['_A']['integral_result']['area'] = '';$_tmp = $this->magic_vars['_A']['integral_result']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>

	<div class="module_border">
		<div class="l">活动内容：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_result']['content'])) $this->magic_vars['_A']['integral_result']['content'] = ''; echo $this->magic_vars['_A']['integral_result']['content']; ?>
		</div>
	</div>
</div>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="convert"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/action<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>" method="post">
	<tr >
		<td class="main_td">ID</td>
		<td class="main_td">礼品名称</td>
		<td  class="main_td">兑换人</td>
		<td class="main_td">数量</td>
		<td class="main_td">分值</td>
		<td class="main_td">总兑换积分</td>
		<td  class="main_td">兑换时间</td>
		<td  class="main_td">状态</td>
		<td class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['integral_convert_list']) || $this->magic_vars['_A']['integral_convert_list']=='') $this->magic_vars['_A']['integral_convert_list'] = array();  $_from = $this->magic_vars['_A']['integral_convert_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
		<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view&id=<? if (!isset($this->magic_vars['item']['integral_id'])) $this->magic_vars['item']['integral_id'] = ''; echo $this->magic_vars['item']['integral_id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>"><? if (!isset($this->magic_vars['item']['goods_name'])) $this->magic_vars['item']['goods_name'] = ''; echo $this->magic_vars['item']['goods_name']; ?></a></td>
		<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?>(<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>)</td>
		<td><? if (!isset($this->magic_vars['item']['number'])) $this->magic_vars['item']['number'] = ''; echo $this->magic_vars['item']['number']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['need'])) $this->magic_vars['item']['need'] = ''; echo $this->magic_vars['item']['need']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['integral'])) $this->magic_vars['item']['integral'] = ''; echo $this->magic_vars['item']['integral']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
		<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>已兑换<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status'] ==2): ?>关闭<? else: ?>未兑换<? endif; ?></td>
		<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/convert_view&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">查看</a></td>
	</tr><input type="hidden" name="flag[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]" value="<? if (!isset($this->magic_vars['item']['flag'])) $this->magic_vars['item']['flag'] = ''; echo $this->magic_vars['item']['flag']; ?>" />
	<? endforeach; endif; unset($_from); ?>
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
	var goods = $("#goods").val();
	location.href=url+"&goods="+goods;
}
</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "convert_view"): ?>
<div class="module_add">
	<form action="" name="form1" method="post">
	<div class="module_title"><strong>兑换信息查看</strong></div>
	<div class="module_border">
		<div class="l">物品名称：</div>
		<div class="c">
			<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view&id=<? if (!isset($this->magic_vars['_A']['integral_convert_result']['integral_id'])) $this->magic_vars['_A']['integral_convert_result']['integral_id'] = ''; echo $this->magic_vars['_A']['integral_convert_result']['integral_id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>" target="_blank"><? if (!isset($this->magic_vars['_A']['integral_convert_result']['goods_name'])) $this->magic_vars['_A']['integral_convert_result']['goods_name'] = ''; echo $this->magic_vars['_A']['integral_convert_result']['goods_name']; ?></a>
		</div>
	</div>
	

	<div class="module_border">
		<div class="l">兑换人：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_convert_result']['realname'])) $this->magic_vars['_A']['integral_convert_result']['realname'] = ''; echo $this->magic_vars['_A']['integral_convert_result']['realname']; ?>(<? if (!isset($this->magic_vars['_A']['integral_convert_result']['username'])) $this->magic_vars['_A']['integral_convert_result']['username'] = ''; echo $this->magic_vars['_A']['integral_convert_result']['username']; ?>)
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">兑换数量：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_convert_result']['number'])) $this->magic_vars['_A']['integral_convert_result']['number'] = ''; echo $this->magic_vars['_A']['integral_convert_result']['number']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">兑换分值：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_convert_result']['need'])) $this->magic_vars['_A']['integral_convert_result']['need'] = ''; echo $this->magic_vars['_A']['integral_convert_result']['need']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">应扣积分：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_convert_result']['integral'])) $this->magic_vars['_A']['integral_convert_result']['integral'] = ''; echo $this->magic_vars['_A']['integral_convert_result']['integral']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_convert_result']['status'])) $this->magic_vars['_A']['integral_convert_result']['status']=''; ;if (  $this->magic_vars['_A']['integral_convert_result']['status']!=1): ?>
			<input type="radio" name="status" value="0" checked="checked" />未兑换 <input type="radio" name="status" value="1" />已兑换 <input type="radio" name="status" value="2" />关闭此兑换（关闭后将会将积分返回到用户的积分总数去）
			<? else: ?>
				已兑换
			<? endif; ?>
		</div>
	</div>
	
	<? if (!isset($this->magic_vars['_A']['integral_convert_result']['status'])) $this->magic_vars['_A']['integral_convert_result']['status']=''; ;if (  $this->magic_vars['_A']['integral_convert_result']['status']==0): ?>
	<div class="module_border">
		<div class="l">备注：</div>
		<div class="c">
			<textarea name="remark" cols="50" rows="7"><? if (!isset($this->magic_vars['_A']['integral_convert_result']['remark'])) $this->magic_vars['_A']['integral_convert_result']['remark'] = ''; echo $this->magic_vars['_A']['integral_convert_result']['remark']; ?></textarea>
		</div>
	</div>
	
	<div class="module_submit">
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['integral_convert_result']['id'])) $this->magic_vars['_A']['integral_convert_result']['id'] = ''; echo $this->magic_vars['_A']['integral_convert_result']['id']; ?>" />
		<input type="submit" value="确认" /> 一旦确定将不能修改
	</div>
	<? else: ?>
	<div class="module_border">
		<div class="l">备注：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['integral_convert_result']['remark'])) $this->magic_vars['_A']['integral_convert_result']['remark'] = ''; echo $this->magic_vars['_A']['integral_convert_result']['remark']; ?>
		</div>
	</div>
	<? endif; ?>
	</form>

</div>

<script>
function check_form(){
	 var frm = document.forms['form1'];
	 var remark = frm.elements['remark'].value;
	 var errorMsg = '';
	  if (remark.length == 0 ) {
		errorMsg += '备注不能为空' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{
		return true;
	  }
}
</script>

<? else: ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/action<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>" method="post">
	<tr >
		<td class="main_td"><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/></td>
		<td class="main_td">ID</td>
		<td class="main_td">物品名称</td>
		<td class="main_td">所需积分</td>
		<td class="main_td">数量</td>
		<td  class="main_td">已兑换数量</td>
		<td  class="main_td">状态</td>
		<td  class="main_td">属性</td>
		<td class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['integral_list']) || $this->magic_vars['_A']['integral_list']=='') $this->magic_vars['_A']['integral_list'] = array();  $_from = $this->magic_vars['_A']['integral_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
		<td><input type="checkbox" name="aid[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>"/></td>
		<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['need'])) $this->magic_vars['item']['need'] = ''; echo $this->magic_vars['item']['need']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['number'])) $this->magic_vars['item']['number'] = ''; echo $this->magic_vars['item']['number']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['ex_number'])) $this->magic_vars['item']['ex_number'] = ''; echo $this->magic_vars['item']['ex_number']; ?></td>
		<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&status=0&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">显示</a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&status=1&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">隐藏</a><? endif; ?></td>
		<td ><? if (!isset($this->magic_vars['item']['flagname'])) $this->magic_vars['item']['flagname'] = '';$_tmp = $this->magic_vars['item']['flagname'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?><? if (!isset($this->magic_vars['item']['litpic'])) $this->magic_vars['item']['litpic']=''; ;if (  $this->magic_vars['item']['litpic']!=""): ?>图片<? endif; ?></td>
		<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/convert&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">兑换人</a>  <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">查看</a> <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">编辑</a> <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>'">删除</a></td>
	</tr><input type="hidden" name="flag[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]" value="<? if (!isset($this->magic_vars['item']['flag'])) $this->magic_vars['item']['flag'] = ''; echo $this->magic_vars['item']['flag']; ?>" />
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
		物品名称：<input type="text" name="goods" id="goods" value="<? if (!isset($_REQUEST['goods'])) $_REQUEST['goods'] = ''; echo $_REQUEST['goods']; ?>"/>
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
	var goods = $("#goods").val();
	location.href=url+"&goods="+goods;
}
</script>

<? endif; ?>