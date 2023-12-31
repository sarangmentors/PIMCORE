<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Component\Routing\Enhancer;

use Symfony\Component\HttpFoundation\Request;

/**
 * Functionality to collect and apply route enhancers to a request.
 *
 * @author Tim Plunkett
 * @author Larry Garfield
 * @author David Buchmann
 */
trait RouteEnhancerTrait
{
    /**
     * @var RouteEnhancerInterface[][]
     */
    private array $enhancers = [];

    /**
     * Cached sorted list of enhancers.
     *
     * @var RouteEnhancerInterface[]
     */
    private array $sortedEnhancers = [];

    protected function applyRouteEnhancers(array $defaults, Request $request): array
    {
        foreach ($this->getRouteEnhancers() as $enhancer) {
            $defaults = $enhancer->enhance($defaults, $request);
        }

        return $defaults;
    }

    /**
     * Add route enhancers to the router to let them generate information on
     * matched routes.
     *
     * The order of the enhancers is determined by the priority, the higher the
     * value, the earlier the enhancer is run.
     */
    public function addRouteEnhancer(RouteEnhancerInterface $enhancer, int $priority = 0): static
    {
        if (empty($this->enhancers[$priority])) {
            $this->enhancers[$priority] = [];
        }

        $this->enhancers[$priority][] = $enhancer;
        $this->sortedEnhancers = [];

        return $this;
    }

    /**
     * Sorts the enhancers and flattens them.
     *
     * @return RouteEnhancerInterface[] the enhancers ordered by priority
     */
    public function getRouteEnhancers(): array
    {
        if (0 === count($this->sortedEnhancers)) {
            $this->sortedEnhancers = $this->sortRouteEnhancers();
        }

        return $this->sortedEnhancers;
    }

    /**
     * Sort enhancers by priority.
     *
     * The highest priority number is the highest priority (reverse sorting).
     *
     * @return RouteEnhancerInterface[] the sorted enhancers
     */
    private function sortRouteEnhancers(): array
    {
        if (0 === count($this->enhancers)) {
            return [];
        }

        krsort($this->enhancers);

        return call_user_func_array('array_merge', $this->enhancers);
    }
}
