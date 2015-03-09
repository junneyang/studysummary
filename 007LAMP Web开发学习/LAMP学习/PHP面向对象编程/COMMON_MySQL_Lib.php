<?php
class CMySQLDB{
	private $HostIP;
	private $HostPort;
	private $UserName;
	private $PWD;
	private $DataBase;
	
	//构造函数
	public function __construct($HostIP,$HostPort,$UserName,$PWD,$DataBase){
		$this->HostIP=$HostIP;
		$this->HostPort=$HostPort;
		$this->UserName=$UserName;
		$this->PWD=$PWD;
		$this->DataBase=$DataBase;
		//print("Log:构造函数...<br/>");
		try{
			$this->ConnectDB();
			//print("Log:数据库连接函数...<br/>");
		}
		catch(Exception $e){
			print("Log:数据库连接ERROR:".$e->getMessage()."<br/>");
		}
	}
	//数据库连接函数
	private function ConnectDB(){
		if(mysql_connect($this->HostIP.":".$this->HostPort,$this->UserName,$this->PWD) 
		and mysql_select_db($this->DataBase)
		and mysql_query("set names 'gbk'")){
			//print("Log:数据库连接函数...<br/>");
			return true;
		}
		else{
			//print("Log:数据库连接异常...<br/>");
			throw new Exception("数据库连接异常...<br/>");
		}
	}
	//数据表操作函数
	private function __Tbl_Operate($SqlCmd){
		if($Ret=mysql_query($SqlCmd)){
			//print("Log:数据表操作:.$SqlCmd...");
			return $Ret;
		}
		else{
			throw new Exception("数据表操作异常...<br/>");
		}
	}
	public function Tbl_Operate($SqlCmd){
		try{
			$Ret=$this->__Tbl_Operate($SqlCmd);
			return $Ret;
		}
		catch(Exception $e){
			print("Log:数据表操作ERROR:".$e->getMessage()."<br/>");
		}
	}
	//数据表操作结果转化为键值对
	public function Tbl_ToArrayStr($Ret){
		$RetArray=mysql_fetch_array($Ret);
		return $RetArray;
	}
	//数据库显示断连
	public function Database_Close($Ret){
		mysql_close($Ret);
	}
}
?>

