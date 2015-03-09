<h1 style="font-family:微软雅黑;color:red">简易微博系统</h1>
<p style="font-family:微软雅黑">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CopyRight@y00193825</p>
<a href="MySQL_Add.php"><b>发表内容</b></a><br/><br/>

<div style="font-family:楷体">
<hr/>
<form action="" method="get">
	<b></b><input type="text" size="50" name="Search">
	<input type="submit" name="SearchSubmit" value="搜索内容">
</form>
<hr/>

<?php
	include("MySQL_Connect.php");
	
	if(!empty($_GET["Search"]))
	{
		$SearchStr=trim($_GET["Search"]);
		$Where="`Title` like '%$SearchStr%'";
	}
	else
	{
		$Where=1;
	}
	
	//总条数统计
	$sql="select count(*) as  count from `Tbl_SinaNews` where $Where";
	$result=mysql_fetch_array(mysql_query($sql)); 
	$count=$result['count'];
	
	/*//分页原理
	echo $url=$_SERVER["REQUEST_URI"];
	$url=parse_url($url);
	print_r($url);
	echo $url=$url["path"];*/
	/*if(!empty($_GET["Page"])){
	$QNum=$_GET["Page"];
	}*/
	
	if(!empty($_POST["PageSub"])){
	$QNum=$_POST["Num"];
	}
	else{
	$QNum=1;
	}
	
	//每页多少条写死
	$PageNum=2;
	$Num=$QNum;
	//$Num=1;
	$StartNum=($Num-1)*$PageNum;

	
	//print("出:".$count%$PageNum);
	if($count%$PageNum == 0){
		$NumNum=$count/$PageNum;
		//print($NumNum);
	}
	else{
		$NumNum=(int)($count/$PageNum)+1;
		//print($NumNum);
	}
	
	$SelectCmd="select * from `Tbl_SinaNews` where $Where order by ID desc limit $StartNum,$PageNum;";
	
	//print("SelectCmd:".$SelectCmd."...<br/>");
	$RetStr=mysql_query($SelectCmd);
	
	//$RetArray=mysql_fetch_array($RetStr);
	//print("Select Success...<br/>");
	//print_r($RetArray);
	while($RetArray=mysql_fetch_array($RetStr))
	{
		//print_r($RetArray);
?>

<hr/>
<h2>标题:<a href="MySQL_View.php?ViewID=<?php print($RetArray["ID"]); ?>"><?php print($RetArray["Title"]); ?></a> | 
												<a href="MySQL_Edit.php?EditID=<?php print($RetArray["ID"]); ?>">编辑</a> | 
												<a href="MySQL_Del.php?DelID=<?php print($RetArray["ID"]); ?>">删除</a> |</h2>
<li>时间:<?php print($RetArray["Time"]); ?></li>
<p>内容:<?php print(iconv_substr($RetArray["Content"],0,30,"gbk")); ?><a href="MySQL_View.php?ViewID=<?php print($RetArray["ID"]); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...更多内容</a></p>
<hr/>

<?php
}
print("<b style='font-family:微软雅黑;font-size:20;color:red'>总计".$count."条，每页".$PageNum."条，计".$NumNum."页</b><br/>");

//print("POST:".empty($_POST["PageSub"]));
?>

<?php
$S=(int)($QNum/10);
for($i=0;$i<10;$i++){
?>

<a href="FrontPage.php?Page=<?php print($S*10+$i+1); ?>"><?php print($S*10+$i+1); ?></a>

<?php
}
?>


<form action="" method="post">
<input type="text" name="Num" value=<?php print($QNum); ?> ><?php print("/".$NumNum); ?>
<input type="submit" name="PageSub" value="提交">
</form>

<?php
mysql_close($RetStr);
?>

</div>
