<?php
header("Content-type: text/html; charset=utf-8"); 
$url="http://localhost:8888/JSONServer.php";
$Str=file_get_contents($url);
$Str=json_decode($Str,true);
print($Str["name"]);
?>
