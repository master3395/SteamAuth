<?php

namespace Reflex\SteamAuth\Laravel;

use Illuminate\Support\Facades\Facade;

class SteamAuth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'steamauth';
    }
}
