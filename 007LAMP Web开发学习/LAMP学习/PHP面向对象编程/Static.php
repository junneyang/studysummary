<?php
print("<b>Static��constant��Staticһ��ʹ�ý���<br/></b>");
class CStatic{
	const StrA="GalaxManagerA";
	static $StrB="GalaxManagerB";
	
	static function Func(){
		print(CStatic::$StrB."<br/>");
	}
}


print(CStatic::StrA."<br/>");
print(CStatic::$StrB."<br/>");

CStatic::Func();
?>