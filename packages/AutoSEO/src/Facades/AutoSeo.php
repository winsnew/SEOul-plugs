<?php

namespace AutoSEO\Facades;

use Illuminate\Support\Facades\Facade;

class AutoSEO extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'autoseo';
    }
}