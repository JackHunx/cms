
		<script type="text/javascript">
 function changeUserMenu(id){
    var mu = $("#user_title_"+id);
    var qe = $("#user_menu_"+id);
    if(qe.css('display')=='none'){
        mu.removeClass('title1').addClass('title');
        qe.css('display', 'block');
    }else{
        mu.removeClass('title').addClass('title1');
        qe.css('display', 'none');
    }
}
 </script>

 
<div class="user_menus">
	<div class="title" id="user_title_touzi"><span onclick="changeUserMenu('touzi')">&nbsp;</span>我是投资者</div>
	<div class="menu">
		<ul id="user_menu_touzi" style="display:block">
			<li><a href="/invest/index.html" target="_blank">我要投资</a></li>
			<li><a href="/index.php?user&q=code/borrow/succes">已成功投资的借款</a></li>
			<li><a href="/index.php?user&q=code/borrow/bid">正在投标的借款</a></li>
			<li><a href="/index.php?user&q=code/borrow/tender_vouch">我担保的借款</a></li>
			<!--
			<li><a href="/index.php?user&q=code/borrow/appraisal">我的评价</a></li>
			<li><a href="/index.php?user&q=code/borrow/attention">我关注的借款</a></li>
			<li><a href="/index.php?user&q=code/borrow/tender_reply">贷款者回复</a></li>
			-->
		</ul>
	</div>
</div>
 

  
<div class="user_menus">
	<div class="title" id="user_title_jiekuan" ><span onclick="changeUserMenu('jiekuan')">&nbsp;</span>我是借款者</div>
	<div class="menu">
		<ul id="user_menu_jiekuan">
			<li><a href="borrow/index.html" target="_blank">我要借款</a></li>
			<li><a href="/index.php?user&q=code/borrow/publish">正在招标的借款</a></li>
			<li><a href="/index.php?user&q=code/borrow/unpublish">尚未发布的借款</a></li>
			<li><a href="/index.php?user&q=code/borrow/repayment">正在还款的借款</a></li>
			<li><a href="/index.php?user&q=code/borrow/loanermsg">投资者回复</a></li>
			<li><a href="/index.php?user&q=code/borrow/limitapp">额度申请</a></li>
		</ul>
	</div>
</div>
 
 
<div class="user_menus">
	<div class="title" id="user_title_zijin" ><span onclick="changeUserMenu('zijin')">&nbsp;</span>资金管理</div>
	<div class="menu">
		<ul id="user_menu_zijin">
			<li><a href="/index.php?user&q=code/account">帐户详情</a></li>
			<li><a href="/index.php?user&q=code/account/bank">银行帐户</a></li>
			<li><a href="/index.php?user&q=code/account/cash_new">帐户提现</a></li>
			<li><a href="/index.php?user&q=code/account/recharge_new">帐户充值</a></li>
			<li><a href="/index.php?user&q=code/account/cash">提现记录</a></li>
			<li><a href="/index.php?user&q=code/account/recharge">充值记录</a></li>
			<li><a href="/index.php?user&q=code/account/log">资金记录</a></li>
		</ul>
	</div>
</div>
 
 <!--
<div class="user_menus">
	<div class="title" id="user_title_kefu" ><span onclick="changeUserMenu('kefu')">&nbsp;</span>客户服务</div>
	<div class="menu">
		<ul id="user_menu_kefu">
			<li><a href="/index.php?user&q=view#info">我要提问</a></li>
			<li><a href="/index.php?user&q=view#info">在线客户</a></li>
		</ul>
	</div>
</div> 
-->	

<div class="user_menus">
	<div class="title" id="user_title_shezhi" ><span onclick="changeUserMenu('shezhi')">&nbsp;</span>基本设置</div>
	<div class="menu">
		<ul id="user_menu_shezhi">
			<li><a href="/index.php?user&q=code/userinfo">填写个人资料</a></li>
			<li><a href="/index.php?user&q=code/user/avatar">更换头像</a></li>
			<li><a href="/index.php?user&q=code/user/privacy">设置隐私</a></li>
			<li><a href="/index.php?user&q=code/message">站内信</a></li>
			<li><a href="/index.php?user&q=code/remind">提醒设置</a></li>
		</ul>
	</div>
