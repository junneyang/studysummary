<?php
if($_GET["Link"]){
	for($I=0;$I<10;$I++){
		print($_GET["Link"]."<br/>");
	}
	sleep(2);
}

if($_POST["NameEdit"]){
	if(strlen($_POST["NameEdit"])<=6){
		print("str length less than 6");
	}
	else{
		print("OK");
	}
}
?>
