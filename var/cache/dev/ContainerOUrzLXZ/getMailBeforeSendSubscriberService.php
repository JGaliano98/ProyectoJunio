<?php

namespace ContainerOUrzLXZ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailBeforeSendSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\MailBeforeSendSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\MailBeforeSendSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'MailBeforeSendSubscriber.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\EventSubscriber\\MailBeforeSendSubscriber'])) {
            return $container->privates['App\\EventSubscriber\\MailBeforeSendSubscriber'];
        }

        return $container->privates['App\\EventSubscriber\\MailBeforeSendSubscriber'] = new \App\EventSubscriber\MailBeforeSendSubscriber($a);
    }
}
