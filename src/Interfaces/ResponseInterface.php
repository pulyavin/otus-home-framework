<?php

namespace Otus\Interfaces;

interface ResponseInterface
{
    /**
     * Returns data of response
     *
     * @return string
     */
    public function getResponse(): string;
}