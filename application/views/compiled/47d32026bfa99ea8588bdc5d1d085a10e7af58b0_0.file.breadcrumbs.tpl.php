<?php
/* Smarty version 3.1.30, created on 2018-01-04 19:49:36
  from "D:\www\adminPage\application\views\breadcrumbs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4e7740007800_58165423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47d32026bfa99ea8588bdc5d1d085a10e7af58b0' => 
    array (
      0 => 'D:\\www\\adminPage\\application\\views\\breadcrumbs.tpl',
      1 => 1507924316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4e7740007800_58165423 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
'assessment/index">Beranda</a></li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumbs']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['text'];?>
</a></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ol><?php }
}
