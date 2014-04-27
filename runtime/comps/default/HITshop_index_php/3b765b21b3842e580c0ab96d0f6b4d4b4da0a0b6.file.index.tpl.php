<?php /* Smarty version Smarty-3.1.8, created on 2014-03-29 23:31:51
         compiled from "./home/views/default\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20515336e767e38371-21612715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b765b21b3842e580c0ab96d0f6b4d4b4da0a0b6' => 
    array (
      0 => './home/views/default\\user\\index.tpl',
      1 => 1394238227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20515336e767e38371-21612715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'user' => 0,
    'root' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5336e7681016f3_55106924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336e7681016f3_55106924')) {function content_5336e7681016f3_55106924($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



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
	
	<table>
						
		<tr>
			<td colspan="2"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/user/<?php if ($_smarty_tpl->tpl_vars['user']->value['upic']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['upic'];?>
<?php }else{ ?>default.gif<?php }?>"/></td>
		</tr>
		<tr>
			<th>用户名</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
		</tr>
		<tr>
			<th>E-mail</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
		</tr>
		<tr>
			<th>性别</th><td><?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==0){?>女<?php }elseif($_smarty_tpl->tpl_vars['user']->value['sex']==1){?>男<?php }else{ ?>保密<?php }?></td>
		</tr>
		<tr>
			<th>QQ</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['qq'];?>
</td>
		</tr>
		<tr>
			<th>手机</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td>
		</tr>
		<tr>
			<th>真实姓名</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['realname'];?>
</td>
		</tr>
		<tr>
			<th>身份证</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['shenfennum'];?>
</td>
		</tr>
		<tr>
			<th>预设地址</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</td>
		</tr>
		<tr>
			<th>邮编</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['postcode'];?>
</td>
		</tr>
		<tr>
			<th>个性签名</th><td><?php echo $_smarty_tpl->tpl_vars['user']->value['info'];?>
</td>
		</tr>
		<tr>
			<td colspan="2"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod">修改</a></td>
		</tr>
		
	</table>
	

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>