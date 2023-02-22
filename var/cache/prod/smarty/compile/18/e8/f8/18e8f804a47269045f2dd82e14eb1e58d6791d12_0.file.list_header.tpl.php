<?php
/* Smarty version 4.2.1, created on 2023-02-22 13:41:31
  from '/Applications/MAMP/htdocs/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f60d7b07bb75_94839695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18e8f804a47269045f2dd82e14eb1e58d6791d12' => 
    array (
      0 => '/Applications/MAMP/htdocs/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1677068997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f60d7b07bb75_94839695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143214888963f60d7b07ac28_56965371', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_143214888963f60d7b07ac28_56965371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_143214888963f60d7b07ac28_56965371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
