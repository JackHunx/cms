 <? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

<div class="wrap950 mar10">
	<div class="main_left">
		
		<!--标题开始-->
		<div class="content_title">
			<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_3.gif" /> <? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?> 
		</div>
		<!--标题结束-->
		<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','epage'=>'20','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','site_id'=>$this->magic_vars['_G']['site_result']['site_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
		<div class="article_content">
			<!--列表开始-->
			<div class="content_list">
				<ul class="list_li">
					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
					<li><span><? if (!isset($this->magic_vars['var']['addtime'])) $this->magic_vars['var']['addtime'] = '';$_tmp = $this->magic_vars['var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></span><font color="#FF0000">[<? if (!isset($this->magic_vars['var']['site_name'])) $this->magic_vars['var']['site_name'] = ''; echo $this->magic_vars['var']['site_name']; ?>]</font></a> <a href="a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></li>
					<? endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<!--兼职列表结束-->
			<!--分页开始-->
				<div>
					<table align="center" class="list_table_page">
						<tr align="center">
							<td height="25" ><Div align="center"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></Div></td>
						</tr>
					</table>
				</div>
				<!--分页结束-->
		</div>
		<? unset($_magic_vars); ?>
		
	</div>
	<div class="main_right">
		<? $this->magic_include(array('file' => "zixun_right.html", 'vars' => array()));?>
	</div>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>