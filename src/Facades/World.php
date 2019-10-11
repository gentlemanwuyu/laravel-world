<?php

namespace Wuyu\World\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wuyu\World\World
 */
class World extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'world';
    }
}