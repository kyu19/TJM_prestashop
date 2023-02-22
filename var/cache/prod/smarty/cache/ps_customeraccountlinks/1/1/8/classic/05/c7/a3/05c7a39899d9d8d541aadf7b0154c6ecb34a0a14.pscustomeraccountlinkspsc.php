<?php
/* Smarty version 4.2.1, created on 2023-02-22 13:41:25
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63f60d75ea1557_80841569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1677069014,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_63f60d75ea1557_80841569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/TJM_prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/2c/c4/d5/2cc4d5a5462244871eb6453df7be5598781274cf_2.file.helpers.tpl.php',
    'uid' => '2cc4d5a5462244871eb6453df7be5598781274cf',
    'call_name' => 'smarty_template_function_renderLogo_135594750463f60d75cb55b2_50118191',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost:8888/TJM_prestashop/mon-compte" rel="nofollow">
      Votre compte
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Votre compte</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost:8888/TJM_prestashop/suivi-commande-invite" title="Suivi de commande" rel="nofollow">Suivi de commande</a></li>
        <li><a href="http://localhost:8888/TJM_prestashop/mon-compte" title="Identifiez-vous" rel="nofollow">Connexion</a></li>
        <li><a href="http://localhost:8888/TJM_prestashop/inscription" title="Créez votre compte" rel="nofollow">Créez votre compte</a></li>
        <li>
  <a href="//localhost:8888/TJM_prestashop/module/ps_emailalerts/account" title="Mes alertes">
    Mes alertes
  </a>
</li>

       
	</ul>
</div>
<?php }
}
