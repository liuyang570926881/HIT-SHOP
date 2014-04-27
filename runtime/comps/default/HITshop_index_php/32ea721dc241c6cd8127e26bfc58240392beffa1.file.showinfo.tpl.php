<?php /* Smarty version Smarty-3.1.8, created on 2014-04-27 18:20:24
         compiled from "./home/views/default\user\showinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17364535cd9e82b6950-93801936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ea721dc241c6cd8127e26bfc58240392beffa1' => 
    array (
      0 => './home/views/default\\user\\showinfo.tpl',
      1 => 1395068128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17364535cd9e82b6950-93801936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
    'owner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535cd9e8395404_25137803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535cd9e8395404_25137803')) {function content_535cd9e8395404_25137803($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



	<div>
		<div><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/user/<?php if ($_smarty_tpl->tpl_vars['owner']->value['upic']){?><?php echo $_smarty_tpl->tpl_vars['owner']->value['upic'];?>
<?php }else{ ?>default.gif<?php }?>"/></div>
		<div>
			店主：&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['owner']->value['username'];?>
</a>
		</div>
		<div>
			E-mail：&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['owner']->value['email'];?>

		</div>
		<div>
			性别：&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['owner']->value['sex']==0){?>女<?php }elseif($_smarty_tpl->tpl_vars['owner']->value['sex']==1){?>男<?php }else{ ?>保密<?php }?>
		</div>
		<div>
			QQ：&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['owner']->value['qq'];?>

		</div>		
		<div>
			手机：&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['owner']->value['phone'];?>

		</div>		
		<div>地址：<?php echo $_smarty_tpl->tpl_vars['owner']->value['address'];?>
</div>
		
	</div>
	

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>