<?php

namespace ContainerDLhgM9c;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UOI9KGNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UOI9KGN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UOI9KGN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'emailSender' => ['privates', 'App\\Service\\EmailService', 'getEmailServiceService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'pdfGenerator' => ['privates', 'App\\Service\\PdfGenerator', 'getPdfGeneratorService', true],
        ], [
            'emailSender' => 'App\\Service\\EmailService',
            'mailer' => '?',
            'pdfGenerator' => 'App\\Service\\PdfGenerator',
        ]);
    }
}
