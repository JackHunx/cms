<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="" method="post"  >
	<tr >
	  <td class="main_td" width="60">版块ID</td>
	  <td width="32%" class="main_td" >版块名称</td>
	  <td width="*" class="main_td">版主</td>
	  <td width="*" class="main_td">排序</td>
	   <td class="main_td">操作</td>
	</tr>
	<? $this->magic_vars['query_type']='ActionForum';$data = array();$default = '';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::ActionForum($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?> >
	 <td ><? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" /></td>
	  <td align="left">&nbsp;<? if (!isset($this->magic_vars['var']['porder'])) $this->magic_vars['var']['porder'] = ''; echo $this->magic_vars['var']['porder']; ?><input type="text" name="name[]" value="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" size="10" /> <? if (!isset($this->magic_vars['var']['norder'])) $this->magic_vars['var']['norder']=''; ;if (  $this->magic_vars['var']['norder']<3): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new&pid=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_add.gif" /></a><? endif; ?></td>
	  <td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/admins&fid=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><? if (!isset($this->magic_vars['var']['admins'])) $this->magic_vars['var']['admins'] = '';$_tmp = $this->magic_vars['var']['admins'];$_tmp = $this->magic_modifier("default",$_tmp,"设置版主");echo $_tmp;unset($_tmp); ?></a></td>
	  <td><input type="text" name="order[]" value="<? if (!isset($this->magic_vars['var']['order'])) $this->magic_vars['var']['order'] = ''; echo $this->magic_vars['var']['order']; ?>" size="5" /></td>
	  <td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>">编辑</a> <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将删除此版块的所有文件')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&fid=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>'">删除</a> </td>
	</tr>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	<tr >
	  <td  colspan="7" class="submit" ><input type="submit" value="确认修改"  />&nbsp;&nbsp;&nbsp;<input value="添加版块" type="button" onclick="javascript:location='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new';" /></td>
	</tr>
	</form>
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>

<div class="module_add">

<form action="" method="post" name="form1" onsubmit="return check_form()"  >
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="edit"): ?><input type="hidden" value="<? if (!isset($this->magic_vars['_A']['bbs_forum_result']['id'])) $this->magic_vars['_A']['bbs_forum_result']['id'] = ''; echo $this->magic_vars['_A']['bbs_forum_result']['id']; ?>" name="id" /><? endif; ?>
<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?>版块</strong></div>

