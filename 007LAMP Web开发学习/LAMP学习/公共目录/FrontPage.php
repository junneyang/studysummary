<h1 style="font-family:΢���ź�;color:red">����΢��ϵͳ</h1>
<p style="font-family:΢���ź�">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CopyRight@y00193825</p>
<a href="MySQL_Add.php"><b>��������</b></a><br/><br/>

<div style="font-family:����">
<hr/>
<form action="" method="get">
	<b></b><input type="text" size="50" name="Search">
	<input type="submit" name="SearchSubmit" value="��������">
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
	
	//������ͳ��
	$sql="select count(*) as  count from `Tbl_SinaNews` where $Where";
	$result=mysql_fetch_array(mysql_query($sql)); 
	$count=$result['count'];
	
	/*//��ҳԭ��
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
	
	//ÿҳ������д��
	$PageNum=2;
	$Num=$QNum;
	//$Num=1;
	$StartNum=($Num-1)*$PageNum;

	
	//print("��:".$count%$PageNum);
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
<h2>����:<a href="MySQL_View.php?ViewID=<?php print($RetArray["ID"]); ?>"><?php print($RetArray["Title"]); ?></a> | 
												<a href="MySQL_Edit.php?EditID=<?php print($RetArray["ID"]); ?>">�༭</a> | 
												<a href="MySQL_Del.php?DelID=<?php print($RetArray["ID"]); ?>">ɾ��</a> |</h2>
<li>ʱ��:<?php print($RetArray["Time"]); ?></li>
<p>����:<?php print(iconv_substr($RetArray["Content"],0,30,"gbk")); ?><a href="MySQL_View.php?ViewID=<?php print($RetArray["ID"]); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...��������</a></p>
<hr/>

<?php
}
print("<b style='font-family:΢���ź�;font-size:20;color:red'>�ܼ�".$count."����ÿҳ".$PageNum."������".$NumNum."ҳ</b><br/>");

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
<input type="submit" name="PageSub" value="�ύ">
</form>

<?php
mysql_close($RetStr);
?>

</div>
