<?php
include("COMMON_MySQL_Lib.php");

//���ݿ����ӳ�ʼ��
$Sql=new CMySQLDB("localhost","3306","root","Admin123","Database_Test");

//��ѯ����
$SqlCmd="select count(*) as  Count from `Tbl_SinaNews`";
$Ret=$Sql->Tbl_Operate($SqlCmd);
print("Log:���ݱ����:".$SqlCmd."...<br/>");
$RetArray=$Sql->Tbl_ToArrayStr($Ret);
//print_r($RetArray);
print("Log:���ݱ�������:".$RetArray["Count"]."...<br/>");

//��������
$SqlCmd="insert into `Tbl_SinaNews` values(null,'���Ǳ���','��������',now(),0)";
$Ret=$Sql->Tbl_Operate($SqlCmd);
print("Log:���ݱ����:".$SqlCmd."...<br/>");

//��ѯ����
$SqlCmd="select count(*) as  Count from `Tbl_SinaNews`";
$Ret=$Sql->Tbl_Operate($SqlCmd);
print("Log:���ݱ����:".$SqlCmd."...<br/>");
$RetArray=$Sql->Tbl_ToArrayStr($Ret);
//print_r($RetArray);
print("Log:���ݱ�������:".$RetArray["Count"]."...<br/>");

//���ݿ���ʾ����
$Sql->Database_Close($Ret);
print("Log:�Ͽ������ݿ�����...<br/>");
?>
