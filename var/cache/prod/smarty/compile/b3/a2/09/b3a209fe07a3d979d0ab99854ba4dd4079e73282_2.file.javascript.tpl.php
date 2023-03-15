<?php
/* Smarty version 4.2.1, created on 2023-03-15 13:42:04
  from '/Applications/MAMP/htdocs/TJM_prestashop/modules/paypal/views/templates/_partials/javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411bd1cad86c5_12393212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a209fe07a3d979d0ab99854ba4dd4079e73282' => 
    array (
      0 => '/Applications/MAMP/htdocs/TJM_prestashop/modules/paypal/views/templates/_partials/javascript.tpl',
      1 => 1676274572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411bd1cad86c5_12393212 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  <?php if ((isset($_smarty_tpl->tpl_vars['JSvars']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSvars']->value, 'varValue', false, 'varName');
$_smarty_tpl->tpl_vars['varValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['varName']->value => $_smarty_tpl->tpl_vars['varValue']->value) {
$_smarty_tpl->tpl_vars['varValue']->do_else = false;
?>
    var <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['varName']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['varValue']->value ));?>
;
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['JSscripts']->value)) && is_array($_smarty_tpl->tpl_vars['JSscripts']->value) && false === empty($_smarty_tpl->tpl_vars['JSscripts']->value)) {?>
  <?php echo '<script'; ?>
>
      function init() {
          if (document.readyState == 'complete') {
              addScripts();
          } else {
              document.addEventListener('readystatechange', function () {
                  console.log(document.readyState);
                  if (document.readyState == 'complete') {
                      addScripts();
                  }
              })
          }

          function addScripts() {
              var scripts = Array();
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSscripts']->value, 'JSscriptAttributes', false, 'keyScript');
$_smarty_tpl->tpl_vars['JSscriptAttributes']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyScript']->value => $_smarty_tpl->tpl_vars['JSscriptAttributes']->value) {
$_smarty_tpl->tpl_vars['JSscriptAttributes']->do_else = false;
?>
              var script = document.querySelector('script[data-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['keyScript']->value, ENT_QUOTES, 'UTF-8');?>
"]');

              if (null == script) {
                  var newScript = document.createElement('script');
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSscriptAttributes']->value, 'attrVal', false, 'attrName');
$_smarty_tpl->tpl_vars['attrVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attrName']->value => $_smarty_tpl->tpl_vars['attrVal']->value) {
$_smarty_tpl->tpl_vars['attrVal']->do_else = false;
?>
                  newScript.setAttribute('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attrName']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo $_smarty_tpl->tpl_vars['attrVal']->value;?>
');
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                  if (false === ('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['keyScript']->value, ENT_QUOTES, 'UTF-8');?>
'.search('jq-lib') === 0 && typeof jQuery === 'function')) {
                      newScript.setAttribute('data-key', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['keyScript']->value, ENT_QUOTES, 'UTF-8');?>
');
                      scripts.push(newScript);
                  }
              }
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              scripts.forEach(function (scriptElement) {
                  document.body.appendChild(scriptElement);
              })
          };
      };
      init();

  <?php echo '</script'; ?>
>

<?php }?>

<?php }
}
