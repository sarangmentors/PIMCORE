<?php

namespace ContainerBs1kufb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchBackendReindexCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Pimcore\Bundle\SimpleBackendSearchBundle\Command\SearchBackendReindexCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\SimpleBackendSearchBundle\Command\SearchBackendReindexCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/SimpleBackendSearchBundle/src/Command/SearchBackendReindexCommand.php';

        return $container->services['console.command.public_alias.Pimcore\\Bundle\\SimpleBackendSearchBundle\\Command\\SearchBackendReindexCommand'] = new \Pimcore\Bundle\SimpleBackendSearchBundle\Command\SearchBackendReindexCommand();
    }
}
