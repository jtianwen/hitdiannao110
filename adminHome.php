<?php
	require_once("./admin.class.php");
	$valid = false;
	if(!empty($_POST)){
		$name = $_POST['name'];
		$password = MD5($_POST['password']);
		$admin = new admin($name, $password);
		$admin->check();
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>哈工大电脑110俱乐部-后台管理系统</title>
	<meta charset="utf-8">
	<style>
		h1{
			color: MidnightBlue;
			font:  700 50px "STXihei";
			text-align: center;
			margin : 150px 0px 30px 0px;
		}
		a.menu{
			font:  30px "STXihei";
			padding: 10px;
		}
		a.menu2{
			color: DarkSlateGray;
			font:  20px "STXihei";
			padding: 10px;
		}
		div.menu,div.menu2{
			text-align: center;
			padding: 10px;
		}
    </style>
</head>

<body>
	<h1>哈工大电脑110俱乐部-后台管理系统</h1>
	<div class="menu">
		<a class="menu" href="#">发布新闻&公告</a>
		<a class="menu" href="#">查看义诊预约名单</a>
		<a class="menu" href="#">查看志愿者名单</a>
		<a class="menu" href="#">管理电脑110论坛</a>
	</div>
	<div class="menu2">
		<a class="menu2" href="index.html">返回主页</a>
	</div>
</body>
</html>