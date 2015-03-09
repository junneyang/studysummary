<?php header("Content-type: text/html; charset=utf-8"); ?>
<form action="#" method="post">
<input type="text" name="NameTitle">
<?php
include("../FCKEditorLib/fckeditor.php");

$Editor=new FCKeditor("FCKEditorIns");
$Editor->BasePath="/FCKEditorLib/";

$Editor->Width="75%";
$Editor->Height="500";
$Editor->Value='说点儿什么吧...';

$Editor->Create();

if(!empty($_POST["NameSub"])){
	print($_POST["NameTitle"]);
	print($_POST["FCKEditorIns"]);
}
?>
<input type="submit" value="提交" name="NameSub">
</form>