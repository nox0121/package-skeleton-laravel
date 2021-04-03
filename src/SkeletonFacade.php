<?php

namespace Nox0121\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nox0121\Skeleton\Skeleton
 */
class SkeletonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
