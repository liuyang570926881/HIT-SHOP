<?php /* Smarty version Smarty-3.1.8, created on 2014-04-27 10:22:11
         compiled from "./home/views/default\good\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144055336e1bdf1b0b0-97516977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9cf7fd8ebdd19c6a6d0d69510087e1e11b46ab8' => 
    array (
      0 => './home/views/default\\good\\index.tpl',
      1 => 1398565327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144055336e1bdf1b0b0-97516977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5336e1be0f5f83_41526635',
  'variables' => 
  array (
    'path' => 0,
    'good' => 0,
    'root' => 0,
    'app' => 0,
    'own' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5336e1be0f5f83_41526635')) {function content_5336e1be0f5f83_41526635($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php echo $_smarty_tpl->tpl_vars['path']->value;?>


    <div>id&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
</div><br>
    <div>cid&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['cid'];?>
</div><br>
    <div>name&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</div><br> 
    
    <div>fbtime&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['fbtime'];?>
</div><br> 
    <div>simg&nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/goods/goodsimg/<?php echo $_smarty_tpl->tpl_vars['good']->value['simg'];?>
"/></div><br> 
    <div>bimg&nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/goods/goodbimg/<?php echo $_smarty_tpl->tpl_vars['good']->value['bimg'];?>
"/></div><br>
    <div>price&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</div><br> 
    <div>proprice&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['proprice'];?>
</div><br>
    <div>danwei&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['danwei'];?>
</div><br>
    <div>num&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['num'];?>
</div><br>
	
	
	<form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/shopcar/insert">
	<input type="hidden"  name="good"  value="<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
">
	<input type="hidden"  name="goodname"  value="<?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
">
	<input type="hidden"  name="goodowner"  value="<?php echo $_smarty_tpl->tpl_vars['good']->value['ownerid'];?>
">
	
	<div>我想要</div>
	<input type="text"  name="num"  value="1"><?php echo $_smarty_tpl->tpl_vars['good']->value['danwei'];?>

    <input type="submit" class="button" name="mod" value="加入我的购物车">&nbsp;&nbsp;
	</form>	
	
	
    <div>jieshao&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['jieshao'];?>
</div><br>
    <div>xiangxi&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['xiangxi'];?>
</div><br>
    <div>state&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['state'];?>
</div><br>
    <div>starttime&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['starttime'];?>
</div><br>
    <div>endtime&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['endtime'];?>
</div><br>
    <div>chengjiaonum&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['good']->value['chengjiaonum'];?>
</div><br>

	<div>&nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/user/<?php echo $_smarty_tpl->tpl_vars['own']->value['upic'];?>
"></div><br>
    <div>gid&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['own']->value['gid'];?>
</div><br>
    <div>username&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['own']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['own']->value['username'];?>
</a></div><br>
   
    
    <div>email&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['own']->value['email'];?>
</div><br>
    <div>regtime&nbsp;&nbsp;<?php echo date("Y_m_d",$_smarty_tpl->tpl_vars['own']->value['regtime']);?>
</div><br>
    <div>sex&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['own']->value['sex'];?>
</div><br>
    <div>info&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['own']->value['info'];?>
</div><br>
 
	<div class="nav"> </div><br>
	<div id="like">
       		<div class="dt"><strong><span>你可能喜欢</span></strong><br>
					
		</div><br>
      	</div><br>
	<div class="nav"> </div><br>
	

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>