<?php
/* Smarty version 4.3.1, created on 2023-06-01 17:12:38
  from 'F:\xampp\htdocs\prestashop\adminMartin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6478b5661a6b35_52735540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c5e982f73a60e194bf0b0ee1d4d0c300937b158' => 
    array (
      0 => 'F:\\xampp\\htdocs\\prestashop\\adminMartin\\themes\\new-theme\\template\\content.tpl',
      1 => 1684156533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6478b5661a6b35_52735540 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
