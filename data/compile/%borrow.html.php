<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>

<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/css/borrow_new.css" rel="stylesheet" type="text/css" />



<!--�������ô������ ����-->

<div class="con_box t10"><img border="0" usemap="#Map" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/banner3.jpg"></div>

<map id="Map" name="Map"><area href="/publish/index.html?type=0" coords="32,109,135,141" shape="rect"><area href="/publish/index.html?type=1" coords="153,106,257,140" shape="rect"><area href="/publish/index.html?type=vouch" coords="277,103,384,143" shape="rect"></map><div class="foot" style="border:0 none; height:10px"></div>



<div class="wrap950 list_1">

	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> �������</div>

<div class="m_l_bor"><div style="width: 900px; height: 100px; padding-left: 20px;" class="process">

            <ul style="width: 900px;">

            <li><a href="/index.php?user&amp;q=action/reg">ע��</a></li>

			<li><a href="/index.php?user&amp;q=code/user/realname">ʵ����֤</a></li>

			<li><a href="/index.php?user&amp;q=code/userinfo">��д��������</a></li>

			<li><a href="/index.php?user&amp;q=code/attestation">�ϴ�����֤��    </a></li>

			<li><a href="/publish/index.html?type=month">��������</a></li>

			<li><a href="/index.php?user&amp;q=code/borrow/repayment">���ɹ�</a></li>

			<li><a href="/index.php?user&amp;q=code/borrow/loandetail">ÿ�»���</a></li>

            </ul>

        </div>

       </div>	<div class="foot" style="border:0 none; height:1px"></div>

</div>

<!--�������ô������ ����-->



<!--������ ��ʼ-->

<div class="wrap950 list_1">

	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> �û���������</div>

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

</div>

<!--������ ����-->



<!--ע������ ��ʼ-->

<div class="wrap950 list_1">

	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif"  /> �����֪</div>

	<div class="content">

		<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <th align="left">����߱���߱��Ļ������� </th>

  </tr>

  <tr>

    <td align="left">1��ע���Ϊ��������Ա </td>

  </tr>

  <tr>

    <td align="left">2�������ΪVIP��Ա </td>

  </tr>

  <tr>

    <td align="left">3�����������Ӫ�ȶ� </td>

  </tr>

  <tr>

    <td align="left">4��������ȷ�Ľ����;</td>

  </tr>

  <tr>

    <td align="left">5����д��ϸ�ĸ�����Ϣ�����ṩ��������������ϵ�� </td>

  </tr>

  <tr>

    <td align="left">6��ͨ��ȫ���Ļ�����֤ </td>

  </tr>

  <tr>

    <td align="left">&nbsp;</td>

  </tr>

  <tr>

    <th align="left">�������Ҫ�ṩ������ </th>

  </tr>

  <tr>

    <td align="left">��<strong>��������</strong>�����֤�����ڱ���סַ֤�������ñ��桢������ˮ���ֻ��嵥��</td>

  </tr>

  <tr>

    <td align="left">&bull; סַ֤����Ҫ���и���סַ��ˮ����ҵ����ֽ�ʹ̻��˵���ֽ�����ÿ��˵����ռ����ϵ�ɨ����������ṩ��Ӧ�ķ���֤�����Һ�ͬ�����޺�ͬ����ַ֤��3���¸���1�Ρ�</td>

  </tr>

  <tr>

    <td align="left">&bull; �ֻ��嵥�����������ĺ��������¼��δ������ɸѡ�����ͨѶ��¼���ֻ�ͨ���嵥����ȥӪҵ����ӡ��ɨ�裬Ҳ���������ϲ�ѯ��ͼ����ͼʱҪ������ֻ��š��嵥����Ҫ��ÿ��1�Ρ�</td>

  </tr>

  <tr>

    <td align="left">&bull; ���ñ���: �������ű�����Ҫ�ڵ��ص��������д�ӡ����Ҫԭ��ɨ���ϴ������ñ���Ҫ��6���¸���1�Ρ�</td>

  </tr>

  <tr>

    <td align="left">&bull; ������ˮ: Ҫ������н�3������������ˮ�����ǹ�н�����ߣ�������ˮ����������д������ʵļ�¼�����Ǹ��幤�̻�������ҵ���������ṩ��Ӫ��ҵ��������ˮ���Լ���ҵ��Ŀ��</td>

  </tr>

  <tr>

    <td align="left">&nbsp;</td>

  </tr>

  <tr>

    <td align="left">��<strong>��������</strong>: ����֤�����ϡ�����֤�����ϡ���Ӫ�������ʡ���Ӫҵ�����ϵȣ����֤���������������ʲ�֤���ļ���</td>

  </tr>

  <tr>

    <td align="left">&bull; ��������������֤��������Ʊ�����Һ�ͬ����Ѻ��ͬ�������˻�������ˮ��������ס����������ˮ���嵥��</td>

  </tr>

  <tr>

    <td align="left">&bull; ���������������Ǽ�֤����ʻ֤����ʻ֤��������Ʊ�ȡ�</td>

  </tr>

  <tr>

    <td align="left">&nbsp;</td>

  </tr>

  <tr>

    <td align="left">��<strong>������ϵ��</strong>��ֱϵ�����Լ�ͬ�¡����ѵ�����3��������������������ϵ�绰����ֱϵ�������֤��Ӧ�������֤�����ڱ���ɨ������绰����Ϊ��ż�ģ������ṩ���֤����</td>

  </tr>

  <tr>

    <td align="left">���ڽ���˵ĸ�������״����ͬ������Ҫ�ṩ�ĸ������ϻ��������졣����Աϣ����ø���������������Ӧ�ṩ����ϸ����Ϣ�������������Ҫ��ʱ��Ҫ��ʱ�ṩ���ڸ��¡� </td>

  </tr>

      </table>

</div>

	<div class="foot"></div>

</div>

<!--ע������ ����-->



<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>