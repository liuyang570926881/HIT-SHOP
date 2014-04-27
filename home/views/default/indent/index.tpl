<{ include file="public/header.tpl" }>
		
     					<ul>
       						
        				
        					<li> 我的订单 </li>
							
					<{foreach $buyergoods as $buyergood}>
								
							
							
        					<li><span>卖家：</span>
          						<{$buyergood.ownername}> 
								<a href="<{$app}>/user/showinfo/id/<{$buyergood.ownername}>"> 我要联系他</a>
								<a href="<{$app}>/message/add/id/<{$buyergood.ownerid}>"> 
								给他留言</a>
								
								</li>
								
       						<div>
								<a href="<{$app}>/good/index/id/<{$buyergood.goodid}>">
								<{$buyergood.goodname}>
								</a>
								
								<font color=#ff1111>￥<{$buyergood.goodprice}></font>
								X <{$buyergood.num}> = ￥<{$buyergood.sumprice}>
							</div>

					</ul>
				<{foreachelse}>
					没有这样的订单！
				<{/foreach}>
				
				
				        <li> 我收到的订单 </li>
							
				<{foreach $sellergoods as $sellergood}>
								
							
							
        					<li><span>买家：</span>
          						<{$sellergood.username}> 
								<a href="<{$app}>/user/showinfo/id/<{$sellergood.userid}>"> 我要联系他</a>
								<a href="<{$app}>/message/add/id/<{$sellergood.userid}>">
								给他留言</a>
								
								</li>
								
       						<div>
								<a href="<{$app}>/good/index/id/<{$sellergood.goodid}>">
								<{$sellergood.goodname}>
								</a>
								
								<font color=#ff1111>￥<{$sellergood.goodprice}></font>
								X <{$sellergood.num}> = ￥<{$sellergood.sumprice}>
							</div>
       					
							
        					
							
						<li><span>买方QQ：</span>
         					 <span><{$sellergood.userqq}></span>
 							
						<li><span>买方电话：</span>
         					 <span><{$sellergood.userphone}></span>
 							
						<li><span>买方邮编：</span>
         					 <span><{$sellergood.userpostcode}></span>
 							
						<li><span>买方地址：</span>
         					<span><{$sellergood.useraddress}></span>
							<input name="indent" type="hidden" value="<{$indent.id}>">
							
					</ul>
				<{foreachelse}>
					没有这样的订单！
				<{/foreach}>

<{ include file="public/footer.tpl" }>