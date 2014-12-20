<!DOCTYPE html>
<html>
<head>
	<title>志愿者登录</title>
	<meta charset="utf-8">
	<script language=JavaScript>
	function InputCheck(infoForm)
	{
	  if (infoForm.nickname.value == "")
	  {
	    alert("请输入昵称");
	    infoForm.nickname.focus();
	    return (false);
	  }
	  if (infoForm.password1.value == "")
	  {
	    alert("请输入密码");
	    infoForm.password1.focus();
	    return (false);
	  }
	}
	</script>
	<style>
	h1.title { 
		color: MidnightBlue;
		font:  700 50px "STXihei";
		text-align: center;
	}
	div.form{
		 text-align: center;
		 font:  700 20px "STXihei";
		 margin : 30px 250px 0px 250px;
	}
	div.row{
		 padding: 10px;
	}
	input{
		font: 20px "STXihei";
	}
	a, button{
		margin : 10px 30px 0px 30px;
		font: 700 20px "STXihei";
	}
	</style>
</head>

<body>
	<h1 class="title">志愿者登录</h1>
	<div class="form">
		<form name="infoForm" action="#" method="post" onSubmit="return InputCheck(this)">
			<div class="row">
				<fieldset>
					<legend>登录</legend>
					<div class="row">
						昵称：<input name="nickname" type="text" />
					</div>
					<div class="row">
						密码：<input name="password1" type="password" />
					</div>
				</fieldset>
			</div>
			
			<div class="row">
				<button type="submit">登录</button>
				<a class="button" href="index.html">返回主页</a>
			</div>
		</form>
	</div>

</body>
</html>