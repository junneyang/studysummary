<?php
header("Content-type: text/html; charset=utf-8"); 
$testJSON=array("name"=>"灰化","value"=>"test");
$Str=json_encode($testJSON);
echo $Str;
?>