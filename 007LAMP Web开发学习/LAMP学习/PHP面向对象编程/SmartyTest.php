<?php
include("SmartyCfg.php");

$Smarty->assign("Title","标题-Smarty模板测试");
$Smarty->assign("Content","内容-Smarty模板测试");

$StrArr[]=array("Cnt"=>"123");
$StrArr[]=array("Cnt"=>"456");
$StrArr[]=array("Cnt"=>"789");
$Smarty->assign("StrArr",$StrArr);

$StrList=array("ABC","DEF","GHI","JKL");
$Smarty->assign("StrList",$StrList);

include("COMMON_MySQL_Lib.php");
//数据库连接初始化
$Sql=new CMySQLDB("localhost","3306","root","Admin123","Database_Test");
//查询操作
$SqlCmd="select * from `Tbl_SinaNews` order by ID desc limit 0,5";
$Ret=$Sql->Tbl_Operate($SqlCmd);
$DataArray=array();
while($RetArray=$Sql->Tbl_ToArrayStr($Ret)){
	array_push($DataArray,$RetArray);
}
$Smarty->assign("DataArray",$DataArray);

//清除所有缓存
//$Smarty->clearAllCache();

//$ID=$_GET["id"];
//模板渲染
//$Smarty->display("SmartyTest.html",$ID);
$Smarty->display("SmartyTest.html");

//insert方法
function insert_GetCurrentTime(){
	//数据库连接初始化
	$Sql=new CMySQLDB("localhost","3306","root","Admin123","Database_Test");
	//查询操作
	$SqlCmd="select now()  as CurrentTime";
	$Ret=$Sql->Tbl_Operate($SqlCmd);
	$RetArray=$Sql->Tbl_ToArrayStr($Ret);
	return $RetArray["CurrentTime"];
}
?>
