<?php
print("<b>���󷽷��������<br/></b>");
abstract class CAbTest{
	abstract function Test();
}

class SubCAbTest extends CAbTest{
	public function Test(){
		print("Abstract Class Test!!!");
	}
}

//$CAb=new CAbTest();
$SubCAb=new SubCAbTest();
$SubCAb->Test();
?>