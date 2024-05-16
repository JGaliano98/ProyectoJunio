<?php

namespace ContainerDLhgM9c;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeactivateUserListCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\DeactivateUserListCommand' shared autowired service.
     *
     * @return \App\Command\DeactivateUserListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DeactivateUserListCommand.php';

        $container->privates['App\\Command\\DeactivateUserListCommand'] = $instance = new \App\Command\DeactivateUserListCommand(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setName('app:deactivate-user-list');

        return $instance;
    }
}
