<?php
	class Cat{

		function namestring($setid){
			$cla = $this->find($setid);
			$pathstring=$cla["path"];
			$arr = explode(",", $cla["path"] );
			foreach($arr as $value){
				$temp=$this->field("name")->find($value);
				
				$link='<a href="'.B_APP.'/cat/index/id/'.$value.'">';
				$ulink='</a>';
				$pathstring=str_replace(",".$value,"->".$link.$temp["name"].$ulink,$pathstring);
			}
			$pathstring=ltrim($pathstring,"0");
			return $pathstring;
		}
		
		
		
		function formselect($name="pid", $value="0", $root="根分类", $change=""){
			$data=$this->field('id,pid,name,concat(path,",",id) as abspath')->order("abspath,id asc")->select();

			$html='<select '.$change.' id="sel" name="'.$name.'">';
			$html.='<option value="0">'.$root.'</option>';
			foreach($data as $val){
				if($value==$val["id"])
					$html.='<option selected value="'.$val['id'].'">';
				else
					$html.='<option value="'.$val['id'].'">';

				$num=count(explode(",", $val["abspath"]))-2;
				$space=str_repeat("|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$num);	
				$name=$val["name"];
				$html.=$space."|-".$name;
				$html.='</option>';	
			}
			$html.='</select>';

			return $html;
		}
		

	}