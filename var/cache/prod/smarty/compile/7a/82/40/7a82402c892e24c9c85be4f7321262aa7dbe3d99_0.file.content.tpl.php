<?php
/* Smarty version 4.3.1, created on 2023-05-29 17:45:09
  from 'F:\xampp\htdocs\prestashop\adminMartin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6474c885bc86e3_29877174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a82402c892e24c9c85be4f7321262aa7dbe3d99' => 
    array (
      0 => 'F:\\xampp\\htdocs\\prestashop\\adminMartin\\themes\\default\\template\\content.tpl',
      1 => 1684156533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6474c885bc86e3_29877174 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
