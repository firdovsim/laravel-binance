<?php

use Binance\Binance\Commands\BinanceCommand;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('read config', function () {
    \Pest\Laravel\artisan(BinanceCommand::class);
});
