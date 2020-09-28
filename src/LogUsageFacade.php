<?php

namespace Shiveh\LogUsage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shiveh\LogUsage\Skeleton\SkeletonClass
 */
class LogUsageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'log-usage';
    }
}
