<?php

namespace ContainerF2mmpiH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WF5Qv4wService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WF5Qv4w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WF5Qv4w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.V3S_09a', 'get_ServiceLocator_V3S09aService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.A0rcl1e', 'get_ServiceLocator_A0rcl1eService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\TaskAddController::addTask' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\TaskController::index' => ['privates', '.service_locator.EMcv3Xi', 'get_ServiceLocator_EMcv3XiService', true],
            'App\\Controller\\TaskDeleteController::deleteTask' => ['privates', '.service_locator.1_vQP0H', 'get_ServiceLocator_1VQP0HService', true],
            'App\\Controller\\TaskDoneController::index' => ['privates', '.service_locator.EMcv3Xi', 'get_ServiceLocator_EMcv3XiService', true],
            'App\\Controller\\TaskEditController::edit' => ['privates', '.service_locator.1_vQP0H', 'get_ServiceLocator_1VQP0HService', true],
            'App\\Controller\\TaskToggleController::toggleTask' => ['privates', '.service_locator.1_vQP0H', 'get_ServiceLocator_1VQP0HService', true],
            'App\\Controller\\UserEditController::editAction' => ['privates', '.service_locator.sgBQcVv', 'get_ServiceLocator_SgBQcVvService', true],
            'App\\Controller\\UserEditController::index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.V3S_09a', 'get_ServiceLocator_V3S09aService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.A0rcl1e', 'get_ServiceLocator_A0rcl1eService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\TaskAddController:addTask' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\TaskController:index' => ['privates', '.service_locator.EMcv3Xi', 'get_ServiceLocator_EMcv3XiService', true],
            'App\\Controller\\TaskDeleteController:deleteTask' => ['privates', '.service_locator.1_vQP0H', 'get_ServiceLocator_1VQP0HService', true],
            'App\\Controller\\TaskDoneController:index' => ['privates', '.service_locator.EMcv3Xi', 'get_ServiceLocator_EMcv3XiService', true],
            'App\\Controller\\TaskEditController:edit' => ['privates', '.service_locator.1_vQP0H', 'get_ServiceLocator_1VQP0HService', true],
            'App\\Controller\\TaskToggleController:toggleTask' => ['privates', '.service_locator.1_vQP0H', 'get_ServiceLocator_1VQP0HService', true],
            'App\\Controller\\UserEditController:editAction' => ['privates', '.service_locator.sgBQcVv', 'get_ServiceLocator_SgBQcVvService', true],
            'App\\Controller\\UserEditController:index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TaskAddController::addTask' => '?',
            'App\\Controller\\TaskController::index' => '?',
            'App\\Controller\\TaskDeleteController::deleteTask' => '?',
            'App\\Controller\\TaskDoneController::index' => '?',
            'App\\Controller\\TaskEditController::edit' => '?',
            'App\\Controller\\TaskToggleController::toggleTask' => '?',
            'App\\Controller\\UserEditController::editAction' => '?',
            'App\\Controller\\UserEditController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TaskAddController:addTask' => '?',
            'App\\Controller\\TaskController:index' => '?',
            'App\\Controller\\TaskDeleteController:deleteTask' => '?',
            'App\\Controller\\TaskDoneController:index' => '?',
            'App\\Controller\\TaskEditController:edit' => '?',
            'App\\Controller\\TaskToggleController:toggleTask' => '?',
            'App\\Controller\\UserEditController:editAction' => '?',
            'App\\Controller\\UserEditController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
