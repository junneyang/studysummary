<?php
include("../SmartyLib/Smarty.class.php");

$Smarty = new Smarty(); //����smartyʵ������$Smarty
$Smarty->caching=true; //�Ƿ�ʹ�û��棬��Ŀ�ڵ����ڼ䣬���������û���
$Smarty->template_dir = "./Templates"; //����ģ��Ŀ¼
$Smarty->compile_dir = "./Templates_C"; //���ñ���Ŀ¼
$Smarty->cache_dir = "./Smarty_Cache"; //�����ļ���
$Smarty->cache_lifetime = 0.05;  //����ʱ��
//----------------------------------------------------
//���ұ߽����Ĭ��Ϊ{}����ʵ��Ӧ�õ���������JavaScript���ͻ
//----------------------------------------------------
$Smarty->left_delimiter = "{";
$Smarty->right_delimiter = "}";
?>