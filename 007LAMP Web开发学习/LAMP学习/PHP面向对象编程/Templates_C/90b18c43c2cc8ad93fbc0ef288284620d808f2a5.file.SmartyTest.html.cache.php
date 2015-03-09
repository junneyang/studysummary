<?php /* Smarty version Smarty-3.1.13, created on 2013-04-10 12:47:55
         compiled from ".\Templates\SmartyTest.html" */ ?>
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
  ),
  'nocache_hash' => '282215165197fb302b7-22524220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5165197fb65594_64323278',
  'variables' => 
  array (
    'Title' => 0,
    'Content' => 0,
    'StrArr' => 0,
    'StrList' => 0,
    'V' => 0,
    'DataArray' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5165197fb65594_64323278')) {function content_5165197fb65594_64323278($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</title>
		<?php echo $_smarty_tpl->getSubTemplate ("Head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('TmpName'=>"Smarty"), 0);?>

	</head>

	<body>
		<p><b>简单变量操作</b></p>
		<p><?php echo $_smarty_tpl->tpl_vars['Content']->value;?>
</p>
		
		<p><b>二维数组操作</b></p>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['Key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['name'] = 'Key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['StrArr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total']);
?>
		<ul>
		<li><?php echo $_smarty_tpl->tpl_vars['StrArr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['Key']['index']]['Cnt'];?>
</li>
		</ul>
		<?php endfor; else: ?>
		<?php endif; ?>
		
		<p><b>一维数组操作(section方式)</b></p>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['Key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['name'] = 'Key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['StrList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total']);
?>
		<a href="#"><?php echo $_smarty_tpl->tpl_vars['StrList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['Key']['index']];?>
</a> | 
		<?php endfor; else: ?>
		<?php endif; ?>
		
		<p><b>一维数组操作(foreach方式)</b></p>
		<?php  $_smarty_tpl->tpl_vars['V'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['V']->_loop = false;
 $_smarty_tpl->tpl_vars['K'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['StrList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['V']->key => $_smarty_tpl->tpl_vars['V']->value){
$_smarty_tpl->tpl_vars['V']->_loop = true;
 $_smarty_tpl->tpl_vars['K']->value = $_smarty_tpl->tpl_vars['V']->key;
?>
		<a href="#"><?php echo $_smarty_tpl->tpl_vars['V']->value;?>
</a> | 
		<?php } ?>
		
		<p><b>数据库数据查询操作</b></p>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['Key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['name'] = 'Key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DataArray']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['Key']['total']);
?>
		<ul>
		<li>标题:<?php echo $_smarty_tpl->tpl_vars['DataArray']->value[$_smarty_tpl->getVariable('smarty')->value['section']['Key']['index']]['Title'];?>
 | 内容:<?php echo $_smarty_tpl->tpl_vars['DataArray']->value[$_smarty_tpl->getVariable('smarty')->value['section']['Key']['index']]['Content'];?>
 | 时间:<?php echo $_smarty_tpl->tpl_vars['DataArray']->value[$_smarty_tpl->getVariable('smarty')->value['section']['Key']['index']]['Time'];?>
 | 点击量:<?php echo $_smarty_tpl->tpl_vars['DataArray']->value[$_smarty_tpl->getVariable('smarty')->value['section']['Key']['index']]['HitNum'];?>
</li>
		</ul>
		<?php endfor; else: ?>
		<?php endif; ?>
		
		<p><b>分支判断操作</b></p>
		<?php if (true){?>
		<p>分支判断</p>
		<?php }?>
		
		<p><b>嵌入其他脚本如JavaScript</b></p>
		
		<script language="javascript">
		document.write("HelloWorld<br/>");
		</script>
		
	</body>
</html>
<?php }} ?>