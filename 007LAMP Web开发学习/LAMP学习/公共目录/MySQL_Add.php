<?php
	include("MySQL_Connect.php");
	if(!empty($_POST["Submit"]))
	{
		$Title=$_POST["Title"];
		$Content=$_POST["Content"];	
		$InsertCmd="insert into `Tbl_SinaNews` values(null,'$Title','$Content',now(),0)";
		print("InsertCmd:".$InsertCmd."...<br/>");
		mysql_query($InsertCmd);
		print("Insert Success...<br/>");
		mysql_close($InsertCmd);
		print("Close DataBase...<br/>");
		
		print("<script>alert('����ɹ�');location.href='FrontPage.php'</script>");
	}
	
	if(is_uploaded_file($_FILES["UpFile"]["tmp_name"])){
		//print_r($_FILES["UpFile"]);
		$UpFile=$_FILES["UpFile"];
		$Name=$UpFile["name"];
		$Type=$UpFile["type"];
		$Size=$UpFile["size"];
		echo $TmpName=$UpFile["tmp_name"];
		
		$TN=explode("\\",$TmpName);
		$TN=explode(".",$TN[count($TN)-1]);
		$TN=$TN[0];
		//print($TN);
		
		echo $DstUpFilePath="D:\\PHPWebServer\\Apache2.2\\UpFileDir\\".$TN."\\".$Name;
		echo $Dir="D:\\PHPWebServer\\Apache2.2\\UpFileDir\\".$TN;
		if(!file_exists($Dir))//�ж��ļ����Ƿ����
		{
			mkdir($Dir,0777);
			@chmod($Dir,0777);
		}

		
		if(move_uploaded_file($TmpName,$DstUpFilePath)){
			print("<script>alert('�ϴ��ɹ�');location.href='FrontPage.php'</script>");
		}
	}
	
	if(!empty($_POST["DownSubmit"])){
		echo $myfile="../UpFileDir/php421A/Mako-0.7.3.tar.gz";
$len = filesize($myfile);
ob_end_clean();
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: public');
header('Content-Description: File Transfer');
header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="Mako-0.7.3.tar.gz"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: '.$len);
readfile($myfile);

	}
?>

<script language="javaScript" type="text/javaScript">
function ValidAddPost()
{
	if(!AddForm.Title.value)
	{
		alert("���ⲻ��Ϊ��");
		AddForm.Title.focus();
		return false;
	}
}
</script>


<form action="MySQL_Add.php" method="post" name="AddForm" onsubmit="return ValidAddPost()">
	����<input type="text" name="Title"><br/>
	����<textarea rows="20" cols="150" name="Content"></textarea><br/>
	<input type="submit" value="����" name="Submit">
</form>
<form action="MySQL_Add.php" enctype="multipart/form-data" method="post">
�ϴ��ļ�:
<input type="file" name="UpFile">
<input type="submit" name="UpFileSub" value="�ϴ�">
</form>

<form action="MySQL_Add.php" method="post">
<input type="submit" value="����" name="DownSubmit">
<!--
<a href="../UpFileDir/php421A/Mako-0.7.3.tar.gz">����</a>
-->
</form>

