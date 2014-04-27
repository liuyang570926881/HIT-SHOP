<html>
	<head>
		<title><{ $appname|truncate:200 }></title>
		<meta name="Author" content="HIT-team" />
		<meta name="Keywords" content="<{$keywords}>" />
		<meta name="description" content="<{$description}>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/head.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/global.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/print.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/welcome.css" />
	
		<script src="<{$public}>/js/ajax3.0.js"></script>
		<script src="<{$res}>/js/common.js"></script>
		<script src="<{$res}>/js/win.js"></script>
								<script>
									Ajax().get("<{$app}>/message/getnum",function(data){
										document.getElementById("msg").innerHTML=data;
									});
									Ajax().get("<{$app}>/message/getindentnum",function(data){
										document.getElementById("indentmsg").innerHTML=data;
									});
								</script>
	</head>
	<body>
			<div id="content">
			<div id="header">
				<div id="top">
					<div id="top_left">
						<{nocache}>
						<{ if $smarty.session.login eq 1 }>
          						&nbsp;欢迎回来 <b><a href="<{$app}>/user/index/uid/<{$smarty.session.uid}>"><{ $smarty.session.username }>&nbsp;&nbsp;用户中心</a></b>&nbsp;｜&nbsp;<a href="<{$app}>/login/logout">退出</a>&nbsp;｜&nbsp;
							
									<a href="<{$app}>/indent/"><span class="indentmsg" id="indentmsg" font-style="color:red"></span></a>&nbsp;&nbsp;&nbsp;
						
									<a href="<{$app}>/message/"><span class="msg" id="msg" font-style="color:red"></span></a>

						<{ else }>
						<form action="<{$app}>/login" method="post">
							&nbsp;
							用户名:<input class="inputheight" name="uname" type="text" size="10">&nbsp;
							密码:<input class="inputheight" name="upwd" type="password" size="10">
							<input type="submit" class="button"  name="loginsubmit" value="登录">&nbsp;
							<a href="<{$app}>/login/register"><span style="color:red">注册</span></a>
						</form>
						<{ /if }>
						<{/nocache}>
					</div>

					<div id="top_right">
						<form action="<{$app}>/search/index" method="post">
							<input type="radio" <{ if $serType eq "title" or $serType eq null }> checked <{ /if }> name="serType" value="title">商品
							<input type="radio" <{ if $serType eq "content"}> checked <{ /if }> name="serType" value="content">店铺
							<input type="radio" <{ if $serType eq "keyword"}> checked <{ /if }> name="serType" value="keyword">分类
							<input type="text"  name="search" size="15" value="<{ $search }>" maxlength="255">
							<input type="submit"  class="button"  value="搜索">&nbsp;
						</form>
					</div>
				</div>
				
				<div id="logo">
					<a href="<{$app}>"><img border="0" width="200" height="80" alt="HIT-ego_logo" src="<{$public}>/images/logo.jpg"></a>
				</div>
				<div id="right_box">
					<div id="banner">
						<!-- 可以在这里加入banner -->	
   						<a href=""><img width="500" height="70" alt="banner" src="<{$public}>/images/banner.jpg" border=0></a>
					</div>

					<div id="tool">
						
						<ul>
							<li><a href="<{$app}>/shopcar/">购物车</a></li>
							<li><a href="<{$app}>/user/">用户中心</a></li>
							<li><a href="<{$app}>/good/add">添加商品</a></li>
							<li><a href="<{$app}>/indent/">我的订单</a></li>
						</ul>
					</div>
				</div>
				<div class="nav"> </div>
			</div>	

			<div class="nav"> </div>
			
			
			
			<div id="container">
		
    
