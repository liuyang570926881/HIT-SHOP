<?php /* Smarty version Smarty-3.1.8, created on 2014-03-29 10:39:04
         compiled from "./home/views/default\flink\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10318533632480b5034-02075146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6eb6d4abd25cd7047484d239af1e155987302ff' => 
    array (
      0 => './home/views/default\\flink\\add.tpl',
      1 => 1395673826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10318533632480b5034-02075146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53363248151431_58655199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53363248151431_58655199')) {function content_53363248151431_58655199($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>友情链接管理>添加友情连接</div>
			</div>	
		    
		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">网站名称<span class="red_font">*</span></span>
						 <input type="text" class="text-box" name="webname" maxlength="30" size="20" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['webname'];?>
">
					</li>
					<li class="dark-row">
						<span class="col_width">地&nbsp;&nbsp;址<span class="red_font">*</span></span>
							<input type="text" class="text-box" name="url" maxlength="60" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
"> &nbsp; 例如：http://www.HITshop.net
					
					</li>
					<li class="light-row">
						<span class="col_width">LOGO<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="logo" maxlength="100" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['logo'];?>
"> &nbsp; 网站LOGO图片的真实地址,会自动下载到本地。
					</li>

						
					<li class="dark-row">
						<span class="col_width" style="margin-top:30px">网站描述</span>
						<textarea class="text-box" name="msg" cols="50" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['msg'];?>
</textarea>
					</li>
					<li class="light-row">
						<span class="col_width">联系人<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="rname" maxlength="30" size="10" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['rname'];?>
">
					</li>
					<li class="dark-row">
						<span class="col_width">站长Email<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="email" maxlength="60" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
">
					</li>

					<li class="light-row">
						<span class="col_width">显示方式</span>
						
						<input type="radio" name="list" <?php if ($_smarty_tpl->tpl_vars['post']->value['list']=="0"||$_smarty_tpl->tpl_vars['post']->value['list']==null){?> checked <?php }?> value="0"> 网站名称
						<input type="radio" name="list"  <?php if ($_smarty_tpl->tpl_vars['post']->value['list']=="1"){?> checked <?php }?> value="1"> LOGO图片
					</li>
<!--no done-->		<!--<li class="dark-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="audit" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="0"||$_smarty_tpl->tpl_vars['post']->value['audit']==null){?> checked <?php }?> value="0"> 不显示
						<input type="radio" name="audit"  <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']=="1"){?> checked <?php }?> value="1"> 显示
					</li>-->
					<input type="hidden" name="audit" value="0">
					<li class="light-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" name="mod" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>