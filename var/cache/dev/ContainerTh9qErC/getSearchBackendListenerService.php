<?php

namespace ContainerTh9qErC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchBackendListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\SimpleBackendSearchBundle\EventListener\SearchBackendListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\SimpleBackendSearchBundle\EventListener\SearchBackendListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/SimpleBackendSearchBundle/src/EventListener/SearchBackendListener.php';

        $a = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['Pimcore\\Bundle\\SimpleBackendSearchBundle\\EventListener\\SearchBackendListener'])) {
            return $container->privates['Pimcore\\Bundle\\SimpleBackendSearchBundle\\EventListener\\SearchBackendListener'];
        }

        return $container->privates['Pimcore\\Bundle\\SimpleBackendSearchBundle\\EventListener\\SearchBackendListener'] = new \Pimcore\Bundle\SimpleBackendSearchBundle\EventListener\SearchBackendListener($a);
    }
}
