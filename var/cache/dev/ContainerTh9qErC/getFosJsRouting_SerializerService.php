<?php

namespace ContainerTh9qErC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_SerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_js_routing.serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle/Serializer/Normalizer/RouteCollectionNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle/Serializer/Normalizer/RoutesResponseNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle/Serializer/Denormalizer/RouteCollectionDenormalizer.php';

        return $container->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer([new \FOS\JsRoutingBundle\Serializer\Normalizer\RouteCollectionNormalizer(), new \FOS\JsRoutingBundle\Serializer\Normalizer\RoutesResponseNormalizer(), new \FOS\JsRoutingBundle\Serializer\Denormalizer\RouteCollectionDenormalizer()], ['json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()]);
    }
}
