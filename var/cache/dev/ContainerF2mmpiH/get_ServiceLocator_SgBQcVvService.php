<?php

namespace ContainerF2mmpiH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SgBQcVvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sgBQcVv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sgBQcVv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'user' => ['privates', '.errored..service_locator.sgBQcVv.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.sgBQcVv": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'manager' => '?',
            'passwordEncoder' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
