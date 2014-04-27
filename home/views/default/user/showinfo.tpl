<{ include file="public/header.tpl" }>


	<div>
		<div><img src="<{$root}>/upfile/user/<{ if $owner.upic }><{$owner.upic}><{ else }>default.gif<{ /if }>"/></div>
		<div>
			店主：&nbsp;&nbsp;<{$owner.username}></a>
		</div>
		<div>
			E-mail：&nbsp;&nbsp;<{$owner.email}>
		</div>
		<div>
			性别：&nbsp;&nbsp;<{ if $owner.sex eq 0 }>女<{ else if $owner.sex eq 1 }>男<{ else }>保密<{ /if }>
		</div>
		<div>
			QQ：&nbsp;&nbsp;<{$owner.qq}>
		</div>		
		<div>
			手机：&nbsp;&nbsp;<{$owner.phone}>
		</div>		
		<div>地址：<{$owner.address}></div>
		
	</div>
	

<{ include file="public/footer.tpl" }>

