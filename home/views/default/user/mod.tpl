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
	<form  method="post" action="<{$url}>/update">
	<input type="hidden" name="id" value="<{$user.id}>">
	<table>
						
		<tr>
			<td colspan="2"><img src="<{$root}>/upfile/user/<{ if $user.upic }><{$user.upic}><{ else }>default.gif<{ /if }>"/></td>
		</tr>
		<tr>
			<th>用户名</th><td><{$user.username}>&nbsp;</td>
		</tr>
		<tr>
			<th>E-mail</th><td><input type="text" name="email" maxlength="80" size="40" value="<{$user.email}>">&nbsp;</td>
		</tr>
		<tr>
			<th>性别</th>
			<td>
				<input type="radio" name="sex"  <{if $user.sex eq "1" }> checked <{/if}> value="1"> 男
				<input type="radio" name="sex" <{if $user.sex eq "0" }> checked <{/if}> value="0"> 女
				<input type="radio" name="sex" <{if $user.sex eq "2" }> checked <{/if}> value="2"> 保密
			</td>
		</tr>
		<tr>
			<th>QQ</th><td><input type="text" name="qq" maxlength="80" size="40" value="<{$user.qq}>">&nbsp;</td>
		</tr>
		<tr>
			<th>手机</th><td><input type="text" name="phone" maxlength="80" size="40" value="<{$user.phone}>">&nbsp;</td>
		</tr>
		<tr>
			<th>真实姓名</th><td><input type="text" name="realname" maxlength="80" size="40" value="<{$user.realname}>">&nbsp;</td>
		</tr>
		<tr>
			<th>身份证</th><td><input type="text" name="shenfennum" maxlength="80" size="40" value="<{$user.shenfennum}>">&nbsp;</td>
		</tr>
		<tr>
			<th>预设地址</th><td><input type="text" name="address" maxlength="80" size="40" value="<{$user.address}>">&nbsp;</td>
		</tr>
		<tr>
			<th>邮编</th><td><input type="text" name="postcode" maxlength="80" size="40" value="<{$user.postcode}>">&nbsp;</td>
		</tr>
		<tr>
			<th>个性签名</th><td><input type="text" name="info" maxlength="80" size="40" value="<{$user.info}>">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" class="button" value="确认修改">&nbsp;&nbsp;</td>
		</tr>
		
	</table>
	</form>	
	Array
(
    [id] => 1
    [gid] => 1
    [username] => admin
    [userpwd] => 21232f297a57a5a743894a0e4a801fc3
    [email] => aaa@bbb.com
    [regtime] => 1393328196
    [sex] => 0
    [info] => 
    [upic] => 
    [disable] => 0
    [uid] => 1
    [realname] => liu
    [shenfennum] => 2147483647
    [phone] => 2147483647
    [qq] => 570926881
    [address] => hit5
    [postcode] => 150000
)

<{ include file="public/footer.tpl" }>

