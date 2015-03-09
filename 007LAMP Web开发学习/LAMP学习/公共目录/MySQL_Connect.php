<?php
	/*
	PHP基础知识：
	7.PHP操作MySQL基础
	*/
	//print("<b>PHP操作MySQL基础:</b><br/>");
	@mysql_connect("localhost:3306","root","Admin123") or die("Connection To MySQL Failed");
	//print("连接MySQL数据库成功...<br/>");
	@mysql_select_db("Database_Test") or die("Connection To Database Failed");
	//print("Use Database Database_Test...<br/>");
	//mysql_set_charset("gbk");
	//这种方式更加通用
	mysql_query("set names 'gbk'");
	//print("Use GBK Encoding...<br/>");
?>
