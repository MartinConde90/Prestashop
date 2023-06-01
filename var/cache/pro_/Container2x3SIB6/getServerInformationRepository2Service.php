<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository(($this->services['ps_eventbus.context'] ?? $this->load('getPsEventbus_ContextService.php')), ($this->services['ps_eventbus.db'] ?? $this->load('getPsEventbus_DbService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] ?? $this->load('getCurrencyRepositoryService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] ?? $this->load('getShopRepository2Service.php')), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->load('getPsAccountsService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->load('getErrorHandler3Service.php')), ['EVENT_BUS_SYNC_API_URL' => 'https://eventbus-sync.psessentials.net', 'EVENT_BUS_PROXY_API_URL' => 'https://eventbus-proxy.psessentials.net']);
