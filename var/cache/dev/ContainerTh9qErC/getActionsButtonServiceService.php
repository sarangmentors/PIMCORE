<?php

namespace ContainerTh9qErC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActionsButtonServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\Service\Workflow\ActionsButtonService' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Service\Workflow\ActionsButtonService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/admin-ui-classic-bundle/src/Service/Workflow/ActionsButtonService.php';

        $a = ($container->services['Pimcore\\Workflow\\Manager'] ?? $container->load('getManagerService'));

        if (isset($container->privates['Pimcore\\Bundle\\AdminBundle\\Service\\Workflow\\ActionsButtonService'])) {
            return $container->privates['Pimcore\\Bundle\\AdminBundle\\Service\\Workflow\\ActionsButtonService'];
        }

        return $container->privates['Pimcore\\Bundle\\AdminBundle\\Service\\Workflow\\ActionsButtonService'] = new \Pimcore\Bundle\AdminBundle\Service\Workflow\ActionsButtonService($a);
    }
}
