<{ include file="public/header.tpl" }>

<link rel="stylesheet" type="text/css" href="<{$res}>/css/main.css">
<!-- 遍历分类列表 -->
<div background-color="red">
<!-- 	<style type="text/css">
		.cla_fenlei{
        display: block;
        height: 40px;
        padding-left: 20px;
        line-height: 40px;
        color:#FFF;
		font-family:microsoft yahei;
		font-size:18px;
        background-color:#DF5038;
		padding-left:40px;		
		}
	
	</style> -->
		<div class="cla_fenlei">
			分类列表
		</div>
			<div id="wa" display="inline" style="width:160px">
				<{foreach $cats as $cat}>
					<div >
						<a href="<{$app}>/class/index/id/<{$cat.id}>"><font id="mainclass"><{$cat.name}></font></a>
					</div>
				<{/foreach}>
			</div>
	
<!-- 循环显示分类图片 -->
	<style type="text/css">
			/*scroll对象部分样式开始*/
			/*块1样式*/
			#scroll {width:786px;height:260px;overflow:hidden;position:relative;z-index:2;}
			/*块2样式*/
			.mqdemoa {width:4590px!important;width:3500px;list-style:none;margin:0;padding:0;overflow:hidden;}
			/*块2子元素样式*/
			.mqdemoa li {width:255px;float:left;}
			/*内容样式*/
			.mqdemoa li p {margin:0;}
			.mqdemoa li p img {width:280px;height:245px;}
			.mqdemoa li h3 {margin:0;font:12px/27px "宋体";text-align:center;}
			/*scroll对象部分样式结束*/

			/*其他样式，与scroll对象无关联*/
			#prenext {width:760px;height:20px;overflow:hidden;}
			#prenext span {display:block;font:12px "宋体";width:50%;height:20px;line-height:20px;text-align:center;cursor:pointer;color:#fff;background:#000;filter:alpha(opacity=30);opacity:0.3;}
			#prenext .pre {float:left;}
			#prenext .next {float:right;}
	</style>
<script src="<{$res}>/js/dhscroll.js"></script>

<!-- <p id="s">scrollWidth, scrollLeft</p> -->
<div id="scroll">
<ul id="scroll2" class="mqdemoa">

		<{foreach $cats as $cat}>

			<li><p><a href="<{$app}>/class/index/id/<{$cat.id}>"><img src="<{$res}>/images/<{$cat.bimg}>" alt="<{$cat.name}>" /></a></p>
			<h3><a href="<{$app}>/class/index/id/<{$cat.id}>"><font id="mainclass"><{$cat.name}></font></a></h3>
			</li>
		<{/foreach}>

</ul>
</div>
<div id="prenext">
    <span class="pre" onmouseover="this.style.background='#eee';this.style.color='#000'" onmouseout="this.style.background='#000';this.style.color='#fff'" onclick="dhs.pre();">上一页</span>
    <span class="next" onmouseover="this.style.background='#eee';this.style.color='#000'" onmouseout="this.style.background='#000';this.style.color='#fff'" onclick="dhs.next();">下一页</span>
</div>

<script type="text/javascript">
var dhs = new dhscroll();
dhs.scrollDOM = document.getElementById("scroll");
dhs.scrollCDOM = document.getElementById("scroll2");
dhs.showwidth = 765;
dhs.getsw();
dhs.go("left",true);
</script>
</div>
<hr>


<!-- 各分类物品展示 -->
<div>
<{foreach $cats as $cat}>
	
	<div class="piece1_bd clearfix">
		    <div class="ma">
			   <img heiget="30px" width="30px" src="<{$res}>/images/20140323215212.jpg"/>
				<a href="<{$app}>/good/goodslist/mode/class/value/<{$cat.id}>"><{$cat.name}></a>
			</div>
	<div class="list4">
		<div class="list2">
				<div class="tupian" >
					<a href="<{$app}>/good/goodslist/mode/class/value/<{$cat.id}>">
						<img width="160px" height="180px" src="<{$res}>/images/<{$cat.simg}>"/>
					</a>
				</div>
				<div>
				<{foreach $cat.child as $chi}>
					<li><a href="<{$app}>/good/goodslist/mode/class/value/<{$cat.id}>"><{$chi.name}></a></li>
				<{/foreach}>
				</div>
		</div>
		<div class="list3"> 
				<{foreach $cat.childgoods as $chig}>
				<div class="shangping" style="height:175px;" display="inline">
					<a href="<{$app}>/good/index/id/<{$chig.id}>">
						<div><img height="120px" width="120px"  src="<{$root}>/upfile/goods/goodsimg/<{$chig.simg}>"/></div>
						<div class="sname"><{$chig.name}></div>
						<div class="sproprice"><font color=#777777>￥<del><{$chig.proprice}></del></font></div>
						<div class="sprice"><font color=#ff1111>￥<{$chig.price}></font></div>
						
					</a> 
				</div>	
				<{/foreach}>
		
		</div>
	</div>
	</div>
<{/foreach}>
</div>
	

<div id="cheap">
	<{foreach $hotgoods as $good}>
	<div id="every">
		<div>
			<a href="<{$app}>/good/index/id/<{$good.id}>"	><{$good.name}></a>
		</div>
		<div>
			<a href="<{$app}>/good/index/id/<{$good.id}>"	>
				<img src="<{$root}>/upfile/goods/goodsimg/<{$good.simg}>"/><br>
			</a>
		</div>
		<div>
			<a href="<{$app}>/good/index/id/<{$good.id}>"	>
				<font color=#777777>￥<del><{$good.proprice}></del></font>
				<font color=#ff1111>￥<{$good.price}></font>
			</a>
		</div>
	</div>
	<{/foreach}>

	<div class="nav"> </div>
	<div id="link">
       		<div class="dt"><sdivong><span>友情链接</span></sdivong><div><a href="<{$app}>/flink/add">申请</a></div></div>
        	<div class="dd">
               		<ul>
				<{ section name=ls loop=$links }>
					<li><a href="<{ $links[ls].url }>" target="_blank">
						<{ if $links[ls].list }>
							<img height="40" alt="<{ $links[ls].webname }>" src="<{$public}>/uploads/logos/<{ $links[ls].logo }>" border="0" >
						<{else}>
							<{ $links[ls].webname }>
						<{/if}>

					</a></li>
				<{ /section }>
          		</ul>
		</div>
      	 </div>
	<div class="nav"> </div>
	

<{ include file="public/footer.tpl" }>

