<?php

namespace ContainerWEO8AT0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_UploadHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AbstractHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'UploadHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Injector'.\DIRECTORY_SEPARATOR.'FileInjectorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Injector'.\DIRECTORY_SEPARATOR.'FileInjector.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['vich_uploader.upload_handler'])) {
            return $container->services['vich_uploader.upload_handler'];
        }
        $b = ($container->privates['vich_uploader.storage.file_system'] ?? $container->load('getVichUploader_Storage_FileSystemService'));

        return $container->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(($container->privates['vich_uploader.property_mapping_factory'] ?? $container->load('getVichUploader_PropertyMappingFactoryService')), $b, new \Vich\UploaderBundle\Injector\FileInjector($b), $a);
    }
}
