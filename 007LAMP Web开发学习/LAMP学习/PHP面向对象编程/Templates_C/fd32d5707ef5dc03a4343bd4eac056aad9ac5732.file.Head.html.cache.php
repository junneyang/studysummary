<?php /* Smarty version Smarty-3.1.13, created on 2013-04-10 13:40:20
         compiled from ".\Templates\Head.html" */ ?>
<?php /*%%SmartyHeaderCode:1005051655f7b09aa46-01198365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd32d5707ef5dc03a4343bd4eac056aad9ac5732' => 
    array (
      0 => '.\\Templates\\Head.html',
      1 => 1365601213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1005051655f7b09aa46-01198365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51655f7b09e848_16527929',
  'variables' => 
  array (
    'TmpName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51655f7b09e848_16527929')) {function content_51655f7b09e848_16527929($_smarty_tpl) {?><h1 style="color:blue;text-align:center">PHP <?php echo $_smarty_tpl->tpl_vars['TmpName']->value;?>
模板引擎</h1>
<h4 style="color:red;text-align:right">当前系统时间:<?php echo Smarty_Internal_Nocache_Insert::compile ('insert_GetCurrentTime',array(), $_smarty_tpl, 'null');?>
</h4><?php }} ?>