<{ include file="public/header.tpl" }>

	<{$path}>

    <div>id&nbsp;&nbsp;<{$good.id}></div><br>
    <div>cid&nbsp;&nbsp;<{$good.cid}></div><br>
    <div>name&nbsp;&nbsp;<{$good.name}></div><br> 
    
    <div>fbtime&nbsp;&nbsp;<{$good.fbtime}></div><br> 
    <div>simg&nbsp;&nbsp;<img src="<{$root}>/upfile/goods/goodsimg/<{$good.simg}>"/></div><br> 
    <div>bimg&nbsp;&nbsp;<img src="<{$root}>/upfile/goods/goodbimg/<{$good.bimg}>"/></div><br>
    <div>price&nbsp;&nbsp;<{$good.price}></div><br> 
    <div>proprice&nbsp;&nbsp;<{$good.proprice}></div><br>
    <div>danwei&nbsp;&nbsp;<{$good.danwei}></div><br>
    <div>num&nbsp;&nbsp;<{$good.num}></div><br>
	
	
	<form  method="post" action="<{$app}>/shopcar/insert">
	<input type="hidden"  name="good"  value="<{$good.id}>">
	<input type="hidden"  name="goodname"  value="<{$good.name}>">
	<input type="hidden"  name="goodowner"  value="<{$good.ownerid}>">
	
	<div>我想要</div>
	<input type="text"  name="num"  value="1"><{$good.danwei}>
    <input type="submit" class="button" name="mod" value="加入我的购物车">&nbsp;&nbsp;
	</form>	
	
	
    <div>jieshao&nbsp;&nbsp;<{$good.jieshao}></div><br>
    <div>xiangxi&nbsp;&nbsp;<{$good.xiangxi}></div><br>
    <div>state&nbsp;&nbsp;<{$good.state}></div><br>
    <div>starttime&nbsp;&nbsp;<{$good.starttime}></div><br>
    <div>endtime&nbsp;&nbsp;<{$good.endtime}></div><br>
    <div>chengjiaonum&nbsp;&nbsp;<{$good.chengjiaonum}></div><br>

	<div>&nbsp;&nbsp;<img src="<{$root}>/upfile/user/<{$own.upic}>"></div><br>
    <div>gid&nbsp;&nbsp;<{$own.gid}></div><br>
    <div>username&nbsp;&nbsp;<a href="<{$own.id}>"><{$own.username}></a></div><br>
   
    
    <div>email&nbsp;&nbsp;<{$own.email}></div><br>
    <div>regtime&nbsp;&nbsp;<{date("Y_m_d",$own.regtime)}></div><br>
    <div>sex&nbsp;&nbsp;<{$own.sex}></div><br>
    <div>info&nbsp;&nbsp;<{$own.info}></div><br>
 
	<div class="nav"> </div><br>
	<div id="like">
       		<div class="dt"><strong><span>你可能喜欢</span></strong><br>
					
		</div><br>
      	</div><br>
	<div class="nav"> </div><br>
	

<{ include file="public/footer.tpl" }>

