<{ include file="public/header.tpl" }>


	<div>
		<div>
			用户名：&nbsp;&nbsp;<a href="<{$app}>/user/index/uid/<{$user.id}>"><{$user.username}></a>
		</div>
		<div>
			E-mail：&nbsp;&nbsp;<{$user.email}>
		</div>
		<div>
			性别：&nbsp;&nbsp;<{ if $user.sex eq 0 }>女<{ else if $user.sex eq 1 }>男<{ else }>保密<{ /if }>
		</div>
		<div>
			QQ：&nbsp;&nbsp;<{$user.qq}>
		</div>		
		<div>
			手机：&nbsp;&nbsp;<{$user.phone}>
		</div>			
	
	</div>
	
	<table>
						
		<tr>
			<td colspan="2"><img src="<{$root}>/upfile/user/<{ if $user.upic }><{$user.upic}><{ else }>default.gif<{ /if }>"/></td>
		</tr>
		<tr>
			<th>用户名</th><td><{$user.username}></td>
		</tr>
		<tr>
			<th>E-mail</th><td><{$user.email}></td>
		</tr>
		<tr>
			<th>性别</th><td><{ if $user.sex eq 0 }>女<{ else if $user.sex eq 1 }>男<{ else }>保密<{ /if }></td>
		</tr>
		<tr>
			<th>QQ</th><td><{$user.qq}></td>
		</tr>
		<tr>
			<th>手机</th><td><{$user.phone}></td>
		</tr>
		<tr>
			<th>真实姓名</th><td><{$user.realname}></td>
		</tr>
		<tr>
			<th>身份证</th><td><{$user.shenfennum}></td>
		</tr>
		<tr>
			<th>预设地址</th><td><{$user.address}></td>
		</tr>
		<tr>
			<th>邮编</th><td><{$user.postcode}></td>
		</tr>
		<tr>
			<th>个性签名</th><td><{$user.info}></td>
		</tr>
		<tr>
			<td colspan="2"><a href="<{$url}>/mod">修改</a></td>
		</tr>
		
	</table>
	

<{ include file="public/footer.tpl" }>

