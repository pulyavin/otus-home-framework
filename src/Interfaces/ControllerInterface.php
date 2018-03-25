<?php

namespace Otus\Interfaces;

interface ControllerInterface
{
    /**
     * Executes request and returns response
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function execute(RequestInterface $request): ResponseInterface;
}