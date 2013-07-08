<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit" ||  $this->magic_vars['_A']['query_type'] == "start"): ?>
<div class="module_add">
<form name="form1" method="post" action=""  enctype="multipart/form-data">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?></strong></div>
		
		
	
	
	<div class="module_border">
		<div class="w">支付方式名称：</div>
		<div class="c">
			<input type="text" name="name"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['payment_result']['name'])) $this->magic_vars['_A']['payment_result']['name'] = ''; echo $this->magic_vars['_A']['payment_result']['name']; ?>" size="30" />
		</div>
	</div>
	<?  if(!isset($this->magic_vars['_A']['payment_result']['fields']) || $this->magic_vars['_A']['payment_result']['fields']=='') $this->magic_vars['_A']['payment_result']['fields'] = array();  $_from = $this->magic_vars['_A']['payment_result']['fields']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<div class="module_border">
		<div class="w"><? if (!isset($this->magic_vars['item']['label'])) $this->magic_vars['item']['label'] = ''; echo $this->magic_vars['item']['label']; ?></div>
		<div class="c">
			<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']=="string"): ?>
			<input type="text" name="config[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]"  class="input_border" value="<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = ''; echo $this->magic_vars['item']['value']; ?>" size="30" />
			<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']=="select"): ?>
			<select name="config[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]">
				<?  if(!isset($this->magic_vars['item']['options']) || $this->magic_vars['item']['options']=='') $this->magic_vars['item']['options'] = array();  $_from = $this->magic_vars['item']['options']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['_key'] =>  $this->magic_vars['var']):
