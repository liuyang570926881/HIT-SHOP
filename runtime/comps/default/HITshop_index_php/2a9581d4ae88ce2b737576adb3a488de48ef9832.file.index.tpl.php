<?php /* Smarty version Smarty-3.1.8, created on 2014-03-29 10:49:56
         compiled from "./home/views/default\shopcar\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:996253363466e8b116-62555342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9581d4ae88ce2b737576adb3a488de48ef9832' => 
    array (
      0 => './home/views/default\\shopcar\\index.tpl',
      1 => 1396061392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '996253363466e8b116-62555342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53363467033317_20920182',
  'variables' => 
  array (
    'goods' => 0,
    'app' => 0,
    'good' => 0,
    'url' => 0,
    'sum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53363467033317_20920182')) {function content_53363467033317_20920182($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
		<div><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">name&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></div><br> 
		<div>simg&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['simg'];?>
</div><br> 
		<div>单价&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</div><br> 
		<div>danwei&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['danwei'];?>
</div><br>
		<div>buynum&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['buynum'];?>
</div><br>
		<div>sumprice&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['sprice'];?>
</div>
		<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/add/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['ownerid'];?>
">联系卖家</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/showinfo/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['ownerid'];?>
">查看卖家信息卖家</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['carid'];?>
">删除</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/indent/indentconfirm/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['carid'];?>
">确认订单</a>
		<hr>
	<?php } ?>
	<div>购物车结算&nbsp;共&nbsp;<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
&nbsp;元</div><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/info/allindentconfirm/">全部确认订单</a>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>