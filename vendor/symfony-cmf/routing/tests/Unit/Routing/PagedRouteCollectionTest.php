<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Component\Routing\Tests\Unit\Routing;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Symfony\Cmf\Component\Routing\PagedRouteCollection;
use Symfony\Cmf\Component\Routing\PagedRouteProviderInterface;
use Symfony\Component\Routing\Route;

/**
 * Tests the page route collection.
 *
 * @group cmf/routing
 */
class PagedRouteCollectionTest extends TestCase
{
    /**
     * Contains a mocked route provider.
     *
     * @var PagedRouteProviderInterface&MockObject
     */
    private $routeProvider;

    protected function setUp(): void
    {
        $this->routeProvider = $this->createMock(PagedRouteProviderInterface::class);
    }

    /**
     * Tests iterating a small amount of routes.
     *
     * @dataProvider providerIterator
     */
    public function testIterator(int $amountRoutes, int $routesLoadedInParallel, array $expectedCalls = []): void
    {
        $routes = [];
        for ($i = 0; $i < $amountRoutes; ++$i) {
            $routes['test_'.$i] = new Route("/example-$i");
        }
        $names = array_keys($routes);

        $with = [];
        $will = [];
        foreach ($expectedCalls as $i => $range) {
            $with[] = [$range[0], $range[1]];
            $will[] = array_slice($routes, $range[0], $range[1]);
        }
        $mocker = $this->routeProvider->expects($this->exactly(\count($expectedCalls)))
            ->method('getRoutesPaged');
        \call_user_func_array([$mocker, 'withConsecutive'], $with);
        \call_user_func_array([$mocker, 'willReturnOnConsecutiveCalls'], $will);

        $route_collection = new PagedRouteCollection($this->routeProvider, $routesLoadedInParallel);

        $counter = 0;
        foreach ($route_collection as $route_name => $route) {
            // Ensure the route did not changed.
            $this->assertEquals($routes[$route_name], $route);
            // Ensure that the order did not changed.
            $this->assertEquals($route_name, $names[$counter]);
            ++$counter;
        }
    }

    /**
     * Provides test data for testIterator().
     */
    public function providerIterator(): array
    {
        $data = [];
        // Non total routes.
        $data[] = [0, 20, [[0, 20]]];
        // Less total routes than loaded in parallel.
        $data[] = [10, 20, [[0, 20]]];
        // Exact the same amount of routes then loaded in parallel.
        $data[] = [20, 20, [[0, 20], [20, 20]]];
        // Less than twice the amount.
        $data[] = [39, 20, [[0, 20], [20, 20]]];
        // More total routes than loaded in parallel.
        $data[] = [40, 20, [[0, 20], [20, 20], [40, 20]]];
        $data[] = [41, 20, [[0, 20], [20, 20], [40, 20]]];
        // why not.
        $data[] = [42, 23, [[0, 23], [23, 23]]];

        return $data;
    }

    public function testCount(): void
    {
        $this->routeProvider->expects($this->once())
            ->method('getRoutesCount')
            ->willReturn(12);
        $routeCollection = new PagedRouteCollection($this->routeProvider);
        $this->assertEquals(12, $routeCollection->count());
    }

    /**
     * Tests the rewind method once the iterator is at the end.
     */
    public function testIteratingAndRewind(): void
    {
        $routes = [];
        for ($i = 0; $i < 30; ++$i) {
            $routes['test_'.$i] = new Route("/example-$i");
        }
        $this->routeProvider
            ->method('getRoutesPaged')
            ->willReturnMap([
                [0, 10, array_slice($routes, 0, 10)],
                [10, 10, array_slice($routes, 9, 10)],
                [20, 10, []],
            ]);

        $routeCollection = new PagedRouteCollection($this->routeProvider, 10);

        // Force the iterating process.
        $routeCollection->rewind();
        for ($i = 0; $i < 29; ++$i) {
            $routeCollection->next();
        }
        $routeCollection->rewind();

        $this->assertEquals('test_0', $routeCollection->key());
        $this->assertEquals($routes['test_0'], $routeCollection->current());
    }
}
