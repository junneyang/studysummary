<?php
	include("MySQL_Connect.php");
	if(!empty($_GET["DelID"]))
	{	
		$ID=$_GET["DelID"];
		$DelCmd="delete from `Tbl_SinaNews` where id='$ID';";
		mysql_query($DelCmd);
		//print("ɾ���ɹ�...<br/>");
		print("<script>alert('ɾ���ɹ�');location.href='FrontPage.php'</script>");
	}
?>