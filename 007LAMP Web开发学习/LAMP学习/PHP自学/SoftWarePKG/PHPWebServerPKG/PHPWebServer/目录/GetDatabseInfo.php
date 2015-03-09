<?php
header("Content-type: text/html; charset=utf-8"); 
?>
<?php
class COMMON_MySQL_Lib{
	private $HostIP="localhost";
	private $HostPort="3306";
	private $UserName="root";
	private $PWD="Admin123";
	private $DataBase="Database_Test";
	
	public function Connect_To_DB(){
		mysql_connect($this->HostIP.":".$this->HostPort,$this->UserName,$this->PWD) ;
		mysql_select_db($this->DataBase);
		mysql_query("set names 'utf8'");
	}
	
	public function Run_SQL_Cmd($SqlCmd){
		$Ret=mysql_query($SqlCmd);
		return $Ret;
	}
	
	//数据表操作结果转化为键值对
	public function Tbl_ToArrayStr($Ret){
		$RetArray=mysql_fetch_array($Ret);
		return $RetArray;
	}
	
	//数据库显示断连
	public function Database_Close($Ret){
		mysql_close($Ret);
	}
}
?>


<?php
if(!empty($_GET["TaskName"]) and !empty($_GET["ExePCName"])){

	$TaskName=$_GET["TaskName"];
	$ExePCName=$_GET["ExePCName"];
	
	$OSQL=new COMMON_MySQL_Lib();
	$OSQL->Connect_To_DB();
	//获取待连跑的脚本总数
	$SqlCmd="select count(*) as  Count from `TestScript` where TaskName='".$TaskName."' and ExePCName='".$ExePCName."'";
	
	//print($SqlCmd);
	$Ret=$OSQL->Run_SQL_Cmd($SqlCmd);
	$RetArray=$OSQL->Tbl_ToArrayStr($Ret);
	$TotalNum=$RetArray["Count"];
	
	//获取剩余脚本总数
	$SqlCmd="select count(*) as  Count from `TestScript` where ScriptRunStatus='Initial' and TaskName='".$TaskName."' and ExePCName='".$ExePCName."'";
	$Ret=$OSQL->Run_SQL_Cmd($SqlCmd);
	$RetArray=$OSQL->Tbl_ToArrayStr($Ret);
	$ResumeNum=$RetArray["Count"];
	
	//获取成功脚本总数
	$SqlCmd="select count(*) as  Count from `TestScript` where ScriptRunStatus='PASS' and TaskName='".$TaskName."' and ExePCName='".$ExePCName."'";
	$Ret=$OSQL->Run_SQL_Cmd($SqlCmd);
	$RetArray=$OSQL->Tbl_ToArrayStr($Ret);
	$PASSNum=$RetArray["Count"];
	
	//获取失败脚本总数
	$SqlCmd="select count(*) as  Count from `TestScript` where ScriptRunStatus='FAIL' and TaskName='".$TaskName."' and ExePCName='".$ExePCName."'";
	$Ret=$OSQL->Run_SQL_Cmd($SqlCmd);
	$RetArray=$OSQL->Tbl_ToArrayStr($Ret);
	$FailNum=$RetArray["Count"];
	
	//获取特性、作者、特性脚本总数列表
	$SqlCmd="select * from `TestFeature` where TaskName='".$TaskName."' and ExePCName='".$ExePCName."'";
	$Ret=$OSQL->Run_SQL_Cmd($SqlCmd);
	$ArrayStr=array();
	while($RetArray=$OSQL->Tbl_ToArrayStr($Ret)){
		array_push($ArrayStr,$RetArray);
	}
	
	header("Content-type: text/html; charset=utf-8"); 
	header("Cache-Control: no-cache, must-revalidate");
	$testJSON=array("TotalNum"=>$TotalNum,"ResumeNum"=>$ResumeNum,"PASSNum"=>$PASSNum,"FailNum"=>$FailNum,"FeatureArray"=>$ArrayStr);
	
	$Str=json_encode($testJSON);
	echo $Str;
	//print_r($testJSON);
}
?>
