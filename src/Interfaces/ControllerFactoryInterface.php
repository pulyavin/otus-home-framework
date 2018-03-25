<?php

namespace Otus\Interfaces;

interface ControllerFactoryInterface
{
    /**
     * Returns controller by request
     *
     * @param RequestInterface $request
     *
     * @return ControllerInterface
     */
    public function getController(RequestInterface $request): ControllerInterface;
}