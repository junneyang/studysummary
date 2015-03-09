<?php
print("<b>Polymorphism应用，PHP的多态与C++、JAVA不是一个意思，假的多态；本来就弱类型语言还搞多态，奇葩吧</b><br/>");

interface CInterface{
	function DisInfo();
}
class CInterfaceA implements CInterface{
	function DisInfo(){
		print("CInterfaceA"."<br/>");
	}
}

class CInterfaceB implements CInterface{
	function DisInfo(){
		print("CInterfaceB"."<br/>");
	}
}

class Test{
	public function Func($Intf){
		$Intf->DisInfo();
	}
}

$Test=new Test();
$CInterfaceA=new CInterfaceA();
$CInterfaceB=new CInterfaceB();

$Test->Func($CInterfaceA);
$Test->Func($CInterfaceB);
?>