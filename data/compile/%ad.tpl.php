
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="view"): ?>
<div class="module_add">

	<div class="module_title"><strong>�鿴���</strong></div>
	
	<div class="module_border">
		<div class="l">���ƣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['ad_result']['name'])) $this->magic_vars['_A']['ad_result']['name'] = ''; echo $this->magic_vars['_A']['ad_result']['name']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʶ����</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['ad_result']['nid'])) $this->magic_vars['_A']['ad_result']['nid'] = ''; echo $this->magic_vars['_A']['ad_result']['nid']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�Ƿ���ʱ��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['item']['timelimit'])) $this->magic_vars['item']['timelimit']=''; ;if (  $this->magic_vars['item']['timelimit'] ==1): ?>��ʱ<? else: ?>����ʱ<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʼʱ�䣺</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['ad_result']['firsttime'])) $this->magic_vars['_A']['ad_result']['firsttime'] = '';$_tmp = $this->magic_vars['_A']['ad_result']['firsttime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['ad_result']['endtime'])) $this->magic_vars['_A']['ad_result']['endtime'] = '';$_tmp = $this->magic_vars['_A']['ad_result']['endtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������ݣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['ad_result']['content'])) $this->magic_vars['_A']['ad_result']['content'] = ''; echo $this->magic_vars['_A']['ad_result']['content']; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������ݣ�</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['ad_result']['endcontent'])) $this->magic_vars['_A']['ad_result']['endcontent'] = ''; echo $this->magic_vars['_A']['ad_result']['endcontent']; ?>
		</div>
	</div>
</div>

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>


<script>
function check_ad(){
	 var frm = document.forms['form_user'];
	 var adname = frm.elements['name'].value;
	 var nid = frm.elements['nid'].value;
	 var errorMsg = '';
	  if (adname.length == 0 ) {
		errorMsg += '������Ʋ���Ϊ��' + '\n';
	  }
	    if (nid.length == 0 ) {
		errorMsg += '����ʶ������Ϊ��' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script>

<form name="form_user" method="post" action="" onsubmit="return check_ad();" enctype="multipart/form-data" >
<div class="module_add">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new"): ?>���<? else: ?>�޸�<? endif; ?>���</strong></div>
	
	<div class="module_border">
		<div class="l">�������</div>
		<div class="c">
			<input name="name" type="text"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['ad_result']['name'])) $this->magic_vars['_A']['ad_result']['name'] = ''; echo $this->magic_vars['_A']['ad_result']['name']; ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ʶ����</div>
		<div class="c">
			<input name="nid" type="text" class="input_border" value="<? if (!isset($this->magic_vars['_A']['ad_result']['nid'])) $this->magic_vars['_A']['ad_result']['nid'] = ''; echo $this->magic_vars['_A']['ad_result']['nid']; ?>"/>����������������ʶ��
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�Ƿ���ʱ��</div>
		<div class="c">
			<? if (!isset($this->magic_vars['item']['timelimit'])) $this->magic_vars['item']['timelimit']=''; ;if (  $this->magic_vars['item']['timelimit'] ==1): ?>��ʱ<? else: ?>����ʱ<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">ʱ�����ƣ�</div>
		<div class="c">
			 <input name="timelimit" type="radio" value="0"  <? if (!isset($this->magic_vars['_A']['ad_result']['timelimit'])) $this->magic_vars['_A']['ad_result']['timelimit']='';if (!isset($this->magic_vars['_A']['ad_result']['timelimit'])) $this->magic_vars['_A']['ad_result']['timelimit']=''; ;if (  $this->magic_vars['_A']['ad_result']['timelimit']==1 ||  $this->magic_vars['_A']['ad_result']['timelimit']==""): ?> checked="checked"<? endif; ?> />��������<input name="timelimit" type="radio" value="1" <? if (!isset($this->magic_vars['_A']['ad_result']['timelimit'])) $this->magic_vars['_A']['ad_result']['timelimit']=''; ;if (  $this->magic_vars['_A']['ad_result']['timelimit']=="0"): ?> checked="checked"<? endif; ?>/>�����ʱ������Ч
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">ͼƬ��</div>
		<div class="c">
			<input type="file" name="litpic" /><? if (!isset($this->magic_vars['_A']['ad_result']['litpic'])) $this->magic_vars['_A']['ad_result']['litpic']=''; ;if (  $this->magic_vars['_A']['ad_result']['litpic']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['ad_result']['litpic'])) $this->magic_vars['_A']['ad_result']['litpic'] = ''; echo $this->magic_vars['_A']['ad_result']['litpic']; ?>" target="_blank" title="��ͼƬ"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_1.jpg" border="0"  /></a><input type="checkbox" name="clearlitpic" value="1" />ȥ������ͼ<? endif; ?></div>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">��ʼʱ�䣺</div>
		<div class="c">
			<input name="firsttime" value="<? if (!isset($this->magic_vars['_A']['ad_result']['firsttime'])) $this->magic_vars['_A']['ad_result']['firsttime'] = '';$_tmp = $this->magic_vars['_A']['ad_result']['firsttime']; if (!isset($this->magic_vars['firsttime'])) $this->magic_vars['firsttime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['firsttime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>" type="text"  class="input_border" onclick="change_picktime('yyyy-MM-dd HH:mm')" readonly=""/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">����ʱ�䣺</div>
		<div class="c">
			<input name="endtime" type="text" value="<? if (!isset($this->magic_vars['_A']['ad_result']['endtime'])) $this->magic_vars['_A']['ad_result']['endtime'] = '';$_tmp = $this->magic_vars['_A']['ad_result']['endtime']; if (!isset($this->magic_vars['endtime'])) $this->magic_vars['endtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['endtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>" class="input_border" onclick="change_picktime('yyyy-MM-dd HH:mm')" readonly=""/>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">������ݣ�</div>
		<div class="c">
			<textarea name="content" rows="5" cols="40"><? if (!isset($this->magic_vars['_A']['ad_result']['content'])) $this->magic_vars['_A']['ad_result']['content'] = ''; echo $this->magic_vars['_A']['ad_result']['content']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">�������ݣ�</div>
		<div class="c">
			<textarea name="endcontent" rows="5" cols="40"><? if (!isset($this->magic_vars['_A']['ad_result']['endcontent'])) $this->magic_vars['_A']['ad_result']['endcontent'] = ''; echo $this->magic_vars['_A']['ad_result']['endcontent']; ?></textarea>
		</div>
	</div>
	
	<div class="module_submit" >
		<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?><input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['ad_result']['id'])) $this->magic_vars['_A']['ad_result']['id'] = ''; echo $this->magic_vars['_A']['ad_result']['id']; ?>" /><? endif; ?>
				<input type="submit" value="ȷ���ύ" />
				<input type="reset" name="reset" value="���ñ�" />
	</div>
	
