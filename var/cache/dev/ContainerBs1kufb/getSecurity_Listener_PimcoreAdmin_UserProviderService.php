<?php

namespace ContainerBs1kufb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_PimcoreAdmin_UserProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.pimcore_admin.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/UserProviderListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Security/User/UserProvider.php';

        return $container->privates['security.listener.pimcore_admin.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener(($container->services['Pimcore\\Security\\User\\UserProvider'] ??= new \Pimcore\Security\User\UserProvider()));
    }
}
