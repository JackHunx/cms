
		<? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(9); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
		<div class="list_news ">
			<div><span><a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html">+ more</a></span><h3><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></h3></div>
			<!--ul>
				<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_var'=>'var','var'=>'item','order'=>'hits','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
				<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"17");echo $_tmp;unset($_tmp); ?></a></li>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</ul-->
		</div>
		<? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>