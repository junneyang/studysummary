<?php
	/*
	PHP����֪ʶ��
	7.PHP����MySQL����
	*/
	//print("<b>PHP����MySQL����:</b><br/>");
	@mysql_connect("localhost:3306","root","Admin123") or die("Connection To MySQL Failed");
	//print("����MySQL���ݿ�ɹ�...<br/>");
	@mysql_select_db("Database_Test") or die("Connection To Database Failed");
	//print("Use Database Database_Test...<br/>");
	//mysql_set_charset("gbk");
	//���ַ�ʽ����ͨ��
	mysql_query("set names 'gbk'");
	//print("Use GBK Encoding...<br/>");
?>
