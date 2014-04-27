<?php /* Smarty version Smarty-3.1.8, created on 2014-03-29 15:34:37
         compiled from "./home/views/default\login\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219015336778de9ea18-04682899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f38c3bf103c4e0455f5d6940d4b1dd20006bab' => 
    array (
      0 => './home/views/default\\login\\register.tpl',
      1 => 1395680751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219015336778de9ea18-04682899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5336778e04e957_02591020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336778e04e957_02591020')) {function content_5336778e04e957_02591020($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



		<title><?php echo @APP_NAME;?>
-会员注册</title>
		<meta name="Author" content="liu" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/global.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/print.css">
		<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"></script>
		<script>
			var url='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
		</script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/common.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/register.js"></script>

		<div id="reg">
       			<div class="dt"><strong style="width:90%;">会员注册</strong></div>
			
        			<div class="dd">
					<form name="form2"  action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" method="post" onsubmit="return validate('click')">		
     					 <ul>
       						
        				
        					<li> </li>
        					<li><span>用户名：</span>
          						<input name="username"  type="text" id="username"> 
							<span class="stats1">请输入用户名</span></li>
       						<li><span>登录密码：</span>
          						<input name="userpwd" type="password" id="userpwd" class="text">
							<span class="stats1">请输入密码</span> </li>
       						 <li><span>确认密码：</span>
         						 <input name="repwd" type="password" id="repwd" value="" size="20" class="text">
							 <span class="stats1">请输入确认</span> </li>
        					<li><span>电子邮箱：</span>
         						 <input name="email" type="text" id="email" class="text">
							 <span class="stats1">请输入邮箱</span> </li>
       					
        					<li><span>性别：</span>
        						  <input type="radio" name="sex" value="1" /> 男 &nbsp;
        						  <input type="radio" name="sex" value="2" /> 女 &nbsp;
         						  <input name="sex" type="radio" value="0" checked="checked" /> 保密 
						 </li>
  						 <li><span>验证码：</span>
         						 <input name="code" type="text" onkeyup="if (this.value != this.value.toUpperCase()) this.value=this.value.toUpperCase();" id="vdcode" size="6" class="text" />
         						 <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/code" alt="看不清楚，换一张" style="cursor: pointer;" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/code/'+Math.random()" />
							 <span class="stats1">请输入用验证码</span></li>
      					
					</ul>
     					 <hr />
      					<ul>
      						  <li><span>&nbsp;</span>
          						<input class="button"  type="submit" value="注 册">
       						 </li>
      					</ul>
   				 </form>		
			</div>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>