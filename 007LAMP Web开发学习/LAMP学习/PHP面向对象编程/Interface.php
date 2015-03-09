<?php
print("<b>接口的定义与引用<br/></b>");
interface CIN{
	const PI=3.1415926;
	function FuncPI();
}
interface CINN{
	const STR="GalaxManager";
	function FuncSTR();
}

class CIM implements CIN,CINN{
	const SSS="接口";
	function FuncPI(){
		print(CIM::PI."<br/>");
	}
	function FuncSTR(){
		print(CIM::STR."<br/>");
	}
}

$OCIM=new CIM();
$OCIM->FuncPI();
$OCIM->FuncSTR();
print(CIM::SSS."<br/>");
//print(CIN::PI."<br/>");
?>
