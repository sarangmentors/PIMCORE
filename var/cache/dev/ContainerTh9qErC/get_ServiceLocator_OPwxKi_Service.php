<?php

namespace ContainerTh9qErC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OPwxKi_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oPwxKi.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oPwxKi.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'config' => ['services', 'Pimcore\\Config', 'getConfigService', false],
            'csrfProtection' => ['services', 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler', 'getCsrfProtectionHandlerService', false],
            'resetPasswordLimiter' => ['privates', 'limiter.reset_password', 'getLimiter_ResetPasswordService', true],
        ], [
            'config' => 'Pimcore\\Config',
            'csrfProtection' => 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler',
            'resetPasswordLimiter' => '?',
        ]);
    }
}
