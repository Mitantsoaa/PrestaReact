<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.import.fields_provider.address' shared service.

return $this->services['prestashop.core.import.fields_provider.address'] = new \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\AddressFieldsProvider(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
