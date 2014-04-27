<?php
	//全局可以使用的通用函数声明在这个文件中.
	//检查登录，传入$this
	function islogin($m){
		if($_SESSION["uid"] && $_SESSION["login"]){
			return;
		}else{
			$m->error("请先登录");
		
		}
		
	}