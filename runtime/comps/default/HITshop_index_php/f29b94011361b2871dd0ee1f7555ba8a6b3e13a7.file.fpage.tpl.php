<?php /* Smarty version Smarty-3.1.8, created on 2014-04-27 18:45:52
         compiled from "./home/views/default\goodlist\fpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6041535cd31eccf133-49762619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29b94011361b2871dd0ee1f7555ba8a6b3e13a7' => 
    array (
      0 => './home/views/default\\goodlist\\fpage.tpl',
      1 => 1398595546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6041535cd31eccf133-49762619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535cd31eeb7627_80478711',
  'variables' => 
  array (
    'url' => 0,
    'goods' => 0,
    'good' => 0,
    'app' => 0,
    'root' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535cd31eeb7627_80478711')) {function content_535cd31eeb7627_80478711($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\HITshop\\brophp\\libs\\plugins\\modifier.date_format.php';
?><table border="1" width="800" align="center">
<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del" method="post" onsubmit="return confirm('你确定要删除这些商品吗?')">
	<caption><h1>商品列表</h1></caption>

	<tr>
		<th>商品图片</th><th>商品名称</th> <th>商品价格</th><th>数量</th><th>添加时间</th><th>操作</th>
	</tr>
	
	<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?> 
		<tr>
			
			<a href="<$app>/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
				<img width="160px" height="180px" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/goods/goodsimg/<?php echo $_smarty_tpl->tpl_vars['good']->value['simg'];?>
"/></a></td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a></td>
				<td>￥<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['good']->value['num'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['good']->value['fbtime'],"%Y-%m-%d");?>
</td>
			</a>
			<td><a href="/HITshop/index.php/message/add/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['ownerid'];?>
">    联系卖家</a>
			/
			<a href="/HITshop/index.php/user/showinfo/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['ownerid'];?>
">
			查看卖家信息</a></td>
		</tr>
	<?php }
if (!$_smarty_tpl->tpl_vars['good']->_loop) {
?>
		<tr> <td colspan="7">没有商品 </td></tr>
	<?php } ?>

	<tr>
		 <td colspan="7" text-align="center" ><center><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</center></td>
	</tr>
</form>
</table>
<?php }} ?>