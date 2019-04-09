<?php

/*
 * This file is part of the Kimai LduerThemeBundle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KimaiPlugin\LduerThemeBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This class that loads and manages the Kimai configuration and container parameter.
 */
class LduerThemeExtension extends Extension implements PrependExtensionInterface
{
    public function load(array $configs, ContainerBuilder $container)
    {
        try {
            $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
            $loader->load('services.yaml');
        } catch (\Exception $e) {
            echo '[LduerThemeExtension] invalid services config found: ' . $e->getMessage();
        }
    }

    /**
     * Allow an extension to prepend the extension configurations.
     */
    public function prepend(ContainerBuilder $container)
    {
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return 'lduer_theme';
    }
}
