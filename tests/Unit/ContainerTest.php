<?php

declare(strict_types=1);

namespace WonderWp\Component\DependencyInjection\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WonderWp\Component\DependencyInjection\Container;
use WonderWp\Component\DependencyInjection\Tests\Fixtures\FakeContainerAwareClass;

class ContainerTest extends TestCase
{
    protected function setUp(): void
    {
    }

    public function testContainerGetInstanceShouldReturnContainerInstance(): void
    {
        $this->assertInstanceOf(Container::class, Container::getInstance());
    }

    public function testContainerBuildInstanceShouldReturnContainerInstance(): void
    {
        $this->assertInstanceOf(Container::class, Container::buildInstance());
    }

    public function testContainerAwareTraitShouldManipulateContainerInstance(): void
    {
        $fcac = new FakeContainerAwareClass();
        $fcac->setContainer(Container::getInstance());
        $this->assertInstanceOf(Container::class, $fcac->getContainer());
    }
}
