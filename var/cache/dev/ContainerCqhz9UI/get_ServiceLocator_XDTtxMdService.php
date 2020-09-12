<?php

namespace ContainerCqhz9UI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XDTtxMdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XDTtxMd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XDTtxMd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['privates', '.errored..service_locator.XDTtxMd.Doctrine\\Persistence\\ObjectManager', NULL, 'Cannot autowire service ".service_locator.XDTtxMd": it references interface "Doctrine\\Persistence\\ObjectManager" but no such service exists. You should maybe alias this interface to the existing "doctrine.orm.default_entity_manager" service.'],
            'request' => ['privates', '.errored..service_locator.XDTtxMd.Symfony\\Component\\BrowserKit\\Request', NULL, 'Cannot autowire service ".service_locator.XDTtxMd": it references class "Symfony\\Component\\BrowserKit\\Request" but no such service exists.'],
        ], [
            'manager' => 'Doctrine\\Persistence\\ObjectManager',
            'request' => 'Symfony\\Component\\BrowserKit\\Request',
        ]);
    }
}
