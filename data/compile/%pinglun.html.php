<!--���ۿ�ʼ-->
				<script src="/index.php?comment&type=list&code=<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1&epage=3"></script>
			<div class="content_title mar10">
				<span class="floatr">����������<font color="#FF0000"><script>document.write(result['total'])</script></font> �� <a href="/index.php?comment&type=lists&code=<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>&id=<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>&page=1" target="_blank">�鿴��������</a></span><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/pinglun.gif" align="absmiddle"/>&nbsp; ����
			</div>
			<div class="article_content ">
				<ul class="pinglun_co" >
				
				<script>
					var list = result['list'];
					var display = "";
					for (i=0;i<list.length;i++){
						display += '<li><div class="pinglun_co_left"><div class="pinglun_co_pic"><img src="'+list[i]['litpic']+'" width="73" height="73" /></div><a href="/u/'+list[i]['user_id']+'" target=_blank>'+list[i]['username']+'</a></div><div class="floatr"><div class="pinglun_co_content">'+list[i]['comment']+'<br><font style=" font-size:12px; float:right">'+list[i]['time']+'</font></div>	</div></li>';
					}
					document.write(display);
				</script>
				
				</ul>
				<div class="comment_page"></div>
				<div class="content_pinglun">
					<div><strong>����һ��</strong></div>
				  	<div ><textarea  rows="6" id="comment_content" name="comment"></textarea></div>
					<div><span class="floatr"><input type="image" id="pinglun" onclick="pinglun('<? if (!isset($this->magic_vars['_G']['site_result']['code'])) $this->magic_vars['_G']['site_result']['code'] = ''; echo $this->magic_vars['_G']['site_result']['code']; ?>','<? if (!isset($this->magic_vars['_G']['article_id'])) $this->magic_vars['_G']['article_id'] = ''; echo $this->magic_vars['_G']['article_id']; ?>')" src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/pinglun_content.gif" /></span>��֤�룺<input type="text" id="valicode" size="10" /> <img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /></div>
					<div>
						<dl>
							<dt>ע�� </dt>
							<dd>���벻Ҫ�������������ۡ� </dd>
							<dd>�����������ء�ȫ���˴�ί�����ά����������ȫ�ľ��������л����񹲺͹������йط��ɷ��档 </dd>
							<dd>���е�һ����������Ϊ��ֱ�ӻ��ӵ��µ����»����·������Ρ� </dd>
							<dd>������������ݽ�������˹۵㣬�뱾��վ�޹ء� </dd>
							<dd>����վ���۹�����Ա��Ȩ������ɾ�����Ͻ�����е��������ݡ� </dd>
							<dd>�����뱾���ۼ��������Ѿ��Ķ�������������� </dd>
						</dl>
					</div>
				</div>
			</div>
			<script type="text/javascript">
			function nl2br(value) 
{ 
  return value.replace("\n","<br />"); 
}
				function pinglun(code,id) {
						var comment =nl2br($("#comment_content").val());
						var valicode = $("#valicode").val();
						if (comment==""){
							alert("���۲���Ϊ��");
						}else{
						tipsWindown("����","url:get?/index.php?comment&type=add&code="+code+"&id="+id+"&comment="+comment+"&valicode="+valicode,300,130,"false","","false","text")
						}
					};
				function comment_close() {
					$("#windownbg").remove();
					$("#windown-box").fadeOut("slow",function(){$(this).remove();});
				};
			 	
		 </script>
			
			
			<!--���۽���-->