<?php

namespace Otus\Interfaces;

interface RequestInterface
{
    /**
     * Returns value by key name
     *
     * @param string $key
     * @param string|null $default
     *
     * @return string
     */
    public function getParam(string $key, string $default = null): string;
}