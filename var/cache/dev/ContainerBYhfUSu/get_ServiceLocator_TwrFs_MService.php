<?php

namespace ContainerBYhfUSu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TwrFs_MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.twrFs.m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.twrFs.m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'batchActionDto' => ['privates', '.errored..service_locator.twrFs.m.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto', NULL, 'Cannot autowire service ".service_locator.twrFs.m": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto" but no such service exists.'],
            'context' => ['privates', '.errored..service_locator.twrFs.m.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.twrFs.m": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
        ], [
            'batchActionDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto',
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
        ]);
    }
}
