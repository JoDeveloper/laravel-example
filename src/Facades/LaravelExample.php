<?php

namespace Joseph\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Joseph\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Joseph\LaravelExample\LaravelExample::class;
    }
}
