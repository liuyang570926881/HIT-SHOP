<?php /* Smarty version Smarty-3.1.8, created on 2014-03-29 23:31:58
         compiled from "./home/views/default\user\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147895336e76e832b95-32438454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '920b74651085c3af55391c519b71420c74921e1b' => 
    array (
      0 => './home/views/default\\user\\mod.tpl',
      1 => 1394097798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147895336e76e832b95-32438454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'user' => 0,
    'url' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5336e76e8f2241_84824551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336e76e8f2241_84824551')) {function content_5336e76e8f2241_84824551($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



	<div>
		<div>
			用户名：&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a>
		</div>
		<div>
			E-mail：&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>

		</div>
		<div>
			性别：&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==0){?>女<?php }elseif($_smarty_tpl->tpl_vars['user']->value['sex']==1){?>男<?php }else{ ?>保密<?php }?>
		</div>
		<div>
			QQ：&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['qq'];?>

		</div>		
		<div>
			手机：&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>

		</div>			
	
	</div>
	<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update">
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
	<table>
						
		<tr>
			<td colspan="2"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/user/<?php if ($_smarty_tpl->tpl_vars['user']->value['upic']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['upic'];?>
<?php }else{ ?>default.gif<?php }?>"/></td>
		</tr>
		<tr>
			<th>用户名</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
&nbsp;</td>
		</tr>
		<tr>
			<th>E-mail</th><td><input type="text" name="email" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>性别</th>
			<td>
				<input type="radio" name="sex"  <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=="1"){?> checked <?php }?> value="1"> 男
				<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=="0"){?> checked <?php }?> value="0"> 女
				<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']=="2"){?> checked <?php }?> value="2"> 保密
			</td>
		</tr>
		<tr>
			<th>QQ</th><td><input type="text" name="qq" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['qq'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>手机</th><td><input type="text" name="phone" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>真实姓名</th><td><input type="text" name="realname" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['realname'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>身份证</th><td><input type="text" name="shenfennum" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['shenfennum'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>预设地址</th><td><input type="text" name="address" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>邮编</th><td><input type="text" name="postcode" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['postcode'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<th>个性签名</th><td><input type="text" name="info" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['info'];?>
">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" class="button" value="确认修改">&nbsp;&nbsp;</td>
		</tr>
		
	</table>
	</form>	
	Array
(
    [id] => 1
    [gid] => 1
    [username] => admin
    [userpwd] => 21232f297a57a5a743894a0e4a801fc3
    [email] => aaa@bbb.com
    [regtime] => 1393328196
    [sex] => 0
    [info] => 
    [upic] => 
    [disable] => 0
    [uid] => 1
    [realname] => liu
    [shenfennum] => 2147483647
    [phone] => 2147483647
    [qq] => 570926881
    [address] => hit5
    [postcode] => 150000
)

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>