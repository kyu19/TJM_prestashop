<?php
/* Smarty version 4.2.1, created on 2023-03-15 13:27:06
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411b99a318b10_42971788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1677070684,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6411b99a318b10_42971788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/TJM_prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/2c/c4/d5/2cc4d5a5462244871eb6453df7be5598781274cf_2.file.helpers.tpl.php',
    'uid' => '2cc4d5a5462244871eb6453df7be5598781274cf',
    'call_name' => 'smarty_template_function_renderLogo_6004585986411b99a10c767_77414289',
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
            <li><a href="http://localhost:8888/TJM_prestashop/identite" title="Informations" rel="nofollow">Informations</a></li>
                  <li><a href="http://localhost:8888/TJM_prestashop/adresse" title="Ajouter une première adresse" rel="nofollow">Ajouter une première adresse</a></li>
                          <li><a href="http://localhost:8888/TJM_prestashop/historique-commandes" title="Commandes" rel="nofollow">Commandes</a></li>
                          <li><a href="http://localhost:8888/TJM_prestashop/avoirs" title="Avoirs" rel="nofollow">Avoirs</a></li>
                                  <li>
    <a href="http://localhost:8888/TJM_prestashop/module/blockwishlist/lists" title="Mes listes d&#039;envies" rel="nofollow">
      Liste d&#039;envies
    </a>
  </li>
<li>
  <a href="//localhost:8888/TJM_prestashop/module/ps_emailalerts/account" title="Mes alertes">
    Mes alertes
  </a>
</li>

        <li><a href="http://localhost:8888/TJM_prestashop/?mylogout=" title="Me déconnecter" rel="nofollow">Déconnexion</a></li>
       
	</ul>
</div>
<?php }
}