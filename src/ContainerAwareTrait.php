<?php

namespace WonderWp\Component\DependencyInjection;

trait ContainerAwareTrait
{
    /** @var \Pimple\Container */
    protected $container;

    public function setContainer(\Pimple\Container $container)
    {
        $this->container = $container;
    }
}
