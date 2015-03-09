<?php
	/*
	PHP基础知识：
	6.文件目录操作
	*/
	print("<b>文件目录操作:<br/></b>");
	print(filetype("D:\PHPWebServer\Apache2.2\htdocs"));
	print("<br/>");
	print(filetype(__FILE__));
	print("<br/>");
	print_r(stat(__FILE__));
	print("<br/>");
	
	var_dump(is_dir("D:\PHPWebServer\Apache2.2\htdocs"));
	print("<br/>");
	var_dump(is_file("D:\PHPWebServer\Apache2.2\htdocs"));
	print("<br/>");
	var_dump(is_executable("D:\PHPWebServer\Apache2.2\htdocs"));
	print("<br/>");
	print_r(scandir("D:\PHPWebServer"));
	print("<br/>");
	
	print("<b>文件读写操作:<br/></b>");
	$fp=fopen("FileAppend.txt","a");
	fwrite($fp,"你好\n欢迎来到PHP世界\n");
	fclose($fp);
	
	$ArrayStr=array();
	$fp=fopen("FileAppend.txt","r");
	while(!feof($fp))
	{
		$Str=fgets($fp,2000);
		array_push($ArrayStr,$Str);
	}
	print_r($ArrayStr);
	fclose($fp);
?>
