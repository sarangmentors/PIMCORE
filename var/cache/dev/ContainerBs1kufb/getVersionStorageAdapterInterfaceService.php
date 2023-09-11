<?php

namespace ContainerBs1kufb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVersionStorageAdapterInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Model\Version\Adapter\VersionStorageAdapterInterface' shared autowired service.
     *
     * @return \Pimcore\Model\Version\Adapter\FileSystemVersionStorageAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/Version/Adapter/VersionStorageAdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/Version/Adapter/FileSystemVersionStorageAdapter.php';

        return $container->services['Pimcore\\Model\\Version\\Adapter\\VersionStorageAdapterInterface'] = new \Pimcore\Model\Version\Adapter\FileSystemVersionStorageAdapter();
    }
}
