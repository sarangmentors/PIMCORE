<?php

namespace ContainerOSQ5YLk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_AccessListener_TwoFactor_PimcoreAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.access_listener.two_factor.pimcore_admin' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\Firewall\TwoFactorAccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Http/Firewall/TwoFactorAccessListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/Authorization/TwoFactorAccessDecider.php';

        $a = ($container->privates['debug.security.access.decision_manager'] ?? self::getDebug_Security_Access_DecisionManagerService($container));

        if (isset($container->privates['security.authentication.access_listener.two_factor.pimcore_admin'])) {
            return $container->privates['security.authentication.access_listener.two_factor.pimcore_admin'];
        }
        $b = ($container->privates['security.logout_url_generator'] ?? self::getSecurity_LogoutUrlGeneratorService($container));

        if (isset($container->privates['security.authentication.access_listener.two_factor.pimcore_admin'])) {
            return $container->privates['security.authentication.access_listener.two_factor.pimcore_admin'];
        }

        return $container->privates['security.authentication.access_listener.two_factor.pimcore_admin'] = new \Scheb\TwoFactorBundle\Security\Http\Firewall\TwoFactorAccessListener(($container->privates['security.firewall_config.two_factor.pimcore_admin'] ?? self::getSecurity_FirewallConfig_TwoFactor_PimcoreAdminService($container)), ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), new \Scheb\TwoFactorBundle\Security\Authorization\TwoFactorAccessDecider(($container->privates['security.access_map'] ?? $container->load('getSecurity_AccessMapService')), $a, ($container->privates['security.http_utils'] ?? self::getSecurity_HttpUtilsService($container)), $b));
    }
}
