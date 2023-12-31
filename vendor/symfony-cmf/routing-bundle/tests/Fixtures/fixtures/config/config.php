<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$container->loadFromExtension('cmf_routing', [
    'chain' => [
        'routers_by_id' => [
            'cmf_routing.router' => 300,
            'router.default' => 100,
        ],
        'replace_symfony_router' => true,
    ],
    'dynamic' => [
        'generic_controller' => 'acme_main.controller:mainAction',
        'controllers_by_type' => [
            'editable' => 'acme_main.some_controller:editableAction',
        ],
        'controllers_by_class' => [
            'Symfony\Cmf\Bundle\ContentBundle\Document\StaticContent' => 'cmf_content.controller:indexAction',
        ],
        'templates_by_class' => [
            'Symfony\Cmf\Bundle\ContentBundle\Document\StaticContent' => 'CmfContentBundle:StaticContent:index.html.twig',
        ],
        'persistence' => [
            'phpcr' => [
                'route_basepaths' => [
                    '/cms/routes',
                    '/simple',
                ],
                'enable_initializer' => true,
            ],
        ],
        'locales' => ['en', 'fr'],
        'auto_locale_pattern' => true,
        'match_implicit_locale' => true,
        'redirectable_url_matcher' => false,
    ],
]);
