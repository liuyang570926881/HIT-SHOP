<?php
	class looksessionAction extends Common {
		function index(){
			p($_SESSION);
		
			p($globals);
			
			p(strtotime('2013/7/4'));
		
		}	


		
	}