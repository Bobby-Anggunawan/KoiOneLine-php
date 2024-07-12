<?php

namespace whiletruewar\koi_one_line\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SampleFacadeAccessor
 *
 * @author  WhileTrueWar  <mahmoud@zalt.me>
 */
class SampleFacadeAccessor extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'koi_one_line.sample';
    }
}
