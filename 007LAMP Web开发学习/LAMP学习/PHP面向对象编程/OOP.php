<?php
class CTest{
	private $Name;
	private $Age;
	
	public function __construct($Name,$Age){
		$this->Name=$Name;
		$this->Age=$Age;
	}
	public function __destruct(){
		print("���������Զ�ִ��".$this->Name."<br/>");
	}
	public function DisInfo(){
		print($this->Name."<br/>");
		print($this->Age."<br/>");
	}
}

class SubCTest extends CTest{
	private $Sex;
	public function __construct($Name,$Age,$Sex){
		CTest::__construct($Name,$Age);
		$this->Sex=$Sex;
	}
	public function DisInfo(){
		CTest::DisInfo();
		print($this->Sex."<br/>");
	}
}

print("<b>��PHP5�������û��ָ����Ա�ķ������η�,Ĭ�Ͼ���public�ķ���Ȩ��<br/></b>");

$OTest001=new CTest("YangJun001",24);
$OTest001->DisInfo();

$OTest002=new CTest("YangJun002",25);
$OTest002->DisInfo();

print("<b>PHP��JAVAһ����û�ж��ؼ̳�<br/></b>");
$SubCT=new SubCTest("SubYangJun",25,"��");
$SubCT->DisInfo();
?>