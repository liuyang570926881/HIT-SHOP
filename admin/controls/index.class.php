<?php
	class Index {
		function index(){
			echo "<b>欢迎使用《细说PHP》中的BroPHP框架1.0, 第一次访问时会自动生成项目结构：</b><br>";
			echo '<pre>';
			echo file_get_contents('D:/xampp/htdocs/HITshop/runtime/_HITshop_admin.php');
			echo '</pre>';
		}		
	}