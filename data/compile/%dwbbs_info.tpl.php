<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form action="" method="post"  >
	<tr >
	  <td width="18%" class="main_td" >参数名称</td>
	  <td width="*" class="main_td">参数值</td>
	  <td width="22%" class="main_td">变量名</td>
	</tr>
	<? $this->magic_vars['query_type']='ActionSettings';$data = array('style'=>'1');$default = '';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::ActionSettings($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?> >
	  <td   class="main_td1" ><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></td>
	  <td align="left" class="main_td1" >
	  <? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;if (  $this->magic_vars['var']['type']==0): ?>
		<input type="text" value="<? if (!isset($this->magic_vars['var']['value'])) $this->magic_vars['var']['value'] = '';$_tmp = $this->magic_vars['var']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?>" name="value[<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>]" size="40"/>
	  <? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;elseif (  $this->magic_vars['var']['type']==2): ?>
	  <textarea name="value[<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>]" cols="40" rows="6"><? if (!isset($this->magic_vars['var']['value'])) $this->magic_vars['var']['value'] = '';$_tmp = $this->magic_vars['var']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
	  <? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;elseif (  $this->magic_vars['var']['type']==3): ?>
	  <input  name="value[<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>]" value="<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = '';$_tmp = $this->magic_vars['item']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?>" size="15"> <INPUT onclick="uploadImg('value[<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>]');" type=button value=上传图片...>
	  <? else: ?>
	  <input type="radio" name="value[<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>]" value="1" <? if (!isset($this->magic_vars['var']['value'])) $this->magic_vars['var']['value']=''; ;if (  $this->magic_vars['var']['value']==1): ?> checked="checked"<? endif; ?> /> 是 <input type="radio" name="value[<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>]"  value="0"  <? if (!isset($this->magic_vars['var']['value'])) $this->magic_vars['var']['value']=''; ;if (  $this->magic_vars['var']['value']==0): ?> checked="checked"<? endif; ?>/> 否
	  <? endif; ?>
	  </td>
	  <td class="main_td1" > &nbsp;<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?></td>
	</tr>
	<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	<tr >
	  <td  colspan="7" class="submit" ><input type="submit" value="确认修改"  />&nbsp;&nbsp;&nbsp;<input value="添加参数" type="button" onclick="javascript:location='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new';" /></td>
	</tr>
	</form>
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "credits"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC"  width="100%">
	  <form action="" method="post" name="form1">
		<tr >
			<td width="" class="main_td" >启用</td>						
			<td width="" class="main_td" >积分代号</td>
			<td width="*" class="main_td">积分名称</td>
			<th width="" class="main_td">发帖</th>
			<th width="" class="main_td">回复</th>
			<th width="" class="main_td">精华</th>
			<th width="" class="main_td">上传</th>
			<td width="" class="main_td">下载</td>
			<td width="" class="main_td">投票</td>
		</tr>
		<? $this->magic_vars['query_type']='ActionCredits';$data = array('var'=>'item');$default = '';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::ActionCredits($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==0): ?>class="tr2"<? endif; ?>>
			<td width="40">
			<input type="checkbox" value="1" name="credit[<? if (!isset($this->magic_vars['item']['creditscode'])) $this->magic_vars['item']['creditscode'] = ''; echo $this->magic_vars['item']['creditscode']; ?>][isuse]"  <? if (!isset($this->magic_vars['item']['isuse'])) $this->magic_vars['item']['isuse']=''; ;if (  $this->magic_vars['item']['isuse']==1): ?> checked="checked"<? endif; ?>/>
			
			</td>
			<td><? if (!isset($this->magic_vars['item']['creditscode'])) $this->magic_vars['item']['creditscode'] = ''; echo $this->magic_vars['item']['creditscode']; ?></td>
			<td><input type="text" value="<? if (!isset($this->magic_vars['item']['creditsname'])) $this->magic_vars['item']['creditsname'] = ''; echo $this->magic_vars['item']['creditsname']; ?>" name="credit[<? if (!isset($this->magic_vars['item']['creditscode'])) $this->magic_vars['item']['creditscode'] = ''; echo $this->magic_vars['item']['creditscode']; ?>][creditsname]" size="8" /></td>
			<td ><input type="text" value="<? if (!isset($this->magic_vars['item']['postvar'])) $this->magic_vars['item']['postvar'] = ''; echo $this->magic_vars['item']['postvar']; ?>" name="credit[<? if (!isset($this->magic_vars['item']['creditscode'])) $this->magic_vars['item']['creditscode'] = ''; echo $this->magic_vars['item']['creditscode']; ?>][postvar]" size="5" /></td>
			<td><input type="text" value="<? if (!isset($this->magic_vars['item']['replyvar'])) $this->magic_vars['item']['replyvar'] = ''; echo $this->magic_vars['item']['replyvar']; ?>" name="credit[<? if (!isset($this->magic_vars['item']['creditscode'])) $this->magic_vars['item']['creditscode'] = ''; echo $this->magic_vars['item']['creditscode']; ?>][replyvar]" size="5" /></td>
			<td><input type="text" value="<? if (!isset($this->magic_vars['item']['goodvar'])) $this->magic_vars['item']['goodvar'] = ''; echo $this->magic_vars['item']['goodvar']; ?>" name="credit[<? if (!isset($this->magic_vars['item']['creditscode'])) $this->magic_vars['item']['creditscode'] = ''; echo $this->magic_vars['item']['creditscode']; ?>][goodvar]" size="5" /></td>
			<td><input type="text" value="<? if (!isset($this->magic_vars['item']['uploadvar'])) $this->magic_vars['item']['uploadvar'] = ''; echo $this->magic_vars['item']['uploadvar']; ?>" name="credit[<? if (!isset($this->magic_vars['item']['creditscode'])) $this->magic_vars['item']['creditscode'] = ''; echo $this->magic_vars['item']['creditscode']; ?>][uploadvar]" size="5" /></td>
			<td><input type="text" value="<? if (!isset($this->magic_vars['item']['downvar'])) $this->magic_vars['item']['downvar'] = ''; echo $this->magic_vars['item']['downvar']; ?>" name="credit[<? if (!isset($this->magic_vars['item']['creditscode'])) $this->magic_vars['item']['creditscode'] = ''; echo $this->magic_vars['item']['creditscode']; ?>][downvar]" size="5" /></td>
			<td><input type="text" value="<? if (!isset($this->magic_vars['item']['votevar'])) $this->magic_vars['item']['votevar'] = ''; echo $this->magic_vars['item']['votevar']; ?>" name="credit[<? if (!isset($this->magic_vars['item']['creditscode'])) $this->magic_vars['item']['creditscode'] = ''; echo $this->magic_vars['item']['creditscode']; ?>][votevar]" size="5" /></td>
		</tr>
		<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
	<tr>
	<td colspan="8" class="submit" >
	<input type="submit" value="修改积分" /> 
	</td>
</tr>		
</table>
<? endif; ?>