<?php

namespace Manuglopez\LaravelWoosubscriptions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Manuglopez\LaravelWoosubscriptions\LaravelWoosubscriptions
 */
class LaravelWoosubscriptions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-woosubscriptions';
    }
}
