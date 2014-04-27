<?php
	class UserAction extends Common {
		function index(){
				islogin($this);
				//分配环境变量
				$this->assign("appname", APP_NAME);
				$this->assign("keywords", KEYWORD);
				$this->assign("description", DESCRIPTION);
				//
				
				$user=D("user")->find($_SESSION['uid']);
				$user = array_merge($user,D("user_info")->where(array(["uid"]=>$_SESSION['uid']))->find());

				
				$this->assign('user',$user);
				
				$this->display();
					
		}	
		
		function mod(){
				islogin($this);
				//p($_SESSION);
				$user=D("user")->find($_SESSION['uid']);
				$user = array_merge($user,D("user_info")->where(array(["uid"]=>$_SESSION['uid']))->find());
				$this->assign("user",$user);
				$this->display();
				
				
		}
		function update(){
			islogin($this);
			$user=D("user");
			$user_info=D("user_info");
			$userup["id"]=$_POST["id"];
			$userup["email"]=$_POST["email"];
			$userup["info"]=$_POST["info"];
			$userup["sex"]=$_POST["sex"];
			$user_infoup["id"]=$_POST["id"];
			$user_infoup["realname"]=$_POST["realname"];
			$user_infoup["shenfennum"]=$_POST["shenfennum"];
			$user_infoup["qq"]=$_POST["qq"];
			$user_infoup["phone"]=$_POST["phone"];
			$user_infoup["address"]=$_POST["address"];
			$user_infoup["postcode"]=$_POST["postcode"];
			$user->update($userup,1,1);
			$user_info->update($user_infoup,1,1);
			$this->redirect("index");
		}
		function showinfo(){
				$user=D("user")->field("id,gid,username,email,regtime,sex,upic")->find($_GET["id"]);
				$userinfo=D("user_info")->where(array(["uid"]=>$_GET["id"]))->find();
				$user=array_merge($userinfo,$user);
				$this->assign("owner",$user);
				$this->display();
		}
		
	}