<?php

namespace Otus\Interfaces;

use Otus\Exceptions\ControllerNotFoundException;

interface ControllerFactoryInterface
{
    /**
     * Returns controller by request
     *
     * @param RequestInterface $request
     *
     * @return ControllerInterface
     *
     * @throws ControllerNotFoundException
     */
    public function getController(RequestInterface $request): ControllerInterface;
}
