<?php
	/*
	PHP基础知识：
	1.PHP基本语法、基本数据类型介绍
	2.运算符、表达式
	*/
	$Str="PHP,HelloWorld!!!";
	print $Str;
	print "<br/>";
	
	$Int=123;
	print $Int;
	print "<br/>";
	
	$Float=123.321;
	print $Float;
	print "<br/>";
	
	$Bool=TRUE;
	print $Bool;
	print "<br/>";
	
	print __FILE__;
	print "<br/>";
	
	define("PI",3.1415926);
	print PI;
	print "<br/>";
	
	$Array=array(1,2,3,4,5,6);
	print var_dump($Array);
	print "<br/>";
	print_r($Array);
	print "<br/>";
	
	print 20*15;
	print "<br/>";
	$Int=20;
	print ++$Int;
	print "<br/>";
	
	$StrA="Hello";
	$StrB="World";
	print $StrA.$StrB."!!!";
	print "<br/>";
	
	$Int=20;
	$Int<<=2;
	print $Int;
	print "<br/>";
	
	print 20>10;
	print "<br/>";
	print 20=="20";
	print "<br/>";
	
	print var_dump(20>10 and 20<20);
	print "<br/>";
	
	if(FALSE)
	{
		print "TRUE";
	}
	else
	{
		print "FALSE";
	}
	print "<br/>";
	
	phpinfo();
?>
