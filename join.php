<!DOCTYPE html>
<html>
<head>
	<title>成为志愿者</title>
	<meta charset="utf-8">
	<script language=JavaScript>
	function InputCheck(infoForm)
	{
	  if (infoForm.name.value == "")
	  {
	    alert("请输入姓名");
	    infoForm.name.focus();
	    return (false);
	  }
	  if (infoForm.sex.value == "")
	  {
	    alert("请输入性别");
	    infoForm.sex.focus();
	    return (false);
	  }
	  if (infoForm.studentid.value == "")
	  {
	    alert("请输入学号");
	    infoForm.studentid.focus();
	    return (false);
	  }
	  if (infoForm.college.value == "")
	  {
	    alert("请输入学院");
	    infoForm.college.focus();
	    return (false);
	  }
	  if (infoForm.phone.value == "")
	  {
	    alert("请输入手机号码");
	    infoForm.phone.focus();
	    return (false);
	  }
	  if (infoForm.qq.value == "")
	  {
	    alert("请输入QQ号");
	    infoForm.qq.focus();
	    return (false);
	  }
	  if (infoForm.email.value == "")
	  {
	    alert("请输入电子邮箱");
	    infoForm.email.focus();
	    return (false);
	  }
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
	  if (infoForm.password2.value == "")
	  {
	    alert("请再次输入密码");
	    infoForm.password2.focus();
	    return (false);
	  }
	  if (infoForm.password2.value != infoForm.password1.value)
	  {
	    alert("两次密码不同，请重新输入密码");
	    infoForm.password2.focus();
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
	<?php
		require_once("./volunteer.class.php");
		$valid = false;
		if(!empty($_POST)){
			$name = $_POST['name'];
			$sex = $_POST['sex'];
			$studentid = $_POST['studentid'];
			$college = $_POST['college'];
			$phone = $_POST['phone'];
			$qq = $_POST['qq'];
			$email = $_POST['email'];
			$nickname = $_POST['nickname'];
			$password = $_POST['password1'];
			$valid = true;
		}
	?>
</head>

<body>
	<h1 class="title">成为志愿者</h1>
	<div class="form">
		<form name="infoForm" action="#" method="post" onSubmit="return InputCheck(this)">
			<div class="fieldset">
			<fieldset>
				<legend>基本信息</legend>
				<div class="row">
					姓名：<input name="name" type="text" />
					性别：<input name="sex" type="text" />
				</div>
				<div class="row">
					学号：<input name="studentid" type="text" />
					学院：<input name="college" type="text" />
				</div>
				<div class="row">
					手机号码：<input name="phone" type="text" />
					QQ号：<input name="qq" type="text" />
				</div>
				<div class="row">
					电子邮箱：<input name="email" type="text" />
				</div>
			</fieldset>
			</div>
			
			<div class="fieldset">
			<fieldset>
				<legend>登录信息</legend>
				<div class="row">
					昵称：<input name="nickname" type="text" />
				</div>
				<div class="row">
					密码：<input name="password1" type="password" />
				</div>
				<div class="row">
					再次输入密码：<input name="password2" type="password" />
				</div>
			</fieldset>
			</div>
			
			<div class="row">
				<button type="submit">申请成为志愿者</button>
				<a class="button" href="index.html">返回主页</a>
			</div>
		</form>
	</div>
	<?php
		if($valid){
			$volunteer = new Volunteer($name, $sex, $studentid, $college, $phone, $qq, $email, $nickname, $password);
			$volunteer->insert();
			echo '<script>alert("已提交您的志愿者申请，审核中……")</script>';
		}
	?>
</body>
</html>