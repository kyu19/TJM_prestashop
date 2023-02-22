<?php
/* Smarty version 4.2.1, created on 2023-02-22 13:41:18
  from '/Applications/MAMP/htdocs/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f60d6e4fa622_12831627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0fc7ce2adcae7dc103053eee0428c132e111194' => 
    array (
      0 => '/Applications/MAMP/htdocs/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/default/template/content.tpl',
      1 => 1677068997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f60d6e4fa622_12831627 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
