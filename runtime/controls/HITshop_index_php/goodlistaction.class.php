<?php
	class goodlistAction extends Common {
		//查询
		function index() {
			
			

			$this->display(); 
		}

		function show() {
			
		

			$this->display(); 
		}

		function fpage() {
			debug();
			$goods = D('goods');
		
			$page = new AjaxPage($goods->total(), 10);

			$this->assign('goods', $goods->limit($page->limit)->select());

			$this->assign('fpage', $page->fpage());	

			$this->display();
		}
	}
