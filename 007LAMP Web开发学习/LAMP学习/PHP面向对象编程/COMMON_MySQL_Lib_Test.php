<?php
include("COMMON_MySQL_Lib.php");

//数据库连接初始化
$Sql=new CMySQLDB("localhost","3306","root","Admin123","Database_Test");

//查询操作
$SqlCmd="select count(*) as  Count from `Tbl_SinaNews`";
$Ret=$Sql->Tbl_Operate($SqlCmd);
print("Log:数据表操作:".$SqlCmd."...<br/>");
$RetArray=$Sql->Tbl_ToArrayStr($Ret);
//print_r($RetArray);
print("Log:数据表操作结果:".$RetArray["Count"]."...<br/>");

//插入数据
$SqlCmd="insert into `Tbl_SinaNews` values(null,'我是标题','我是内容',now(),0)";
$Ret=$Sql->Tbl_Operate($SqlCmd);
print("Log:数据表操作:".$SqlCmd."...<br/>");

//查询操作
$SqlCmd="select count(*) as  Count from `Tbl_SinaNews`";
$Ret=$Sql->Tbl_Operate($SqlCmd);
print("Log:数据表操作:".$SqlCmd."...<br/>");
$RetArray=$Sql->Tbl_ToArrayStr($Ret);
//print_r($RetArray);
print("Log:数据表操作结果:".$RetArray["Count"]."...<br/>");

//数据库显示断连
$Sql->Database_Close($Ret);
print("Log:断开与数据库连接...<br/>");
?>
