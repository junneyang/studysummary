<?php
	include("MySQL_Connect.php");
	if(!empty($_GET["DelID"]))
	{	
		$ID=$_GET["DelID"];
		$DelCmd="delete from `Tbl_SinaNews` where id='$ID';";
		mysql_query($DelCmd);
		//print("删除成功...<br/>");
		print("<script>alert('删除成功');location.href='FrontPage.php'</script>");
	}
?>