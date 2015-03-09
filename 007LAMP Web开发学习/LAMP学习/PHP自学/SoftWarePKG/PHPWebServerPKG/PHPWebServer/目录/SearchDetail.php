<?php
header("Content-type: text/html; charset=utf-8"); 
?>
<?php
class COMMON_MySQL_Lib{
	private $HostIP="localhost";
	private $HostPort="3306";
	private $UserName="root";
	private $PWD="Admin123";
	private $DataBase="Database_Test";
	
	public function Connect_To_DB(){
		mysql_connect($this->HostIP.":".$this->HostPort,$this->UserName,$this->PWD) ;
		mysql_select_db($this->DataBase);
		mysql_query("set names 'utf8'");
	}
	
	public function Run_SQL_Cmd($SqlCmd){
		$Ret=mysql_query($SqlCmd);
		return $Ret;
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