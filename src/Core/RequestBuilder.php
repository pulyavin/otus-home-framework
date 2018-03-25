<?php

namespace Otus\Core;

use Otus\Interfaces\RequestBuilderInterface;
use Otus\Interfaces\RequestInterface;

class RequestBuilder implements RequestBuilderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getRequest(array $get, array $post): RequestInterface
    {
        // TODO: Implement getRequest() method.
    }
}