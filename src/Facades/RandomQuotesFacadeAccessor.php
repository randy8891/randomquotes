<?php

namespace Random\Random\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SampleFacadeAccessor
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class RandomQuotesFacadeAccessor extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Random Quote';
    }
}
