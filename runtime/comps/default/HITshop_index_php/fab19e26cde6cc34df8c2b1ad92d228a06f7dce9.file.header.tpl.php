<?php /* Smarty version Smarty-3.1.8, created on 2014-03-29 18:41:51
         compiled from "./home/views/default\public\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2097553353dbd5c4e96-53709302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab19e26cde6cc34df8c2b1ad92d228a06f7dce9' => 
    array (
      0 => './home/views/default\\public\\header.tpl',
      1 => 1396089554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2097553353dbd5c4e96-53709302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53353dbd670cb2_90251741',
  'variables' => 
  array (
    'appname' => 0,
    'keywords' => 0,
    'description' => 0,
    'res' => 0,
    'public' => 0,
    'app' => 0,
    'serType' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53353dbd670cb2_90251741')) {function content_53353dbd670cb2_90251741($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\xampp\\htdocs\\HITshop\\brophp\\libs\\plugins\\modifier.truncate.php';
?><html>
	<head>
		<title><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['appname']->value,200);?>
</title>
		<meta name="Author" content="HIT-team" />
		<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/head.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/global.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/print.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/welcome.css" />
	
		<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/common.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/win.js"></script>
								<script>
									Ajax().get("<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/getnum",function(data){
										document.getElementById("msg").innerHTML=data;
									});
									Ajax().get("<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/getindentnum",function(data){
										document.getElementById("indentmsg").innerHTML=data;
									});
								</script>
	</head>
	<body>
			<div id="content">
			<div id="header">
				<div id="top">
					<div id="top_left">
						
						<?php if ($_SESSION['login']==1){?>
          						&nbsp;欢迎回来 <b><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_SESSION['uid'];?>
"><?php echo $_SESSION['username'];?>
&nbsp;&nbsp;用户中心</a></b>&nbsp;｜&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout">退出</a>&nbsp;｜&nbsp;
							
									<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/indent/"><span class="indentmsg" id="indentmsg" font-style="color:red"></span></a>&nbsp;&nbsp;&nbsp;
						
									<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/"><span class="msg" id="msg" font-style="color:red"></span></a>

						<?php }else{ ?>
						<form action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login" method="post">
							&nbsp;
							用户名:<input class="inputheight" name="uname" type="text" size="10">&nbsp;
							密码:<input class="inputheight" name="upwd" type="password" size="10">
							<input type="submit" class="button"  name="loginsubmit" value="登录">&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/register"><span style="color:red">注册</span></a>
						</form>
						<?php }?>
						
					</div>

					<div id="top_right">
						<form action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/index" method="post">
							<input type="radio" <?php if ($_smarty_tpl->tpl_vars['serType']->value=="title"||$_smarty_tpl->tpl_vars['serType']->value==null){?> checked <?php }?> name="serType" value="title">商品
							<input type="radio" <?php if ($_smarty_tpl->tpl_vars['serType']->value=="content"){?> checked <?php }?> name="serType" value="content">店铺
							<input type="radio" <?php if ($_smarty_tpl->tpl_vars['serType']->value=="keyword"){?> checked <?php }?> name="serType" value="keyword">分类
							<input type="text"  name="search" size="15" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" maxlength="255">
							<input type="submit"  class="button"  value="搜索">&nbsp;
						</form>
					</div>
				</div>
				
				<div id="logo">
					<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
"><img border="0" width="200" height="80" alt="HIT-ego_logo" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/logo.jpg"></a>
				</div>
				<div id="right_box">
					<div id="banner">
						<!-- 可以在这里加入banner -->	
   						<a href=""><img width="500" height="70" alt="banner" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/banner.jpg" border=0></a>
					</div>

					<div id="tool">
						
						<ul>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/shopcar/">购物车</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/">用户中心</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/add">添加商品</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/indent/">我的订单</a></li>
						</ul>
					</div>
				</div>
				<div class="nav"> </div>
			</div>	

			<div class="nav"> </div>
			
			
			
			<div id="container">
		
    
<?php }} ?>