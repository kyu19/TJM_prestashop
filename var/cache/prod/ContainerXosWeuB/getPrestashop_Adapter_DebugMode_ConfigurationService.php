<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.debug_mode.configuration' shared service.

return $this->services['prestashop.adapter.debug_mode.configuration'] = new \PrestaShop\PrestaShop\Adapter\Debug\DebugModeConfiguration(($this->services['prestashop.adapter.debug_mode'] ?? ($this->services['prestashop.adapter.debug_mode'] = new \PrestaShop\PrestaShop\Adapter\Debug\DebugMode())), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), (\dirname(__DIR__, 4).'/app/../config/defines.inc.php'), ($this->services['prestashop.adapter.cache.clearer.class_index_cache_clearer'] ?? ($this->services['prestashop.adapter.cache.clearer.class_index_cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\ClassIndexCacheClearer())));