<?php

namespace ContainerTh9qErC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Retry_SendFailedMessageForRetryListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.retry.send_failed_message_for_retry_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/SendFailedMessageForRetryListener.php';

        $a = ($container->privates['.service_locator.6xtPAkX'] ?? $container->load('get_ServiceLocator_6xtPAkXService'));

        if (isset($container->privates['messenger.retry.send_failed_message_for_retry_listener'])) {
            return $container->privates['messenger.retry.send_failed_message_for_retry_listener'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['messenger.retry.send_failed_message_for_retry_listener'])) {
            return $container->privates['messenger.retry.send_failed_message_for_retry_listener'];
        }

        return $container->privates['messenger.retry.send_failed_message_for_retry_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener($a, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'pimcore_asset_update' => ['privates', 'messenger.retry.multiplier_retry_strategy.pimcore_asset_update', 'getMessenger_Retry_MultiplierRetryStrategy_PimcoreAssetUpdateService', true],
            'pimcore_core' => ['privates', 'messenger.retry.multiplier_retry_strategy.pimcore_core', 'getMessenger_Retry_MultiplierRetryStrategy_PimcoreCoreService', true],
            'pimcore_image_optimize' => ['privates', 'messenger.retry.multiplier_retry_strategy.pimcore_image_optimize', 'getMessenger_Retry_MultiplierRetryStrategy_PimcoreImageOptimizeService', true],
            'pimcore_maintenance' => ['privates', 'messenger.retry.multiplier_retry_strategy.pimcore_maintenance', 'getMessenger_Retry_MultiplierRetryStrategy_PimcoreMaintenanceService', true],
            'pimcore_scheduled_tasks' => ['privates', 'messenger.retry.multiplier_retry_strategy.pimcore_scheduled_tasks', 'getMessenger_Retry_MultiplierRetryStrategy_PimcoreScheduledTasksService', true],
            'pimcore_search_backend_message' => ['privates', 'messenger.retry.multiplier_retry_strategy.pimcore_search_backend_message', 'getMessenger_Retry_MultiplierRetryStrategy_PimcoreSearchBackendMessageService', true],
        ], [
            'pimcore_asset_update' => '?',
            'pimcore_core' => '?',
            'pimcore_image_optimize' => '?',
            'pimcore_maintenance' => '?',
            'pimcore_scheduled_tasks' => '?',
            'pimcore_search_backend_message' => '?',
        ]), ($container->services['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')), $b);
    }
}
