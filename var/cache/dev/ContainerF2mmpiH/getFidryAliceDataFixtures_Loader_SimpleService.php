<?php

namespace ContainerF2mmpiH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFidryAliceDataFixtures_Loader_SimpleService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fidry_alice_data_fixtures.loader.simple' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\SimpleLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/SimpleLoader.php';

        return new \Fidry\AliceDataFixtures\Loader\SimpleLoader(($container->services['nelmio_alice.files_loader'] ?? $container->load('getNelmioAlice_FilesLoaderService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
