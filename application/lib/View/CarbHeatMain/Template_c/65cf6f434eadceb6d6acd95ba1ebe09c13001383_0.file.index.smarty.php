<?php
/* Smarty version 3.1.31, created on 2017-06-19 21:20:20
  from "C:\Users\Jason\Documents\Programs\PHP\CarbHeat\application\lib\View\CarbHeatMain\Template\index.smarty" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59484014036b06_03757661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65cf6f434eadceb6d6acd95ba1ebe09c13001383' => 
    array (
      0 => 'C:\\Users\\Jason\\Documents\\Programs\\PHP\\CarbHeat\\application\\lib\\View\\CarbHeatMain\\Template\\index.smarty',
      1 => 1497907218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59484014036b06_03757661 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $_smarty_tpl->tpl_vars['tool_fullname']->value;?>
 (DEVELOPMENT)</title>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value, 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['stylesheet']->value;?>
" />
		<?php
}
} else {
?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['javascript']->value, 'jsfile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jsfile']->value) {
?>
		<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsfile']->value;?>
"><?php echo '</script'; ?>
>
		<?php
}
} else {
?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</head>
	<body>
		Howdy.
	</body>
</html>
<?php }
}
