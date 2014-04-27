<?php /* Smarty version Smarty-3.1.8, created on 2014-03-28 19:59:43
         compiled from "./home/views/default\indent\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184885335642f6249b1-23089798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7468598155828353b6da3508620a01cfabb9e47f' => 
    array (
      0 => './home/views/default\\indent\\index.tpl',
      1 => 1395934796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184885335642f6249b1-23089798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'buyergoods' => 0,
    'buyergood' => 0,
    'app' => 0,
    'sellergoods' => 0,
    'sellergood' => 0,
    'indent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5335642f7f9612_71211456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5335642f7f9612_71211456')) {function content_5335642f7f9612_71211456($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
     					<ul>
       						
        				
        					<li> 我的订单 </li>
							
					<?php  $_smarty_tpl->tpl_vars['buyergood'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['buyergood']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buyergoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['buyergood']->key => $_smarty_tpl->tpl_vars['buyergood']->value){
$_smarty_tpl->tpl_vars['buyergood']->_loop = true;
?>
								
							
							
        					<li><span>卖家：</span>
          						<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['ownername'];?>
 
								<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/showinfo/id/<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['ownername'];?>
"> 我要联系他</a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/add/id/<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['ownerid'];?>
"> 
								给他留言</a>
								
								</li>
								
       						<div>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['goodid'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['goodname'];?>

								</a>
								
								<font color=#ff1111>￥<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['goodprice'];?>
</font>
								X <?php echo $_smarty_tpl->tpl_vars['buyergood']->value['num'];?>
 = ￥<?php echo $_smarty_tpl->tpl_vars['buyergood']->value['sumprice'];?>

							</div>

					</ul>
				<?php }
if (!$_smarty_tpl->tpl_vars['buyergood']->_loop) {
?>
					没有这样的订单！
				<?php } ?>
				
				
				        <li> 我收到的订单 </li>
							
				<?php  $_smarty_tpl->tpl_vars['sellergood'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sellergood']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sellergoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sellergood']->key => $_smarty_tpl->tpl_vars['sellergood']->value){
$_smarty_tpl->tpl_vars['sellergood']->_loop = true;
?>
								
							
							
        					<li><span>买家：</span>
          						<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['username'];?>
 
								<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/showinfo/id/<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['userid'];?>
"> 我要联系他</a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/add/id/<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['userid'];?>
">
								给他留言</a>
								
								</li>
								
       						<div>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['goodid'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['goodname'];?>

								</a>
								
								<font color=#ff1111>￥<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['goodprice'];?>
</font>
								X <?php echo $_smarty_tpl->tpl_vars['sellergood']->value['num'];?>
 = ￥<?php echo $_smarty_tpl->tpl_vars['sellergood']->value['sumprice'];?>

							</div>
       					
							
        					
							
						<li><span>买方QQ：</span>
         					 <span><?php echo $_smarty_tpl->tpl_vars['sellergood']->value['userqq'];?>
</span>
 							
						<li><span>买方电话：</span>
         					 <span><?php echo $_smarty_tpl->tpl_vars['sellergood']->value['userphone'];?>
</span>
 							
						<li><span>买方邮编：</span>
         					 <span><?php echo $_smarty_tpl->tpl_vars['sellergood']->value['userpostcode'];?>
</span>
 							
						<li><span>买方地址：</span>
         					<span><?php echo $_smarty_tpl->tpl_vars['sellergood']->value['useraddress'];?>
</span>
							<input name="indent" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['indent']->value['id'];?>
">
							
					</ul>
				<?php }
if (!$_smarty_tpl->tpl_vars['sellergood']->_loop) {
?>
					没有这样的订单！
				<?php } ?>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>