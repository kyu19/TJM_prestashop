<?php
/* Smarty version 4.2.1, created on 2023-03-15 13:43:05
  from '/Applications/MAMP/htdocs/TJM_prestashop/themes/classic/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411bd599444c2_95361620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c2fccca875bc14e52bb92fa853ceb05bc7ad18' => 
    array (
      0 => '/Applications/MAMP/htdocs/TJM_prestashop/themes/classic/templates/catalog/listing/category.tpl',
      1 => 1677070684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
    'file:catalog/_partials/category-footer.tpl' => 1,
  ),
),false)) {
function content_6411bd599444c2_95361620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5056255896411bd5993eea4_45258019', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8855669936411bd59942c08_74328706', 'product_list_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_5056255896411bd5993eea4_45258019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_5056255896411bd5993eea4_45258019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_footer'} */
class Block_8855669936411bd59942c08_74328706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_footer' => 
  array (
    0 => 'Block_8855669936411bd59942c08_74328706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_footer'} */
}
