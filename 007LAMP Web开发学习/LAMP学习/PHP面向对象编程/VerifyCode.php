<?php
function CreateVerifyCode(){
	for($I=0;$I<4;$I++){
		$VerifyCode.=dechex(rand(0,15));
	}
	return $VerifyCode;
}
function CreateVerifyCodeImg($VerifyCode){
	$Img=ImageCreate(50,25);
	$BkColor=imagecolorallocate($Img,137,190,178);
	$Color=imagecolorallocate($Img,0,0,255);
	imagestring($Img,rand(1,6),rand(3,10),rand(2,3),$VerifyCode,$Color);
	imageline($Img,2,2,48,10,123);
	imageline($Img,2,23,45,2,321);
	header("Content-type:image/jpeg");
	imagejpeg($Img);
}

session_start();
$VerifyCode=CreateVerifyCode();
$_SESSION["CheckCode"]=$VerifyCode;
CreateVerifyCodeImg($VerifyCode);
?>