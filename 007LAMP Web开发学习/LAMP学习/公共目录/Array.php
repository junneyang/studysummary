<?php
	/*
	PHP基础知识：
	5.数组及其操作
	*/
	print("<b>数组及其操作:<br/></b>");
	$Data=array(1,2,3,4,5,6,7,8,9,10);
	print_r($Data);
	print("<br/>");
	var_dump($Data);
	print("<br/>");
	print($Data[0]);
	print("<br/>");
	$Data[0]=100;
	print_r($Data);
	print("<br/>");
	unset($Data[1]);
	print_r($Data);
	print("<br/>");
	
	$Data=array(1,2,3,4,5,6,7,8,9,10,100,11);
	foreach($Data as $Key => $Value)
	{
		print($Key.":".$Value."<br/>");
	}
	sort($Data);
	print_r($Data);
	print("<br/>");
	
	
	$Data=array("A"=>"AAA","B"=>"BBB","C"=>"CCC","D"=>"DDD");
	print_r($Data);
	print("<br/>");
	var_dump($Data);
	print("<br/>");
	print($Data["A"]);
	print("<br/>");
	$Data["A"]=100;
	print_r($Data);
	print("<br/>");
	unset($Data["B"]);
	print_r($Data);
	print("<br/>");
	sort($Data);
	print_r($Data);
	print("<br/>");
	
	$Data=array("A"=>"AAA","B"=>"BBB","C"=>"CCC","D"=>"DDD");
	foreach($Data as $Key => $Value)
	{
		print($Key.":".$Value."<br/>");
	}
	
	$Data=array(array(1,2,3,4,5,6),array(6,5,4,3,2,1),array(4,5,6,7,8,9));
	foreach($Data as $Key => $Value)
	{
		foreach($Value as $K => $V)
		{
			print("Data"."[".$Key."]"."[".$K."]".":".$V);
			print("<br/>");
		}
	}
	
?>
