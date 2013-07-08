<? $this->magic_include(array('file' => "admin_head.html", 'vars' => array()));?>

	<? if (!isset($this->magic_vars['template'])) $this->magic_vars['template']='';; $_from = $this->magic_vars['template'];  $this->magic_include(array('file' => $_from, 'vars' => array('template_dir' => 'modules/dwbbs'))); unset($_from);?>

<? $this->magic_include(array('file' => "admin_foot.html", 'vars' => array()));?>

