<?php
include("SmartyCfg.php");

$Smarty->assign("Title","����-Smartyģ�����");
$Smarty->assign("Content","����-Smartyģ�����");

$StrArr[]=array("Cnt"=>"123");
$StrArr[]=array("Cnt"=>"456");
$StrArr[]=array("Cnt"=>"789");
$Smarty->assign("StrArr",$StrArr);

$StrList=array("ABC","DEF","GHI","JKL");
$Smarty->assign("StrList",$StrList);

include("COMMON_MySQL_Lib.php");
//���ݿ����ӳ�ʼ��
$Sql=new CMySQLDB("localhost","3306","root","Admin123","Database_Test");
//��ѯ����
$SqlCmd="select * from `Tbl_SinaNews` order by ID desc limit 0,5";
$Ret=$Sql->Tbl_Operate($SqlCmd);
$DataArray=array();
while($RetArray=$Sql->Tbl_ToArrayStr($Ret)){
	array_push($DataArray,$RetArray);
}
$Smarty->assign("DataArray",$DataArray);

//������л���
//$Smarty->clearAllCache();

//$ID=$_GET["id"];
//ģ����Ⱦ
//$Smarty->display("SmartyTest.html",$ID);
$Smarty->display("SmartyTest.html");

//insert����
function insert_GetCurrentTime(){
	//���ݿ����ӳ�ʼ��
	$Sql=new CMySQLDB("localhost","3306","root","Admin123","Database_Test");
	//��ѯ����
	$SqlCmd="select now()  as CurrentTime";
	$Ret=$Sql->Tbl_Operate($SqlCmd);
	$RetArray=$Sql->Tbl_ToArrayStr($Ret);
	return $RetArray["CurrentTime"];
}
?>