<div class="module_border">
	<div class="l">上级版块:</div>
	<div class="c">
		<select name="pid">
			<option value="0">跟目录</option>
			<? $this->magic_vars['query_type']='ActionForum';$data = array('action'=>'list');$default = '';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::ActionForum($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
			<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" <? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id']='';if (!isset($_REQUEST['pid'])) $_REQUEST['pid']='';if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id']='';if (!isset($this->magic_vars['_A']['bbs_forum_result']['pid'])) $this->magic_vars['_A']['bbs_forum_result']['pid']=''; ;if (  $this->magic_vars['var']['id']== $_REQUEST['pid'] ||  $this->magic_vars['var']['id']== $this->magic_vars['_A']['bbs_forum_result']['pid']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var']['aname'])) $this->magic_vars['var']['aname'] = ''; echo $this->magic_vars['var']['aname']; ?></option>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</select>
	</div>
</div>
<div class="module_border">
	<div class="l">排序：</div>
	<div class="c">
		<input type="text" size="5" name="order" value="<? if (!isset($this->magic_vars['_A']['bbs_forum_result']['order'])) $this->magic_vars['_A']['bbs_forum_result']['order'] = '';$_tmp = $this->magic_vars['_A']['bbs_forum_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" />
	</div>
</div>
<div class="module_border">
	<div class="l">分类/版块名称：</div>
	<div class="c">
		<input type="text" align="absmiddle" name="name" value="<? if (!isset($this->magic_vars['_A']['bbs_forum_result']['name'])) $this->magic_vars['_A']['bbs_forum_result']['name'] = ''; echo $this->magic_vars['_A']['bbs_forum_result']['name']; ?>"/>设置分类/版块名称
	</div>
</div>
<? if (!isset($_REQUEST['pid'])) $_REQUEST['pid']='';if (!isset($this->magic_vars['_A']['bbs_forum_result']['pid'])) $this->magic_vars['_A']['bbs_forum_result']['pid']=''; ;if (  $_REQUEST['pid']>0 ||  $this->magic_vars['_A']['bbs_forum_result']['pid']>0): ?>
<div class="module_border">
	<div class="l">版块图标：</div>
	<div class="c">
			<input type="text" align="absmiddle" name="picurl"  value="<? if (!isset($this->magic_vars['_A']['bbs_forum_result']['picurl'])) $this->magic_vars['_A']['bbs_forum_result']['picurl'] = ''; echo $this->magic_vars['_A']['bbs_forum_result']['picurl']; ?>"/>
	</div>
</div>

<div class="module_border">
	<div class="l">版块介绍:</div>
	<div class="c">
		<textarea rows="5" cols="40" name="content"><? if (!isset($this->magic_vars['_A']['bbs_forum_result']['content'])) $this->magic_vars['_A']['bbs_forum_result']['content'] = ''; echo $this->magic_vars['_A']['bbs_forum_result']['content']; ?></textarea>
	</div>
</div>

<div class="module_border">
	<div class="l">版块规则：</div>
	<div class="c">
			<textarea rows="5" cols="40" name="rules"><? if (!isset($this->magic_vars['_A']['bbs_forum_result']['rules'])) $this->magic_vars['_A']['bbs_forum_result']['rules'] = ''; echo $this->magic_vars['_A']['bbs_forum_result']['rules']; ?></textarea>
	</div>
</div>


<div class="module_border">
	<div class="l">帖子审核:</div>
	<div class="c">
		<input type="radio" name="isverify" value="0" <? if (!isset($this->magic_vars['_A']['bbs_forum_result']['isverify'])) $this->magic_vars['_A']['bbs_forum_result']['isverify']='';if (!isset($this->magic_vars['_A']['bbs_forum_result']['isverify'])) $this->magic_vars['_A']['bbs_forum_result']['isverify']=''; ;if (  $this->magic_vars['_A']['bbs_forum_result']['isverify']==0  ||  $this->magic_vars['_A']['bbs_forum_result']['isverify']==""): ?> checked="checked"<? endif; ?> />不需要审核    <input type="radio" name="isverify" value="1" <? if (!isset($this->magic_vars['_A']['bbs_forum_result']['isverify'])) $this->magic_vars['_A']['bbs_forum_result']['isverify']=''; ;if (  $this->magic_vars['_A']['bbs_forum_result']['isverify']==1): ?> checked="checked"<? endif; ?> />审核主题    <input type="radio" name="isverify" value="2" <? if (!isset($this->magic_vars['_A']['bbs_forum_result']['isverify'])) $this->magic_vars['_A']['bbs_forum_result']['isverify']=''; ;if (  $this->magic_vars['_A']['bbs_forum_result']['isverify']==2): ?> checked="checked"<? endif; ?> />审核主题和回复
	</div>
</div>
<? endif; ?>
<div class="module_border">
	<div class="l">是否隐藏:</div>
	<div class="c">
			<input type="radio" name="ishidden" value="0" <? if (!isset($this->magic_vars['_A']['bbs_forum_result']['ishidden'])) $this->magic_vars['_A']['bbs_forum_result']['ishidden']='';if (!isset($this->magic_vars['_A']['bbs_forum_result']['ishidden'])) $this->magic_vars['_A']['bbs_forum_result']['ishidden']=''; ;if (  $this->magic_vars['_A']['bbs_forum_result']['ishidden']==0 ||  $this->magic_vars['_A']['bbs_forum_result']['ishidden']==""): ?> checked="checked"<? endif; ?> />否    <input type="radio" name="ishidden" value="1" <? if (!isset($this->magic_vars['_A']['bbs_forum_result']['ishidden'])) $this->magic_vars['_A']['bbs_forum_result']['ishidden']=''; ;if (  $this->magic_vars['_A']['bbs_forum_result']['ishidden']==1): ?> checked="checked"<? endif; ?> />是 
	</div>
</div>

<div class="module_border">
	<div class="l">显示方式:</div>
	<div class="c">
		<select name="showtype">
			<option value="0" <? if (!isset($this->magic_vars['_A']['bbs_forum_result']['showtype'])) $this->magic_vars['_A']['bbs_forum_result']['showtype']='';if (!isset($this->magic_vars['_A']['bbs_forum_result']['showtype'])) $this->magic_vars['_A']['bbs_forum_result']['showtype']=''; ;if (  $this->magic_vars['_A']['bbs_forum_result']['showtype']==0 ||  $this->magic_vars['_A']['bbs_forum_result']['showtype']==""): ?> selected="selected"<? endif; ?> >普通方式</option>
			<option value="1" <? if (!isset($this->magic_vars['_A']['bbs_forum_result']['showtype'])) $this->magic_vars['_A']['bbs_forum_result']['showtype']=''; ;if (  $this->magic_vars['_A']['bbs_forum_result']['showtype']==1): ?> selected="selected"<? endif; ?>>横排显示</option>
		</select>
		<span>设置该分区下级子版块的显示方式</span>
	</div>
</div>

<div class="module_border">
	<div class="l">搜索关键字优化:</div>
	<div class="c">
			<textarea rows="5" cols="40" name="keywords"><? if (!isset($this->magic_vars['_A']['bbs_forum_result']['keywords'])) $this->magic_vars['_A']['bbs_forum_result']['keywords'] = ''; echo $this->magic_vars['_A']['bbs_forum_result']['keywords']; ?></textarea>
	</div>
</div>
<? if (!isset($_REQUEST['pid'])) $_REQUEST['pid']='';if (!isset($this->magic_vars['_A']['bbs_forum_result']['pid'])) $this->magic_vars['_A']['bbs_forum_result']['pid']=''; ;if (  $_REQUEST['pid']>0 ||  $this->magic_vars['_A']['bbs_forum_result']['pid']>0): ?>
<div class="module_title"><strong>权限</strong></div>

<div class="module_border">
	<div class="l">访问密码:</div>
	<div class="c">
		<input type="text" align="absmiddle" name="forumpass"  value="<? if (!isset($this->magic_vars['_A']['bbs_forum_result']['forumpass'])) $this->magic_vars['_A']['bbs_forum_result']['forumpass'] = ''; echo $this->magic_vars['_A']['bbs_forum_result']['forumpass']; ?>"/>
	</div>
</div>

<div class="module_border">
	<div class="l">允许访问用户:</div>
	<div class="c">
			<textarea rows="8" cols="20" name="forumusers"><? if (!isset($this->magic_vars['_A']['bbs_forum_result']['forumusers'])) $this->magic_vars['_A']['bbs_forum_result']['forumusers'] = ''; echo $this->magic_vars['_A']['bbs_forum_result']['forumusers']; ?></textarea>设置可以访问该版块的用户，每行填写一个用户。
	</div>
</div>

<div class="module_border">
	<div class="l">允许访问用户组:</div>
	<div class="c">
			<select id=forumgroups style="PADDING-LEFT: 5px; WIDTH: 200px" multiple size=10 name=forumgroups>
			<option value=0>所有分组</option>

<optgroup 
label=普通用户组> 

<?  if(!isset($this->magic_vars['_A']['user_type_list']) || $this->magic_vars['_A']['user_type_list']=='') $this->magic_vars['_A']['user_type_list'] = array();  $_from = $this->magic_vars['_A']['user_type_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
<? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;if (  $this->magic_vars['var']['type']==0): ?>
<option value=<? if (!isset($this->magic_vars['var']['type_id'])) $this->magic_vars['var']['type_id'] = ''; echo $this->magic_vars['var']['type_id']; ?>><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
<? endif; ?>
<? endforeach; endif; unset($_from); ?>
</optgroup>
<optgroup 
label=管理组>

<?  if(!isset($this->magic_vars['_A']['user_type_list']) || $this->magic_vars['_A']['user_type_list']=='') $this->magic_vars['_A']['user_type_list'] = array();  $_from = $this->magic_vars['_A']['user_type_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
<? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;if (  $this->magic_vars['var']['type']==1): ?>
<option value=<? if (!isset($this->magic_vars['var']['type_id'])) $this->magic_vars['var']['type_id'] = ''; echo $this->magic_vars['var']['type_id']; ?>><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
<? endif; ?>
<? endforeach; endif; unset($_from); ?>

</optgroup></select>
	</div>
</div>
<? endif; ?>
<div class="module_submit">
	<input name="" type="submit" value=" 提交 " /> <input name="" type="reset" value=" 重置 " /><input type="hidden" name="style" value="1" />
</div>

</form>
</div>

<script>
function setSelect(){
	//alert(1);
}
function check_form(){
var frm = document.forms['form1'];
 var title = frm.elements['name'].value;
 var errorMsg = '';
  if (title.length == 0 ) {
	errorMsg += '参数名称必须填写' + '\n';
  }
  var forumgroups=document.getElementById('forumgroups');
	
	
	for(var i=0;i<ts.length;i++){
setSelect("forumgroups",ts[i]);
	}
  
  if (errorMsg.length > 0){
	alert(errorMsg); return false;
  } else{  
	return true;
  }
}
</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="admins"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post"  >
	<tr >
	  <td class="main_td" width="10%">删除</td>
	  <td class="main_td"  width="20%">显示顺序</td>
	  <td class="main_td" width="30%">版主用户名</td>
	  <td width="*" class="main_td">是否上级版块</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['admins_list']) || $this->magic_vars['_A']['admins_list']=='') $this->magic_vars['_A']['admins_list'] = array();  $_from = $this->magic_vars['_A']['admins_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?> >
	 <td ><? if (!isset($this->magic_vars['item']['isup'])) $this->magic_vars['item']['isup']=''; ;if (  $this->magic_vars['item']['isup']==1): ?>-<? else: ?><input type="checkbox" value="" name="admins[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>][delid]" /><? endif; ?></td>
	  <td><? if (!isset($this->magic_vars['item']['isup'])) $this->magic_vars['item']['isup']=''; ;if (  $this->magic_vars['item']['isup']==1): ?><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?><? else: ?><input type="text" value="<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>" name="admins[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>][order]" size="4" /><? endif; ?></td>
	  <td><? if (!isset($this->magic_vars['item']['isup'])) $this->magic_vars['item']['isup']=''; ;if (  $this->magic_vars['item']['isup']==1): ?><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?><? else: ?><input type="text" value="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" name="admins[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>][name]" size="10" /><? endif; ?></td>
	  <td><? if (!isset($this->magic_vars['item']['isup'])) $this->magic_vars['item']['isup']=''; ;if (  $this->magic_vars['item']['isup']==1): ?>是<? else: ?>否<? endif; ?></td>
	  
	</tr>
	<? endforeach; endif; unset($_from); ?>
</table>
	<div id="adminsdiv" style="border-top:1px solid #CCCCCC; ">
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
	<td colspan="4" align="left" style="border-bottom:1px dashed #CCCCCC">&nbsp;&nbsp;<strong>添加版主</strong>
	</td>
	</tr>
	<tr class="tr2">
	<td width="10%">-</td>
	  <td width="20%"><input type="text" value="" name="admins[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?>][order]" size="4" /></td>
	  <td width="30%"><input type="text" value="" name="admins[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?>][name]" size="10" /></td>
	  <td>否</td>  
	</tr>
	</table>
	</div>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
	  <td  colspan="7" class="submit" ><input type="submit" value="确认修改"  />&nbsp;&nbsp;&nbsp;<input value="添加版主" type="button" onclick="javascript:addAdmins('','','',false);" /></td>
	</tr>
	</form>
</table>


<script>
var maxIndex=<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+2; ?>;

function addAdmins(adminid, ordernum, adminname, isparent){
	var namepre='admins';
	var checkboxstr='';
	var parstr='';
	var orderstr='';
	var namestr='';
	if(adminid==''){
		namepre='newadmins';
	}
	if(isparent){
		namestr=adminname;
		checkboxstr='<input type="checkbox" disabled="true" class="checkbox_css" />';
		orderstr='&nbsp;';
		parstr='<span style="color:#666666;">是</span>';
	}else{
		if(adminname!=""){
namestr=adminname+"<input type='hidden' value='"+adminname+"' size='10' name='admins["+maxIndex+"][name]' />";
		}else{
namestr="<input type='text' value='"+adminname+"' size='10' name='admins["+maxIndex+"][name]' class=\"text_css\" />";
		}
		//checkboxstr='<input type="checkbox" value="1" name="admins['+maxIndex+'][delid]" class="checkbox_css" />';
		checkboxstr = '-';
		orderstr='<input type="text" size="4" value="'+ordernum+'" name="admins['+maxIndex+'][order]" class=\"text_css\" />';
		parstr='否';
	}
	var trclass = "";
	if (maxIndex%2==1){
		 trclass = "class='tr2'";
	}
	var s="<table  border=0  cellspacing=0 bgcolor=\"#CCCCCC\" width=\"100%\"><tr "+trclass+"><td width='10%'><div class=\"rowdiv_0\" style=\"width:50px;\">"+checkboxstr+"</div></td><td width='20%'><div class=\"rowdiv_0\" style=\"width:80px;\">"+orderstr+"</div></td><td width='30%'><div class=\"rowdiv_0\" style=\"width:200px;\">"+namestr+"</div></td><td ><div class=\"rowdiv_0\" style=\"width:180px;\">"+parstr+"</div></td></tr></table>";
	var ele=document.createElement('div');
	ele.id="group_div_"+maxIndex;
	ele.innerHTML=s;
	E("adminsdiv").appendChild(ele);
	maxIndex++;
}
</script>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="merge"): ?>
<form action="" method="post">
<div class="module_title"><strong>版块合并</strong></div>

<div class="module_border">
	<div class="l">源版块:</div>
	<div class="c">
		<select name="fromfid">
			<? $this->magic_vars['query_type']='ActionForum';$data = array('action'=>'list');$default = '';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::ActionForum($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
			<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" <? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id']='';if (!isset($_REQUEST['pid'])) $_REQUEST['pid']='';if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id']='';if (!isset($this->magic_vars['_A']['bbs_forum_result']['pid'])) $this->magic_vars['_A']['bbs_forum_result']['pid']=''; ;if (  $this->magic_vars['var']['id']== $_REQUEST['pid'] ||  $this->magic_vars['var']['id']== $this->magic_vars['_A']['bbs_forum_result']['pid']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var']['aname'])) $this->magic_vars['var']['aname'] = ''; echo $this->magic_vars['var']['aname']; ?></option>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</select> 
 源版块的帖子全部转入目标版块，同时删除源版块 

	</div>
</div>


<div class="module_border">
	<div class="l">目标版块:</div>
	<div class="c">
		<select name="tofid">
			<? $this->magic_vars['query_type']='ActionForum';$data = array('action'=>'list');$default = '';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::ActionForum($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
			<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" <? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id']='';if (!isset($_REQUEST['pid'])) $_REQUEST['pid']='';if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id']='';if (!isset($this->magic_vars['_A']['bbs_forum_result']['pid'])) $this->magic_vars['_A']['bbs_forum_result']['pid']=''; ;if (  $this->magic_vars['var']['id']== $_REQUEST['pid'] ||  $this->magic_vars['var']['id']== $this->magic_vars['_A']['bbs_forum_result']['pid']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var']['aname'])) $this->magic_vars['var']['aname'] = ''; echo $this->magic_vars['var']['aname']; ?></option>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</select>
	</div>
</div>

<div class="module_submit">
	<input name="" type="submit" value=" 提交 " /> <input name="" type="reset" value=" 重置 " /><input type="hidden" name="style" value="1" />
</div>

</form>
<? endif; ?>