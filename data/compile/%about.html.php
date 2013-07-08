 <? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
 
<div class="wrap950 mar10">
	<div class="main_left">
		<div class="list_content_main_2">
			<!--标题开始-->
			<div class="title">
				<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_3.gif" /> <? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?> 
			</div>
			<!--标题结束-->
			
			<div class="content ">
				 <table width="100%">
				 <tr>
				 <td><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/kefu.png" /></td>
				 <td><? if (!isset($this->magic_vars['_G']['site_result']['content'])) $this->magic_vars['_G']['site_result']['content'] = ''; echo $this->magic_vars['_G']['site_result']['content']; ?></td>
				 </tr>
				 </table>
				  				
			</div>
		</div>
		
	</div>
	<div class="main_right">
		<div class="list_news ">
			<div><span><a href="/gonggao/index.html">+ more</a></span><h3>网站公告</h3></div>
			<!--ul>
				<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_id'=>'22');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"17");echo $_tmp;unset($_tmp); ?></a></li>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</ul-->
		</div>
		<? $this->magic_include(array('file' => "zixun_right.html", 'vars' => array()));?>
		<div class="list_news ">
			<div><span><a href="/new/index.html">+ more</a></span><h3>新手指南</h3></div>
			<!--ul>
				<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_id'=>'10');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"17");echo $_tmp;unset($_tmp); ?></a></li>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</ul-->
		</div>
	</div>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>