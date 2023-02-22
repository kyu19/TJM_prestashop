<?php
/* Smarty version 4.2.1, created on 2023-02-22 13:41:25
  from '/Applications/MAMP/htdocs/TJM_prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f60d75c84de7_28747239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72a9376049215edbf905c70cd507181aee1f85f5' => 
    array (
      0 => '/Applications/MAMP/htdocs/TJM_prestashop/themes/classic/templates/page.tpl',
      1 => 1677069012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f60d75c84de7_28747239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44907487763f60d75c7d5b2_17782471', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_73452195963f60d75c7e9e4_12407673 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_68794209063f60d75c7de54_12341994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73452195963f60d75c7e9e4_12407673', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_141978655463f60d75c816a3_76359619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_189629429963f60d75c821e3_03315421 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10400332763f60d75c80e83_24474757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141978655463f60d75c816a3_76359619', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189629429963f60d75c821e3_03315421', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_203878998463f60d75c83aa8_12563817 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_56067183163f60d75c832d3_81739761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203878998463f60d75c83aa8_12563817', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_44907487763f60d75c7d5b2_17782471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_44907487763f60d75c7d5b2_17782471',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_68794209063f60d75c7de54_12341994',
  ),
  'page_title' => 
  array (
    0 => 'Block_73452195963f60d75c7e9e4_12407673',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_10400332763f60d75c80e83_24474757',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_141978655463f60d75c816a3_76359619',
  ),
  'page_content' => 
  array (
    0 => 'Block_189629429963f60d75c821e3_03315421',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_56067183163f60d75c832d3_81739761',
  ),
  'page_footer' => 
  array (
    0 => 'Block_203878998463f60d75c83aa8_12563817',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68794209063f60d75c7de54_12341994', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10400332763f60d75c80e83_24474757', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56067183163f60d75c832d3_81739761', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
