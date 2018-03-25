<?php

namespace Otus\Core;

use Otus\Interfaces\ControllerFactoryInterface;
use Otus\Interfaces\ControllerInterface;
use Otus\Interfaces\RequestInterface;

class ControllerFactory implements ControllerFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getController(RequestInterface $request): ControllerInterface
    {
        // TODO: Implement getController() method.
    }
}