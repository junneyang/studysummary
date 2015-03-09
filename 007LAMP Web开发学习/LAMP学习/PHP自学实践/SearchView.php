
<?php
header("Content-type: text/html; charset=utf-8"); 
include("SearchDetail.php");
?>

<script type='text/javascript' language='javascript'>
window.moveTo(0,0);         
window.resizeTo(window.screen.width,window.screen.height);
</script>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="TestReport.css"/>
		<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
		<script type="text/javascript" src="./Static/jquery.js"></script>
		<script type="text/javascript" src="./Static/DisDetailInfo.js"></script>

		<title>OpenTestRunner-TestReport</title>
		<div id="ID_TOP">
		<p id="ID_Title">OpenTestRunner 自动化测试 测试报告<p/>
		<p id="ID_DetailInfo">TaskName:<?php print($_GET["TaskName"]); ?>  |  ExePCName:<?php print($_GET["ExePCName"]); ?> </p>
		<p id="ID_Tips_DownLoad"><a title='获取OpenTestRunner最新版本' href="TestReport.php?PKG_Name=OpenTestRunner.rar">GetTheLatest TestRunner Package | V3.0 | 2013-06-01 updated</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a title='获取帮助文档' href='Help.php' target='_blank'>？帮助</a><p><p>
		</div>
	</head>

	<body>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
	<hr/>
	
	<div id="ID_SearchInfo_DIV">
	
