<?php /* Smarty version Smarty-3.1.8, created on 2014-03-29 23:23:48
         compiled from "./home/views/default\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2427053353dbd4cae58-96619299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e4512b3c268283b74d9e50c7ba504bdb6bd668' => 
    array (
      0 => './home/views/default\\index\\index.tpl',
      1 => 1396106624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2427053353dbd4cae58-96619299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53353dbd5ad783_37817122',
  'variables' => 
  array (
    'res' => 0,
    'cats' => 0,
    'app' => 0,
    'cat' => 0,
    'chi' => 0,
    'chig' => 0,
    'root' => 0,
    'hotgoods' => 0,
    'good' => 0,
    'links' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53353dbd5ad783_37817122')) {function content_53353dbd5ad783_37817122($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/main.css">
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
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
					<div >
						<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/class/index/id/<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><font id="mainclass"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</font></a>
					</div>
				<?php } ?>
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
<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/dhscroll.js"></script>

<!-- <p id="s">scrollWidth, scrollLeft</p> -->
<div id="scroll">
<ul id="scroll2" class="mqdemoa">

		<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>

			<li><p><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/class/index/id/<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['cat']->value['bimg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
" /></a></p>
			<h3><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/class/index/id/<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><font id="mainclass"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</font></a></h3>
			</li>
		<?php } ?>

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
<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
	
	<div class="piece1_bd clearfix">
		    <div class="ma">
			   <img heiget="30px" width="30px" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/20140323215212.jpg"/>
				<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/goodslist/mode/class/value/<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</a>
			</div>
	<div class="list4">
		<div class="list2">
				<div class="tupian" >
					<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/goodslist/mode/class/value/<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
">
						<img width="160px" height="180px" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['cat']->value['simg'];?>
"/>
					</a>
				</div>
				<div>
				<?php  $_smarty_tpl->tpl_vars['chi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chi']->key => $_smarty_tpl->tpl_vars['chi']->value){
$_smarty_tpl->tpl_vars['chi']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/goodslist/mode/class/value/<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['chi']->value['name'];?>
</a></li>
				<?php } ?>
				</div>
		</div>
		<div class="list3"> 
				<?php  $_smarty_tpl->tpl_vars['chig'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chig']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['childgoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chig']->key => $_smarty_tpl->tpl_vars['chig']->value){
$_smarty_tpl->tpl_vars['chig']->_loop = true;
?>
				<div class="shangping" style="height:175px;" display="inline">
					<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['chig']->value['id'];?>
">
						<div><img height="120px" width="120px"  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/goods/goodsimg/<?php echo $_smarty_tpl->tpl_vars['chig']->value['simg'];?>
"/></div>
						<div class="sname"><?php echo $_smarty_tpl->tpl_vars['chig']->value['name'];?>
</div>
						<div class="sproprice"><font color=#777777>￥<del><?php echo $_smarty_tpl->tpl_vars['chig']->value['proprice'];?>
</del></font></div>
						<div class="sprice"><font color=#ff1111>￥<?php echo $_smarty_tpl->tpl_vars['chig']->value['price'];?>
</font></div>
						
					</a> 
				</div>	
				<?php } ?>
		
		</div>
	</div>
	</div>
<?php } ?>
</div>
	

<div id="cheap">
	<?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotgoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
	<div id="every">
		<div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
"	><?php echo $_smarty_tpl->tpl_vars['good']->value['name'];?>
</a>
		</div>
		<div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
"	>
				<img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/upfile/goods/goodsimg/<?php echo $_smarty_tpl->tpl_vars['good']->value['simg'];?>
"/><br>
			</a>
		</div>
		<div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/good/index/id/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
"	>
				<font color=#777777>￥<del><?php echo $_smarty_tpl->tpl_vars['good']->value['proprice'];?>
</del></font>
				<font color=#ff1111>￥<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
</font>
			</a>
		</div>
	</div>
	<?php } ?>

	<div class="nav"> </div>
	<div id="link">
       		<div class="dt"><sdivong><span>友情链接</span></sdivong><div><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/flink/add">申请</a></div></div>
        	<div class="dd">
               		<ul>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['name'] = 'ls';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['links']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total']);
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['url'];?>
" target="_blank">
						<?php if ($_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['list']){?>
							<img height="40" alt="<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['webname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/logos/<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['logo'];?>
" border="0" >
						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['webname'];?>

						<?php }?>

					</a></li>
				<?php endfor; endif; ?>
          		</ul>
		</div>
      	 </div>
	<div class="nav"> </div>
	

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>