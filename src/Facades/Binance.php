<?php

namespace Binance\Binance\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Binance\Binance\Binance
 */
class Binance extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Binance\Binance\Binance::class;
    }
}
