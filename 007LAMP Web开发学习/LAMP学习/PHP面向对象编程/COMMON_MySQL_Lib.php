<?php
class CMySQLDB{
	private $HostIP;
	private $HostPort;
	private $UserName;
	private $PWD;
	private $DataBase;
	
	//���캯��
	public function __construct($HostIP,$HostPort,$UserName,$PWD,$DataBase){
		$this->HostIP=$HostIP;
		$this->HostPort=$HostPort;
		$this->UserName=$UserName;
		$this->PWD=$PWD;
		$this->DataBase=$DataBase;
		//print("Log:���캯��...<br/>");
		try{
			$this->ConnectDB();
			//print("Log:���ݿ����Ӻ���...<br/>");
		}
		catch(Exception $e){
			print("Log:���ݿ�����ERROR:".$e->getMessage()."<br/>");
		}
	}
	//���ݿ����Ӻ���
	private function ConnectDB(){
		if(mysql_connect($this->HostIP.":".$this->HostPort,$this->UserName,$this->PWD) 
		and mysql_select_db($this->DataBase)
		and mysql_query("set names 'gbk'")){
			//print("Log:���ݿ����Ӻ���...<br/>");
			return true;
		}
		else{
			//print("Log:���ݿ������쳣...<br/>");
			throw new Exception("���ݿ������쳣...<br/>");
		}
	}
	//���ݱ��������
	private function __Tbl_Operate($SqlCmd){
		if($Ret=mysql_query($SqlCmd)){
			//print("Log:���ݱ����:.$SqlCmd...");
			return $Ret;
		}
		else{
			throw new Exception("���ݱ�����쳣...<br/>");
		}
	}
	public function Tbl_Operate($SqlCmd){
		try{
			$Ret=$this->__Tbl_Operate($SqlCmd);
			return $Ret;
		}
		catch(Exception $e){
			print("Log:���ݱ����ERROR:".$e->getMessage()."<br/>");
		}
	}
	//���ݱ�������ת��Ϊ��ֵ��
	public function Tbl_ToArrayStr($Ret){
		$RetArray=mysql_fetch_array($Ret);
		return $RetArray;
	}
	//���ݿ���ʾ����
	public function Database_Close($Ret){
		mysql_close($Ret);
	}
}
?>

