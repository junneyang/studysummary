<?php
class CTest{
	private $Name;
	private $Age;
	
	public function __construct($Name,$Age){
		$this->Name=$Name;
		$this->Age=$Age;
	}
	public function __destruct(){
		print("析构函数自动执行".$this->Name."<br/>");
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

print("<b>在PHP5中如果类没有指定成员的访问修饰符,默认就是public的访问权限<br/></b>");

$OTest001=new CTest("YangJun001",24);
$OTest001->DisInfo();

$OTest002=new CTest("YangJun002",25);
$OTest002->DisInfo();

print("<b>PHP与JAVA一样，没有多重继承<br/></b>");
$SubCT=new SubCTest("SubYangJun",25,"男");
$SubCT->DisInfo();
?>