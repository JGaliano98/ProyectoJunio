<?php

namespace ContainerXbeKPhT;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActivateUserListCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\ActivateUserListCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.App\\Command\\ActivateUserListCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:activate-user-list', ['app:enable-user'], 'Activa un usuario.', false, #[\Closure(name: 'App\\Command\\ActivateUserListCommand')] fn (): \App\Command\ActivateUserListCommand => ($container->privates['App\\Command\\ActivateUserListCommand'] ?? $container->load('getActivateUserListCommandService')));
    }
}
