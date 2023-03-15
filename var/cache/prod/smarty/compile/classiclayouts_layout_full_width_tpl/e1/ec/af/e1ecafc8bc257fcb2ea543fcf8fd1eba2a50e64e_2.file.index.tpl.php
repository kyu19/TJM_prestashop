<?php
/* Smarty version 4.2.1, created on 2023-03-15 13:27:06
  from '/Applications/MAMP/htdocs/TJM_prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411b99a0ca726_01998997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1ecafc8bc257fcb2ea543fcf8fd1eba2a50e64e' => 
    array (
      0 => '/Applications/MAMP/htdocs/TJM_prestashop/themes/classic/templates/index.tpl',
      1 => 1678839359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411b99a0ca726_01998997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16813922246411b99a0c6806_32035416', 'page_content_container');
?>


eazaz<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20720926106411b99a0c71b7_15964641 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13783821646411b99a0c87e6_10485881 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11156306106411b99a0c7f56_85199671 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13783821646411b99a0c87e6_10485881', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16813922246411b99a0c6806_32035416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16813922246411b99a0c6806_32035416',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20720926106411b99a0c71b7_15964641',
  ),
  'page_content' => 
  array (
    0 => 'Block_11156306106411b99a0c7f56_85199671',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13783821646411b99a0c87e6_10485881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20720926106411b99a0c71b7_15964641', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11156306106411b99a0c7f56_85199671', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