<?php
if(!empty($_POST["Name_Sub"])){
	
	$TaskName=$_GET["TaskName"];
	$ExePCName=$_GET["ExePCName"];
	
	$Feature=$_POST["Select_Feature"];
	if($Feature=="ALL"){$FeatureCmd="1";}
	else{$FeatureCmd="Feature='".$Feature."'";}
	
	$Author=$_POST["Select_Author"];
	if($Author=="ALL"){$AuthorCmd="1";}
	else{$AuthorCmd="Author='".$Author."'";}
	
	$ScriptRunStatus=$_POST["Select_ExeResult"];
	if($ScriptRunStatus=="ALL"){$ScriptRunStatusCmd="1";}
	else{$ScriptRunStatusCmd="ScriptRunStatus='".$ScriptRunStatus."'";}
	
	$ResultToTMSS=$_POST["Select_TMSSResult"];
	if($ResultToTMSS=="ALL"){$ResultToTMSSCmd="1";}
	else{$ResultToTMSSCmd="ResultToTMSS='".$ResultToTMSS."'";}
	
	//print("<p style='font-size:100px;color:red;text-align:center;font-family:微软雅黑'><b>搜索功能暂不可用</b></p>");
	print("<b>您的搜索 >> </b><br/><label style='color:#ff0000;font-size:16px'><label style='color:black'>特性:&nbsp;&nbsp;&nbsp;&nbsp;</label>".$_POST["Select_Feature"].
	"&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;<label style='color:black'>作者:&nbsp;&nbsp;&nbsp;&nbsp;</label>".$_POST["Select_Author"].
	"&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;<label style='color:black'>执行结果:&nbsp;&nbsp;&nbsp;&nbsp;</label>".$_POST["Select_ExeResult"].
	"&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;<label style='color:black'>TMSS标记状态:&nbsp;&nbsp;&nbsp;&nbsp;</label>".$_POST["Select_TMSSResult"]."</label><br/>");
	
	$OSQL=new COMMON_MySQL_Lib();
	$OSQL->Connect_To_DB();
	
	$SqlCmd="select * from `TestScript` where ".$ScriptRunStatusCmd." and TaskName='".$TaskName."' and ExePCName='".$ExePCName."'"
	." and ".$FeatureCmd
	." and ".$AuthorCmd
	." and ".$ResultToTMSSCmd;
	
	//print($SqlCmd);
	$Ret=$OSQL->Run_SQL_Cmd($SqlCmd);
	$ArrayStr=array();
	while($RetArray=$OSQL->Tbl_ToArrayStr($Ret)){
		array_push($ArrayStr,$RetArray);
		//print("<p>".$RetArray[ID]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$RetArray[ScriptID]."</p>");
	}
	//print_r($ArrayStr);
	print("<br/><b>您的搜索结果>><b/><br/> <label style='color:#ff0000;font-weight:normal;font-size:16px'><label style='color:black'>总数:</label>&nbsp;&nbsp;&nbsp;&nbsp;".count($ArrayStr)."</label>");
	
	print("<br/><br/><b>搜索脚本列表>><b/>");
	print("<p style='font-size:15px;color:blue;text-align:right;font-family:微软雅黑'><a title='该XML文件用于支持手工批量标记TMSS结果' href='SearchView.php?XmlFileName=TestResult.xml'>获取测试结果XML文件</a></p>");
	
	print("<p style='font-weight:normal;font-style:italic;font-size:18px'>"
		."ScriptID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
		."Feature &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;"
		."Author &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;"
		."ScriptRunStatus &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;"
		."ResultToTMSS &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;"
		."StartTime &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;"
		."EndTime &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;"
		."</p>");
		
	//初始化TestResult.xml文件，并且构造
	$dom = new DOMDocument('1.0', 'UTF-8'); 
	$dom->formatOutput = true; 
	$rootelement = $dom->createElement("SuiteReport");
	$dom->appendchild($rootelement);
	
	$SuiteId=$dom->createAttribute('SuiteId');
	$SuiteId->nodeValue="0000000";
	$rootelement->setAttributeNode($SuiteId);
	$SuiteName=$dom->createAttribute('SuiteName');
	$SuiteName->nodeValue="FusionManager-TestResult";
	$rootelement->setAttributeNode($SuiteName);
	
	//输出搜索结构，同时构造xml文件
	foreach($ArrayStr as $K=>$V){
		$ParStr="SlideDetailInfo('Script_ID_".$V[ID]."','Log_ID_".$V[ID]."')";
		//print($ParStr);
		print("<p onclick=".$ParStr." class='Class_Script_Info' id='Script_ID_".$V[ID]."' style='color:#ff0000;font-weight:normal;font-style:italic;font-size:16px' title='点击查看详细日志信息'>"
		.$V[ScriptID]."&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;"
		.$V[Feature]."&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;"
		.$V[Author]."&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;"
		.$V[ScriptRunStatus]."&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;"
		.$V[ResultToTMSS]."&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;"
		.$V[StartTime]."&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;"
		.$V[EndTime]."&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;"
		."</p>");
		print("<label class='Class_Log_Info' style='font-weight:normal;font-style:italic;font-size:15px;color:blue' id='Log_ID_".$V[ID]
		."'>日志信息:<br/>日志显示功能暂未实现</label>");
		
		//构造xml文件
		$CaseRecord = $dom->createElement("CaseRecord");
		
		$caseid=$dom->createAttribute('caseid');
		$caseid->nodeValue=$V[ScriptID];
		$CaseRecord->setAttributeNode($caseid);
		
		$casename=$dom->createAttribute('casename');
		$casename->nodeValue="";
		$CaseRecord->setAttributeNode($casename);
		
		$conclusion=$dom->createAttribute('conclusion');
		$conclusion->nodeValue=$V[ScriptRunStatus];
		$CaseRecord->setAttributeNode($conclusion);
		
		$description=$dom->createAttribute('description');
		$description->nodeValue="";
		$CaseRecord->setAttributeNode($description);
		
		$elapsedtime=$dom->createAttribute('elapsedtime');
		$elapsedtime->nodeValue="";
		$CaseRecord->setAttributeNode($elapsedtime);
		
		$taskid=$dom->createAttribute('taskid');
		$taskid->nodeValue="";
		$CaseRecord->setAttributeNode($taskid);
		
		$timestamp=$dom->createAttribute('timestamp');
		$timestamp->nodeValue="";
		$CaseRecord->setAttributeNode($timestamp);
		
		$rootelement->appendchild($CaseRecord);
	}
	//保存xml文件
	$dom->save("./TesultXML/TestResult.xml");
}
?>
	</div>
	<?php
	for($i=0;$i<7;$i++){
		print("<p>&nbsp;</p>");
	}
	?>
	<p class='CLASS_CP_Right' style="text-align:center">CopyRight@IT Cloud Mgmt I&V 版权所有,侵权必究</p>
	<p class='CLASS_CP_Right' style="text-align:center"><a href="mailto:yangjun 00193825/huawei, ">@联系作者</a></p>

	
	</body>
</html>

<?php
if(!empty($_GET["XmlFileName"])){
$myfile="./TesultXML/".$_GET["XmlFileName"];
$len = filesize($myfile);
ob_end_clean();
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: public');
header('Content-Description: File Transfer');
header('Content-type: application/xml');
header('Content-Disposition: attachment; filename='.$_GET["XmlFileName"]);
header('Content-Transfer-Encoding: binary');
header('Content-Length: '.$len);
readfile($myfile);
}
?>