<?php

namespace ContainerH74N9RO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\EmailService' shared autowired service.
     *
     * @return \App\Service\EmailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'EmailService.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['App\\Service\\EmailService'])) {
            return $container->privates['App\\Service\\EmailService'];
        }

        return $container->privates['App\\Service\\EmailService'] = new \App\Service\EmailService($a);
    }
}
