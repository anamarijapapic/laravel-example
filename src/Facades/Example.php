<?php

namespace AnamarijaPapic\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AnamarijaPapic\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AnamarijaPapic\Example\Example::class;
    }
}
