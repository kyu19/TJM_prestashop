<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.import.fields_provider.alias' shared service.

return $this->services['prestashop.core.import.fields_provider.alias'] = new \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\AliasFieldsProvider(($this->services['translator'] ?? $this->getTranslatorService()));