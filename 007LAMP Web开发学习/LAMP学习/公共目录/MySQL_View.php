<?php
	include("MySQL_Connect.php");
	
	function htmtocode($content) 
	{
		$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", str_replace("���ֹ�", "***", $content)));
		return $content;
	}

	
	if(!empty($_GET["ViewID"]))
	{
		$ID=$_GET["ViewID"];
		
		//���ȸ������ݣ������
		$ViewCmd="update `Tbl_SinaNews` set `HitNum`=HitNum+1 where id='$ID'";
		//print($ViewCmd);
		mysql_query($ViewCmd);
		
		//Ȼ���ѯ������ʾ����
		$SelectCmd="select * from `Tbl_SinaNews` where id='$ID'";
		$RetStr=mysql_query($SelectCmd);
		$RetArray=mysql_fetch_array($RetStr);
		//print_r($RetArray);
		$HtmlTitle=htmtocode($RetArray["Title"]);
		$HtmlContent=htmtocode($RetArray["Content"]);
	}
?>

<h1>����:<?php print($HtmlTitle); ?></h1>
<h2>ʱ��:<?php print($RetArray["Time"]); ?></h2>
<h3>�����:<?php print($RetArray["HitNum"]); ?></h3>
<p>
����:<?php print($HtmlContent); ?>
</p>
<a href="FrontPage.php">����</a>