</div>
</form>	

<? else: ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">�����</td>
			<th width="" class="main_td">����ʶ��</th>
			<th width="" class="main_td">�Ƿ���ʱ</th>
			<th width="" class="main_td">����ʱ��</th>
			<th width="" class="main_td">������</th>
			<td width="" class="main_td">����</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['ad_list']) || $this->magic_vars['_A']['ad_list']=='') $this->magic_vars['_A']['ad_list'] = array();  $_from = $this->magic_vars['_A']['ad_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
			<td class="main_td1" align="center" width="70"><? if (!isset($this->magic_vars['item']['timelimit'])) $this->magic_vars['item']['timelimit']=''; ;if (  $this->magic_vars['item']['timelimit'] ==1): ?>��ʱ<? else: ?>����ʱ<? endif; ?></td>
			<td class="main_td1" align="center" width="140"><? if (!isset($this->magic_vars['item']['endtime'])) $this->magic_vars['item']['endtime'] = '';$_tmp = $this->magic_vars['item']['endtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
			<td class="main_td1" align="center" width="130"><? if (!isset($this->magic_vars['item']['adcode'])) $this->magic_vars['item']['adcode'] = ''; echo $this->magic_vars['item']['adcode']; ?></td>
			<td class="main_td1" align="center" width="130"> <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�鿴</a> / <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">�޸�</a> / <a href="#" onClick="javascript:if(confirm('ȷ��Ҫɾ����?ɾ���󽫲��ɻָ�')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">ɾ��</a> </td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="7" bgcolor="#ffffff"  class="page" align="right" >
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
</table>
<? endif; ?>