<?php
	/*
	PHP基础知识：
	3.流程控制
	4.函数
	*/
	print("<b>while循环:<br/></b>");
	$Int=0;
	while($Int<5)
	{
		print("Number:".$Int);
		print("<br/>");
		$Int++;
	}
	
	print("<b>for循环:<br/></b>");
	for($Int=0;$Int<5;$Int++)
	{
		if($Int == 3)
		{
			continue;
		}
		print("Number:".$Int);
		print("<br/>");
	}
	
	print("<b>自定义函数:<br/></b>");
	function Add($DataA,$DataB)
	{
		return $DataA+$DataB;
	}
	function FuncDefPara($StrA,$StrB="YangJun")
	{
		return $StrA.$StrB;
	}
	
	$DataA=20;
	$DataB=30;
	print(Add($DataA,$DataB));
	print("<br/>");
	
	$StrA="Hello,";
	//$StrB="HAHAHAH";
	print(FuncDefPara($StrA));
	print("<br/>");
?>
