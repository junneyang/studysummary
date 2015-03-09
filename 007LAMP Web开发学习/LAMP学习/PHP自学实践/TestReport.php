<?php
header("Content-type: text/html; charset=utf-8"); 
if(!empty($_GET["TaskName"]) and !empty($_GET["ExePCName"])){
$TaskName=$_GET["TaskName"];
$ExePCName=$_GET["ExePCName"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="TestReport.css"/>
		<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
		<script type="text/javascript" src="./Static/jquery.js"></script>
		<script type="text/javascript" src="./Static/AjaxRefreshPage.js"></script>

		<title>OpenTestRunner-TestReport</title>
		<div id="ID_TOP">
		<p id="ID_Title">OpenTestRunner 自动化测试 测试报告<p/>
		<p id="ID_DetailInfo">TaskName:<?php print($TaskName); ?>  |  ExePCName:<?php print($ExePCName); ?> </p>
		<p id="ID_Tips_DownLoad"><a title='获取OpenTestRunner最新版本' href="TestReport.php?PKG_Name=OpenTestRunner.rar">GetTheLatest TestRunner Package | V5.0 | 2014-01-02 updated</a> 
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a title='获取帮助文档' href='Help.php' target='_blank'>？帮助</a><p>
		</div>
	</head>
	
	<body>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
	<hr/>
	
	<div id="ID_TaskInfo_DIV">
	<label><b>任务概要信息>></b></label>
	<!--
	<p id="ID_TaskInfo_Title_DIV">>>任务信息>></p>
	-->
	<p>任务标识:&nbsp;&nbsp;&nbsp;<?php print($TaskName); ?> </p>
	<p>执行机标识:&nbsp;&nbsp;&nbsp;<?php print($ExePCName); ?> </p>
	<p>脚本总数: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label id='ID_TotalNum'></label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	已经完成: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label id='ID_DoneNum'></label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	剩余总数: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label id='ID_ResumeNum'></label> </p>
	<p>成功个数: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label id='ID_PASSNum'></label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;失败个数: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label id='ID_FailNum'></label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	成功率: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label id='ID_PASSRate'></label> </p>
	<p>任务状态: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label id='ID_TaskStatus'></label></p>
	</div>

	<!--
	<div id='ID_Title_Tbl_DIV'>
	-->
	<!--
	<p id="ID_ExeInfo_Title_DIV">>>执行信息>></p>
	-->
	<table id="ID_Tbl_Author_Summary" border="0" width="70%" height="20px" cellpadding="0" cellspacing="0" bgcolor="#000000">
		<tr id='ID_Tbl_Head'><th>特性名称</th> <th>脚本设计</th> <th>脚本总数</th> <th>成功</th> <th>失败</th> <th>成功率</th> <th>状态</th> </tr>
		<tbody id="ID_TBody">
		<tr id='template'><td id='ID_Feature'></td> <td id='ID_Author'></td> <td id='ID_ScriptNum'></td> <td id='ID_PASSNum'></td> <td id='ID_FailNum'></td> <td id='ID_PASSRate'></td> <td id='ID_FeatureStatus'></td> </tr>
		</tbody>
	</table>
	<!--
	</div>
	-->
	
	
	<form class="Class_Deatil" action="SearchView.php?TaskName=<?php print($TaskName); ?>&ExePCName=<?php print($ExePCName); ?>" method="post" target="_blank" >

	<!--
	<p id="ID_ExeInfo_Detail_DIV">>>详细信息>></p>
	-->
	<p><b>详细信息搜索>></b></p>

<?php
include("SearchDetail.php");
$OSQL=new COMMON_MySQL_Lib();
$OSQL->Connect_To_DB();
//获取特性、作者、特性脚本总数列表
$SqlCmd="select * from `TestFeature` where TaskName='".$TaskName."' and ExePCName='".$ExePCName."'";
$Ret=$OSQL->Run_SQL_Cmd($SqlCmd);
$ArrayStr=array();
while($RetArray=$OSQL->Tbl_ToArrayStr($Ret)){
	array_push($ArrayStr,$RetArray);
}
?>

	特性:&nbsp;&nbsp;&nbsp;<select name="Select_Feature">
	<option>ALL</option>
	<?php
	foreach($ArrayStr as $K=>$V){
		print("<option>".$V["Feature"]."</option>");
	}
	?>
	</select>
	
	作者:&nbsp;&nbsp;&nbsp;<select name="Select_Author">
	<option>ALL</option>
	<?php
	foreach($ArrayStr as $K=>$V){
		print("<option>".$V["Author"]."</option>");
	}
	?>
	</select>
	
	执行结果:&nbsp;&nbsp;&nbsp;<select name="Select_ExeResult">
	<option>ALL</option>
	<option>PASS</option>
	<option>FAIL</option>
	</select>
	
	TMSS标记:&nbsp;&nbsp;&nbsp;<select name="Select_TMSSResult">
	<option>ALL</option>
	<option>OK</option>
	<option>NOK</option>
	</select>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Name_Sub" value="搜索">
	
	</form>

	
	<div id="ID_CopyInfo_DIV">
	<p style="text-align:center">CopyRight@IT Cloud Mgmt I&V 版权所有,侵权必究</p>
	<p style="text-align:center"><a href="mailto:yangjun 00193825/huawei, ">@联系作者</a></p>
	</div>
	
	</body>
</html>

<?php
}
?>

<?php
if(!empty($_GET["PKG_Name"])){
$myfile="./SoftWarePKG/".$_GET["PKG_Name"];
$len = filesize($myfile);
ob_end_clean();
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: public');
header('Content-Description: File Transfer');
header('Content-type: application/rar');
header('Content-Disposition: attachment; filename='.$_GET["PKG_Name"]);
header('Content-Transfer-Encoding: binary');
header('Content-Length: '.$len);
readfile($myfile);
}
?>



