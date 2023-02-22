<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.feature_flags.stable_form_handler' shared service.

return $this->services['prestashop.admin.feature_flags.stable_form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()), ($this->services['prestashop.admin.configure.advanced_parameters.stable_feature_flags_form_data_provider'] ?? $this->load('getPrestashop_Admin_Configure_AdvancedParameters_StableFeatureFlagsFormDataProviderService.php')), 'PrestaShopBundle\\Form\\Admin\\Configure\\AdvancedParameters\\FeatureFlag\\FeatureFlagListType', 'FeatureFlagStable', 'feature_flag_stable');