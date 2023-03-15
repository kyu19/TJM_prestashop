<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__bf48d73c9eef5676fb0bf4f11bd0c51264276d96197701bc7fc5ab02ddae820f */
class __TwigTemplate_343170239acf41ef31f0252396f4ba640de9e05147d9971e0d30c327eb3a6400 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/TJM_prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/TJM_prestashop/img/app_icon.png\" />

<title>Produits • TJM_prestashop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.0.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'c5e43066064ed143e16799984126f025';
    var token_admin_orders = tokenAdminOrders = '36a1207159f7f7c3a67ee06568ee9fbe';
    var token_admin_customers = '31aeb5062e1e77f853865da2bc78d331';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '78dc7709908d493a3235cee4ba490857';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '33dcab44582dbbb9ddde74d81e77d55d';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/modules/manage?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448';
    var admin_notification_get_link = '/TJM_prestashop/admin386e2";
        // line 42
        echo "oj8km9hf2gjktr/index.php/common/notifications?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448';
    var admin_notification_push_link = adminNotificationPushLink = '/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/common/notifications/ack?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/TJM_prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/TJM_prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/TJM_prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/TJM_prestashop\\/admin386e2oj8km9hf2gjktr\\/\";
var baseDir = \"\\/TJM_prestashop\\/\";
var changeFormLanguageUrl = \"\\/TJM_prestashop\\/admin386e2oj8km9hf2gjktr\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":";
        // line 68
        echo "2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/TJM_prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/TJM_prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/TJM_prestashop/js/admin.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/TJM_prestashop/js/tools.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/TJM_prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/TJM_prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 87
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminproducts\"
  data-base-url=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php\"  data-token=\"quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminDashboard&amp;token=3107d244250c49cec9e304e9c337a76a\"></a>
      <span id=\"shop_version\">8.0.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/orders?token=c82927c10aead8c285ba32d7410b7688\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=14962b029c8c19fec88897951162483b\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/modules/manage?token=c82927c10aead8c285ba32d7410b7688\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminCartRules&amp;addcart_r";
        // line 121
        echo "ule&amp;token=d0687d52749d4c58b4e7d52c229f67a0\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/catalog/products/new?token=c82927c10aead8c285ba32d7410b7688\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/catalog/categories/new?token=c82927c10aead8c285ba32d7410b7688\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"17\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products\"
        data-post-link=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminQuickAccesses&token=924640fea39af3f24922657883d6a1e0\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminQuickAccesses&token=924640fea39af3f24922657883d6a1e0\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/TJM_prestashop/";
        // line 160
        echo "admin386e2oj8km9hf2gjktr/index.php?controller=AdminSearch&amp;token=985f16757222ad9b688694519d587ace\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"";
        // line 177
        echo "dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/orders?token=c82927c10aead8c285ba32d7410b7688\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=14962b029c8c19fec88897951162483b\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/modules/manage?token=c82927c10aead8c285ba32d7410b7688\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d0687d52749d4c58b4e7d52c229f67a0\"
             data-item=\"Nouveau bon de r";
        // line 211
        echo "éduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/catalog/products/new?token=c82927c10aead8c285ba32d7410b7688\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/catalog/categories/new?token=c82927c10aead8c285ba32d7410b7688\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"149\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products\"
      data-post-link=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminQuickAccesses&token=924640fea39af3f24922657883d6a1e0\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Produits - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminQuickAccesses&token=924640fea39af3f24922657883d6a1e0\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/TJM_prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div ";
        // line 257
        echo "class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos &";
        // line 309
        echo "lt;strong&gt;&lt;a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=a1aa4d354fc8d08aba069b6274450b16\"&gt;paniers abandonnés&lt;/a&gt;&lt;/strong&gt; ?&lt;br&gt; Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">ac";
        // line 351
        echo "cess_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8888/TJM_prestashop/img/pr/default.jpg\" alt=\"Li\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Li</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/employees/1/edit?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminLogin&amp;logout=1&amp;token=5c51fb44ae03f655f476deb40c5bfdc6\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/employees/toggle-navigation?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=";
        // line 396
        echo "AdminDashboard&amp;token=3107d244250c49cec9e304e9c337a76a\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminDashboard&amp;token=3107d244250c49cec9e304e9c337a76a\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/orders/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
   ";
        // line 438
        echo "                           <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/orders/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/orders/invoices/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/orders/credit-slips/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/orders/delivery-slips/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                   ";
        // line 467
        echo "                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminCarts&amp;token=a1aa4d354fc8d08aba069b6274450b16\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/catalog/products?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/TJM_prestashop/adm";
        // line 496
        echo "in386e2oj8km9hf2gjktr/index.php/sell/catalog/products?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/catalog/categories?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/catalog/monitoring/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminAttributesGroups&amp;token=4b93ecfd11ba1ecabbb011f1245f7122\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                           ";
        // line 525
        echo "   
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/catalog/brands/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/attachments/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminCartRules&amp;token=d0687d52749d4c58b4e7d52c229f67a0\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/stocks/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" cl";
        // line 552
        echo "ass=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/customers/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/customers/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                  ";
        // line 585
        echo "              <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/addresses/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminCustomerThreads&amp;token=78dc7709908d493a3235cee4ba490857\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminCustomerThreads&amp;token=78dc7709908d493a3235cee4ba490857\" class=\"link\"> SAV
                                </a>
                              </li>

                                                   ";
        // line 614
        echo "                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/customer-service/order-messages/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminReturn&amp;token=34a171d0db19aac03b2a4cbca6e03c5d\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminStats&amp;token=14962b029c8c19fec88897951162483b\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                              ";
        // line 644
        echo "                              </i>
                                            </a>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/modules/manage?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/modules/manage?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                            ";
        // line 680
        echo "                                                                        </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/design/themes/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"124\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/design/themes/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php";
        // line 709
        echo "/improve/design/mail_theme/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/design/cms-pages/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/design/modules/positions/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminImages&amp;token=d664aca45fb7f3af2331ba73b9502db9\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                               ";
        // line 739
        echo "             
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/modules/link-widget/list?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminCarriers&amp;token=d50d944f334c076e2286a7d234e8e654\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminCarriers&amp;token=d50d944f334c076e2286a7d234e8e654\" class=\"link\"> Transporteurs
                    ";
        // line 767
        echo "            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/shipping/preferences/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/payment/payment_methods?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a hr";
        // line 799
        echo "ef=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/payment/payment_methods?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/payment/preferences?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/international/localization/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                   ";
        // line 829
        echo "           
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/international/localization/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/international/zones/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/international/taxes/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/improve/international/translations/settings?_token=q";
        // line 856
        echo "uGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/shop/preferences/preferences?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/shop/preferences/preferences?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"li";
        // line 891
        echo "nk\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/shop/order-preferences/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/shop/product-preferences/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/shop/customer-preferences/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              ";
        // line 922
        echo "<li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/shop/contacts/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/shop/seo-urls/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminSearchConf&amp;token=ae35076682894d02d13c4030420a4e5f\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/system-information/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vT";
        // line 950
        echo "CPA448\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/system-information/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/performance/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
       ";
        // line 980
        echo "                         <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/administration/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/emails/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/import/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/employees/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
       ";
        // line 1009
        echo "                       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/sql-requests/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/logs/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/webservice-keys/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/";
        // line 1036
        echo "TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/feature-flags/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/configure/advanced/security/?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalogue</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/catalog/products?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\" aria-current=\"page\">Produits</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produits          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/";
        // line 1086
        echo "index.php/sell/catalog/products/new?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\"                  title=\"Créer un nouveau produit : CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Nouveau produit
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminProducts%253Fversion%253D8.0.1%2526country%253Dfr/Aide?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/sell/catalog/products/new?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\"              title=\"Créer un nouveau produit : CTRL+P\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Nouveau produit
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
     ";
        // line 1124
        echo "                         <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminProducts%253Fversion%253D8.0.1%2526country%253Dfr/Aide?_token=quGpLPiMMwxJ1Gf3JDMsLdw9xyNMGYOiyD3vTCPA448\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1149
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost:8888/TJM_prestashop/admin386e2oj8km9hf2gjktr/index.php?controller=AdminDashboard&amp;token=3107d244250c49cec9e304e9c337a76a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1183
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1149
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1183
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__bf48d73c9eef5676fb0bf4f11bd0c51264276d96197701bc7fc5ab02ddae820f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1348 => 1183,  1327 => 1149,  1316 => 87,  1307 => 1183,  1267 => 1149,  1240 => 1124,  1200 => 1086,  1148 => 1036,  1119 => 1009,  1088 => 980,  1056 => 950,  1026 => 922,  993 => 891,  956 => 856,  927 => 829,  895 => 799,  861 => 767,  831 => 739,  799 => 709,  768 => 680,  730 => 644,  698 => 614,  667 => 585,  632 => 552,  603 => 525,  572 => 496,  541 => 467,  510 => 438,  466 => 396,  419 => 351,  375 => 309,  321 => 257,  273 => 211,  237 => 177,  218 => 160,  177 => 121,  138 => 87,  117 => 68,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bf48d73c9eef5676fb0bf4f11bd0c51264276d96197701bc7fc5ab02ddae820f", "");
    }
}
