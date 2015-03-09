<?php
header("Content-type: text/html; charset=utf-8"); 
?>

<?php
if(!empty($_GET["ID"]) and !empty($_GET["Name"])){

	$ID=$_GET["ID"];
	$Name=$_GET["Name"];
	
	header("Content-type: text/html; charset=utf-8"); 
	header("Cache-Control: no-cache, must-revalidate");
	
	$ArrayStr=array();
	array_push($ArrayStr,array("Feature"=>"Feature","Author"=>"Author","TotalNum"=>"100","PASSNum"=>"95","FailNum"=>"3"));
	array_push($ArrayStr,array("Feature"=>"Feature","Author"=>"Author","TotalNum"=>"100","PASSNum"=>"90","FailNum"=>"3"));
	array_push($ArrayStr,array("Feature"=>"Feature","Author"=>"Author","TotalNum"=>"100","PASSNum"=>"80","FailNum"=>"3"));
	
	$testJSON=array("ID"=>$ID,"Name"=>$Name."_TEST","Array"=>$ArrayStr);
	$Str=json_encode($testJSON);
	echo $Str;
}
?>
