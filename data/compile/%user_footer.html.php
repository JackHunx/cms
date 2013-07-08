<div class="footer">
	<p><? $default = ''; $this->magic_vars['list'] = $this->magic_sql("sitelist",array("site_id"=>"33","type"=>"sub"),$this->magic_vars,$this->mysql);
 if (count($this->magic_vars['list']['result'])>0):foreach ($this->magic_vars['list']['result'] as $this->magic_vars['key'] => $this->magic_vars['var']):
;?><a href="/about/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a> | <? endforeach;else:echo "$default";endif; ?><? if (!isset($this->magic_vars['sys_info']['con_tongji'])) $this->magic_vars['sys_info']['con_tongji'] = ''; echo $this->magic_vars['sys_info']['con_tongji']; ?> </p>

	<p><a href="http://www.miibeian.gov.cn/" target="_blank"><? if (!isset($this->magic_vars['sys_info']['con_beian'])) $this->magic_vars['sys_info']['con_beian'] = ''; echo $this->magic_vars['sys_info']['con_beian']; ?></a></p>
	<p><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?> Copyright 2011-2015</p>
</div>
</body>
</html>