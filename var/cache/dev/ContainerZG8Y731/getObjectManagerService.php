<?php

namespace ContainerZG8Y731;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getObjectManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.XDTtxMd.Doctrine\Persistence\ObjectManager' shared service.
     *
     * @return \Doctrine\Persistence\ObjectManager
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.XDTtxMd": it references interface "Doctrine\\Persistence\\ObjectManager" but no such service exists. You should maybe alias this interface to the existing "doctrine.orm.default_entity_manager" service.');
    }
}
