
<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

<div class="wrap950 mar10">
	<div class="main_left">
		<div class="list_content_main_0">
			<!--标题开始-->
			<div class="title">
				<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_3.gif" /> <? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?> 
			</div>
			<!--标题结束-->
			
			<div class="content">
				<div style="padding-left:10px; overflow:hidden; height:auto; width:98%">
				<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'20','type_id'=>'3');$default = '';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
					<div style="width:260px; float:left; margin:0 28px 0 20px ">
						<div class="floatl" style="width:120px">
							<img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" width="100" />
							
						</div>
						<div>
							<ul class="kefu_li">
								<li><strong style="font-size:15px;"><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></strong></li>
								<li><? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?></li>
								<li><strong>电话:<? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone'] = ''; echo $this->magic_vars['var']['phone']; ?></strong></li>
								<li><A 
	style="FLOAT: left; TEXT-DECORATION: none" 
	href="tencent://message/?uin=<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?>&amp;Menu=yes"><IMG height=17 
	src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/qq1.jpg" width=25> </A></li>
								<li><? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?></li>
							</ul>
						</div>
					</div>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				</div>
			</div>
		</div>
		
	</div>
	<div class="main_right">
		<div class="list_news ">
			<div><span><a href="/gonggao/index.html">+ more</a></span><h3>网站公告</h3></div>
			<ul>
				<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_id'=>'22');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"17");echo $_tmp;unset($_tmp); ?></a></li>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</ul>
		</div>
		<? $this->magic_include(array('file' => "zixun_right.html", 'vars' => array()));?>
		<div class="list_news ">
			<div><span><a href="/new/index.html">+ more</a></span><h3>新手指南</h3></div>
			<ul>
				<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_id'=>'10');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"17");echo $_tmp;unset($_tmp); ?></a></li>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</ul>
		</div>
	</div>
</div>


<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>
