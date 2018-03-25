<?php

namespace Otus\Interfaces;

interface RequestBuilderInterface
{
    /**
     * Returns request by set of get and post arrays
     *
     * @param array $get
     * @param array $post
     *
     * @return RequestInterface
     */
    public function getRequest(array $get, array $post): RequestInterface;
}