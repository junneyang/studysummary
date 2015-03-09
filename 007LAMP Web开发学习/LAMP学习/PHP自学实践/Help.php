<script type='text/javascript' language='javascript'>
window.moveTo(0,0);         
window.resizeTo(window.screen.width,window.screen.height);
</script>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title>OpenTestRunner-UserHelp</title>
		<link rel="stylesheet" type="text/css" href="TestReport.css"/>
	</head>
	
	<body>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
	<br/>
	<p style='text-align:center;font-family:微软雅黑;font-size:30px'>OpenTestRunner使用帮助</p>
	
	<div id="ID_HelpInfo_DIV">
	<b>1.友情提示>>></b><br/>
	**************************************************************************************************************************<br/>
使用前请获取OpenTestRunner最新版本：<a href='./SoftwareDownload.php?PKG_Name=OpenTestRunner.rar'>点击立即获取</a><br/>
如果需要独立部署WebService，请获取PHPWebServer最新版本：<a href='./SoftwareDownload.php?PKG_Name=PHPWebServerPKG.rar'>点击立即获取</a><br/>
**************************************************************************************************************************<br/><br/>

<b>2.OpenTestRunner使用方法>>></b><br/>
**************************************************************************************************************************<br/>
具体使用，请按照如下使用说明进行:<br/>
1.解压获取的最新版本压缩包到执行机任意目录<br/>
2.按照说明，完成TaskCfg.ini中各配置项<br/>
3.双击OpenTestRunner.bat开始任务执行<br/>
4.所有解压文件不允许随意修改，执行过程中动态生成的临时文件也不允许修改<br/>
5.执行过程中请按照控制台的提示访问WebService实时监控运行状态并且获取测试报告<br/>
6.如有问题，请联系华为工程师解决：<a href="mailto:yangjun 00193825/huawei, ">@联系作者</a><br/>
7.PHPWebServer部署与使用方法另在PHPWebServerPKG.rar中单独说明
**************************************************************************************************************************<br/><br/>

<b>3.OpenTestRunner版本更新记录>>></b><br/>
**************************************************************************************************************************<br/>
当前版本为5.0，版本更新记录：<br/>
<p>1.0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;基础版本;</p>
<p></p>
1.1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;支持脚本路径、脚本名称带空格、中文等；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;支持输出日志路径带空格、中文等；<br/>
		<p></p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本日志特殊字符入库失败BUG还未解决;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本内容暂未入库记录；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WebUI测试过多浏览器矿口未关闭导致执行机响应速度减慢甚至挂死问题还未解决;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;控制台键盘中断异常未作处理；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;是否考虑添加数据表保存任务信息；<br/>
<p></p>	
<p>1.2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;取消手动关闭TMSS客户端的限制；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;解决WebUI测试过多浏览器矿口未关闭导致执行机响应速度减慢甚至挂死问题;</p>
		<p></p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本日志特殊字符入库失败BUG还未解决;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本内容暂未入库记录；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;控制台键盘中断异常未作处理；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;是否考虑添加数据表保存任务信息；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本顺序任意调整功能还未添加；<br/>
<p></p>		
<p>2.0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更新版本软件包名称为OpenTestRunner，以前的GeneralTestRunner不在维护<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;添加数据表，解决前台数据获取困难问题;<br/>
		<p></p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本日志特殊字符入库失败BUG还未解决;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本内容暂未入库记录；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;控制台键盘中断异常未作处理；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本顺序任意调整功能还未添加；<br/>
<p></p>		
<p>2.1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更新版本软件包名称为OpenTestRunner，以前的GeneralTestRunner不在维护;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;添加数据表，解决前台数据获取困难问题;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;初步解决标记结果到TMSS进程挂死的问题，该问题还是偶现，悬而未决,TMSS垃圾;<br/>
		<p></p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本日志特殊字符入库失败BUG还未解决;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本内容暂未入库记录；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;控制台键盘中断异常未作处理；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本顺序任意调整功能还未添加；<br/>
<p></p>
<p>3.0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新增TMSS结果允许手工批量标记的功能，避免执行过程中多次标记影响性能、可靠性。解决多次标记TMSS进程挂死问题。<br/>
		<p></p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本日志特殊字符入库失败BUG还未解决;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脚本内容暂未入库记录；<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;控制台键盘中断异常未作处理；<br/>
<p></p>		
<p>5.0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;屏蔽TestRunner杀死火狐进程动作。<br/>
		<p></p><br/>
**************************************************************************************************************************<br/>

	</div>


	<?php
	for($i=0;$i<7;$i++){
		print("<p>&nbsp;</p>");
	}
	?>
	<p style="text-align:center">CopyRight@IT Cloud Mgmt I&V 版权所有,侵权必究</p>
	<p style="text-align:center"><a href="mailto:yangjun 00193825/huawei, ">@联系作者</a></p>
	
	</body>
</html>

