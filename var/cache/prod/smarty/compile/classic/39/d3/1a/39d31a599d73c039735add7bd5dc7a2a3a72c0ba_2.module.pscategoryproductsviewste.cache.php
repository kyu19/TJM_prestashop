<?php
/* Smarty version 4.2.1, created on 2023-03-15 13:42:00
  from 'module:pscategoryproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411bd18cd1d59_07278642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:pscategoryproductsviewste',
      1 => 1677070684,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_6411bd18cd1d59_07278642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15319333056411bd18ccb116_65598763';
?>
<section class="featured-products clearfix mt-3">
  <h2>
    <?php if (count($_smarty_tpl->tpl_vars['products']->value) == 1) {?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

    <?php } else { ?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

    <?php }?>
  </h2>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'productClass'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, false);
?>
</section>
<?php }
}
