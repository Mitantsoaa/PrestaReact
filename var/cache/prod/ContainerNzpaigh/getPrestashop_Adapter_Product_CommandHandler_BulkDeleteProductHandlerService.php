<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.command_handler.bulk_delete_product_handler' shared service.

return $this->services['prestashop.adapter.product.command_handler.bulk_delete_product_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\BulkDeleteProductHandler(${($_ = isset($this->services['prestashop.adapter.product.repository.product_repository']) ? $this->services['prestashop.adapter.product.repository.product_repository'] : $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')) && false ?: '_'});
