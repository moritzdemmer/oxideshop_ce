<?php declare(strict_types=1);
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Internal\Container;

use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class BootstrapContainerFactory
{
    /**
     * This is a minimal container that does not need the shop
     * to be installed.
     *
     * @return ContainerInterface
     */
    public static function getBootstrapContainer(): ContainerInterface
    {
        $symfonyContainer = new ContainerBuilder();
        $symfonyContainer->addCompilerPass(new RegisterListenersPass(EventDispatcherInterface::class));
        $loader = new YamlFileLoader($symfonyContainer, new FileLocator(__DIR__));
        $loader->load('bootstrap-services.yaml');
        $symfonyContainer->compile();
        return $symfonyContainer;
    }
}
