<?php
header("Content-type: text/html; charset=utf-8");
if(!empty($_GET["ID"]) and !empty($_GET["Name"])){
$ID=$_GET["ID"];
$Name=$_GET["Name"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="iLearning.css"/>
		<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
		<script type="text/javascript" src="./Static/jquery.js"></script>
		<script type="text/javascript" src="./Static/iLearning.js"></script>

		<title>iLearning首页</title>
	</head>
	
	<body>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
	<div class="Class_TEST">
	<h1><?php print("Hello iLearning."." CourseID:".$ID.". CourseName:".$Name."."); ?></h1> 
	<p><?php print("<b>学习地址：</b><a href='http://www.w3school.com.cn/html/index.asp'>http://www.w3school.com.cn/html/index.asp</a>"); ?></p>
	<p><img src="./Image/huawei.jpg" title="huawei.jpg"></img></p>
	<p><a href="mailto:yangjun 00193825/huawei">@联系作者</a></p>
	<p><a href="SoftwareDownload.php?PKG_Name=OpenTestRunner.rar">下载OpenTestRunner</a></p>
	<p><a href="SoftwareDownload.php?PKG_Name=PHPWebServerPKG.rar">下载PHPWebServer</a></p>
	</div>
	
	<div class="Class_TEST">
	<p><b>CourseID:</b><label id="ID_ID"></label></p>
	<p><b>CourseName:</b><label id="ID_Name"></label></p>
	<p><b>任务状态:</b><label id="ID_Status"></label></p>
	</div>
	
	<table id="ID_Tbl_Summary" border="0" width="70%" height="20px" cellpadding="0" cellspacing="0" bgcolor="#000000">
		<tr id='ID_Tbl_Head'><th>特性名称</th> <th>脚本设计</th> <th>脚本总数</th> <th>成功</th> <th>失败</th> <th>成功率</th> <th>状态</th> </tr>
		<tbody id="ID_TBody">
		<tr id='template'><td id='ID_Feature'></td> <td id='ID_Author'></td> <td id='ID_ScriptNum'></td> <td id='ID_PASSNum'></td> <td id='ID_FailNum'></td> <td id='ID_PASSRate'></td> <td id='ID_FeatureStatus'></td> </tr>
		</tbody>
	</table>
	
	</body>
</html>

<?php
}
?>
