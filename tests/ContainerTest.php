<?php

namespace WonderWp\Component\DependencyInjection;

use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{

    public function setUp()
    {

    }

    public function testContainerGetInstanceShouldReturnContainerInstance()
    {
        $this->assertInstanceOf(Container::class, Container::getInstance());

    }

    public function testContainerBuildInstanceShouldReturnContainerInstance()
    {
        $this->assertInstanceOf(Container::class, Container::buildInstance());

    }

    public function testContainerAwareTraitShouldManipulateContainerInstance(){
        $fcac = new FakeContainerAwareClass();
        $fcac->setContainer(Container::getInstance());
        $this->assertInstanceOf(Container::class, $fcac->getContainer());
    }

}

class FakeContainerAwareClass {
    use ContainerAwareTrait;
}
