<?php /* Smarty version Smarty-3.1.8, created on 2014-04-27 18:01:04
         compiled from "./home/views/default\goodlist\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26848535cd31e184492-59939369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e16ea74f7a341362df71e27153caaa8ab07c9cfd' => 
    array (
      0 => './home/views/default\\goodlist\\index.tpl',
      1 => 1398592861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26848535cd31e184492-59939369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535cd31e25f0c7_82513592',
  'variables' => 
  array (
    'public' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535cd31e25f0c7_82513592')) {function content_535cd31e25f0c7_82513592($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"> </script>


<div id="page">
	数据加载中....
</div>

<script>
	
	var pageobj = document.getElementById("page");
	//声明一个数组做为缓存
	var cache=new Array();

	function setPage(url) {
		if(!cache[url])	{	
			Ajax().get(url, function(data){
				pageobj.innerHTML=data;
				cache[url]=data;
			});
		}else {
			pageobj.innerHTML=cache[url];
		}
	}

	setPage('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/fpage/page/1');
</script>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>