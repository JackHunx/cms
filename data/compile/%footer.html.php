<div class="footer">

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td class="footer_bg" height="30"><? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && $this->magic_vars['var']['pid']==1 && $this->magic_vars['var']['status'] == 1 ): $this->magic_vars['key'] =$i?><a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" target="_blank"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a> | <? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?></td>

  </tr>

  <tr>

    <td height="40">CopyRight <font style="font-family:'新宋体'; size:15px">&copy;</font> 2012 瑞龙科技 版权所有 <? if (!isset($this->magic_vars['_G']['system']['con_beian'])) $this->magic_vars['_G']['system']['con_beian'] = ''; echo $this->magic_vars['_G']['system']['con_beian']; ?>&nbsp;&nbsp;全国统一客服热线:<? if (!isset($this->magic_vars['_G']['system']['con_fuwutel'])) $this->magic_vars['_G']['system']['con_fuwutel'] = ''; echo $this->magic_vars['_G']['system']['con_fuwutel']; ?></td>

  </tr>

  <tr>

    <td height="30"><? if (!isset($this->magic_vars['_G']['system']['con_tongji'])) $this->magic_vars['_G']['system']['con_tongji'] = ''; echo $this->magic_vars['_G']['system']['con_tongji']; ?></td>

  </tr>

</table>

</div>

</body>

</html>