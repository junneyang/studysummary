<?php
class CTestClass{
	private $Name;
	private $Age;
	
	public function __construct($Name,$Age){
		$this->Name=$Name;
		$this->Age=$Age;
	}
	public function DisInfo(){
		print($this->Name."<br/>");
		print($this->Age."<br/>");
	}
}
?>