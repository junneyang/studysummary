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
			print("<script>alert('��֤����������');location.href='Login.php'</script>");
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
	//print("COOKIE��Ч<br/>");
	//print($_COOKIE["UserName"]."<br/>");
	//print($_COOKIE["PWD"]);
	print("<p style='text-align:right'><a href='Login.php?Logout=out'>�˳���¼</a></p>");
}
else{
?>

<form action="" method="post">
�û���:<input type="text" name="NameUserName"><br/>
��&nbsp;&nbsp;��:<input type="password" name="NamePWD"><br/>
��֤��:<input type="text" name="NameVerifyCode"><img src="VerifyCode.php"><br/>
<input type="submit" value="��½" name="NameSub">
</form>


<?php
}
?>