
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="back"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post" name="back_form">
	
	<tr   >
	  <td width="10%" class="main_td"><input type="checkbox" name="allcheck" onclick="selectAll()" checked="checked" /></td>
	  <td width="*" class="main_td"><strong>表名</strong></td>
	  <td width="20%" class="main_td"><strong>记录数</strong></td>
	  <td width="28%" class="main_td"><strong>操作</strong></td>
	</tr>
	<?  if(!isset($this->magic_vars['result']) || $this->magic_vars['result']=='') $this->magic_vars['result'] = array();  $_from = $this->magic_vars['result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
	  <td class="main_td1"><input type="checkbox" name="name[]" value="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" checked="checked" /> </td>
	  <td align="left" class="main_td1">&nbsp;&nbsp;<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
	 
	  <td class="main_td1"><? if (!isset($this->magic_vars['item']['num'])) $this->magic_vars['item']['num'] = ''; echo $this->magic_vars['item']['num']; ?></td>
	   <td class="main_td1"><a href="javascript:void(0);" onclick="getAjaxTable('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/show&table=<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>');">查看结构</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr   >
	  <td colspan="4"  class="submit">&nbsp;&nbsp;<strong>备份操作</strong>  当前数据库版本 ：<? if (!isset($this->magic_vars['mysql_version'])) $this->magic_vars['mysql_version'] = ''; echo $this->magic_vars['mysql_version']; ?>  分卷大小：<input type="text" size="10" value="1024" name="size"/> K  <input type="submit" value="开始备份" /> <input type="button" onclick="location.href='data/dbbackup/dbbackup.zip'" value="下载到本地" /><input type="hidden" name="total" value="<? if (!isset($this->magic_vars['total'])) $this->magic_vars['total'] = ''; echo $this->magic_vars['total']; ?>" /></td>
	</tr>
	</form>
</table>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="revert"): ?>
<table width="100%" border="0" cellspacing="1" bgcolor="#CCCCCC">
	<form action="" method="post" name="back_form" >
	<input type="hidden" name="total" value="<? if (!isset($this->magic_vars['total'])) $this->magic_vars['total'] = ''; echo $this->magic_vars['total']; ?>"/>
	<tr  class="main_td1">
	  <td width="10%" class="main_td"><input type="checkbox" name="allcheck" onclick="selectAll()" checked="checked"/></td>
	  <td width="*"  class="main_td">还原的文件</td>
	</tr>
	<? if (!isset($this->magic_vars['result'])) $this->magic_vars['result']=''; ;if (  $this->magic_vars['result']!=""): ?>
	<?  if(!isset($this->magic_vars['result']) || $this->magic_vars['result']=='') $this->magic_vars['result'] = array();  $_from = $this->magic_vars['result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
	  <td  class="main_td1"><input type="checkbox" name="name[]" value="<? if (!isset($this->magic_vars['item'])) $this->magic_vars['item'] = ''; echo $this->magic_vars['item']; ?>"  checked="checked" /> </td>
	  <td align="left"  class="main_td1">&nbsp;&nbsp;<? if (!isset($this->magic_vars['item'])) $this->magic_vars['item'] = ''; echo $this->magic_vars['item']; ?></td>
	  </tr>
	<? endforeach; endif; unset($_from); ?>
	<tr class="main_td1">
	  <td colspan="2" class="submit"><? if (!isset($this->magic_vars['show_table'])) $this->magic_vars['show_table']=''; ;if (  $this->magic_vars['show_table']==true): ?>还原表结构信息(show_table.sql)：<input type="checkbox" size="10" value="1" name="show" checked="checked" /><? endif; ?> 还原后删除备份文件：<input type="checkbox" size="10" value="1" name="delfile"/> <input type="submit" value="开始还原数据" /></td>
	</tr>
	<? else: ?>
	<tr   >
	  <td width="10%" colspan="2" align="left" class="main_td1">&nbsp;&nbsp;<strong>找不到备份文件</strong></td>
	</tr>
	<? endif; ?>
	</form>
</table>
<? endif; ?>

<script>
function selectAll(){   //全选
	 var m = document.getElementsByName('name[]');
	for ( var i=0; i< m.length ; i++ )
	{
		m[i].checked == true
			? m[i].checked = false
			: m[i].checked = true;
	}
}


</script>
