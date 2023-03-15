<?php
/* Smarty version 4.2.1, created on 2023-03-15 13:43:05
  from '/Applications/MAMP/htdocs/TJM_prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411bd5999acd3_71595605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cc4d5a5462244871eb6453df7be5598781274cf' => 
    array (
      0 => '/Applications/MAMP/htdocs/TJM_prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1677070684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411bd5999acd3_71595605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/TJM_prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_left_column_tpl/2c/c4/d5/2cc4d5a5462244871eb6453df7be5598781274cf_2.file.helpers.tpl.php',
    'uid' => '2cc4d5a5462244871eb6453df7be5598781274cf',
    'call_name' => 'smarty_template_function_renderLogo_10819792766411bd59992452_77350521',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_10819792766411bd59992452_77350521 */
if (!function_exists('smarty_template_function_renderLogo_10819792766411bd59992452_77350521')) {
function smarty_template_function_renderLogo_10819792766411bd59992452_77350521(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_10819792766411bd59992452_77350521 */
}
