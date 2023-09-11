<?php

namespace ContainerBs1kufb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_PimcoreApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'monolog.logger.pimcore_api' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['monolog.logger.pimcore_api'] = $instance = new \Symfony\Bridge\Monolog\Logger('pimcore_api');

        $instance->pushProcessor(($container->privates['debug.log_processor'] ?? self::getDebug_LogProcessorService($container)));
        $instance->pushHandler(($container->privates['monolog.handler.console'] ?? self::getMonolog_Handler_ConsoleService($container)));
        $instance->pushHandler(($container->privates['monolog.handler.error'] ?? self::getMonolog_Handler_ErrorService($container)));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? self::getMonolog_Handler_MainService($container)));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }
}
