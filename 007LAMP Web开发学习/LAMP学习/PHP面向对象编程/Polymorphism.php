<?php
print("<b>PolymorphismӦ�ã�PHP�Ķ�̬��C++��JAVA����һ����˼���ٵĶ�̬�����������������Ի����̬�������</b><br/>");

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