<?php
print("<b>Static、constant，Static一般使用较少<br/></b>");
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