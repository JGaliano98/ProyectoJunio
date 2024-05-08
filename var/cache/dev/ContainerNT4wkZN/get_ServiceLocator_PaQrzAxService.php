<?php

namespace ContainerNT4wkZN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PaQrzAxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.paQrzAx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.paQrzAx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'pdfGenerator' => ['privates', 'App\\Service\\PdfGenerator', 'getPdfGeneratorService', true],
        ], [
            'pdfGenerator' => 'App\\Service\\PdfGenerator',
        ]);
    }
}
