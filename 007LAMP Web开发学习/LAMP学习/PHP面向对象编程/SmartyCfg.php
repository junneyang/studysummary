<?php
include("../SmartyLib/Smarty.class.php");

$Smarty = new Smarty(); //建立smarty实例对象$Smarty
$Smarty->caching=true; //是否使用缓存，项目在调试期间，不建议启用缓存
$Smarty->template_dir = "./Templates"; //设置模板目录
$Smarty->compile_dir = "./Templates_C"; //设置编译目录
$Smarty->cache_dir = "./Smarty_Cache"; //缓存文件夹
$Smarty->cache_lifetime = 0.05;  //缓存时间
//----------------------------------------------------
//左右边界符，默认为{}，但实际应用当中容易与JavaScript相冲突
//----------------------------------------------------
$Smarty->left_delimiter = "{";
$Smarty->right_delimiter = "}";
?>