<?php
/* Smarty version 4.2.1, created on 2023-03-15 13:42:00
  from 'module:psviewedproductviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411bd18c66079_09536187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d16a43ec328078374eaa2891a2b3bb0d0752c3' => 
    array (
      0 => 'module:psviewedproductviewstempl',
      1 => 1677070684,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_6411bd18c66079_09536187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6858573436411bd18c63436_80465728';
?>
<section class="featured-products clearfix mt-3">
  <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'productClass'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, false);
?>
</section>
<?php }
}