</div>

<div class="user_menus">
	<div class="title" id="user_title_renzheng" ><span onclick="changeUserMenu('renzheng')">&nbsp;</span>认证中心</div>
	<div class="menu">
		<ul id="user_menu_renzheng">
			<li><a href="/index.php?user&q=code/user/realname">实名认证</a></li>
			<li><a href="/index.php?user&q=code/user/email_status">邮箱认证</a></li>
			<li><a href="/index.php?user&q=code/user/phone_status">手机认证</a></li>
			<li><a href="/index.php?user&q=code/user/video_status">视频认证</a></li>
			<li><a href="/index.php?user&q=code/user/scene_status">现场认证</a></li>
			<li><a href="/index.php?user&q=code/attestation">资料证明</a></li>
		</ul>
	</div>
</div>


<div class="user_menus">
	<div class="title" id="user_title_haoyou" ><span onclick="changeUserMenu('haoyou')">&nbsp;</span>好友管理</div>
	<div class="menu">
		<ul id="user_menu_haoyou">
			<li><a href="/index.php?user&q=code/user/reginvite">邀请好友</a></li>
			<li><a href="/index.php?user&q=code/user/request">好友请求</a></li>
			<li><a href="/index.php?user&q=code/user/myfriend">我的好友</a></li>
			<li><a href="/index.php?user&q=code/user/black">我的黑名单</a></li>
		</ul>
	</div>
</div>



<div class="user_menus">
	<div class="title" id="user_title_safe" ><span onclick="changeUserMenu('safe')">&nbsp;</span>安全中心</div>
	<div class="menu">
		<ul id="user_menu_safe">
			<li><a href="/index.php?user&q=code/user/userpwd">修改登录密码</a></li>
			<li><a href="/index.php?user&q=code/user/paypwd">修改支付密码</a></li>
			<li><a href="/index.php?user&q=code/user/protection">密码保护</a></li>
		</ul>
	</div>
</div>

<? if (!isset($this->magic_vars['_G']['user_result']['type_id'])) $this->magic_vars['_G']['user_result']['type_id']='';if (!isset($this->magic_vars['_G']['user_result']['type_id'])) $this->magic_vars['_G']['user_result']['type_id']=''; ;if (  $this->magic_vars['_G']['user_result']['type_id']==3 ||  $this->magic_vars['_G']['user_result']['type_id']==7): ?>
<div class="user_menus">
	<div class="title" id="user_title_safe" ><span onclick="changeUserMenu('safe')">&nbsp;</span>客服中心</div>
	<div class="menu">
		<ul id="user_menu_safe">
			<li><a href="/index.php?user&q=code/user/myuser">我的客户</a></li>
			<li><a href="/index.php?user&q=code/borrow/myuser">客户借款</a></li>
		</ul>
	</div>
</div>
<? endif; ?>
<!--
<div class="user_menus">
	<div class="title" id="user_title_jifen" ><span onclick="changeUserMenu('jifen')">&nbsp;</span>礼品折扣</div>
	<div class="menu">
		<ul id="user_menu_jifen">
			<li><a href="/index.php?user&q=view#info">积分礼品</a></li>
			<li><a href="/index.php?user&q=view#info">折扣商家</a></li>
		</ul>
	</div>
</div>
-->
<div class="user_menus">
	<div class="title" id="user_title_shequ" ><span onclick="changeUserMenu('shequ')">&nbsp;</span>社区管理</div>
	<div class="menu">
		<ul id="user_menu_shequ">
			<li><a href="/index.php?user&q=view#info">我的话题</a></li>
		</ul>
	</div>
</div>
