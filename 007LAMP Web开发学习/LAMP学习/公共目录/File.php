<?php
	/*
	PHP����֪ʶ��
	6.�ļ�Ŀ¼����
	*/
	print("<b>�ļ�Ŀ¼����:<br/></b>");
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
	
	print("<b>�ļ���д����:<br/></b>");
	$fp=fopen("FileAppend.txt","a");
	fwrite($fp,"���\n��ӭ����PHP����\n");
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
