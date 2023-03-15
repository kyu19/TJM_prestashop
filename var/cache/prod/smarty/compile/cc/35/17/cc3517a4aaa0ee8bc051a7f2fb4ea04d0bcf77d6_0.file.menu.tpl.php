<?php
/* Smarty version 4.2.1, created on 2023-03-15 14:32:00
  from '/Applications/MAMP/htdocs/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/default/template/controllers/stats/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411c8d0767099_58256364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc3517a4aaa0ee8bc051a7f2fb4ea04d0bcf77d6' => 
    array (
      0 => '/Applications/MAMP/htdocs/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/default/template/controllers/stats/menu.tpl',
      1 => 1677070683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411c8d0767099_58256364 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="container" class="row">
	<div class="sidebar navigation col-md-3">
		<nav class="list-group categorieList">
		<?php if (count($_smarty_tpl->tpl_vars['modules']->value)) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value[$_smarty_tpl->tpl_vars['module']->value['name']]) {?>
					<a class="list-group-item<?php if (($_smarty_tpl->tpl_vars['current_module_name']->value && $_smarty_tpl->tpl_vars['current_module_name']->value == $_smarty_tpl->tpl_vars['module']->value['name'])) {?> active<?php }?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
&amp;module=<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['module_instance']->value[$_smarty_tpl->tpl_vars['module']->value['name']]->displayName;?>
</a>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No module has been installed.','d'=>'Admin.Notifications.Warning'),$_smarty_tpl ) );?>

		<?php }?>
		</nav>
	</div>
<?php }
}
