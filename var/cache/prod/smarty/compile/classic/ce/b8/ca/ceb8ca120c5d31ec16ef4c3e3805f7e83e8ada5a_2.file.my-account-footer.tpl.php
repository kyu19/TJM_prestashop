<?php
/* Smarty version 4.2.1, created on 2023-02-22 13:41:25
  from '/Applications/MAMP/htdocs/TJM_prestashop/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f60d75e9f439_00018620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceb8ca120c5d31ec16ef4c3e3805f7e83e8ada5a' => 
    array (
      0 => '/Applications/MAMP/htdocs/TJM_prestashop/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl',
      1 => 1677069014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f60d75e9f439_00018620 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li>
  <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </a>
</li>
<?php }
}
