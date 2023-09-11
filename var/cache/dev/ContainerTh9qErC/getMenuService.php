<?php

namespace ContainerTh9qErC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMenuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Navigation\Renderer\Menu' shared autowired service.
     *
     * @return \Pimcore\Navigation\Renderer\Menu
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Navigation/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Navigation/Renderer/AbstractRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Navigation/Renderer/Menu.php';

        $a = ($container->services['pimcore.templating.engine.delegating'] ?? $container->load('getPimcore_Templating_Engine_DelegatingService'));

        if (isset($container->privates['Pimcore\\Navigation\\Renderer\\Menu'])) {
            return $container->privates['Pimcore\\Navigation\\Renderer\\Menu'];
        }

        return $container->privates['Pimcore\\Navigation\\Renderer\\Menu'] = new \Pimcore\Navigation\Renderer\Menu($a);
    }
}
