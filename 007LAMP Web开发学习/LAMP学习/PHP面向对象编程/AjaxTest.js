function FuncAjax(Url)
{
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==1){
			document.getElementById("ID_Test").innerHTML="<img src='Loading.gif'>";
		}
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			var RetStr=xmlhttp.responseText
			RetStr+=document.NameForm.NameEdit.value;
			document.getElementById("ID_Test").innerHTML=RetStr;
		}
	}
	xmlhttp.open("GET","Test.php?Link="+Url,true);
	xmlhttp.send();
}

function VerifyUserName()
{
	var NameEdit=document.NameForm.NameEdit.value;
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==1){
			document.getElementById("ID_Test").innerHTML="<img src='Loading.gif'>";
		}
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			var RetStr=xmlhttp.responseText
			document.getElementById("ID_Test").innerHTML=RetStr;
		}
	}
	xmlhttp.open("POST","Test.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("NameEdit="+NameEdit);
}



