<div class="module_add">
			<form action="" method="post"  enctype="multipart/form-data" >
			<div class="module_title"><strong>上传图片水印设置</strong></div>
			<div class="module_border">
				<div class="d">上传的图片是否使用图片水印功能：</div>
				<div class="c">
					<input type="radio" value="0" name="con_watermark_pic" <? if (!isset($this->magic_vars['result']['con_watermark_pic'])) $this->magic_vars['result']['con_watermark_pic']='';if (!isset($this->magic_vars['result']['con_watermark_pic'])) $this->magic_vars['result']['con_watermark_pic']=''; ;if (  $this->magic_vars['result']['con_watermark_pic']==0 ||  $this->magic_vars['result']['con_watermark_pic']==''): ?> checked="checked"<? endif; ?> />否 <input type="radio" value="1"  name="con_watermark_pic" <? if (!isset($this->magic_vars['result']['con_watermark_pic'])) $this->magic_vars['result']['con_watermark_pic']=''; ;if (  $this->magic_vars['result']['con_watermark_pic']==1): ?> checked="checked"<? endif; ?>/>是 
				</div>
			</div>
			
			<div class="module_border">
			<div class="d">采集的图片是否使用图片水印功能：</div>
				<div class="c">
						<input type="radio" value="0"  name="con_watermark_caijipic" <? if (!isset($this->magic_vars['result']['con_watermark_caijipic'])) $this->magic_vars['result']['con_watermark_caijipic']='';if (!isset($this->magic_vars['result']['con_watermark_caijipic'])) $this->magic_vars['result']['con_watermark_caijipic']=''; ;if (  $this->magic_vars['result']['con_watermark_caijipic']==0 ||  $this->magic_vars['result']['con_watermark_caijipic']==''): ?> checked="checked"<? endif; ?> />否 <input type="radio" value="1" name="con_watermark_caijipic" <? if (!isset($this->magic_vars['result']['con_watermark_caijipic'])) $this->magic_vars['result']['con_watermark_caijipic']=''; ;if (  $this->magic_vars['result']['con_watermark_caijipic']==1): ?> checked="checked"<? endif; ?>/>是 
				</div>
			</div>
			
		<div class="module_border">
			<div class="d">选择水印的文件类型：</div>
			<div class="c">
					<input type="radio" value="0" name="con_watermark_type" <? if (!isset($this->magic_vars['result']['con_watermark_type'])) $this->magic_vars['result']['con_watermark_type']='';if (!isset($this->magic_vars['result']['con_watermark_type'])) $this->magic_vars['result']['con_watermark_type']=''; ;if (  $this->magic_vars['result']['con_watermark_type']==0 ||  $this->magic_vars['result']['con_watermark_type']==''): ?> checked="checked"<? endif; ?> />图片 <input type="radio" name="con_watermark_type" value="1"  <? if (!isset($this->magic_vars['result']['con_watermark_type'])) $this->magic_vars['result']['con_watermark_type']=''; ;if (  $this->magic_vars['result']['con_watermark_type']==1): ?> checked="checked"<? endif; ?>/>文字 
			</div>
		</div>
			
		<div class="module_border">
			<div class="d">水印文字：</div>
			<div class="c">
				<input type="text" name="con_watermark_word" value="<? if (!isset($this->magic_vars['result']['con_watermark_word'])) $this->magic_vars['result']['con_watermark_word'] = ''; echo $this->magic_vars['result']['con_watermark_word']; ?>"/>
			</div>
		</div>
		<div class="module_border">
			<div class="d">水印图片文件名（如果不存在，则使用文字水印）：</div>
			<div class="c">
			  <? if (!isset($this->magic_vars['result']['con_watermark_file'])) $this->magic_vars['result']['con_watermark_file']=''; ;if (  $this->magic_vars['result']['con_watermark_file']!=""): ?><img src="<? if (!isset($this->magic_vars['result']['con_watermark_file'])) $this->magic_vars['result']['con_watermark_file'] = ''; echo $this->magic_vars['result']['con_watermark_file']; ?>" /><br /><? endif; ?><input type="file" name="con_watermark_file" /> 
			</div>
		</div>
		
		<div class="module_border">
			<div class="d">水印图片文字字体大小：</div>
			<div class="c">
				<input type="text" name="con_watermark_font" value="<? if (!isset($this->magic_vars['result']['con_watermark_font'])) $this->magic_vars['result']['con_watermark_font'] = '';$_tmp = $this->magic_vars['result']['con_watermark_font'];$_tmp = $this->magic_modifier("default",$_tmp,"20");echo $_tmp;unset($_tmp); ?>"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">水印图片文字颜色（默认#FF0000为红色）：</div>
			<div class="c">
				<input type="text" value="<? if (!isset($this->magic_vars['result']['con_watermark_color'])) $this->magic_vars['result']['con_watermark_color'] = '';$_tmp = $this->magic_vars['result']['con_watermark_color'];$_tmp = $this->magic_modifier("default",$_tmp,"#FF0000");echo $_tmp;unset($_tmp); ?>" name="con_watermark_color"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">添加图片水印后质量参数,值越大，合并程序越低：</div>
			<div class="c">
				<input type="text" value="<? if (!isset($this->magic_vars['result']['con_watermark_imgpct'])) $this->magic_vars['result']['con_watermark_imgpct'] = '';$_tmp = $this->magic_vars['result']['con_watermark_imgpct'];$_tmp = $this->magic_modifier("default",$_tmp,"50");echo $_tmp;unset($_tmp); ?>" name="con_watermark_imgpct"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">添加文字水印后质量参数,值越小，合并程序越低：</div>
			<div class="c">
				<input type="text"  name="con_watermark_txtpct" value="<? if (!isset($this->magic_vars['result']['con_watermark_txtpct'])) $this->magic_vars['result']['con_watermark_txtpct'] = '';$_tmp = $this->magic_vars['result']['con_watermark_txtpct'];$_tmp = $this->magic_modifier("default",$_tmp,"50");echo $_tmp;unset($_tmp); ?>"/>
			</div>
		</div>
		
		<div class="module_border">
		<div class="d">水印位置：</div>
			<div class="c">
			<input type="radio" value="1" name="con_watermark_position" <? if (!isset($this->magic_vars['result']['con_watermark_position'])) $this->magic_vars['result']['con_watermark_position']='';if (!isset($this->magic_vars['result']['con_watermark_position'])) $this->magic_vars['result']['con_watermark_position']=''; ;if (  $this->magic_vars['result']['con_watermark_position']==1 ||  $this->magic_vars['result']['con_watermark_position']==''): ?> checked="checked"<? endif; ?> />顶部居左 <input type="radio" value="2"  name="con_watermark_position" <? if (!isset($this->magic_vars['result']['con_watermark_position'])) $this->magic_vars['result']['con_watermark_position']=''; ;if (  $this->magic_vars['result']['con_watermark_position']==2): ?> checked="checked"<? endif; ?>/>顶部居右<br /><input type="radio" value="3" name="con_watermark_position" <? if (!isset($this->magic_vars['result']['con_watermark_position'])) $this->magic_vars['result']['con_watermark_position']=''; ;if (  $this->magic_vars['result']['con_watermark_position']==3): ?> checked="checked"<? endif; ?>/>底部居左 <input type="radio" value="4" name="con_watermark_position" <? if (!isset($this->magic_vars['result']['con_watermark_position'])) $this->magic_vars['result']['con_watermark_position']=''; ;if (  $this->magic_vars['result']['con_watermark_position']==4): ?> checked="checked"<? endif; ?>/>底部居右
 
			</div>
		</div>
		
		<div class="module_submit"><input type="submit" value="确认修改"  /></div>
			</form>
		</div>