<?php

namespace ContainerX1VPn74;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O6jAZXEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O6jAZXE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O6jAZXE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cart' => ['privates', '.errored..service_locator.O6jAZXE.App\\Entity\\Cart', NULL, 'Cannot autowire service ".service_locator.O6jAZXE": it needs an instance of "App\\Entity\\Cart" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'cart' => 'App\\Entity\\Cart',
            'entityManager' => '?',
        ]);
    }
}
