<?php

namespace Jobcerto\LaravelMoreCommands;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jobcerto\LaravelMoreCommands\Skeleton\SkeletonClass
 */
class LaravelMoreCommandsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-more-commands';
    }
}
