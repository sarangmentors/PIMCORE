<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Component\Routing\Tests\Unit\DependencyInjection\Compiler;

use PHPUnit\Framework\TestCase;
use Symfony\Cmf\Component\Routing\DependencyInjection\Compiler\RegisterRoutersPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

class RegisterRoutersPassTest extends TestCase
{
    /**
     * @dataProvider getValidRoutersData
     */
    public function testValidRouters(string $name, ?int $priority = null): void
    {
        $services = [];
        $services[$name] = [0 => ['priority' => $priority]];

        $priority = $priority ?: 0;

        $definition = $this->createMock(Definition::class);
        $definition->expects($this->atLeastOnce())
            ->method('addMethodCall')
            ->with($this->equalTo('add'), $this->callback(function ($arg) use ($name, $priority) {
                if (!$arg[0] instanceof Reference || $name !== $arg[0]->__toString()) {
                    return false;
                }

                if ($priority !== $arg[1]) {
                    return false;
                }

                return true;
            }));

        $builder = $this->createMock(ContainerBuilder::class);
        $builder
            ->method('hasDefinition')
            ->with('cmf_routing.router')
            ->willReturn(true);

        $builder->expects($this->atLeastOnce())
            ->method('findTaggedServiceIds')
            ->willReturn($services);

        $builder->expects($this->atLeastOnce())
            ->method('getDefinition')
            ->willReturn($definition);

        $registerRoutersPass = new RegisterRoutersPass();
        $registerRoutersPass->process($builder);
    }

    public function getValidRoutersData(): array
    {
        return [
            ['my_router'],
            ['my_primary_router', 99],
            ['my_router', 0],
        ];
    }

    /**
     * If there is no chain router defined in the container builder, nothing
     * should be processed.
     */
    public function testNoChainRouter(): void
    {
        $builder = $this->createMock(ContainerBuilder::class);
        $builder->expects($this->once())
            ->method('hasDefinition')
            ->with('cmf_routing.router')
            ->willReturn(false)
        ;

        $builder->expects($this->never())
            ->method('findTaggedServiceIds')
        ;
        $builder->expects($this->never())
            ->method('getDefinition')
        ;

        $registerRoutersPass = new RegisterRoutersPass();
        $registerRoutersPass->process($builder);
    }
}
