<?php
session_start();
?>

<?php
if(!empty($_POST["NameSub"]))
{	
	if(!empty($_POST["NameUserName"]) and !empty($_POST["NamePWD"])){
		if($_POST["NameVerifyCode"]==$_SESSION["CheckCode"]){
			setcookie("UserName",$_POST["NameUserName"],time()+10);
			setcookie("PWD",$_POST["NamePWD"],time()+10);
			header("location:Login.php");
		}
		else{
			print("<script>alert('验证码输入有误');location.href='Login.php'</script>");
		}
	}
}
?>

<?php
if(!empty($_GET["Logout"])){
	setcookie("UserName","");
	setcookie("PWD","");
	header("location:Login.php");
}
?>


<?php
if($_COOKIE["UserName"] and $_COOKIE["PWD"]){
	//print("COOKIE生效<br/>");
	//print($_COOKIE["UserName"]."<br/>");
	//print($_COOKIE["PWD"]);
	print("<p style='text-align:right'><a href='Login.php?Logout=out'>退出登录</a></p>");
}
else{
?>

<form action="" method="post">
用户名:<input type="text" name="NameUserName"><br/>
密&nbsp;&nbsp;码:<input type="password" name="NamePWD"><br/>
验证码:<input type="text" name="NameVerifyCode"><img src="VerifyCode.php"><br/>
<input type="submit" value="登陆" name="NameSub">
</form>


<?php
}
?>