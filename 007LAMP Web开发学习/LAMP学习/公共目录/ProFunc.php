<?php
	/*
	PHP����֪ʶ��
	3.���̿���
	4.����
	*/
	print("<b>whileѭ��:<br/></b>");
	$Int=0;
	while($Int<5)
	{
		print("Number:".$Int);
		print("<br/>");
		$Int++;
	}
	
	print("<b>forѭ��:<br/></b>");
	for($Int=0;$Int<5;$Int++)
	{
		if($Int == 3)
		{
			continue;
		}
		print("Number:".$Int);
		print("<br/>");
	}
	
	print("<b>�Զ��庯��:<br/></b>");
	function Add($DataA,$DataB)
	{
		return $DataA+$DataB;
	}
	function FuncDefPara($StrA,$StrB="YangJun")
	{
		return $StrA.$StrB;
	}
	
	$DataA=20;
	$DataB=30;
	print(Add($DataA,$DataB));
	print("<br/>");
	
	$StrA="Hello,";
	//$StrB="HAHAHAH";
	print(FuncDefPara($StrA));
	print("<br/>");
?>
