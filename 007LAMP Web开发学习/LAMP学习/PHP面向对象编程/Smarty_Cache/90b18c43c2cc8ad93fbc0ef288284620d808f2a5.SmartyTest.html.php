<?php /*%%SmartyHeaderCode:282215165197fb302b7-22524220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90b18c43c2cc8ad93fbc0ef288284620d808f2a5' => 
    array (
      0 => '.\\Templates\\SmartyTest.html',
      1 => 1365596879,
      2 => 'file',
    ),
    'fd32d5707ef5dc03a4343bd4eac056aad9ac5732' => 
    array (
      0 => '.\\Templates\\Head.html',
      1 => 1365601213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282215165197fb302b7-22524220',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51667af95b1ae5_39748308',
  'has_nocache_code' => false,
  'cache_lifetime' => 0.05,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51667af95b1ae5_39748308')) {function content_51667af95b1ae5_39748308($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title>����-Smartyģ�����</title>
		<h1 style="color:blue;text-align:center">PHP Smartyģ������</h1>
<h4 style="color:red;text-align:right">��ǰϵͳʱ��:<?php echo insert_GetCurrentTime(array (
),$_smarty_tpl);?></h4>
	</head>

	<body>
		<p><b>�򵥱�������</b></p>
		<p>����-Smartyģ�����</p>
		
		<p><b>��ά�������</b></p>
				<ul>
		<li>123</li>
		</ul>
				<ul>
		<li>456</li>
		</ul>
				<ul>
		<li>789</li>
		</ul>
				
		<p><b>һά�������(section��ʽ)</b></p>
				<a href="#">ABC</a> | 
				<a href="#">DEF</a> | 
				<a href="#">GHI</a> | 
				<a href="#">JKL</a> | 
				
		<p><b>һά�������(foreach��ʽ)</b></p>
				<a href="#">ABC</a> | 
				<a href="#">DEF</a> | 
				<a href="#">GHI</a> | 
				<a href="#">JKL</a> | 
				
		<p><b>���ݿ����ݲ�ѯ����</b></p>
				<ul>
		<li>����:�������ó���ɾ�� | ����: | ʱ��:2013-04-10 21:00:11 | �����:1</li>
		</ul>
				<ul>
		<li>����:���Ǳ��� | ����:�������� | ʱ��:2013-04-10 11:48:44 | �����:0</li>
		</ul>
				<ul>
		<li>����:cdfvdv | ����:�����ݷðݷðݷ� | ʱ��:2013-04-08 19:01:44 | �����:10</li>
		</ul>
				<ul>
		<li>����:xsax | ����:cacvdfvdvdvd | ʱ��:2013-04-08 18:56:47 | �����:1</li>
		</ul>
				<ul>
		<li>����:bgfbfb | ����:bgfbfbf | ʱ��:2013-04-08 18:41:01 | �����:0</li>
		</ul>
				
		<p><b>��֧�жϲ���</b></p>
				<p>��֧�ж�</p>
				
		<p><b>Ƕ�������ű���JavaScript</b></p>
		
		<script language="javascript">
		document.write("HelloWorld<br/>");
		</script>
		
	</body>
</html>
<?php }} ?>