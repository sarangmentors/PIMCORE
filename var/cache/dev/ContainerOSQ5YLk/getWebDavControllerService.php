<?php

namespace ContainerOSQ5YLk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebDavControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\CoreBundle\Controller\WebDavController' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Controller\WebDavController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Controller/WebDavController.php';

        $container->services['Pimcore\\Bundle\\CoreBundle\\Controller\\WebDavController'] = $instance = new \Pimcore\Bundle\CoreBundle\Controller\WebDavController();

        $instance->setContainer(($container->privates['.service_locator.CgLZdtH'] ?? $container->load('get_ServiceLocator_CgLZdtHService'))->withContext('Pimcore\\Bundle\\CoreBundle\\Controller\\WebDavController', $container));

        return $instance;
    }
}
