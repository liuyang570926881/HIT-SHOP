﻿<?php
	class Index {
		function index(){
				$this->assign("appname", APP_NAME);
				$this->assign("keywords", KEYWORD);
				$this->assign("description", DESCRIPTION);
				//取出主类名,图片，子类
				$cat=D("cat")->field('id , name')->where( array(['cid']=>'0') )->r_select(array("cat_img","simg , bimg","cid"),array("cat","id , name","pid",array("child","id",5)));
			    
				
				//
				for($i=0;$i<count($cat);$i++){
					$good=D("goods")->field("id , name , simg , price , proprice");
					$good=$good->where(array('cid'=>$cat[$i]['id'],'state'=>'1'));
					$good=$good->order("fbtime desc")->limit(5);
					
					$cat[$i]['childgoods']=$good->select();
				}
				
				$this->assign("cats", $cat);
				//查找热卖商品
				$hotgoods=D("goods")->field('id ,name ,price ,proprice ,simg,chengjiaonum')->order("chengjiaonum desc");
				$hotgoods=$hotgoods->limit(5)->select();
				$this->assign("hotgoods",$hotgoods);
				
				//获取并分配友情链接内容
				$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());
				
				$this->display();
	

		}	
		
		
		function info(){
			
		    $this->display();
		}
		
	}