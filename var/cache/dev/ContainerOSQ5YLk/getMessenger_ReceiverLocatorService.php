<?php

namespace ContainerOSQ5YLk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_ReceiverLocatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.receiver_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'messenger.transport.pimcore_asset_update' => ['privates', 'messenger.transport.pimcore_asset_update', 'getMessenger_Transport_PimcoreAssetUpdateService', true],
            'messenger.transport.pimcore_core' => ['privates', 'messenger.transport.pimcore_core', 'getMessenger_Transport_PimcoreCoreService', true],
            'messenger.transport.pimcore_image_optimize' => ['privates', 'messenger.transport.pimcore_image_optimize', 'getMessenger_Transport_PimcoreImageOptimizeService', true],
            'messenger.transport.pimcore_maintenance' => ['privates', 'messenger.transport.pimcore_maintenance', 'getMessenger_Transport_PimcoreMaintenanceService', true],
            'messenger.transport.pimcore_scheduled_tasks' => ['privates', 'messenger.transport.pimcore_scheduled_tasks', 'getMessenger_Transport_PimcoreScheduledTasksService', true],
            'messenger.transport.pimcore_search_backend_message' => ['privates', 'messenger.transport.pimcore_search_backend_message', 'getMessenger_Transport_PimcoreSearchBackendMessageService', true],
            'pimcore_asset_update' => ['privates', 'messenger.transport.pimcore_asset_update', 'getMessenger_Transport_PimcoreAssetUpdateService', true],
            'pimcore_core' => ['privates', 'messenger.transport.pimcore_core', 'getMessenger_Transport_PimcoreCoreService', true],
            'pimcore_image_optimize' => ['privates', 'messenger.transport.pimcore_image_optimize', 'getMessenger_Transport_PimcoreImageOptimizeService', true],
            'pimcore_maintenance' => ['privates', 'messenger.transport.pimcore_maintenance', 'getMessenger_Transport_PimcoreMaintenanceService', true],
            'pimcore_scheduled_tasks' => ['privates', 'messenger.transport.pimcore_scheduled_tasks', 'getMessenger_Transport_PimcoreScheduledTasksService', true],
            'pimcore_search_backend_message' => ['privates', 'messenger.transport.pimcore_search_backend_message', 'getMessenger_Transport_PimcoreSearchBackendMessageService', true],
        ], [
            'messenger.transport.pimcore_asset_update' => '?',
            'messenger.transport.pimcore_core' => '?',
            'messenger.transport.pimcore_image_optimize' => '?',
            'messenger.transport.pimcore_maintenance' => '?',
            'messenger.transport.pimcore_scheduled_tasks' => '?',
            'messenger.transport.pimcore_search_backend_message' => '?',
            'pimcore_asset_update' => '?',
            'pimcore_core' => '?',
            'pimcore_image_optimize' => '?',
            'pimcore_maintenance' => '?',
            'pimcore_scheduled_tasks' => '?',
            'pimcore_search_backend_message' => '?',
        ]);
    }
}
