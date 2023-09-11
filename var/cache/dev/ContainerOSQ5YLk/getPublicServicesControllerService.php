<?php

namespace ContainerOSQ5YLk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublicServicesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\PublicServicesController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\PublicServicesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/Controller/PublicServicesController.php';

        $container->services['Pimcore\\Bundle\\AdminBundle\\Controller\\PublicServicesController'] = $instance = new \Pimcore\Bundle\AdminBundle\Controller\PublicServicesController();

        $instance->setContainer(($container->privates['.service_locator.CgLZdtH'] ?? $container->load('get_ServiceLocator_CgLZdtHService'))->withContext('Pimcore\\Bundle\\AdminBundle\\Controller\\PublicServicesController', $container));

        return $instance;
    }
}
