<?php
$fp=fopen("TemplateTest.html","r");
$FileStr=fread($fp,filesize("TemplateTest.html"));

$FileStr=str_replace("{Title}","���Ǳ���",$FileStr);
$FileStr=str_replace("{Content}","��������",$FileStr);
//print($FileStr);
fclose($fp);

$fp=fopen("TemplateGenerate.html","w");
fwrite($fp,$FileStr);
fclose($fp);
print("TemplateGenerate Success!!!");
?>