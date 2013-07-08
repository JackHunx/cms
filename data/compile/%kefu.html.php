 <? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
 

<div class="wrap950 mar10">
	<div class="kefu_bg">
		<div><? if (!isset($this->magic_vars['_G']['system']['con_kefutext'])) $this->magic_vars['_G']['system']['con_kefutext'] = ''; echo $this->magic_vars['_G']['system']['con_kefutext']; ?></div>
	</div>
</div>
<!--借款帮助 开始-->
<div class="wrap950 list_1">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> 借款入门帮助：</div>
	<div class="content">
		<ul class="list_li_1">
		<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'16','site_id'=>'10');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
			<li ><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?> </a></li>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</ul>
	</div>
	<div class="foot"></div>
	<div>
	</div>
</div>
<!--借款帮助 结束-->

<div  class="wrap950"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/banner_company.jpg" /></div>

<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>