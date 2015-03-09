<?php
$fp=fopen("TemplateTest.html","r");
$FileStr=fread($fp,filesize("TemplateTest.html"));

$FileStr=str_replace("{Title}","这是标题",$FileStr);
$FileStr=str_replace("{Content}","这是内容",$FileStr);
//print($FileStr);
fclose($fp);

$fp=fopen("TemplateGenerate.html","w");
fwrite($fp,$FileStr);
fclose($fp);
print("TemplateGenerate Success!!!");
?>