<?php

namespace ContainerH74N9RO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActivateUserListCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\ActivateUserListCommand' shared autowired service.
     *
     * @return \App\Command\ActivateUserListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ActivateUserListCommand.php';

        $container->privates['App\\Command\\ActivateUserListCommand'] = $instance = new \App\Command\ActivateUserListCommand(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setName('app:activate-user-list');
        $instance->setAliases(['app:enable-user']);
        $instance->setDescription('Activa un usuario.');

        return $instance;
    }
}
