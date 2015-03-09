<?php
	include("MySQL_Connect.php");
	
	function htmtocode($content) 
	{
		$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", str_replace("法轮功", "***", $content)));
		return $content;
	}

	
	if(!empty($_GET["ViewID"]))
	{
		$ID=$_GET["ViewID"];
		
		//首先更新数据，点击量
		$ViewCmd="update `Tbl_SinaNews` set `HitNum`=HitNum+1 where id='$ID'";
		//print($ViewCmd);
		mysql_query($ViewCmd);
		
		//然后查询用于显示数据
		$SelectCmd="select * from `Tbl_SinaNews` where id='$ID'";
		$RetStr=mysql_query($SelectCmd);
		$RetArray=mysql_fetch_array($RetStr);
		//print_r($RetArray);
		$HtmlTitle=htmtocode($RetArray["Title"]);
		$HtmlContent=htmtocode($RetArray["Content"]);
	}
?>

<h1>标题:<?php print($HtmlTitle); ?></h1>
<h2>时间:<?php print($RetArray["Time"]); ?></h2>
<h3>点击量:<?php print($RetArray["HitNum"]); ?></h3>
<p>
内容:<?php print($HtmlContent); ?>
</p>
<a href="FrontPage.php">返回</a>
