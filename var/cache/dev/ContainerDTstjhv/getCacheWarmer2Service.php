<?php

namespace ContainerDTstjhv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCacheWarmer2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Vich\UploaderBundle\Metadata\CacheWarmer' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\CacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/CacheWarmer.php';

        return $container->privates['Vich\\UploaderBundle\\Metadata\\CacheWarmer'] = new \Vich\UploaderBundle\Metadata\CacheWarmer(($container->targetDir.''.'/vich_uploader'), ($container->privates['vich_uploader.metadata_reader'] ?? self::getVichUploader_MetadataReaderService($container)));
    }
}
