<?php

namespace ContainerTh9qErC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAbstractExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Twig\Extension\Templating\Placeholder\AbstractExtension' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\Templating\Placeholder\AbstractExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Pimcore\\Twig\\Extension\\Templating\\Placeholder\\AbstractExtension'] = new \Pimcore\Twig\Extension\Templating\Placeholder\AbstractExtension(($container->privates['Pimcore\\Twig\\Extension\\Templating\\Placeholder\\ContainerService'] ??= new \Pimcore\Twig\Extension\Templating\Placeholder\ContainerService()));
    }
}
