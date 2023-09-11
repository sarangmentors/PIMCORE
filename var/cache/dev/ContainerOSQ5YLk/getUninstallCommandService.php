<?php

namespace ContainerOSQ5YLk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUninstallCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\Bundle\UninstallCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\Bundle\UninstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Command/Bundle/AbstractBundleCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/src/Command/Bundle/UninstallCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\Bundle\UninstallCommand(($container->services['Pimcore\\Extension\\Bundle\\PimcoreBundleManager'] ?? self::getPimcoreBundleManagerService($container)), ($container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\Helper\\PostStateChange'] ?? $container->load('getPostStateChangeService')));

        $instance->setName('pimcore:bundle:uninstall');

        return $instance;
    }
}
