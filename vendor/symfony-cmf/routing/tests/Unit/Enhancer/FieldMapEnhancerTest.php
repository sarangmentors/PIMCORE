<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Component\Routing\Tests\Unit\Enhancer;

use PHPUnit\Framework\TestCase;
use Symfony\Cmf\Component\Routing\Enhancer\FieldMapEnhancer;
use Symfony\Component\HttpFoundation\Request;

class FieldMapEnhancerTest extends TestCase
{
    private Request $request;

    private FieldMapEnhancer $enhancer;

    public function setUp(): void
    {
        $this->request = Request::create('/test');
        $mapping = ['static_pages' => 'cmf_content.controller:indexAction'];

        $this->enhancer = new FieldMapEnhancer('type', '_controller', $mapping);
    }

    public function testFieldFoundInMapping(): void
    {
        $defaults = ['type' => 'static_pages'];
        $expected = [
            'type' => 'static_pages',
            '_controller' => 'cmf_content.controller:indexAction',
        ];
        $this->assertEquals($expected, $this->enhancer->enhance($defaults, $this->request));
    }

    public function testFieldAlreadyThere(): void
    {
        $defaults = [
            'type' => 'static_pages',
            '_controller' => 'custom.controller:indexAction',
        ];
        $this->assertEquals($defaults, $this->enhancer->enhance($defaults, $this->request));
    }

    public function testNoType(): void
    {
        $defaults = [];
        $this->assertEquals([], $this->enhancer->enhance($defaults, $this->request));
    }

    public function testNotFoundInMapping(): void
    {
        $defaults = ['type' => 'unknown_route'];
        $this->assertEquals($defaults, $this->enhancer->enhance($defaults, $this->request));
    }
}
