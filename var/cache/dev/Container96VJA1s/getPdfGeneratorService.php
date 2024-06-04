<?php

namespace Container96VJA1s;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPdfGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\PdfGenerator' shared autowired service.
     *
     * @return \App\Service\PdfGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PdfGenerator.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['App\\Service\\PdfGenerator'])) {
            return $container->privates['App\\Service\\PdfGenerator'];
        }

        return $container->privates['App\\Service\\PdfGenerator'] = new \App\Service\PdfGenerator($a, ($container->privates['parameter_bag'] ??= new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)));
    }
}