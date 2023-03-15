<?php
/* Smarty version 4.2.1, created on 2023-03-15 13:42:04
  from 'module:paypalviewstemplatesbnplb' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411bd1caf8396_11396633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '785307732c6079ac1a589c87efe8be5580834cea' => 
    array (
      0 => 'module:paypalviewstemplatesbnplb',
      1 => 1676274572,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411bd1caf8396_11396633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!-- Start bnpl. Module Paypal -->
<?php ob_start();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['psPaypalDir']->value)."/views/templates/_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('javascriptBlock', ob_get_clean());
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19664966826411bd1caf46c8_59669617', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11510762366411bd1caf5d58_16310299', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3888189976411bd1caf6908_01035078', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_404976226411bd1caf7486_14396005', 'init-button');
?>

<!-- End bnpl. Module Paypal -->



<?php }
/* {block 'head'} */
class Block_19664966826411bd1caf46c8_59669617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19664966826411bd1caf46c8_59669617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['javascriptBlock']->value;?>

<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_11510762366411bd1caf5d58_16310299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11510762366411bd1caf5d58_16310299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_3888189976411bd1caf6908_01035078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_3888189976411bd1caf6908_01035078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'init-button'} */
class Block_404976226411bd1caf7486_14396005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'init-button' => 
  array (
    0 => 'Block_404976226411bd1caf7486_14396005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
      function waitPaypalSDKIsLoaded() {
          if (typeof totPaypalBnplSdkButtons === 'undefined' || typeof BNPL === 'undefined') {
              setTimeout(waitPaypalSDKIsLoaded, 200);
              return;
          }

          BNPL.init();

          if (typeof bnplColor != 'undefined') {
              BNPL.setColor(bnplColor);
          }

          BNPL.initButton();
      }

      waitPaypalSDKIsLoaded();
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'init-button'} */
}
