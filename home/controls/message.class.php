<?php
	class Message {
		function index(){
				islogin($this);
				//分配环境变量
				$this->assign("appname", APP_NAME);
				$this->assign("keywords", KEYWORD);
				$this->assign("description", DESCRIPTION);
				//
				
				//$this->display();
					
		}	
		
		function mod(){
		
			/* 	islogin($this);
				//p($_SESSION);
				$user=D("user")->find($_SESSION['uid']);
				$user = array_merge($user,D("user_info")->where(array(["uid"]=>$_SESSION['uid']))->find());
				$this->assign("user",$user);
				$this->display(); */
				
				
		}
		function add(){
			islogin($this);
			$taruser=D("user")->field(" id , username ")->find($_GET["id"]);
			//p($taruser);
			$this->assign("taruser",$taruser);
			$this->assign("ck", Form::editor("messageck", "basicnoup", "500", "#FAFAFA",false));
			$this->display();
		}
		function insert(){
			islogin($this);
			$data["tarid"]=$_POST["tarid"];
			$data["title"]=$_POST["title"];
			$data["msg"]=$_POST["messageck"];
			$data["uid"]=$_SESSION["uid"];
			$data["uname"]=$_SESSION["username"];
			$data["time"]=time();
			$data["state"]=1;
			//p($data);
			$message=D("message");
			$lastid=$message->insert($data, 1, 1);
			if($lastid){
				$this->success("消息添加成功",1);	
			}else{
				$this->display();
				$this->error("消息添加失败",3,"message/add/id/".$data["tarid"]);
			} 
		}
		function getnum(){
			//islogin($this);
			debug(0);
			$user=D("user")->field('id,msg')
					->find($_SESSION["uid"]);
			$html="";
			if($user["msg"]){
				$html.='您有新留言了！';
			}
			echo $html;
		}
		function getindentnum(){
			debug(0);
			islogin($this);
			$user=D("user")->field('id,msg,indentmsg')
					->find($_SESSION["uid"]);
			$html="";
			if($user["indentmsg"]){
				$html.='订单信息有变化哦！';
			}
			echo $html;
		}
	}