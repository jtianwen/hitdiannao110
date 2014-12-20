<!DOCTYPE html>
<html>
<head>
	<title>电脑义诊预约</title>
	<meta charset="utf-8">
	<script language=JavaScript>
	function InputCheck(orderForm)
	{
	  if (orderForm.name.value == "")
	  {
	    alert("请输入姓名");
	    orderForm.name.focus();
	    return (false);
	  }
	  if (orderForm.college.value == "")
	  {
	    alert("请输入学院");
	    orderForm.college.focus();
	    return (false);
	  }
	  if (orderForm.apartment.value == "")
	  {
	    alert("请输入公寓");
	    orderForm.apartment.focus();
	    return (false);
	  }
	  if (orderForm.phone.value == "")
	  {
	    alert("请输入电话号码");
	    orderForm.phone.focus();
	    return (false);
	  }
	  if (orderForm.qq.value == "")
	  {
	    alert("请输入QQ号码");
	    orderForm.qq.focus();
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
	div.row{
		 padding: 10px;
	}
	div.form{
		 text-align: center;
		 font:  700 20px "STXihei";
		 margin: 0px 250px 0px 250px;
	}
	div.left {
		width:50%;
		float:left;
	}
	div.right {
		width:50%;
		float:left;
	}
	div.fieldset{
		margin-bottom: 10px;
	}
	select,input,textarea{
		font: 20px "STXihei";
	}
	a, button{
		margin : 0px 30px 0px 30px;
		font: 700 20px "STXihei";
	}
	</style>
</head>

<body>
	<h1 class="title">电脑义诊预约</h1>
	<div class="form">
		<form name="infoForm" action="#" method="post" onSubmit="return InputCheck(this)">
			<div class="fieldset">
				<fieldset>
					<legend>基本信息</legend>
					<div class="row">
						姓名：<input name="name" type="text" placeholder="姓名"/>
						学院：<input name="college" type="text" placeholder="学院"/>
					</div>
					<div class="row">
						公寓：<input name="apartment" type="text" placeholder="公寓" />
						QQ号：<input name="qq" type="text" placeholder="QQ号">
					</div>
					<div class="row" >
						联系方式：<input name="phone" type="text" placeholder="手机号码">
					</div>
				</fieldset>
			</div>
			
			<div class="fieldset">
			<fieldset>
				<legend>义诊预约信息</legend>
				<div class="left">
					问题类别:
					<select name="types">
						<option value="clean">拆机清灰</option>
						<option value="installOS">重装系统</option>
						<option value="OSProblem">系统故障</option>
						<option value="installSoftware">软件安装</option>
					</select>
				</div>
				<div class="right">
					<textarea name="describe" clos="20" rows="4">问题的详细描述</textarea>
				</div>
			</fieldset>
			</div>
			
			<div class="row">
				<button type="submit">立即预约</button>
				<a class="button" href="index.html">返回主页</a>
			</div>
		</form>
	</div>

</body>
</html>