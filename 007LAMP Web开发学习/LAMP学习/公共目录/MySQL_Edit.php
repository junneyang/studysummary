<?php
	include("MySQL_Connect.php");
	if(!empty($_GET["EditID"]))
	{
		$ID=$_GET["EditID"];
		$SelectCmd="select * from `Tbl_SinaNews` where id='$ID'";
		$RetStr=mysql_query($SelectCmd);
		$RetArray=mysql_fetch_array($RetStr);
		//print_r($RetArray);
	}
	if(!empty($_POST["Submit"]))
	{
		$Title=$_POST["Title"];
		$Content=$_POST["Content"];
		$HideID=$_POST["HideID"];
		$UpdateCmd="update `Tbl_SinaNews` set `Title`='$Title',`Content`='$Content' where `id`='$HideID'";
		//print($UpdateCmd);
		mysql_query($UpdateCmd);
		//print("Update Success...<br/>");
		print("<script>alert('更新成功');location.href='FrontPage.php'</script>");
	}
?>

<form action="MySQL_Edit.php" method="post">
	<input type="hidden" value=<?php print($RetArray["ID"]); ?> name="HideID">
	标题<input type="text" name="Title" value=<?php print($RetArray["Title"]); ?>><br/>
	内容<textarea rows="20" cols="150" name="Content"><?php print($RetArray["Content"]); ?></textarea><br/>
	<input type="submit" value="发表" name="Submit">
</form>