?>
				<option value="<? if (!isset($this->magic_vars['_key'])) $this->magic_vars['_key'] = ''; echo $this->magic_vars['_key']; ?>" <? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value']='';if (!isset($this->magic_vars['_key'])) $this->magic_vars['_key']=''; ;if (  $this->magic_vars['item']['value']== $this->magic_vars['_key']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var'])) $this->magic_vars['var'] = ''; echo $this->magic_vars['var']; ?></option>
				<? endforeach; endif; unset($_from); ?>
			</select>
			<? endif; ?>
		</div>
	</div>
	<? endforeach; endif; unset($_from); ?>
	
	
	<div class="module_border">
		<div class="w">支付手续费设置：</div>
		<div class="c">
			<input type="radio" name="fee_type" value="0"  <? if (!isset($this->magic_vars['_A']['payment_result']['fee_type'])) $this->magic_vars['_A']['payment_result']['fee_type']='';if (!isset($this->magic_vars['_A']['payment_result']['fee_type'])) $this->magic_vars['_A']['payment_result']['fee_type']=''; ;if (  $this->magic_vars['_A']['payment_result']['fee_type'] == 0 || $this->magic_vars['_A']['payment_result']['fee_type'] ==""): ?>checked="checked"<? endif; ?> onclick="change(0)"/>按比例收费 <input type="radio" name="fee_type" value="1"  <? if (!isset($this->magic_vars['_A']['payment_result']['fee_type'])) $this->magic_vars['_A']['payment_result']['fee_type']=''; ;if (  $this->magic_vars['_A']['payment_result']['fee_type'] ==1): ?>checked="checked"<? endif; ?> onclick="change(1)"/>固定费用 </div>
	</div>
	<div class="module_border">
		<div class="w"></div>
		<div class="c">
			<div id="fee"> 费率：<input type="text" name="max_fee" size="5" />% 说明：顾客将支付订单总金额乘以此费率作为手续费</div>
			<div id="fee_money" style="display:none"> 金额：<input type="text" name="max_money" size="5" />% 说明：顾客每笔订单需要支付的手续费；</div>
		 </div>
	</div>
	<div class="module_border">
		<div class="w">排序:</div>
		<div class="c">
			<input type="text" name="order"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['payment_result']['order'])) $this->magic_vars['_A']['payment_result']['order'] = '';$_tmp = $this->magic_vars['_A']['payment_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="10" />
		</div>
	</div>

	
	<div class="module_border">
		<div class="w">描述：</div>
		<div class="c">
			<?  if (!isset($this->magic_vars['_A']['payment_result']['description'])) $this->magic_vars['_A']['payment_result']['description']=''; ; $name = "description" ; $value = $this->magic_vars['_A']['payment_result']['description'];require_once(ROOT_PATH ."/plugins/editor/sinaeditor/Editor.class.php");
$editor=new sinaEditor($name);
	$editor->Value= "$value";

	$editor->AutoSave=false;
	echo $editor->Create(); ?>
		</div>
	</div>
	
	<div class="module_submit" >
		<input type="hidden" name="nid" value="<? if (!isset($this->magic_vars['_A']['payment_result']['nid'])) $this->magic_vars['_A']['payment_result']['nid'] = ''; echo $this->magic_vars['_A']['payment_result']['nid']; ?>" />
		<input type="hidden" name="status" value="<? if (!isset($this->magic_vars['_A']['payment_result']['status'])) $this->magic_vars['_A']['payment_result']['status'] = '';$_tmp = $this->magic_vars['_A']['payment_result']['status'];$_tmp = $this->magic_modifier("default",$_tmp,"1");echo $_tmp;unset($_tmp); ?>" />
		<input type="hidden" name="type" value="<? if (!isset($this->magic_vars['_A']['payment_result']['type'])) $this->magic_vars['_A']['payment_result']['type'] = ''; echo $this->magic_vars['_A']['payment_result']['type']; ?>" />
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>
		<input type="hidden" name="id" value="<? if (!isset($_REQUEST['id'])) $_REQUEST['id'] = ''; echo $_REQUEST['id']; ?>" />
		<? endif; ?>
		<input type="submit"  name="submit" value="确认提交" />
		<input type="reset"  name="reset" value="重置表单" />
	</div>
	
</div>
</form>

<script>
function change(type){
	if (type==1){
		$("#fee").hide();
		$("#fee_money").show();
	}else{
		$("#fee_money").hide();
		$("#fee").show();
	}

}
function check_form(){
/*
	 var frm = document.forms['form1'];
	 var title = frm.elements['name'].value;
	 var errorMsg = '';
	  if (title.length == 0 ) {
		errorMsg += '标题必须填写' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
	  */
}

</script>


<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "all"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/action<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>" method="post">
	<tr >
		<td width="*" class="main_td">支付LOGO</td>
		<td width="*" class="main_td">支付名称</td>
		<td width="*" class="main_td">支付介绍</td>
		<td width="" class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['payment_list']) || $this->magic_vars['_A']['payment_list']=='') $this->magic_vars['_A']['payment_list'] = array();  $_from = $this->magic_vars['_A']['payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr class="tr1">
		<td><img src="<? if (!isset($this->magic_vars['item']['logo'])) $this->magic_vars['item']['logo'] = ''; echo $this->magic_vars['item']['logo']; ?>" height="50" /></td>
		<td><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['description'])) $this->magic_vars['item']['description'] = ''; echo $this->magic_vars['item']['description']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==1): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/start<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&nid=<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>" >开启</a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&nid=<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>" >添加</a><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		
	</form>	
</table>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/action<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>" method="post">
	<tr >
		<td width="*" class="main_td">支付LOGO</td>
		<td width="*" class="main_td">支付名称</td>
		<td width="*" class="main_td">支付介绍</td>
		<td width="" class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['payment_list']) || $this->magic_vars['_A']['payment_list']=='') $this->magic_vars['_A']['payment_list'] = array();  $_from = $this->magic_vars['_A']['payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr class="tr1">
		<td><img src="<? if (!isset($this->magic_vars['item']['logo'])) $this->magic_vars['item']['logo'] = ''; echo $this->magic_vars['item']['logo']; ?>" height="50" /></td>
		<td><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['description'])) $this->magic_vars['item']['description'] = ''; echo $this->magic_vars['item']['description']; ?></td>
		<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&nid=<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" >配置</a> |  <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a> | <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/list<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&nid=<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&status=0" >停用</a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/list<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&nid=<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&status=1" >启用</a><? endif; ?> </td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		
	</form>
</table>
<? endif; ?>