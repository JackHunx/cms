<? $this->magic_include(array('file' => "header.html", 'vars' => array('template_dir' => 'themes/ruizhict')));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/css/user_new.css" rel="stylesheet" type="text/css" />
<!--用户中心的主栏目 开始-->
<div class="wrap950 " style="margin-top:0">
	<!--左边的导航 开始-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right ">
		<div class="user_right_l ">
			<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']==0): ?><div class="user_amange" id="user_amange"><span ><a href="#" onclick='$("#user_amange").hide();'><font color="#FF0000">关闭</font></a></span><? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']==0): ?><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>提醒你：你还没有进行实名认证。<a href="/index.php?user&q=code/user/realname"><strong>请先进行实名认证</strong></a><? endif; ?></div><? endif; ?>
			<div class="user_right_lmain">
				<div class="user_right_img">
					<img src="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = '';$_tmp = $this->magic_vars['_G']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" height="90" class="picborder" /><br />
					<a href="index.php?user&q=code/user/avatar"><font color="#FF0000">[更换头像]</font></a>
				</div>
				<div class="user_right_txt">
					<ul>
						<li><span>信用等级：</span><? if (!isset($this->magic_vars['_U']['user_cache']['credit'])) $this->magic_vars['_U']['user_cache']['credit'] = '';$_tmp = $this->magic_vars['_U']['user_cache']['credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"");echo $_tmp;unset($_tmp); ?><a href="/index.php?user&q=code/user/credit"><font color="#FF0000">积分查看</font></a></li>
						<li style="overflow:hidden">
							<div class="floatl"><span> 认&nbsp;&nbsp;&nbsp;   证：</span></div> 
							<a href="/index.php?user&q=code/user/realname"><div class="credit_pic_card_<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['real_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']==1): ?>实名已认证<? else: ?>未实名认证<? endif; ?>"></div></a>
							<a href="/index.php?user&q=code/user/phone_status" ><div class="credit_pic_phone_<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']>=1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==1): ?>手机已认证<? else: ?>手机未认证<? endif; ?>"></div></a>
							<a href="/index.php?user&q=code/user/email_status"><div class="credit_pic_email_<? if (!isset($this->magic_vars['_G']['user_result']['email_status'])) $this->magic_vars['_G']['user_result']['email_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['email_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['email_status'])) $this->magic_vars['_G']['user_result']['email_status']=''; ;if (  $this->magic_vars['_G']['user_result']['email_status']==1): ?>邮箱已认证<? else: ?>邮箱未认证<? endif; ?>"></div></a>
							<a href="/index.php?user&q=code/user/video_status"><div class="credit_pic_video_<? if (!isset($this->magic_vars['_G']['user_result']['video_status'])) $this->magic_vars['_G']['user_result']['video_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['video_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['video_status'])) $this->magic_vars['_G']['user_result']['video_status']=''; ;if (  $this->magic_vars['_G']['user_result']['video_status']==1): ?>视频已认证<? else: ?>视频未认证<? endif; ?>"></div></a>
							<a href="/vip/index.html"><div class="credit_pic_vip_<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==1): ?>1<? else: ?>0<? endif; ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==1): ?>VIP<? else: ?>普通会员<? endif; ?>"></div></a>
							<a href="/index.php?user&q=code/user/scene_status"><div class="credit_pic_scene_<? if (!isset($this->magic_vars['_G']['user_result']['scene_status'])) $this->magic_vars['_G']['user_result']['scene_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['scene_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['_G']['user_result']['scene_status'])) $this->magic_vars['_G']['user_result']['scene_status']=''; ;if (  $this->magic_vars['_G']['user_result']['scene_status']==1): ?>已通过现场认证<? else: ?>未通过现场认证<? endif; ?>"></div></a>
						</li>

						<li>  <a href="/index.php?user&q=code/account/recharge_new"><font color="#FF0000">账号充值</font></a>  <a href="/index.php?user&q=code/borrow/limitapp&type=credit"><font color="#FF0000">申请信用额度</font></a>  <a href="/index.php?user&q=code/borrow/limitapp&type=vouch"><font color="#FF0000">申请担保额度</font></a> </li>
						<li><span>VIP 期限： <a href="/vip/index.html"><? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==1): ?><? if (!isset($this->magic_vars['_G']['user_result']['vip_verify_time'])) $this->magic_vars['_G']['user_result']['vip_verify_time'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?> 到 <? if (!isset($this->magic_vars['_G']['user_result']['vip_verify_time'])) $this->magic_vars['_G']['user_result']['vip_verify_time'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_verify_time']+60*60*24*365;$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?><? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['vip_status']==-1): ?>VIP审核中<? else: ?><font color="#999999">不是VIP</font></font><? endif; ?></a></li>
						<li><span>系统告知：</span><a href="/index.php?user&q=code/message"><font color="#FF0000"><? if (!isset($this->magic_vars['_U']['user_cache']['message'])) $this->magic_vars['_U']['user_cache']['message'] = ''; echo $this->magic_vars['_U']['user_cache']['message']; ?></font> 封未读信息</a>&nbsp; &nbsp; <a href="/index.php?user&q=code/user/request"><? if (!isset($this->magic_vars['_U']['user_cache']['friends_apply'])) $this->magic_vars['_U']['user_cache']['friends_apply'] = ''; echo $this->magic_vars['_U']['user_cache']['friends_apply']; ?> 个好友邀请</a></li>
					</ul>
				</div>
			</div>
			
			<div class="user_right_li">
				<div class="title"><span style="float:right; font-size:12px; font-weight:normal"> 上次登录IP：<? if (!isset($this->magic_vars['_G']['user_result']['upip'])) $this->magic_vars['_G']['user_result']['upip'] = ''; echo $this->magic_vars['_G']['user_result']['upip']; ?> - 上次登录时间：<? if (!isset($this->magic_vars['_G']['user_result']['uptime'])) $this->magic_vars['_G']['user_result']['uptime'] = '';$_tmp = $this->magic_vars['_G']['user_result']['uptime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?> </span>账号详情 <? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']==1): ?><? else: ?>(<a href="/vip/index.html"><font color="#FF0000">申请成为VIP会员</font></a></font>)<? endif; ?></div>
				<div class="content">
				<? $data = array('user_id'=>'0','var'=>'acc','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
					<ul>
						<li><span> 账户总额[?]：<font>￥<? if (!isset($this->magic_vars['acc']['total'])) $this->magic_vars['acc']['total'] = '';$_tmp = $this->magic_vars['acc']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>  <a href="index.php?user&q=code/account/log">资金记录查询</a>  | <a href="index.php?user&q=code/account">账户资金详情</a> </span></li>
						<li><span> 可用余额[?]：<font>￥<? if (!isset($this->magic_vars['acc']['use_money'])) $this->magic_vars['acc']['use_money'] = '';$_tmp = $this->magic_vars['acc']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>   </span>&nbsp;<a href="index.php?user&q=code/account/cash_new"><font style="font-size:12px;" color="#FF0000">[提现]</font></a> <a href="index.php?user&q=code/account/recharge_new"><font style="font-size:12px;" color="#FF0000">[充值]</font>  </a> </li>
						<li><span> 冻结总额[?]：<font>￥<? if (!isset($this->magic_vars['acc']['no_use_money'])) $this->magic_vars['acc']['no_use_money'] = '';$_tmp = $this->magic_vars['acc']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>   </span></li>
						<li><span> 待收总额[?]：<font>￥<? if (!isset($this->magic_vars['acc']['collection'])) $this->magic_vars['acc']['collection'] = '';$_tmp = $this->magic_vars['acc']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></span></li>
						<li><span> 待收利息[?]：<font>￥<? if (!isset($this->magic_vars['acc']['collection_interest0'])) $this->magic_vars['acc']['collection_interest0'] = '';$_tmp = $this->magic_vars['acc']['collection_interest0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>   </span></li>
						<li><span> 最近待收金额[?]：<font>￥<? if (!isset($this->magic_vars['acc']['new_collection_account'])) $this->magic_vars['acc']['new_collection_account'] = '';$_tmp = $this->magic_vars['acc']['new_collection_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></span></li>
						<li><span> 最近待收时间[?]：<font><? if (!isset($this->magic_vars['acc']['new_collection_time'])) $this->magic_vars['acc']['new_collection_time'] = '';$_tmp = $this->magic_vars['acc']['new_collection_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></font> <a href="index.php?user&q=code/borrow/gathering&status=0">[待收明细]</a></span></li>
						<li><span> 已赚利息[?]：<font>￥<? if (!isset($this->magic_vars['acc']['collection_interest1'])) $this->magic_vars['acc']['collection_interest1'] = '';$_tmp = $this->magic_vars['acc']['collection_interest1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>    </span></li>
						<li><span> 已赚奖励[?]：<font>￥<? if (!isset($this->magic_vars['acc']['award_add'])) $this->magic_vars['acc']['award_add'] = '';$_tmp = $this->magic_vars['acc']['award_add'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>    </span></li>
						<li><span> 借款总额[?]：<font>￥<? if (!isset($this->magic_vars['acc']['borrow_num'])) $this->magic_vars['acc']['borrow_num'] = '';$_tmp = $this->magic_vars['acc']['borrow_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>    </span></li>
						<li><span> 待还总额[?]：<font>￥<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>    </span></li>
						<li><span> 最近待还金额[?]：<font>￥<? if (!isset($this->magic_vars['acc']['new_repay_account'])) $this->magic_vars['acc']['new_repay_account'] = '';$_tmp = $this->magic_vars['acc']['new_repay_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font></span></li>
						<li><span> 最近待还时间[?]：<font><? if (!isset($this->magic_vars['acc']['new_repay_time'])) $this->magic_vars['acc']['new_repay_time'] = '';$_tmp = $this->magic_vars['acc']['new_repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></font> <a href="index.php?user&q=code/borrow/repaymentplan">[还款明细]</a></span></li>
						<li><span> 待扣会费[?]：<font>￥<? if (!isset($this->magic_vars['_U']['user_cache']['vip_money'])) $this->magic_vars['_U']['user_cache']['vip_money']='';if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_U']['user_cache']['vip_money']=="" &&  $this->magic_vars['_G']['user_result']['vip_status']==1): ?><? if (!isset($this->magic_vars['_G']['system']['con_vip_money'])) $this->magic_vars['_G']['system']['con_vip_money'] = ''; echo $this->magic_vars['_G']['system']['con_vip_money']; ?><? else: ?>0<? endif; ?></font>   </span></li>
						<li><span> 信用额度[?]：<font>￥<? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = '';$_tmp = $this->magic_vars['acc']['credit'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>    </span></li>
						<li><span> 可用信用额度[?]：<font>￥<? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = '';$_tmp = $this->magic_vars['acc']['credit_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>    </span></li>
						<li><span> 借款担保额度[?]：<font>￥<? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = '';$_tmp = $this->magic_vars['acc']['borrow_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>    </span></li>
						<li><span> 可用借款担保额度[?]：<font>￥<? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = '';$_tmp = $this->magic_vars['acc']['borrow_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>    </span></li>
						<li><span> 投资担保额度[?]：<font>￥<? if (!isset($this->magic_vars['acc']['tender_vouch'])) $this->magic_vars['acc']['tender_vouch'] = '';$_tmp = $this->magic_vars['acc']['tender_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>    </span></li>
						<li><span> 可用投资担保额度[?]：<font>￥<? if (!isset($this->magic_vars['acc']['tender_vouch_use'])) $this->magic_vars['acc']['tender_vouch_use'] = '';$_tmp = $this->magic_vars['acc']['tender_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></font>    </span></li>
					</ul>
				<? unset($_magic_vars);unset($data); ?>
				</div>
			</div>


<div class="t10">
		  <div class="title">
		      <table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td width="12" align="left"><img height="30" width="12" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/t_left.gif"></td>
    <td background="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/t_bg.gif" align="left"><h1 class="dd">借入流程</h1></td>
    <td width="12" align="right"><img height="30" width="12" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/t_right.gif"></td>
  </tr>
</tbody></table>
          </div>
		  <div class="m_l_bor">
	  <div class="process">
            <ul>
                <li><a target="_blank" href="/?user&amp;q=code/userinfo">填写详细信息</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="/?user&amp;q=code/attestation">上传资料证明</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="/vip/index.html">申请VIP</a></li><li class="icon2">
                </li>

                <li><a target="_blank" href="/publish/index.html">发布借款信息</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="/?user&amp;q=code/borrow/repayment">借款成功</a></li>
            </ul>
        </div></div></div>			



<div class="t10">
		  <div class="title">
		      <table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td width="12" align="left"><img height="30" width="12" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/t_left.gif"></td>
    <td background="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/t_bg.gif" align="left"><h1 class="dd">投资者上手</h1></td>
    <td width="12" align="right"><img height="30" width="12" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/t_right.gif"></td>
  </tr>
</tbody></table>
          </div>
		  <div class="m_l_bor">
        <div class="process">
            <ul>
                <li><a target="_blank" href="/?user&amp;q=code/userinfo">填写详细信息</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="/?user&amp;q=code/user/realname">实名认证</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="/vip/index.html">申请VIP</a></li><li class="icon2">
                </li>

                <li><a target="_blank" href="/invest/index.html">投标借出</a></li><li class="icon2"></li>
                <li><a target="_blank" href="/?user&amp;q=code/borrow/success">等待回收还款</a></li>
            </ul>
        </div></div></div>
			
			<div class="user_right_li">
				<div class="title">好友动态</div>
				<div class="content">
					<ul>
						<? $this->magic_vars['query_type']='GetUserTrend';$data = array('limit'=>'15','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetUserTrend($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
						<li><? if (!isset($this->magic_vars['var']['addtime'])) $this->magic_vars['var']['addtime'] = '';$_tmp = $this->magic_vars['var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?> - <a href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" target="_blank"><font color="#FF0000"><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></font></a> <? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?></li>
						<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="user_right_r">
			<div class="user_right_info">
				<div class="title"><strong>个人资料完成率</strong></div> 
				<div>
				<ul>
				<? $data = array('user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/userinfo/userinfo.class.php');$this->magic_vars['var'] = userinfoClass::GetOne($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
					<li><span><a href="/index.php?user&q=code/userinfo/building"><? if (!isset($this->magic_vars['var']['building_status'])) $this->magic_vars['var']['building_status']=''; ;if (  $this->magic_vars['var']['building_status']==1): ?><font color="#009900">已填写</font><? else: ?><font color="#FF0000">未填写</font><? endif; ?></a></span>房产资料</li>
					<li><span><a href="/index.php?user&q=code/userinfo/company"><? if (!isset($this->magic_vars['var']['company_status'])) $this->magic_vars['var']['company_status']=''; ;if (  $this->magic_vars['var']['company_status']==1): ?><font color="#009900">已填写</font><? else: ?><font color="#FF0000">未填写</font><? endif; ?></a></span>单位资料</li>
					<li><span><a href="/index.php?user&q=code/userinfo/firm"><? if (!isset($this->magic_vars['var']['firm_status'])) $this->magic_vars['var']['firm_status']=''; ;if (  $this->magic_vars['var']['firm_status']==1): ?><font color="#009900">已填写</font><? else: ?><font color="#FF0000">未填写</font><? endif; ?></a></span>私营业主</li>
					<li><span><a href="/index.php?user&q=code/userinfo/finance"><? if (!isset($this->magic_vars['var']['finance_status'])) $this->magic_vars['var']['finance_status']=''; ;if (  $this->magic_vars['var']['finance_status']==1): ?><font color="#009900">已填写</font><? else: ?><font color="#FF0000">未填写</font><? endif; ?></a></span>财务状况</li>
					<li><span><a href="/index.php?user&q=code/userinfo/contact"><? if (!isset($this->magic_vars['var']['contact_status'])) $this->magic_vars['var']['contact_status']=''; ;if (  $this->magic_vars['var']['contact_status']==1): ?><font color="#009900">已填写</font><? else: ?><font color="#FF0000">未填写</font><? endif; ?></a></span>联系方式</li>
					<li><span><a href="/index.php?user&q=code/userinfo/edu"><? if (!isset($this->magic_vars['var']['edu_status'])) $this->magic_vars['var']['edu_status']=''; ;if (  $this->magic_vars['var']['edu_status']==1): ?><font color="#009900">已填写</font><? else: ?><font color="#FF0000">未填写</font><? endif; ?></a></span>教育背景</li>
					<!--<li><span>已填写</span><a href="/index.php?user&q=code/userinfo/building">工作经历</a></li>-->
				</ul>
				<? unset($_magic_vars);unset($data); ?>
				</div>
			</div>
			
			<div class="user_right_li">
				<div class="title">网站公告</div>
				<div class="content">
					<ul>
						<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_id'=>'22');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
						<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></li>
						<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
					</ul>
				</div>
			</div>
			
			<div class="user_right_li">
				<div class="title">新手入门</div>
				<div class="content">
					<ul>
						<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_id'=>'10');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
						<li><a href="/<? if (!isset($this->magic_vars['var']['site_nid'])) $this->magic_vars['var']['site_nid'] = ''; echo $this->magic_vars['var']['site_nid']; ?>/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></li>
						<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
					</ul>
				</div>
			</div>
			
			<div class="user_right_li">
				<div class="title">论坛动态</div>
				<div class="content">
					<ul>
						<? $this->magic_vars['query_type']='GetTopicsList';$data = array('limit'=>'6');$default = '';  include_once(ROOT_PATH.'modules/dwbbs/dwbbs.class.php');$this->magic_vars['magic_result'] = dwbbsClass::GetTopicsList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
						<li><a href="/bbs/index.html?q=view&tid=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" target="_blank"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></li>
						<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
	<!--右边的内容 结束-->
</div>
<!--用户中心的主栏目 结束-->

<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>