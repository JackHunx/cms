<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


<div class="wrap950 mar10">
	<div class="main_left">
		
		<!--���⿪ʼ-->
		<div class="content_title">
			<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_3.gif" />  <? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?>
		</div>
		<!--�������-->	
		<div class="article_content ">
			<div class="content_h3"><h3><? if (!isset($this->magic_vars['_G']['article']['name'])) $this->magic_vars['_G']['article']['name'] = ''; echo $this->magic_vars['_G']['article']['name']; ?></h3></div>
			<div class="content_div" align="center"> �����ߣ�<? if (!isset($this->magic_vars['_G']['article']['author'])) $this->magic_vars['_G']['article']['author'] = '';$_tmp = $this->magic_vars['_G']['article']['author'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?> &nbsp;&nbsp;  ����ʱ�䣺<? if (!isset($this->magic_vars['_G']['article']['addtime'])) $this->magic_vars['_G']['article']['addtime'] = '';$_tmp = $this->magic_vars['_G']['article']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?> &nbsp;&nbsp;  ���������<? if (!isset($this->magic_vars['_G']['article']['hits'])) $this->magic_vars['_G']['article']['hits'] = ''; echo $this->magic_vars['_G']['article']['hits']; ?> </div>
			
			<!--���ݿ�ʼ-->
			<div class="content_ro">
			<table><tr>
			  <td><? if (!isset($this->magic_vars['_G']['article']['content'])) $this->magic_vars['_G']['article']['content'] = ''; echo $this->magic_vars['_G']['article']['content']; ?></td>
			</tr></table>
			</div>
			<!--���ݽ���-->
			
			<? $data = array('site_id'=>$this->magic_vars['_G']['site_result']['site_id'],'id'=>$this->magic_vars['_G']['article_id'],'code'=>$this->magic_vars['_G']['site_result']['code'],'table'=>''); $this->magic_vars['magic_result'] = siteClass::GetArticleSide($data); $this->magic_vars['var']=  $this->magic_vars['magic_result'];?> 
			<!--������ҳ��ʼ-->
			<div class="content_pages">
				<div class="floatl">
					<span><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/up_page.gif" align="absmiddle" /> <strong>��һ����</strong><? if (!isset($this->magic_vars['var']['up'])) $this->magic_vars['var']['up'] = ''; echo $this->magic_vars['var']['up']; ?></span>
					<span>
<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/down_page.gif" /> <strong>��һ����</strong><? if (!isset($this->magic_vars['var']['down'])) $this->magic_vars['var']['down'] = ''; echo $this->magic_vars['var']['down']; ?></span>	
				</div>
			</div>
			<!--������ҳ����-->
			<? unset($_magic_vars);unset($data); ?>
			
		</div>
		
		
			<? $this->magic_include(array('file' => "pinglun.html", 'vars' => array()));?>
		
	</div>
	<div class="main_right">
		<? $this->magic_include(array('file' => "zixun_right.html", 'vars' => array()));?>
	</div>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>

